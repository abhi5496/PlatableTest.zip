@extends('layouts.app')

<div class="container mt-5 ">
  <h2>Doneted Food list  <a href="{{url('donor/view_donor')}}" class="btn btn-primary" >Back</a> 
      <a href="{{url('donor/add-doneted-foods/'.$id)}}" class="btn btn-info" >Add Food</a></h2>
  
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Sr. No.</th>
        <th>Donor Name</th>
        <th>Donated food</th>
      </tr>
    </thead>
    <tbody>
        <?php $doneted_foods = DB::table('doneted_foods')->get();?>
        @foreach ($doneted_foods  as $doneted_food )
        <tr>
            <td>{{ $loop->index+1 }}</td>
            <td>{{$doneted_food->donor_name}}</td>
            <td>{{$doneted_food->food_name}}</td>
          </tr>
          @endforeach
    </tbody>
  </table>
</div>




