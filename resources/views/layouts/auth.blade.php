<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phormally</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>

<body>
    @yield('content')
    @livewireScripts
</body>

</html>
