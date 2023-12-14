<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="preconnect" href="https://fonts.googleapis.com"> 
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
        
        <title>Elite Virtual Specialist</title>
       
    
    
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
        <link rel="shortcut icon" href="{{ asset('/images/favicon.ico') }}">
        <!-- Scripts -->
        {{-- <script src="{{ mix('js/app.js') }}" defer></script> --}}
        <script src='https://www.google.com/recaptcha/api.js'></script>
    </head>
    <body class="font-serif antialiased" >
    

     

        
        <footer class="bg-[#E5E8E5] ">
        <div class="container mx-auto px-4 py-10">
            <p class="roboto text-lg text-center tracking-wide">Copyright © {{ now()->year }} Elite Virtual</p>
        </div>
        </footer>
       
      
        <!-- Place <div> tag where you want the feed to appear -->

        @stack('modals')
        @livewireScripts
        @stack('scripts')
    </body>
</html>
