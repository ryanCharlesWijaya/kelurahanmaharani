@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Arsip') }}</div>

                <div class="card-body">
                    <a href="{{ route('arsipAdd') }}" class="btn btn-success mb-3">
                        Tambah Arsip
                    </a>

                    <table class="table">

                        <thead>
                            <tr>
                                <th scope="col">Kode Dokumen</th>
                                <th scope="col">Nik Pemilik</th>
                                <th scope="col">Pemilik</th>
                                <th scope="col">Jenis Dokumen</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Admin</th>
                                <th scope="col">Tanggal Dibuat</th>
                            </tr>
                        </thead>
                        
                        <tbody>

                        @foreach ($arsips as $arsip)
                            <tr>
                                <td>{{ $arsip->kode_dokumen }}</td>
                                <td>{{ $arsip->owner->nik }}</td>
                                <td>{{ $arsip->owner->name }}</td>
                                <td>{{ $arsip->jenisDokumen->name }}</td>
                                <td>{{ $arsip->keterangan }}</td>
                                <td>{{ $arsip->user->name }}</td>
                                <td>{{ $arsip->created_at }}</td>
                            </tr>
                        @endforeach

                        <tbody>

                    </table>

                    {{ $arsips->links('pagination::bootstrap-4') }}

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
