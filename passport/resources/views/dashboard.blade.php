<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-2">
                    <div>
                        <h1>List of Clients</h1>
                    </div>
                    <div>
                        @foreach ($clients as $client)
                            <div class="mt-2">
                                <h1>ID: {{ $client->id }}</h1>
                                <div>Name: {{ $client->name }}</div>
                                <div>URL: {{ $client->redirect }}</div>
                                <div>Secret: {{ $client->secret }}</div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="p-6 text-gray-900">
                    {{ __("Create your clients!") }}

                    <div class="mt-2">
                        <form action="/oauth/clients" method="POST">
                            @csrf
                            <div>
                                <x-input-label for="name">Name</x-input-label>
                                <x-text-input type="text" name="name" placeholder="Client's Name"></x-text-input>
                            </div>
                            <div>
                                <x-input-label for="redirect">Redirect</x-input-label>
                                <x-text-input type="text" name="redirect" placeholder="http://my-url.com/callback"></x-text-input>
                            </div>
                            <div class="mt-3">
                                <x-primary-button type="submit">Create</x-primary-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
