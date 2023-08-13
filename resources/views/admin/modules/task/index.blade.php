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
                            <h4>Task List</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                     Task List
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
							<thead class="bg-dark text-light">
								<tr>
									<th scope="col">Sl</th>
									<th scope="col">Title</th>
									<th scope="col">Description</th>
									<th scope="col">Status</th>
									<th scope="col">User</th>
									<th scope="col">Decline Date</th>
									<th scope="col">Created at</th>
									<th scope="col">Updated at</th>
									<th scope="col">Action</th>
								</tr>
							</thead>
							<tbody>
                                @foreach ($tasks as $data)
                                <tr>
									<th scope="row">{{ $i++ }}</th>
									<td>{{ $data->title }}</td>
									<td>{{ substr($data->task_description, 0, 20) }}</td>
									<td>{{ $data->task_status }}</td>
									<td>{{ $data->user?->name }}</td>
									<td>{{ $data->task_deadline != null ? Carbon\Carbon::create($data->task_deadline)->toFormattedDateString():null }}</td>
									<td>{{ $data->created_at->toFormattedDateString()}}</td>
									<td>{{ $data->updated_at->toFormattedDateString() }}</td>
									<td>
                                        <a href="{{ route('task.show', $data->id) }}"><button class="btn btn-sm btn-warning"><i class="fa-solid fa-eye"></i></button></a>
                                        <a href="{{ route('task.edit', $data->id) }}"><button class="btn btn-sm btn-info"><i class="fa-solid fa-edit"></i></button></a>
                                        {!! Form::open(['method'=>'delete', 'route'=>['task.destroy', $data->id]]) !!}
                                        {!! Form::button('<i class="fa-solid fa-trash"></i>', ['class'=>'btn btn-sm btn-danger', 'type'=>'submit', 'onclick'=>'return confirm("Are Your Sure")  ']) !!}
                                        {!! Form::close() !!}
                                    </td>
								</tr>
                                @endforeach
								
							</tbody>
						</table>
					</div>
					<!-- Bordered table End -->
        </div>
    </div>
            <!-- Default Basic Forms End -->
</div>


@endsection