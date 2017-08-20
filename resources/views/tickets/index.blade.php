@extends('shared.master')
@section('title', 'Home')
@section('content')
    <div class="content">
        <div class="title">Tickets</div>
        <br>
        <p>Find your ticket here! To view comments and more information, click on the view button on your ticket!</p>
        <hr>
        <div class="btn-group pull-right" style="padding-bottom: 15px;">
            <a class="btn btn-success" href="{{ route('tickets.create') }}"> New Ticket</a>
        </div>
        <div class="ticket-group">
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Subject Title</th>
                    <th>Submitter</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
                @foreach($tickets as $ticket)
                    <tr>
                        <td>{{$ticket->id}}</td>
                        <td>{{$ticket->issue_title}}</td>
                        <td>{{$ticket->user->first_name}} {{$ticket->user->last_name}}</td>
                        <td>{{$ticket->status}}</td>
                        <td>
                            <a class="btn btn-info" href="{{ route('tickets.show', $ticket->id) }}">View</a>
                        </td>
                    </tr>
                @endforeach

            </table>
        </div>
    </div>
@endsection