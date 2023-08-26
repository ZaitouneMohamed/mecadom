<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <main class="flex items-center justify-center min-h-screen">
        <h1 class="text-5xl">Profile</h1>
        <h1 class="text-5xl">hello mr : {{ auth()->user()->first_name }} {{ auth()->user()->last_name }} </h1>
        <a href="{{ route('logout') }}">Log Out</a>
    </main>
</body>

</html>
