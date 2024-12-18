<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl  text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div>
        <h1 class="text-2xl m-2">Hello, <b>{{ Auth::user()->name }}</b></h1>
    </div>
    <div class="w-full mt-12">
        <p class="text-xl pb-3 flex items-center">
            <i class="fas fa-list mr-3"></i> Transaction
        </p>
        <div class="bg-white overflow-auto">
            <table class="min-w-full bg-white">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Username</th>
                        <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Transaction</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Phone</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Order Status</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Order Status</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Detail</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    <tr>
                        <td class="w-1/3 text-left py-3 px-4">Lian</td>
                        <td class="w-1/3 text-left py-3 px-4">122000rp</td>
                        <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="tel:622322662">622322662</a></td>
                        <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="mailto:jonsmith@mail.com">jonsmith@mail.com</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
