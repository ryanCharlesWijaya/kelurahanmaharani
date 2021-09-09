@extends('layouts.nav')

@section('container')
<h1 class="" style="padding-top:3%;">Arsip</h1>
    <form class="p-3 pt-0 form-select" >
        <div class="row pt-3" id="search">
            <h5 class="" style="display:grid;align-items:center;padding-right:0;margin:0;text-align:left;">Cari file dari:</h5>
            <div class="col-md-2" style="padding-left:0;">
                <input type="date" class="form-control" placeholder="Dari" >
            </div>
            <h5 class="" style="display:grid;align-items:center;padding:0;margin:0;text-align:center;">ke:</h5>
            <div class="col-md-2" style="padding-left:0;">
                <input type="date" class="form-control" placeholder="First name">
            </div>
            <select class="col-md-2 form-control form-control-md">
                <option>NIK</option>
                <option>Nomor Dokumen</option>
                <option>Nama Pemilik</option>
            </select>
            <div class="col-md-3">
            <input type="text" class="form-control" placeholder="Cari Data...">
            </div>
            <input id="arsip-search-button" type="submit" value="Cari" class="btn btn-success" placeholder="Last name">
        </div>
    </form> 

<a id="addData" href="tambahData" class="btn btn-success mb-4">Tambah File</a>

    <table class="table" id="arsip-table" style="text-align:center">
        <thead class="thead-dark">
            @foreach ($table_header as $header)
            <th scope="col" onclick="window.location='{{ '?sortBy='.$header['attribute'].'&sortByOrder='.$header['orderBy'] }}'">
                {{ $header['name'] }}
            </th>
            @endforeach
            <th scope="col">Aksi</th>
        </thead>
    <tbody class="tbody-light" style="text-align:center">
        @foreach ($arsips as $arsip)
            <tr>
                <td class="p-4">{{ $arsip->kode_dokumen }}</td>
                <td class="p-4">{{ $arsip->owner_nik }}</td>
                <td class="p-4">{{ $arsip->owner_name }}</td>
                <td class="p-4">{{ $arsip->jenis_dokumen_name }}</td>
                <td class="p-4">{{ $arsip->keterangan }}</td>
                <td class="p-4">{{ $arsip->user_name }}</td>
                <td class="p-4">{{ $arsip->created_at }}</td>
                <td class="p-4">
                    <a class="btn m-0 p-0" target="_blank" href="{{ route('arsipEdit', ['id' => $arsip->id]) }}">
                        <svg version="1.1" class="table-svg" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><g><g><path d="M435.174,382.964c25.042-35.155,21.986-84.07-9.541-115.597c-33.803-33.803-93.51-33.816-127.266,0c-35.193,35.162-35.175,92.122,0,127.266c31.531,31.556,80.458,34.567,115.596,9.542l76.826,75.036L512,458L435.174,382.964z"/></g></g><g><g><polygon points="272,8.789 272,121 383.211,121      "/></g></g><g><g><path d="M361.985,451.015c-32.051,0-62.183-12.495-84.844-35.186c-46.915-46.855-46.926-122.794,0.029-169.688c26.755-26.81,69.164-41.373,114.829-30.018V151H242V0H0v512h392v-65.235C382.268,449.274,372.302,451.015,361.985,451.015zM60,181h212v30H60V181z M212,391H60v-30h152V391z M212,331H60v-30h152V331z M212,271H60v-30h152V271z"/></g></g></svg>
                    </a>
                    <a title="edit" class="btn m-0 p-0" target="_blank" href="{{ route('arsipEdit', ['id' => $arsip->id]) }}">
                        <svg  viewBox="0 0 492.49284 492" class="table-svg"  xmlns="http://www.w3.org/2000/svg"><path d="m304.140625 82.472656-270.976563 270.996094c-1.363281 1.367188-2.347656 3.09375-2.816406 4.949219l-30.035156 120.554687c-.898438 3.628906.167969 7.488282 2.816406 10.136719 2.003906 2.003906 4.734375 3.113281 7.527344 3.113281.855469 0 1.730469-.105468 2.582031-.320312l120.554688-30.039063c1.878906-.46875 3.585937-1.449219 4.949219-2.8125l271-270.976562zm0 0"/><path d="m476.875 45.523438-30.164062-30.164063c-20.160157-20.160156-55.296876-20.140625-75.433594 0l-36.949219 36.949219 105.597656 105.597656 36.949219-36.949219c10.070312-10.066406 15.617188-23.464843 15.617188-37.714843s-5.546876-27.648438-15.617188-37.71875zm0 0"/></svg>
                    </a>
                    <form method="POST" action="{{ route('arsipDelete', ['id' => $arsip->id]) }}" class="d-inline-block">
                        @csrf

                        <button title="delete" class="btn m-0 p-0">
                            <svg version="1.1" class="table-svg" id="Capa_1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 612 612" style="enable-background:new 0 0 612 612;" xml:space="preserve">
                            <g>
                                <g>
                                    <path d="M493.816,170.804H118.189c-11.367,0-20.582,9.214-20.582,20.58v321.509c0,54.648,44.461,99.107,99.105,99.107h218.574
                                        c54.646,0,99.107-44.459,99.107-99.107V191.384C514.394,180.019,505.183,170.804,493.816,170.804z M256.526,488.043
                                        c0,13.963-11.32,25.284-25.286,25.284c-13.961,0-25.286-11.321-25.286-25.284V294.76c0-13.965,11.323-25.284,25.286-25.284
                                        c13.965,0,25.286,11.32,25.286,25.284V488.043z M406.047,488.043c0,13.963-11.32,25.284-25.286,25.284
                                        c-13.961,0-25.286-11.321-25.286-25.284V294.76c0-13.965,11.323-25.284,25.286-25.284c13.965,0,25.286,11.32,25.286,25.284
                                        V488.043z"/>
                                    <path d="M473.195,32.022h-89.654v-7.775C383.541,10.877,372.666,0,359.297,0H252.706c-13.37,0-24.247,10.877-24.247,24.247v7.775
                                        h-89.654c-34.33,0-62.261,27.929-62.261,62.26v39.924c0,7.14,5.788,12.929,12.931,12.929h433.054
                                        c7.138,0,12.927-5.789,12.927-12.929V94.282C535.456,59.952,507.527,32.022,473.195,32.022z"/>
                                </g>
                            </g>
                        </svg>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tr>
    </tbody>
</table>
@endsection
