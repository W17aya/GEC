<!doctype html>
 <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> 
  <head>
     <meta charset="utf-8"> 
      <meta name="viewport" content="width=device-width, initial-scale=1">
       <!-- CSRF Token -->
     <meta name="csrf-token" content="{{ csrf_token() }}"> 
     <title>GEC</title>
<<<<<<< HEAD
     <link rel="icon" href="{{ asset('img/logo gec.jpg') }}" type="image/logo.png">
=======
     <link rel="icon" href="{{ asset('img/favicon.png') }}" type="image/png">
>>>>>>> parent of 82d76b6... Tampilan_Mark_1

     <script src="{{ asset('js/app.js') }}" defer></script>
     
      <!-- Styles -->
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      </head>
      <body>

            <nav id="main-navbar" class="navbar navbar-expand-md navbar-dark bg-dark py-0">
                <div class="container">
                    <a class="navbar-brand" href="{{route('home') }}">
                    <span class="d-none" > GEC</span>
                    <img src="{{ asset('img/logoo.png') }}"
                    27 class="main-logo d-none d-md-inline" alt="GEC logo">
<<<<<<< HEAD
                     <img src="{{ asset('img/logo gec.jpg') }}"
=======
                     <img src="{{ asset('img/logoo.png') }}"
>>>>>>> parent of 82d76b6... Tampilan_Mark_1
                    29 class="small-logo d-inline d-md-none" alt="GEC logo">
                    </a>
                     <button class="navbar-toggler" type="button" data-toggle="collapse"
                    32 data-target="#navbarNav">
                     <span class="navbar-toggler-icon"></span>
                     </button>
                    
                     <div class="collapse navbar-collapse" id="navbarNav">
                    
                     <!-- Left Side Of Navbar -->
                     <ul class="navbar-nav">
                     <li class="nav-item">
                     <a class="nav-link p-4 active" href="{{ route('home') }}">Home</a>
                     </li>
                     <li class="nav-item">
                     <a class="nav-link p-4" href="{{ route('about') }}">Profile</a>
                     </li>
                     <li class="nav-item">
                     <a class="nav-link p-4" href="#">Paket</a>
                     </li>
                     <li class="nav-item">
                     <a class="nav-link p-4" href="#">Galeri</a>
                     </li>
                     </ul>
                    <!-- Right Side Of Navbar -->
 <ul class="navbar-nav ml-auto">
    <!-- Authentication Links -->
     @guest
     <li class="nav-item">
     <a class="nav-link p-4" href="{{ route('login') }}">Login</a>
     </li>
     @if (Route::has('register'))
     <li class="nav-item">
     <a class="nav-link p-4" href="{{ route('register') }}">
     Register</a>
     </li>
     @endif
 @else
     <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle p-4"
 href="#" role="button" data-toggle="dropdown" v-pre>
 {{ Auth::user()->nama }} <span class="caret"></span>
 </a>

 <div class="dropdown-menu dropdown-menu-right p-0 border-0">
 <a class="dropdown-item bg-dark text-white p-2 text-center"
 href="{{ route('logout') }}" onclick="event.preventDefault();
 document.getElementById('logout-form').submit();">
 Logout
 </a>

 <form id="logout-form" action="{{ route('logout') }}"
 method="POST" style="display: none;">
 @csrf
 </form>
 </div>
 </li>
 @endguest
 </ul>
 </div>

 </div>
 </nav>

 @yield('content')

 <!-- FOOTER -->
 <footer id="main-footer" class="text-white bg-dark py-4">
 <div class="container">
 <div class="row">
 <div class="col-md-3 text-center text-md-left">
 <a href="index.html">
<<<<<<< HEAD
 <img src="{{ asset('img/logo gec.jpg') }}" style="height: 60px;">
=======
 <img src="{{ asset('img/GEC_logo.png') }}" style="height: 60px;">
>>>>>>> parent of 82d76b6... Tampilan_Mark_1
 </a>
 <p>PELATIHAN DAN PENDAMPINGAN KAPAL PESIAR
 </p>
 </div>

 <div class="col-md-3 text-center">
 <h5>Community</h5>
 <ul class="list-unstyled">
 <li><a href="#" class="text-white">Activity</a></li>
 <li><a href="#" class="text-white">Members</a></li>
 {{-- <li><a href="#" class="text-white">Alumni</a></li> --}}
 {{-- <li><a href="#" class="text-white">Forums</a></li> --}}
 </ul>
 </div>

 <div class="col-md-3 text-center">
 <h5>Our Services</h5>
 <ul class="list-unstyled">
 <li><a href="#" class="text-white">Hire Our Talents</a></li>
 {{-- <li><a href="#" class="text-white">Help/Contact Us</a></li> --}}


 <li><a href="#" class="text-white">Corporate Training</a></li>
 {{-- <li><a href="#" class="text-white">Cookie Policy</a></li>
 <li><a href="#" class="text-white">Terms & Conditions</a></li> --}}
 </ul>
 </div>

 <div class="col-md-3 text-center text-md-left">
 <h5>Contact Us</h5>
 <div class="text-nowrap"><i class="fas fa-envelope fa-fw mr-3"></i>
 ekowijayawindows@gmail.com</div>
 <div class="text-nowrap"><i class="fas fa-phone fa-fw mr-3"></i>
 (+62) 815 4869 4576</div>
 </div>
 </div>

 <div class="row mt-3 mt-md-0">
<div class="col-md-3 mr-md-auto text-center text-md-left">
 <small>&copy; GEC 2020 </small>
</div>
 <div class="col-md-3 text-center text-md-left">
 <div>
 <a href="#" class="text-white mr-2">
 <i class="fab fa-facebook fa-lg"></i>
 </a>
 <a href="#" class="text-white mr-2">
 <i class="fab fa-twitter fa-lg"></i>
 </a>
 <a href="#" class="text-white mr-2">
 <i class="fab fa-instagram fa-lg"></i>
 </a>
 <a href="#" class="text-white mr-2">
 <i class="fab fa-google-plus fa-lg"></i>
 </a>
 <a href="#" class="text-white mr-2">
 <i class="fab fa-github fa-lg"></i>
 </a>
 </div>
 </div>
 </div>

 </div>
 </footer>
 </body>
</html>