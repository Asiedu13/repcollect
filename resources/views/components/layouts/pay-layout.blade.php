<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
{{--        TODO: add the open graph tags here as well--}}
        @vite('resources/css/app.css')
        <title>{{ $title ?? 'RepCollect' }}</title>
    </head>
    <body>
    <livewire:ui.nav />
        <x-ui.container>
            <div class="min-h-full flex justify-center items-center m-2">
                {{$slot}}
            </div>
        </x-ui.container>
    <livewire:footer />
    </body>
</html>
