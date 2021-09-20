@extends('layouts.nav')

@section('container')

<h1 style="padding-top:4%;">Pertanyaan Baru</h1>
<form id="form-arsip" method="POST" action="{{ route('question.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="question">{{__('Pertanyaan')}}</label>
        <textarea class="form-control @error('question') is-invalid @enderror" id="question" rows="3" name="question" placeholder="Pertanyaan"  value="{{ old('question') }}"></textarea> 

        @error('answer')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group">
        <label for="answer">{{__('Jawaban')}}</label>
        <textarea class="form-control @error('answer') is-invalid @enderror" id="answer" rows="3" name="answer" placeholder="Jawaban"  value="{{ old('answer') }}"></textarea> 

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
