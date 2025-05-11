<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
{{--        TODO: add the open graph tags here as well--}}
        @vite('resources/css/app.css')
        <title>{{ $title ?? 'RepCollect' }}</title>
    </head>
   <body class="text-secondary-foreground min-h-full">
    <livewire:ui.nav />
    <div class="flex flex-col gap-10 justify-between lg:flex-row lg:px-[100px]">
        <section class="flex flex-col transition-all p-4 lg:p-0">
            <h1 class="text-xl font-medium capitalize text-secondary-foreground text-center lg:text-2xl">Good day, {{$user[0]->name}}</h1>
           <x-icons.quote text="The art of money management lies in understanding your habits and making informed choices." by="RepCollect"/>

            <nav class="hidden p-4 rounded-md mt-20 border border-gray-400 .border-neutral text-neutral fixed bottom-24 z-40 group/menu lg:block lg:sticky lg:top-20 lg:w-[500px] lg:z-0">
                <header class="flex gap-2 items-center px-2 lg:mb-5 lg:px-0 ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-menu"><line x1="4" x2="20" y1="12" y2="12"/><line x1="4" x2="20" y1="6" y2="6"/><line x1="4" x2="20" y1="18" y2="18"/></svg>
                    <h2 class="text-lg lg:text-lg lg:flex"> Menu</h2>
                </header>

                <hr class="hidden lg:block">

                <ul class="hidden group-hover/menu:block absolute bottom-20 left-0 w-[300px] .bg-primary p-2 shadow-md lg:p-0 lg:shadow-none lg:relative lg:bottom-0 lg:left-0 lg:block lg:w-full">
                    <a href="{{route('dashboard.profile')}}" wire:navigate>
                        <li class="flex gap-2 items-center h-[50px] cursor-pointer hover:border-2 hover:border-secondary hover:rounded-md hover:px-4 transition-all {{$view == 'profile' ? 'bg-secondary text-brand-blue px-4 rounded-md' : 'bg-transparent text-neutral' }} "   wire:click="handleMenuClick('profile')">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                            <p class="text-sm">Profile</p>
                        </li>
                    </a>

                    <a href="{{route('dashboard')}}" wire:navigate>
                        <li class="flex gap-2 items-center h-[50px] cursor-pointer hover:border-2 hover:border-slate-600 hover:rounded-md hover:px-4 transition-all {{$view == 'collections' ? 'bg-secondary text-primary px-4 rounded-md' : 'bg-transparent text-neutral' }} "  wire:click="handleMenuClick('collections')">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-badge-dollar-sign"><path d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z"/><path d="M16 8h-6a2 2 0 1 0 0 4h4a2 2 0 1 1 0 4H8"/><path d="M12 18V6"/></svg>
                            <p class="text-sm">Collections</p>
                        </li>
                    </a>
                    <a href="{{route('dashboard.settings')}}" wire:navigate>
                        <li class="flex gap-2 items-center h-[50px] cursor-pointer hover:border-2 hover:border-slate-600 hover:rounded-md hover:px-4 transition-all {{$view == 'settings' ? 'bg-secondary text-primary px-4 rounded-md' : 'bg-transparent text-neutral' }} "  wire:click="handleMenuClick('settings')">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-settings"><path d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z"/><circle cx="12" cy="12" r="3"/></svg>
                            <p class="text-sm">Settings</p>
                        </li>
                    </a>

                    <a href="{{route('dashboard.faq')}}" wire:navigate>
                        <li class="flex gap-2 items-center h-[50px] cursor-pointer hover:border-2 hover:border-slate-600 hover:rounded-md hover:px-4 transition-all {{$view == 'faq' ? 'bg-secondary text-primary px-4 rounded-md' : 'bg-transparent text-neutral' }} "   wire:click="handleMenuClick('faq')">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-message-circle-question"><path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><path d="M12 17h.01"/></svg>
                            <p class="text-sm">Frequently Asked Questions</p>
                        </li>
                    </a>
                </ul>
            </nav>
        </section>

        <x-ui.container>
            <div class="mt-20">
            {{ $slot }}
            </div>
        </x-ui.container>
        </div>
        <livewire:footer />
    </body>
</html>
