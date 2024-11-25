<nav class="bg-white shadow border-b-[1px] border-gray-200 h-16 flex justify-between 2xl:justify-end items-center">
    <div class="flex 2xl:hidden">

        <x-nav-link  href="/dashboard" :active="request()->routeIs('dashboard')" class="hover:bg-gray-200 outline outline-1 cursor-pointer outline-gray-200 h-16 px-5 flex justify-center items-center">Dashboard</x-nav-link>
        <x-nav-link href="/dashboard/cart" :active="request()->routeIs('cart')" class="hover:bg-gray-200 outline outline-1 cursor-pointer outline-gray-200 h-16 px-5 flex justify-center items-center">Shopping Cart</x-nav-link>
        <x-nav-link href="/dashboard/favorite" :active="request()->routeIs('favorite')" class="hover:bg-gray-200 outline outline-1 cursor-pointer outline-gray-200 h-16 px-5 flex justify-center items-center">Favorite</x-nav-link>
    </div>

    <div class="flex items-center ms-6 pr-10">
        <x-dropdown align="right" width="48">
            <x-slot name="trigger">
                <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                    <div>{{ Auth::user()->name }}</div>
                    <div class="ms-1">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </button>
            </x-slot>

            <x-slot name="content">
                <x-dropdown-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-dropdown-link>
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                </form>
            </x-slot>
        </x-dropdown>
    </div>

</nav>