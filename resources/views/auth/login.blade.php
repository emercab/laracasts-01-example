<x-layout>
  <x-slot:heading>
    Log In Page
  </x-slot>

  <form method="POST" action="/login">
    @csrf

    <div class="space-y-12">
      <div class="border-b border-gray-900/10 pb-12">
        <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <x-form-field>
            <x-form-label for="email">Email:</x-form-label>
            <div class="mt-2">
              <x-form-input name="email" id="email" placeholder="your@email.com" type="email" :value="old('email')" />
              <x-form-error name="email" />
            </div>
          </x-form-field>

          <x-form-field>
            <x-form-label for="password">Password:</x-form-label>
            <div class="mt-2">
              <x-form-input name="password" id="password" type="password" :value="old('password')"/>
              <x-form-error name="password" />
            </div>
          </x-form-field>

        </div>
      </div>
    </div>

    <div class="mt-6 flex items-center justify-end gap-x-6">
      <div class="flex items-center gap-x-6">
        <x-form-button type="submit">Log In</x-form-button>
      </div>
    </div>
  </form>

</x-layout>