<html lang="en"><head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Home</title>
    

    <!--vendors styles-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap CSS / Color Scheme -->
    <link rel="stylesheet" href="https://app.powermanlocals.com/frontend/css/index.css" id="theme-color">
</head>
<body style="background:url(https://cdn.pixabay.com/photo/2016/01/19/01/42/library-1147815_1280.jpg); background-size:cover;background-repeat: no-repeat;height:100vh;">

<!--navigation-->
<section class="smart-scroll">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-md navbar-dark">
            <a class="navbar-brand heading-black" href="index.html">
                Manage Library
            </a>
            <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-th-large"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mx-0">
                        @auth('web')
                        <form action="{{route('logout')}}" method="post">
                            @csrf
                            <button style="background: transparent;outline: none;cursor: pointer;" 
                            class="border-0 background-transprant nav-link page-scroll d-flex flex-row align-items-center text-primary">
                                <i class="fa fa-lock mr-2" style="margin-top: 6px;font-size: 20px;"></i>
                                Sign Out
                            </button>
                        </form>
                        @endauth
                        @guest
                            <a class="nav-link page-scroll d-flex flex-row align-items-center text-primary" href="{{route('login')}}">
                                <i class="fa fa-lock mr-2" style="margin-top: 6px;font-size: 20px;"></i>
                                Sign In
                            </a>
                        @endauth
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</section>

<!--hero header-->
<section class="py-7 py-md-0 bg-hero" id="home">
    <div class="container">
        <div class="row vh-md-100">
            <div class="col-md-8 col-sm-10 col-12 mx-auto my-auto text-center">
                <h1 class="heading-black text-capitalize">Welcome!</h1>
                <p class="lead py-3">If you are an Student of This Library, You can sign in here.</p>
                @auth('web')
                <a class="btn btn-primary d-inline-flex flex-row align-items-center" href="{{route('login')}}">
                    Go To Dashboard
                    <i class="fa fa-arrow-right ml-3"></i>
                </a>
                @endauth
                @guest
                <a class="btn btn-primary d-inline-flex flex-row align-items-center" href="{{route('login')}}">
                    Get started now
                    <i class="fa fa-arrow-right ml-3"></i>
                </a>
                @endguest
            </div>
        </div>
    </div>
</section>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body></html>