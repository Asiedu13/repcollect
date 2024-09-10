<main x-data="{approveDelete: false}" class="bg-white mt-5 rounded-md .h-[fit] h-[600px] lg:w-[700px] flex flex-start flex-col .container px-2">
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
                    <!-- TODO:Implement in version 2 <div class="absolute bottom-0 right-0 w-[40px] h-[40px] bg-slate-100 text-slate-500 rounded-full flex justify-center items-center">
                        <input .x-model="selectedFile" @change="selectedFile = Object.values($event.target.files); $dispatch('load-image')" class="opacity-0 w-[50px] z-10 absolute " type="file" name="" id="">
                        <svg  class="absolute" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-camera"><path d="M14.5 4h-5L7 7H4a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-3l-2.5-3z"/><circle cx="12" cy="13" r="3"/></svg>                    
                    </div> --> 
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
                            @edit-personal.window="$el.removeAttribute('disabled'); $el.setAttribute('class', '.text-xl p-2 border rounded-md')" id="firstname" class="font-medium bg-white text-gray-600" type="text" name="firstname" disabled 
                        />
                        @error('username')
                            <p class="text-red-400 text-sm mt-5 flex gap-2">
                                <span> 
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-info"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>  
                                </span>   
                                {{$message}}
                            </p>
                        @enderror
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
                            @edit-personal.window="$el.removeAttribute('disabled'); $el.setAttribute('class', '.text-xl p-2 border rounded-md')" id="firstname" class="font-medium bg-white text-gray-600" type="text" name="email" disabled 
                        />
                        @error('email')
                            <p class="text-red-400 text-sm mt-5 flex gap-2">
                                <span> 
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-info"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>  
                                </span>   
                                {{$message}}
                            </p>
                        @enderror
                    </div>
                    <div class="flex flex-col my-2">
                        <label class="text-gray-400">Phone</label>
                        <input 
                            wire:model="phone"
                            @save-personal.window="$el.setAttribute('disabled', 'true'); $el.setAttribute('class', 'text-gray-500 bg-white border-none p-0 my-0')" 
                            @edit-personal.window="$el.removeAttribute('disabled'); $el.setAttribute('class', '.text-xl p-2 border rounded-md')" id="phone" class="font-medium bg-white text-gray-600" type="text" name="phone" disabled 
                        />
                        @error('phone')
                            <p class="text-red-400 text-sm mt-5 flex gap-2">
                                <span> 
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-info"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>  
                                </span>   
                                {{$message}}
                            </p>
                        @enderror
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
            <!-- Financial preferences -->
            <section class="p-4 border border-gray-200 rounded-lg" x-data="{save: false}">
                <header class="flex justify-between items-center">
                    <h2 class="font-medium text-gray-500">Financial Preferences</h2>
                     <!-- edit icon goes here -->
                     <button x-show="! save" @click="$dispatch('edit-financial'); save = true" class="flex items-center justify-center gap-2 border border-gray-200 py-2 px-4 rounded-full text-gray-400 text-sm font-medium w-fit h-fit self-center hover:bg-gray-400 hover:text-white transition delay-150">
                         Edit
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pencil-line"><path d="M12 20h9"/><path d="M16.376 3.622a1 1 0 0 1 3.002 3.002L7.368 18.635a2 2 0 0 1-.855.506l-2.872.838a.5.5 0 0 1-.62-.62l.838-2.872a2 2 0 0 1 .506-.854z"/><path d="m15 5 3 3"/></svg>
                     </button>
                     <!-- Save button -->
                     <button x-show="save"  @click="$dispatch('save-financial'); save = false; $wire.updateUser();" class="flex items-center justify-center gap-2 border border-gray-200 py-2 px-4 rounded-full text-gray-400 text-sm font-medium w-fit h-fit self-center hover:bg-gray-400 hover:text-white delay-150">
                         Save
                         <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-save"><path d="M15.2 3a2 2 0 0 1 1.4.6l3.8 3.8a2 2 0 0 1 .6 1.4V19a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2z"/><path d="M17 21v-7a1 1 0 0 0-1-1H8a1 1 0 0 0-1 1v7"/><path d="M7 3v4a1 1 0 0 0 1 1h7"/></svg>
                    </button>
                </header>
                <section class="grid grid-cols-2">
                    <div class="flex flex-col my-2">
                        <label class="text-gray-400">Currency</label>
                        <select 
                            wire:model="currency"
                            @save-financial.window="$el.setAttribute('disabled', 'true'); $el.setAttribute('class', 'text-gray-500 bg-white border-none p-0 my-0'); updateUser;" 
                            @edit-financial.window="$el.removeAttribute('disabled'); $el.setAttribute('class', '.text-xl p-2 border rounded-md')" id="currency" class="font-medium bg-white text-gray-600" type="text" name="currency" disabled 
                        > 
                            <option value="#">Select a currency</option>
                            <option value="GHS">Cedi</option>
                        </select>
                    </div>
                    <div class="flex flex-col my-2">
                        <label class="text-gray-400">Timezone</label>
                        <select
                            wire:model="timezone"
                            @save-financial.window="$el.setAttribute('disabled', 'true'); $el.setAttribute('class', 'text-gray-500 bg-white border-none p-0 my-0')" 
                            @edit-financial.window="$el.removeAttribute('disabled'); $el.setAttribute('class', '.text-xl p-2 border rounded-md')" id="timezone" class="font-medium bg-white text-gray-600" type="text" name="timezone" disabled 
                        > 
                            <option value="#">Select a timezone</option>
                            <option value="UTC">UTC</option>
                    </select>
                    </div>
                    <div class="flex flex-col my-2">
                        <label class="text-gray-400">Language</label>
                        <select 
                            wire:model="language"
                            @save-financial.window="$el.setAttribute('disabled', 'true'); $el.setAttribute('class', 'text-gray-500 bg-white border-none p-0 my-0')" 
                            @edit-financial.window="$el.removeAttribute('disabled'); $el.setAttribute('class', '.text-xl p-2 border rounded-md')" id="language" class="font-medium bg-white text-gray-600" type="text" name="language" disabled 
                        >
                            <option value="#">Select a language</option> 
                            <option value="english">English</option>
                        </select>
                    </div>
                </section>
            </section>
            <section class="p-4">
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
            </section>

       
             
        </main>

        <!-- Confirmation box --> 
         <section x-show="approveDelete" class="absolute top-0 left-0 h-screen w-screen backdrop-blur-md .z-20 flex flex-col items-center justify-center">
            <div class="bg-white py-8 px-8 w-[600px] h-[700px] rounded-md z-30 overflow-y-scroll">
                <header class="text-lg text-gray-500 flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-message-square-warning"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/><path d="M12 7v2"/><path d="M12 13h.01"/></svg>
                    <h2 class="font-medium text-xl">Are You Sure You Want to Delete Your Account?</h2>
                </header>
                <p class="text-sm text-gray-500 mb-5 .font-medium">
                    Deleting your account is a permanent action and cannot be undone. Once your account is deleted, 
                    all your personal data will be removed from our systems, and you will lose access to any services
                     associated with your account. Please take a moment to review the information below
                </p>
                <section class="text-gray-500">
                    <h2 class="text-gray-500 text-lg font-medium">What You Will Lose</h2>
                    <p class="text-sm">By deleting your account, the following data will be <b> permanently lost</b>:</p>
                    <ul class="list-disc px-8 text-sm">
                        <li> <b>Transaction History</b>: All past financial records, reports, and insights will be deleted.</li> 
                        <li><b>Budget and Goals</b>:Any budgeting plans, financial goals, and progress you've made will be erased.</li> 
                        <li><b>Linked Accounts</b> : Your linked bank and financial accounts will be unlinked and permanently removed.</li> 
                        <li><b>Personalized Settings</b>: All your preferences, notifications, and account settings will be lost.</li> 
                        <li><b>Access to Premium Features</b>:If you're a paid user, you will lose access to any premium services. No refunds will be issued for unused portions of your subscription.
                        </li> 
                    </ul>
                    <h2 class="text-gray-500 text-lg font-medium mt-4">We Have Alternatives</h2>
                    <p class="text-sm">If you're considering deleting your account, we encourage you to explore other options:</p>
                    <ul class="list-disc px-8 text-sm">
                        <li> <b>Deactivate Account</b>: Take a break! <a class="underline" href="#" target="_blank" rel="noopener noreferrer">Deactivating your account </a> allows you to pause it temporarily without losing any data. You can reactivate it anytime.</li> 
                        <li><b>Pause Notifications</b>: Are you overwhelmed by notifications? You can easily manage or turn off notifications from your account settings.</li> 
                        <li><b>Contact Support</b>: Facing issues? <a class="underline" href="#" target="_blank" rel="noopener noreferrer">Reach out to our support team</a>  for assistance. We&apos;re here to help!</li> 
                    </ul>
                    <h2 class="text-gray-500 font-medium mt-4">What Happens to Your Data?</h2>
                    <p class="text-sm">
                        We value your privacy. 
                        Once your account is deleted, <b>all of your data will be permanently removed</b> from our systems, and we will no longer retain any information linked to your account. 
                        This ensures your personal information remains secure and private.
                    </p>
                    
                    <h2 class="text-gray-500 text-lg font-medium mt-4">Paid Users Notice</h2>
                    <p class="text-sm">
                    If you're currently on a paid plan, please note that deleting your account will forfeit any remaining time on your subscription. 
                    <b>No refunds</b> will be issued for unused portions of your plan.
                    </p>
                    <h2 class="text-gray-500 text-lg font-medium mt-4">7-Day Waiting Period</h2>
                    <p class="text-sm">
                        After you confirm deletion, your account will be scheduled for <b>permanent removal in 7 days</b>. 
                        During this period, you can <b>reactivate your account </b> by simply logging back in. 
                        Once the waiting period expires, your account and all associated data will be permanently deleted.
                    </p>
                    <h3 class="font-medium text-gray-500 mt-5">I understand</h3>
                    <p class="text-sm">
                       I have read and completely understand the effects of this action
                    </p>
                    <div class="flex gap-1 mt-2">
                        <button @click="approveDelete = ! approveDelete; $refresh" class="text-md text-gray-500 bg-gray-100 p-2 rounded-md font-medium flex-1">Cancel</button>
                        <button wire:click="delete" class="flex-1 text-red-500 bg-red-100 font-medium rounded-md text-md">Delete my account</button>
                    </div>
                </section>
            </div>
         </section>
    </main>
