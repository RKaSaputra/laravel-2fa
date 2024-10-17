@extends('layouts.app')

@section('content')
<div class="container">
 <div class="row">
  <div class="col-md-12">
   <div class="card">
    <h4>SET auth</h4>

    <div class="card-body">
     <p>Set 2fa</p>
     <div>
      {!! $QR_Image !!}
     </div>
     <p>settttttt</p>
     <div>
      <a href="{{ route('complete-registration') }}" class="btn btn-primary">Complete Registration </a>
     </div>
    </div>
   </div>
  </div>
 </div>
</div>