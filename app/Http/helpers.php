<?php

use App\Http\Controllers\CmsController;
use Illuminate\Support\Carbon;

if (! function_exists('getImage')) {
    function getImage($id, $mime, $w = false, $q = 80, $o = 0) {
        $cms = new CmsController;
        return $cms->image($id, $mime, $w, $q, $o)->send(json: false);
    }
}

if (! function_exists('getBladeString')) {
    function getBladeString($string): array|string
    {
        $replaced = str_replace(['<p', '<h1', '</p>', '</h1>', '<li', '</li>', '<ul', '</ul>', '<h2', '</h2>', '<h3', '</h3>', '<a', '</a>'], ['<x-p', '<x-h1', '</x-p>', '</x-h1>', '<x-li', '</x-li>', '<x-ul', '</x-ul>', '<x-h2', '</x-h2>', '<x-h3', '</x-h3>', '<x-a', '</x-a>'], $string);
        return str_replace('<x-a title="hektor" href="/content/singleton/item/hektor()">', '<x-a onclick="hektor()">', $replaced);
    }
}

if (! function_exists('getDayOfDate')) {
    function getDayOfDate($date) {
        $day = Carbon::parse($date);
        return $day->day;
    }
}

if (! function_exists('getDayNameOfDate')) {
    function getDayNameOfDate($date) {
        $day = Carbon::parse($date);
        return $day->dayName;
    }
}

if (! function_exists('getMonthOfDate')) {
    function getMonthOfDate($date) {
        $day = Carbon::parse($date);
        return $day->month;
    }
}

if (! function_exists('getMonthNameOfDate')) {
    function getMonthNameOfDate($date) {
        $day = Carbon::parse($date);
        return $day->locale('de')->translatedFormat('F');
    }
}

if (! function_exists('getTimeOfDate')) {
    function getTimeOfDate($date) {
        $day = Carbon::parse($date);
        return $day->locale('de')->translatedFormat('H:i');
    }
}

if (! function_exists('isCurrentMonth')) {
    function isCurrentMonth($date){
        return Carbon::parse($date)->isCurrentMonth();
    }
}

if (! function_exists('compareMonthNames')) {
    function compareMonthNames($monthName){
        if(getMonthNameOfDate(now()) === $monthName){
            return 'true';
        }
        return 'false';
    }
}
