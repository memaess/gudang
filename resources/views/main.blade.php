@extends('layouts.master')

@section('title')
    Login Gudang
@endsection

@section('content')
<div class="login-box">
    <div class="login-logo">
      <a href=""><b>Aplikasi</b> Gudang</a>
    </div>

    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Sign in to start your session</p>
            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="input-group mb-3">
                  <input type="email" name="email" class="form-control" placeholder="Email" autofocus="">
                  <div class="input-group-append">
                      <div class="input-group-text">
                          <span class="fas fa-envelope"></span>
                      </div>
                  </div>
                </div>

                <div class="input-group mb-3">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-outline-primary btn-block">Login</button>
            </form>
            <hr>
            <div class="text-center">
                <p class="mb-1">
                  <a href="forgot-password.html">I forgot my password</a>
                </p>
                <p class="mb-0">
                  <a href="register.html" class="text-center">Register a new membership</a>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection