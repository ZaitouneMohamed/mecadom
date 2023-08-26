<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <table class="table-auto">
        <thead>
            <tr>
                <th>#</th>
                <th>name</th>
                <th>email</th>
            </tr>
        </thead>
        <tbody>
            @foreach (\App\Models\User::latest()->get() as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->first_name }} {{ $item->last_name }}</td>
                    <td>{{$item->email}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <main class="flex items-center justify-center min-h-screen">
        <h1 class="text-5xl">Profile {{ auth()->user()->first_name }} {{ auth()->user()->last_name }}</h1>
        <a href="{{ route('logout') }}">Log Out</a><br><br>
    </main>
</body>

</html>
