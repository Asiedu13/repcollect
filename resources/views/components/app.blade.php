<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{ $title ?? 'RepCollect'}} </title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 h-screen flex flex-col justify-center items-center md:mx-[50px]">
    {{$slot}}
</body>
</html>