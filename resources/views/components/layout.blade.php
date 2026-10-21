@props([
    'title' => 'Laracast' // prop with default value
])

<!DOCTYPE html>
<html lang="en" data-theme="dracula">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $title }}</title>
        <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
        <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <x-nav />
        <main class="mt-4 px-6 max-w-4xl mx-auto">
            {{ $slot }}
        </main>
    </body>
</html>
