<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use Session;

class PagesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
	 
	/* Function to show list of pages */
	
    public function index(Request $request)
    {
		$pages= Page::orderBy('id','DESC')->paginate(5);
        return view('list',compact('pages'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
			
    }
	public function add()
    {
		//$pages = Page::find('all');
		//$pages = Page::orderBy('id','DESC')->paginate(5);
		//$pages = Page::orderBy('id')->get();
		$pages = Page::all();
		//echo '<pre>'; print_r($pages); die('here');
        //return view('add');
		
		return View('add', compact('pages'));
    }
	
	/* Function to add new page */
	
	public function store(Request $request)
    {
		$input = $request->all();
		//echo '<pre>'; print_r($input); die;
		Page::create($input);
        //return view('list');
		
		return redirect()->back();
    }
	
	public function edit($id)
    {
		$page= Page::find($id);
		$pages = Page::all();
        return view('edit',compact('page','pages'));
    }
	
	/* Function to update a page */
	public function update(Request $request, $id)
    {
        Page::find($id)->update($request->all());
						
		Session::flash('flash_message', 'Page updated successfully');

		return redirect()->back();
    }
	
	/* Function to delete a page */
	
	public function delete_page($id)
	{
		Page::find($id)->delete();

		Session::flash('flash_message', 'Page successfully deleted!');

		return redirect()->back();
	}
}
