<x-layout>
  <x-slot:heading>
    Job Page
  </x-slot>

  <h2 class="font-bold text-2xl mb-3 text-blue-500">{{ $job['title'] }}</h2>

  <p>
    This job pays {{ $job['salary'] }} per year.
  </p>

</x-layout>
