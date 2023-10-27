<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function belegtebrötchen()
    {
        $cms = new CmsController;

        $recipes = $cms->modelContent('recipes')->result();
        return view('belegte-brötchen', [
            'recipes' => $recipes
        ]);
    }

    public function ansprechpartner()
    {
        $cms = new CmsController;

        $contacts = $cms->modelContent('contacts')->result();
        return view('ansprechpartner', [
            'contacts' => $contacts
        ]);
    }
}
