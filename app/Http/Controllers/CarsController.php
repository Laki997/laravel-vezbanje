<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarsController extends Controller
{
    
    public function index(){

        $cars = Car::all();
        return view('cars',compact('cars'));
    }

    public function show($id){
        $car = Car::find($id);
        return view('car',compact('car'));
    }


    public function doors(){
        $cars = Car::numDoors()->get();

        return view('doors',compact('cars'));
    }
}
