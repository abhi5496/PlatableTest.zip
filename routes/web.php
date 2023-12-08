<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\RecipientController;
use App\Http\Controllers\FoodItemController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//{{ URL starts from http://127.0.0.1:8000/food/view_foodItems }}


//Routes For Food Items
 
Route::group(['prefix'=>'food'], function(){
    Route::get('view_foodItems',[FoodItemController::class,'index'])->name('view_foodItems');
    Route::post('add_foodItems',[FoodItemController::class,'addFoodItems'])->name('add_foodItems');
    Route::get('edit_foodItems\{id}',[FoodItemController::class,'editFoodItmes'])->name('edit_foodItems');
    Route::post('update_foodItems\{id}',[FoodItemController::class,'updateFoodItems'])->name('update_foodItems');
    Route::get('delete_foodItems\{id}',[FoodItemController::class,'deleteFoodItems'])->name('delete_foodItems');
    Route::view('add-foodItems','food.add_foodItems');

   
});

 //Add the Donor Routes

Route::group(['prefix'=>'donor'],function(){
    Route::get('view_donor',[DonorController::class,'index'])->name('view_donor');
    Route::post('add_donor',[DonorController::class,'addDonor'])->name('add_donor');
    Route::get('delete-donor\{id}',[DonorController::class,'deleteDonor'])->name('delete-donor');
    Route::view('add-donor','donor.add_donor');
 
    // Route for DonetedFood with Donor

    Route::get('view_doneted_foods/{id}',[DonorController::class,'viewDoneteFoods'])->name('view_doneted_foods');
    Route::post('add-doneted-foods/{id}',[DonorController::class,'addDoneteFoods'])->name('add_doneted_foods');
    Route::view('add-doneted-foods/{id}','donor.add_doneted_foods');

});

    //Routes for Redcipients 

Route::group(['prefix'=>'recipient'],function(){
    Route::get('view_recipient',[RecipientController::class,'index'])->name('view_recipient');
    Route::post('add_recipient',[RecipientController::class,'addRecipient'])->name('add_recipient');
    Route::get('delete-recipient\{id}',[RecipientController::class,'deleteRecipient'])->name('delete-recipient');
    Route::view('add-recipient','recipient.add_recipient');

});
