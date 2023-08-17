@extends('frontend.layouts.master')
@section('banner')
    <section class="site-blocks-cover py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="banner_section owl-carousel card">
                        <?php foreach ($sliders as $slider) { ?>
                            <div class="banner_items" style="background-image: url({{asset($slider->image)}});">
                            </div>
                        <?php } ?>
                        
                    </div>
                </div>
                <div class="col-md-3 card py-2">
                    <h5 class="pb-2 border-bottom">New Resources and Services</h5>
                    <div class="resources owl-carousel ">
                        <?php foreach ($sliders as $slider) { ?>
                            <div class="resources_items">
                                <img src="{{asset($slider->image)}}" class="img img-fluid" alt="">
                                <h5 class="mt-3">{{$slider->title}}</h5>
                                <p>{{$slider->description}}</p>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>

    </section>
    @endsection
@section('main-content')

    <div class="site-section bg-light">
        <div class="container">
            <div class="row">
                <!-- <div class="col-lg-4">
                    <img src="./images/about.jpg" class="img img-fluid shadow img-thumbnail" alt="">
                </div> -->
                <div class="col-lg-9">
                    <div class="card p-3">
                        <h2 class="section-title-style-2">
                            <span>{{$about->title}}</span>
                        </h2>
                        <p class="lead">
                            <p>{{$about->description}}</p>
                            <p><a href="#">Read more</a></p>
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 card py-2">
                    <h5 class="pb-2 border-bottom">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Member Registration</a></li>
                        <li><a href="#">Online Catalogue</a></li>
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">E-Resources</a></li>
                        <li><a href="#">Inst. Repository</a></li>
                        <li><a href="#">Liberation War Corner</a></li>
                        <li><a href="#">Inst. Repository</a></li>
                        <li><a href="#">Liberation War Corner</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <div class="site-section search_section">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="card shadow p-5 w-100">
                    <div class="col-lg-12 mb-3">
                        <h3 class="">
                            <span>Search and Browse Library Resources</span>
                        </h3>
                        <!-- <hr> -->
                    </div>

                    <div class="m-auto col-md-9-col-sm-12 col-xs-12">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                   aria-controls="home" aria-selected="true">
                                    <i class="icofont-book-alt"></i>
                                    Libra Catalog
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="advanced-tab" data-toggle="tab" href="#advanced" role="tab"
                                   aria-controls="advanced" aria-selected="false">
                                    <i class="icofont-search-stock"></i>
                                    Featured Search
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="institutional-tab" data-toggle="tab" href="#institutional"
                                   role="tab" aria-controls="institutional" aria-selected="false">
                                    <i class="icofont-notebook"></i>
                                    Repository
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="scholar-tab" data-toggle="tab" href="#scholar" role="tab"
                                   aria-controls="scholar" aria-selected="false">
                                    <i class="icofont-search-folder"></i>
                                    Google Scholar
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="website-tab" data-toggle="tab" href="#website" role="tab"
                                   aria-controls="website" aria-selected="false">
                                    <i class="icofont-web"></i>
                                    Website
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active card" id="home" role="tabpanel"
                                 aria-labelledby="home-tab">
                                <div class="p-5">
                                    <div class="input-group mb-2">
                                        <select name="" id="" class="form-control">
                                            <option value="">Library Catalog</option>
                                            <option value="">Title</option>
                                            <option value="">Author</option>
                                            <option value="">Subject</option>
                                            <option value="">ISBN</option>
                                            <option value="">Series</option>
                                            <option value="">Call Number</option>
                                        </select>
                                        <input type="text" class="form-control" placeholder="Search..."
                                               aria-label="Search..." aria-describedby="button-addon2">
                                        <button class="btn btn-primary" type="button">Search</button>
                                    </div>
                                    <h6>
                                        <span><a href="#">Advanced Search</a> | </span>
                                        <span><a href="#">Visit Online Catalogue</a></span>
                                    </h6>
                                    <p class="mb-0">
                                    <span>
                                        <a href="http://worldwidescience.org/">WorldWideScience:</a>Search 106 Open
                                        Access
                                        Scientific Database |
                                        <a href="https://worldwidescience.org/about.html" target="_blank">About
                                            WorldWideScience</a>
                                    </span>
                                    </p>
                                </div>
                            </div>
                            <div class="tab-pane fade card" id="advanced" role="tabpanel" aria-labelledby="advanced-tab">
                                <div class="p-5">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search..."
                                               aria-label="Search..." aria-describedby="button-addon2">
                                        <button class="btn btn-primary" type="button">Button</button>
                                        <h6 class="px-5 font-weight-600"><a href="#">Advanced Search</a></h6>
                                    </div>
                                    <p class="mb-0 mt-3"><small>Online research tool that “pulls together” almost all of our
                                            Library resources (books, e-books, journal articles, etc.) using a single search
                                            box.</small></p>
                                </div>
                            </div>

                            <div class="tab-pane fade card" id="institutional" role="tabpanel"
                                 aria-labelledby="institutional-tab">
                                <div class="p-5">
                                    <p class="mb-1 text-left"><small>Search for institutional resources</small></p>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search..."
                                               aria-label="Search..." aria-describedby="button-addon2">
                                        <button class="btn btn-primary" type="button">Button</button>
                                        <h6 class="px-3"><a href="#">Browse Institutional Repository</a></h6>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade card" id="scholar" role="tabpanel" aria-labelledby="scholar-tab">
                                <div class="p-5">
                                    <div class="input-group">
                                        <img src="{{asset('assets/images/scholar.png')}}" style="height:38px; margin-right:15px" alt="">
                                        <input type="text" class="form-control" placeholder="Search..."
                                               aria-label="Search..." aria-describedby="button-addon2">
                                        <button class="btn btn-primary" type="button">Button</button>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade card" id="website" role="tabpanel" aria-labelledby="website-tab">
                                <div class="p-5">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search..."
                                               aria-label="Search..." aria-describedby="button-addon2">
                                        <button class="btn btn-primary" type="button">Button</button>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>


            </div>
        </div>
    </div>




    <section class="site-section">
        <div class="container">

            <div class="row justify-content-center text-center">
                <div class="col-lg-7">
                    <h2 class="section-title mb-3">
                        <span>Featured Newly Arrived Books</span>
                    </h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis fugit hic explicabo ratione</p>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="owl-slide-5 owl-carousel">
                        <?php foreach ($books as $book) { ?>   
                        <div class="course-1-item">
                            <figure class="thumnail">
                                <a href="{{route('pages.books.single',$book->id)}}">
                                    <img src="{{asset('')}}{{$book->book_image}}" alt="Image" class="img-fluid">
                                </a>
                            </figure>
                        </div>
                       <?php } ?>
                    </div>

                </div>
            </div>

        </div>
    </section>


    <div class="section-bg style-1" style="background-image: url({{asset('assets/images/hero_1.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
                    <span class="icon flaticon-mortarboard"></span>
                    <h3>Our Philosphy</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat quis
                        delectus ea? Dolore, amet reprehenderit.</p>
                </div>
                <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
                    <span class="icon flaticon-school-material"></span>
                    <h3>Academics Principle</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat quis
                        delectus ea?
                        Dolore, amet reprehenderit.</p>
                </div>
                <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
                    <span class="icon flaticon-library"></span>
                    <h3>Key of Success</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat quis
                        delectus ea?
                        Dolore, amet reprehenderit.</p>
                </div>
            </div>
        </div>
    </div>


    <div class="news-updates">
        <div class="container">

            <div class="row">
                <div class="col-lg-9">
                    <div class="section-heading">
                        <h2 class="text-black">News &amp; Updates</h2>
                        <a href="#">Read All News</a>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="post-entry-big">
                                <a href="news-single.php" class="img-link"><img src="{{asset('assets/images/blog_large_1.jpg')}}" alt="Image"
                                                                                class="img-fluid"></a>
                                <div class="post-content">
                                    <div class="post-meta">
                                        <a href="#">June 6, 2021</a>
                                        <span class="mx-1">/</span>
                                        <a href="#">Admission</a>, <a href="#">Updates</a>
                                    </div>
                                    <h3 class="post-heading"><a href="news-single.php">Campus Camping and Learning
                                            Session</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="post-entry-big horizontal d-flex mb-4">
                                <a href="news-single.php" class="img-link mr-4"><img src="{{asset('assets/images/blog_1.jpg')}}" alt="Image"
                                                                                     class="img-fluid"></a>
                                <div class="post-content">
                                    <div class="post-meta">
                                        <a href="#">June 6, 2021</a>
                                        <span class="mx-1">/</span>
                                        <a href="#">Admission</a>, <a href="#">Updates</a>
                                    </div>
                                    <h3 class="post-heading"><a href="news-single.php">Campus Camping and Learning
                                            Session</a></h3>
                                </div>
                            </div>

                            <div class="post-entry-big horizontal d-flex mb-4">
                                <a href="news-single.php" class="img-link mr-4"><img src="{{asset('assets/images/blog_2.jpg')}}" alt="Image"
                                                                                     class="img-fluid"></a>
                                <div class="post-content">
                                    <div class="post-meta">
                                        <a href="#">June 6, 2021</a>
                                        <span class="mx-1">/</span>
                                        <a href="#">Admission</a>, <a href="#">Updates</a>
                                    </div>
                                    <h3 class="post-heading"><a href="news-single.php">Campus Camping and Learning
                                            Session</a></h3>
                                </div>
                            </div>

                            <div class="post-entry-big horizontal d-flex mb-4">
                                <a href="news-single.php" class="img-link mr-4"><img src="{{asset('assets/images/blog_1.jpg')}}" alt="Image"
                                                                                     class="img-fluid"></a>
                                <div class="post-content">
                                    <div class="post-meta">
                                        <a href="#">June 6, 2021</a>
                                        <span class="mx-1">/</span>
                                        <a href="#">Admission</a>, <a href="#">Updates</a>
                                    </div>
                                    <h3 class="post-heading"><a href="news-single.php">Campus Camping and Learning
                                            Session</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="section-heading">
                        <h2 class="text-black">Campus Videos</h2>
                        <a href="#">View All Videos</a>
                    </div>
                    <a href="https://vimeo.com/45830194" class="video-1 mb-4" data-fancybox="" data-ratio="2">
                    <span class="play">
                        <span class="icon-play"></span>
                    </span>
                        <img src="{{asset('assets/images/course_5.jpg')}}" alt="Image" class="img-fluid">
                    </a>
                    <a href="https://vimeo.com/45830194" class="video-1 mb-4" data-fancybox="" data-ratio="2">
                    <span class="play">
                        <span class="icon-play"></span>
                    </span>
                        <img src="{{asset('assets/images/course_5.jpg')}}" alt="Image" class="img-fluid">
                    </a>
                </div>
            </div>
        </div>
    </div>
    
@endsection