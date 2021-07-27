@extends('master')
@section("content")

<div class="container my-5">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
            <img class="img-fluid" src="{{$product['gallery']}}">
        </div>
        <div class="col-lg-6 col-md-6 col-12">
            <h2 class="text-warning">{{$product['name']}}</h2>
            <h3 class="text-secondary">Price : {{$product['price']}}</h3>
            <h4 class="text-danger">category: {{$product['category']}}</h4>
            <p class="text-dark"> <h4>Details: </h4> {{$product['description']}} </p>
            <form action="/add_to_cart" method="POST">
                @csrf
                <input type="hidden" name="product_id" value={{$product['id']}}>
                <button class="w-75 btn btn-warning">Add to Cart</button>
            </form>
            <br>
            <a href="ordernow" class="w-75 btn btn-success">Buy Now</a>
        </div>
    </div>
</div>
@endsection