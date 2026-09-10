<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Felicità Staff')</title>
    <style>
        * { box-sizing: border-box; }
        body {
            font-family: Arial, sans-serif;
            background: #1c1c1c;
            color: #fff;
            margin: 0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 24px 16px;
        }
        .card {
            background: #2a2a2a;
            border-radius: 16px;
            padding: 24px;
            width: 100%;
            max-width: 420px;
        }
        h1 { color: #bfa46b; font-size: 1.3rem; margin: 0 0 16px; text-align: center; }
        label { display: block; margin: 12px 0 4px; font-size: 0.9rem; }
        input[type=email], input[type=password], input[type=text] {
            width: 100%; padding: 10px; border-radius: 8px; border: 1px solid #555;
            background: #1c1c1c; color: #fff; font-size: 1rem;
        }
        button {
            width: 100%; margin-top: 16px; padding: 12px; border: none; border-radius: 8px;
            background: #bfa46b; color: #1c1c1c; font-weight: bold; font-size: 1rem; cursor: pointer;
        }
        .error { color: #ff6b6b; font-size: 0.85rem; margin-top: 8px; }
        a.logout { display: block; text-align: center; margin-top: 16px; color: #999; font-size: 0.85rem; }
    </style>
</head>
<body>
    @yield('content')
</body>
</html>
