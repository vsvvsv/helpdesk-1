@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Open Tickets

                    <a href="{{ route('ticket.create') }}" class="btn btn-primary btn-xs pull-right">Open New Ticket</a>
                </div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Subject</th>
                                <th>Last Replier</th>
                                <th>Last Updated</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tickets as $ticket)
                            <tr>
                                <td>
                                    <a href="{{ route('ticket.show', $ticket->id) }} ">
                                        {{ $ticket->id }}
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('ticket.show', $ticket->id) }} ">
                                        {{ $ticket->subject }}
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('ticket.show', $ticket->id) }} ">
                                        {{ $ticket->last_replier }}
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('ticket.show', $ticket->id) }} ">
                                        {{ $ticket->last_reply }}
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection