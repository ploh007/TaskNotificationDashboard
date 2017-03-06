<!--===========================================
=            Current Tasks Section            =
============================================-->
<h2 class="sub-header">Tasks To Complete</h2>
<div class="table table-condensed table-responsive">
    <table class="table table-bordered table-hover table-striped">
        <thead>
            <tr>
                <th>Task #</th>
                <th>Task Name</th>
                <th>Category</th>
                <th>Due Date</th>
                <th>Notes</th>
                <th>Status</th>
                <th>Controls</th>
                <!-- <th>Task Status</th> -->
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task) @if ($task->status === "Not Completed")
            <tr>
                <!-- Task Name -->
                <td id="task-id">{{ $task->id }}</td>
                <td>{{ $task->name }}</td>
                <td>{{ $task->group }}</td>
                <td>{{ $task->dueDate }}</td>
                <td>{{ $task->notes }}</td>
                <td>{{ $task->status }}</td>
                <td>
                    <button class="btn btn-xs btn-default complete-task"><span class="glyphicon glyphicon-ok-sign"></span> Completed </button>
                    <button class="btn btn-xs btn-default uncomplete-task"><span class="glyphicon glyphicon glyphicon-remove-sign"></span> Un-Complete </button>
                    <button class="btn btn-xs btn-default delete-task"><span class="glyphicon glyphicon-minus-sign"></span> Remove </button>
                </td>
            </tr>
            @endif @endforeach
        </tbody>
    </table>
</div>
<!--====  End of Current Tasks Section  ====-->
<!--=================================================
=            Past Completed Tasks Section            =
==================================================-->
<h2 class="sub-header">Past Completed Tasks</h2>
<div class="table table-condensed table-responsive ">
    <table class="table table-bordered table-hover table-striped">
        <thead>
            <tr>
                <th>Task #</th>
                <th>Task Name</th>
                <th>Category</th>
                <th>Due Date</th>
                <th>Notes</th>
                <th>Status</th>
                <th>Controls</th>
                <!-- <th>Task Status</th> -->
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task) @if ($task->status === "Completed")
            <tr>
                <!-- Task Name -->
                <td id="task-id">{{ $task->id }}</td>
                <td>{{ $task->name }}</td>
                <td>{{ $task->group }}</td>
                <td>{{ $task->dueDate }}</td>
                <td>{{ $task->notes }}</td>
                <td>{{ $task->status }}</td>
                <td>
                    <button class="btn btn-xs btn-default complete-task"><span class="glyphicon glyphicon-ok-sign"></span> Completed </button>
                    <button class="btn btn-xs btn-default uncomplete-task"><span class="glyphicon glyphicon glyphicon-remove-sign"></span> Un-Complete </button>
                    <button class="btn btn-xs btn-default delete-task"><span class="glyphicon glyphicon-minus-sign"></span> Remove </button>
                </td>
            </tr>
            @endif @endforeach
        </tbody>
    </table>
</div>
<!--====  End of Past Completed Tasks Section  ====-->
<!--====================================
=            Script Content            =
=====================================-->
<script>

var getTaskId = function (item){
    console.log("Fetched item with the following ID:" + parseInt($(item).closest("tr").find('#task-id').text()));
    
    return parseInt($(item).closest("tr").find('#task-id').text());
}

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

    // Conduct delete request on HTTP Post route
    // Parse the parent node element and get the task id to delete
    var taskId = getTaskId(this);

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
        },
        error: function(data, responseText) {
            console.log(data.responseJSON);
            console.log(responseText);
        }
    });
});

$(".complete-task").on('click', function(e) {

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

    // Conduct delete request on HTTP Post route
    // Parse the parent node element and get the task id
    var taskId = getTaskId(this);

    console.log("Completed Task with task id:" + taskId);

    var formData = {
        taskid: taskId,
    }

    console.log(formData);

    $.ajax({
        url: './complete-tasks',
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

                console.log("Successfully Completed Task!");

            } else if (!data) {
                // Notify user of failed added task
            } else {
                // Notify user of unspecified added task
            }

            // Refresh table task data
            viewTables();
        },
        error: function(data, responseText) {
            console.log(data.responseJSON);
            console.log(responseText);
        }
    });
});

$(".uncomplete-task").on('click', function(e) {

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

    // Conduct delete request on HTTP Post route
    // Parse the parent node element and get the task id
    var taskId = getTaskId(this);

    console.log("Completed Task with task id:" + taskId);

    var formData = {
        taskid: taskId,
    }

    console.log(formData);

    $.ajax({
        url: './uncomplete-tasks',
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

                console.log("Successfully UnCompleted Task!");

            } else if (!data) {
                // Notify user of failed added task
            } else {
                // Notify user of unspecified added task
            }

            // Refresh table task data
            viewTables();
        },
        error: function(data, responseText) {
            console.log(data.responseJSON);
            console.log(responseText);
        }
    });
});
</script>
<!--====  End of Script Content  ====-->
