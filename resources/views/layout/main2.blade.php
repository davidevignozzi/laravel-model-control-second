<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('page_title') </title>
    @yield('fontawesome')
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    
</head>

    <body>
        {{-- header --}}
        
        {{-- header --}}
            <main>
                @yield('content')
            </main>
        {{-- footer --}}
       
        {{-- footer --}}
    </body>

    @yield('js')
    
</html>