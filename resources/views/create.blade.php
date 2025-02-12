<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="container mx-auto p-5">

        <div class="flex justify-between my-5">
            <h1 class="text-red-300 text-xl">Create</h1>
            <a href="{{ url('/') }}" class="bg-green-500 text-white rounded py-2 px-4">Back to Home</a>
        </div>

        <div>
            <form action="{{route('store')}}" method="POST">
                <div class="flex flex-col gap-5">
                    @csrf
                    @if ($errors->any())
                    <div class="bg-red-500 text-white p-4 rounded">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <input type="text" name="name" required class="border p-2 w-full mb-2" placeholder="Enter Name">
                    <input type="text" name="description" required class="border p-2 w-full mb-2" placeholder="Enter Description">
                    <input type="file" name="image" class="border p-2 w-full mb-2">

                    <div>
                        <input type="submit" value="Submit" class="bg-green-500 text-white rounded py-2 px-4 ">

                    </div>


                </div>
            </form>
        </div>

    </div>
</body>

</html>