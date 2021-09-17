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
        <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
        <!-- datatables -->
        
        <style>
            
        </style>
    </head>
    <body>
    <body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle">
            <div class="hamburger" id="hamburger-1">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </div>
        </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> 
                <div class="nav_list"> 
                    <a href="{{ route('dashboard') }}" class="nav_link"> 
                        <svg class="nav_icon svg" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="m197.332031 0h-160c-20.585937 0-37.332031 16.746094-37.332031 37.332031v96c0 20.589844 16.746094 37.335938 37.332031 37.335938h160c20.589844 0 37.335938-16.746094 37.335938-37.335938v-96c0-20.585937-16.746094-37.332031-37.335938-37.332031zm0 0"/><path d="m197.332031 213.332031h-160c-20.585937 0-37.332031 16.746094-37.332031 37.335938v224c0 20.585937 16.746094 37.332031 37.332031 37.332031h160c20.589844 0 37.335938-16.746094 37.335938-37.332031v-224c0-20.589844-16.746094-37.335938-37.335938-37.335938zm0 0"/><path d="m474.667969 341.332031h-160c-20.589844 0-37.335938 16.746094-37.335938 37.335938v96c0 20.585937 16.746094 37.332031 37.335938 37.332031h160c20.585937 0 37.332031-16.746094 37.332031-37.332031v-96c0-20.589844-16.746094-37.335938-37.332031-37.335938zm0 0"/><path d="m474.667969 0h-160c-20.589844 0-37.335938 16.746094-37.335938 37.332031v224c0 20.589844 16.746094 37.335938 37.335938 37.335938h160c20.585937 0 37.332031-16.746094 37.332031-37.335938v-224c0-20.585937-16.746094-37.332031-37.332031-37.332031zm0 0"/></svg>
                        <span class="nav_name">Dashboard</span> 
                    </a>
                    <a href="{{ route('arsip.index') }}" class="nav_link"> 
                        <svg class="nav_icon svg" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 408 408" style="enable-background:new 0 0 408 408;" xml:space="preserve"><g><g><path d="M372,88.661H206.32l-33-39.24c-0.985-1.184-2.461-1.848-4-1.8H36c-19.956,0.198-36.023,16.443-36,36.4v240 c-0.001,19.941,16.06,36.163,36,36.36h336c19.94-0.197,36.001-16.419,36-36.36v-199C408.001,105.08,391.94,88.859,372,88.661z"/></g></g></svg>
                        <span class="nav_name">Arsip</span> 
                    </a>  
                    <a href="{{ route('user.index') }}" class="nav_link"> 
                        <svg class="nav_icon svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><g><g><path d="M256,0c-74.439,0-135,60.561-135,135s60.561,135,135,135s135-60.561,135-135S330.439,0,256,0z"/></g></g><g><g><path d="M423.966,358.195C387.006,320.667,338.009,300,286,300h-60c-52.008,0-101.006,20.667-137.966,58.195 C51.255,395.539,31,444.833,31,497c0,8.284,6.716,15,15,15h420c8.284,0,15-6.716,15-15 C481,444.833,460.745,395.539,423.966,358.195z"/></g></g></svg>
                        <span class="nav_name">User</span> 
                    </a> 
                </div>
            </div> 
            <form action="{{ route('logout') }}" method="POST" class="nav_link"> 
            @csrf
            <button style="background: none; border: none; margin: 0; padding: 0" class="nav_link">
                <svg class="nav_icon svg" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"    viewBox="0 0 512.005 512.005" style="enable-background:new 0 0 512.005 512.005;" xml:space="preserve"><g>  <g> <g>         <path d="M192,256.003c0-35.285,28.715-64,64-64h85.333V21.336c0-11.776-9.536-21.333-21.333-21.333H21.333             C9.536,0.003,0,9.56,0,21.336v469.333c0,11.776,9.536,21.333,21.333,21.333H320c11.797,0,21.333-9.557,21.333-21.333V341.336                v-21.333H256C220.715,320.003,192,291.288,192,256.003z"/>            <path d="M507.201,269.48c0.065-0.079,0.119-0.164,0.182-0.244c0.366-0.462,0.721-0.933,1.048-1.425                c0.154-0.23,0.284-0.47,0.428-0.705c0.216-0.353,0.437-0.703,0.632-1.069c0.161-0.3,0.296-0.61,0.441-0.916             c0.15-0.317,0.309-0.629,0.444-0.954c0.145-0.35,0.263-0.707,0.388-1.062c0.104-0.295,0.219-0.585,0.31-0.886               c0.127-0.418,0.224-0.841,0.325-1.264c0.059-0.248,0.131-0.491,0.182-0.742c0.117-0.581,0.199-1.166,0.267-1.753                c0.012-0.101,0.033-0.199,0.043-0.301c0.145-1.434,0.145-2.88,0-4.314c-0.01-0.102-0.032-0.2-0.043-0.301               c-0.068-0.587-0.151-1.172-0.267-1.753c-0.05-0.251-0.122-0.494-0.182-0.742c-0.101-0.423-0.198-0.847-0.325-1.264              c-0.091-0.301-0.206-0.591-0.31-0.886c-0.126-0.355-0.243-0.713-0.388-1.062c-0.135-0.325-0.293-0.637-0.444-0.954              c-0.145-0.306-0.28-0.615-0.441-0.916c-0.196-0.366-0.416-0.716-0.632-1.069c-0.144-0.235-0.274-0.475-0.428-0.705              c-0.327-0.492-0.682-0.963-1.048-1.425c-0.063-0.08-0.117-0.164-0.182-0.244c-0.48-0.589-0.991-1.151-1.531-1.685l-85.254-85.254                c-8.341-8.341-21.824-8.341-30.165,0c-8.341,8.341-8.341,21.824,0,30.165l48.917,48.917H256                c-11.797,0-21.333,9.557-21.333,21.333c0,11.776,9.536,21.333,21.333,21.333h183.168l-48.917,48.917    c-8.341,8.341-8.341,21.824,0,30.165c4.16,4.16,9.621,6.251,15.083,6.251c5.461,0,10.923-2.091,15.083-6.251l85.254-85.254  C506.209,270.631,506.72,270.069,507.201,269.48z"/></g></g></g></svg>
                <span class="nav_name" style="color: white;">Keluar</span> 
            </button>
            </form>
        </nav>
    </div>
    <!--Container Main start-->
    <div class="height-100 bg-light">
        @yield('container')    
    </div>


    </body>
</html>
<script>
document.addEventListener("DOMContentLoaded", function(event) {

const showNavbar = (toggleId, navId, bodyId, headerId) =>{
const toggle = document.getElementById('hamburger-1'),
nav = document.getElementById(navId),
bodypd = document.getElementById(bodyId),
headerpd = document.getElementById(headerId)

// Validate that all variables exist
if(toggle && nav && bodypd && headerpd){
toggle.addEventListener('click', ()=>{
// show navbar
nav.classList.toggle('show')
// change icon
toggle.classList.toggle('is-active')
// add padding to body
bodypd.classList.toggle('body-pd')
// add padding to header
headerpd.classList.toggle('body-pd')
})
}
}

showNavbar('header-toggle','nav-bar','body-pd','header')

/*===== LINK ACTIVE =====*/
const linkColor = document.querySelectorAll('.nav_link')

function colorLink(){
if(linkColor){
linkColor.forEach(l=> l.classList.remove('active'))
this.classList.add('active')
}
}
linkColor.forEach(l=> l.addEventListener('click', colorLink))

// Your code to run since DOM is loaded and ready
});
$(document).ready(function(){
  $(".hamburger").click(function(){
    $(this).toggleClass("is-active");
  });
});

</script>