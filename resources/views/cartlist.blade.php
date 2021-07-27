@extends('master')
@section("content")

<div class="cart-wrapper container-fluid">
  <div class="search-header text-center my-5">
    <h4 class="font-weight-bold">Your Cart</h4>
    <hr class="w-25 mx-auto">
  </div>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Image</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($products as $item)
      <tr>
        <th scope="row">{{$item->id}}</th>
        <td><img src="{{$item->gallery}}" class="img-fluid" style="height:50px !important; width:50px !important;"></td>
        <td>{{$item->name}}</td>
        <td>{{$item->price}}</td>
        <td class="d-flex">
          <a href="/removecart/{{$item->cart_id}}" class="btn my-3 ms-2 btn-danger"><i class="fas fa-trash-alt"></i></a>
          <a href="detail/{{$item->id}}" class="btn my-3 ms-2 btn-success"><i class="fas fa-mouse-pointer"></i></a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <div class="text-center">
    <a href="ordernow" class="btn btn-success btn-lg">Checkout</a>
  </div>
</div>
@endsection 