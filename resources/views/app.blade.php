<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    @vite('resources/css/app.css')

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    

<div id="app">
<example-component/>
</div>
<!-- <script src="{{ asset('js/app.js') }}"></script> -->



</body>
</html>