<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Products
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg p-5">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                    @foreach ($products as $prod)
                        <div class="grid grid-cols-1 text-white bg-gray-800 p-3 rounded">
                            <h1>ID: {{ $prod['id'] }}</h1>
                            <div>Name: {{ $prod['name'] }}</div>
                            <div>Description: {{ $prod['description'] }}</div>
                            <div>Price: {{ $prod['price'] }}</div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
