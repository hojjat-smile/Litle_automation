<?php

namespace App\Http\Controllers;

use App\Models\ostan;
use Illuminate\Http\Request;

class CountryController extends Controller
{

    //     Ostan Functions
    public function ostan(){
        return view("admin.customers.customers");
    }

    public function add_ostan(){
        return view("admin.customers.customers");
    }

    public function add_ostan_save(Request $request){
        return view("admin.customers.customers");
    }

    public function edit_ostan($ostan){
        return view("admin.customers.customers");
    }

    public function update_ostan(Request $request){
        return view("admin.customers.customers");
    }

    public function delete_ostan($ostan){
        return view("admin.customers.customers");
    }

//   City Functions

    public function city(){
        return view("admin.customers.customers");
    }

    public function add_city(){
        $ostan = ostan::all();
        return view("admin.city.add-city",compact("ostan"));
    }

    public function add_city_save(Request $request){
        return view("admin.customers.customers");
    }

    public function edit_city($city){
        return view("admin.customers.customers");
    }

    public function update_city(Request $request){
        return view("admin.customers.customers");
    }

    public function delete_city($city){
        return view("admin.customers.customers");
    }

//    Position Functions

    public function position(){
        return view("admin.customers.customers");
    }

    public function add_position(){
        return view("admin.customers.customers");
    }

    public function add_position_save(Request $request){
        return view("admin.customers.customers");
    }

    public function edit_position($position){
        return view("admin.customers.customers");
    }

    public function update_position(Request $request){
        return view("admin.customers.customers");
    }

    public function delete_position($position){
        return view("admin.customers.customers");
    }

}
