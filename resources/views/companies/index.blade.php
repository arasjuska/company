<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Companies List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="overflow-x-auto">
                        <x-table>
                            <x-slot name="head">
                                <x-table.th>{{ __('Logo') }}</x-table.th>
                                <x-table.th>{{ __('Name') }}</x-table.th>
                                <x-table.th>{{ __('Email') }}</x-table.th>
                                <x-table.th>{{ __('Address') }}</x-table.th>
                                <x-table.th>{{ __('Actions') }}</x-table.th>
                            </x-slot>

                            <x-slot name="body">
                                @foreach ($companies as $company)
                                    <tr>
                                        <x-table.td>
                                            <img class="w-20" src="{{ $company->logo }}" alt="{{ $company->name }}">
                                        </x-table.td>
                                        <x-table.td>{{ $company->name }}</x-table.td>
                                        <x-table.td>{{ $company->email }}</x-table.td>
                                        <x-table.td>{{ $company->address }}</x-table.td>
                                        <x-table.td>
                                            <div class="flex item-center">
                                                <div class="mr-2 text-sky-600 hover:scale-110">
                                                    <a href="{{ route('companies.edit', $company->id ) }}"
                                                       class="fa-regular fa-pen-to-square"></a>
                                                </div>
                                                <div class="text-rose-600 hover:scale-110">
                                                    <form
                                                        action="{{ route('companies.destroy', $company->id) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit">
                                                            <i class="fa-regular fa-trash-can"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </x-table.td>
                                    </tr>
                                @endforeach
                            </x-slot>
                        </x-table>
                    </div>
                    <div class="mt-2">
                        {{ $companies->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
