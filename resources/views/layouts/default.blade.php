<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- css --}}
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    {{-- font awesome --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <title>Midlands Bowls</title>
</head>
<body>


    @include('includes.header')
    
    <main>
        
        @yield('content')

    </main>
    

    <footer>

        @include('includes.footer')

    </footer>

    {{-- JS Scripts app.js includes bootstrap--}}
    <script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>