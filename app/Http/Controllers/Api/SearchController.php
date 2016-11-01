<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Page;

class SearchController extends Controller
{
    //
	/*public function index(Request $request)
    {
		//echo '<pre>'; print_r($request->all()); die;
    	if($request->has('q')) {

            
            $items = Page::search($request->get('q'))->get();

           
            return $items->count() ? $items : $error;

        }
    	return view('item-search',compact('items'));
    }*/
	
	public function search(Request $request)
    {
        //echo '<pre>'; print_r($request->all()); die;
		
		if($request->has('q')) {
			$pages = Page::search($request->get('q'))->get();

           
            //return $items->count() ? $items : $error;
			
			return view('search',compact('pages'));
			
		}
		
		//return view('item-search',compact('items'));
    }
}
