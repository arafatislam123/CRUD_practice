<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    <div class="container">

        <div class="flex justify-between my-5">
            <h1 class="text-red-300 text-xl">Home</h1>
            <a href="/create" class="bg-green-600 text-white rounded py-2 px-4">Add New Post</a>

        </div>
        <div id="app">

            @include('flash-message')



            @yield('content')

        </div>

    </div>

</body>

</html>