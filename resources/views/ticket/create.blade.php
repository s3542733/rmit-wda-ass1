@extends('master')
@section('title', 'Create a Ticket')
@section('content')
    <div class="container">
        <div class="content">
            <div class="title">Create a Ticket</div>

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

            <button class="'btn btn-success" type="submit">Go to Home!</button>
        </div>
    </div>
@endsection