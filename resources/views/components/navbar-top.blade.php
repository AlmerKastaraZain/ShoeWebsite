<div class="flex justify-end items-center bg-gray-200 py-2 px-[8vw] gap-6 font-light text-[14px]">
    <a class="text-black hover:text-gray-600" href="">About Us</a>
    <a class="text-black hover:text-gray-600" href="">Help</a>
    @guest
        <a class="text-black hover:text-gray-600" href=" {{ Route('login') }} ">Sign In</a>
        <a class="text-black hover:text-gray-600" href=" {{ Route('register') }} ">Sign Up</a>
    @endguest
    @auth
        <a class="text-black hover:text-gray-600" href=" {{ Route('dashboard') }} ">Dashboard</a>
    @endauth
    @auth
        <form action="/logout" method="post">
            @csrf
            <button type="submit" class="text-black hover:text-gray-600">Logout</button>
        </form>
    @endauth
    <!-- The whole future lies in uncertainty: live immediately. - Seneca -->
</div>