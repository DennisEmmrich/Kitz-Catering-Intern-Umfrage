<?php

namespace App\Http\Utilities;

use Illuminate\Support\Facades\Http;

class CockpitApiClient
{
    public array $errors = [];

    protected string $cmsUrl;

    protected string $apiKey;

    protected string $query = '';

    protected ?string $options = null;

    public function __construct()
    {
        $this->cmsUrl = config('services.cms.api');
        $this->apiKey = config('services.cms.key');

        if (empty($this->cmsUrl) || empty($this->apiKey)) {
            throw new \InvalidArgumentException('CMS URL and API key must be configured in services.cms');
        }
    }

    public function model(string $name, int $id = 0): self
    {
        $this->query = $id
            ? $this->cmsUrl.'/content/item/'.$name.'/'.$id
            : $this->cmsUrl.'/content/items/'.$name;

        return $this;
    }

    public function fields(...$fields): self
    {
        $fieldsArray = array_fill_keys($fields, 1);
        $this->addToQuery('fields='.urlencode(json_encode($fieldsArray)));

        return $this;
    }

    protected function addToQuery($string): void
    {
        $this->options .= (empty($this->options) ? '?' : '&').$string;
    }

    public function filter(string $key, string $operator, mixed $value): self
    {
        if (! in_array($operator, ['=', '!=', '%'])) {
            throw new \InvalidArgumentException('Invalid operator provided');
        }

        switch ($operator) {
            case '=':
                $filter = [
                    $key => [
                        '$in' => is_array($value) ? $value : [$value],
                    ],
                ];
                break;
            case '!=':
                $filter = [
                    $key => [
                        '$nin' => is_array($value) ? $value : [$value],
                    ],
                ];
                break;
            case '%':
                $filter = [
                    $key => [
                        '$regex' => (string) $value,
                        '$options' => 'i',
                    ],
                ];
                break;
        }

        $this->addToQuery('filter='.urlencode(json_encode($filter)));

        return $this;
    }

    public function sortBy(string $key, string $sortOrder = 'asc'): self
    {
        $sortData = [
            $key => $sortOrder === 'asc' ? 1 : -1,
        ];

        $this->addToQuery('sort='.urlencode(json_encode($sortData)));

        return $this;
    }

    public function limit(int $int): self
    {
        $this->addToQuery('limit='.$int);

        return $this;
    }

    public function populate(int $depth = 1): self
    {
        $this->addToQuery('populate='.$depth);

        return $this;
    }

    public function page($route): void
    {
        $this->options = null;
        $this->query = $this->cmsUrl.'/pages/page?route='.urlencode($route);
    }

    public function image($id, $mime, $w = false, $q = false, $o = 0): self
    {
        $query = $this->cmsUrl.'/assets/image/'.$id;
        $params = [
            'mime' => $mime,
            'w' => $w,
            'q' => $q,
            'o' => $o,
        ];
        $queryString = http_build_query(array_filter($params));

        $this->options = null;
        $this->query = $query.'?'.$queryString;

        return $this;
    }

    public function result()
    {
        return $this->send();
    }

    public function send(bool $json = true)
    {
        $response = Http::withHeaders([
            'api-key' => $this->apiKey,
        ])->get($this->buildQueryString());
        $responseArray = $response->json();

        $responseData = $json ? $responseArray : $response->body();

        if (! empty($responseArray['error'])) {
            throw new \Exception('Error from CMS: '.$responseArray['error']);
        }

        return $responseData;
    }

    protected function buildQueryString(): string
    {
        return $this->query.($this->options ?? '');
    }
}
