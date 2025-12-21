<x-layout>
    <x-slot:heading>
       create job
    </x-slot:heading>
   
    <div class="bg-sky-900 p-8 rounded-lg"> 
         <p>
    <form method="POST" action="/jobs">
        @csrf
  <div class="space-y-12">
    <div class="border-b border-white/10 pb-12">
      <h2 class="text-base/7 font-semibold text-white">Create a new Job</h2>
      <p class="mt-1 text-sm/6 text-gray-400">We just need a handful of details from you.</p>

      <x-form-field>
        <div class="sm:col-span-4">
          <x-form-label for="title">Title</x-form-label>
          <div class="mt-2">
            <x-form-input id="title" name="title" placeholder="CEO" />
            <x-form-error name="title"/>
          </div>
      </x-form-field>

      <x-form-field>
        <div class="sm:col-span-4">
          <x-form-label for="title">Salary</x-form-label>
          <div class="mt-2">
            <x-form-input id="salary" name="salary" placeholder="$50,000 USD" />
            <x-form-error name="salary"/>
          </div>
      </x-form-field>

      </div>
      
    </div>
  </div>

  <div class="mt-6 flex items-center justify-end gap-x-6">
    <button type="button" class="text-sm/6 font-semibold text-white">Cancel</button>
    <x-form-button>Save</x-form-button>
  </div>
</form>

   </p>
       
    </div>

  
</x-layout>