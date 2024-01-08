@if($blogs)
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 w-full" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
        @foreach ($blogs as $blog)
            <div x-data="{ showModal: false }" class="bg-white">
                <div class="h-[250px] lg:h-[200px] overflow-hidden">
                    <img src="{{ asset('storage/'.$blog->img) }}" alt="{{$blog->title}}" class="w-full object-cover hover:scale-110 transition-transform">
                </div>
                <div class="w-full p-4 blog-desc">
                    <h3 class="poppins text-xl font-bold">{{$blog->title}}</h3>
                    {!! Illuminate\Support\Str::words(strip_tags($blog->description), $limit = 20, $end = '...') !!}

                    <button @click="showModal = true" class="py-2 px-4 text-white bg-blue-500 blog-modal my-2 block">Read more ...</button>
                </div>
                
            
                <div x-show="showModal" class="fixed inset-0 flex items-center justify-center overflow-scroll top-[90px] modal-desc" x-cloak>
                    <div class="modal-overlay"></div>
            
                    <div class="modal-container bg-white p-6 rounded-lg shadow-lg z-30 lg:w-[900px]">
                        
                        <div class="mt-5">
                            <img src="{{ asset('storage/'.$blog->img) }}" alt="{{$blog->title}}" class="w-full object-cover h-[400px] mt-4">
                        </div>
                        <h2 class="text-2xl my-4 poppins">{{$blog->title}}</h2>
                        {!! $blog->description !!}
                        <button @click="showModal = false" class="mt-4 px-4 py-2 text-white bg-[#10303e] rounded blog-modal poppins">Close</button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endif
