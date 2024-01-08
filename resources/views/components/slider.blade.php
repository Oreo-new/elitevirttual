<div class="w-full h-screen relative" id="home">
    <div class="swiper">
        <div class="swiper-wrapper">
            @if(!$slider->isEmpty())
                @foreach ($slider as $item)
                    <div class="swiper-slide">
                        <div class="image bg-center bg-cover w-full h-screen" style="background-image: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('{{ asset('storage/'.$item->img)}}')">

                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
    <div class="logo absolute top-0 bottom-0 left-0 right-0 z-20"> 
        <img src="{{asset('images/logo.png')}}" alt="Elite Virtual Logo" class=" absolute top-0 bottom-0 left-0 right-0 z-20 m-auto" data-aos="fade-down" data-aos-anchor-placement="top-bottom">
    </div>
</div>