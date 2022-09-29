<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @yield('title')
</head>
<body class="bg-green-200">
    <div class="flex flex-col container border  mx-auto w-4/5 h-screen my-10 bg-green-50">
        @yield('conteiner')
    </div>
</body>
</html>
