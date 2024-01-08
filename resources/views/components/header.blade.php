<div class="w-full fixed z-30 shadow transition-colors hidden lg:block" id="header">
    <div class="">
        <div class="container mx-auto px-4">
            <div class="flex py-4 justify-between items-center">
                <div class="flex items-center">
                    <img src="{{asset('images/header_logo.png')}}" alt="Elite Virtual Logo" class="w-10">
                    <h1 class="text-white text-2xl roboto font-bold tracking-wider uppercase ml-4">Elite Virtual Specialist</h1>
                </div>
                
                <ul class="flex">
                    @foreach ($menu as $item)
                        <li class="roboto text-white mr-5 text-lg">
                            <a href="{{$item->url}}">{{$item->name}}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
   
</div>
<div class="fixed w-full lg:hidden flex py-4 z-30" x-data="{showMenu : false}" id="mobile">
    <div class="container mx-auto px-4">
        <div class="mx-auto flex items-center justify-start md:justify-center">
            <img src="{{asset('images/header_logo.png')}}" alt="Elite Virtual Logo" class="w-10">
            <h1 class="text-white text-lg md:text-2xl roboto font-bold tracking-wider uppercase ml-4">Elite Virtual Specialist</h1>
        </div>
        
    </div>

    <button @click.prevent="showMenu = !showMenu" class=" flex justify-between absolute right-3 top-5" id="toggleBody">
        <svg x-show="!showMenu" class="w-8 h-8 z-30 mr-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="#fefefe">
            <path d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
        <svg x-cloak x-show="showMenu" class="w-8 h-8 z-30 mr-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="#fefefe"><path d="M6 18L18 6M6 6l12 12"></path></svg>
    </button>
    
    <div class="absolute top-0 bg-[#02202E] right-0 w-[300px] sm:w-64  pt-4 shadow space-y-6 h-screen" x-cloak x-show="showMenu" 
                    x-transition:enter="transform transition-transform duration-300"
                    x-transition:enter-start="translate-x-full"
                    x-transition:enter-end="translate-x-0"
                    x-transition:leave="transform transition-transform duration-300"
                    x-transition:leave-start="translate-x-0"
                    x-transition:leave-end="translate-x-full">

    <!-- Your content here -->
    <div class="navigation-mobile mt-12">
        
        <ul class="mx-4 mb-5">
            @foreach ($menu as $item)
                <li class="flex py-2 px-4 roboto text-lg text-white">
                    <a href="{{$item['url']}}"> {{$item->name}}</a>
               </li>
            @endforeach
        </ul>
    </div>
    </div>
</div>
{{-- bg-[#02202E] --}}