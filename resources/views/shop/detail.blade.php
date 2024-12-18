<x-head>
    <x-layout>
        <script src="{{ asset('js/splide.js') }}" defer></script>
        <div class="flex pb-10 pt-10 justify-center">
            <section class="splide" aria-label="Splide Basic HTML Example">
                <div class="splide__track">
                    <ul class="splide__list">
                        @foreach ($images as $image)
                            <li class="splide__slide flex justify-center items-center">
                                <img class="w-[100%] h-[100%] object-cover" src="{{ url('/storage/' . $image->path) }}" alt="shoes">
                            </li>
                        @endforeach
                    </ul>
                </div>
            </section>

            <div class="pl-20">

                <p class="text-[2rem] font-bold pt-4 pb-2">{{$shoes->name }}</p>
                <p>{{ $shoes->brands->brand}}</p>
                <p class="font-semibold text-[0.8rem] pt-2"> Rp. {{ number_format($shoes->price)  }} </p>


                <h3 class="mt-4 font-semibold text-gray-900">Sizes</h3>
                <ul class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex">
                    @foreach ($sizes as $size)
                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                            <div class="flex items-center ps-3">
                                <input id="horizontal-list-radio-license" @disabled($size->quantity <= 0) type="radio" value="" name="list-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2 dark:bg-gray-600">
                                <label for="horizontal-list-radio-license" class="w-full py-3 ms-2 text-sm font-medium text-gray-900">{{ $size->ShoesSizes->size }} </label>
                            </div>
                        </li>
                    @endforeach
                </ul>

                <div class="pt-10">
                    <button class="bg-slate-200 hover:bg-slate-300 p-2 px-10 rounded-sm">Buy</button>
                    <button class="bg-[#FFC107] hover:bg-[#FF9800]  p-2 px-10 rounded-sm">Add To Favorite</button>
                </div>
            </div>
        </div>
    </x-layout>
</x-head>


