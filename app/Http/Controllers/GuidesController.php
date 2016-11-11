<?php namespace App\Http\Controllers;

use View;
use App\guide;
use App\area;

class GuidesController extends Controller {

public function ShowAll() {
    $guides = Guide::orderBy('id')->paginate(10);

    return View::make('pages.guides')
               ->with('guides', $guides);
}        


public function ShowByGuidesSlug($guidesslug){
    $guidesslugs = Guide::where('guidesslug', $guidesslug)->get()->first();


    return View::make('pages.guides')
               ->with('guidesslugs', $guidesslugs);
               dd($guidesslugs);
		}
	}
