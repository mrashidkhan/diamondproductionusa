<!-- Contact Form Start -->
<div class="contact-form-section section-padding">
    <div class="container">
        <!-- Contact Wrap Start -->
        <div class="contact-wrap">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="form-title text-center">
                        <h2 class="title">Sent Us A Message</h2>
                    </div>
                    <!-- Contact Form Wrap Start -->
                    <div class="contact-form-wrap">
                        <form class="mb-2" action="{{ route('contact.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <!-- Single Form Start -->
                                    <div class="single-form">
                                        <input class="form-control" name="name" type="text" placeholder="Your Name">
                                    </div>
                                    <!-- Single Form End -->
                                </div>
                                <div class="col-md-6">
                                    <!-- Single Form Start -->
                                    <div class="single-form">
                                        <input class="form-control" name="email" type="email" placeholder="Your Email">
                                    </div>
                                    <!-- Single Form End -->
                                </div>
                                <div class="col-md-6">
                                    <!-- Single Form Start -->
                                    <div class="single-form">
                                        <input class="form-control" name="contact" type="text" placeholder="Your Number">
                                    </div>
                                    <!-- Single Form End -->
                                </div>
                                <div class="col-md-6">
                                    <!-- Single Form Start -->
                                    <div class="single-form">
                                        <input class="form-control" name="subject" type="text" placeholder="Subject">
                                    </div>
                                    <!-- Single Form End -->
                                </div>
                                <div class="col-md-12">
                                    <!-- Single Form Start -->
                                    <div class="single-form">
                                        <textarea id="messagefield" class="form-control" name="message" placeholder="Write A Message"></textarea>
                                    </div>
                                    <!-- Single Form End -->
                                </div>
                                <div class="col-md-12">
                                    <!--  Single Form Start -->
                                    <div class="form-btn text-center">
                                        <button id="submitnow" class="btn btn-primary" type="submit">Submit Now</button>
                                    </div>
                                    <!--  Single Form End -->
                                </div>
                            </div>
                        </form>
                        @if (session('info'))

                            <div id="contactmessage" class="alert alert-success">

                                {{ session('info') }}
                            </div>
                        @endif
                    </div>

                    <!-- Contact Form Wrap End -->
                </div>
            </div>
        </div>
        <!-- Contact Wrap End -->
    </div>
</div>
<!-- Contact Form End -->

<!-- Contact Info Start -->
<div class="section contact-info-section">
    <div class="container">
        <!-- Contact Info Wrap Start -->
        <div class="contact-info-wrap">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <!--Single Contact Info Start -->
                    <div class="single-contact-info text-center">
                        <div class="info-icon color-2">
                            <i class="flaticon-phone-call"></i>
                        </div>
                        <div class="info-content">
                            <h5 class="title">Telephone</h5>
                            <p>+1 214-679-6818</p>
                        </div>
                    </div>
                    <!--Single Contact Info End -->
                </div>
                <div class="col-lg-4 col-sm-6">
                    <!--Single Contact Info Start -->
                    <div class="single-contact-info text-center">
                        <div class="info-icon color-1">
                            <i class="flaticon-email"></i>
                        </div>
                        <div class="info-content">
                            <h5 class="title">Drop Your Mail</h5>
                            <p>contact@molabsmedia.com</p>
                        </div>
                    </div>
                    <!--Single Contact Info End -->
                </div>
                <div class="col-lg-4 col-sm-6">
                    <!--Single Contact Info Start -->
                    <div class="single-contact-info text-center">
                        <div class="info-icon color-3">
                            <i class="flaticon-pin"></i>
                        </div>
                        <div class="info-content">
                            <h5 class="title">Location</h5>
                            <p>Dallas, TX, USA</p>
                        </div>
                    </div>
                    <!--Single Contact Info End -->
                </div>
            </div>
        </div>
        <!-- Contact Info Wrap End -->
    </div>
</div>
<!-- Contact Info End -->

<!-- Contact Map Start -->
<div class="section contact-map-section">
    <div class="contact-map-wrap">
        <iframe id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3349.5040835696477!2d-96.8884035256264!3d32.911277677114704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1727969917497!5m2!1sen!2s"></iframe>
    </div>
</div>
<!-- Contact Map End -->

</div>
