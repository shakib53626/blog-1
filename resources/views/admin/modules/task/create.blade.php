@extends('admin.master')
@section('fav_title')
    Create Task
@endsection
@section('admin')

<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Create Task</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Create Task
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
            <div class="row">
                <div class="col-md-6">
                    <div class="pd-20 card-box mb-30 p-4">
                        <div class="clearfix">
                            <div class="pull-left mb-4">
                                <h4 class="text-blue h4">Create Task Forms</h4>
                            </div>
                        </div>

                        {!! Form::open(['route'=> 'insert.task', 'method'=>'post']) !!}
                        @include('admin.modules.task.form')
                        {!! Form::button('Create Task', ['class'=> 'btn btn-info', 'type'=> 'submit']) !!}
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
            <!-- Default Basic Forms End -->
</div>


@endsection