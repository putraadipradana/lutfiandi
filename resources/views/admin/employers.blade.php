<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Employers') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden sm:rounded-lg">
                <div class="p-6">
                    <div class="flex justify-between items-center">
                        <h3 class="text-base text-gray-500 leading-5">{{ $employers->count() }} Employer(s)</h3>
                        <x-primary-link href="{{ route('employers.create') }}">New Employer
                        </x-primary-link>
                    </div>
                </div>
                @if ($employers->count() > 0)
                    <div class="shadow-sm">
                        <table class="w-full text-sm text-left text-gray-500 bg-white">
                            <thead class="text-sm text-gray-900 font-semibold bg-gray-50 border-b border-gray-300">
                                <tr>
                                    <td scope="col" class="px-6 py-3 whitespace-nowrap">
                                        {{ __('Name') }}
                                    </td>
                                    <td scope="col" class="px-6 py-3 text-center">
                                        {{ __('Gender') }}
                                    </td>
                                    <td scope="col" class="px-6 py-3 whitespace-nowrap">
                                        {{ __('Phone') }}
                                    </td>
                                    <td scope="col" class="px-6 py-3 text-center">
                                        {{ __('Action') }}
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($employers as $item)
                                    <tr class="border-b">
                                        <td scope="row" class="px-6 py-3">
                                            {{ $item->name }}
                                        </td>
                                        <td scope="row" class="p-3 text-center">
                                            {{ $item->gender }}
                                        </td>
                                        <td scope="row" class="px-6 py-3 whitespace-nowrap">
                                            {{ $item->phone_number }}
                                        </td>
                                        <td scope="row" class="px-6 py-3">
                                            <div class="flex divide-x items-center justify-center divide-gray-200">
                                                <a href="{{ route('employers.edit', $item->id) }}"
                                                    class="pr-3 text-indigo-600 hover:text-indigo-700">Edit</a>
                                                <form action="{{ route('employers.destroy', $item->id) }}"
                                                    method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit"
                                                        class="pl-3 text-indigo-600 hover:text-indigo-700">Delete</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
