@props([
    'title' => 'Laracasts'
])
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <style>
         nav {
            background: #eee;
            padding: 10px;
        }
         nav a {
            margin-right: 10px;
        }
        .max-w-400 {
            max-width: 400px;

 

         margin: auto;
        }
           .card {
            background:red; 
            padding: 20px; 
            border-radius: 5px;
            text-align: center;
        }
    </style>
</head>

<body>
    <nav>
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/contact">Contact</a>
    </nav>
    <main>
        {{ $slot }}
    </main>
</body>

</html>