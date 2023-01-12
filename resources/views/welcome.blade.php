<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Styles -->
    <style>

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            max-width: 1200px;
            margin: 0 auto;
        }

        .container {
            display: flex;
            justify-content: center;
            font-size: 3rem;
            color: greenyellow;
        }

        ul {
            list-style: none;
            display: flex;
            justify-content: center;
        }

        li {
            padding: 0 .5rem;
        }

        a {
            text-decoration: none;
            color: blue;
            font-size: 1.5rem;
        }

        a:hover {
            color: blueviolet;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Hello world</h1>
    </div>
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="aboutUs">About Us</a></li>
        </ul>
    </nav>
</body>
</html>
