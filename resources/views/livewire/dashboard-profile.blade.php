<main class="bg-white mt-5 rounded-md .h-[fit] h-[600px] lg:w-[700px] flex flex-start flex-col .container px-2">
        <header class="flex gap-2 .text-gray-600 text-sky-500 font-semibold items-center py-4 px-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
            <h2 class="text-xl .border-r-2 border-sky-400 pr-4">Profile</h2> 
            <a href="#" class="flex gap-2 font-normal items-center text-sm text-sky-500">
                {{-- <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-plus"><circle cx="12" cy="12" r="10"/><path d="M8 12h8"/><path d="M12 8v8"/></svg> --}}
            </a>
        </header>
        <hr>
        <main class="mt-5 flex flex-col gap-4 overflow-y-scroll">
            <section x-data="{save: false, selectedFile: null, fileReader: null}" class="flex gap-5 border border-gray-200 rounded-lg p-4">
                <div class="bg-blue-200 w-[100px] h-[100px] rounded-full relative">
                    <div class="absolute bottom-0 right-0 w-[40px] h-[40px] bg-slate-100 text-slate-500 rounded-full flex justify-center items-center">
                        <input .x-model="selectedFile" @change="selectedFile = Object.values($event.target.files); $dispatch('load-image')" class="opacity-0 w-[50px] z-10 absolute " type="file" name="" id="">
                        <svg  class="absolute" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-camera"><path d="M14.5 4h-5L7 7H4a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-3l-2.5-3z"/><circle cx="12" cy="13" r="3"/></svg>                    
                    </div>
                    <img 
                        class="w-[100px] h-[100px] rounded-full cover" 
                        @load-image.window="fileReader = new FileReader(); fileReader.onLoad = (e) => {$el.src = e.target.result}; fileReader.readAsDataURL(selectedFile[0]);" 
                        x-bind:src="selectedFile ? URL.createObjectURL(selectedFile[0]) : '/images/default-profile.svg'" 
                        src="/images/default-profile.svg"/>
                </div>
                <div class="flex flex-1 justify-between">
                    <div class="flex flex-col ">
                        <input
                            wire:model="username" 
                            name="username"
                            @save-meta.window="$el.setAttribute('disabled', 'true'); $el.setAttribute('class', 'text-xl text-gray-500 font-medium bg-white border-none')" 
                            @edit-meta.window="$el.removeAttribute('disabled'); $el.setAttribute('class', 'text-xl p-2 border rounded-md')"
                            class="text-xl text-gray-500 font-medium bg-white border-none" 
                            disabled />
                        <input 
                            wire:model="email"
                            name="email"
                            @save-meta.window="$el.setAttribute('disabled', 'true'); $el.setAttribute('class', 'text-gray-500 bg-white border-none p-0 my-0')" 
                            @edit-meta.window="$el.removeAttribute('disabled'); $el.setAttribute('class', 'p-2 my-2 border rounded-md')" 
                            class="text-gray-500 bg-white" 
                             disabled />
                        <input
                            wire:model="country"
                            @save-meta.window="$el.setAttribute('disabled', 'true'); $el.setAttribute('class', '.text-xl text-gray-600 font-medium bg-white border-none')" 
                            @edit-meta.window="$el.removeAttribute('disabled'); $el.setAttribute('class', 'p-2 border rounded-md')" 
                            class="text-gray-500 font-medium bg-white" 
                            value="Accra, Ghana" name="country" disabled />
                    </div>
                    <!-- edit icon goes here -->
                     <button x-show="! save" @click="$dispatch('edit-meta'); save = true" class="flex items-center justify-center gap-2 border border-gray-200 py-2 px-4 rounded-full text-gray-400 text-sm font-medium w-fit h-fit self-center hover:bg-gray-400 hover:text-white transition delay-150">
                         Edit
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pencil-line"><path d="M12 20h9"/><path d="M16.376 3.622a1 1 0 0 1 3.002 3.002L7.368 18.635a2 2 0 0 1-.855.506l-2.872.838a.5.5 0 0 1-.62-.62l.838-2.872a2 2 0 0 1 .506-.854z"/><path d="m15 5 3 3"/></svg>
                     </button>
                     <!-- Save button -->
                     <button x-show="save" @click="$dispatch('save-meta'); save = false; updateUser(); $refresh;" class="flex items-center justify-center gap-2 border border-gray-200 py-2 px-4 rounded-full text-gray-400 text-sm font-medium w-fit h-fit self-center hover:bg-gray-400 hover:text-white transition delay-150">
                         Save
                         <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-save"><path d="M15.2 3a2 2 0 0 1 1.4.6l3.8 3.8a2 2 0 0 1 .6 1.4V19a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2z"/><path d="M17 21v-7a1 1 0 0 0-1-1H8a1 1 0 0 0-1 1v7"/><path d="M7 3v4a1 1 0 0 0 1 1h7"/></svg>
                    </button>
                </div>
            </section>

            <section class="p-4 border border-gray-200 rounded-lg" x-data="{save: false}">
                <header class="flex justify-between items-center">
                    <h2 class="font-medium text-gray-500">Personal Information</h2>
                     <!-- edit icon goes here -->
                     <button x-show="! save" @click="$dispatch('edit-personal'); save = true" class="flex items-center justify-center gap-2 border border-gray-200 py-2 px-4 rounded-full text-gray-400 text-sm font-medium w-fit h-fit self-center hover:bg-gray-400 hover:text-white transition delay-150">
                         Edit
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pencil-line"><path d="M12 20h9"/><path d="M16.376 3.622a1 1 0 0 1 3.002 3.002L7.368 18.635a2 2 0 0 1-.855.506l-2.872.838a.5.5 0 0 1-.62-.62l.838-2.872a2 2 0 0 1 .506-.854z"/><path d="m15 5 3 3"/></svg>
                     </button>
                     <!-- Save button -->
                     <button x-show="save"  @click="$dispatch('save-personal'); save = false; $wire.updateUser();" class="flex items-center justify-center gap-2 border border-gray-200 py-2 px-4 rounded-full text-gray-400 text-sm font-medium w-fit h-fit self-center hover:bg-gray-400 hover:text-white delay-150">
                         Save
                         <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-save"><path d="M15.2 3a2 2 0 0 1 1.4.6l3.8 3.8a2 2 0 0 1 .6 1.4V19a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2z"/><path d="M17 21v-7a1 1 0 0 0-1-1H8a1 1 0 0 0-1 1v7"/><path d="M7 3v4a1 1 0 0 0 1 1h7"/></svg>
                    </button>
                </header>
                <section class="grid grid-cols-2">
                    <div class="flex flex-col my-2">
                        <label class="text-gray-400">Username</label>
                        <input 
                            wire:model="username"
                            @save-personal.window="$el.setAttribute('disabled', 'true'); $el.setAttribute('class', 'text-gray-500 bg-white border-none p-0 my-0'); updateUser;" 
                            @edit-personal.window="$el.removeAttribute('disabled'); $el.setAttribute('class', '.text-xl p-2 border rounded-md')" id="firstname" class="font-medium bg-white text-gray-600" type="text" value="Prince" name="firstname" disabled 
                        />
                    </div>
                    <!-- <div class="flex flex-col my-2">
                        <label class="text-gray-400">Last name</label>
                        <input
                            wire:model="lastname" 
                            @save-personal.window="$el.setAttribute('disabled', 'true'); $el.setAttribute('class', 'text-gray-500 bg-white border-none p-0 my-0')" 
                            @edit-personal.window="$el.removeAttribute('disabled'); $el.setAttribute('class', '.text-xl p-2 border rounded-md')" id="firstname" class="font-medium bg-white text-gray-600" type="text" value="Asiedu" name="lastname" disabled 
                        />
                    </div> -->
                    <div class="flex flex-col my-2">
                        <label class="text-gray-400">Email</label>
                        <input 
                            wire:model="email"
                            @save-personal.window="$el.setAttribute('disabled', 'true'); $el.setAttribute('class', 'text-gray-500 bg-white border-none p-0 my-0')" 
                            @edit-personal.window="$el.removeAttribute('disabled'); $el.setAttribute('class', '.text-xl p-2 border rounded-md')" id="firstname" class="font-medium bg-white text-gray-600" type="text" value="princekofasiedu@gmail.com" name="email" disabled 
                        />
                    </div>
                    <div class="flex flex-col my-2">
                        <label class="text-gray-400">Phone</label>
                        <input 
                            wire:model="phone"
                            @save-personal.window="$el.setAttribute('disabled', 'true'); $el.setAttribute('class', 'text-gray-500 bg-white border-none p-0 my-0')" 
                            @edit-personal.window="$el.removeAttribute('disabled'); $el.setAttribute('class', '.text-xl p-2 border rounded-md')" id="firstname" class="font-medium bg-white text-gray-600" type="text" value="+233 24 558 4914" name="phone" disabled 
                        />
                    </div>
                    <div class="flex flex-col my-2">
                        <label class="text-gray-400">Bio</label>
                        <input 
                            wire:model="bio"
                            @save-personal.window="$el.setAttribute('disabled', 'true'); $el.setAttribute('class', 'text-gray-500 bg-white border-none p-0 my-0')" 
                            @edit-personal.window="$el.removeAttribute('disabled'); $el.setAttribute('class', '.text-xl p-2 border rounded-md')" id="firstname" class="font-medium bg-white text-gray-600" type="text" value="Down to Earth but still above you" name="bio" disabled 
                        />
                    </div>
                </section>
            </section>
            <section class=".p-4">
                <header>
                    <h2 class="text-red-400 font-medium my-2 ">Dangerous zone</h2>
                </header>
                <section class="border border-red-200 rounded-md text-red-400 flex justify-between items-center py-4 p-2">
                    <div>
                        <h2 class="font-medium">Delete Account </h2>
                        <p class="text-sm">Once you delete, there is no going back</p>
                    </div>
                    <div>
                        <button class=".border border-red-700 rounded-lg p-2 font-medium bg-red-100 hover:bg-red-200 transition">
                            Delete my account
                        </button>
                    </div>
                </section>
            </section>
        </main>
    </main>
