<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Kelurahan Maharani |</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font (font awesome)-->
        <link href="{{ asset('sass/app.scss') }}" rel="stylesheet">
        <!-- Core js (includes jquery)-->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- datatables -->
        
        <style>
            body{
                overflow-x: hidden;
                width: 100vw;
            }
            
            #navbar-mobile{
                display: none;
            }
            .navbar-mobile{
                    position:fixed;
                    z-index: 100;
                    width: 40%;
                    height: 100vh;
                    background-color: white;
                    display: none;
                }
                .navbar-mobile-item{
                    width: 100%;
                    float: left;
                    height: 10vw;
                    background-color: white;
                    padding-top: 3vw;
                    border: 2px solid rgba(0,0,0,0.1);
                    color: rgba(0,0,0,0.8);
                    font-size: 2.2vw;
                }
                .navbar-mobile-button{
                    width: 5vw;
                    height: 5vw;
                    margin-bottom: 5vw;
                    border-radius: 10px;
                    border:none;
                    font-size: 2vw;
                    font-weight: bold;
                    color: rgba(0,0,0,0.5);
                    display: block;
                    display: none;
                }
            td{
                vertical-align: middle;
            }
            tbody tr:nth-child(odd){
                background-color: rgba(203,254,206, 0.2);
            }
            tbody tr:nth-child(even){
                background-color: rgba(255, 255, 255, 0);
            }

            @media screen and (max-width:425px) {
                #container{
                    margin:0;
                    padding:0;
                    width: 100%;
                }
                .dashboard-title{
                    width: 100%;
                    text-align: center;
                }
                .card{
                    width: 90%;
                    margin-left: 20%;
                }
                #page-content-wrapper{
                    flex: 100%;
                    max-width: 100%;
                    margin:0;
                    padding:0;
                }
                .container-fluid{
                    padding:0;
                }
                .navbar-mobile{
                    width: 9    0vw;
                }
                .navbar-mobile-item{
                    width: 100%;
                    font-size: 10vw;
                    float: left;
                    height: 30vw;
                    text-decoration: none;
                }
                .navbar-mobile-item span{
                    margin-left: 5vw;
                }
                .svg{
                    width: 15vw;
                    float: left;
                }
                .navbar-mobile-button{
                    display: block;
                    float: left;
                    width: 20vw;
                    height: 20vw;
                    font-size: 10vw;
                    fill: rgba(0,0,0,0.5);
                }
                #navbar{
                    display: none;
                }
                #page-content-wrapper{
                    flex: 100%;
                    max-width: 100%;
                }
                #navbar{
                    display: none;
                }
                
                .svg{
                    width: 15vw;
                    fill: rgba(0,0,0,0.5);
                }
                .col-md-3{
                    padding:0;
                }
                .col-md-2{
                    padding:0;
                }
                .form-select{
                    width: 80%;
                }
                #search{
                    float: left;
                    padding-bottom: 2vw;
                }
                #search input, #search select{
                    margin-bottom: 5vw;
                    height: 15vw;
                }
                #arsip-search-button{
                    width: 20vw;
                    font-size: 5vw;
                }
                .table-svg{
                    width: 5vw;
                }
                #addData{
                    padding-top: 5vw;
                    height: 18vw;
                    font-size: 5vw;
                }
            }      
            @media screen and (min-width:425px) and (max-width:769px)  {
                #search{
                    width: 40%;
                }
                #navbar{
                    width: 20%;
                    
                }
                .sidebar-heading{
                    display: none;
                }
                #navbar a{
                    font-size: 3vw;
                    text-align: center;
                }
                .col-md-3{
                    padding:0;
                }
                .col-md-2{
                    padding:0;
                }
                .svg{
                    width: 14vw;
                    fill: rgba(0,0,0,0.5);
                }
            }
            @media screen and (min-width:770px){
                #navbar{
                    width: 20%;
                    background-color: red;
                }
                .svg{
                    width: 2vw;
                    fill: rgba(0,0,0,0.5);
                }
                .table-svg{
                    width: 1vw;
                    fill: rgba(0,0,0,1);
                }
            }
        </style>
    </head>
    <body>
        <div class="d-flex" id="wrapper" >
            <!-- Sidebar-->
            <nav style="height:100vh;"id="navbar" class="col-md-2 bg-light sidebar p-0">
            <div style="position:sticky;top:0rem;">
                <div class="sidebar-heading bg-success text-light border-bottom pb-3">
                    <h2 class="p-3 pt-5" style="font-weight: bold;">Kelurahan Maharani</h2>
                    <h5 class="pl-3">Welcome, Steve</h5>
                </div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light h5 p-3 m-0" href="dashboard"> 
                        <svg  viewBox="0 0 512 512" class="svg" xmlns="http://www.w3.org/2000/svg"><path d="m197.332031 0h-160c-20.585937 0-37.332031 16.746094-37.332031 37.332031v96c0 20.589844 16.746094 37.335938 37.332031 37.335938h160c20.589844 0 37.335938-16.746094 37.335938-37.335938v-96c0-20.585937-16.746094-37.332031-37.335938-37.332031zm0 0"/><path d="m197.332031 213.332031h-160c-20.585937 0-37.332031 16.746094-37.332031 37.335938v224c0 20.585937 16.746094 37.332031 37.332031 37.332031h160c20.589844 0 37.335938-16.746094 37.335938-37.332031v-224c0-20.589844-16.746094-37.335938-37.335938-37.335938zm0 0"/><path d="m474.667969 341.332031h-160c-20.589844 0-37.335938 16.746094-37.335938 37.335938v96c0 20.585937 16.746094 37.332031 37.335938 37.332031h160c20.585937 0 37.332031-16.746094 37.332031-37.332031v-96c0-20.589844-16.746094-37.335938-37.332031-37.335938zm0 0"/><path d="m474.667969 0h-160c-20.589844 0-37.335938 16.746094-37.335938 37.332031v224c0 20.589844 16.746094 37.335938 37.335938 37.335938h160c20.585937 0 37.332031-16.746094 37.332031-37.335938v-224c0-20.585937-16.746094-37.332031-37.332031-37.332031zm0 0"/></svg>
                        Dashboard
                    </a>
                    <a class="list-group-item list-group-item-action list-group-item-light h5 p-3 m-0" href="arsip">

                        <svg class="svg" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 408 408" style="enable-background:new 0 0 408 408;" xml:space="preserve"><g>
                                    <g>
                                        <path d="M372,88.661H206.32l-33-39.24c-0.985-1.184-2.461-1.848-4-1.8H36c-19.956,0.198-36.023,16.443-36,36.4v240
                                            c-0.001,19.941,16.06,36.163,36,36.36h336c19.94-0.197,36.001-16.419,36-36.36v-199C408.001,105.08,391.94,88.859,372,88.661z"/>
                                    </g>
                                </g></svg>
                        Arsip
                    </a>
                    <a class="list-group-item list-group-item-action list-group-item-light h5 p-3 m-0" href="user"> 
                        <svg class="svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                            <g>
                                <g>
                                    <path d="M256,0c-74.439,0-135,60.561-135,135s60.561,135,135,135s135-60.561,135-135S330.439,0,256,0z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M423.966,358.195C387.006,320.667,338.009,300,286,300h-60c-52.008,0-101.006,20.667-137.966,58.195
                                        C51.255,395.539,31,444.833,31,497c0,8.284,6.716,15,15,15h420c8.284,0,15-6.716,15-15
                                        C481,444.833,460.745,395.539,423.966,358.195z"/>
                                </g>
                            </g>
                        </svg>
                        User
                    </a>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="list-group-item list-group-item-action list-group-item-light h5 p-3 m-0" type="submit">
                            <span>
                        <svg class="svg" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 512.005 512.005" style="enable-background:new 0 0 512.005 512.005;" xml:space="preserve">
                        <g>
                            <g>
                                <g>
                                    <path d="M192,256.003c0-35.285,28.715-64,64-64h85.333V21.336c0-11.776-9.536-21.333-21.333-21.333H21.333
                                        C9.536,0.003,0,9.56,0,21.336v469.333c0,11.776,9.536,21.333,21.333,21.333H320c11.797,0,21.333-9.557,21.333-21.333V341.336
                                        v-21.333H256C220.715,320.003,192,291.288,192,256.003z"/>
                                    <path d="M507.201,269.48c0.065-0.079,0.119-0.164,0.182-0.244c0.366-0.462,0.721-0.933,1.048-1.425
                                        c0.154-0.23,0.284-0.47,0.428-0.705c0.216-0.353,0.437-0.703,0.632-1.069c0.161-0.3,0.296-0.61,0.441-0.916
                                        c0.15-0.317,0.309-0.629,0.444-0.954c0.145-0.35,0.263-0.707,0.388-1.062c0.104-0.295,0.219-0.585,0.31-0.886
                                        c0.127-0.418,0.224-0.841,0.325-1.264c0.059-0.248,0.131-0.491,0.182-0.742c0.117-0.581,0.199-1.166,0.267-1.753
                                        c0.012-0.101,0.033-0.199,0.043-0.301c0.145-1.434,0.145-2.88,0-4.314c-0.01-0.102-0.032-0.2-0.043-0.301
                                        c-0.068-0.587-0.151-1.172-0.267-1.753c-0.05-0.251-0.122-0.494-0.182-0.742c-0.101-0.423-0.198-0.847-0.325-1.264
                                        c-0.091-0.301-0.206-0.591-0.31-0.886c-0.126-0.355-0.243-0.713-0.388-1.062c-0.135-0.325-0.293-0.637-0.444-0.954
                                        c-0.145-0.306-0.28-0.615-0.441-0.916c-0.196-0.366-0.416-0.716-0.632-1.069c-0.144-0.235-0.274-0.475-0.428-0.705
                                        c-0.327-0.492-0.682-0.963-1.048-1.425c-0.063-0.08-0.117-0.164-0.182-0.244c-0.48-0.589-0.991-1.151-1.531-1.685l-85.254-85.254
                                        c-8.341-8.341-21.824-8.341-30.165,0c-8.341,8.341-8.341,21.824,0,30.165l48.917,48.917H256
                                        c-11.797,0-21.333,9.557-21.333,21.333c0,11.776,9.536,21.333,21.333,21.333h183.168l-48.917,48.917
                                        c-8.341,8.341-8.341,21.824,0,30.165c4.16,4.16,9.621,6.251,15.083,6.251c5.461,0,10.923-2.091,15.083-6.251l85.254-85.254
                                        C506.209,270.631,506.72,270.069,507.201,269.48z"/>
                                </g>
                            </g>
                        </g>
                        </svg>


                            </span>Keluar
                        </button>
                    </form>
                </div>
            </div>
            </nav>

            <!-- sidebar tablet and mobile -->
            <nav class="navbar-mobile">
                <button class="navbar-mobile-button" onclick="showNav()">
                    X
                </button>
                    <a class="navbar-mobile-item" href="Dashboard"> 
                    <span>
                    <svg  viewBox="0 0 512 512" class="svg" xmlns="http://www.w3.org/2000/svg"><path d="m197.332031 0h-160c-20.585937 0-37.332031 16.746094-37.332031 37.332031v96c0 20.589844 16.746094 37.335938 37.332031 37.335938h160c20.589844 0 37.335938-16.746094 37.335938-37.335938v-96c0-20.585937-16.746094-37.332031-37.335938-37.332031zm0 0"/><path d="m197.332031 213.332031h-160c-20.585937 0-37.332031 16.746094-37.332031 37.335938v224c0 20.585937 16.746094 37.332031 37.332031 37.332031h160c20.589844 0 37.335938-16.746094 37.335938-37.332031v-224c0-20.589844-16.746094-37.335938-37.335938-37.335938zm0 0"/><path d="m474.667969 341.332031h-160c-20.589844 0-37.335938 16.746094-37.335938 37.335938v96c0 20.585937 16.746094 37.332031 37.335938 37.332031h160c20.585937 0 37.332031-16.746094 37.332031-37.332031v-96c0-20.589844-16.746094-37.335938-37.332031-37.335938zm0 0"/><path d="m474.667969 0h-160c-20.589844 0-37.335938 16.746094-37.335938 37.332031v224c0 20.589844 16.746094 37.335938 37.335938 37.335938h160c20.585937 0 37.332031-16.746094 37.332031-37.335938v-224c0-20.585937-16.746094-37.332031-37.332031-37.332031zm0 0"/></svg>
                    </span>
                        Dashboard
                    </a>
                    <a class="navbar-mobile-item" href="Arsip">
                    <span>
                    <svg class="svg" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                viewBox="0 0 408 408" style="enable-background:new 0 0 408 408;" xml:space="preserve">
                            <g>
                                <g>
                                    <path d="M372,88.661H206.32l-33-39.24c-0.985-1.184-2.461-1.848-4-1.8H36c-19.956,0.198-36.023,16.443-36,36.4v240
                                        c-0.001,19.941,16.06,36.163,36,36.36h336c19.94-0.197,36.001-16.419,36-36.36v-199C408.001,105.08,391.94,88.859,372,88.661z"/>
                                </g>
                            </g>
                            </svg>
                        </span>
                            Arsip
                    </a>
                    <a class="navbar-mobile-item" href="user">
                        <span>
                        <svg class="svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                            <g>
                                <g>
                                    <path d="M256,0c-74.439,0-135,60.561-135,135s60.561,135,135,135s135-60.561,135-135S330.439,0,256,0z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M423.966,358.195C387.006,320.667,338.009,300,286,300h-60c-52.008,0-101.006,20.667-137.966,58.195
                                        C51.255,395.539,31,444.833,31,497c0,8.284,6.716,15,15,15h420c8.284,0,15-6.716,15-15
                                        C481,444.833,460.745,395.539,423.966,358.195z"/>
                                </g>
                            </g>
                        </svg>
                        </span>
                        User
                    </a>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <a class="navbar-mobile-item">
                            <span>
                        <svg class="svg" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 512.005 512.005" style="enable-background:new 0 0 512.005 512.005;" xml:space="preserve">
                        <g>
                            <g>
                                <g>
                                    <path d="M192,256.003c0-35.285,28.715-64,64-64h85.333V21.336c0-11.776-9.536-21.333-21.333-21.333H21.333
                                        C9.536,0.003,0,9.56,0,21.336v469.333c0,11.776,9.536,21.333,21.333,21.333H320c11.797,0,21.333-9.557,21.333-21.333V341.336
                                        v-21.333H256C220.715,320.003,192,291.288,192,256.003z"/>
                                    <path d="M507.201,269.48c0.065-0.079,0.119-0.164,0.182-0.244c0.366-0.462,0.721-0.933,1.048-1.425
                                        c0.154-0.23,0.284-0.47,0.428-0.705c0.216-0.353,0.437-0.703,0.632-1.069c0.161-0.3,0.296-0.61,0.441-0.916
                                        c0.15-0.317,0.309-0.629,0.444-0.954c0.145-0.35,0.263-0.707,0.388-1.062c0.104-0.295,0.219-0.585,0.31-0.886
                                        c0.127-0.418,0.224-0.841,0.325-1.264c0.059-0.248,0.131-0.491,0.182-0.742c0.117-0.581,0.199-1.166,0.267-1.753
                                        c0.012-0.101,0.033-0.199,0.043-0.301c0.145-1.434,0.145-2.88,0-4.314c-0.01-0.102-0.032-0.2-0.043-0.301
                                        c-0.068-0.587-0.151-1.172-0.267-1.753c-0.05-0.251-0.122-0.494-0.182-0.742c-0.101-0.423-0.198-0.847-0.325-1.264
                                        c-0.091-0.301-0.206-0.591-0.31-0.886c-0.126-0.355-0.243-0.713-0.388-1.062c-0.135-0.325-0.293-0.637-0.444-0.954
                                        c-0.145-0.306-0.28-0.615-0.441-0.916c-0.196-0.366-0.416-0.716-0.632-1.069c-0.144-0.235-0.274-0.475-0.428-0.705
                                        c-0.327-0.492-0.682-0.963-1.048-1.425c-0.063-0.08-0.117-0.164-0.182-0.244c-0.48-0.589-0.991-1.151-1.531-1.685l-85.254-85.254
                                        c-8.341-8.341-21.824-8.341-30.165,0c-8.341,8.341-8.341,21.824,0,30.165l48.917,48.917H256
                                        c-11.797,0-21.333,9.557-21.333,21.333c0,11.776,9.536,21.333,21.333,21.333h183.168l-48.917,48.917
                                        c-8.341,8.341-8.341,21.824,0,30.165c4.16,4.16,9.621,6.251,15.083,6.251c5.461,0,10.923-2.091,15.083-6.251l85.254-85.254
                                        C506.209,270.631,506.72,270.069,507.201,269.48z"/>
                                </g>
                            </g>
                        </g>
                        </svg>


                            </span>Keluar
                        </a>
                    </form>
                    
            </nav>



            <!-- Page content wrapper-->
            <div id="page-content-wrapper" style="border-left: 2px solid rgba(0,0,0,0.1);">
                <div class="container-fluid">
                <button class="navbar-mobile-button" onclick="showNav()">
                <svg  enable-background="new 0 0 512 512" class="svg"  viewBox="0 0 512 512"  xmlns="http://www.w3.org/2000/svg"><path d="m464.883 64.267h-417.766c-25.98 0-47.117 21.136-47.117 47.149 0 25.98 21.137 47.117 47.117 47.117h417.766c25.98 0 47.117-21.137 47.117-47.117 0-26.013-21.137-47.149-47.117-47.149z"/><path d="m464.883 208.867h-417.766c-25.98 0-47.117 21.136-47.117 47.149 0 25.98 21.137 47.117 47.117 47.117h417.766c25.98 0 47.117-21.137 47.117-47.117 0-26.013-21.137-47.149-47.117-47.149z"/><path d="m464.883 353.467h-417.766c-25.98 0-47.117 21.137-47.117 47.149 0 25.98 21.137 47.117 47.117 47.117h417.766c25.98 0 47.117-21.137 47.117-47.117 0-26.012-21.137-47.149-47.117-47.149z"/></svg>
                </button>
                    @yield('container')    
                </div>
            </div>
        </div>
    </body>
</html>
<script>
var sidebarcount = 0;
function showNav(){
    var sidebar = document.getElementsByClassName('navbar-mobile')[0];
    if(sidebarcount === 0){
        sidebar.style.display ="block";
        sidebarcount++
    }
    else{
        sidebar.style.display ="none";
        sidebarcount = 0;
    }
}
</script>