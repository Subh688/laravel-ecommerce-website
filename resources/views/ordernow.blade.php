@extends('master')
@section("content")

<div class="container my-5">
<table class="table table-striped table-hover table-bordered">
  <tbody>
    <tr>
      <td>Amount</td>
      <td>$ {{$total}}</td>
    </tr>
    <tr>
      <td>Tax</td>
      <td>$ 0</td>
    </tr>
    <tr>
      <td>Delivery </td>
      <td>$ 10</td>
    </tr>
    <tr>
      <td>Total Amount</td>
    <td>$ {{$total+10}}</td>
    </tr>
  </tbody>
</table>
<form class="was-validated" action="/orderplace" method="POST">
  @csrf
  <div class="mb-3">
    <h3>Address</h3>
    <textarea class="form-control is-invalid" id="validationTextarea" name="address" placeholder="Enter Your Address Here" required></textarea>
  </div>
  <div class="form-group">
    <h3>Payment Method</h3>
    <input type="radio" value="cash" name="payment"> <span>online payment</span> <br> <br>
    <input type="radio" value="cash" name="payment"> <span>EMI payment</span> <br><br>
    <input type="radio" value="cash" name="payment"> <span>Payment on Delivery</span> <br> <br>
  </div>
  <button type="submit" class="btn btn-outline-primary">Order Now</button>
</form>
</div>
@endsection 