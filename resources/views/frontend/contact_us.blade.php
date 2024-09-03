@extends('frontend.layouts.main')

@section('main-container')
    <div class="main-content">

        <section class="inner-header divider parallax layer-overlay overlay-white-8" data-bg-img="images/bg/bg6.jpg">
            <div class="container pt-60 pb-60">

                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2 class="title">Contact</h2>
                            <ol class="breadcrumb text-center text-black mt-10">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Pages</a></li>
                                <li class="active text-theme-colored">Page Title</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="divider">
            <div class="container">
                <div class="row pt-30">
                    <div class="col-md-5">
                        @if (session()->has('msg'))
                        <p class="alert alert-success">{{ session('msg') }}</p>
                         @endif
                        <h3 class="line-bottom mt-0 mb-30">Say Hello !</h3>


                        <form action="{{ route('send.email') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Name <small>*</small></label>
                                        <input name="name" class="form-control" type="text" placeholder="Enter Name"
                                            required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Email <small>*</small></label>
                                        <input name="email" class="form-control required email" type="email"
                                            placeholder="Enter Email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Subject <small>*</small></label>
                                        <input name="subject" class="form-control required" type="text"
                                            placeholder="Enter Subject">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input name="phone" class="form-control" type="text" placeholder="Enter Phone">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Message</label>
                                <textarea name="message" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
                            </div>
                            <div class="form-group">

                                <button type="submit" class="btn btn-dark btn-theme-colored btn-flat mr-5">Send your message</button>

                                <button type="reset" class="btn btn-default btn-flat btn-theme-colored">Reset</button>
                            </div>
                        </form>


                    </div>
                    <div class="col-md-7">
                        <div class="row">
                            <h3 class="line-bottom mt-0 mb-50 ml-15">Our Location</h3>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="icon-box media bg-deep p-30 mb-20"> <a class="media-left pull-left flip"
                                        href="#"> <i class="pe-7s-map-2 text-theme-colored"></i></a>
                                    <div class="media-body">
                                        <h5 class="mt-0">Our Office Location</h5>
                                        <p>Plot No ST-1 Block 2 <br> Near Shell Pump Clifton Karachi </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="icon-box media bg-deep p-30 mb-20"> <a class="media-left pull-left flip"
                                        href="#"> <i class="pe-7s-call text-theme-colored"></i></a>
                                    <div class="media-body">
                                        <h5 class="mt-0">Contact Number</h5>
                                        <p>+92 3586 1642 <br> +92 332 3331011</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="icon-box media bg-deep p-30 mb-20"> <a class="media-left pull-left flip"
                                        href="#"> <i class="pe-7s-mail text-theme-colored"></i></a>
                                    <div class="media-body">
                                        <h5 class="mt-0">Email Address</h5>
                                        <p><a href="" class="__cf_email__"
                                                data-cfemail="">nusrattrustpk@gmail.com</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="icon-box media bg-deep p-30 mb-20"> <a class="media-left pull-left flip"
                                        href="#"> <i class="fa fa-skype text-theme-colored"></i></a>
                                    <div class="media-body">
                                        <h5 class="mt-0">Make a Whatsapp Call</h5>
                                        <p>+92 332 333 1011</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container-fluid pt-0 pb-0">
                <div class="row">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14485.650080044923!2d67.0190625!3d24.8155625!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33d9773adcd71%3A0xb6fda2341ed164a2!2sNusrat%20Trust%20For%20Special%20Children!5e0!3m2!1sen!2s!4v1725349354837!5m2!1sen!2s"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section>
    </div>
@endsection
