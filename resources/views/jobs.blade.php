<x-layout>
  <x-slot:heading>
    Jobs Page
  </x-slot>

  @foreach ($jobs as $job)
    <a href="/jobs/{{ $job['id'] }}" class="block px-4 py-6 border border-gray-400 bg-white mb-2 rounded-lg">
      <div class="font-bold text-sm text-green-500">{{ $job->employer->name }}</div>
      <strong class="text-blue-500">{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }} per year.
    </a>
  @endforeach
</x-layout>
