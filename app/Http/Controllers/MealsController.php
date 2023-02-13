<?php

namespace App\Http\Controllers;

use App\Models\Meals;
use Illuminate\Http\Request;

class MealsController extends Controller
{
    
    public function index()
    {
        $data = Meals::all() ;
        return $data ;
    }


    public function create()
    {
                
    }

  
    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

  
    public function destroy($id)
    {
        //
    }
}
