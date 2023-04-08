<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('custom.css') }}" rel="stylesheet">
    <title>Modul 7!</title>
</head>

<body>
    @auth
    <div class="row justify-content-end" style="margin-top:2%">
        <div class="col-3">
            {{ Auth::user()->name }}
            <a href="/logout" class="btn btn-warning">Logout</a>
        </div>
    </div>
    @endauth
    <section class="bg-white pt-10 py-10">
        <div class="container px-5">
            <div class="text-center mb-5">
                <h2>@yield('title')</h2>
                @auth
                    <a class="btn btn-teal mt-4" class="btn btn-primary" href="/products/create">Click to add data</a>
                @endauth
            </div>
            <div class="row gx-5 z-1">
                @if(session('msg'))
                    <span class="alert alert-success mb-2">{{ session('msg') }}</span>
                @endif
                @if(session('error'))
                    <span class="alert alert-danger mb-2">{{ session('error') }}</span>
                @endif

                @yield('content')
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>