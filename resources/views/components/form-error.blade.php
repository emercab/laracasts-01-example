@props(['name'])

@error($name)
  <p class="mt-1 text-red-500 text-sm">{{ $message }}</p>
@enderror
