<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to Muudal</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Styles -->
    <style>
        body {
            font-family: 'figtree', sans-serif;
            background-color: #f3f4f6;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #ffffff;
            padding: 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar-brand {
            font-size: 1.5rem;
            font-weight: 600;
            color: #f98012;
        }

        .navbar-links {
            display: flex;
            gap: 1rem;
        }

        .navbar-links a {
            padding: 0.5rem 0.8rem;
            border-radius: 5px;
            text-decoration: none;
            color: #ffffff;
            background-color: #f98012;
            transition: background-color 0.3s ease;
        }

        .navbar-links a:hover {
            background-color: #222222;
        }

        .content {
            text-align: center;
            margin-top: 3rem;
        }

        .footer {
            background-color: #000000;
            color: #ffffff;
            padding: 1rem;
            text-align: center;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>

<body>
    <div class="navbar">
        <div class="navbar-brand">Muudal</div>
        <nav class="navbar-links">
            @if (Route::has('login'))
                <div>
                    @auth
                        <a href="{{ url('/dashboard') }}">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </nav>
    </div>
    <div class="content">
        <h1>Welcome to the <strong style="color:#f98012">Muudal</strong> platform 2023/2024</h1>
    </div>
    <div class="footer">
        @Gestão de Identidade Digital
    </div>
</body>

</html>
