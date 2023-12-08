@extends('layouts.app'
)
<div class="container">
   <h2>Add New Donor</h2>
   <div class="row">
      <div class="col-lg-6">
         <form action="{{route('add_donor')}}" method="post">
            @csrf
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="donor_name"/>
            <label class="form-label">Contact info</label>
            <input type="text" class="form-control" name="donor_contact_info"/><br/>
            <input type="submit" value="Submit" class="btn btn-primary" />
         </form>
      </div>
   </div>
</div>
</body>