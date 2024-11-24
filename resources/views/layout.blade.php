<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sertifikasi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        nav {
            background: #442222;
            padding: 10px;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
            padding: 5px 10px;
            background: #ABAD9A;
            border-radius: 5px;
        }

        nav a:hover {
            background: #BFA5A4;
        }

        main {
            padding: 20px;
            background: white;
            margin: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <nav>
        <a href="{{ route('categories.index') }}">Category</a>
        <a href="{{ route('books.index') }}">Book</a>
        <a href="{{ route('members.index') }}">Member</a>
        <a href="/relations">Relation</a>
    </nav>
    <main>
        @yield('content')
    </main>
</body>

</html>
