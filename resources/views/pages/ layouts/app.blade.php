<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title-block')</title>
        <link href="/css/app.css" rel="stylesheet" >
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        @include('inc.header')
        @if(Request::is('/'))
            @include('inc.hero')
        @endif

    <div class="container mt-5">
        @include('inc.messages')
        <div class="row">
            <div class="col-8">
                @yield('content')
            </div>
                <aside class="col-4">
                    @include('inc.aside')
                </aside>
        </div>
    </div>


        @include('inc.footer')
    </body>
</html>
