<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (Session::has('success'))
            <div class="alert alert-success bg-green-800 text-white min-w-[100%] mb-3 p-3 rounded">
                <h3>{{ Session::get('success') }}</h3>
            </div>
        @endif
            <div class="dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if (!auth()->user()->token)
                        <x-nav-link href="/redirect">Authorize from Server</x-nav-link>
                    @endif

                    @foreach ($products as $prod)
                        <div class="grid grid-cols-1 bg-white rounded text-black p-5 m-5">
                            <h1 class="text-green-500 text-2xl">ID: {{ $prod['id'] }}</h1>
                            <div class="text-gray-500">Name: {{ $prod['name'] }}</div>
                            <div class="text-gray-500">Description: {{ $prod['description'] }}</div>
                            <div class="text-gray-500">Price: {{ $prod['price'] }}</div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

