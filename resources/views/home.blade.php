<x-head>
    <x-layout>
        <section>
            <div class="flex justify-center mt-3 mb-8">
                <video class="w-[1200px]" autoplay muted loop>
                    <source src="{{ asset('video/iklan.mp4') }}" type="video/mp4">
                </video>
            </div>
            <div class="flex justify-center mb-10">
                <div class="flex flex-col justify-center text-center gap-4">
                    <h2 class="text-black roboto text-8xl max-md:text-4xl">
                        NO PAIN NO GAIN
                    </h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit!</p>
                    <div>
                        <a class="bg-blue-500 hover:bg-blue-800 transition-colors text-white rounded-full py-1 px-8 w-6" href=" ">
                            Shop!
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="flex justify-between items-center">

                <h2 class="font-bold text text-2xl mb-4">Top Pick</h2>
                <a href="" class="mb-4 opacity-60 hover:opacity-100 transition-opacity">More...</a>
            </div>
            <div class="flex gap-6 justify-between pb-4">
                <div class="flex justify-between w-[100%] gap-2">
                    <x-card-brand :link="$link = '{{  }}'" src="{{ asset('image/ShoesBrand/Brand1.png') }}">Max Pro</x-card-brand>
                    <x-card-brand :link="$link = '{{  }}'" src="{{ asset('image/ShoesBrand/Brand2.png') }}">Sigma Male</x-card-brand>
                    <x-card-brand :link="$link = '{{  }}'" src="{{ asset('image/ShoesBrand/Brand3.png') }}">Drip Skibidi</x-card-brand>
                </div>
            </div>
        </section>
        <section>
            <div class="flex items-center box-border">
                <div class="flex justify-center w-[100%]">
                    <h2 class="font-bold text text-2xl mb-4 max-md:text-[16px]">Top <span class="bg-red-600 text-white px-2">10</span> This Week</h2>
                </div>
                <a href="" class="mb-4 opacity-60 hover:opacity-100 transition-opacity">More...</a>
            </div>
            <div class="overflow-x-scroll w-[100%]">
                <div class="flex">
                    <x-card-shoe src="{{ asset('image/Placeholder/Image.png') }}" :link="$link='./'" :title="$title = 'Lambda Superb'" :type="$type = 'Shoe'"  :price="$price = '1000000'"  />
                    <x-card-shoe src="{{ asset('image/Placeholder/Image.png') }}" :link="$link='./'" :title="$title = 'Lambda Superb'" :type="$type = 'Shoe'"  :price="$price = '1000000'"  />
                    <x-card-shoe src="{{ asset('image/Placeholder/Image.png') }}" :link="$link='./'" :title="$title = 'Lambda Superb'" :type="$type = 'Shoe'"  :price="$price = '1000000'"  />
                    <x-card-shoe src="{{ asset('image/Placeholder/Image.png') }}" :link="$link='./'" :title="$title = 'Lambda Superb'" :type="$type = 'Shoe'"  :price="$price = '1000000'"  />
                    <x-card-shoe src="{{ asset('image/Placeholder/Image.png') }}" :link="$link='./'" :title="$title = 'Lambda Superb'" :type="$type = 'Shoe'"  :price="$price = '1000000'"  />
                    <x-card-shoe src="{{ asset('image/Placeholder/Image.png') }}" :link="$link='./'" :title="$title = 'Lambda Superb'" :type="$type = 'Shoe'"  :price="$price = '1000000'"  />
                    <x-card-shoe src="{{ asset('image/Placeholder/Image.png') }}" :link="$link='./'" :title="$title = 'Lambda Superb'" :type="$type = 'Shoe'"  :price="$price = '1000000'"  />
                    <x-card-shoe src="{{ asset('image/Placeholder/Image.png') }}" :link="$link='./'" :title="$title = 'Lambda Superb'" :type="$type = 'Shoe'"  :price="$price = '1000000'"  />
                    <x-card-shoe src="{{ asset('image/Placeholder/Image.png') }}" :link="$link='./'" :title="$title = 'Lambda Superb'" :type="$type = 'Shoe'"  :price="$price = '1000000'"  />
                    <x-card-shoe src="{{ asset('image/Placeholder/Image.png') }}" :link="$link='./'" :title="$title = 'Lambda Superb'" :type="$type = 'Shoe'"  :price="$price = '1000000'"  />
                </div>
            </div>
        </section>

        <section class="mb-6">
            <div class="flex items-center mt-20 box-border">
                <div class="flex justify-center w-[100%]">
                    <h2 class="font-bold text text-2xl mb-4">Shop By Sport</h2>
                </div>
            </div>
            <div class="overflow-x-scroll overflow-y-hidden w-[100%] gap-10 mb-20">
                <div class="flex justify-between mb-6 gap-6">
                    <x-sport-category-card src="{{ asset('image/Placeholder/Image.png') }}" :link="$link='./'">Running</x-sport-category-card>
                    <x-sport-category-card src="{{ asset('image/Placeholder/Image.png') }}" :link="$link='./'">Football</x-sport-category-card>
                    <x-sport-category-card src="{{ asset('image/Placeholder/Image.png') }}" :link="$link='./'">Basketball</x-sport-category-card>
                    <x-sport-category-card src="{{ asset('image/Placeholder/Image.png') }}" :link="$link='./'">Skateboard</x-sport-category-card>
                </div>
                <div class="flex justify-between mb-6 gap-6">
                    <x-sport-category-card src="{{ asset('image/Placeholder/Image.png') }}" :link="$link='./'">Gym</x-sport-category-card>
                    <x-sport-category-card src="{{ asset('image/Placeholder/Image.png') }}" :link="$link='./'">Tennis</x-sport-category-card>
                    <x-sport-category-card src="{{ asset('image/Placeholder/Image.png') }}" :link="$link='./'">Dance</x-sport-category-card>
                    <x-sport-category-card src="{{ asset('image/Placeholder/Image.png') }}" :link="$link='./'">Yoga</x-sport-category-card>
                </div>
            </div>
        </section>
        <section class="mb-40">
            <div class="text-center mb-10">
                <h3 class="new-shoe-text-outline text-black font-black text-6xl ">New Shoe</h3>
            </div>
            <div class="my-4 shadow-2xl">
                <div class="bg-[#e6e6e6] w-[100%] h-[25vw] min-h-40 flex justify-between orange-shape-new-shoe">
                    <div class="w-[50%] flex justify-center items-center">
                        <img src="{{ asset('image/blitzkreiger/vecteezy_shoes-isolated-on-transparent-background_19953791 (1) 1.png') }}" alt="New Shoe" class="w-[100%] scale-110 max-xl:translate-x-[50%]" />
                    </div>
                    <div class="max-xl:hidden w-[50%] xl:flex flex-col justify-center z-10 gap-4">
                        <h1 class="font-bold text-[38px]">Blitzkreiger</h1>
                        <div class="bg-white outline outline-1 outline-black w-[90%] p-2 rounded-md">
                            <p>The "Blitzkrieger" shoes are a bold fusion of style and performance, designed for those who move fast and strike hard. These shoes feature a sleek, aerodynamic silhouette with sharp lines and a dynamic design that echoes the power and speed of a lightning-fast assault. </p>
                        </div>
                        <a class="hover:bg-blue-800 bg-blue-500 transition-colors w-[128px] rounded-full py-1 text-center text-white outline outline-1 outline-black" href="">Buy</a>
                    </div>
                </div>
            </div>
            <div class="flex w-[100%] justify-center">
                <div class="xl:hidden w-[100%] max-xl:flex flex-col justify-center items-center z-10 gap-4">
                    <h1 class="font-bold text-[64px]">Blitzkreiger</h1>
                    <div class="bg-white w-[90%] p-4 rounded-md">
                        <p>The "Blitzkrieger" shoes are a bold fusion of style and performance, designed for those who move fast and strike hard. These shoes feature a sleek, aerodynamic silhouette with sharp lines and a dynamic design that echoes the power and speed of a lightning-fast assault. </p>
                    </div>
                    <a class="hover:bg-blue-800 bg-blue-500 transition-colors w-[128px] rounded-full py-1 text-center text-white outline outline-1 outline-black" href="">Buy</a>
                </div>
            </div>
            <style>
                .new-shoe-text-outline {
                    color: #fff;
                    text-shadow:
                        3px 3px 0 #000,
                        -3px 3px 0 #000,
                        -3px 20px 25px #5c5c5c,
                        -3px -3px 0 #000,
                        3px -3px 0 #000;
                }
                
                .orange-shape-new-shoe {
                    background-image: url('image/shape/Vector 1.svg');
                    background-size: contain;
                    background-repeat: no-repeat;
                    background-position-y: 100%;
                }
            </style>
        </section>
    </x-layout>
</x-head>