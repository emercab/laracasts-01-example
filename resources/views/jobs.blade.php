<x-layout>
  <x-slot:heading>
    Jobs Page
  </x-slot>

  <div class="flex flex-row flex-wrap gap-5">
    @foreach ($jobs as $job)
      <div class="inline-block w-full md:w-[49%]">
        <a href="/jobs/{{ $job['id'] }}" class="block px-4 py-6 border border-gray-400 bg-white mb-2 rounded-xl">
          <div class="font-bold text-sm text-green-500">{{ $job->employer->name }}</div>
          <strong class="text-blue-500">{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }} per year.
        </a>
      </div>
    @endforeach
  </div>

  <div class="mt-8">
    {{ $jobs->links() }}
  </div>
</x-layout>
