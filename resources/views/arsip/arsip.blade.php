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
                                @foreach ($table_header as $header)
                                <th scope="col" onclick="window.location='{{ '?sortBy='.$header['attribute'].'&sortByOrder='.$header['orderBy'] }}'">
                                    {{ $header['name'] }}
                                </th>
                                @endforeach
                                
                                
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        
                        <tbody>

                        @foreach ($arsips as $arsip)
                            <tr>
                                <td>{{ $arsip->kode_dokumen }}</td>
                                <td>{{ $arsip->owner_nik }}</td>
                                <td>{{ $arsip->owner_name }}</td>
                                <td>{{ $arsip->jenis_dokumen_name }}</td>
                                <td>{{ $arsip->keterangan }}</td>
                                <td>{{ $arsip->user_name }}</td>
                                <td>{{ $arsip->created_at }}</td>
                                <td>
                                    <a href="{{ route('arsipEdit', ['id' => $arsip->id]) }}"  class="btn btn-success mb-3">
                                        Edit
                                    </a>
                                </td>
                            </tr>
                        @endforeach

                        <tbody>

                    </table>

                    {{ $arsips->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
