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
        <x-header />
        <x-slider />

        {{-- Mission and Vission Section --}}

        <section id="about" class="">
            <div class="container mx-auto px-4">
                <div class="flex items-center py-32">
                    @if($about)
                       <div class="w-1/2">
                            <img src="{{asset('storage/'.$about->img) }}" alt="Elite Virtual About us" class="w-[70%] mx-auto rounded-lg">
                        </div>
                        <div class="w-1/2">
                            <h2 class="roboto uppercase text-[35px] text-black font-semibold mb-4 underline underline-offset-8">{{$about->title}}</h2>
                            {!! $about->description !!}
                        </div> 
                    @endif
                    
                </div>
            </div>
        </section>

        {{-- Mission and Vission Section --}}

        <section id="mission-vision" class="bg-gradient-to-r from-cyan-500 to-blue-500">
            <div class="container mx-auto px-4">
                <div class="flex py-32">
                    @if($mission && $vision)
                       <div class="w-1/2 pr-4">
                            <img src="{{asset('storage/'.$mission->img) }}" alt="Elite Virtual mission statement" class="w-[200px]">
                            <h3 class="roboto uppercase text-[35px] text-white font-semibold mb-4 underline underline-offset-8">{{$mission->title}}</h3>
                            {!! $mission->description !!}
                        </div>
                        <div class="w-1/2 pl-2">
                            <img src="{{asset('storage/'.$vision->img) }}" alt="Elite Virtual vision statement" class="w-[200px]">
                            <h3 class="roboto uppercase text-[35px] text-white font-semibold mb-4 underline underline-offset-8">{{$vision->title}}</h3>
                            {!! $vision->description !!}
                        </div> 
                    @endif
                </div>
            </div>
        </section>

        <section id="photo" class="bg-center bg-fixed" style="background-image: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('{{ asset('images/elitephoto.jpg')}}')">
            <div class="container mx-auto px-4">
                <div class="flex py-24 items-center">
                    <img src="{{asset('images/header_logo.png')}}" alt="Elite Virtual Logo" class="w-28 mr-10">
                    <h4 class="animate-charcter roboto text-center text-[70px] font-bold tracking-widest">Elite Virtual Specialist</h4>
                    
                </div>
            </div>
        </section>
         {{-- Services Section --}}

        <section id="services" class="">
            <div class="container mx-auto px-4">
                <div class="py-32">
                  <h3 class="text-center text-[40px] roboto uppercase mb-20 underline underline-offset-8 text-black font-semibold">Our Services</h3>
                  <div class="grid grid-cols-5 gap-4 w-full">
                    @foreach ( $services as $service)
                        <div class="shadow px-4 py-6 rounded-md">
                            @if($service->img)
                                <img src="{{ asset('storage/'.$service->img) }}" alt="Elite Virtual Services - {{$service->title}}" class="w-[100px] mx-auto mb-4">
                            @endif
                            <h3 class="roboto text-2xl mb-4">{{$service->title}}</h3>
                            {!! $service->description !!}
                        </div>
                    @endforeach
                  </div>
                </div>
            </div>
        </section>
        
        {{-- Blog Section --}}
        @if($sectionBlog)
            <section id="blog" class="bg-[#02202E]">
                <div class="container mx-auto px-4 overflow-hidden ">
                    <div class="py-32">
                    <h3 class="text-center text-[40px] roboto uppercase mb-10 underline underline-offset-8 text-white font-semibold ">blog</h3>
                    @if($blogs)
                        <div class="swiper2">
                            <div class="swiper-wrapper">
                                @foreach ($blogs as $blog)
                                    @if($blog->img)
                                        <div class="swiper-slide">
                                            <div class="flex items-center">
                                                <div class="w-1/2 pr-4">
                                                    <h3 class="roboto uppercase text-[25px] text-white font-semibold mb-4">{{$blog->title}}</h3>
                                                    {!! $blog->description !!}
                                                </div>
                                                <div class="w-1/2">
                                                    <img src="{{asset('storage/'.$blog->img) }}" alt="Elite Virtual - {{$blog->title}}" class="w-[500px] mx-auto">
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        <div class="swiper-slide">
                                            <div class="flex">
                                                <div class="w-full pr-4">
                                                    <h3 class="roboto uppercase text-[25px] text-white font-semibold mb-4">{{$blog->title}}</h3>
                                                    {!! $blog->description !!}
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach  
                            </div>
                            
                        </div>
                        
                    @endif
                        
                    </div>
                </div>
            </section>
        @endif

        {{-- Blog Section --}}
        @if($sectionTeam)
            <section id="team">
                <div class="container mx-auto px-4">
                    <div class="py-32">
                        <h3 class="text-center text-[40px] roboto uppercase mb-20 underline underline-offset-8 text-black font-semibold">Meet Our Team</h3>
                        <div class="grid grid-cols-4 gap-4 w-full ">
                            @foreach ( $teams as $team)
                                <div class="shadow px-4 py-6">
                                    @if($team->img)
                                        <img src="{{ asset('storage/'.$team->img) }}" alt="Elite Virtual teams - {{$team->title}}" class="w-[150px] mx-auto mb-4 rounded-full">
                                    @endif
                                    <h3 class="roboto text-2xl mb-3 text-center">{{$team->name}}</h3>
                                    <p class="taviraj text-xl text-center">{{$team->position}}</p>
                                </div>
                            @endforeach
                          </div>
                    </div>
                </div>
            </section>
        @endif
        {{-- Announcement Section --}}
        
        <section id="announcement" style="background-image:  url('{{ asset('images/announcement2.jpg')}}')" class="bg-center bg-fixed">
            <div class="container mx-auto px-4">
                <div class="py-32">
                    @if($sectionAnnouncement)
                        @if($announcement)
                            <div class="w-[700px] rounded-md shadow mx-auto p-6 bg-white" >
                                <div class="flex items-center justify-center mb-5">
                                    <img src="{{ asset('images/loudspeaker.png')}}" alt="Elite Virtual - Announcement icon" class="w-[50px] mr-2">
                                    <h3 class="text-center text-black roboto text-[40px] ">Announcement</h3>
                                </div>
                                @if($announcement->img)
                                    <img src="{{asset('storage/'.$announcement->img)}}" alt="{{$announcement->name}}" class="max-w-[500px] mx-auto rounded">
                                @endif
                                <h3 class="roboto text-2xl mb-3 text-black">{{$announcement->name}}</h3>
                                {!! $announcement->description !!}
                            </div>
                        @endif
                    @endif
                </div>
            </div>
        </section>

        {{-- Contact Section --}}

        <section id="contact" class="relative">
            <div class="container mx-auto px-4 relative">
                <div class="py-32">
                    <h3 class="text-center text-[40px] roboto uppercase mb-20 underline underline-offset-8 text-black font-semibold">Contact Us</h3>
                    
                    <div class="relative">
                        <div class="w-full bg-[#02202E] flex py-20 px-10 rounded-bl-[300px]">
                            <div class="w-1/2 pl-16">
                                <p class="playfair text-white text-[40px]">We Redefine Excellence <br /> in Virtual Assistance.</p>
                                <p class="roboto text-white mt-10 text-sm">Send us message and we'll get to your questions <br /> answered as soon as possible.</p>
                                <div class="mt-10">
                                    <p class="roboto text-white mt-10 text-xl font-semibold">General Inquiries</p>
                                    <p class="roboto text-white text-sm">Reach us at <a href="mailto:elitevirtualspecialist@gmail.com" class="text-cyan-500">elitevirtualspecialist@gmail.com</a> <br /> and well get back to you asap.</p>
                                </div>
                                <div class="mt-10">
                                    <p class="roboto text-white text-sm">Follow us on <a href="https://www.facebook.com/profile.php?id=61553605800594&mibextid=LQQJ4d" class="text-cyan-500" target="_blank">Facebook</a>.</p>
                                    <p class="roboto text-white text-sm">Call us <a href="tel:+639687078579" class="text-cyan-500" target="_blank">+639687078579</a>.</p>
                                </div>
                            </div>
                            <div class="w-1/2">
                                <x-contact />
                            </div>
                        </div>
                       
                    </div>
                    
                </div>
            </div>
        </section>
        
        
        <footer class="bg-[#02202E] ">
        <div class="container mx-auto px-4 py-10">
            <p class="roboto text-lg text-center tracking-wide text-white">Copyright © {{ now()->year }} Elite Virtual Specialist</p>
        </div>
        </footer>
       
      
        <!-- Place <div> tag where you want the feed to appear -->

        @stack('modals')
        @livewireScripts
        @stack('scripts')
    </body>
</html>
