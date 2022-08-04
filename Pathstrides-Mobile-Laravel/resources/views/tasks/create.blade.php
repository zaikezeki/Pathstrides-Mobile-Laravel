@extends('tasks.layout')
@section('content')
<div class="card">
  <div class="card-header">tasks Page</div>
  <div class="card-body">


    
      
      <form action="{{ url('task') }}" method="post">
        {!! csrf_field() !!}
        <label>Task ID:</label></br>
        <input type="text" name="task_id" id="task_id" class="form-control"></br>
        <label>Task Title:</label></br>
        <input type="text" name="task_title" id="task_title" class="form-control"></br>
        <label>Task Description:</label></br>
        <input type="text" name="task_desc" id="task_desc" class="form-control"></br>
        
       
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop