@extends('layouts.nav')

@section('container')

<h1 style="padding-top:4%;">Arsip Baru</h1>
<form id="form-arsip" method="POST" action="{{ route('arsip.store') }}" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label for="nomor_arsip">{{__('Nomor Arsip')}}</label>
        <input type="text" class="form-control @error('nomor_arsip') is-invalid @enderror" id="nomor_arsip" name="nomor_arsip" placeholder="Nomor Arsip"  value="{{ old('nomor_arsip') }}">

        @error('nomor_arsip')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    
    <div class="form-group">
        <label for="nik">{{__('Nik')}}</label>
        <input type="text" list="niks" class="form-control @error('nik') is-invalid @enderror" id="nik" name="nik" placeholder="Nik Pemilik"  value="{{ old('nik') }}">
        <datalist id="niks">
            @foreach ($owners as $owner)
                <option class="option-{{ $owner['nik'] }}" value="{{ $owner['nik'] }}">{{ $owner['name'] }}</option>
            @endforeach
        </datalist>

        @error('nik')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group">
        <label for="name">{{__('Nama Pemilik')}}</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Nama Pemilik"  value="{{ old('name') }}">
        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group">
        <label for="jenis_dokumen">{{__('Jenis Dokumen')}}</label>
        <input type="text" list="jenis_jenis_dokumen" class="form-control @error('jenis_dokumen') is-invalid @enderror" id="jenis_dokumen" name="jenis_dokumen" placeholder="Kode Dokumen"  value="{{ old('jenis_dokumen') }}">
        <datalist id="jenis_jenis_dokumen">
            @foreach ($jenisJenisDokumen as $jenisDokumen)
                <option class="option-{{ $jenisDokumen['id'] }}">{{ $jenisDokumen['name'] }}</option>
            @endforeach
        </datalist>

        @error('jenis_dokumen')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group">
        <label for="kode_dokumen">{{__('Kode Dokumen')}}</label>
        <input type="text" class="form-control @error('kode_dokumen') is-invalid @enderror" id="kode_dokumen" name="kode_dokumen" placeholder="Kode Dokumen" value="{{ old('kode_dokumen') }}">

        @error('kode_dokumen')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group files color">
        <label>Upload Your File </label>
        <input type="file" id="file" class="form-control @error('file') is-invalid @enderror" name="file" value="{{ old('file') }}" required autocomplete="file" autofocus>

        @error('file')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <button type="submit" class="btn btn-success">Upload</button>
</form>

<script type="text/javascript" src="{{ asset('js/arsipAdd.js') }}"></script>
@endsection
