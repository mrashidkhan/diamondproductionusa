<!-- Footer Start -->
<div class="meeta-footer-section meeta-footer-3" style="background-image: url(assets/images/bg/footer-bg-3.jpg);">

    <!-- Footer Widget Start -->
    <div class="footer-wrap">
        <div class="container">

            <div class="footer-widget-wrap">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <!-- Footer Widget Start -->
                        <div class="footer-widget">
                            <h4 class="widget-title">Managed By</h4>
                            <a class="footer-logo" href="{{ route('index') }}"><img src="{{ asset('assets/images/diamond-logo.png') }}" alt="Logo" style="width: 157px; height: 88px; object-fit: cover;"></a>
                        </div>
                        <!-- Footer Widget End -->
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <!-- Footer Widget Start -->
                        <div class="footer-widget">
                            <h4 class="widget-title">Address</h4>
                            <div class="widget-text">
                                <span class="date">Dallas, TX</span>
                                <p>2727 LBJ Freeway, Suite 200
                                    Dallas, TX, 75234</p>
                                <a class="btn-2" href="{{ route('contact')}}">Contact Us</a>
                            </div>
                        </div>
                        <!-- Footer Widget End -->
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <!-- Footer Widget Start -->
                        <div class="footer-widget">
                            <h4 class="widget-title">Contact Us</h4>
                            <div class="widget-info">
                                <ul>
                                    <li>
                                        <div class="info-icon">
                                            <i class="flaticon-phone-call"></i>
                                        </div>
                                        <div class="info-text">
                                            <span><a href="#">+1 214-679-6818</a></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="info-icon">
                                            <i class="far fa-envelope-open"></i>
                                        </div>
                                        <div class="info-text">
                                            <span><a href="#">contact@molabsmedia.com </a></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="info-icon">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </div>
                                        <div class="info-text">
                                            <span>2727 LBJ Freeway, Suite 200,                                                 Dallas, TX, 75234</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Footer Widget End -->
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <!-- Footer Widget Start -->
                        <div class="footer-widget">
                            <h4 class="widget-title">Important Links</h4>
                            <div class="widget-info">
                                <ul>
                                    <li>
                                        <div class="info-icon">
                                            <a href="{{ url('/') }}">
                                                <i class="fas fa-home"></i>
                                            </a>
                                        </div>
                                        <div class="info-text">
                                            <span><a href="{{ url('/') }}">Home</a></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="info-icon">
                                            <i class="far fa-envelope-open"></i>
                                        </div>
                                        <div class="info-text">
                                            <span><a href="{{ url('contact') }}">Contact Us </a></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="info-icon">
                                            <i class="fas fa-user"></i>
                                        </div>
                                        <div class="info-text">
                                            <span><a href="{{ url('about') }}">About Us </a></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="info-icon">
                                            <i class="fas fa-clock"></i>
                                        </div>
                                        <div class="info-text">
                                            <span><a href="{{ url('posters') }}">Past Events </a></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="info-icon">
                                            <i class="fas fa-calendar-alt"></i>
                                        </div>
                                        <div class="info-text">
                                            <span><a href="{{ url('upcomingposters') }}">Upcoming Events </a></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="footer-widget-social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-pinterest"></i></a>
                                <a href="#"><i class="fab fa-github"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <!-- Footer Widget End -->
                    </div>
                </div>
            </div>

        </div>

        <div class="footer-copyright text-center">
            <div class="container">
                <div class="copyright-text">
                    <p>2024 Copyright Diamond Productions USA. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Widget End -->

</div>
<!-- Footer End -->

<!-- back to top start -->
<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>
<!-- back to top end -->




<!-- JS
============================================ -->

<!-- Modernizer & jQuery JS -->
<script src="{{ asset('assets/js/vendor/modernizr-3.11.7.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js')}}"></script>


<!-- Bootstrap JS -->
<script src="{{ asset('assets/js/popper.min.js')}}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>

<!-- Plugins JS -->
<script src="{{ asset('assets/js/swiper-bundle.min.js')}}"></script>
<script src="{{ asset('assets/js/back-to-top.js')}}"></script>
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{ asset('assets/js/jquery.counterup.min.js')}}"></script>
<script src="{{ asset('assets/js/waypoints.min.js')}}"></script>
<script src="{{ asset('assets/js/aos.js')}}"></script>
<script src="{{ asset('assets/js/jquery.nice-select.min.js')}}"></script>


<!-- Main JS -->
<script src="{{ asset('assets/js/main.js')}}"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var element = document.getElementById('contactmessage');
        if (element) {
            var element1 = document.getElementById('messagefield');
            element1.scrollIntoView({ behavior: 'smooth' });
        }
    });
</script>

<script>

// const images = document.querySelectorAll('.animate-image');

// images.forEach((image) => {
//     image.addEventListener('click', () => {
//         image.classList.toggle('clicked');
//     });
// });

const images = document.querySelectorAll('.animate-image');

images.forEach((image) => {
    let zoomLevel = 0;
    image.addEventListener('click', () => {
        if (zoomLevel === 0) {
            image.classList.add('zoom-in');
            zoomLevel = 1;
        } else if (zoomLevel === 1) {
            image.classList.replace('zoom-in', 'zoom-out');
            zoomLevel = 2;
        } else {
            image.classList.remove('zoom-out');
            zoomLevel = 0;
        }
    });
});

</script>

</body>


<!-- Mirrored from thepixelcurve.com/html/meeta/meeta/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Oct 2024 20:35:33 GMT -->
</html>
