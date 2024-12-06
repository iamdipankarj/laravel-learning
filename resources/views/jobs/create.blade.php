<x-layout>
  <x-slot:heading>Create Job</x-slot:heading>

  <form method="POST" action="/jobs">
    <div class="space-y-4">
      @csrf
      <div>
        <label>Job Title</label>
        <input class="w-full" type="text" name="title">
        @error('title')
          <p class="text-xs text-red-500 font-semibold !m-0">
            {{ $message }}
          </p>
        @enderror
      </div>


      <div>
        <label>Salary</label>
        <input class="w-full" type="text" name="salary">
        @error('salary')
          <p class="text-xs text-red-500 font-semibold !m-0">
            {{ $message }}
          </p>
        @enderror
      </div>

      <button type="submit" class="w-full">Save</button>
    </div>
  </form>

</x-layout>
