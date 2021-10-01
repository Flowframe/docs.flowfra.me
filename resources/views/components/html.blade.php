@props(['title' => false])

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta
        http-equiv="X-UA-Compatible"
        content="IE=edge"
    >

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>{{ $title ? "{$title} | Flowframe Docs" : 'Flowframe Docs' }}</title>

    <link
        rel="preconnect"
        href="https://fonts.googleapis.com"
    >

    <link
        rel="preconnect"
        href="https://fonts.gstatic.com"
        crossorigin
    >

    <link
        href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;500&family=Space+Grotesk:wght@700&display=swap"
        rel="stylesheet"
    >

    <link
        rel="stylesheet"
        href="{{ mix('css/app.css') }}"
    >

    <script
        src="{{ mix('js/app.js') }}"
        defer
    ></script>
</head>

<body class="min-h-screen font-sans antialiased">
    {{ $slot }}
</body>

</html>