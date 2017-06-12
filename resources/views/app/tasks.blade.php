
<div class="row">
<div class="col-md-4 text-center">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="col-md-6">Calendar Widget</h4>
            <div class="col-md-6 input-group input-group-sm">
                <span class="input-group-addon">View By</span>
                <select class="form-control" id="sel2">
                    <option>Week</option>
                    <option>Month</option>
                    <option>Year</option>
                </select>
            </div>
        </div>
        <div class="panel-body">
            <h4>Calendar Widget To Add/View Tasks</h4>
            <p>
                User's should be able to mark up dates to view/create task for the specific dates corresponding to the calendar. 
                Users should also be able to view a quick display of information (i.e. completed, created tasks for the particular date)
            </p>
            <div class="button-group">
                <button class="btn btn-sm btn-default" id="add-task-budget">Go To Date</button>
                <button class="btn btn-sm btn-default" id="add-task-budget">Archive Date</button>
            </div>
        </div>
    </div>
</div>

<div class="col-md-8">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="col-md-9">Tasks</h4> 
            
            <div class="col-md-3 input-group input-group-sm">
                <span class="input-group-addon">Sort By</span>
                <select class="form-control" id="sel1">
                    <option>Category</option>
                    <option>Due Date</option>
                    <option>Task ID</option>
                </select>
            </div>

        </div>
        <div class="panel-body panel-tasks">
            

            <!--===========================================
            =            Current Tasks Section            =
            ============================================-->

            @if (count($tasks) == 0)
                <div class="col-md-12">
                    <h4>Congratulations! All Caught Up on your tasks!</h4> 
                </div>
            @else
                <div class="wow fadeInDown" data-wow-delay="0s">
                    <div class="table-container">
                        <table id="current-tasks" class="table table-condensed table-responsive">
                            <tbody>
                                @foreach ($tasks as $task) 
                                    @if ($task->status === "Not Completed")
                                        <tr>
                                            <td>
                                                <div class="col-md-2 text-center">
                                                    <h3 id="task-id">{{ $task->id }}</h3>
                                                    Group {{ $task->group}}
                                                </div>
                                                <div class="col-md-7">
                                                    <h4>{{ $task->name }}
                                                    @if ($task->priority)
                                                         <span class="label label-danger priority-label">P</span>
                                                    @endif
                                                    </h4> 
                                                    <p>{{ $task->dueDate }}</p>
                                                    {{ $task->notes }}
                                                </div>
                                                <div class="col-md-3 text-center">
                                                    <div class="btn-group-vertical">
                                                        <button class="btn btn-sm btn-default complete-task">Complete</button>
                                                        <button class="btn btn-sm btn-default uncomplete-task">Un-Complete</button>
                                                        <button class="btn btn-sm btn-default delete-task">Delete</button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endif 
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                @endif
                <!--====  End of Current Tasks Section  ====-->
        </div>
        <!-- <div class="panel-footer"></div> -->
    </div>
</div>
</div>


<div class="row">

<div class="col-md-12">
<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">Archived Tasks</h4>
    </div>
    <div class="panel-body">
        <!--=================================================
        =            Past Completed Tasks Section            =
        ==================================================-->
        <div class="wow fadeInDown" data-wow-delay="0s">
            <div class="table">
                <table id="completed-tasks" class="table">
                    <tbody>
                        @foreach ($tasks as $task) 
                            @if ($task->status === "Completed")
                                <tr>
                                    <td>
                                        <div class="col-md-2 text-center">
                                            <h4 id="task-id">{{ $task->id }}</h4>
                                            Group {{ $task->group }}
                                        </div>
                                        <div class="col-md-8">
                                            <h4>{{ $task->name }}</h4> 
                                            <!-- <p>{{ $task->dueDate }}</p> -->
                                            {{ $task->notes }}
                                        </div>
                                        <div class="col-md-2 text-center">
                                            <div class="btn-group">
                                                <button class="btn btn-sm btn-default complete-task">C</button>
                                                <button class="btn btn-sm btn-default uncomplete-task">UC</button>
                                                <button class="btn btn-sm btn-default delete-task">D</button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endif 
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!--====  End of Past Completed Tasks Section  ====-->
    </div>
</div>
</div>
</div>


<!--====================================
=            Script Content            =
=====================================-->
<script type="text/javascript" src="{!! asset('js/tasks.js') !!}"></script>
<!--====  End of Script Content  ====-->
