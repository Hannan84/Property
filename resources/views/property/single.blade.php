<x-guest-layout>

    {{-- Breadcrumb --}}
    <div class="shadow-md border-2 border-gray-300 py-2 bg-white breadcrumb mt-28">
        <div class="container mx-auto">
            <ul class="flex items-center">
                <li><a class="text-xl text-red-800" href="">property</a></li>
                <li class="mx-3"><i class="fa fa-angle-right"></i></li>
                <li><a class="text-red-800" href=""></a></li>
                <li class="mx-3"><i class="fa fa-angle-right"></i></li>
                <li></li>
            </ul>
        </div>
    </div>

    <!-- Title & Share -->
    <div class="bg-white py-8">
        <div class="container mx-auto">
            <div class="flex justify-between">
                <div class="w-8/12">
                    <h2 class="text-3xl text-gray-600">{{$single_property->name}}</h2>
                    <h3 class="text-lg mt-2">Price: <span class="text-red-800">{{number_format($single_property->price)}} Tk</span></h3>
                </div>
                <div class="w-3/12">
                    <ul class="flex justify-end">
                        <li>
                            <a class="flex flex-col justify-center items-center mx-2 border-2 border-gray-200 p-3 hover:border-red-400 duration-200"
                               href="#">
                                <i class="fa fa-print mb-2"></i>
                                <span class="text-md block">Print</span>
                            </a>
                        </li>
                        <li>
                            <a class="flex flex-col justify-center items-center mx-2 border-2 border-gray-200 p-3 hover:border-red-400 duration-200"
                               href="#">
                                <i class="fa fa-heart-o mb-2"></i>
                                <span class="text-md block">Save</span></a>
                        </li>
                        <li>
                            <a class="flex flex-col justify-center items-center mx-2 border-2 border-gray-200 p-3 hover:border-red-400 duration-200"
                               href="#">
                                <i class="fa fa-share-alt mb-2"></i>
                                <span class="text-md block">Share</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div id="notice" class="text-center bg-green-100 text-green-700 p-3"></div>


    <!-- Content -->
    <div class="container mx-auto my-14">
        <div class="flex justify-between mx-2">

            {{-- Left Content --}}
            <div class="w-9/12 mx-2">
                <div id="slider" class="">
                    <div class="gallery-slider">
                        <div style="background-image: url(/img/hero-bg.jpg)" class="single-gallery-item bg-cover bg-center"></div>
                        <div style="background-image: url(/img/hero-bg.jpg)" class="single-gallery-item bg-cover bg-center"></div>
                        <div style="background-image: url(/img/hero-bg.jpg)" class="single-gallery-item bg-cover bg-center"></div>
                        <div style="background-image: url(/img/hero-bg.jpg)" class="single-gallery-item bg-cover bg-center"></div>
                        <div style="background-image: url(/img/hero-bg.jpg)" class="single-gallery-item bg-cover bg-center"></div>
                        <div style="background-image: url(/img/hero-bg.jpg)" class="single-gallery-item bg-cover bg-center"></div>
                        <div style="background-image: url(/img/hero-bg.jpg)" class="single-gallery-item bg-cover bg-center"></div>
                        <div style="background-image: url(/img/hero-bg.jpg)" class="single-gallery-item bg-cover bg-center"></div>
                        <div style="background-image: url(/img/hero-bg.jpg)" class="single-gallery-item bg-cover bg-center"></div>
                        <div style="background-image: url(/img/hero-bg.jpg)" class="single-gallery-item bg-cover bg-center"></div>
                    </div>
                    <div class="thumbnail-slider">
                        <div style="background-image: url(/img/hero-bg.jpg)" class="single-thumbnail-item bg-cover bg-center"></div>
                        <div style="background-image: url(/img/hero-bg.jpg)" class="single-thumbnail-item bg-cover bg-center"></div>
                        <div style="background-image: url(/img/hero-bg.jpg)" class="single-thumbnail-item bg-cover bg-center"></div>
                        <div style="background-image: url(/img/hero-bg.jpg)" class="single-thumbnail-item bg-cover bg-center"></div>
                        <div style="background-image: url(/img/hero-bg.jpg)" class="single-thumbnail-item bg-cover bg-center"></div>
                        <div style="background-image: url(/img/hero-bg.jpg)" class="single-thumbnail-item bg-cover bg-center"></div>
                        <div style="background-image: url(/img/hero-bg.jpg)" class="single-thumbnail-item bg-cover bg-center"></div>
                        <div style="background-image: url(/img/hero-bg.jpg)" class="single-thumbnail-item bg-cover bg-center"></div>
                        <div style="background-image: url(/img/hero-bg.jpg)" class="single-thumbnail-item bg-cover bg-center"></div>
                        <div style="background-image: url(/img/hero-bg.jpg)" class="single-thumbnail-item bg-cover bg-center"></div>
                    </div>
                </div>
                {{-- Overview --}}
                <div class="flex justify-between items-center bg-white p-8 mt-10 shadow-sm">
                    <h4 class="text-lg w-2/12 langBN">Overview</h4>
                    <div class="border-l-2 border-gray-300 pl-5 ml-5 w-10/12 text-base">
                        <p>{{$single_property->overview}}</p>
                    </div>
                </div>

                {{-- Property Features --}}
                <div class="flex justify-between items-center bg-white p-8 mt-10 shadow-sm langBN">
                    <h4 class="text-lg w-2/12">Property Features</h4>
                    <div class="ml-2 w-10/12 text-base flex justify-between">
                        <div class="flex-1 border-l-2 border-gray-300 ml-3 pl-3 self-center">
                            <ul>
                                <li class="flex text-sm mb-2">
                                    <div class="flex"><i class="fa fa-home mr-2 text-red-400 w-5 text-center"></i><span
                                            class="text-sm">Type:</span></div>
                                    <span class="ml-2 font-bold">
                                        @if($single_property->type == 1)
                                            {{'apartment'}}
                                        @elseif($single_property->type == 2)
                                            {{'villa'}}
                                        @else
                                            {{'land'}}
                                        @endif
                                    </span>
                                </li>
                                <li class="flex text-sm">
                                    <div class="flex"><i class="fa fa-bed mr-2 text-red-400 w-5 text-center"></i><span
                                            class="text-sm">Bedrooms:</span></div>
                                    <span class="ml-2 font-bold">{{$single_property->bedrooms}}</span>
                                </li>
                            </ul>
                        </div>
                        <div class="flex-1 border-l-2 border-gray-300 ml-3 pl-3 self-center">
                            <ul>
                                <li class="flex text-sm mb-2">
                                    <div class="flex"><i
                                            class="fa fa-shower mr-2 text-red-400 w-5 text-center"></i><span
                                            class="text-sm">Bathrooms</span></div>
                                    <span class="ml-2 font-bold">4</span>
                                </li>
                                <li class="flex text-sm">
                                    <div class="flex"><i
                                            class="fa fa-map-marker mr-2 text-red-400 w-5 text-center"></i><span
                                            class="text-sm">Location:</span></div>
                                    <span class="ml-2 font-bold capitalize noTranslate">{{$single_property->location_id}}</span>
                                </li>
                            </ul>
                        </div>
                        <div class="flex-1 border-l-2 border-gray-300 ml-3 pl-3 self-center">
                            <ul>
                                <li class="flex text-sm mb-2">
                                    <div class="flex"><i
                                            class="fa fa-gratipay mr-2 text-red-400 w-5 text-center"></i><span
                                            class="text-sm">{{'Living space sqm'}}:</span></div>
                                    <span class="ml-2 font-bold">456</span>
                                </li>
                                <li class="flex text-sm">
                                    <div class="flex"><i
                                            class="fa fa-low-vision mr-2 text-red-400 w-5 text-center"></i><span
                                            class="text-sm">Pool:</span></div>
                                    <span class="ml-2 font-bold">
                                        @if($single_property->pool == 1)
                                            Privet
                                        @elseif($single_property->pool == 2)
                                            Public
                                        @elseif($single_property->pool == 3)
                                            Both
                                        @else
                                            No
                                        @endif
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>



                {{-- Overview --}}
                <div class="flex justify-between items-center bg-white p-8 mt-10 shadow-sm">
                    <h4 class="text-lg w-2/12">{{'Why buy this Property'}}</h4>
                    <div class="border-l-2 border-gray-300 pl-5 ml-5 w-10/12 text-base">
                        {{$single_property->why_buy}}
                    </div>
                </div>

                {{-- Description --}}
                <div class="bg-white p-8 mt-10 shadow-sm" id="description">
                    {{$single_property->description}}
                </div>

            </div>{{-- Left Content End --}}



            {{-- Sidebar --}}
            <div class="w-3/12 mx-2">
                <div class="border-2 border-red-800 px-5 py-3 text-center font-light text-base">
                    <p>Subscribe to Property Turkey media for blogs/news/videos</p>
                </div>
                {{-- Form --}}
                <div class="px-4 py-5 text-left bg-gray-300 my-5">
                    <h1 class="text-2xl font-normal leading-none mb-5 langBN"></h1>

                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="">
                            <label class="inputLabel" for="name">Name <span
                                    class="text-red-800 font-serif">*</span></label>
                            <input class="inputField" type="text" id="name" name="name" placeholder="First Name"
                                   value="{{ old('name') }}">

                            @error('name')
                            <p class="bg-red-100 text-red-500 px-2 mt-2 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mt-5">
                            <label class="inputLabel" for="phone">Phone <span
                                    class="text-red-800 font-serif">*</span></label>
                            <input class="inputField" type="text" id="phone" name="phone" placeholder="Phone"
                                   value="{{ old('phone') }}">
                            @error('phone')
                            <p class="bg-red-100 text-red-500 px-2 mt-2 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mt-5">
                            <label class="inputLabel" for="email">Email <span
                                    class="text-red-800 font-serif">*</span></label>
                            <input class="inputField" type="email" id="email" name="email" placeholder="E-mail"
                                   value="{{ old('email') }}">
                            @error('email')
                            <p class="bg-red-100 text-red-500 px-2 mt-2 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mt-5">
                            <label class="inputLabel" for="message">Message <span
                                    class="text-red-800 font-serif">*</span></label>
                            <textarea class="inputField" id="message" name="message" rows="4"
                                      placeholder="I'm interested in this property">{{ old('message') }}</textarea>
                            @error('message')
                            <p class="bg-red-100 text-red-500 px-2 mt-2 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mt-5">
                            <button type="submit"
                                    class="w-full border-2 uppercase text-center py-3 font-semibold border-red-800 hover:bg-transparent hover:text-red-800 duration-200  text-white bg-red-800 rounded-none"><i
                                    class="fa fa-commenting mr-2"></i></button>
                        </div>

                    </form>
                </div>
            </div>


        </div>

    </div>


</x-guest-layout>
