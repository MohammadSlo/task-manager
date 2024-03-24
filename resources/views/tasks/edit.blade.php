<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <title>edit</title>
</head>
<body class="bg-gray-100 p-8">

<div class="max-w-screen-md mx-auto text-center">

    <h1 class="font-bold mb-5">Edit Task</h1>
    <div class="flex flex-col w-full max-w-sm mx-auto border border-gray-300 rounded-md p-4">
    <form method="post" action="{{ url('/tasks', $task->id) }}" >
        @csrf
        @method('put')

        <label class="block mb-2 text-gray-700" for="title">Task Title</label>
        <input class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" type="text" id="title" name="title" value="{{ $task->title }}"  required>

        <label class="block mb-2 text-gray-700" for="description">Task Description</label>
        <textarea class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" type="text" id="description" name="description" rows="4" required>{{ $task->description }}</textarea>

        <button class="mt-4 w-full bg-blue-500 text-white rounded-md p-2 hover:bg-blue-700" type="submit">Save Changes</button>
    </form>
    <a href="{{ url('/tasks') }}" class="bg-red-500 hover:bg-red-700 text-white mt-5 py-2 px-4 rounded">Cancel</a>
    </div>

</div>

</body>
</html>
