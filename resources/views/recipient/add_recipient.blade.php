@extends('layouts.app'
)
<div class="container">
   <h2>Add New Recipient</h2>
   <div class="row">
      <div class="col-lg-6">
         <form action="{{route('add_recipient')}}" method="post">
            @csrf
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="recipient_name"/>
            <label class="form-label">Contact info</label>
            <input type="text" class="form-control" name="recipient_contact_info"/><br/>
            <label class="form-label">Select</label>
            <select class="form-control" name="food_item_id">
               <?php $foods = DB::table('food_items')->get();?>
               @foreach ($foods as $value )
               <option value="{{$value->id}}">{{$value->food_name}}</option>
               @endforeach
           </select><br/>
            <input type="submit" value="Submit" class="btn btn-primary" />
         </form>
      </div>
   </div>
</div>
</body>