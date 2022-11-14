@props(['status'])

@if ($status)
    <div
        {{ $attributes->merge(['class' => 'flex h-10 items-center justify-center bg-indigo-600 px-4 text-sm font-medium text-white sm:px-6 lg:px-8']) }}>
        {{ $status }}
    </div>
    {{-- @else
    <div
        {{ $attributes->merge(['class' => 'flex h-10 items-center justify-center bg-gray-900 px-4 text-sm font-medium text-white sm:px-6 lg:px-8']) }}>
        Get wet!
    </div> --}}
@endif
