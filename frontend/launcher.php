<html lang="en">
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- <link rel="icon" href="../../favicon.ico"> -->

        <title>Task Notification Dashboard</title>

        <!-- <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'> -->
        <!-- <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'> -->

        <!-- Bootstrap core CSS -->
        <link href="../assests/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="../assests/css/dashboard.css" rel="stylesheet">

        <script src="../assests/js/jquery-1.11.3.min.js"></script>
        <script src="../assests/js/bootstrap.min.js"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

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
                                <form class="form-horizontal">
                                    <div class="modal-body">
                                                
                                            <div class="form-group">
                                                <label for="inputPassword3" class="col-sm-2 control-label">Task</label>
                                                <div class="col-sm-10">
                                                    <input required type="text" class="form-control" id="exampleInputName" placeholder="Task Name">
                                                </div>
                                            </div>
                                         
                                            <div class="form-group">
                                                <label for="inputPassword3" class="col-sm-2 control-label">Grouping</label>
                                                <div class="col-sm-10">
                                                    <select required class="form-control">
                                                        <option>School</option>
                                                        <option>Work</option>
                                                        <option>Church</option>
                                                        <option>Club</option>
                                                        <option>Family</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- <div class="form-group">
                                                <label for="inputPassword3" class="col-sm-2 control-label">Start Date</label>
                                                <div class="col-sm-10">
                                                    <input required type="date" class="form-control">
                                                </div>
                                            </div> -->

                                            <div class="form-group">
                                                <label for="inputPassword3" class="col-sm-2 control-label">Due Date</label>
                                                <div class="col-sm-10">
                                                    <input required type="date" class="form-control">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="inputPassword3" class="col-sm-2 control-label">Due Time</label>
                                                <div class="col-sm-10">
                                                    <input required type="time" class="form-control">
                                                </div>
                                            </div>

                                            <!-- <div class="form-group">
                                                <label for="inputPassword3" class="col-sm-2 control-label"></label>
                                                <div class="col-sm-10">
                                                    <input type="checkbox" value="">
                                                        Due Date Only
                                                </div>
                                            </div> -->
                                            
                                            <div class="form-group">
                                                <label for="inputPassword3" class="col-sm-2 control-label">Notes</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" placeholder="Task Notes" rows="3"></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="inputPassword3" class="col-sm-2 control-label"></label>
                                                <div class="col-sm-10">
                                                    <input type="checkbox" value="">
                                                        Enable Notifications
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="inputPassword3" class="col-sm-2 control-label">Notify</label>
                                                <div class="col-sm-5">
                                                    <div class="input-group">
                                                        <input required type="number" min=1 max=24 class="form-control">
                                                        <div class="input-group-addon">Hours Before</div>
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                            <!-- <div class="form-group">
                                                <label for="inputPassword3" class="col-sm-2 control-label">Color</label>
                                                <div class="col-sm-2">
                                                    <input required type="color" class="form-control">
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
                                <th>Task Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="success">
                                    <td>1</td>
                                    <td>Finish Database Assignment</td>
                                    <td>School</td>
                                    <td>9th Feb 2016</td>
                                    <td>5:00 PM</td>
                                    <td>Remember to check and submit as PDF</td>
                                    <td><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span></td>
                                </tr>

                                <tr class="success">
                                    <td>2</td>
                                    <td>Real Time Quiz</td>
                                    <td>School</td>
                                    <td>9th Feb 2016</td>
                                    <td>11:59 PM</td>
                                    <td></td>
                                    <td><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span></td>
                                </tr>

                                <tr>
                                    <td>3</td>
                                    <td>Finish Database Assignment</td>
                                    <td>School</td>
                                    <td>9th Feb 2016</td>
                                    <td>5:00 PM</td>
                                    <td>
                                        Some long description on notes
                                        <ul>
                                            <li>Some sub task to do</li>
                                            <li>Some sub task to do</li>
                                            <li>Some sub task to do</li>
                                            <li>Some sub task to do</li>
                                            <li>Some sub task to do</li>
                                        </ul>
                                    </td>
                                    <td><span class="glyphicon glyphicon-cog" aria-hidden="true"></span></td>
                                </tr>

                                <tr>
                                    <td>4</td>
                                    <td>Analysis on System</td>
                                    <td>Work</td>
                                    <td>9th Feb 2016</td>
                                    <td>11:59 PM</td>
                                    <td></td>
                                    <td><span class="glyphicon glyphicon-cog" aria-hidden="true"></span></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>

                    

                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    <!-- <h2 class="sub-header">Upcoming Tasks</h2> -->
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
                                                <tr class="success">
                                                    <td>1</td>
                                                    <td>Finish Database Assignment</td>
                                                    <td>School</td>
                                                    <td>9th Feb 2016</td>
                                                    <td>5:00 PM</td>
                                                    <td>Remember to check and submit as PDF</td>
                                                    <td><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span></td>
                                                </tr>

                                                <tr class="success">
                                                    <td>2</td>
                                                    <td>Real Time Quiz</td>
                                                    <td>School</td>
                                                    <td>9th Feb 2016</td>
                                                    <td>11:59 PM</td>
                                                    <td></td>
                                                    <td><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span></td>
                                                </tr>

                                                <tr>
                                                    <td>3</td>
                                                    <td>Finish Database Assignment</td>
                                                    <td>School</td>
                                                    <td>9th Feb 2016</td>
                                                    <td>5:00 PM</td>
                                                    <td>
                                                        Some long description on notes
                                                        <ul>
                                                            <li>Some sub task to do</li>
                                                            <li>Some sub task to do</li>
                                                            <li>Some sub task to do</li>
                                                            <li>Some sub task to do</li>
                                                            <li>Some sub task to do</li>
                                                        </ul>
                                                    </td>
                                                    <td><span class="glyphicon glyphicon-cog" aria-hidden="true"></span></td>
                                                </tr>

                                                <tr>
                                                    <td>4</td>
                                                    <td>Analysis on System</td>
                                                    <td>Work</td>
                                                    <td>9th Feb 2016</td>
                                                    <td>11:59 PM</td>
                                                    <td></td>
                                                    <td><span class="glyphicon glyphicon-cog" aria-hidden="true"></span></td>
                                                </tr>

                                            </tbody>
                                        </table> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <!-- <h2 class="sub-header">Completed Tasks</h2> -->
                                    Completed Tasks
                                </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                    </div>
                   

                 

                    <!--       <table class="table table-striped">
                    <thead>
                    <tr>
                    <th>#</th>
                    <th>Header</th>
                    <th>Header</th>
                    <th>Header</th>
                    <th>Header</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                    <td>1,001</td>
                    <td>Lorem</td>
                    <td>ipsum</td>
                    <td>dolor</td>
                    <td>sit</td>
                    </tr>
                    <tr>
                    <td>1,002</td>
                    <td>amet</td>
                    <td>consectetur</td>
                    <td>adipiscing</td>
                    <td>elit</td>
                    </tr>
                    <tr>
                    <td>1,003</td>
                    <td>Integer</td>
                    <td>nec</td>
                    <td>odio</td>
                    <td>Praesent</td>
                    </tr>
                    <tr>
                    <td>1,003</td>
                    <td>libero</td>
                    <td>Sed</td>
                    <td>cursus</td>
                    <td>ante</td>
                    </tr>
                    <tr>
                    <td>1,004</td>
                    <td>dapibus</td>
                    <td>diam</td>
                    <td>Sed</td>
                    <td>nisi</td>
                    </tr>
                    <tr>
                    <td>1,005</td>
                    <td>Nulla</td>
                    <td>quis</td>
                    <td>sem</td>
                    <td>at</td>
                    </tr>
                    <tr>
                    <td>1,006</td>
                    <td>nibh</td>
                    <td>elementum</td>
                    <td>imperdiet</td>
                    <td>Duis</td>
                    </tr>
                    <tr>
                    <td>1,007</td>
                    <td>sagittis</td>
                    <td>ipsum</td>
                    <td>Praesent</td>
                    <td>mauris</td>
                    </tr>
                    <tr>
                    <td>1,008</td>
                    <td>Fusce</td>
                    <td>nec</td>
                    <td>tellus</td>
                    <td>sed</td>
                    </tr>
                    <tr>
                    <td>1,009</td>
                    <td>augue</td>
                    <td>semper</td>
                    <td>porta</td>
                    <td>Mauris</td>
                    </tr>
                    <tr>
                    <td>1,010</td>
                    <td>massa</td>
                    <td>Vestibulum</td>
                    <td>lacinia</td>
                    <td>arcu</td>
                    </tr>
                    <tr>
                    <td>1,011</td>
                    <td>eget</td>
                    <td>nulla</td>
                    <td>Class</td>
                    <td>aptent</td>
                    </tr>
                    <tr>
                    <td>1,012</td>
                    <td>taciti</td>
                    <td>sociosqu</td>
                    <td>ad</td>
                    <td>litora</td>
                    </tr>
                    <tr>
                    <td>1,013</td>
                    <td>torquent</td>
                    <td>per</td>
                    <td>conubia</td>
                    <td>nostra</td>
                    </tr>
                    <tr>
                    <td>1,014</td>
                    <td>per</td>
                    <td>inceptos</td>
                    <td>himenaeos</td>
                    <td>Curabitur</td>
                    </tr>
                    <tr>
                    <td>1,015</td>
                    <td>sodales</td>
                    <td>ligula</td>
                    <td>in</td>
                    <td>libero</td>
                    </tr>
                    </tbody>
                    </table> -->
                    </div>
                </div>
            </div>
        </div>


    </body>
</html>