<?php 
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user'))
{
  $total= ProductController::cartItem();
}

?>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">SubhMart</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/myorders">Orders</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/cartlist"><i class="fas fa-cart-arrow-down"></i>({{$total}})</a>
        </li>
      </ul>
      <form class="d-flex" action="/search">
        <input class="form-control me-2" name="query" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-warning" type="submit"><i class="fas fa-search"></i></button>
      </form>
      @if(Session::has('user'))
        <div class="dropdown">
          <button class="ms-1 btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
          {{Session::get('user')['name']}}
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <a class="dropdown-item" href="/logout">Logout</a>
          </ul>
        </div>
        @else
        <a href="/login" class="ms-1 btn btn-danger">Login</a>
        <a href="/register" class="ms-1 btn btn-danger">Register</a>
      @endif
    </div>
  </div>
</nav>
