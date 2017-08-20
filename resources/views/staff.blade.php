@extends('shared.master')
@section('title', 'Home')
@section('content')
    <div class="content">
        <div class="title">Staff Section</div>
        <br>
        <p>This section is for staff to manage tickets! If you're not staff, you shouldn't be here!</p>
        <br>
        <div class="title">Tickets</div>
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
                        <td>{{ $ticket->status }}</td>
                        <td>
                            <a class="btn btn-info" href="{{ route('tickets.show', $ticket->id) }}">View</a>
                            <a class="btn btn-primary" href="{{route('tickets.edit', $ticket->id)}}">Edit</a>
                            {!!  Form::open(['method' => 'DELETE', 'route' => ['tickets.destroy', $ticket->id], 'style' => 'display:inline']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection