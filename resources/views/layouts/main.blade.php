<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- <link href="https://fonts.googleapis.com/css?family=Roboto|Open+Sans:200,300,400,700,800,900&amp;subset=latin" rel="preload" as="font"> -->
    <title>{{ env('APP_NAME')  }} @yield('title')</title>
</head>
<body class="bg-bodyColor dark:bg-gray-900">
    @yield('content')
</body>
</html>