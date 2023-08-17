@extends('frontend.layouts.master')

@section('left-content')
<div class="section single-movie-details mt-3" id="single-movie-details">
    <div class="row shadow-sm bg-white">
        <div class="col-sm-4 single-movie-poster">
            <div class="movie-poster">
                <img src="{{asset('assets/images/avengers-endgame.jpg')}}">
            </div>
        </div>
        <div class="col-sm-8">
            <div class="single-movie-title text-center mt-3">
                Avengers Endgame 2020 Full Subtitle
            </div>
            <div class="row px-20">
                <div class="col-sm-4 text-center">
                    <div class="year movie-info font-size-33 nexa-font-bold">2021</div>
                    <div class="year-text">year</div>
                </div>
                <div class="col-sm-4 text-center">
                    <div class="video-length movie-info font-size-33 nexa-font-bold">96</div>
                    <div class="video-length-text">min</div>
                </div>
                <div class="col-sm-4 text-center">
                    <div class="imdb-rating movie-info font-size-33 nexa-font-bold">6.4</div>
                    <div class="imdb-rating-text">IMDB Rating</div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="producer px-20 my-2">
                        <span class="producer-name float-left">Khan Anwar, kabir singh</span> <span class="producer-name float-right">Kamal khan, Jabir khan</span>
                    </div>
                </div>
            </div>  
            <div class="row">
                <div class="col-sm-12">
                    <div class="movie-description mt-2">
                        <p class="description-text">Nulla nunc enim, posuere a laoreet aliquet, ultricies quis metus. Etiam tincidunt odio a tortor scelerisque, at accumsan velit pellentesque. Vivamus elementum sodales nulla ut iaculis. Morbi dignissim magna metus, ut ornare felis tempor accumsan. Maecenas a dolor ultricies, mollis lorem non, gravida dolor. Nulla et purus tincidunt, pretium massa at, luctus nisl. Morbi vel justo id erat convallis faucibus id vel orci. Vivamus ut arcu nisl.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="section mt-3">
        <div class=" text-center">
            <div class="ads-area-top">
                <img src="{{asset('assets/image/ads-image-h.png')}}" alt="" class="inline-h-image">
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="section all-subtitle mt-3">
        <div class="section-title">
            All Subs Download <i class="fas fa-arrow-right text-danger"></i>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-2">Rating</div>
    <div class="col-sm-5">Movie Title</div>
    <div class="col-sm-3">Translator/Uploader</div>
    <div class="col-sm-2"></div>
