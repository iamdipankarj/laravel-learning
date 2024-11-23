@props(['active' => false])

<a {{ $attributes }} class="{{ $active ? 'current' : '' }}">{{ $slot }}</a>
