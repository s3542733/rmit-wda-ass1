@extends('shared.master')
@section('title', 'Staff Ticket')
@section('content')
    <div class="content">

        <div class="title">Ticket No. {{$ticket->id}}</div>
        <br>
        <div class="ticket-details">

            <table class="table table-bordered">
                <tr>
                    <ul class="list-group">
                        <li class="list-group-item"><b><span class="ticket-span">RE: </span><span class="ticket-span">{{ $ticket->issue_title }}</span></b></li>
                        <li class="list-group-item"><span class="ticket-span"><b>Submitter: </b></span><span class="ticket-span">{{ $ticket->user->first_name }} {{ $ticket->user->last_name }}</span></li>
                        <li class="list-group-item"><span class="ticket-span"><b>Email: </b></span><span class="ticket-span">{{ $ticket->user->email }}</span></li>
                        <li class="list-group-item"><span class="ticket-span"><b>OS: </b></span><span class="ticket-span">{{ $ticket->operating_system }}</span></li>
                    </ul>
                </tr>
                <tr>
                    <th>Description: </th>
                </tr>
                <tr>
                    <td>{{$ticket->issue_description}}</td>
                </tr>
            </table>

        </div>
        <br>
        <div class="display-comment-section">
            <div class="title">Comments</div>
            <hr>
            @if($comments->isEmpty())
                <p>No comments have been posted!</p>
            @endif
            @foreach($comments as $comment)
                <div class="comment">
                    <b>Posted: {{$comment->created_at}} by Staff</b>
                    <br>
                    <p><i>{{ $comment->comment_text }}</i></p>
                    <hr>
                </div>
            @endforeach
        </div>

    </div>
@endsection