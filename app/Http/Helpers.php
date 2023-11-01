<?php

use App\Http\Utilities\CockpitApiClient;

if (! function_exists('getImage')) {
    function getImage($id, $mime, $w = false, $q = 80, $o = 0)
    {
        $cms = new CockpitApiClient;
        return $cms->image($id, $mime, $w, $q, $o)->send(json: false);
    }
}

if (! function_exists('getAsset')) {
    function getAsset($id) {
        $cms = new CockpitApiClient;
        $result = $cms->asset($id)->send();
        return config('services.cms.cms_asset_url').$result['path'];
    }
}

if (! function_exists('cmsImagePath')) {
    function cmsImagePath($path): string
    {
        return config('services.cms.cms_asset_url').$path;
    }
}

if (! function_exists('getBladeString')) {
    function getBladeString($string): array|string
    {
        return str_replace(['<p', '</p>', '<h1', '</h1>', '<li', '</li>', '<ul>', '</ul>', '<h2', '</h2>', '<h3', '</h3>', '<a', '</a>'], ['<x-p', '</x-p>', '<x-h1', '</x-h1>', '<x-h2', '</x-h2>', '<x-h3', '</x-h3>', '<x-a', '</x-a>'], $string);
    }
}

