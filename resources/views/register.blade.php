@extends('master')
@section("content")

<div class="wrapper m-auto my-5">
  <div class="title">Registration Form</div>
  <form action="register" method="POST">
    @csrf
    <div class="field">
      <input type="text" name="name" required />
      <label>UserName</label>
    </div>
    <div class="field">
      <input type="email" name="email" required />
      <label>Email Address</label>
    </div>
    <div class="field">
      <input type="password" name="password" required />
      <label>Password</label>
    </div>
    <div class="content">
      <div class="checkbox">
        <input type="checkbox" id="remember-me" />
        <label for="remember-me">Remember me</label>
      </div>
      <div class="pass-link">
        <a href="#">Forgot password?</a>
      </div>
    </div>
    <div class="field">
      <input type="submit" value="SignUp" />
    </div>
    <div class="signup-link">Already a member? <a href="/login">Login Here</a></div>
  </form>
</div>
@endsection