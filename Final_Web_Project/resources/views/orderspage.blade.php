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
    @foreach ($orders as $order)
        <tr>
            <td>{{$order -> orderID}}</td>
            <td>{{$order -> orderDate}}</td>
            <td>{{$order -> details}}</td>
            <td><button class="btn btn-primary btn-block" type="submit">Edit</button></td>
            <td><a href="/destroyOrder/{{$order->orderID}}" class="btn btn-danger btn-block">Cancel</a></td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>
@endsection