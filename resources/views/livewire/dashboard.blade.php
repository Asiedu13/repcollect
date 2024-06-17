<div class="flex gap-10 .flex-col justify-between .items-center">
    {{-- Because she competes with no one, no one can compete with her. --}}

    <section class="flex flex-col .justify-center .items-center transition-all">

       
            <h1 class="text-2xl font-medium capitalize text-zinc-600 text-center">Good day, {{$user[0]->name}}</h1>
        
            <svg  class="text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-quote"><path d="M3 21c3 0 7-1 7-8V5c0-1.25-.756-2.017-2-2H4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2 1 0 1 0 1 1v1c0 1-1 2-2 2s-1 .008-1 1.031V20c0 1 0 1 1 1z"/><path d="M15 21c3 0 7-1 7-8V5c0-1.25-.757-2.017-2-2h-4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2h.75c0 2.25.25 4-2.75 4v3c0 1 0 1 1 1z"/>
            </svg>

            <blockquote class="text-gray-400 text-2xl w-[500px] flex gap-5 my-3 justify-center items-center">
                <p class="text-center">
                    {{$saying->content}}
                    <br>
                        ~ {{$saying->author}}
                </p>
            </blockquote>

            <div class="flex justify-end flex-end text-gray-400">
                <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-quote"><path d="M3 21c3 0 7-1 7-8V5c0-1.25-.756-2.017-2-2H4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2 1 0 1 0 1 1v1c0 1-1 2-2 2s-1 .008-1 1.031V20c0 1 0 1 1 1z"/><path d="M15 21c3 0 7-1 7-8V5c0-1.25-.757-2.017-2-2h-4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2h.75c0 2.25.25 4-2.75 4v3c0 1 0 1 1 1z"/></svg>
            </div>

        <nav class="bg-white p-4 rounded-md mt-20 text-slate-600 w-[500px]">
            <header class="flex gap-2 items-center mb-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-menu"><line x1="4" x2="20" y1="12" y2="12"/><line x1="4" x2="20" y1="6" y2="6"/><line x1="4" x2="20" y1="18" y2="18"/></svg>
                <h2 class="text-lg"> Menu</h2>
            </header>

            <hr>

            <ul>
                <li class="flex gap-2 items-center h-[50px] .my-2 cursor-pointer hover:border-2 hover:border-slate-600 hover:rounded-md .hover:text-white hover:px-4 transition-all {{$view == 'collections' ? 'bg-gray-700 text-white px-4 rounded-md' : 'bg-white text-slate-600' }} "  wire:click="handleMenuClick('collections')">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-badge-dollar-sign"><path d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z"/><path d="M16 8h-6a2 2 0 1 0 0 4h4a2 2 0 1 1 0 4H8"/><path d="M12 18V6"/></svg>
                    <p class="text-sm">Collections</p>
                </li>
                 <li class="flex gap-2 items-center h-[50px] my-2 cursor-pointer hover:border-2 hover:border-slate-600 hover:rounded-md .hover:text-white hover:px-4 transition-all {{$view == 'settings' ? 'bg-gray-700 text-white px-4 rounded-md' : 'bg-white text-slate-600' }} "  wire:click="handleMenuClick('settings')">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-settings"><path d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z"/><circle cx="12" cy="12" r="3"/></svg>
                    <p class="text-sm">Settings</p>
                </li>
                 <li class="flex gap-2 items-center h-[50px] .my-2 cursor-pointer hover:border-2 hover:border-slate-600 hover:rounded-md .hover:text-white hover:px-4 transition-all {{$view == 'statistics' ? 'bg-gray-700 text-white px-4 rounded-md' : 'bg-white text-slate-600' }} "   wire:click="handleMenuClick('statistics')">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-area-chart"><path d="M3 3v18h18"/><path d="M7 12v5h12V8l-5 5-4-4Z"/></svg>
                    <p class="text-sm">Statistics</p>
                </li>
            </ul>
        </nav>
    </section>

    @if($view == 'collections')
        <main class="bg-white mt-5 rounded-md h-[fit] lg:w-[700px] flex flex-start flex-col .container px-2">
            <header class="flex gap-2 .text-gray-600 text-sky-500 font-semibold items-center py-4 px-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-badge-dollar-sign"><path d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z"/><path d="M16 8h-6a2 2 0 1 0 0 4h4a2 2 0 1 1 0 4H8"/><path d="M12 18V6"/></svg>
                <h2 class="text-xl border-r-2 border-sky-400 pr-4">Collections</h2> 
            <a href="{{route('me.create')}}" class="flex gap-2 font-normal items-center text-sm text-sky-500">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-plus"><circle cx="12" cy="12" r="10"/><path d="M8 12h8"/><path d="M12 8v8"/></svg>
                 Create new collection 
            </a>
        </header>
        <hr>
        <livewire:collection-display color="yellow" type="ongoing" :items="$ongoing" :svg="$ongoingIcon">
        </livewire:collection-display>
        <livewire:collection-display color="green" type="completed" :items="$completed" :svg="$completedIcon" color="yellow" />
        <livewire:collection-display color="gray" type="paused" :items="$paused" :svg="$pausedIcon"  color="gray"/>
     </main>

    @elseif($view == 'settings')
        <main class="bg-white mt-5 rounded-md h-[fit] lg:w-[700px] flex flex-start flex-col .container px-2">
            <header class="flex gap-2 .text-gray-600 text-sky-500 font-semibold items-center py-4 px-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-settings"><path d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z"/><circle cx="12" cy="12" r="3"/></svg>
                <h2 class="text-xl">Settings</h2>
            </header>
            <hr>
    </main>
    @elseif($view == 'statistics')
          <main class="bg-white mt-5 rounded-md h-[fit] lg:w-[700px] flex flex-start flex-col .container px-2">
        <header class="flex gap-2 .text-gray-600 text-sky-500 font-semibold items-center py-4 px-4">
           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-area-chart"><path d="M3 3v18h18"/><path d="M7 12v5h12V8l-5 5-4-4Z"/></svg>
            <h2 class="text-xl">Statistics</h2>
        </header>
        <hr>
      <livewire:collection-display color="yellow" type="ongoing" :items="$ongoing" :svg="$ongoingIcon">
      </livewire:collection-display>
      <livewire:collection-display color="green" type="completed" :items="$completed" :svg="$completedIcon" color="yellow" />
      <livewire:collection-display color="gray" type="paused" :items="$paused" :svg="$pausedIcon"  color="gray"/>
    </main>
    @endif

  
</div>
