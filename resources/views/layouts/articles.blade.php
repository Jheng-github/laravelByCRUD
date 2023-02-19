<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    @vite('resources/css/app.css')
    <title>board</title>
</head>
<body>
<main class = "m-4">
    @if (session()->has('notice'))
        <div class="bg-pink-300 px-3 py-2 rounded">
        {{ session()->get('notice')}}
        </div>
    @endif
    @yield('main')
</main>
<script src="{{asset('app/app.js')}}"></script>

</body>
</html>