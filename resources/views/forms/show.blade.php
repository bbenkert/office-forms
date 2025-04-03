
@extends('layouts.app') {{-- Or use a blank layout if needed --}}


@section('content')
    <div class="max-w-2xl mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-2 text-gray-900">{{ $formPage->title }}</h1>
        <p class="text-gray-600 mb-6">{{ $formPage->description }}</p>

        <form action="#" method="POST" class="space-y-6">
            @csrf

            @foreach ($formPage->fields as $field)
                <div>
                    <label class="block text-sm font-medium text-gray-700">
                        {{ $field->label }}
                        @if ($field->required)
                            <span class="text-red-500">*</span>
                        @endif
                    </label>

                    @if ($field->type === 'textarea')
                        <textarea
                            name="{{ $field->name }}"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                            rows="4"
                            {{ $field->required ? 'required' : '' }}
                        ></textarea>
                    @else
                        <input
                            type="{{ $field->type }}"
                            name="{{ $field->name }}"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                            {{ $field->required ? 'required' : '' }}
                        />
                    @endif
                </div>
            @endforeach

            <div>
                <button
                    type="submit"
                    class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
                >
                    Submit
                </button>
            </div>
        </form>
    </div>
@endsection
