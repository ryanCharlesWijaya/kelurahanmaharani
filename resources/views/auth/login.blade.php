@extends('layouts.app')

@section('content')
<div class="container" style="width: 20%;margin-top:5%;">
<form class="form-signin" method="POST" action="{{ route('login') }}">
      @csrf
      <div class="text-center mb-4">
        <img class="mb-4" src="image/pekanbaru.png" alt="logo pekanbaru" width="72">
        <h1 class="h3 mb-3 font-weight-normal">Login</h1>
      </div>
      <div class="form-label-group">
        <label for="username">{{__('Username')}}</label>
        <input type="text" id="username" name="username" class="form-control @error('username') is-invalid @enderror" placeholder="Email address" required autofocus>
        @error('username')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>
      <div class="form-label-group">
        <label for="password">{{__('Password')}}</label>
        <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required>
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-success btn-block" type="submit">Login</button>
      <p class="mt-5 mb-3 text-muted text-center">Kelurahan Maharani &copy; 2021</p>
    </form>
</div>
@endsection