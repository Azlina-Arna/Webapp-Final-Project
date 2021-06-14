@extends('layouts.app')
@section('content')
<div class="col-sm-12">
<h3 class="display-5 text-center">Orders</h3>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Order Id</th>
            <th>Order Date</th>
            <th>Details</th>
            <th class="text-center"></th>
        </tr>
    </thead>
    <tbody>
    {{-- @foreach ($carts as $count => $cart)--}}
        <tr>
            <td>{{-- a href="{{ route('carts.show', $cart->orderID)}}">>{{$cart->orderID}}</a>--}}</td>
            <td>{{--{{$cart->orderDate}}--}}</td>
            <td>{{--{{$cart->details}}--}}</td>
            <form action="" method="post">
                @csrf
                @method ('DELETE')
            <td>{{--<a href="{{route('edit', $cart->orderID)}}">--}}<button class="btn btn-primary btn-block" type="submit">Edit</button>{{--</a>--}}</td>
            <td>{{--<a href="{{route('destroy', $cart->orderID)}}">--}}<button class="btn btn-danger btn-block" type="submit">Cancel</button>{{--</a--}}</td>
            </form>
        </tr>
    </tbody>
</table>
</div>
@endsection