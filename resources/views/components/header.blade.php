<div class="w-full fixed z-30 shadow transition-colors" id="header">
    <div class="">
        <div class="container mx-auto px-4">
            <div class="flex py-4 justify-between items-center">
                <div class="flex items-center">
                    <img src="{{asset('images/header_logo.png')}}" alt="Elite Virtual Logo" class="w-10">
                    <h1 class="text-white text-2xl roboto font-bold tracking-wider uppercase ml-4">Elite Virtual</h1>
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

{{-- bg-[#02202E] --}}