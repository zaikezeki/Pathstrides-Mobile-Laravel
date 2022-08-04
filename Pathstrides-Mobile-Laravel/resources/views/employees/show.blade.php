@extends('employees.layout')
@section('content')
<div class="card">
  <div class="card-header">Employee Details Page</div>
  <div class="card-body">

  <a href="{{ url('/employee/') }}" class="btn btn-success btn-sm" title="Back">
                            <i class="fa fa-plus" aria-hidden="true"></i> Back
                        </a>
  
        <div class="card-body">
        <h5 class="card-title">Employee First Name : {{ $employees-> emp_fname }}</h5>
        <h5 class="card-title">Employee Last Name : {{ $employees-> emp_lname }}</h5>
        <p class="card-text">Email : {{ $employees->emp_email }}</p>
        <p class="card-text">Contanct Number : {{ $employees->emp_contanct_num }}</p>
        <p class="card-text">Manager Incharge : {{ $employees->man_id }}</p>
  </div>
      
    </hr>
  
  </div>
</div>