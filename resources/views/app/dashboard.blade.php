@extends('common.basic') @section('content')
<link href="{!! asset('css/dashboard.css') !!}" rel="stylesheet">
<div class="container-fluid">
    <!--========================================
    =          f SideBar Controls            =
    =========================================-->
    <div class="col-sm-3 col-md-2 sidebar">
        <ul class="nav nav-sidebar">
            <h3 class="text-center">
                <img src="{!! asset('img/analytics.svg') !!}" width="30px"> 
                {{ Auth::user()->name }}'s Dashboard
            </h3>
            <li class="active"><a href="#">Overview <span class="sr-only">(current)</span></a></li>
            <li><a href="#">Reports</a></li>
            <li><a href="#">Analytics</a></li>
            <li><a href="#">Export</a></li>
        </ul>
    </div>
    <!--====  End of SideBar Controls  ====-->
    <!--====================================
    =            Main Dashboard            =
    =====================================-->
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

        <hr class="featurette-divider">

        <div class="row">

            <div class="col-md-6 text-center">
                <div id="outer" style="width:500px; height:200px; margin: 0px auto; ">
                <div id="main">
                    <div id="div1"></div>
                    <div id="div2"></div>
                    <div id="div3"></div>
                </div>
                </div>
            </div>

            <div class="col-md-6">
                <div id="line"></div>​
            </div>

        </div>

        <div class="col-md-12 text-center">
            <div class="col-md-4">
                <div class="wow fadeInUp" data-wow-delay=".75s">
                    <h4 class="metric-indicator" id="current-tasks-metric">10</h4>
                    <h5>Outstanding Tasks</h5>
                </div>
            </div>
            <div class="col-md-4">
                <div class="wow fadeInUp" data-wow-delay="1s">
                    <h4 class="metric-indicator" id="completed-tasks-metric">10</h4>
                    <h5>Completed Tasks</h5>
                </div>
            </div>

            <div class="col-md-4">
                <div class="wow fadeInUp" data-wow-delay="1.25s">
                    <h4 class="metric-indicator" id="tasks-budget-metrics">10</h4>
                    <h5>Daily Tasks Budget</h5>
                    <!-- <div class="btn-group">
                        <button class="btn btn-default custom-btn" id="add-task-budget"><span class="glyphicon glyphicon-plus"></span></button>
                        <button class="btn btn-default custom-btn" id="sub-task-budget"><span class="glyphicon glyphicon-minus"></span></button>
                    </div> -->
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 text-center">
                <div class="btn-group btn-group-justified" role="group">
                    
                    <div class="btn-group" role="group">
                        <div class="wow fadeIn" data-wow-delay=".5s">
                            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#taskModal">
                                <h4><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add a task</h4>
                                <p>Add an item to complete</p>
                            </button>
                        </div>
                    </div>

                    
                    <!-- <div class="btn-group" role="group">
                        <div class="wow fadeIn" data-wow-delay="0.65s">
                            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#taskModal">
                                <h4><span class="glyphicon glyphicon-minus" aria-hidden="true"></span> Remove Tasks</h4>
                                <p>Remove an item</p>
                            </button>
                        </div>
                    </div> -->

                    
                    <div class="btn-group" role="group">
                        <div class="wow fadeIn" data-wow-delay="0.8s">
                            <button type="button" class="btn btn-default" id="view-tasks">
                                <h4><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> Refresh All Tasks</h4>
                                <p>View items to complete</p>
                            </button>
                        </div>
                    </div>

                    
                    <div class="btn-group" role="group">
                        <div class="wow fadeIn" data-wow-delay="1s">
                            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#group-modal">
                                <h4><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Configure</h4>
                                <p>Configure groups</p>
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <hr class="featurette-divider">

        <div id="task-data">
        </div>
        <!--========================================
        =            Notification Popup            =
        =========================================-->
        <div id="taskCreationStatus">
            Task Successfully Created. <a id="close">[close]</a>
        </div>
        <!--====  End of Notification Popup  ====-->
    </div>
    <!--====  End of Main Dashboard  ====-->

    <!--=====================================
    =            Add Tasks Modal            =
    ======================================-->
    <div class="modal fade" id="taskModal" tabindex="-1" role="dialog" aria-labelledby="taskModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header alert-success">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add A Task</h4>
                </div>
                <form class="form-horizontal" id="createTaskForm">
                    <div class="modal-body">
                        <div class="form-group form-group-sm">
                            <label for="inputPassword3" class="col-sm-2 control-label">Task</label>
                            <div class="col-sm-10">
                                <input required type="text" class="form-control" id="taskName" placeholder="Task Name">
                            </div>
                        </div>
                        <div class="form-group form-group-sm">
                            <label for="inputPassword3" class="col-sm-2 control-label">Grouping</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="taskGroup">
                                    <option value="101">School</option>
                                    <option value="102">Work</option>
                                    <option value="103">Church</option>
                                    <option value="104">Club</option>
                                    <option value="105">Family</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group form-group-sm">
                            <label for="inputPassword3" class="col-sm-2 control-label">Due Date</label>
                            <div class="col-sm-10">
                                <input required type="date" class="form-control" id="taskDate">
                            </div>
                        </div>
                        <div class="form-group form-group-sm">
                            <label for="inputPassword3" class="col-sm-2 control-label">Due Time</label>
                            <div class="col-sm-10">
                                <input required  type="time" class="form-control" id="taskTime">
                            </div>
                        </div>
                        <div class="form-group form-group-sm">
                            <label for="inputPassword3" class="col-sm-2 control-label">Notes</label>
                            <div class="col-sm-10">
                                <textarea required class="form-control" placeholder="Task Notes" rows="3" id="taskNotes"></textarea>
                            </div>
                        </div>
                        <div class="form-group form-group-sm">
                            <label for="inputPassword3" class="col-sm-2 control-label">Priority</label>
                            <div class="col-sm-10">
                                <div class="onoffswitch">
                                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="taskPriority">
                                    <label class="onoffswitch-label" for="taskPriority">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-default custom-btn">Add Task</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--====  End of Add Tasks Modal  ====-->

    <!--=====================================
    =            Groups Modal            =
    ======================================-->
    <div class="modal fade" id="group-modal" tabindex="-1" role="dialog" aria-labelledby="group-modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header alert-info">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="group-modal-label"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Configure Groups</h4>
                </div>

                <form class="form-horizontal" id="groups-form">
                    <div class="modal-body">
                        <h4>Manage Groups</h4>
                        <table class="table table-bordered">
                            <thead>
                                <th>Group ID</th>
                                <th>Group Name</th>
                                <th>Group Color</th>
                                <th>Delete</th>
                            </thead>
                            <tbody id="groups-modal-list">
                            </tbody>
                        </table>
                        <h4>Add Groups</h4>
                        <div class="form-group form-group-sm">
                            <label for="inputPassword3" class="col-sm-2 control-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="group-name" placeholder="Group Name">
                            </div>
                        </div>

                        <div class="form-group form-group-sm">
                            <label for="inputPassword3" class="col-sm-2 control-label">Color</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="group-color" placeholder="Group Color">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--====  End of Settings Modal  ====-->


