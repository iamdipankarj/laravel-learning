<x-layout>
  <x-slot:heading>{{ $job->title }}</x-slot:heading>
  <h3 class="m-0">Salary: {{ $job->salary }}</h3>
  <a class="mt-4 block" href="/jobs/{{ $job->id }}/edit">Edit</a>
</x-layout>
