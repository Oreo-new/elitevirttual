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

        
        <section class="py-20" id="about">
            <div class="container mx-auto px-4">
                <x-about />
            </div>
        </section>
      

        <section id="photo" class="bg-center bg-fixed" style="background-image: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('{{ asset('images/elitephoto.jpg')}}')">
            <div class="container mx-auto px-4">
                <div class="flex py-32 items-center">
                    
                    
                </div>
            </div>
        </section>
         {{-- Services Section --}}

        <section id="services" class="py-20">
            <div class="container mx-auto px-4">
                <div class="">
                  <h3 class="text-3xl poppins uppercase mb-10 text-black font-semibold" data-aos="fade-up" data-aos-anchor-placement="top-bottom">Our Services</h3>
                  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 w-full">
                    @php
                        $counter = 0;
                    @endphp
                    @foreach ( $services as $service)
                        @php
                            $counter++;
                            $count = sprintf('%02d', $counter );
                        @endphp
                        <div class="service shadow px-4 py-6 rounded-md relative cursor-pointer h-[300px] lg:h-[350px] flex items-center" style="background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) )" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                            <span class="taviraj text-3xl text-white font-bold absolute top-4 left-4">{{  $count }}</span>
                            <h3 class="poppins text-3xl  text-white text-center w-full">{{$service->title}}</h3>
                            <div class="description absolute top-0 left-0 right-0 bottom-0 p-4 bg-[#10303e] rounded-md opacity-0 transition-opacity">
                                <div class="flex items-center transition-all desc-h">
                                    {!! $service->description !!}
                                </div>   
                            </div>
                        </div>

                        
                    @endforeach
                  </div>
                </div>
            </div>
        </section>
        
        {{-- Blog Section --}}
        @if($sectionBlog)
            <section id="blog" class="bg-[#10303e] py-20">
                <div class="container mx-auto px-4 overflow-hidden ">
                    <h3 class="text-3xl poppins uppercase mb-10 text-white font-semibold" data-aos="fade-up" data-aos-anchor-placement="top-bottom">Our Blog</h3>
                    <x-blog />
                </div>
            </section>
        @endif

        {{-- Blog Section --}}
        @if($sectionTeam)
            <section id="team" class="py-20">
                <div class="container mx-auto px-4">
                    <div>
                        <h3 class="text-center text-3xl poppins uppercase mb-20 underline underline-offset-8 text-black font-semibold" data-aos="fade-up" data-aos-anchor-placement="top-bottom">Meet Our Team</h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 w-full ">
                            @foreach ( $teams as $team)
                                <div class="shadow px-4 py-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
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

        {{-- Works Section --}}
        <section id="works" class="bg-[#10303e] py-20">
            <div class="container mx-auto px-4 overflow-hidden ">
                <h3 class="text-3xl poppins uppercase mb-10 text-white font-semibold" data-aos="fade-up" data-aos-anchor-placement="top-bottom">Our Recent Projects</h3>
                @if($works)
                    <div class="swiper2" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                        <div class="swiper-wrapper">
                            @foreach ($works as $work)
                                <div class="swiper-slide bg-[#10303e]">
                                    <div class="h-[400px] pro relative " style="background: url('{{ asset('storage/'.$work->img) }}')">
                                        <div class="description absolute top-0 left-0 right-0 bottom-0 p-4 bg-white  opacity-0 transition-opacity">
                                            <div class="flex items-center transition-all h-[400px]">
                                                <div class="w-full">
                                                    <h4 class="poppins text-xl text-center uppercase font-bold mb-5">{{$work->name }}</h4>
                                                    <a href="{{$work->link}}" class="text-white bg-[#10303e] p-2 poppins text-center w-full block" target="_blank">Visit link</a>
                                                </div>
                                            </div>   
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>
        </section>
        {{-- Announcement Section --}}
        
        <section id="announcement" style="background-image:  url('{{ asset('images/announcement2.jpg')}}')" class="bg-center bg-fixed">
            <div class="container mx-auto px-4">
                <div class="py-32">
                    @if($sectionAnnouncement)
                        @if($announcement)
                            <div class="lg:w-[700px] rounded-md shadow mx-auto p-6 bg-white" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                                <div class="flex items-center justify-center mb-5">
                                    <img src="{{ asset('images/loudspeaker.png')}}" alt="Elite Virtual - Announcement icon" class="w-[50px] mr-2">
                                    <h3 class="text-center text-black poppins text-[40px] ">Announcement</h3>
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
                <div class="py-20">
                    <h3 class="text-center text-3xl poppins uppercase mb-20 underline underline-offset-8 text-black font-semibold">Contact Us</h3>
                    
                    <div class="relative">
                        <div class="w-full bg-[#02202E] flex flex-wrap lg:flex-nowrap py-20 px-10">
                            <div class="w-full lg:w-1/2 lg:pl-16" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
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
                            <div class="w-full lg:w-1/2 mt-10 lg:mt-0" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
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
