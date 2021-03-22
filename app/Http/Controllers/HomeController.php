<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Home;

class HomeController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function alldata(){
        $datas=Home::all()->toArray();
        // print_r($datas);
       return view('totalrecord', compact('datas'));
    }
    public function store(request $Request)
    {

    $Request->validate([
    'name' => 'required',
    'title' => 'required',
    'description' => 'required|max:2000',
    'image_name' => 'required',
]);
        $file = $Request->file('image_name');

        $clinetfile = $file->getClientOriginalName();
        $destinationPath = 'uploads';
        $file->move($destinationPath,$file->getClientOriginalName());

        $data = new Home;
        $data->name = $Request->name;
        $data->title = $Request->title;
        $data->description = $Request->description;
        $data->image_name = $clinetfile; 
        if($data->save()){
             Session::flash('status', 'Data Added Successfully!');
            return redirect('viewall');
        }

       
    }
    public function viewdata(){
         $datas=Home::all()->toArray();
        return view('news', compact('datas'));
    }
    public function update(request $Request)
    {

    $Request->validate([
    'name' => 'required',
    'title' => 'required',
    'description' => 'required|max:2000',
    'image_name' => 'required',
]);
        $file = $Request->file('image_name');

        $clinetfile = $file->getClientOriginalName();
        $destinationPath = 'uploads';
        $file->move($destinationPath,$file->getClientOriginalName());

        $data = new Home;
        $data = Home::find($Request->id);
        $data->name = $Request->name;
        $data->title = $Request->title;
        $data->description = $Request->description;
        $data->image_name = $clinetfile; 
        if($data->save()){
            Session::flash('status', 'File Updated!');
            return redirect('viewall');
        }

    }
    public function destory($id)
    {
        $data = Home::find($id);
        if($data->delete()){
            Session::flash('status', 'File Deleted!');
            return redirect('viewall');
       }
    }
    public function edit($id)
    {
        $data = Home::find($id);
       
        return view('updatedata',compact('data'));
    }
}
