@extends('layouts.app'
)
<div class="container">
   <h2>Add New Category</h2>
   <div class="row">
      <div class="col-lg-6">
         <form action="{{route('add_foodItems')}}" method="post">
            @csrf
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="food_name"/>
            <label class="form-label">Description</label>
            <textarea name ="food_description" class="form-control" rows="2" placeholder="Enter your Address"></textarea>
            <label for="example-date-input" class="form-label">Date</label>
            <input  name= "food_expiry_date" class="form-control" type="date"><br/>
            <label class="form-label">Quantity</label>
            <input type="text" class="form-control" name="food_quantity"/><br/>
            <input type="submit" value="Submit" class="btn btn-primary" />
         </form>
      </div>
   </div>
</div>
</body>