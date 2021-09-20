@extends('layouts.nav')

@section('container')

<h1 style="padding-top:4%;">User Baru</h1>
<form id="form-arsip" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label for="name">{{__('Nama')}}</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Nama" required>

        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group">
        <label for="username">{{__('Username')}}</label>
        <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" placeholder="Username" required>

        @error('username')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group">
        <label for="password">{{__('Password')}}</label>
        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password"  required>

        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group">
        <label for="password_confirmation">{{__('Konfirmasi Password')}}</label>
        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Konfirmasi Password" required>
    </div>
    <button type="submit" class="btn btn-success">Tambah</button>
</form>

@endsection