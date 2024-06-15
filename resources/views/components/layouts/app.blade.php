<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
        <title>{{ $title ?? 'Page Title' }}</title>
    </head>
    <body class="bg-gray-100 mx-[100px] min-h-full">
     <header class="flex justify-between py-[10px] h-[100px]">
        <nav class="flex justify-center items-center">
            {{-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-align-justify"><line x1="3" x2="21" y1="6" y2="6"/><line x1="3" x2="21" y1="12" y2="12"/><line x1="3" x2="21" y1="18" y2="18"/></svg> --}}
             <a href="<?php echo route('home') ?>">
                <h2 class="text-xl font-bold">RepCollect</h2>
            </a>
        </nav>
        @guest
        <a href="<?php echo route('home') ?>" class='flex gap-2 justify-center items-center'>
            <h2 class="text-xl font-bold">RepCollect</h2>
        </a>
        @endguest
        @auth
        <div class='flex gap-2 justify-center items-center'>
            <a href="<?php echo route('home') ?>">
                {{-- <h2 class="text-xl font-bold">RepCollect</h2> --}}
            </a>
            
            <section class='flex .flex-col .justify-center items-center .mt-[80px] gap-4 px-4 bg-white shadow-md rounded-md'>
                <p class="bg-white py-1 px-1 rounded-md font-semibold text-gray-600 flex justify-center items-center gap-4 .shadow-md"> 
                    <svg viewBox="0 0 36 36" fill="none" role="img" xmlns="http://www.w3.org/2000/svg" width="40" height="40"><mask id=":r1d:" maskUnits="userSpaceOnUse" x="0" y="0" width="36" height="36"><rect width="36" height="36" rx="72" fill="#FFFFFF"></rect></mask><g mask="url(#:r1d:)"><rect width="36" height="36" fill="#6cbdb5"></rect><rect x="0" y="0" width="36" height="36" transform="translate(5 -1) rotate(315 18 18) scale(1)" fill="#e3dfba" rx="6"></rect><g transform="translate(3 -6) rotate(5 18 18)"><path d="M15 19c2 1 4 1 6 0" stroke="#000000" fill="none" stroke-linecap="round"></path><rect x="14" y="14" width="1.5" height="2" rx="1" stroke="none" fill="#000000"></rect><rect x="20" y="14" width="1.5" height="2" rx="1" stroke="none" fill="#000000"></rect></g></g></svg>
                    <div class="flex flex-col w-fit text-sm text-gray-500">
                        <p class="font-bold">
                            {{$currentUser[0]->name ??  "Guest" }}
                        </p>
                        <p>
                            {{$currentUser[0]->email ??  "Guestemail@gmail.com" }}
                            </p>
                     
                    </div>
                    </p> 
                    <span class="relative flex h-3 w-3">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-sky-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-3 w-3 bg-sky-500"></span>
                    </span>
            </section>
        </div>
        @endauth
    </header>
        {{$slot}}
    </body>
</html>
