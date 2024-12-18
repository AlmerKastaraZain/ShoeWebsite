<x-head>
    <x-layout>
        <div>
            <h1 class="font-bold text-2xl">Result for</h1>
            <h1 class="bg-slate-200 w-fit mt-2 px-2 py-1 rounded-sm">Result</h1>
        </div>
        <hr class="my-8">
            <!-- Checkbox -->
            <p>Filter Here</p>
        <hr class="my-8">
        <div class="flex mb-20">
            @foreach ($shoes as $shoe)
                <x-card-shoe src="{{ url('/storage/' . $images->where('shoes_id', '=', $shoe->getKey())->first()->path  ) }}" alt="Shoes" :link="$link = Route('shop.show', $shoe->id)" :title="$title = $shoe->name" :type="$type = $shoe->Brands->where('Id', '=', $shoe->brands_id)->first()->brand" :price="$price = $shoe->price"  />
            @endforeach
        </div>
    </x-layout>
</x-head>


