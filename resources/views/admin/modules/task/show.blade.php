@extends('admin.master')
@section('fav_title')
    All Task Information
@endsection
@section('admin')
@php    
    $i = 1;
@endphp


<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Task Details</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                     Task Details
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <div class="dropdown">
                            <a
                                class="btn btn-secondary dropdown-toggle"
                                href="#"
                                role="button"
                                data-toggle="dropdown"
                            >
                                January 2018
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Export List</a>
                                <a class="dropdown-item" href="#">Policies</a>
                                <a class="dropdown-item" href="#">View Assets</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Default Basic Forms Start -->
            <!-- Bordered table  start -->
					<div class="pd-20 card-box mb-30">
						<div class="clearfix mb-20">
							<div class="pull-left">
								<h4 class="text-blue h4">All Task Information</h4>
							</div>
						</div>
						<table class="table table-bordered">
							
							<tbody>
                                <tr>
									<th>ID</th>
                                    <td>{{ $task->id }}</td>
								</tr>
                                <tr>
									<th>Task Title</th>
                                    <td>{{ $task->title }}</td>
								</tr>
                                <tr>
									<th>Task Description</th>
                                    <td>{{ $task->task_description }}</td>
								</tr>
                                <tr>
									<th>Task Status</th>
                                    <td>{{ $task->task_status }}</td>
								</tr>
                                <tr>
									<th>Task user name</th>
                                    <td>{{ $task->user->name }}</td>
								</tr>
                                <tr>
									<th>Task Complete Date</th>
                                    <td>{{ $task->task_deadline }}</td>
								</tr>
                                <tr>
									<th>Task Created Date</th>
                                    <td>{{ $task->created_at }}</td>
								</tr>
                                <tr>
									<th>Task Updated Date</th>
                                    <td>{{ $task->updated_at }}</td>
								</tr>
								
							</tbody>
						</table>

                        <div>
                            <a href="{{ route('task.index') }}" class="btn btn-info"><i class="icon-copy fa fa-arrow-left" aria-hidden="true"></i> Back</a>
                        </div>
					</div>
					<!-- Bordered table End -->
        </div>
    </div>
            <!-- Default Basic Forms End -->
</div>


@endsection