<div class="form-group row">
    {!! Form::label('title', 'Title', ['class'=>'col-sm-12 col-md-3 col-form-label']) !!}
    <div class="col-sm-12 col-md-9">
        {!! Form::text('title', null, ['class'=>'form-control', 'placeholder'=> 'Enter Task Title']) !!}
    </div>
</div>
<div class="form-group row">
    {!! Form::label('description', 'Description', ['class'=>'col-sm-12 col-md-3 col-form-label']) !!}
    <div class="col-sm-12 col-md-9">
        {!! Form::textarea('task_description', null, ['class'=>'form-control', 'rows'=>3, 'placeholder'=> 'Enter Task Description']) !!}
    </div>
</div>
<div class="form-group row">
    {!! Form::label('task_status', 'Task Status', ['class'=>'col-sm-12 col-md-3 col-form-label']) !!}
    <div class="col-sm-12 col-md-9">
        {!! Form::select('task_status', ['Active'=>'Active', 'Deactive'=>'Deactive'], null, ['class'=>'form-control']) !!}
    </div>
</div>
<div class="form-group row">
    {!! Form::label('deadline', 'Select Deadline', ['class'=>'col-sm-12 col-md-3 col-form-label']) !!}
    <div class="col-sm-12 col-md-9">
        {!! Form::date('task_deadline',  \Carbon\Carbon::now(), ['class'=>'form-control']) !!}
    </div>
</div>
<div class="form-group row">
    {!! Form::label('user', 'Select User', ['class'=>'col-sm-12 col-md-3 col-form-label']) !!}
    <div class="col-sm-12 col-md-9">
        {!! Form::select('user_id',  $users, null, ['class'=>'form-control']) !!}
    </div>
</div>