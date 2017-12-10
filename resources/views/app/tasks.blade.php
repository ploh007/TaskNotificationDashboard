<div class="row text-center">
    <div class="col-md-8">
        <div class="card task-cards">
            <div class="card-header">
                <h4>Tasks</h4>
                <div class="input-group input-group-sm">
                    <span class="input-group-addon">Sort By</span>
                    <select class="form-control" id="sel1">
                        <option>Category</option>
                        <option>Due Date</option>
                        <option>Task ID</option>
                    </select>
                </div>
            </div>
            <div class="card-body">
                <!--===========================================
                =            Current Tasks Section            =
                ============================================-->
                @if (count($tasks) == 0)
                <div class="col-md-12">
                    <h4>Congratulations! All Caught Up on your tasks!</h4>
                </div>
                @else
                <div class="wow fadeInDown" data-wow-delay="0s">
                    <table id="current-tasks" class="table">
                        <tbody>
                            @foreach ($tasks as $task) @if ($task->status === "Not Completed")
                            <tr>
                                <td class="row">
                                    <div class="col-md-2 text-center">
                                        <h3 id="task-id">{{ $task->id }}</h3> Group {{ $task->group}}
                                    </div>
                                    <div class="col-md-7">
                                        <h4>{{ $task->name }}
                                                    @if ($task->priority)
                                                         <span class="badge badge-danger priority-label">P</span>
                                                    @endif
                                                    </h4>
                                        <p>{{ $task->dueDate }}</p>
                                        {{ $task->notes }}
                                    </div>
                                    <div class="col-md-3 text-center">
                                        <div class="btn-group-vertical">
                                            <button class="btn btn-sm btn-light complete-task">Complete</button>
                                            <button class="btn btn-sm btn-light uncomplete-task">Un-Complete</button>
                                            <button class="btn btn-sm btn-light delete-task">Delete</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endif @endforeach
                        </tbody>
                    </table>
                </div>
                @endif
                <!--====  End of Current Tasks Section  ====-->
            </div>
        </div>
        <div class="card task-cards mt-2">
            <div class="card-header">
                <h4>Archived Tasks</h4>
            </div>
            <div class="card-body">
                <!--=================================================
                =            Past Completed Tasks Section            =
                ==================================================-->
                <div class="wow fadeInDown" data-wow-delay="0s">
                    <table id="completed-tasks" class="table">
                        <tbody>
                            @foreach ($tasks as $task) @if ($task->status === "Completed")
                            <tr>
                                <td class="row">
                                    <div class="col-md-2 text-center">
                                        <h4 id="task-id">{{ $task->id }}</h4> Group {{ $task->group }}
                                    </div>
                                    <div class="col-md-8">
                                        <h4>{{ $task->name }}</h4>
                                        <!-- <p>{{ $task->dueDate }}</p> -->
                                        {{ $task->notes }}
                                    </div>
                                    <div class="col-md-2 text-center">
                                        <div class="btn-group">
                                            <button class="btn btn-sm btn-light complete-task">C</button>
                                            <button class="btn btn-sm btn-light uncomplete-task">UC</button>
                                            <button class="btn btn-sm btn-light delete-task">D</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endif @endforeach
                        </tbody>
                    </table>
                </div>
                <!--====  End of Past Completed Tasks Section  ====-->
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row text-center">
            <div class="col">
                <div class="wow fadeInUp" data-wow-delay=".75s">
                    <h4 class="metric-indicator" id="current-tasks-metric">10</h4>
                    <h5>Outstanding Tasks</h5>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <div class="col">
                <div class="wow fadeInUp" data-wow-delay="1s">
                    <h4 class="metric-indicator" id="completed-tasks-metric">10</h4>
                    <h5>Completed Tasks</h5>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <div class="col">
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
        <div class="card task-cards mt-2">
            <div class="card-header">
                <h4>Calendar Widget</h4>
                <div class="input-group input-group-sm">
                    <span class="input-group-addon">View By</span>
                    <select class="form-control" id="sel2">
                        <option>Week</option>
                        <option>Month</option>
                        <option>Year</option>
                    </select>
                </div>
            </div>
            <div class="card-body">
                <h4 class="card-title">Calendar Widget To Add/View Tasks</h4>
                <p class="card-text">
                    User's should be able to mark up dates to view/create task for the specific dates corresponding to the calendar. Users should also be able to view a quick display of information (i.e. completed, created tasks for the particular date)
                </p>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-sm btn-light" id="add-task-budget">Go To Date</button>
                    <button type="button" class="btn btn-sm btn-light" id="add-task-budget">Archive Date</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row mt-4">
    <div class="col-md-8 text-center">
    </div>
    <div class="col-md-4">
    </div>
</div>
<!--====================================
=            Script Content            =
=====================================-->
<script type="text/javascript" src="{!! asset('js/tasks.js') !!}"></script>
<!--====  End of Script Content  ====-->