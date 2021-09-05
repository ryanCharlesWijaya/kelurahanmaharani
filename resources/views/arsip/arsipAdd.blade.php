@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Arsip') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('arsipStore') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="nik" class="col-md-12 col-form-label text-md-left">{{ __('Nik Pemilik') }}</label>

                            <div class="col-md-12">
                                <input id="nik" type="text" list="niks" class="form-control @error('nik') is-invalid @enderror" name="nik" value="{{ old('nik') }}" required autocomplete="nik" autofocus>

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
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-12 col-form-label text-md-left">{{ __('Nama Pemilik') }}</label>

                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="jenis_dokumen" class="col-md-12 col-form-label text-md-left">{{ __('Jenis Dokumen') }}</label>

                            <div class="col-md-12">
                                <input id="jenis_dokumen" type="text" list="jenis_jenis_dokumen" class="form-control @error('jenis_dokumen') is-invalid @enderror" name="jenis_dokumen" value="{{ old('jenis_dokumen') }}" required autocomplete="jenis_dokumen" autofocus>

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
                        </div>

                        <div class="form-group row">
                            <label for="kode_dokumen" class="col-md-12 col-form-label text-md-left">{{ __('Kode Dokumen') }}</label>

                            <div class="col-md-12">
                                <input id="kode_dokumen" type="text" class="form-control @error('kode_dokumen') is-invalid @enderror" name="kode_dokumen" value="{{ old('kode_dokumen') }}" required autocomplete="kode_dokumen" autofocus>

                                @error('kode_dokumen')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="keterangan" class="col-md-12 col-form-label text-md-left">{{ __('Keterangan') }}</label>

                            <div class="col-md-12">
                                <input id="keterangan" type="text" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" value="{{ old('keterangan') }}" required autocomplete="keterangan" autofocus>

                                @error('keterangan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="file" class="col-md-12 col-form-label text-md-left">{{ __('File') }}</label>

                            <div class="col-md-12">
                                <input id="file" type="file" class="form-control @error('file') is-invalid @enderror" name="file" value="{{ old('file') }}" required autocomplete="file" autofocus>

                                @error('file')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Add') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="{{ asset('js/arsipAdd.js') }}"></script>
@endsection