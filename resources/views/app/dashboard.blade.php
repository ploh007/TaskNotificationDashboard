@extends('common.basic') @section('content')
<link href="{!! asset('css/dashboard.css') !!}" rel="stylesheet">
<div class="container-fluid">
    <div class="row">
        <!--========================================
        =              SideBar Controls            =
        =========================================-->
        <nav class="col-sm-3 col-md-2 hidden-xs-down bg-faded sidebar">
            <h3 class="text-center">
                <img src="{!! asset('img/analytics.svg') !!}" width="20px"> 
                {{ Auth::user()->name }}'s Dashboard
            </h3>
            <ul class="nav nav-pills flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Overview <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Reports</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Analytics</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Export</a>
                </li>
            </ul>
        </nav>
        <!--====  End of SideBar Controls  ====-->
        <!--====================================
        =            Main Dashboard            =
        =====================================-->
        <main class="col-sm-9 ml-sm-auto col-md-10 pt-9" role="main">
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

            <div class="btn-group text-center d-flex pt-4 pb-4" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-light btn-raised w-100 wow fadeIn" data-wow-delay=".5s" data-toggle="modal" data-target="#taskModal">
                    <h4><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add a task</h4>
                    <p>Add an item to complete</p>
                </button>
                <button type="button" class="btn btn-light btn-raised w-100 wow fadeIn" data-wow-delay=".5s" id="view-tasks">
                    <h4><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> Refresh All Tasks</h4>
                    <p>View items to complete</p>
                </button>
                <button type="button" class="btn btn-light btn-raised w-100 wow fadeIn" data-wow-delay=".5s" data-toggle="modal" data-target="#group-modal">
                    <h4><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Configure</h4>
                    <p>Configure groups</p>
                </button>
            </div>

            <div id="task-data">
            </div>
            <!--========================================
            =            Notification Popup            =
            =========================================-->
            <div id="taskCreationStatus">
                Task Successfully Created. <a id="close">[close]</a>
            </div>
            <!--====  End of Notification Popup  ====-->
        </main>
    </div>
    <!--====  End of Main Dashboard  ====-->
    <!--=====================================
    =            Add Tasks Modal            =
    ======================================-->
    <div class="modal fade" id="taskModal">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header alert-success">
                    <h5 class="modal-title">Add A Task</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="form-horizontal" id="createTaskForm">
                    <div class="modal-body">
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 control-label">Task</label>
                            <div class="col-sm-10">
                                <input required type="text" class="form-control" id="taskName" placeholder="Task Name">
                            </div>
                        </div>
                        <div class="form-group row">
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
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 control-label">Due Date</label>
                            <div class="col-sm-10">
                                <input required type="date" class="form-control" id="taskDate">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 control-label">Due Time</label>
                            <div class="col-sm-10">
                                <input required type="time" class="form-control" id="taskTime">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 control-label">Notes</label>
                            <div class="col-sm-10">
                                <textarea required class="form-control" placeholder="Task Notes" rows="3" id="taskNotes"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
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
    <div class="modal fade" id="group-modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header alert-info">
                    <h5 class="modal-title">Configure Groups</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
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
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 control-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="group-name" placeholder="Group Name">
                            </div>
                        </div>
                        <div class="form-group row">
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
new WOW().init();

/*===========================================
=            Get List of Groups             =
===========================================*/
$(document).ready(function() {

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
                groupDD += "<option value='" + element.id + "'>" + element.group_name + "</option>";
                groupModalInfo += "<tr><td data-group-id='" + element.id + "'>" + element.id + "</td><td>" + element.group_name + "</td><td style='color:#fff;background-color:" + element.group_color + ";'>" + element.group_color + "</td><td><input type='checkbox' name='groupsToDel'></td></tr>";
            });

            $("#taskGroup").html(groupDD);

            $("#groups-modal-list").html(groupModalInfo);

        },
        error: function(data, responseText) {
            console.log(data.responseJSON);
            console.log(responseText);
        }
    });

});
</script>
@endsection