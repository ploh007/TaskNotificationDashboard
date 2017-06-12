/*===========================================
=            Get TaskID Function            =
=============================================
Function to obtain the task id through jquery
of the table cell data.
===========================================*/
var getTaskId = function (item){
    console.log("Fetched item with the following ID:" + parseInt($(item).closest("tr").find('#task-id').text()));
    return parseInt($(item).closest("tr").find('#task-id').text());
}

/*===========================================
=            Delete Task AJAX               =
===========================================*/
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

/*==========================================
=            Complete Task AJAX            =
==========================================*/
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