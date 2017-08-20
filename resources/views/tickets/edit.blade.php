@extends('shared.master')
@section('title', 'Edit Ticket')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit New Ticket {{ $ticket->id }}</h2>
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
    {!! Form::model($ticket, ['method' => 'PATCH', 'route' => ['tickets.update', $ticket->id]]) !!}

    <?php $user = $ticket->user; ?>

   <div class="form-group">
        {!! Form::label('first_name', 'First Name') !!}
        {!! Form::text('first_name', "$user->first_name", ['class' => 'form-control', 'readonly']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('last_name', 'Last Name') !!}
        {!! Form::text('last_name', "$user->last_name", ['class' => 'form-control', 'readonly']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email', 'Email Address') !!}
        {!! Form::text('email', "$user->email", ['class' => 'form-control', 'readonly']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('issue_title', 'Issue Title') !!}
        {!! Form::text('issue_title', "$ticket->issue_title", ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('operating_system', 'Operating System') !!}
        {!! Form::text('operating_system', "$ticket->operating_system", ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('issue_description', 'Issue Description') !!}
        {!! Form::textarea('issue_description', "$ticket->issue_description", ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('comment_text', 'Comment: ') !!}
        {!! Form::textarea('comment_text', "", ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('status', 'Status') !!}
        {!! Form::select('status', array('Pending' => 'Pending', 'In-Progress' => 'In-Progress',
        'Resolved' => 'Resolved', 'Unresolved' => 'Unresolved'), 'In-Progress', ['class' => 'form-control']) !!}
    </div>

    <button class="btn btn-success" type="submit">Submit Ticket</button>
    <a class="btn btn-danger" href="{{ url('staff') }}">Cancel</a>

    {!! Form::close() !!}
@endsection