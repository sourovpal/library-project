@extends('frontend.layouts.master')
@section('title')
    Single Page
@endsection
@section('banner')
    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url({{asset('assets/images/bg_1.jpg')}})">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-7">
                    <h2 class="mb-0">Pages</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                </div>
            </div>
        </div>
    </div>
    @endsection
@section('main-content')
    <div class="custom-breadcrumns border-bottom">
        <div class="container">
            <a href="#">Home</a>
            <span class="mx-3 icon-keyboard_arrow_right"></span>
            <span class="current">Pages</span>
        </div>
    </div>

    <div class="container pt-5 mb-5">
        <div class="row">
            <div class="col-lg-12">

                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio sapiente facilis optio id aliquid repellat
                    veritatis officia, alias ducimus quidem aspernatur, dolores placeat delectus atque similique expedita
                    ratione perferendis dolore voluptates enim dolorum! Voluptatibus porro quis quibusdam optio
                    exercitationem sed quasi maiores. Eius laudantium incidunt blanditiis eaque aliquam minus suscipit
                    autem, illum debitis repellat eos aperiam inventore nisi culpa molestiae eveniet? Fuga quidem enim
                    perspiciatis quis nemo, qui, eius ipsam ut dolor sunt dignissimos. Odit rem possimus soluta accusantium
                    sequi officiis, laudantium nesciunt enim consectetur alias? Officia dicta ipsam vitae vero quis? Id, vel
                    unde repellendus maxime odio obcaecati repellat.</p>

                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda, commodi aspernatur debitis minus quo
                    ullam saepe voluptatibus praesentium reiciendis distinctio ipsa sequi. Repellendus inventore quas nihil
                    perferendis, qui neque numquam. Eum, tenetur, voluptatibus voluptate recusandae culpa voluptates facilis
                    nihil at praesentium temporibus mollitia amet nesciunt omnis ut dolorem. Veritatis, commodi!</p>
            </div>

        </div>
    </div>

    <section class="site-section">
        <div class="container">
            <div class="row mb-5">

                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2 mb-4 mb-lg-0">
                        <img src="images/course_5.jpg" alt="Image" class="img-fluid">
                    </div>
                    <div class="col-lg-5 mr-auto align-self-center order-2 order-lg-1">
                        <h2 class="mb-3">
                            <span>Personalized Learning</span>
                        </h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At itaque dolore libero corrupti!
                            Itaque,
                            delectus?</p>
                        <p>Modi sit dolor repellat esse! Sed necessitatibus itaque libero odit placeat nesciunt, voluptatum
                            totam facere.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-bg style-1" style="background-image: url('images/hero_1.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
                    <span class="icon flaticon-mortarboard"></span>
                    <h3>Our Philosphy</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat
                        quis
                        delectus ea? Dolore, amet reprehenderit.</p>
                </div>
                <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
                    <span class="icon flaticon-school-material"></span>
                    <h3>Academics Principle</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat
                        quis
                        delectus ea?
                        Dolore, amet reprehenderit.</p>
                </div>
                <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
                    <span class="icon flaticon-library"></span>
                    <h3>Key of Success</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat
                        quis
                        delectus ea?
                        Dolore, amet reprehenderit.</p>
                </div>
            </div>
        </div>
    </section>


    <section class="site-section">
        <div class="container">
            <div class="row mb-5 justify-content-center text-center">
                <div class="col-lg-6 mb-5">
                    <h2>
                        <span>Library Committee </span>
                    </h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit soluta assumenda unde
                        perferendis? Optio, assumenda?</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">

                    <div class="feature-1 border person text-center">
                        <img src="images/person_1.jpg" alt="Image" class="img-fluid">
                        <div class="feature-1-content">
                            <h2>Craig Daniel</h2>
                            <span class="position mb-3 d-block">Committee Member</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit morbi hendrerit elit</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                    <div class="feature-1 border person text-center">
                        <img src="images/person_2.jpg" alt="Image" class="img-fluid">
                        <div class="feature-1-content">
                            <h2>Taylor Simpson</h2>
                            <span class="position mb-3 d-block">Committee Member</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit morbi hendrerit elit</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                    <div class="feature-1 border person text-center">
                        <img src="images/person_3.jpg" alt="Image" class="img-fluid">
                        <div class="feature-1-content">
                            <h2>Jonas Tabble</h2>
                            <span class="position mb-3 d-block">Committee Member</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit morbi hendrerit elit</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">

                    <div class="feature-1 border person text-center">
                        <img src="images/person_4.jpg" alt="Image" class="img-fluid">
                        <div class="feature-1-content">
                            <h2>Craig Daniel</h2>
                            <span class="position mb-3 d-block">Committee Member</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit morbi hendrerit elit</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                    <div class="feature-1 border person text-center">
                        <img src="images/person_2.jpg" alt="Image" class="img-fluid">
                        <div class="feature-1-content">
                            <h2>Taylor Simpson</h2>
                            <span class="position mb-3 d-block">Committee Member</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit morbi hendrerit elit</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                    <div class="feature-1 border person text-center">
                        <img src="images/person_3.jpg" alt="Image" class="img-fluid">
                        <div class="feature-1-content">
                            <h2>Jonas Tabble</h2>
                            <span class="position mb-3 d-block">Committee Member</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit morbi hendrerit elit</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection