<x-guest-layout>
    <div class="relative z-10 pt-36 pb-32 bg-cover bg-center" style="background-image: url('/img/hero-bg.jpg')">
        <div class="absolute h-full w-full bg-black opacity-50 top-0 left-0 z-10"></div>
        <div class="container relative z-20 text-2xl text-white text-center">
            <h2 class="font-bold text-4xl mb-8">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h2>
            <p>Lorem ipsum dolor sit amet.</p>
        </div>
    </div>

    <div class="py-32 text-center">
        <div class="container">
            <h2 class="font-bold text-2xl mb-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>Commodi dignissimos error ipsa, provident quaerat quibusdam?</h2>
            <p class="text-gray-500 text-lg font-bold pb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, voluptas.</p>
            <a class="border-2 border-gray-700 rounded-xl text-lg px-6 py-1 inline-block" href="">Start the review</a>
        </div>
    </div>


{{--    last added object start--}}
    <div class="container">
        <h1 class="section-heading">Last Added Objects</h1>
        <div class="flex -mx-2 justify-between mt-10">
            @foreach($properties as $property)
            <div class="flex-1 mx-2 shadow-lg relative rounded-md">
                <a href="#" class="absolute left-3 w-9 h-9 leading-10 self-center text-base top-3 bg-black text-white bg-opacity-25 text-center
hove:bg-yellow-500 hover:text-white duration-200 rounded-full"></a>
                <div class="py-20 bg-center" style="background-image: url('/img/property.jpg')"></div>
                <div class="p-3">
                    <h2 class="leading-0 text-base">{{$property->name}}</h2>
                    <h3 class="text-2xl py-3">{{$property->price}}</h3>
                    <div class="border-t-2">
                        <ul class="flex items-center -mx-1 my-4">
                            <li class="px-2 py-1 bg-blue-50 rounded-md text-xs mx-1 shadow-sm">1 bedrooms</li>
                            <li class="px-2 py-1 bg-blue-50 rounded-md text-xs mx-1 shadow-sm">3 bedrooms</li>
                            <li class="px-2 py-1 bg-blue-50 rounded-md text-xs mx-1 shadow-sm">1000 ft<sup>2</sup></li>
                        </ul>
                        <a href="{{route('single-property',$property->id)}}" class="fullwidth-btn">More details</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
{{--    last added object end--}}
</x-guest-layout>
