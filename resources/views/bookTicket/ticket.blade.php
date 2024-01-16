@extends('layouts.booking')
@section('content')
    <div class="ticket">
        <div class="stub">
            <div class="top">
                <span class="admit">{{ $data->name ?? 'Admit'}}</span>
                <span class="line"></span>
                <span class="admit">
                    Ticket ID
                    <span>{{ $data->ticket_id ?? 'ABC123'}}</span>
                </span>
            </div>
            <div class="number">{{ $data->number_of_members ?? '0'}}</div>
            <div class="invite">
                Tickets for you
            </div>
        </div>
        <div class="check">
            <div class="big">
                Your <br> Ticket
            </div>
            <div class="number">#1</div>
            <div class="info">
                <section>
                    <div class="title">Date</div>
                    <div style="margin-right: 5px">{{ $data->date ?? '00/00/0000'}}</div>
                </section>
                <section>
                    <div class="title">Time</div>
                    <div > {{ $data->time ?? '00:00'}}</div>
                </section>
            </div>
        </div>
    </div>
@endsection
