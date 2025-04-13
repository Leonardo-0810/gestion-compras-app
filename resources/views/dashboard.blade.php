<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white border border-gray-200 overflow-hidden shadow-md sm:rounded-xl">
                <div class="p-6 text-gray-700 text-lg">
                    🎉 {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
