@extends('layouts.app'
)
<div class="container">
   <h2>Add New Category</h2>
   <div class="row">
      <div class="col-lg-6">
         <form action="{{route('update_foodItems', $data->id)}}" method="post">
            @csrf
            <label class="form-label">Name</label>
            <input type="text" value="{{$data->food_name}}" class="form-control" name="food_name"/>

            <label class="form-label">Description</label>
            <textarea name ="food_description"  class="form-control" rows="2" placeholder="Enter your Address">{{$data->food_description}}</textarea>

            <label class="form-label">Quantity</label>
            <input type="text" value="{{$data->food_quantity}}" class="form-control" name="food_quantity"/><br/>

            <input type="submit" value="Submit" class="btn btn-primary" />
         </form>
      </div>
   </div>
</div>
</body>