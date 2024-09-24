<main x-data="{approveDelete: false}" class="bg-white .mt-5 rounded-md lg:w-[550px] flex flex-start flex-col">
        <main class="mt-5 flex flex-col gap-5">
            <section x-data="{save: false, selectedFile: null, fileReader: null}" class="flex flex-1 gap-5 border border-gray-200 rounded-lg p-4">
                <div class="flex flex-1 justify-between w-full">
                    <div class="flex flex-col">
                        <div class="flex justify-between items-center">
                            <input
                            wire:model="collectionTitle"
                            name="title"
                            @save-collection-meta.window="$el.setAttribute('disabled', 'true'); $el.setAttribute('class', 'text-xl text-gray-500 font-medium bg-white border-none')" 
                            @edit-collection-meta.window="$el.removeAttribute('disabled'); $el.setAttribute('class', 'text-xl p-2 border rounded-md')"
                            class="text-xl text-wrap text-gray-500 font-medium bg-white border-none flex-1" 
                            disabled />
                            <button x-show="! save" @click="$dispatch('edit-collection-meta'); save = true" class="flex items-center justify-center gap-2 border border-gray-200 py-2 px-4 rounded-full text-gray-400 text-sm font-medium w-fit h-fit self-center hover:bg-gray-400 hover:text-white transition delay-150">
                                Edit
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pencil-line"><path d="M12 20h9"/><path d="M16.376 3.622a1 1 0 0 1 3.002 3.002L7.368 18.635a2 2 0 0 1-.855.506l-2.872.838a.5.5 0 0 1-.62-.62l.838-2.872a2 2 0 0 1 .506-.854z"/><path d="m15 5 3 3"/></svg>
                            </button>
                            <!-- Save button -->
                            <button x-show="save"  @click="$dispatch('save-collection-meta'); save = false; $wire.updateCollection()" class="flex items-center justify-center gap-2 border border-gray-200 py-2 px-4 rounded-full text-gray-400 text-sm font-medium w-fit h-fit self-center hover:bg-gray-400 hover:text-white delay-150">
                                Save
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-save"><path d="M15.2 3a2 2 0 0 1 1.4.6l3.8 3.8a2 2 0 0 1 .6 1.4V19a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2z"/><path d="M17 21v-7a1 1 0 0 0-1-1H8a1 1 0 0 0-1 1v7"/><path d="M7 3v4a1 1 0 0 0 1 1h7"/></svg>
                            </button>
                        </div>
                        <textarea
                            wire:model="collectionDescription"
                            name="description"
                            @save-collection-meta.window="$el.setAttribute('disabled', 'true'); $el.setAttribute('class', 'text-gray-500 bg-white border-none p-0 my-0')" 
                            @edit-collection-meta.window="$el.removeAttribute('disabled'); $el.setAttribute('class', 'p-2 my-2 border rounded-md')" 
                            class="text-gray-500 bg-white text-wrap" 
                             disabled rows="5" cols="68"></textarea>
                        <div class="flex flex-col">
                            <label for="status" class="text-gray-500">Status</label>
                            <div class="flex gap-2 items-center">
                                <p class="relative top-[2px]"> 
                                    <span class="relative flex h-3 w-3">
                                        <span :class="$wire.collectionStatus == 'ongoing' ? 'bg-amber-400' : $wire.collectionStatus == 'completed' ? 'bg-green-400' : 'bg-gray-400' " class="animate-ping absolute inline-flex h-full w-full rounded-full opacity-75"></span>
                                        <span :class="$wire.collectionStatus == 'ongoing' ? 'bg-amber-500' : $wire.collectionStatus == 'completed' ? 'bg-green-500' : 'bg-gray-500' " class="relative inline-flex rounded-full h-3 w-3 "></span>
                                    </span>
                                </p>
                                <select 
                                    name="collectionStatus" 
                                    wire:model="collectionStatus" 
                                    id="status"    
                                    @save-collection-meta.window="$el.setAttribute('disabled', 'true'); $el.setAttribute('class', 'text-gray-500 font-medium bg-white border-none')" 
                                    @edit-collection-meta.window="$el.removeAttribute('disabled'); $el.setAttribute('class', 'p-2 border rounded-md')" 
                                    disabled
                                    >
                                    <option value="ongoing">ongoing</option>
                                    <option value="completed">completed</option>
                                    <option value="paused">paused</option>
                                </select>
                            </div>
                        </div>
                    </div>
            </section>

            <section class="p-4 border border-gray-200 rounded-lg" x-data="{save: false}">
                <header class="flex justify-between items-center">
                    <h2 class="font-medium text-gray-500">Payment Information</h2>
                     <!-- edit icon goes here -->
                     <!-- <button x-show="! save" @click="$dispatch('edit-payment'); save = true" class="flex items-center justify-center gap-2 border border-gray-200 py-2 px-4 rounded-full text-gray-400 text-sm font-medium w-fit h-fit self-center hover:bg-gray-400 hover:text-white transition delay-150">
                         Edit
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pencil-line"><path d="M12 20h9"/><path d="M16.376 3.622a1 1 0 0 1 3.002 3.002L7.368 18.635a2 2 0 0 1-.855.506l-2.872.838a.5.5 0 0 1-.62-.62l.838-2.872a2 2 0 0 1 .506-.854z"/><path d="m15 5 3 3"/></svg>
                     </button>
                   
                     <button x-show="save"  @click="$dispatch('save-payment'); save = false; updateUser" class="flex items-center justify-center gap-2 border border-gray-200 py-2 px-4 rounded-full text-gray-400 text-sm font-medium w-fit h-fit self-center hover:bg-gray-400 hover:text-white delay-150">
                         Save
                         <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-save"><path d="M15.2 3a2 2 0 0 1 1.4.6l3.8 3.8a2 2 0 0 1 .6 1.4V19a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2z"/><path d="M17 21v-7a1 1 0 0 0-1-1H8a1 1 0 0 0-1 1v7"/><path d="M7 3v4a1 1 0 0 0 1 1h7"/></svg>
                    </button> -->
                </header>
                <section class="grid grid-cols-2 gap-5">
                    <div class="flex flex-col my-2">
                        <label class="text-gray-400">Payment type</label>
                        <select 
                            name="paytype" 
                            wire:model="collectionPayType" 
                            id="paytype"
                            @save-payment.window="$el.setAttribute('disabled', 'true'); $el.setAttribute('class', 'text-gray-500 bg-white border-none p-0 my-0'); $wire.updateCollection()" 
                            @edit-payment.window="$el.removeAttribute('disabled'); $el.setAttribute('class', '.text-xl p-2 border rounded-md')" id="paytype" class="font-medium bg-white text-gray-600" type="text" name="firstname" disabled 
                       
                        >
                            <option value="momo">Momo</option>
                        </select>

                        @error('collectionPayType')
                            <p class="text-red-400 text-sm mt-5 flex gap-2">
                                <span> 
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-info"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>  
                                </span>   
                                {{$message}}
                            </p>
                        @enderror
                    </div>
                   
                    <div class="flex flex-col my-2">
                        <label class="text-gray-400">Receiving number</label>
                        <input 
                            wire:model="collectionReceivingNumber"
                            @save-payment.window="$el.setAttribute('disabled', 'true'); $el.setAttribute('class', 'text-gray-500 bg-white border-none p-0 my-0')" 
                            @edit-payment.window="$el.removeAttribute('disabled'); $el.setAttribute('class', '.text-xl p-2 border rounded-md')" id="collectionReceivingNumber" class="font-medium bg-white text-gray-500" type="text" name="collectionReceivingNumber" disabled 
                        />
                        @error('collectionReceivingNumber')
                            <p class="text-red-400 text-sm mt-5 flex gap-2">
                                <span> 
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-info"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>  
                                </span>   
                                {{$message}}
                            </p>
                        @enderror
                    </div>
                    
                    <div class="flex flex-col my-2">
                        <label class="text-gray-400">Currency</label>
                        <select 
                            wire:model="collectionCurrency"
                            @save-payment.window="$el.setAttribute('disabled', 'true'); $el.setAttribute('class', 'text-gray-500 bg-white border-none p-0 my-0')" 
                            @edit-payment.window="$el.removeAttribute('disabled'); $el.setAttribute('class', '.text-xl p-2 border rounded-md')" id="currency" class="font-medium bg-white text-gray-600" type="text" name="currency" disabled 
                        >
                            <option value="GHS">GHS</option>
                            <option value="USD">USD</option>
                            <option value="NGN">NGN</option>
                        </select>
                    </div>
                </section>
            </section>
            <!-- Financial preferences -->
            <section class="p-4 border border-gray-200 rounded-lg" x-data="{save: false}">
                <header class="flex justify-between items-center">
                    <h2 class="font-medium text-gray-500">Goals and Timelines</h2>
                     <!-- edit icon goes here -->
                     <button x-show="! save" @click="$dispatch('edit-goals'); save = true" class="flex items-center justify-center gap-2 border border-gray-200 py-2 px-4 rounded-full text-gray-400 text-sm font-medium w-fit h-fit self-center hover:bg-gray-400 hover:text-white transition delay-150">
                         Edit
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pencil-line"><path d="M12 20h9"/><path d="M16.376 3.622a1 1 0 0 1 3.002 3.002L7.368 18.635a2 2 0 0 1-.855.506l-2.872.838a.5.5 0 0 1-.62-.62l.838-2.872a2 2 0 0 1 .506-.854z"/><path d="m15 5 3 3"/></svg>
                     </button>
                     <!-- Save button -->
                     <button x-show="save"  @click="$dispatch('save-goals'); save = false; $wire.updateCollection();" class="flex items-center justify-center gap-2 border border-gray-200 py-2 px-4 rounded-full text-gray-400 text-sm font-medium w-fit h-fit self-center hover:bg-gray-400 hover:text-white delay-150">
                         Save
                         <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-save"><path d="M15.2 3a2 2 0 0 1 1.4.6l3.8 3.8a2 2 0 0 1 .6 1.4V19a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2z"/><path d="M17 21v-7a1 1 0 0 0-1-1H8a1 1 0 0 0-1 1v7"/><path d="M7 3v4a1 1 0 0 0 1 1h7"/></svg>
                    </button>
                </header>
                <section class="grid grid-cols-2">
                    <div class="flex flex-col my-2">
                        <label class="text-gray-400">Goal</label>
                        <div>
                            <span class="text-gray-500"> {{$collectionCurrency}} </span>
                            <input
                            wire:model="collectionAmount"
                            @save-goals.window="$el.setAttribute('disabled', 'true'); $el.setAttribute('class', 'text-gray-500 bg-white border-none p-0 my-0'); updateUser;" 
                            @edit-goals.window="$el.removeAttribute('disabled'); $el.setAttribute('class', '.text-xl p-2 border rounded-md')" id="collectionAmount" class="font-medium bg-white text-gray-500" type="text" name="collectionAmount" disabled 
                            /> 
                        </div>
                    </div>
                    <div class="flex flex-col my-2">
                        <label class="text-gray-400">Base Contribution</label>
                        <div>
                            <span class="text-gray-500"> {{$collectionCurrency}} </span>
                            <input
                            wire:model="collectionBaseAmount"
                            @save-goals.window="$el.setAttribute('disabled', 'true'); $el.setAttribute('class', 'text-gray-500 bg-white border-none p-0 my-0')" 
                            @edit-goals.window="$el.removeAttribute('disabled'); $el.setAttribute('class', '.text-xl p-2 border rounded-md')" id="collectionBaseAmount" class="font-medium bg-white text-gray-500" type="text" name="collectionBaseAmount" disabled 
                            /> 
                        </div>
                    </div>
                </section>
            </section>
            <!-- <section class="p-4">
                <header>
                    <h2 class="text-red-400 font-medium my-2 ">Dangerous zone</h2>
                </header>
                <section class="border border-red-200 rounded-md text-red-400 flex justify-between items-center py-4 p-2">
                    <div>
                        <h2 class="font-medium">Delete Account </h2>
                        <p class="text-sm">Once you delete, there is no going back</p>
                    </div>
                    <div>
                        <button @click="approveDelete = ! approveDelete" class=".border border-red-700 rounded-lg p-2 font-medium bg-red-100 hover:bg-red-200 transition">
                            Delete my account
                        </button>
                    </div>
                </section>
            </section>          -->
        </main>
    </main>
