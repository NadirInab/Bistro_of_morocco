<?php

namespace App\Http\Controllers;

use App\Models\Meals;
use Illuminate\Http\Request;

class MealsController extends Controller
{
    
    public function index()
    {
        $meals = Meals::all() ;
        // dd($meals) ;
        return view('welcome')->with('meals', $meals) ;
    }

    public function create()
    {
             return view('save') ;   
    }

    public function store(Request $req)
    {
        $req->validate([
            'title' => 'required',
            'price'=>'required',
            'description'=>'required',
            'image'=>'required',
        ]) ;
        $data = [
            'title' => $req->input('title'),
            'price'=> $req->input('price'),
            'description' => $req->input('description'),
            'image' => $req->input('image')
        ]  ;
        Meals::create($data) ;
        return redirect('/dashboard') ;
    }

    public function show($id)
    {
        $meal = Meals::find($id) ;
        // dd($meal) ;
        return view('show')->with('meal', $meal) ;
    }


    public function edit($id)
    {
        $meal = Meals::find($id) ;
        return view('edit')->with('meal', $meal) ;
    }


    public function update(Request $req, $id)
    {
        $req->validate([
            'title' => 'required', 
            'price'=> 'required',
            'description' => 'required', 
            'image'=> 'required'
        ]) ;
        $data = [
            'title'=> $req->input('title'), 
            'price' => $req->input('price') ,
            'description'=> $req->input('description'),
            'image'=> $req->input('image') 
        ] ;
        Meals::where('id', $id)->update($data) ;
        return redirect('/dashboard') ;
    }

    public function destroy($id)
    {
        $meal = Meals::find($id) ;
        $meal->delete() ;
        return redirect('/dashboard') ;
    }

    public function search(){
        $search = $_GET['query'] ;
        $meals = Meals::where('title', 'LIKE', '%'.$search.'%')->get() ;
        return view('search')->with('meals', $meals) ;
    }
}
