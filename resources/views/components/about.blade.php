<div x-data="{ activeTab: 'tab1' }" class="w-full">
    <div class="flex flex-wrap lg:flex-nowrap">
        <div class="w-full lg:w-1/2 lg:mr-10">
            @if($image)
                <img src="{{ asset('storage/'.$image->img) }}"  alt="Elite virtual specialist - about image" class="w-full object-cover" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
            @endif
        </div>
        <div class="w-full lg:w-1/2">
            <div>
                <h3 class="poppins uppercase text-3xl font-bold mt-10 lg:mt-0 mb-5" data-aos="fade-up" data-aos-anchor-placement="top-bottom">Our team comes with the experience and knowledge</h3>
            </div>
            <div class="flex space-x-4">
                <button @click="activeTab = 'tab1'" :class="{ 'bg-[#02202E] text-white': activeTab === 'tab1' }" class="py-2 px-4 rounded poppins text-black border" data-aos="fade-up" data-aos-anchor-placement="top-bottom">{{$about->title}}</button>
                <button @click="activeTab = 'tab2'" :class="{ 'bg-[#02202E] text-white': activeTab === 'tab2' }" class="py-2 px-4 rounded poppins text-black border" data-aos="fade-up" data-aos-anchor-placement="top-bottom">{{$mission->title}}</button>
                <button @click="activeTab = 'tab3'" :class="{ 'bg-[#02202E] text-white': activeTab === 'tab3' }" class="py-2 px-4 rounded poppins text-black border" data-aos="fade-up" data-aos-anchor-placement="top-bottom">{{$vision->title}}</button>
            </div>
        
            <div x-show="activeTab === 'tab1'" class="mt-4 p-4 bg-gray-100 rounded" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                <!-- Content for Tab 1 -->
                {!! $about->description !!}
            </div>
        
            <div x-show="activeTab === 'tab2'" class="mt-4 p-4 bg-gray-100 rounded" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                <!-- Content for Tab 2 -->
                {!! $mission->description !!}
            </div>
        
            <div x-show="activeTab === 'tab3'" class="mt-4 p-4 bg-gray-100 rounded" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                <!-- Content for Tab 3 -->
                {!! $vision->description !!}
            </div>
        </div>
    </div>
    
    
</div>