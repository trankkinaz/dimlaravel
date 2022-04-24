@extends('layouts.parent')
@section('childcontent')
<div class="card text-center text-white bg-secondary mb-3  ">
    <div class="card-header">
      Welcome to TK-3 with Laravel
    </div>
    <div class="card-body">
      <h5 class="card-title">DIM Team-3</h5>
      <p class="card-text">Please Login to view additional menu.</p>
      <a href="/login" class="btn btn-primary">Login</a>
    </div>
</div>

@endsection