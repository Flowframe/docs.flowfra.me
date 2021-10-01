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

    <x-seo::meta />

    @googlefonts

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
