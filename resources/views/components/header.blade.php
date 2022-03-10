<div class="z-30 fixed top-0 w-full py-2 px-12 flex justify-between items-center sticky-header {{request()->routeIs('home') ? '' : 'general-header'}}">
    <div class="min-w-max">
        <a href="/"><img width="60" src="/img/logo.jpg" alt=""></a>
    </div>

    <div class="w-full">
        <ul class="flex justify-center text-white">
            <li><a class="inline-block p-3" href="{{route('properties')}}?type=0">Land</a></li>
            <li><a class="inline-block p-3" href="{{route('properties')}}?type=1">Apartment</a></li>
            <li><a class="inline-block p-3" href="{{route('properties')}}?type=2">Villa</a></li>
            <li><a class="inline-block p-3" href="#">About Us</a></li>
            <li><a class="inline-block p-3" href="#">Contact Us</a></li>
        </ul>
    </div>

    <div class="min-w-max text-2xl text-white">
        <a href="#">🇺🇸</a>
        <a href="#">🇧🇩</a>
    </div>
</div>

