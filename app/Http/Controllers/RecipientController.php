<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class RecipientController extends Controller
{
    public function index(){
        $resipients = DB::table('recipients')->get();
        $foods = DB::table('food_items')->get();
        return view('recipient.view_recipient',['data'=>$resipients,'food'=>$foods]);
    }

    public function addRecipient(Request $request){
        $recipient = [];
        $recipient['recipient_name'] = $request->recipient_name;
        $recipient['recipient_contact_info']  =$request->recipient_contact_info;
        $recipient['food_item_id']= $request->food_item_id; 
        $request = DB::table('recipients')->insert([$recipient]);
        if ($request) {
            return redirect()->route('view_recipient');
        }

    }

    public function deleteRecipient(String $id){
        $recipient = DB::table('recipients')->where('id', $id)->delete();
        return redirect()->route('view_recipient');
    }

}
