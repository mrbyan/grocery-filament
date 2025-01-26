<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="max-w-sm mx-auto border box-content min-h-screen font-poppins bg-slate-50/50 relative">
        {{ $slot }}
    </div>
</body>

</html>
