<!doctype html>
<html lang="en" class="h-full">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">

    <title>Timematch - Your timezone buddy</title>

    <meta property="og:title" content="Timematch - Your timezone buddy">
    <meta property="og:description" content="Hope i can help you with timezone chaos">

    <meta name="twitter:title" content="Timematch - Your timezone buddy">
    <meta name="twitter:description" content="Hope i can help you with timezone chaos">
</head>
<body class="bg-gray-100 h-full">

<div class="flex flex-col h-full">
    @yield('content')
    <footer class="mb-auto">
        <a href="https://github.com/redbeed/timemat.ch" class="flex items-center text-gray-600 justify-center">
            <i class="fab fa-github fa-2x mr-3"></i> Found a Bug?
        </a>
        <a href="https://redbeed.com/imprint" target="_blank"
           class="flex items-center mt-7 text-xs text-gray-600 justify-center">
            Made with <i class="far fa-heart mx-2 text-red-500"></i> | Impressum
        </a>
    </footer>
</div>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
