<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phormally</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Sofia+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap');
    </style>
    @vite('resources/css/app.css')
    @livewireStyles
</head>

<body class="bg-amber-50">
    @yield('content')
    @livewireScripts
</body>

</html>