</div>
<div class="subtitle-items">
    <div class="row bg-white shadow-sm mt-2 px-2 py-2 rounded">
        <div class="subtitle-display-rating">
            <div class="rating-square">
                <div class="font-weight-bold text-center">
                    7.2
                </div>
            </div>
        </div>
        <div class="subtitle-display-title">
            <div class="row no-gutter">
                <div class="subtitle-title font-font-weight-900 font-size-20 pl-2">True loves never die 2020</div>
            </div>
            <div class="row no-gutter font-size-14 pl-2">
                <span class="mx-1 subtitle-type">DVD RIP</span>
                <span class="mx-1 subtitle-size">SIZE: <span class="subtitle-size-text">24kb</span></span>
                <span class="mx-1 subtitle-language">LANG: <span class="subtitle-type">ENG</span></span>
                <span class="mx-1 subtitle-format">FORMAT: <span class="subtitle-format">SRT</span></span>
            </div>
        </div>
        <div class="subtitle-display-translator">
            <span class="tranlator-name">TAHMID BORHAN</span>
            <span class="tranlator-base">
                <img src="{{asset('assets/images/verified-icon.png')}}">
            </span>
        </div>
        <div class="subtitle-display-download">
            <button class="button-square bg-danger border-0">
                <div class="font-weight-bold text-center">
                    <i class="fas fa-download text-white font-size-26"></i>
                </div>
            </button>
        </div>
    </div>
    <div class="row bg-white shadow-sm mt-2 px-2 py-2 rounded">
        <div class="subtitle-display-rating">
            <div class="rating-square">
                <div class="font-weight-bold text-center">
                    7.2
                </div>
            </div>
        </div>
        <div class="subtitle-display-title">
            <div class="row no-gutter">
                <div class="subtitle-title font-font-weight-900 font-size-20 pl-2">True loves never die 2020</div>
            </div>
            <div class="row no-gutter font-size-14 pl-2">
                <span class="mx-1 subtitle-type">DVD RIP</span>
                <span class="mx-1 subtitle-size">SIZE: <span class="subtitle-size-text">24kb</span></span>
                <span class="mx-1 subtitle-language">LANG: <span class="subtitle-type">ENG</span></span>
                <span class="mx-1 subtitle-format">FORMAT: <span class="subtitle-format">SRT</span></span>
            </div>
        </div>
        <div class="subtitle-display-translator">
            <span class="tranlator-name">TAHMID BORHAN</span>
            <span class="tranlator-base">
                <img src="{{asset('assets/images/verified-icon.png')}}">
            </span>
        </div>
        <div class="subtitle-display-download">
            <button class="button-square bg-danger border-0">
                <div class="font-weight-bold text-center">
                    <i class="fas fa-download text-white font-size-26"></i>
                </div>
            </button>
        </div>
    </div>
    <div class="row bg-white shadow-sm mt-2 px-2 py-2 rounded">
        <div class="subtitle-display-rating">
            <div class="rating-square">
                <div class="font-weight-bold text-center">
                    7.2
                </div>
            </div>
        </div>
        <div class="subtitle-display-title">
            <div class="row no-gutter">
                <div class="subtitle-title font-font-weight-900 font-size-20 pl-2">True loves never die 2020</div>
            </div>
            <div class="row no-gutter font-size-14 pl-2">
                <span class="mx-1 subtitle-type">DVD RIP</span>
                <span class="mx-1 subtitle-size">SIZE: <span class="subtitle-size-text">24kb</span></span>
                <span class="mx-1 subtitle-language">LANG: <span class="subtitle-type">ENG</span></span>
                <span class="mx-1 subtitle-format">FORMAT: <span class="subtitle-format">SRT</span></span>
            </div>
        </div>
        <div class="subtitle-display-translator">
            <span class="tranlator-name">TAHMID BORHAN</span>
            <span class="tranlator-base">
                <img src="{{asset('assets/images/verified-icon.png')}}">
            </span>
        </div>
        <div class="subtitle-display-download">
            <button class="button-square bg-danger border-0">
                <div class="font-weight-bold text-center">
                    <i class="fas fa-download text-white font-size-26"></i>
                </div>
            </button>
        </div>
    </div>
    <div class="row bg-white shadow-sm mt-2 px-2 py-2 rounded">
        <div class="subtitle-display-rating">
            <div class="rating-square">
                <div class="font-weight-bold text-center">
                    7.2
                </div>
            </div>
        </div>
        <div class="subtitle-display-title">
            <div class="row no-gutter">
                <div class="subtitle-title font-font-weight-900 font-size-20 pl-2">True loves never die 2020</div>
            </div>
            <div class="row no-gutter font-size-14 pl-2">
                <span class="mx-1 subtitle-type">DVD RIP</span>
                <span class="mx-1 subtitle-size">SIZE: <span class="subtitle-size-text">24kb</span></span>
                <span class="mx-1 subtitle-language">LANG: <span class="subtitle-type">ENG</span></span>
                <span class="mx-1 subtitle-format">FORMAT: <span class="subtitle-format">SRT</span></span>
            </div>
        </div>
        <div class="subtitle-display-translator">
            <span class="tranlator-name">TAHMID BORHAN</span>
            <span class="tranlator-base">
                <img src="{{asset('assets/images/verified-icon.png')}}">
            </span>
        </div>
        <div class="subtitle-display-download">
            <button class="button-square bg-danger border-0">
                <div class="font-weight-bold text-center">
                    <i class="fas fa-download text-white font-size-26"></i>
                </div>
            </button>
        </div>
    </div>
    <div class="row bg-white shadow-sm mt-2 px-2 py-2 rounded">
        <div class="subtitle-display-rating">
            <div class="rating-square">
                <div class="font-weight-bold text-center">
                    7.2
                </div>
            </div>
        </div>
        <div class="subtitle-display-title">
            <div class="row no-gutter">
                <div class="subtitle-title font-font-weight-900 font-size-20 pl-2">True loves never die 2020</div>
            </div>
            <div class="row no-gutter font-size-14 pl-2">
                <span class="mx-1 subtitle-type">DVD RIP</span>
                <span class="mx-1 subtitle-size">SIZE: <span class="subtitle-size-text">24kb</span></span>
                <span class="mx-1 subtitle-language">LANG: <span class="subtitle-type">ENG</span></span>
                <span class="mx-1 subtitle-format">FORMAT: <span class="subtitle-format">SRT</span></span>
            </div>
        </div>
        <div class="subtitle-display-translator">
            <span class="tranlator-name">TAHMID BORHAN</span>
            <span class="tranlator-base">
                <img src="{{asset('assets/images/verified-icon.png')}}">
            </span>
        </div>
        <div class="subtitle-display-download">
            <button class="button-square bg-danger border-0">
                <div class="font-weight-bold text-center">
                    <i class="fas fa-download text-white font-size-26"></i>
                </div>
            </button>
        </div>
    </div>