</div>
<meta name="csrf-token" content="{{ csrf_token() }}">
<script type="text/javascript" src="{!! asset('js/appJS.js') !!}"></script>
<script type="text/javascript" src="{!! asset('js/landing.js') !!}"></script>
<script type="text/javascript" src="{!! asset('js/d3.min.js') !!}"></script>
<script type="text/javascript" src="{!! asset('js/radial.js') !!}"></script>
<script type="text/javascript" src="{!! asset('js/radialchart.js') !!}"></script>
<script type="text/javascript" src="{!! asset('js/line.js') !!}"></script>

<script type="text/javascript">

/*===========================================
=            Get List of Groups             =
===========================================*/
$( document ).ready(function() {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        url: './view-groups',
        type: 'POST',
        dataType: 'json',
        data: null,
        dataType: 'json',
        success: function(data) {
            $("#taskGroup").html('');

            var groupDD = "";
            var groupModalInfo = "";

            $.each(data, function(index, element) {
                groupDD += "<option value='" + element.id + "'>"+ element.group_name + "</option>";
                groupModalInfo += "<tr><td data-group-id='"+element.id+"'>" + element.id + "</td><td>"+ element.group_name + "</td><td style='color:#fff;background-color:" + element.group_color +";'>"+ element.group_color + "</td><td><input type='checkbox' name='groupsToDel'></td></tr>";
            });

            $("#taskGroup").html(groupDD);

            $("#groups-modal-list").html(groupModalInfo);

        }, error: function(data, responseText) {
            console.log(data.responseJSON);
            console.log(responseText);
        }
    });

});


</script>

@endsection
