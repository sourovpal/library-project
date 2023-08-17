@extends('frontend.layouts.master')
@section('title')
    {{$book->book_name}}
    @endsection

@section('banner')
    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url({{asset('assets/images/bg_1.jpg')}}">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-7">
                    <h2 class="mb-0">{{$book->book_name}}</h2>
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
        <a href="{{route('pages.books')}}">Books</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Books Details</span>
    </div>
</div>

<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <img src="{{asset('')}}{{$book->book_image}}" alt="Image" class="img-fluid img img-thumbnail">
            </div>
            <div class="col-lg-9 ml-auto align-self-center">
                <p class="text-justify">{{$book->book_description}}</p>

                <p>
                    <a href="{{$book->book_url}}" class="btn btn-primary rounded px-4">Enroll Now</a>
                </p>

            </div>
        </div>
    </div>
</div>
@endsection