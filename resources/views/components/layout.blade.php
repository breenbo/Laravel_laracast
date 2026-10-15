@props([
    'title' => 'Laracast' // prop with default value
])

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $title }}</title>
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    </head>
    <body class="bg-neutral-700 p-6 max-w-xl mx-auto">

    {{ $slot }}

    </body>
</html>
