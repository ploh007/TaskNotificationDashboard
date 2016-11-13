@foreach ($tasks as $task)
    <tr>
        <!-- Task Name -->
        <td id="task-id">{{ $task->id }}</td>'
        <td>{{ $task->name }}</td>
        <td>{{ $task->group }}</td>
        <td>{{ $task->dueDate }}</td>
        <td>{{ $task->notes }}</td>
        <td><button class="btn btn-sm btn-danger delete-task"><span class="glyphicon glyphicon-minus-sign"></span> Delete Task</button></td>
    </tr>
@endforeach
<script>
$(".delete-task").on('click', function(e) {

    e.preventDefault();

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })

    $(document).ajaxStart(function() {
        $('#loading').fadeIn("slow");
    });

    $(document).ajaxStop(function() {
        $('#loading').fadeOut("slow");
    });

    // Javascript sanity check

    // Conduct delete request on HTTP Post route
    // Parse the parent node element and get the pair id
    var taskId = parseInt($(this).closest( "tr").find('#task-id').text());

    console.log("Deleting Task with task id:" + taskId);

    var formData = {
        taskid: taskId,
    }

    console.log(formData);


    $.ajax({
        url: './delete-tasks',
        type: 'POST',
        dataType: 'json',
        data: formData,
        dataType: 'json',
        success: function(data) {

            console.log(data);

            if (data) {
                // Notify user of successfully added task
                $('#taskCreationStatus').hide();
                $('#taskCreationStatus').show();

                console.log("Successfully Deleted Task!");

            } else if (!data) {
                // Notify user of failed added task
            } else {
                // Notify user of unspecified added task
            }

            // Refresh table task data
            viewTables();
        }, error: function(data, responseText) {
            console.log(data.responseJSON);
            console.log(responseText);
        }
    });
});
</script>