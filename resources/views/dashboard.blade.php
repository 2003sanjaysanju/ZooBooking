<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
@php
    $booking = App\MOdels\Booking::get();
@endphp
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Ticket ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Date</th>
                            <th scope="col">Time</th>
                            <th scope="col">Number Of Members</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($booking as  $value)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <th scope="row">{{$value->ticket_id}}</th>
                                <th scope="row">{{$value->name}}</th>
                                <td>{{$value->email}}</td>
                                <td>{{$value->phone}}</td>
                                <td>{{$value->date}}</td>
                                <td>{{$value->time}}</td>
                                <td>{{$value->number_of_members}}</td>
                          </tr>
                            @endforeach
                        </tbody>
                      </table> 
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
