// Listener for task form submission

close = document.getElementById("close");
close.addEventListener('click', function() {
    note = document.getElementById("taskCreationStatus");
    note.style.display = 'none';
}, false);

viewTables();

// Event Listener to Button to refresh tables view
$( "#view-tasks" ).on( "click", function() {
    viewTables();
});

$("#add-task-budget").on('click', function(e) {

    e.preventDefault();

    var budgetVal = parseInt($("#tasks-budget-metrics").html()) + 1;

        // Allow only a maximum of 24 for budget value parameter
    if (budgetVal >= 24){
        budgetVal = 24;
    } 


    $("#tasks-budget-metrics").html(budgetVal);

 });

$("#sub-task-budget").on('click', function(e) {

    e.preventDefault();

    var budgetVal = parseInt($("#tasks-budget-metrics").html()) - 1;

    // Allow only a minimum of 0 for budget value parameter
    if (budgetVal <= 0){
        budgetVal = 0;
    } 

    $("#tasks-budget-metrics").html(budgetVal);

 });


$(document).ajaxStart(function() {
    $('#loading').fadeIn("slow");
});

$(document).ajaxStop(function() {
    $('#loading').fadeOut("slow");
});

//  Create Task AJAX Query
$('#createTaskForm').submit(function(e) {

    // Hide Modal
    $('#taskModal').modal('toggle');

    e.preventDefault();

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // Javascript sanity check
    var taskName = $('#taskName').val();
    var groupDD = $('#taskGroup')[0].options[$('#taskGroup')[0].selectedIndex].value;
    var taskDate = $('#taskDate').val(); // format -> yyyy-dd-mm
    var taskTime = $('#taskTime').val(); // format -- 24 hour (hh:mm)
    var taskNotes = $('#taskNotes').val();
    var taskPriority = (($('#taskPriority:checked').length > 0) ? 1 : 0); // Conversion of Boolean to Integer
    var taskDateTime = taskDate + " " + taskTime + ':00'; // Concatenation of Date and Time to format for SQL

    var formData = {
        name: taskName,
        group: groupDD,
        dueDate: taskDateTime,
        notes: taskNotes,
        priority: taskPriority
    }

    console.log(formData);

    $.ajax({
        url: './create-tasks',
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
        }, error: function(data, responseText) {
            console.log(data.responseJSON);
            console.log(responseText);
        }
    });
});


//  Create Groups AJAX Query
$('#groups-form').submit(function(e) {

    // Hide Modal
    $('#group-modal').modal('toggle');

    e.preventDefault();

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // Javascript sanity check
    var groupname_in = $('#group-name').val();
    var groupcolor_in = $('#group-color').val();

    var values = new Array();

    $.each($("input[name='groupsToDel']:checked").closest('tr').find('td[data-group-id]'),
       function () {
            values.push($(this).text());
       }
    );

    var formData = {
        groupname: groupname_in,
        groupcolor: groupcolor_in,
        groupsToDel: values
    }

    console.log(formData);

    $.ajax({
        url: './manage-groups',
        type: 'POST',
        dataType: 'json',
        data: formData,
        dataType: 'json',
        success: function(data) {
            console.log(data);
        }, error: function(data, responseText) {
            console.log(data.responseJSON);
            console.log(responseText);
        }
    });
});


//  Displays the tasks in a tabular format
function viewTables() {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })

    $.ajax({
        url: './view-tasks',
        type: 'POST',
        dataType: 'json',
        success: function(data) {

            // Clear table data and insert formatted data
            $('#task-data').html('');
            $('#task-data').html(data);

            // Post Processing on Formatting of dates content
            // var monthNames = [
            //   "January", "February", "March",
            //   "April", "May", "June", "July",
            //   "August", "September", "October",
            //   "November", "December"
            // ];

            // $("#task-data td:nth-child(3)").each(function() {
            //     var category = $(this).text();
            //     $(this).text($('#taskGroup option[value="'+ category +'"]').text());
            // });

            // var currentDate = new Date();

            // $("#current-tasks td:nth-child(4)").each(function() {
            //     var date = new Date($(this).text());

            //     console.log(date);
            //     // Post processing of overdue items
            //     if(currentDate > date){
            //         $(this).addClass("danger");
            //     } 
            // });

            // $("#task-data td:nth-child(4)").each(function() {
            //     var date = new Date($(this).text());
            //     var day = date.getDate();
            //     var monthIndex = date.getMonth();
            //     var year = date.getFullYear();
            //     $(this).text(day + " " + monthNames[monthIndex] + " " + year + " - " + date.toLocaleTimeString())
            // });



            // Get Metric of Tasks
            var currentTasksCount = $('#current-tasks tr').length;
            var completedTasksCount = $('#completed-tasks tr').length;

            // Update Metrics
            $('#current-tasks-metric').text(currentTasksCount);
            $('#completed-tasks-metric').text(completedTasksCount);


        },
    });

}


