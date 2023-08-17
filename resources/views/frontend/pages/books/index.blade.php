@extends('frontend.layouts.master')

@section('banner')
    <div class="site-wrap">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>

        <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url({{asset('assets/images/bg_1.jpg')}})">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-lg-7">
                        <h2 class="mb-0">Our Books</h2>
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
            <a href="index.html">Home</a>
            <span class="mx-3 icon-keyboard_arrow_right"></span>
            <span class="current">Our Books</span>
        </div>
    </div>


    <div class="site-section">
        <div class="container">
            <div class="grid_5x">
                <?php foreach ($books as $book) {?>
                <div class="grid_items">
                    <div class="course-1-item">
                        <figure class="thumnail">
                            <a href="{{route('pages.books.single',$book->id)}}">
                                <img src="{{asset('')}}{{$book->book_image}}" alt="Image" class="img-fluid">
                            </a>
                            <h5>{{$book->book_name}}</h5>
                        </figure>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>

</div>
@endsection