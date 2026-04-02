@props([
    'title' => 'Laracasts'
])
<!DOCTYPE html>
<html lang="en" data-theme="dracula">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <x-nav />
    <main class="max-w-2xl mx-auto mt-10">
        {{ $slot }}
    </main>
</body>

</html>