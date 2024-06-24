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
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <x-nav-link href="/redirect">
                        Authorize from Server
                    </x-nav-link>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

