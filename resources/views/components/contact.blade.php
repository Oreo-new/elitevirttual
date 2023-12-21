<form action="{{ route('contact-us') }}" method="POST" id="contact-form" class="w-full md:w-[400px] mx-auto roboto shadow px-6 py-10  m-auto  top-10 right-10 z-40 bg-white rounded">
    @csrf
        @if(session('success'))
            <div class="bg-green-300 shadow py-2 px-4 mb-5" style="w-full">
                {!! session('success') !!}
            </div>
        @endif
        @if(session('failure'))
        <div class="bg-red-300 text-white shadow py-2 px-4 mb-5" style="w-full">
                {!! session('failure') !!}
            </div>
        @endif
    <div class="flex justify-between mb-5">
        <input type="text" name="name" id="name" placeholder="Name *" class="border w-full border-black p-2  text-black placeholder:text-black" required>
    </div>
    <div class="flex justify-between mb-5">
        <input type="text" name="email" id="email" placeholder="Email *" class="border w-full border-black p-2  text-black placeholder:text-black" required>
    </div>
    <div class="flex mb-5">
        <input type="text" name="subject" id="subject" placeholder="Subject *" class="w-full border border-black p-2 text-black placeholder:text-black" required>
    </div>
    <div class="flex mb-5">
        <textarea name="message" id="message" rows="4" placeholder="Message *" class="w-full border border-black p-2 text-black placeholder:text-black" required></textarea>
    </div>
    <div class="flex mb-2 mt-2">
        <div class="g-recaptcha" data-sitekey="6Lf2IzcpAAAAAOuPql8hCyo1if8ljW09B1V15QbS"></div>
        @if($errors->has('g-recaptcha-response')) 
            <p class="mt-2 text-sm text-red-500">
                {{ $errors->first('g-recaptcha-response') }}
            </p>
        @endif
    </div>
    <div class="flex">
        <button type="submit" class="py-2 px-6 mx-auto bg-[#02202E] hover:bg-[#4592b6] transition-colors text-white rounded mt-10 w-full">
            Contact Us
        </button>
    </div>
</form>