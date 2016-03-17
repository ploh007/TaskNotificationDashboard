// Listener for task form submission

close = document.getElementById("close");
close.addEventListener('click', function() {
    note = document.getElementById("taskCreationStatus");
    note.style.display = 'none';
}, false);

viewTables();

$('#createTask_form').submit(function(e) {

    e.preventDefault();

    // Javascript sanity check
    var taskName = $('#taskName').val();
    var groupDD = $('#taskGroup')[0].options[$('#taskGroup')[0].selectedIndex].value; 
    var taskDate = $('#taskDate').val(); // format -> yyyy-dd-mm
    var taskTime = $('#taskTime').val(); // format -- 24 hour (hh:mm)
    var taskNotes = $('#taskNotes').val();
    var taskDateTime = taskDate + " " + taskTime; // Concatenation of Date and Time to format for SQL

    $.ajax({
        url: 'createTask.php', 
        type: 'POST',
        dataType: 'json',
        data: {
            taskName: taskName, 
            groupID: groupDD, 
            dueDateTime: taskDateTime + ':00',
            dueDate: taskDate,
            notes: taskNotes
        },
        success: function(data) {
            if(data){
                // Notify user of successfully added task
                $('#taskCreationStatus').hide();
                $('#taskCreationStatus').show();

                
            } else if(!data){
                // Notify user of failed added task
            } else {
                // Notify user of unspecified added task
            }

            // Refresh table task data
            viewTables();
        }
    });

});

function viewTables(){
     $.ajax({
        url: 'viewTask.php', 
        type: 'POST',
        dataType: 'json',
        success: function(data) {
            console.log(data);

            var taskData= '';

            for(i = 0; i < data.length; i++){   
                taskData += '<tr>';
                taskData += '<td>'+ data[i]['task_ID'] + '</td>';
                taskData += '<td>'+ data[i]['task_NAME'] + '</td>';
                taskData += '<td>'+ data[i]['group_NAME'] + '</td>';
                taskData += '<td>'+ new Date(data[i]['task_DATETIME']).toDateString();  + '</td>';
                taskData += '<td>'+ new Date(data[i]['task_DATETIME']).toLocaleTimeString(); + '</td>';
                taskData += '<td>'+ data[i]['task_NOTES'] + '</td>';
                // taskData += '<td><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span></td>';
                taskData += '</tr>';
            }

            // Write rendered html data to table
            $('#taskRowsData').html('');
            $('#taskRowsData').html(taskData);

        },
        complete: function() {
        }
    });

}
