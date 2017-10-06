<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ticket;
use App\Comment;
use Auth;

class TicketController extends Controller
{

    public function index() {
        $tickets = Ticket::where('user_id', '=', Auth::user()->id)->get();
        return view('tickets.index', compact('tickets'));
    }

    public function create() {
        return view('tickets.create');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'issue_title' => 'required',
            'operating_system' => 'required',
            'issue_description' => 'required',
        ]);
        $requestAll = $request->all();

        $ticket = new Ticket;
        $ticket->user_id = Auth::user()->id;
        $ticket->issue_title = $requestAll['issue_title'];
        $ticket->operating_system = $requestAll['operating_system'];
        $ticket->issue_description = $requestAll['issue_description'];
        $ticket->priority = "Low";
        $ticket->escalation_level = "1";
        $ticket->status = "Pending";
        $ticket->save();

        return redirect()->route('tickets.index') ->with('success', 'Ticket successfully Submitted!');
    }

    public function show($id) {
        $ticket = Ticket::find($id);
        $comments = Comment::where('ticket_id', $id)->get();
        return view('tickets.show', compact('ticket', 'comments'));
    }

    public function edit($id) {
        $ticket = Ticket::find($id);
        return view('tickets.edit', compact('ticket'));
    }

    public function update(Request $request, $id) {
        $ticket = Ticket::findOrFail($id);

        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'issue_title' => 'required',
            'operating_system' => 'required',
            'issue_description' => 'required',
            'status' => 'required',
        ]);

        $requestAll = $request->all();

        if(!empty($requestAll['comment_text'])) {
            $comment = new Comment;
            $comment->ticket_id = $id;
            $comment->comment_text = $request['comment_text'];
            $comment->save();
        }

        $ticket->issue_title = $requestAll['issue_title'];
        $ticket->operating_system = $requestAll['operating_system'];
        $ticket->issue_description = $requestAll['issue_description'];
        $ticket->status = $requestAll['status'];
        $ticket->save();

        return redirect()->route('staff') ->with('success', 'Ticket successfully Updated!');

    }

    public function destroy($id) {
        Comment::where('ticket_id', $id)->delete();
        Ticket::findOrFail($id)->delete();
        return redirect()->route('staff') ->with('success', 'Ticket successfully Deleted!');

    }
}
