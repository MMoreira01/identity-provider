<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Clients') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __('Here are a list of clients:') }}
                </div>
                @foreach ($clients as $client)
                    <div class="py-3 text-gray-900 dark:text-gray-100">
                        <h3 class="text-lg text-gray-500">Client: {{ $client->name }}</h3>
                        <p>Client Id: {{ $client->id }}</p>
                        <p>Client Secret: {{ $client->secret }}</p>
                        <p>Redirect Url: {{ $client->redirect }}</p>
                    </div>
                @endforeach
            </div>
            <div class="mt-3 p-6 bg-gray-200 border-b border-gray-200">
                <form action="/oauth/clients" method="POST">
                    <div class="mt-2">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" placeholder="Client Name" required>
                    </div>
                    <div class="mt-2">
                        <label for="redirect">Redirect:</label>
                        <input type="text" id="redirect" name="redirect"
                            placeholder="https://127.0.0.1:8001/callback" required>
                    </div>
                    <div class="mt-3">
                        @csrf
                        <button type="submit">Create Client</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
