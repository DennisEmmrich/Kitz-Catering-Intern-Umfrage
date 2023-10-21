<?php

namespace App\Http\Controllers;

use http\Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CmsController extends Controller
{
    protected mixed $api;
    protected mixed $apiKey;
    public string $query;
    public mixed $result;
    public array $errors = [];

    function __construct()
    {
        $this->api = config('services.cms.api');
        $this->apiKey = config('services.cms.key');
    }
    public function modelContent($model, $filter = false, $id = false, $singleton = false, $sort = false, $limit = false, $populate = false)
    {
        if($id || $singleton){
            $api_endpoint = $this->api.'/content/item/'.$model.'/'.$id;
        }else {
            $api_endpoint = $this->api.'/content/items/'.$model;
        }

        $filter ? $filterEncoded = '?filter='.urlencode($filter) : $filterEncoded = '';

        if($limit){
            $id ? $operator = '&' : $operator = '?';
            $limit = $operator.'limit='.$limit;
        }else {
            $limit = '';
        }

        if($sort){
            $sort_data = collect([
                $sort => 1
            ])->toJson();

            ($id || $limit || $filter) ? $operator = '&' : $operator = '?';

            $sort = $operator.'sort='.urlencode($sort_data);
        }else {
            $sort = '';
        }

        if($populate) {
            ($filter || $limit || $id) ? $operator = '&' : $operator = '?';
            $populate = $operator . 'populate=1';
        }else {
            $populate = '';
        }

        $this->query = $api_endpoint.$filterEncoded.$limit.$sort.$populate;
        return $this;
    }

    public function page($route)
    {
        $this->query = $this->api.'/pages/page?route='.urlencode($route);
        return $this;
    }

    public function image($id, $mime, $w = false, $q = false, $o = 0)
    {
        $query = $this->api.'/assets/image/'.$id;
        $url = '?mime='.$mime;

        ($w) ? $url.= '&w='.$w : '';
        ($q) ? $url.= '&q='.$q : '';
        ($o) ? $url.= '&o='.$o : '';

        $this->query = $query.$url;
        return $this;
    }

    public function send($json = true)
    {
        $response = Http::withHeaders([
            'api-key' => $this->apiKey
        ])->get($this->query);

        if ($json) {
            $response = $response->json();
        } else {
            $response = $response->body();
        }

        if(!empty($response['error'])){
            $this->errors = $response;
            return false;
        }

        return $response;
    }

    public function result()
    {
        return $this->send();
    }
}

