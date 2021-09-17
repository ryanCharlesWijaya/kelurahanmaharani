@extends('layouts.nav')

@section('container')

<h1 style="padding-top:4%;">Arsip Baru</h1>
<form id="form-arsip" method="POST" action="{{ route('arsip.store') }}" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label for="nik">{{__('Nik')}}</label>
        <input type="text" list="niks" class="form-control" id="nik" name="nik" placeholder="Nama Lengkap">
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
        <input type="text" class="form-control" id="name" name="name" placeholder="nama pemilik">
        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group">
        <label for="jenis_dokumen">{{__('Jenis Dokumen')}}</label>
        <input type="text" list="jenis_jenis_dokumen" class="form-control" id="jenis_dokumen" name="jenis_dokumen" placeholder="Kode Dokumen">
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
        <input type="text" class="form-control" id="kode_dokumen" name="kode_dokumen" placeholder="Kode Dokumen">

        @error('kode_dokumen')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group">
        <label for="keterangan">{{__('Keterangan')}}</label>
        <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan">

        @error('keterangan')
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
