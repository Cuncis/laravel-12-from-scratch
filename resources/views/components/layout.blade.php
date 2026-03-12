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
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-gray-900 text-white p-9">
    <main>
        {{ $slot }}
    </main>
</body>

</html>