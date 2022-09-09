<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      @include('frontend.includes.head')
   </head>
   <body class="">     
      @include('frontend.includes.header')
      <main lass="py-4 container">
         @yield('content')
      </main>
       @include('frontend.includes.footer')
   </body>
</html>