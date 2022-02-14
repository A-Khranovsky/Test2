@extends('layout')
@section('content')
    @isset($messages)
        @foreach($messages as $message)
            <div class="card w-80 m-3 border-dark">
                <div class="card-header">
                    <h5 class="card-title">
                        {{$message->id}}
                    </h5>
                </div>
                <div class="card-body">
                    <p class="card-text">{{$message->message}}</p>
                </div>
            </div>
        @endforeach
    @endisset
@endsection
