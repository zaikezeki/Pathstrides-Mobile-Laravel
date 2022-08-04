@extends('managers.layout')
@section('content')
<div class="card">
  <div class="card-header">Managers Page</div>
  <div class="card-body">
      
      <form action="{{ url('manager') }}" method="post">
        {!! csrf_field() !!}
        <label>Manager ID:</label></br>
        <input type="text" name="man_id" id="man_id" class="form-control"></br>
        <label>First Name:</label></br>
        <input type="text" name="man_fname" id="man_fname" class="form-control"></br>
        <label>Last Name:</label></br>
        <input type="text" name="man_lname" id="man_lname" class="form-control"></br>
        <label>Email:</label></br>
        <input type="text" name="man_email" id="man_email" class="form-control"></br>
        <label>Contanct Number:</label></br>
        <input type="text" name="man_contanct_num" id="man_contanct_num" class="form-control"></br>
       
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop