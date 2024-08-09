<?php

namespace App\Http\Controllers;

use App\Http\Utilities\CockpitApiClient;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class PageController extends Controller
{

    public function messages()
    {
        $cms = new CockpitApiClient;
        $messages = $cms->model('messages')->result();

        return view('welcome', [
            'messages' => $messages
        ]);
    }

}
