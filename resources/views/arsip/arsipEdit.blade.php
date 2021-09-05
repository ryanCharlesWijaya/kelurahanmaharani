@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Arsip') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('arsipUpdate', ['id' => 1]) }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="jenis_dokumen" class="col-md-12 col-form-label text-md-left">{{ __('Jenis Dokumen') }}</label>

                            <div class="col-md-12">
                                <input id="jenis_dokumen" type="text" list="jenis_jenis_dokumen" class="form-control @error('jenis_dokumen') is-invalid @enderror" name="jenis_dokumen" value="{{ $arsip->jenisDokumen->name }}" required autocomplete="jenis_dokumen" autofocus>

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
                                <input id="kode_dokumen" type="text" class="form-control @error('kode_dokumen') is-invalid @enderror" name="kode_dokumen" value="{{ $arsip->kode_dokumen }}" required autocomplete="kode_dokumen" autofocus>

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
                                <input id="keterangan" type="text" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" value="{{ $arsip->keterangan }}" required autocomplete="keterangan" autofocus>

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
                                <input id="file" type="file" class="form-control @error('file') is-invalid @enderror" name="file" value="{{ old('file') }}" autocomplete="file" autofocus>

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
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
