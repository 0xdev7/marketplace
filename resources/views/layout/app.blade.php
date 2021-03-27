<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Marketplace</title>

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets/favicon/site.webmanifest') }}">

    <link href="{{ asset('assets/frontend/css/bootstrap_dark.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/frontend/css/style.css') }}" rel="stylesheet" type="text/css">

    <script src="https://kit.fontawesome.com/1bc56f82e9.js" crossorigin="anonymous"></script>
</head>

<body>
    @yield('content')
</body>

</html>
