@extends('layouts.nav')

@section('container')

<h1 style="padding-top:4%;">Edit Pertanyaan</h1>
<form id="form-arsip" method="POST" action="{{ route('question.update', ['id' => $question->id]) }}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="question">{{__('Pertanyaan')}}</label>
        <textarea class="form-control" id="question" rows="3" name="question" placeholder="Pertanyaan">{{ $question->question }}</textarea> 

        @error('answer')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group">
        <label for="answer">{{__('Jawaban')}}</label>
        <textarea class="form-control" id="answer" rows="3" name="answer" placeholder="Jawaban">{{ $question->answer }}</textarea> 

        @error('answer')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <button type="submit" class="btn btn-success">Update</button>
</form>

<script type="text/javascript" src="{{ asset('js/arsipAdd.js') }}"></script>
@endsection


{{-- @extends('layouts.nav')

@section('container')
<style>
    
</style>
<h1 style="padding-top:4%;">Informasi Arsip</h1>
<form id="form-arsip" method="POST" action="{{ route('arsip.updateInfo', ['id' => $arsip->id]) }}" enctype="multipart/form-data">
    @csrf
     <div class="form-group">
        <label for="nomor_arsip">{{__('Nomor Arsip')}}</label>
        <input type="text" class="form-control" id="nomor_arsip" name="nomor_arsip" placeholder="Nomor Arsip" value="{{ $arsip->nomor_arsip }}">

        @error('nomor_arsip')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    
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
</form> --}}
    
{{-- @endsection --}}