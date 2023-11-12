<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <script src="js/app.js"></script>
    @yield('heads')
</head>


<body class="min-h-screen flex flex-col ">
    <div class="fixed top-0 z-50 w-full ">

        @include('layouts.header')
    </div>
    <main class="flex flex-col w-full flex-1">
        @include('layouts.sidebar')
        @yield('content')
    </main>
    <div class="z-50">
        @include('layouts.footer')
    </div>
    @yield('scripts')
</body>

</html>
