@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-4">
            @include('home.partials.sidebar')
        </div>
        <div class="col-8">
            
            <div class="row p-3">
                @if (isset($single_ad->image1))
                    <div class="col-6">
                        <img id="main-image" src="/images/{{ $single_ad->image1 }}" class="img-fluid mb-2 border border-primary" style="width: 100%">
                    </div>
                @endif
                @if (isset($single_ad->image2))
                    <div class="col-6">
                        <img src="/images/{{ $single_ad->image2 }}" class="secondary img-fluid mb-2 border border-primary" style="width: 100%">
                    </div> 
                @endif
                @if (isset($single_ad->image3))
                    <div class="col-6">
                        <img src="/images/{{ $single_ad->image3 }}" class="secondary img-fluid mb-2 border border-primary" style="width: 100%">
                    </div> 
                @endif
                  
            </div>
            <div class="col-12 mt-5">
                <h1 class="display-5">Title: {{ $single_ad->title }}</h1>
                <p><strong>Description:</strong> {{ $single_ad->title }}</p>
                <p><strong>Price:</strong> {{ $single_ad->price }}$</p>
                <p><strong>Category:</strong> {{ $single_ad->category->name }}</p>
                <p><strong>Views:</strong> {{ $single_ad->views }}</p>
                
            </div>
        </div>
    </div>
</div>
@endsection




{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-4">
            @include('home.partials.sidebar')
        </div>
        <div class="col-8">
            <h4>{{ $single_ad -> title }}</h4>
            <div class="row p-3">
                @if (isset($single_ad->image1))
                    <div class="col-8 offset-2">
                        <img id="main-image" src="/images/{{ $single_ad->image1 }}" class="img-fluid" style="width: 100%">
                    </div>
                @endif
                <div class="col-6 offset-3">
                    <div class="row">
                        @if (isset($single_ad->image2))
                            <div class="col-6">
                                <img src="/images/{{ $single_ad->image2 }}" class="secondary img-fluid">
                            </div> 
                        @endif
                        @if (isset($single_ad->image3))
                            <div class="col-6">
                                <img src="/images/{{ $single_ad->image3 }}" class="secondary img-fluid">
                            </div> 
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <a href="" class="btn btn-danger">Delete</a>
            </div>
        </div>
    </div>
</div>
@endsection


@section('page-scripts')
    <script>
        let secondary = document.querySelectorAll('.secondary');
        for (let i = 0; i < secondary.length; i++) {
            const sec = secondary[i];
            sec.addEventListener('click',function(){
                let mainImg = document.querySelector('#main-image');
                let mainImgSrc = mainImg.getAttribute('src');
                let src = this.getAttribute('src');
                mainImg.setAttribute('src',src);
                this.setAttribute('src',mainImgSrc); //this označava sliku na koju smo kliknuli
            });
        }
    </script>
@endsection --}}