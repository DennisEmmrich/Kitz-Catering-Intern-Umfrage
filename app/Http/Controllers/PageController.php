<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome()
    {
        $cms = new CmsController;

        $recipes = $cms->modelContent('recipes')->result();
        return view('welcome', [
            'recipes' => $recipes
        ]);
    }

    public function belegtebrötchen()
    {
        $cms = new CmsController;

        $recipes = $cms->modelContent('recipes')->result();
        return view('belegte-brötchen', [
            'recipes' => $recipes
        ]);
    }
}
