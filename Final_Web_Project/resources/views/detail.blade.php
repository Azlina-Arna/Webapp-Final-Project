@extends('layouts.app')
@section('content')
<div class="container">
    <div class= "row">
      <div class="col-sm-6">
      <img class="detail-img" src="{{$menu['gallery']}}" alt="">
      </div>
      <div class="col-sm-6">
      <h5><a href="/home">Go Back To Home</a></h5><br>
      <div class= content>
      <h2>{{$menu['name']}}</h2><br>
      <h3>Price: {{$menu['price']}}</h3><br>
      <h4>Description: {{$menu['description']}}</h4>
      <br><br>
      <form action="/add_to_cart" method="POST"> 
      @csrf
      <input type="hidden" name="menu_id" value={{$menu['id']}}>
      <button class= "btn btn-primary">Add To Cart</button>
      </form>
      <br>
      <button class= "btn btn-primary">Buy Now</button>
      </div>
      </div>
    </div>
</div>
@endsection