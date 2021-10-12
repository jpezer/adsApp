@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-4">
            @include('home.partials.sidebar')
        </div>
        <div class="col-8">
            <h2>All Messages</h2>

            <ul class="list-group">
                @foreach ($messages as $message)
                    <li class="list-group-item mb-2">
                        <p>Ad: {{ $message->ad->title }} <span class="float-right">{{ $message->created_at->format('d M Y') }}</span> </p>
                        <p>From: {{$message->sender->name }}</p>
                        <p><strong>{{$message->text}}</strong></p>
                        <a href="{{ route('home.replay',['sender_id'=>$message->sender->id,'ad_id'=>$message->ad_id]) }}" class="btn btn-primary btn-sm">Replay</a>
                        <a href="{{ 'deleteMsg/'.$message->id }}" class="btn btn-danger btn-sm ml-3">Delete</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
