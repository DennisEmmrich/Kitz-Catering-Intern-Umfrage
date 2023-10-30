<?php

namespace App\Http\Controllers;

use App\Http\Utilities\CockpitApiClient;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class PageController extends Controller
{

    public function recipes()
    {
        $cms = new CockpitApiClient;
        $categories = $cms->model('recipesCategories')->result();

        return view('rezepte', [
            'categories' => $categories
        ]);
    }

    public function category($slug)
    {
        $cms = new CockpitApiClient;
        $category = $cms->model('recipesCategories')->filter('slug', '=', $slug)->result();
        $recipes = $cms->model('recipes')->filter('category._id', '=', $category[0]['_id'])->populate()->result();

        return view('category', [
            'recipes' => $recipes
        ]);
    }

    public function ansprechpartner()
    {
        $cms = new CockpitApiClient;
        $contacts = $cms->model('contacts')->result();

        return view('ansprechpartner', [
            'contacts' => $contacts
        ]);
    }

    public function operatingInstructions()
    {
        $cms = new CockpitApiClient;
        $operatingInstructions = $cms->model('operatingInstructions')->result();

        return view('betriebsanweisungen', [
            'operatingInstructions' => $operatingInstructions
        ]);
    }

    public function manuals()
    {
        $cms = new CockpitApiClient;
        $manuals = $cms->model('manuals')->result();

        return view('gebrauchsanweisungen', [
            'manuals' => $manuals
        ]);
    }
}
