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
                    {{ __("Here are the list of You're clients!") }}
                    @foreach ($clients as $client)
                        <div class="py-3 text-gary-900">
                            <h3 class="text-lg text-gray-500">{{$client->name}}</h3>
                            <p><b>Client Id: </b>{{$client->id}}</p>
                            <p><b>Client Redirect: </b>{{$client->redirect}}</p>
                            <p><b>Client Secret: </b>{{$client->secret}}</p>
                        </div>
                    @endforeach
                </div>
                <div class="mt-3 p-6 bg-white border-b border-gray-200">
                    <form action="/oauth/clients" method="POST">
                        <div>
                            <x-input-label for="name">Name</x-input-label>
                            <x-text-input type="text" name="name" placeholder="Client name" />
                        </div>
                        <div class="mt-2">
                            <x-input-label for="redirect">Redirect</x-input-label>
                            <x-text-input type="text" name="redirect" placeholder="https://my-url.com/callback" />
                        </div>
                        <div class="mt-3">
                            @csrf
                            <x-primary-button type="submit">Create client</x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
