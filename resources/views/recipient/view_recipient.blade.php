@extends('layouts.app')

<div class="container mt-5 ">
  <h2>Recipient List <a href="{{url('food/view_foodItems')}}" class="btn btn-primary" >Back</a> <a href="add-recipient" class="btn btn-info" >Add Resipients</a></h2>
  
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Sr. No.</th>
        <th>Recipient Name</th>
        <th>Contact Info</th>
        <th>Food Items</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($data as $resipients)
      <tr>
        <td>{{ $loop->index+1 }}</td>
        <td>{{$resipients->recipient_name}}</td>
        <td>{{$resipients->recipient_contact_info}}</td>
        <td>
          <?php $foods = DB::table('food_items')->where(['id'=>$resipients->food_item_id])->first();?>
          {{$foods->food_name}}
        </td>
        <td>
          <a href="{{route('delete-recipient', $resipients->id)}}" class="btn btn-danger btn-rounded waves-effect waves-light"> Delete</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>




