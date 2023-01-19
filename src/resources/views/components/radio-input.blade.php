@props(['checked' => false])

<input {{ old('answer') ? 'checked' : '' }} {!! $attributes->merge(['class' => 'peer absolute w-1 h-1 opacity-0']) !!}>
