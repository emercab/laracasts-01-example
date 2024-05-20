<x-layout>
  <x-slot:heading>
    Jobs Page
  </x-slot>

  @foreach ($jobs as $job)
    <ul>
      <li>
        <a href="/jobs/{{ $job['id'] }}" class="hover:underline">
          <strong class="text-blue-500">{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }} per year.
        </a>
      </li>
    </ul>
  @endforeach
</x-layout>
