<x-head>
    <x-layout>
        <h1>Result for</h1>
        @foreach ($attribute as $item)
            <h1>{{ $item }} </h1>
        @endforeach
        @foreach ($shoes as $shoe)
            <x-card-shoe src="{{ asset('image/Placeholder/Image.png') }}" :link="$link = Route('shop.show', $shoe->id)" :title="$title = $shoe->name" :type="$type = $shoe->brand"  :price="$price = $shoe->price"  />
        @endforeach
    </x-layout>
</x-head>