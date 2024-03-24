<!-- resources/views/tasks/show.blade.php -->


    <h1>{{ $task->title }}</h1>
    <p>{{ $task->description }}</p>
    <a href="{{ url('/tasks') }}">Back to Tasks</a>
