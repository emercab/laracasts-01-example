@props(['color' => 'gray-100', 'bg' => 'amber'])

<button 
  {{ $attributes->merge(['class' => 'rounded-md bg-'.$bg.'-500 px-4 py-2 text-sm font-semibold text-'.$color.' shadow-sm hover:bg-'.$bg.'-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-'.$bg.'-500 block ml-4']) }} />
{{ $slot }}
</button>
