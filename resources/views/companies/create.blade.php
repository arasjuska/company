<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add New Company') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="grid gap-6 grid-cols-1 lg:grid-cols-3 text-sm">
                        <div class="text-gray-600">
                            <p class="font-medium text-lg">{{ __('Company Details') }}</p>
                            <p>{{ __('Please fill out all the fields') }}</p>
                        </div>

                        <div class="lg:col-span-2">
                            <form action="{{ route('companies.store') }}"
                                  method="post"
                                  enctype="multipart/form-data"
                                  class="grid gap-6 grid-cols-1 mx-auto">
                                @csrf
                                <div class="md:col-span-2">
                                    <x-label for="name">{{ __('Name') }}</x-label>
                                    <x-input type="text"
                                             name="name"
                                             class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"></x-input>
                                </div>

                                <div class="md:col-span-2">
                                    <x-label for="email">{{ __('Email') }}</x-label>
                                    <x-input type="email"
                                             name="email"
                                             class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"></x-input>
                                </div>

                                <div class="md:col-span-2">
                                    <x-label for="address">{{ __('Address') }}</x-label>
                                    <x-input type="text"
                                             name="address"
                                             class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"></x-input>
                                </div>

                                <div class="md:col-span-2">
                                    <x-label for="logo">{{ __('Logo') }}</x-label>
                                    <input type="file"
                                           name="logo"
                                           class="w-full mt-1 mb-4"/>
                                </div>

                                @if ($errors->any())
                                    <div class="bg-rose-100 p-2 mb-4 md:col-span-2">
                                        <p>There were some problems with your input.</p>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <div class="md:col-span-2">
                                    <div class="flex space-x-2">
                                        <x-button>{{ __('Submit') }}</x-button>
                                        <a href="{{ route('companies.index') }}"
                                           class="px-4 py-2 hover:bg-gray-100 border border-transparent rounded-md font-semibold text-xs uppercase tracking-widest">
                                            {{ __('Cancel') }}
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
