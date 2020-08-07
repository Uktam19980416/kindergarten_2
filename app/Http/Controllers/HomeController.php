<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Gallery;
use App\Models\Services;
use App\Models\Team;
use Illuminate\Http\Request;
use App\Http\Requests\CreateContactsRequest;
use App\Models\Contacts;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        $abouts = About::orderBy('id', 'desc')->get();
        return view('about')->with('abouts', $abouts);
    }
    public function team()
    {
        $teams = Team::orderBy('id', 'desc')->get();
        return view('team')->with('teams', $teams);
    }
    public function gallery()
    {
        $galleries = Gallery::orderBy('id', 'desc')->get();
        return view('gallery')->with('galleries', $galleries);
    }
    public function service()
    {
        return view('service');
    }
    public function contact()
    {
        return view('contact');
    }
    public function newsfullpage($id){
        $news = About::where('id', $id)->first();
        return view('abouts.newsfullpage')->with('news', $news);
    }
    public function stores(CreateContactsRequest $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email'
        ]);
        $contacts = new Contacts();
        $contacts->name = $request->input('name');
        $contacts->email = $request->input('email');
        $contacts->message = $request->input('message');
        $contacts->save();
        return redirect('contact')->with('success', "Ma'lumotlaringiz qabul qilindi!");
    }
}
