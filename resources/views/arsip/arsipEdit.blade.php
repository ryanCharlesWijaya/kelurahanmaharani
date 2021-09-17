@extends('layouts.nav')

@section('container')
<style>
    
</style>
<h1 style="padding-top:4%;">Informasi Arsip</h1>
<form id="form-arsip" method="POST" action="{{ route('arsip.updateInfo', ['id' => $arsip->id]) }}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="jenis_dokumen">{{__('Jenis Dokumen')}}</label>
        <input type="text" list="jenis_jenis_dokumen" class="form-control" id="jenis_dokumen" name="jenis_dokumen" placeholder="Kode Dokumen" value="{{ $arsip->jenisDokumen->name }}">
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
        <input type="text" class="form-control" id="kode_dokumen" name="kode_dokumen" placeholder="Kode Dokumen" value="{{ $arsip->kode_dokumen }}">

        @error('kode_dokumen')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group">
        <label for="keterangan">{{__('Keterangan')}}</label>
        <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan" value="{{ $arsip->keterangan }}">

        @error('keterangan')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <button type="submit" class="btn btn-success">Update</button>
</form>
<br>
<form action="{{ route('arsip.updateFile', ['id' => $arsip->id]) }}" method="POST" enctype="multipart/form-data">
    <h2>File</h2>
    @csrf
    <div class="form-group files color">
        <label>Upload Your File </label>
        <input type="file" id="file" class="form-control @error('file') is-invalid @enderror" name="file" value="{{ old('file') }}" required autocomplete="file" autofocus>

        @error('file')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="button-group">
        <button type="submit" class="btn btn-success mb-4">Simpan Perubahan File</button>
    </div>
</form>
    
@endsection