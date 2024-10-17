@extends('layouts.app')

@section('content')
<div class="container">
 <div class="row justify-content-center align-items-center" style="height: : 70vh;S">
  <div class="col-md-8 col-md-offset-2">
   <div class="panel panel-default">
    <div class="panel-heading font-weight-bold">Register</div>
    <hr>
    @if($errors->any())
     <strong>{{ errors->first() }}</strong>
    @endif

    <div class="panel-body">
     <form method="POST" action="{{ route('2fa') }}">
      {{ csrf_field() }}

      <div class="form-group">
       <p>aaaaaaaaaaa</p>
       <label for="one_time_password">One Time Password</label>

       <div class="cold-md-6">
        <input type="number" id="one_time_password" class="form-control" name="one_time_password" required autofocus>
       </div>
      </div>

      <div class="form-group">
       <div class="col-md-6">
        <button type="submit" class="btn btn-primary">
         login
        </button>
       </div>
      </div>

     </form>
    </div>
   </div>
  </div>
 </div>
</div>