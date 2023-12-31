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
    @include('layouts.header')
    <main class="container px-2 md:px-10 lg:px-40 mx-auto flex flex-col mt-4 flex-1">
        @yield('content')
    </main>
    @include('layouts.footer')
    @yield('scripts')
</body>

</html>
