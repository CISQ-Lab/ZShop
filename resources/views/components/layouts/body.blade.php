@props(['title' => config('app.name')])

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="min-h-screen bg-accent-50 ">

    <div class="flex min-h-screen flex-col">

        <x-layouts.header />

        <main class="flex-1"> 
            {{ $slot }}
        </main>

        <x-layouts.footer />

    </div>


</body>

</html>
