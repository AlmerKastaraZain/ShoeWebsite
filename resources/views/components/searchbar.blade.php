<div id="searchbarFrame" class="bg-white fixed -translate-y-[100%] transition-transform shadow-md top-0 invisible w-[100%] h-10 py-8 z-[60] flex items-center justify-center">
    <button id="exitBtnSearchbar" class="p-2 [&>img]:hover:-translate-x-2 [&>img]:hover:opacity-80">
        <img class="transition-transform" src="{{ asset('icon/go-back-arrow-svgrepo-com.svg') }}" width="24px" />
    </button>
    <form class="w-[80vw] flex items-center justify-center" action="/shop/search" method="get">
        @csrf
        <input name="find" class="bg-gray-200 rounded-3xl h-8 searchbar w-[80vw] ml-16" type="search" name="search" id="searchbarFull">
    </form>
</div>