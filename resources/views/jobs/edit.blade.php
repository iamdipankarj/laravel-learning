<x-layout>
  <x-slot:heading>Edit Job</x-slot:heading>

{{--  <div>--}}
{{--    @if($errors->any())--}}
{{--      <ul>--}}
{{--        @foreach($errors->all() as $error)--}}
{{--          <li class="text-red-500 italic">{{ $error }}</li>--}}
{{--        @endforeach--}}
{{--      </ul>--}}
{{--    @endif--}}
{{--  </div>--}}

  <form method="POST" action="/jobs/{{ $job->id }}">
    <div class="space-y-4">
      @csrf
      @method('PATCH')
      <div>
        <label>Job Title</label>
        <input class="w-full" type="text" name="title" value="{{ $job->title }}">
        @error('title')
          <p class="text-xs text-red-500 font-semibold !m-0">
            {{ $message }}
          </p>
        @enderror
      </div>


      <div>
        <label>Salary</label>
        <input class="w-full" type="text" name="salary" value="{{ $job->salary }}">
        @error('salary')
          <p class="text-xs text-red-500 font-semibold !m-0">
            {{ $message }}
          </p>
        @enderror
      </div>

      <div class="flex justify-between items-center">
        <button type="submit">Update</button>
        <button form="delete-form">Delete</button>
        <a href="/jobs/{{ $job->id }}" class="underline inline-flex">Cancel</a>
      </div>
    </div>
  </form>

  <form method="POST" action="/jobs/{{ $job->id }}" class="hidden" id="delete-form">
    @csrf
    @method('DELETE')
  </form>

</x-layout>
