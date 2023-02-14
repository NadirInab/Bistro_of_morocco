<?php

namespace App\Http\Controllers;

use App\Models\Meals;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http ;

class MealsController extends Controller
{
    
    public function index()
    {
        $meals = Meals::paginate(6) ;
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
            'image' => $req->file('image')->getClientOriginalName() 
        ]  ;
        // $path = $req->file('image')->store('public/images');
        // $imageName = time().'.'.$req->image->extension(); 
        $req->image->move(public_path('images'), $data['image']);
        Meals::create($data) ;
        return redirect('/dashboard') ;
    }

    public function show($id)
    {
        $meal = Meals::find($id) ;
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
            'image'=> $req->file('image')->getClientOriginalName() 
        ] ;
        $req->image->move(public_path('images'), $data['image']);
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

    public function getApiData(){
        $meals =  Http::get('www.themealdb.com/api/json/v1/1/search.php?s=Arrabiata')->json() ;
        print_r($meals['meals']->idMeal) ;
        dd('here') ; 
        return view('meals')->with('meals', $meals) ;
    }
}
