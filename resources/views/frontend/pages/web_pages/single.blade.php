@extends('frontend.layouts.master')
@section('title')
    {{$web->title}}
    @endsection

@section('banner')
    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url({{asset($web->image)}})">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-7">
                    <h2 class="mb-0">{{$web->title}}</h2>
                    <p>“A room without books is like a body without a soul.”
                        ― Marcus Tullius Cicero</p>
                </div>
            </div>
        </div>
    </div>
    @endsection
@section('main-content')


<div class="custom-breadcrumns border-bottom">
    <div class="container">
        <a href="{{route('index')}}">Home</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <a href="#">Pages</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">{{$web->title}}</span>
    </div>
</div>

<div class="container mb-5">
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <p class="text-justify">{!!$web->description!!}</p>

        </div>
    </div>
</div>
@endsection