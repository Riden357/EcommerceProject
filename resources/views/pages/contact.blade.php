@extends('layouts.app')

@section('content')

<div id="page-content" class="page-content">
    <div class="banner">
        <div class="jumbotron jumbotron-bg text-center rounded-0"
            style="margin-top: -25px; background-image: url('{{asset('assets/img/bg-header.jpg')}}');">
            <div class="container">
                <h1 class="pt-5">
                    Contact
                </h1>
                <p class="lead">
                    Don't Hesitate to Contact Us.
                </p>
            </div>
        </div>
    </div>

    <section class="pb-0">
        <div class="contact1 mb-5">
            <div class="container">
                <div class="row mt-3">
                    <div class="col-lg-7">
                        <div class="contact-wrapper">
                            <h3 class="title font-weight-normal mt-0 text-left">Send Us a Message</h3>
                            <form data-aos="fade-left" data-aos-duration="1200">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="form-control" type="text" placeholder="Full Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="form-control" type="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea class="form-control" rows="3" placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 text-right">
                                        <button type="submit" class="btn btn-lg btn-primary mb-5">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="detail-wrapper p-5 bg-primary">
                            <h3 class="font-weight-normal mb-3 text-light">
                                Fresh Food Headquarter
                            </h3>

                            <p class="text-light">
                                5279 Mnt. Saint-Hubert<br>
                                Saint-Hubert<br>
                                <br>
                                J3Y 1V8
                            </p>

                            <p class="text-light">
                                <i class="fas fa-phone"></i> 0898986362<br>
                                <i class="fas fa-envelope"></i>freshfood@gmail.com
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4218.011978456199!2d-73.4456345!3d45.481124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc905a33ce8317d%3A0x48a23186626984be!2s5279%20Mnt%20Saint-Hubert%2C%20Saint-Hubert%2C%20QC%20J3Y%201V8!5e1!3m2!1ses-419!2sca!4v1729737249691!5m2!1ses-419!2sca"
            width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen></iframe>
    </section>
</div>
@endsection