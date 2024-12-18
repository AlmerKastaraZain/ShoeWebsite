<x-head>
<x-layout>
    <style src="{{ asset('css/shop.css') }}"></style>

    <div class="parent">
        <div class="flex justify-between flex-col"> 
        <img src="{{ asset('image/Placeholder/Image.png') }}" width="200px" height="280px" alt="dDd" />
        <p>dasd</p>
        </div>

        <div class="flex justify-between flex-col"> 
        <img src="{{ asset('image/Placeholder/Image.png') }}" width="200px" height="280px" alt="dDd" />
        <p>dasd</p>
        
        </div>
        <div class="flex justify-between flex-col"> 
            <img src="{{ asset('image/Placeholder/Image.png') }}" width="200px" height="280px" alt="dDd" />
            <p>dasd</p>
            </div>
    </div>
    <style>
        .parent {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-template-rows: repeat(10, 1fr);
            grid-column-gap: 0px;
            grid-row-gap: 0px;
        } 
    </style>
    
</x-layout>
</x-head>