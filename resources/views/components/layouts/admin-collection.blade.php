<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
        <title>{{ $title ?? 'RepCollect Collections' }}</title>
    </head>
    <body>
        <livewire:ui.nav />
         <x-ui.container>
            {{$slot}}
         </x-ui.container>
        <livewire:footer />
    </body>
</html>
