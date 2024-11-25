<x-layout>
  <x-slot:heading>Jobs</x-slot:heading>
  <div>
    @foreach ($jobs as $job)
      <article>
        <div class="space-y-2">
          <h3>{{ $job['title'] }}</h3>
          <h5 class="font-semibold">{{ $job->employer->name }}</h5>
        </div>
        <p>Pays {{ $job['salary'] }} per year.</p>
        <a href="/jobs/{{ $job['id'] }}" class="underline"><strong>View Job</strong></a>
      </article>
    @endforeach

    <div>
      {{ $jobs->links() }}
    </div>
  </div>
</x-layout>
