<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') :: Content Portal</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    @stack('styles')
</head>

<body class="antialiased min-vh-100">
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="{{url('/')}}">Content Portal</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('/')}}">Home</a>
                </li>
            </ul>
            <div class="navbar-nav">
            @if (Auth::check())
                <li class="nav-item">
                    <a href="{{url('/dashboard')}}" class="nav-link">Dashboard</a>
                </li>
            @else
                <li class="nav-item">
                    <a href="{{url('/login')}}" class="nav-link">Login</a>
                </li>
            @endif
            </div>
        </div>
    </nav>

    @yield('content')

    <footer class="container">
        <p>&copy; 2020 mora-group</p>
    </footer>
    @stack('scripts')
</body>

</html>
