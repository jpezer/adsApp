@extends('layouts.master')

@section('main')
    <h1 class="display-4 text-center">All Ads</h1>
    <div class="row">
        <div class="col-3 bg-light">
            <ul class="list-group list-group-flush">
                @foreach ($categories as $category)
                    <li class="list-group-item bg-light">
                        <a href="{{ route('welcome') }}?cat={{$category->name}}">{{ $category->name }}</a>
                    </li>
                @endforeach
                <li class="list-group-item bg-light">
                    <form action="{{ route('welcome') }}" method="GET">
                        <select name="type" class="form-control">
                            <option value=""></option>
                            <option value="lower" {{(isset(request()->type) && request()->type == 'lower') ? 'selected' : ''}}>Price(lowest first)</option>
                            <option value="upper" {{(isset(request()->type) && request()->type == 'upper') ? 'selected' : ''}}>Price(highest first)</option>
                        </select>
                        <button type="submit" class="btn btn-success form-control mt-2">Search</button>
                    </form>
                </li>
            </ul>
        </div>
        <div class="col-9">
            <div class="row">
                @foreach ($all_ads as $ad)
                    <div class="col-4">
                        <div class="card mb-3">
                            <div class="card-body">
                                <img src="/images/{{ $ad->image1 }}" class="img-fluid" style="width: 100%;height:130px">
                            </div>
                            <div class="card-footer">
                                <a href="{{ route('singleAd',['id'=>$ad->id]) }}" class="btn btn-info mb-1" style="width: 100%">{{ $ad->title }}</a>
                                    <a href="" class="btn btn-info btn-sm float-right">{{ $ad->price }} $</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection