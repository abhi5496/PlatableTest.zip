@extends('layouts.app')

<div class="container mt-5 ">
  <h2>Donor List <a href="{{url('food/view_foodItems')}}" class="btn btn-primary" >Back</a> <a href="add-donor" class="btn btn-info" >Add Donor</a></h2>
  
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Sr. No.</th>
        <th>Donor Name</th>
        <th>Contact Info</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($data as $donor)
      <tr>
        <td>{{ $loop->index+1 }}</td>
        <td>{{$donor->donor_name}}</td>
        <td>{{$donor->donor_contact_info}}</td>
        <td>
          <a href="{{route('delete-donor',$donor->id)}}" class="btn btn-danger btn-rounded waves-effect waves-light"> Delete</a>
          <a href="{{url('donor/view_doneted_foods/'.$donor->id)}}" class="btn btn-primary btn-rounded waves-effect waves-light">Doneted Food</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>




