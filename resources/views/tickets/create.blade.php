@extends('shared.master')
@section('title', 'Create Ticket')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Create a New Ticket</h2>
            </div>
        </div>
    </div>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {!! Form::open(array('action' => 'TicketController@store')) !!}

    <div class="form-group">
        {!! Form::label('first_name', 'First Name') !!}
        {!! Form::text('first_name', '', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('last_name', 'Last Name') !!}
        {!! Form::text('last_name', '', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email', 'Email Address') !!}
        {!! Form::text('email', '', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('issue_title', 'Issue Title') !!}
        {!! Form::text('issue_title', '', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('operating_system', 'Operating System') !!}
        {!! Form::text('operating_system', '', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('issue_description', 'Issue Description') !!}
        {!! Form::textarea('issue_description', '', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::hidden('status', 'Pending') !!}
    </div>

    <button class="btn btn-success" type="submit">Submit Ticket</button>

    {!! Form::close() !!}
@endsection