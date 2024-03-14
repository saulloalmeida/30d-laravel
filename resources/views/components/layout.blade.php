<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Page</title>
</head>
<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <nav>
        <x-nav-link href="/" label="Home" />
        <x-nav-link href="/about" label="About" />
        <x-nav-link href="/contact" label="Contact" />
    </nav>

    {{ $slot }}
</body>
</html>
