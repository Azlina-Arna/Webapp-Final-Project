@extends('layouts.app')

@section('content')
<div class="container">
<div class="d-flex justify-content-between">
<div class="row">
@foreach ($menus as $item)
  <div class="col-sm-6">
  <div class="card">
  <a href="detail">
    <img class="card-img-top" src="{{$item['gallery']}}">
    <div class="card-body">
      <h5 class="card-title">{{$item['name']}}</h5>
      <p class="card-text">{{$item['price']}}</p> 
    </div>
    </a>
    </div>
    </div>
@endForeach
</div>
</div>
</div>
@endsection
