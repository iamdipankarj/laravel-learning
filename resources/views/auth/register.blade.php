<x-layout>
  <x-slot:heading>Register</x-slot:heading>

  <form method="POST" action="/register">
    <div class="space-y-4">
      @csrf
      <div>
        <label>First Name</label>
        <input class="w-full" type="text" name="first_name" required>
        @error('first_name')
        <p class="text-xs text-red-500 font-semibold !m-0">
          {{ $message }}
        </p>
        @enderror
      </div>


      <div>
        <label>Last Name</label>
        <input class="w-full" type="text" name="last_name" required>
        @error('last_name')
        <p class="text-xs text-red-500 font-semibold !m-0">
          {{ $message }}
        </p>
        @enderror
      </div>

      <div>
        <label>Email</label>
        <input class="w-full" type="email" name="email" required>
        @error('email')
        <p class="text-xs text-red-500 font-semibold !m-0">
          {{ $message }}
        </p>
        @enderror
      </div>

      <div>
        <label>Password</label>
        <input class="w-full" type="password" name="password" required>
        @error('password')
        <p class="text-xs text-red-500 font-semibold !m-0">
          {{ $message }}
        </p>
        @enderror
      </div>

      <div>
        <label>Confirm Password</label>
        <input class="w-full" type="password" name="password_confirmation" required>
        @error('password_confirmation')
        <p class="text-xs text-red-500 font-semibold !m-0">
          {{ $message }}
        </p>
        @enderror
      </div>

      <button type="submit" class="w-full">Register</button>
    </div>
  </form>
</x-layout>
