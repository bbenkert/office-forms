
@extends('layouts.app') {{-- Or use a blank layout if needed --}}


@section('content')
    <h1>{{ $formPage->title }}</h1>
    <p>{{ $formPage->description }}</p>

    <form action="#" method="POST">
        @csrf

        @foreach ($formPage->fields as $field)
            <div class="mb-4">
                <label>{{ $field->label }}</label>

                @if ($field->type === 'textarea')
                    <textarea name="{{ $field->name }}" class="w-full border rounded p-2"></textarea>
                @else
                    <input 
                        type="{{ $field->type }}" 
                        name="{{ $field->name }}" 
                        class="w-full border rounded p-2"
                        {{ $field->required ? 'required' : '' }}
                    />
                @endif
            </div>
        @endforeach

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Submit</button>
    </form>
@endsection
