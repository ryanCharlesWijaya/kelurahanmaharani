@extends('layouts.nav')

@section('container')
    <style>
        @media screen and (max-width:1366px) {
            #container{
                max-width: 80%;
                flex: 80%;
            }
        }
        @media screen and (max-width:1024px) {
            #container{
                max-width: 100%;
                flex: 100%;
            }
        }
        @media screen and (max-width:768px) {
            #container{
                max-width: 100%;
                flex: 100%;
            }
            .card-body h1{
                font-size: 3vw;
            }
            
            .mydeck{
                flex-direction: column;
                width: 80%;
            }
            .mycard{
                flex: 200%;
            }
        }
        @media screen and (max-width:425px) {
            #container{
                max-width: 100%;
                flex: 100%;
            }
            .card-body h1{
                font-size: 8vw;
            }
        }
    </style>
    <div id="container" class="row container">
        <h1 class="dashboard-title">Dashboard</h1>
        <div class="card-deck col-md-16 mydeck">
            <div class="card text-center mycard" style="border-radius:20px;">
                <div class="card-body">
                    <h5 class="card-title ">Total</h5>
                    <h1 class="text-success">100 Upload</h1>
                    <h5>Hari Ini</h5>
                </div>
            </div>
            <div class="card text-center mycard" style="border-radius:20px;">
                <div class="card-body">
                    <h5 class="card-title ">Total</h5>
                    <h1 class="text-primary">100 Upload</h1>
                    <h5>Minggu Ini</h5>
                </div>
            </div>
            <div class="card text-center mycard" style="border-radius:20px;">
                <div class="card-body">
                    <h5 class="card-title ">Total</h5>
                    <h1 class="text-danger">100 Upload</h1>
                    <h5>Bulan Ini</h5>
                </div>
            </div>
        </div>
    </div>
@endsection