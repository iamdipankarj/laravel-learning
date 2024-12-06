<x-layout>
  <x-slot:heading>Login</x-slot:heading>

  <form method="POST" action="/login">
    <div class="space-y-4">
      @csrf

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

      <button type="submit" class="w-full">Login</button>
    </div>
  </form>
</x-layout>
