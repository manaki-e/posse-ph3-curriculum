@props(['checked' => false])

<input {{ old('answer') ? 'checked' : '' }} {!! $attributes->merge(['class' => 'peer hidden']) !!}>
