@extends('layouts.app')

<div class="container mt-5 ">
  <h2>Food List <a href="add-foodItems" class="btn btn-primary" >Add Food Item</a>  <a href="{{url('donor/view_donor')}}" class="btn btn-info" >Add Donor</a> 
    <a href="{{url('recipient/view_recipient')}}" class="btn btn-Success" >Add Recipient</a>
  </h2>
  
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Sr. No.</th>
        <th>Food Name</th>
        <th>Food Description</th>
        <th>Food Expiry Date</th>
        <th>Quantity</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($data as $foods)
      <tr>
        <td>{{ $loop->index+1 }}</td>
        <td>{{$foods->food_name}}</td>
        <td>{{$foods->food_description}}</td>
        <td>{{$foods->food_expiry_date}}</td>
        <td>{{$foods->food_quantity}}</td>
        <td>
          <a href="{{route('edit_foodItems', $foods->id)}}" class="btn btn-warning btn-rounded waves-effect waves-light"> Edit</a>
          <a href="{{route('delete_foodItems', $foods->id)}}" class="btn btn-danger btn-rounded waves-effect waves-light"> Delete</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>




