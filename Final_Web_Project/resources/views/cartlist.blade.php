@extends('layouts.app')
@section('content')
<div class="custom-product">
<div class="col-sm-10">
<h3><center>Result for Products</center></h3><br><br>
@foreach($menus as $item)
<div class="row searched-items">
<div class="col-sm-3">
<a href="detail/{{$item->id}}">
<img class="trending-image" src="{{$item->gallery}}">
</a>
</div>
<div class="col-sm-4">
<div class=" ">
<h3>{{$item->name}}</h3>
<h4>{{$item->price}}</h4>
</div>
</div>
<div class="col-sm-3">
<a href="/removecart/{{$item->cart_id}}" class="btn btn-primary">Remove from Cart</a> 
</div>
</div>
@endforeach
</div>

<center><a href="#" class="btn btn-success">Buy Now</a></center>

</div>
@endsection