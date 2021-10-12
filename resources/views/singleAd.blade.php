@extends('layouts.master')
@section('main')
    <div class="row">
        @if (isset($singleAd->image1))
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <img src="/images/{{ $singleAd->image1 }}" class="img-fluid" style="width: 100%">
                    </div>
                </div>
            </div>
        @endif

        @if (isset($singleAd->image2))
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <img src="/images/{{ $singleAd->image2 }}" class="img-fluid" style="width: 100%">
                    </div>
                </div>
            </div>
        @endif

        @if (isset($singleAd->image3))
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <img src="/images/{{ $singleAd->image3 }}" class="img-fluid" style="width: 100%">
                    </div>
                </div>
            </div>
        @endif
        <div class="col-12 mt-5">
            <h1 class="display-5">Title: {{ $singleAd->title }}</h1>
            <p><strong>Description:</strong> {{ $singleAd->title }}</p>
            <p><strong>Price:</strong> {{ $singleAd->price }}$</p>
            <p><strong>Category:</strong> {{ $singleAd->category->name }}</p>
            <p><strong>Views:</strong> {{ $singleAd->views }}</p>
            <button class="btn btn-primary">Owner: {{ $singleAd->user->name }}</button>
        </div>
    </div>
    @if (auth()->check() && auth()->user()->id !== $singleAd->user_id)
        <div class="row mt-3">
            <div class="col-6">
                <form action="{{ route('sendMessage', ['id'=>$singleAd->id])}}" method="POST">
                    @csrf
                    <textarea name="msg" class="form-control" placeholder="Send message to {{ $singleAd->user->name }}" cols="30" rows="5"></textarea><br>
                    <button type="submit" class="btn btn-primary form-control mb-3">Send</button>
                </form>

                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
            </div>
        </div>
    @endif
    
@endsection