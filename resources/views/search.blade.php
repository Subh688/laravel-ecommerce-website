@extends('master')
@section("content")

<div class="search-wrapper container">
  <div class="search-header text-center my-5">
    <h4 class="font-weight-bold">Seacrch Results</h4>
    <hr class="w-25 mx-auto">
  </div>
  @foreach($products as $item)
  <div class="searched-item">
    <div class="row">
      <div class="col-lg-3 col-md-4 col-12">
        <div class="card text-center" style="width: 18rem;">
          <img src="{{$item['gallery']}}" class="card-img-top mx-auto" style="height:200px !important; width:200px !important;" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{$item['price']}}</h5>
            <p class="card-text">{{$item['name']}}</p>
            <a href="detail/{{$item['id']}}" class="btn btn-outline-dark btn-sm w-100">View</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endforeach
</div>

@endsection