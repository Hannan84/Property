<x-guest-layout>
    <div class="relative z-10 pt-36 pb-32 bg-cover bg-center" style="background-image: url('/img/hero-bg.jpg')">
        <div class="absolute h-full w-full bg-black opacity-50 top-0 left-0 z-10"></div>
        <div class="container relative z-20 text-2xl text-white text-center">
            <h2 class="font-bold text-4xl mb-8">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h2>
            <p>Lorem ipsum dolor sit amet.</p>
        </div>
    </div>

{{--    Search from area start--}}

    <div class="-mt-7">
        <div class="container">
            <div class="rounded-lg bg-white p-2 relative z-20 shadow-lg">
                @include('components.property-search-form')
            </div>
        </div>
    </div>

{{--    Search from area end--}}

    <div class="py-32 text-center">
        <div class="container">
            <h2 class="font-bold text-2xl mb-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>Commodi dignissimos error ipsa, provident quaerat quibusdam?</h2>
            <p class="text-gray-500 text-lg font-bold pb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, voluptas.</p>
            <a class="border-2 border-gray-300 hover:border-green-400 duration-200 rounded-xl text-lg px-6 py-1 inline-block" href="">Start the review</a>
        </div>
    </div>


{{--    last added object start--}}
    <div class="container">
        <h1 class="section-heading">Last Added Objects</h1>
        <div class="flex flex-wrap -mx-2 justify-between mt-10">
            @foreach($properties as $property)
                @include('components.single-property-card', ['property' => $property])
            @endforeach
        </div>
    </div>
{{--    last added object end--}}
</x-guest-layout>
