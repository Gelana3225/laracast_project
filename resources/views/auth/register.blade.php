<x-layout>
    <x-slot:heading>
      Register
    </x-slot:heading>
   
    <div class="bg-sky-900 p-8 rounded-lg"> 
         <p>
    <form method="POST" action="/register">
        @csrf
  <div class="space-y-12">
    <div class="border-b border-white/10 pb-12">

      <x-form-field>
        <div class="sm:col-span-4">
          <x-form-label for="name">Name</x-form-label>
          <div class="mt-2">
            <x-form-input id="name" name="name"  required/>
            <x-form-error name="name"/>
          </div>
      </x-form-field>

      <x-form-field>
        <div class="sm:col-span-4">
          <x-form-label for="email">Email</x-form-label>
          <div class="mt-2">
            <x-form-input id="email" name="email" type="email" required/>
            <x-form-error name="email"/>
          </div>
      </x-form-field>

      <x-form-field>
        <div class="sm:col-span-4">
          <x-form-label for="password">Password</x-form-label>
          <div class="mt-2">
            <x-form-input id="password" name="password" type="password" required/>
            <x-form-error name="password"/>
          </div>
      </x-form-field>

      <x-form-field>
        <div class="sm:col-span-4">
          <x-form-label for="password_confirmation">Confirm Password</x-form-label>
          <div class="mt-2">
            <x-form-input id="password_confirmation" name="password_confirmation" type="password" required/>
            <x-form-error name="password_confirmation"/>
          </div>
      </x-form-field>

      </div>
      
    </div>
  </div>

  <div class="mt-6 flex items-center justify-end gap-x-6">
    <a href="/" class="text-sm/6 font-semibold text-white">Cancel</a>
    <x-form-button>Register</x-form-button>
  </div>
</form>

   </p>
       
    </div>

  
</x-layout>