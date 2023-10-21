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

    public function rezepte()
    {
        $cms = new CmsController;

        $recipes = $cms->modelContent('recipes')->result();
        return view('rezepte', [
            'recipes' => $recipes
        ]);
    }
}
