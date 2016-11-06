@extends('common.basic')

@section('content')
<!-- <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div> -->

<body>

        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Task Notification</a>
                </div>

                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @endif
                        <li><a href="#">Dashboard</a></li>
                        <li><a href="#">Settings</a></li>
                        <li><a href="#">Profile</a></li>
                        <li><a href="#">Help</a></li>
                    </ul>
                    <form class="navbar-form navbar-right">
                        <input type="text" class="form-control" placeholder="Search...">
                    </form>
                </div>
            </div>
        </nav>

        <div class="container-fluid">
            <div class="row">

                <div class="col-sm-3 col-md-2 sidebar">
                    <ul class="nav nav-sidebar">
                    <li class="active"><a href="#">Overview <span class="sr-only">(current)</span></a></li>
                    <li><a href="#">Reports</a></li>
                    <li><a href="#">Analytics</a></li>
                    <li><a href="#">Export</a></li>
                    </ul>
                    <!--  <ul class="nav nav-sidebar">
                    <li><a href="">Nav item</a></li>
                    <li><a href="">Nav item again</a></li>
                    <li><a href="">One more nav</a></li>
                    <li><a href="">Another nav item</a></li>
                    <li><a href="">More navigation</a></li>
                    </ul>
                    <ul class="nav nav-sidebar">
                    <li><a href="">Nav item again</a></li>
                    <li><a href="">One more nav</a></li>
                    <li><a href="">Another nav item</a></li>
                    </ul> -->
                </div>

                <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                    <h1 class="page-header">Notification System Dashboard</h1>

                    <div class="row">

                        <div class="col-sm-6 col-md-3">
                            <button type="button" class="thumbnail" data-toggle="modal" data-target="#myModal">
                                <div class="action-tiles">
                                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                </div>
                                <h3>Add a task</h3>
                                <p>Add an item to your agenda</p>
                            </button>
                        </div>

                        <div class="col-sm-6 col-md-3">
                            <button type="button" class="thumbnail" data-toggle="modal" data-target="#myModal">
                                <div class="action-tiles">
                                    <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                                </div>
                                <h3>View All Tasks</h3>
                                <p>View all your items to complete</p>
                            </button>
                        </div>

                        <div class="col-sm-6 col-md-3">
                            <button type="button" class="thumbnail" data-toggle="modal" data-target="#myModal">
                                <div class="action-tiles">
                                    <span class="glyphicon glyphicon-ban-circle" aria-hidden="true"></span>
                                </div>
                                <h3>Delete Tasks</h3>
                                <p>Delete a create item</p>
                            </button>
                        </div>

                        <div class="col-sm-6 col-md-3">
                            <button type="button" class="thumbnail" data-toggle="modal" data-target="#myModal">
                                <div class="action-tiles">
                                    <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                                </div>
                                <h3>Configure</h3>
                                <p>Configure notification and settings</p>
                            </button>
                        </div>

                    </div>

                    <!-- Add Tasks Modal -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add A Task</h4>
                                </div>

                                <!-- Form For Adding a Task -->
                                <form class="form-horizontal" id="createTask_form">
                                    <div class="modal-body">
                                                
                                            <div class="form-group">
                                                <label for="inputPassword3" class="col-sm-2 control-label">Task</label>
                                                <div class="col-sm-10">
                                                    <input  type="text" class="form-control" id="taskName" placeholder="Task Name">
                                                </div>
                                            </div>
                                         
                                            <div class="form-group">
                                                <label for="inputPassword3" class="col-sm-2 control-label">Grouping</label>
                                                <div class="col-sm-10">
                                                    <select  class="form-control" id="taskGroup">
                                                        <option value="101">School</option>
                                                        <option value="102">Work</option>
                                                        <option value="103">Church</option>
                                                        <option value="104">Club</option>
                                                        <option value="105">Family</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="inputPassword3" class="col-sm-2 control-label">Due Date</label>
                                                <div class="col-sm-10">
                                                    <input  type="date" class="form-control" id="taskDate">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="inputPassword3" class="col-sm-2 control-label">Due Time</label>
                                                <div class="col-sm-10">
                                                    <input  type="time" class="form-control" id="taskTime">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="inputPassword3" class="col-sm-2 control-label">Notes</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" placeholder="Task Notes" rows="3" id="taskNotes"></textarea>
                                                </div>
                                            </div>

                                            <!--   <div class="form-group">
                                                <label for="inputPassword3" class="col-sm-2 control-label"></label>
                                                <div class="col-sm-10">
                                                    <input type="checkbox" value="">
                                                        Enable Notifications
                                                </div>
                                            </div> -->

                                            <!-- <div class="form-group">
                                                <label for="inputPassword3" class="col-sm-2 control-label">Notify</label>
                                                <div class="col-sm-5">
                                                    <div class="input-group">
                                                        <input  type="number" min=1 max=24 class="form-control">
                                                        <div class="input-group-addon">Hours Before</div>
                                                    </div>
                                                </div>
                                            </div> -->
                                    </div>

                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Add Task</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                    </div>
                                </form>
                                
                            </div>
                        </div>
                    </div>


                    <!--  <div class="row placeholders">
                    <div class="col-xs-6 col-sm-3 placeholder">
                    <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
                    <h4>Label</h4>
                    <span class="text-muted">Something else</span>
                    </div>
                    <div class="col-xs-6 col-sm-3 placeholder">
                    <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
                    <h4>Label</h4>
                    <span class="text-muted">Something else</span>
                    </div>
                    <div class="col-xs-6 col-sm-3 placeholder">
                    <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
                    <h4>Label</h4>
                    <span class="text-muted">Something else</span>
                    </div>
                    <div class="col-xs-6 col-sm-3 placeholder">
                    <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
                    <h4>Label</h4>
                    <span class="text-muted">Something else</span>
                    </div>
                    </div> -->

                    <h2 class="sub-header">Daily Tasks</h2>
                    <div class="table table-condensed table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                <th>Task #</th>
                                <th>Task Name</th>
                                <th>Category</th>
                                <th>Due Date</th>
                                <th>Due Time</th>
                                <th>Notes</th>
                                <!-- <th>Task Status</th> -->
                                </tr>
                            </thead>
                            <tbody id="taskRowsData">
                            </tbody>
                        </table>
                    </div>

                    

                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
<!-- 
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingZero">
                                <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseZero" aria-expanded="true" aria-controls="collapseZero">
                                    Daily Tasks
                                </a>
                                </h4>
                            </div>
                            <div id="collapseZero" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingZero">
                                <div class="panel-body" id="displayTasks">
                                </div>
                            </div>
                        </div> -->



                        <!-- <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    Upcoming Tasks
                                </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <div class="table table-condensed table-responsive">
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                <th>Task #</th>
                                                <th>Task Name</th>
                                                <th>Category</th>
                                                <th>Due Date</th>
                                                <th>Due Time</th>
                                                <th>Notes</th>
                                                <th>Task Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table> 
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        <!-- <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Completed Tasks
                                </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div> -->

                    </div>
                   
                    <div id="taskCreationStatus">
                        Task Successfully Created. <a id="close">[close]</a>
                    </div>
                 

                    </div>
                </div>
            </div>
        </div>
    </body>

@endsection
