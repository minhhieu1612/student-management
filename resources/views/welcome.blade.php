<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="{{ asset('favicon.png')}}" sizes="36x16">
    <title>Quản lý học sinh</title>
    <link
      href="{{ asset('css/bootstrap.min.css') }}"
      type="text/css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  </head>
  <body>
    @if (Route::has('login'))
      <div class="top-right links">
        @auth
          <a href="{{ url('/') }}">Home</a>
          @else
            <a href="{{ route('login') }}">Login</a>

          @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
          @endif
        @endauth
      </div>
    @endif

    <div class="container">
      <div class="login-box">
        <div class="header">
          <h3 class="text-center text-white">Đăng nhập</h3>
        </div>
        <div class="body">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">
                <i class="fa fa-user text-linear"></i>
              </span>
            </div>
            <input type="text" class="form-control" placeholder="Tên đăng nhập">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">
                <i class="fa fa-lock text-linear"></i>
              </span>
            </div>
            <input type="text" class="form-control" placeholder="Mật khẩu">
          </div>
          <div class="input-group mb-3">
            <button class="btn btn-warning">Đăng nhập</button>
          </div>
          <div class="input-group mb-3">
            <small id="helpId" class="text-forgot text-white">Quên mật khẩu</small>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-center">
        <a class="mr-3 mb-5" href="/hosohocsinh">Học sinh</a>
        <a class="mr-3 mb-5" href="/lophoc">Lớp học</a>
      </div>
    </div>

  </body>
</html>
