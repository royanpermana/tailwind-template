<a {{ $attributes }} class="{{ request()->fullUrlIs(url($href)) ? 'bg-gray-100' : '' }} flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 ">
    {{ $slot }}
</a>
