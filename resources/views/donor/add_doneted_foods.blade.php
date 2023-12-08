@extends('layouts.app'
)
<div class="container">
   <h2>Doneted Food</h2>
   <div class="row">
      <div class="col-lg-6">
         <form action="{{url('donor/add-doneted-foods/'.$id)}}" method="post">
            @csrf
            @method('post')
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