</div>
<div class="row">
    <div class="section mt-3">
        <div class=" text-center">
            <div class="ads-area-top">
                <img src="{{asset('assets/image/ads-image-h.png')}}" alt="" class="inline-h-image">
            </div>
        </div>
    </div>
</div>
<div class="section mt-3">
    <div class="row">
        <div class="section-title">
            Related Movies
        </div>
    </div>
    <div class="row">
        <div class="movie-grid col-sm-3">
            <div class="movie-poster">
                <img src="{{asset('assets/images/tahmid.jpg')}}" alt="" class="movie-image">
            </div>
            <div class="movie-title">
                Super hero 2
            </div>
            <div class="grid-movie-meta font-size-12">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="grid-movie-year">
                            2020
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="grid-movie-genre">
                            <span class="genres-name">Action | Fantasy</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="movie-grid col-sm-3">
            <div class="movie-poster">
                <img src="{{asset('assets/images/tahmid.jpg')}}" alt="" class="movie-image">
            </div>
            <div class="movie-title">
                Super hero 2
            </div>
            <div class="grid-movie-meta font-size-12">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="grid-movie-year">
                            2020
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="grid-movie-genre">
                            <span class="genres-name">Action | Fantasy</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="movie-grid col-sm-3">
            <div class="movie-poster">
                <img src="{{asset('assets/images/tahmid.jpg')}}" alt="" class="movie-image">
            </div>
            <div class="movie-title">
                Super hero 2
            </div>
            <div class="grid-movie-meta font-size-12">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="grid-movie-year">
                            2020
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="grid-movie-genre">
                            <span class="genres-name">Action | Fantasy</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="movie-grid col-sm-3">
            <div class="movie-poster">
                <img src="{{asset('assets/images/tahmid.jpg')}}" alt="" class="movie-image">
            </div>
            <div class="movie-title">
                Super hero 2
            </div>
            <div class="grid-movie-meta font-size-12">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="grid-movie-year">
                            2020
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="grid-movie-genre">
                            <span class="genres-name">Action | Fantasy</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="movie-grid col-sm-3">
            <div class="movie-poster">
                <img src="{{asset('assets/images/tahmid.jpg')}}" alt="" class="movie-image">
            </div>
            <div class="movie-title">
                Super hero 2
            </div>
            <div class="grid-movie-meta font-size-12">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="grid-movie-year">
                            2020
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="grid-movie-genre">
                            <span class="genres-name">Action | Fantasy</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="movie-grid col-sm-3">
            <div class="movie-poster">
                <img src="{{asset('assets/images/tahmid.jpg')}}" alt="" class="movie-image">
            </div>
            <div class="movie-title">
                Super hero 2
            </div>
            <div class="grid-movie-meta font-size-12">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="grid-movie-year">
                            2020
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="grid-movie-genre">
                            <span class="genres-name">Action | Fantasy</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="movie-grid col-sm-3">
            <div class="movie-poster">
                <img src="{{asset('assets/images/tahmid.jpg')}}" alt="" class="movie-image">
            </div>
            <div class="movie-title">
                Super hero 2
            </div>
            <div class="grid-movie-meta font-size-12">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="grid-movie-year">
                            2020
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="grid-movie-genre">
                            <span class="genres-name">Action | Fantasy</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="movie-grid col-sm-3">
            <div class="movie-poster">
                <img src="{{asset('assets/images/tahmid.jpg')}}" alt="" class="movie-image">
            </div>
            <div class="movie-title">
                Super hero 2
            </div>
            <div class="grid-movie-meta font-size-12">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="grid-movie-year">
                            2020
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="grid-movie-genre">
                            <span class="genres-name">Action | Fantasy</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="section mt-3">
        <div class=" text-center">
            <div class="ads-area-top">
                <img src="{{asset('assets/images/ads-image-h.png')}}" alt="" class="inline-h-image">
            </div>
        </div>
    </div>
</div>
@endsection