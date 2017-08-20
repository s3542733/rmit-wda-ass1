@extends('shared.master')
@section('title', 'Home')
@section('content')
    <div class="content">
        <br>
        <div class="jumbotron colour-jumbotron">

            <h1 class="display-3">Welcome to ITS</h1>
            <p class="lead">The super convenient, easy to use solution for all your IT woes! Simply
                submit a ticket and watch as we fix you problems right up for you!</p>
            <hr>
            <img src="{{asset('/images/jumbotron_image.jpg')}}" alt="jumbotron_image" style="height: auto; max-width: 100%">
            <br>
            <hr>
            <p>To get started simply click one of the buttons below!</p>
            <div class="btn-group-lg">
                <a href="{{url('tickets')}}" class="btn btn-primary btn-lg">View Tickets</a>
                <a href="{{url('faq')}}" class="btn btn-primary btn-lg">Learn More</a>
                <a href="{{url('staff')}}" class="btn btn-primary btn-lg">Staff Section</a>
            </div>
        </div>
    </div>
@endsection