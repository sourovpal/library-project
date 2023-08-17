@extends('frontend.layouts.master')

@section('title')
    Contact
    @endsection
@section('banner')
    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url({{asset('assets/images/bg_1.jpg')}})">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-7">
                    <h2 class="mb-0">Contact</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                </div>
            </div>
        </div>
    </div>
    @endsection


@section('main-content')
<div class="custom-breadcrumns border-bottom">
    <div class="container">
        <a href="index.php">Home</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Contact</span>
    </div>
</div>

<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3 class="mb-4">Contact Information</h3>
                <p><b class="mr-2">Address:</b>147/I, Green Road, Panthapath, Tejgaon, Dhaka, Bangladesh.</p>
                <p><b class="mr-2">E-mail:</b><a href="mailto:su.lid.edu@gmail.com">su.lid.edu@gmail.com</a></p>
                <p><b class="mr-2">Tell:</b>+880 248112247</p>
                <p><b class="mr-2">Phone:</b>+880 248112247</p>
            </div>
            <div class="col-md-8">
                <div class="shadow- card p-4">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="fname">First Name</label>
                            <input type="text" id="fname" class="form-control form-control-lg">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="lname">Last Name</label>
                            <input type="text" id="lname" class="form-control form-control-lg">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="eaddress">Email Address</label>
                            <input type="text" id="eaddress" class="form-control form-control-lg">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="tel">Tel. Number</label>
                            <input type="text" id="tel" class="form-control form-control-lg">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="message">Message</label>
                            <textarea name="" id="message" cols="30" rows="5" class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <input type="submit" value="Send Message" class="btn btn-primary px-4">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 mt-5">
                <div class="card shadow">
                    <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d627.1850082530501!2d90.38679856535107!3d23.752535733742043!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b9ddba0d17ab%3A0xb4eb89d44152e3d5!2sSonargaon%20University!5e0!3m2!1sen!2sbd!4v1615356172874!5m2!1sen!2sbd"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
    @endsection