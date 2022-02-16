@extends('layout')
@section('content')
    @if($messages->isNotEmpty())
        <br>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">E-mail</th>
                <th scope="col">Message</th>
                <th scope="col">Create date</th>
            </tr>
            </thead>
            <tbody>
            @foreach($messages as $message)
            <tr>
                <th scope="row">{{$message->id}}</th>
                <td>{{$message->name}}</td>
                <td>{{$message->email}}</td>
                <td>{{$message->message}}</td>
                <td>{{$message->created_at}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    @endif
@endsection
