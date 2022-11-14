<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Employer') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div>
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Personal Information</h3>
                        <p class="mt-1 text-sm text-gray-600">Make sure this personal informations is valid!</p>
                    </div>
                </div>
                <div class="mt-5 md:col-span-2 md:mt-0">
                    <form action="{{ route('employers.update', $employer->id) }}" method="POST">
                        @method('PATCH')
                        @csrf
                        <div class="overflow-hidden shadow sm:rounded-md">
                            <div class="bg-white px-4 py-5 sm:p-6">
                                <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-6 sm:col-span-4">
                                        <label for="name"
                                            class="block text-sm font-medium text-gray-700">Name</label>
                                        <input type="text" name="name" id="name" autocomplete="name"
                                            value="{{ $employer->name }}"
                                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                        @error('name')
                                            <div class="text-sm text-red-500 mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-span-6 sm:col-span-2">
                                        <label for="gender"
                                            class="block text-sm font-medium text-gray-700">Gender</label>
                                        <select id="gender" name="gender" autocomplete="gender"
                                            class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                            <option>Male</option>
                                            <option>Female</option>
                                        </select>
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="phone_number" class="block text-sm font-medium text-gray-700">Phone
                                            number</label>
                                        <input type="text" name="phone_number" id="phone_number"
                                            autocomplete="phone-number" value="{{ $employer->phone_number }}"
                                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                        @error('phone_number')
                                            <div class="text-sm text-red-500 mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                                <button type="submit"
                                    class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
