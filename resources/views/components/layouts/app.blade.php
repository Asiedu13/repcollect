<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
{{--        TODO: add the open graph tags here--}}
        <title>{{ $title ?? 'RepCollect' }}</title>
    </head>
    <body>
        <livewire:ui.nav />
         <main>
             <x-ui.container>
                {{$slot}}
             </x-ui.container>
         </main>
        <livewire:footer />
    </body>
</html>
