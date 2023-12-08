<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\FoodItem;

class FoodItemController extends Controller
{
    public function index(){
        $foods = DB::table('food_items')->get();
        return view('food.view_foodItems',['data'=> $foods]);
    }

    public function addFoodItems(Request $request){
        $foods = [];
        $foods['food_name'] = $request->food_name;
        $foods['food_description']  =$request->food_description;
        $foods['food_expiry_date']  =$request->food_expiry_date;
        $foods['food_quantity']  =$request->food_quantity;
        $request = DB::table('food_items')->insert([$foods]);
        if ($request) {
            return redirect()->route('view_foodItems');
        }
    }

    public function editFoodItmes(Request $request, $id)
    {
        $food = DB::table('food_Items')->find($id);
        return  view('food.edit_foodItems',['data'=> $food]);
    }

    public function updateFoodItems(Request $request, $id){
        $foods = [];
        $foods['food_name'] = $request->food_name;
        $foods['food_description']  =$request->food_description;
        $foods['food_quantity']  =$request->food_quantity;

        $request = DB::table('food_items')->where('id', $id)->update($foods);
        if ($request) {
            return redirect()->route('view_foodItems');
        }
    }
    public function deleteFoodItems(String $id){
        $request = DB::table('food_items')->where('id', $id)->delete();
        return redirect()->route('view_foodItems');
    }

    


}
