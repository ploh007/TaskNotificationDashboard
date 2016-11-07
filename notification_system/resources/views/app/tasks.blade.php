@foreach ($tasks as $task)
    <tr>
        <!-- Task Name -->
        <td>{{ $task->id }}</td>'
        <td>{{ $task->name }}</td>
        <td>{{ $task->group }}</td>
        <td>{{ $task->dueDate }}</td>
        <td>{{ $task->notes }}</td>
    </tr>
@endforeach