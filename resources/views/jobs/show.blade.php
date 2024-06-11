<x-layout>
  <x-slot:heading>
    Job Page
  </x-slot>

  <h2 class="font-bold text-2xl mb-3 text-blue-500">{{ $job->title }}</h2>

  <p>
    This job pays {{ $job->salary }} per year.
  </p>

  @can('edit', $job)
    <p class="mt-6">
      <x-button href="/jobs/{{ $job->id }}/edit">
        Edit Job
      </x-button>
    </p>
  @endcan

</x-layout>
