<?php

use App\Http\Utilities\CockpitApiClient;

if (! function_exists('getImage')) {
    function getImage($id, $mime, $w = false, $q = 80, $o = 0) {
        $cms = new CockpitApiClient;
        return $cms->image($id, $mime, $w, $q, $o)->send(json: false);
    }
}

if (! function_exists('cmsImagePath')) {
    function cmsImagePath($path): string
    {
        return config('services.cms.storage_url').$path;
    }
}

if (! function_exists('getBladeString')) {
    function getBladeString($string): array|string
    {
        return str_replace(['<p', '<h1', '</p>', '</h1>', '<li', '</li>', '<ul>', '</ul>', '<h2', '</h2>', '<h3', '</h3>', '<a', '</a>'], ['<x-p', '<x-h1', '</x-p>', '</x-h1>', '<x-icon-and-text type="wide"', '</x-icon-and-text>', '', '', '<x-h2', '</x-h2>', '<x-h3', '</x-h3>', '<x-a', '</x-a>'], $string);
    }
}

