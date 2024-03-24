<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <title>Home</title>
</head>
<body class="bg-gray-100 p-8">

  <div class="max-w-screen-md mx-auto">
    <div class="mb-5">

      <a class="bg-green-500 hover:bg-green-700 text-white py-2 px-4 rounded" href="{{url('tasks/create')}}">Create Task</a>
      <form action="{{ route('tasks.search') }}" method="GET" class="inline-block mr-2">
        <input type="text" name="search" required class="py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="search.."/>
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded">Search</button>
    </form>
    </div>

    <table class="min-w-full bg-white border border-gray-300">
      <thead>
        <tr>
          <th class="py-2 px-4 border-b">Task</th>
          <th class="py-2 px-4 border-b">Description</th>
          <th class="py-2 px-4 border-b">Created At</th>
        </tr>
      </thead>
      <tbody>
        @if($tasks->isEmpty())
        <tr>
          <td class="text-center py-4" colspan="4">No tasks found currently.</td>
        </tr>
        @else
          @foreach ($tasks as $task)

            <tr class="text-center">
              <td class="py-2 px-4 border-b">{{$task->title}}</td>
              <td class="py-2 px-4 border-b">{{$task->description}}</td>
              <td class="py-2 px-4 border-b">{{$task->created_at}}</td>
              <td class="py-2 px-4 border-b"><a class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded" href="{{ route('tasks.edit', ['task' => $task]) }}">Edit</a>
              <form action="{{ route('tasks.destroy', ['task' => $task]) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')

                    <button class="bg-red-500 hover:bg-red-700 text-white py-2 px-4 rounded" type="submit">Delete</button>
                </form>
            </td>
            </tr>
            @endforeach
        @endif
      </tbody>
    </table>
  </div>

</body>
</html>
