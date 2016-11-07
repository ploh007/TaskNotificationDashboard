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

$('#createTask_form').submit(function(e) {

    // Hide Modal
    $('#myModal').modal('toggle');

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

function viewTables() {

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

    $.ajax({
        url: './view-tasks',
        type: 'POST',
        dataType: 'json',
        success: function(data) {
            $('#taskRowsData').html('');
            $('#taskRowsData').html(data);
        },
    });

}
