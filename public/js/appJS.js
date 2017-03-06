// Listener for task form submission

close = document.getElementById("close");
close.addEventListener('click', function() {
    note = document.getElementById("taskCreationStatus");
    note.style.display = 'none';
}, false);

viewTables();

$( "#view-tasks" ).on( "click", function() {
    viewTables();
});


$(document).ajaxStart(function() {
    $('#loading').fadeIn("slow");
    console.log("AJAX START");
});

$(document).ajaxStop(function() {
    $('#loading').fadeOut("slow");
    console.log("AJAX STOP");
});

//  Create Task AJAX Query
$('#createTask_form').submit(function(e) {

    // Hide Modal
    $('#myModal').modal('toggle');

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
    var taskDateTime = taskDate + " " + taskTime + ':00'; // Concatenation of Date and Time to format for SQL

    var formData = {
        name: taskName,
        group: groupDD,
        dueDate: taskDateTime,
        notes: taskNotes
    }

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

            var monthNames = [
              "January", "February", "March",
              "April", "May", "June", "July",
              "August", "September", "October",
              "November", "December"
            ];

            $("#taskRowsData td:nth-child(3)").each(function() {
                var category = $(this).text();
                $(this).text($('#taskGroup option[value="'+ category +'"]').text());
               
            });

            $("#taskRowsData td:nth-child(4)").each(function() {
                var date = new Date($(this).text());
                var day = date.getDate();
                var monthIndex = date.getMonth();
                var year = date.getFullYear();
                $(this).text(day + " " + monthNames[monthIndex] + " " + year + " " + date.toLocaleTimeString())
            });
        },
    });

}


