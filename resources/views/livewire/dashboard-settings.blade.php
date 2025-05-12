  <main class=".bg-primary mt-5 rounded-md h-[fit] lg:w-[700px] flex flex-start flex-col px-2">
      <header class="flex gap-2 .text-gray-600 .text-neutral font-semibold items-center py-4 px-4">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-settings"><path d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z"/><circle cx="12" cy="12" r="3"/></svg>
        <h2 class="text-xl">Settings</h2>
      </header>
      <hr>
      <main class="mt-5 flex flex-col gap-4 overflow-y-auto">
        <section x-data="{save: false}" class="flex flex-col gap-5 border border-gray-200 rounded-lg p-4">
          <header class="flex justify-between items-center">
            <h2 class="font-medium text-neutral">Payment Methods</h2>
              <!-- edit icon goes here -->
            <button x-show="! save" @click="$dispatch('edit-methods'); save = true" class="flex items-center justify-center gap-2 border border-gray-200 py-2 px-4 rounded-full text-neutral text-sm font-medium w-fit h-fit self-center hover:bg-gray-400 hover:text-white transition delay-150">
              Edit
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pencil-line"><path d="M12 20h9"/><path d="M16.376 3.622a1 1 0 0 1 3.002 3.002L7.368 18.635a2 2 0 0 1-.855.506l-2.872.838a.5.5 0 0 1-.62-.62l.838-2.872a2 2 0 0 1 .506-.854z"/><path d="m15 5 3 3"/></svg>
            </button>
            <!-- Save button -->
            <button x-show="save"  @click="$wire.updateUser(); $dispatch('save-methods'); save = false;" class="flex items-center justify-center gap-2 border border-gray-200 py-2 px-4 rounded-full text-gray-400 text-sm font-medium w-fit h-fit self-center hover:bg-gray-400 hover:text-primary delay-150">
              Save
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-save"><path d="M15.2 3a2 2 0 0 1 1.4.6l3.8 3.8a2 2 0 0 1 .6 1.4V19a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2z"/><path d="M17 21v-7a1 1 0 0 0-1-1H8a1 1 0 0 0-1 1v7"/><path d="M7 3v4a1 1 0 0 0 1 1h7"/></svg>
            </button>
          </header>
          <section class="text-neutral">
            <div>
              <label class="font-medium">Momo Account</label>
              <p class="text-sm mb-5">All payments will be made to this number</p>
              <input
              wire:model="momo"
              @save-methods.window="$el.setAttribute('disabled', 'true'); $el.setAttribute('class', 'bg-white p-0 my-0 font-medium bg-white text-secondary border rounded-md p-2')"
              @edit-methods.window="$el.removeAttribute('disabled'); $el.setAttribute('class', 'p-2 border text-secondary border-blue-400 rounded-md outline-blue-400 placeholder:text-blue-400')" id="momo"
              class="font-medium .bg-primary .text-secondary border rounded-md p-2"
              type="text"
              name="momo"
              placeholder="+233"
              disabled
              />
              @error('momo')
                <p class="text-red-400 text-sm mt-5 flex gap-2">
                  <span class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-info"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
                  </span>
                  {{$message}}
                </p>
              @enderror
            </div>
          </section>
        </section>
      </main>
    </main>
