<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel P9')</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f5f7fb;
            color: #1f2937;
        }

        nav {
            background: #111827;
            padding: 16px 24px;
        }

        nav .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 24px;
        }

        nav a {
            color: #ffffff;
            text-decoration: none;
            margin-right: 16px;
        }

        nav a:last-child {
            margin-right: 0;
        }

        .brand {
            font-weight: 700;
            margin-right: 24px;
        }

        main {
            max-width: 960px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .card {
            background: #ffffff;
            border-radius: 16px;
            padding: 28px;
            box-shadow: 0 10px 30px rgba(17, 24, 39, 0.08);
            margin-bottom: 24px;
        }

        h1, h2 {
            margin-top: 0;
        }

        .list {
            padding-left: 20px;
        }

        .badge {
            display: inline-block;
            background: #eef2ff;
            color: #3730a3;
            padding: 7px 10px;
            border-radius: 999px;
            margin: 4px 4px 0 0;
            font-size: 14px;
        }

        .muted {
            color: #6b7280;
        }
    </style>
</head>
<body>
    <nav>
        <div class="container">
            <div>
                <a class="brand" href="{{ route('home') }}">Laravel P9</a>
                <a href="{{ route('home') }}">Home</a>
                <a href="{{ route('about') }}">About</a>
                <a href="{{ route('contact') }}">Contact</a>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>
</body>
</html>
