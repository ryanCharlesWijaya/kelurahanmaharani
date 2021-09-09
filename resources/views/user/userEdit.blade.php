@extends('layouts.app')

@section('content')
<div class="container" style="width: 20%;margin-top:5%;">
<form class="form-signin" method="POST" action="{{ route('updateUserProfile', ['id' => $user->id]) }}">
      @csrf
      <div class="text-center mb-4">
        <img class="mb-4" src="image/pekanbaru.png" alt="logo pekanbaru" width="72">
        <h1 class="h3 mb-3 font-weight-normal">Login</h1>
      </div>
      <div class="form-label-group">
        <label for="name">Nama Lengkap</label>
        <input type="text" id="name" name="name" class="form-control" placeholder="Nama Lengkap" autofocus value="{{ $user->name }}">
        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>
      <div class="form-label-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" class="form-control" placeholder="User Name" autofocus value="{{ $user->username }}">
        @error('username')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>
      <button class="btn btn-lg btn-success btn-block" type="submit">Update</button>
      <p class="mt-5 mb-3 text-muted text-center">Kelurahan Maharani &copy; 2021</p>
</form>

<form class="form-signin" method="POST" action="{{ route('updateUserPassword', ['id' => $user->id]) }}">
    @csrf
    <div class="form-label-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="Password">
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>
      <div class="form-label-group">
        <label for="password-confirm">Ketik Ulang Password</label>
        <input type="password" id="password-confirm" name="password-confirm" class="form-control" placeholder="Ketik Ulang Password">
      </div>
      <button class="btn btn-lg btn-success btn-block" type="submit">Update</button>
</form>
</div>
@endsection
