@extends('layouts.nav')

@section('container')
<h1 class="pt-3">Q&A</h1>
<form class="form-select" id="form">
  <div class="row" id="search">
    <div class="col-md-2" style="padding-left:0;">
        <input type="text" name="fromDate" onfocus="(this.type='date')" onblur="this.type='text'" class="form-control" placeholder="Dari Tanggal..." value="{{ isset($_GET['fromDate']) ? $_GET['fromDate'] : null }}" max="{{ date('Y-m-d', strtotime(' -1 day')) }}">
    </div>
    <div class="col-md-2" style="padding-left:0;">
        <input type="text" name="untilDate" onfocus="(this.type='date')" onblur="this.type='text'" class="form-control" placeholder="Hingga Tanggal..." value="{{ isset($_GET['untilDate']) ?  $_GET['untilDate'] : null }}" max="{{ date('Y-m-d') }}">
    </div>
    <div class="col">
      <input type="text" name="query" class="form-control" value="{{ isset($_GET['query']) ? $_GET['query'] : null }}" placeholder="Cari Dokumen...">
    </div>
      <input id="question-search-button" type="submit" value="Cari" class="btn btn-success">
  </div>
</form>
<a id="addData" href="{{route('question.create')}}" class="btn btn-success mb-3 mt-3">Tambah Pertanyaan</a>
<div class="table-wrapper">
<table class="table table-bordered " id="arsip-table" style="text-align:center">
    <thead>
        <th scope="col"></th>
        @foreach($table_header as $header)
            <th scope="col" onclick="window.location='{{ 
                '?sortBy='.$header['attribute'].'&sortByOrder='.$header['orderBy'] }}{{ isset($_GET['fromDate']) ? '&fromDate='.$_GET['fromDate'] : null }}{{ isset($_GET['untilDate']) ?  '&untilDate='.$_GET['untilDate'] : null }}{{ isset($_GET['query']) ? '&query='.$_GET['query'] : null }}'">
                {{ $header['name'] }}

                @if(!isset($_GET['sortBy']) || 
                    ($header['orderBy'] == "desc" 
                        && $header['attribute'] !== $_GET['sortBy']) || 
                    ($header['orderBy'] == "asc" 
                        && $header['attribute'] == $_GET['sortBy']))

                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="292.362px" height="292.362px" viewBox="0 0 292.362 292.362" style="@if(!isset($_GET['sortBy']) || $header['attribute'] !== $_GET['sortBy']) opacity: 0.4; @endif fill: #fff; width: 10px; height: 10px;enable-background:new 0 0 292.362 292.362;" xml:space="preserve">
                        <g>
                            <path d="M286.935,69.377c-3.614-3.617-7.898-5.424-12.848-5.424H18.274c-4.952,0-9.233,1.807-12.85,5.424
                                C1.807,72.998,0,77.279,0,82.228c0,4.948,1.807,9.229,5.424,12.847l127.907,127.907c3.621,3.617,7.902,5.428,12.85,5.428
                                s9.233-1.811,12.847-5.428L286.935,95.074c3.613-3.617,5.427-7.898,5.427-12.847C292.362,77.279,290.548,72.998,286.935,69.377z"/>
                        </g>
                    </svg>
                @else
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="292.362px" height="292.361px" viewBox="0 0 292.362 292.361" style="fill: #fff; width: 10px; height: 10px;enable-background:new 0 0 292.362 292.361;"
                         xml:space="preserve">
                        <g>
                            <path d="M286.935,197.287L159.028,69.381c-3.613-3.617-7.895-5.424-12.847-5.424s-9.233,1.807-12.85,5.424L5.424,197.287
                                C1.807,200.904,0,205.186,0,210.134s1.807,9.233,5.424,12.847c3.621,3.617,7.902,5.425,12.85,5.425h255.813
                                c4.949,0,9.233-1.808,12.848-5.425c3.613-3.613,5.427-7.898,5.427-12.847S290.548,200.904,286.935,197.287z"/>
                        </g>
                     </svg>
                @endif
            </th>
        @endforeach
    </thead>
    <tbody class="text-dark" style="text-align:center">
        @foreach($questions as $question)
        <tr>
            <td class="py-1 pl-0 pr-0">
                <a title="update" href="{{ route('question.edit', ['id' => $question->id]) }}" class="btn m-0 p-0">
                    <svg  viewBox="0 0 492.49284 492" class="table-svg"  xmlns="http://www.w3.org/2000/svg"><path d="m304.140625 82.472656-270.976563 270.996094c-1.363281 1.367188-2.347656 3.09375-2.816406 4.949219l-30.035156 120.554687c-.898438 3.628906.167969 7.488282 2.816406 10.136719 2.003906 2.003906 4.734375 3.113281 7.527344 3.113281.855469 0 1.730469-.105468 2.582031-.320312l120.554688-30.039063c1.878906-.46875 3.585937-1.449219 4.949219-2.8125l271-270.976562zm0 0"/><path d="m476.875 45.523438-30.164062-30.164063c-20.160157-20.160156-55.296876-20.140625-75.433594 0l-36.949219 36.949219 105.597656 105.597656 36.949219-36.949219c10.070312-10.066406 15.617188-23.464843 15.617188-37.714843s-5.546876-27.648438-15.617188-37.71875zm0 0"/></svg>
                </a>
                <form title="delete" method="POST" action="{{ route('question.delete', ['id' => $question->id]) }}" class="btn m-0 p-0">
                    @csrf
                    <button type="submit" style="background: transparent; border: none; padding: 0; margin: 0;">
                        <svg version="1.1" class="table-svg" id="Capa_1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 612 612" style="enable-background:new 0 0 612 612;" xml:space="preserve">
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
            <td class="py-1">{{ $question->question }}</td>
            <td class="py-1">{{ $question->answer }}</td>
            <td class="py-1">{{ $question->created_at }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $questions->links("pagination::bootstrap-4") }}

</div>
@endsection