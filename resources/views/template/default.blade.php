<!DOCTYPE html>
<html>
    <head>
        <title>HTML - @yield('title') </title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@100..900&display=swap" rel="stylesheet">
        <style>
            body{
                 font-family: "Noto Sans Thai", sans-serif;
            }
        </style>
        @stack('styles')
    </head>
    <body>
       <div class='container mt-4'>
            @yield('content')
       </div>
       @stack('scripts')
    </body>


</html>
