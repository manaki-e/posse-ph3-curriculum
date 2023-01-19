@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border border-solid border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm py-3 px-4']) !!}>
