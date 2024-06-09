<style>
    .button-revoke {
        padding: 0.3rem 0.5rem;
        border-radius: 5px;
        text-decoration: none;
        color: #ffffff;
        background-color: #f98012;
    }
</style>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('OAuth Connections') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border border-black">
                <div class="p-6 text-black-900 dark:text-black-100">
                    {{ __('OAuth Connections:') }}
                </div>

                <div class="p-6">
                    @forelse ($oauthTokens as $oauthToken)
                        <div
                            class="bg-white-100 dark:bg-white-700 rounded-lg p-4 mb-4 border border-black flex justify-between items-center">
                            <!-- Connection Details -->
                            <div>
                                <p class="font-semibold">Connection:</p>
                                <p>Name: {{ $oauthToken->client->name }}</p>
                                <p>Connection Made At: {{ $oauthToken->created_at }}</p>
                                <p>Expires At: {{ $oauthToken->expires_at }}</p>
                            </div>

                            <!-- Revoke Button -->
                            <form action="{{ route('oauth.revoke', $oauthToken->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="button-revoke">Revoke</button>
                            </form>
                        </div>
                    @empty
                        <p>No OAuth connections found.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
