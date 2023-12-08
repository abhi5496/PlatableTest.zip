<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Donor;

class DonorController extends Controller
{
    public function index(){
        $donors = DB::table('donors')->get();
        return view('donor.view_donor',['data'=>$donors]);
    }

    public function addDonor(Request $request){
        $donor = [];
        $donor['donor_name'] = $request->donor_name;
        $donor['donor_contact_info']  =$request->donor_contact_info;
        $request = DB::table('donors')->insert([$donor]);
        if ($request) {
            return redirect()->route('view_donor');
        }

    }
    public function deleteDonor(String $id){
        $donor = DB::table('donors')->where('id', $id)->delete();
        return redirect()->route('view_donor');
    }

    public function viewDoneteFoods(Request $request, $id){
        $foods = DB::table('food_items')->get();
        // $donors= DB::table('donors')->get();
        return view('donor.view_doneted_foods',['request'=>$foods,'id'=>$id]);
    }

    public function addDoneteFoods(Request $request,$id){
        $data= [];
        $donor = DB::table('donors')->whereId($id)->first();
        $foodItems = DB::table('food_items')->whereId($id)->first();
        //dd($foodItems);
        $data['donor_name']= $donor->donor_name;
        $data['food_name']= $foodItems->food_name;
        $data['donor_id']= $id;
        $data['food_item_id']= $request->food_item_id;
        $request = DB::table('doneted_foods')->insert([$data]);
        if ($request) {
            return view('donor.view_doneted_foods',['value'=>$request,'id'=>$id]);
        }
    }

}
