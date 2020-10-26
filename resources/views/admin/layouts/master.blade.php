<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width,initial-scale=1">
     @yield('title')
     @include('admin.includes.styles')
     @yield('styles')
</head>

<body>

     <!--Preloader start-->
     <div id="preloader">
          <div class="sk-three-bounce">
               <div class="sk-child sk-bounce1"></div>
               <div class="sk-child sk-bounce2"></div>
               <div class="sk-child sk-bounce3"></div>
          </div>
     </div>
     <!--Preloader end-->

     <!--Main wrapper start-->
     <div id="main-wrapper">

          <!--Nav header start-->
          <div class="nav-header">
               <a href="index.html" class="brand-logo">
                    <img class="logo-abbr" src="{{ asset('admin/images/logo.png') }}" alt="">
                    <img class="logo-compact" src="{{ asset('admin/images/logo-text.png') }}" alt="">
                    <img class="brand-title" src="{{ asset('admin/images/logo-text.png') }}" alt="">
               </a>

               <div class="nav-control">
                    <div class="hamburger">
                         <span class="line"></span><span class="line"></span><span class="line"></span>
                    </div>
               </div>
          </div>
          <!--Nav header end-->
          @include('admin.includes.header')
          @include('admin.includes.sidebar')

          <div class="content-body">
               @yield('content')
          </div>

     </div>
     <!--Main wrapper end-->


     @include('admin.includes.scripts')
     @yield('scripts')
</body>

</html>