<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>MyResume Project</title>
    <meta content="" name="description">
    <meta content="" name="keywords">


    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('user/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('user/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('user/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('user/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('user/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('user/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('user/assets/css/style.css') }}" rel="stylesheet">


    <!-- toastr Css start-->

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">

    <!-- toastr Css End-->
</head>

<body>

    <!-- ======= Mobile nav toggle button ======= -->
    <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
    <i class="bi bi-list mobile-nav-toggle d-lg-none"></i>
    <!-- ======= Header ======= -->
    <header id="header" class="d-flex flex-column justify-content-center">

        <nav id="navbar" class="navbar nav-menu">
            <ul>
                <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a>
                </li>
                <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
                <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a>
                </li>
                <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i>
                        <span>Projects</span></a></li>
                <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i>
                        <span>Certificates</span></a>
                </li>
                <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a>
                </li>
            </ul>
        </nav><!-- .nav-menu -->

    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center"
        style="width: 100%; height: 100vh; background: url({{ asset($photo->image) }}) top right no-repeat;">
        <div class="container" data-aos="zoom-in" data-aos-delay="100">
            <h1>{{ $name->name }}</h1>
            <p>I'm
                <span class="typed" data-typed-items="{{ $roles->implode('name', ', ') }}"></span>
            </p>
            <div class="social-links">
                @foreach ($socials as $item)
                    <a href="{{ $item->url }}" target="_blank"><i class="{{ $item->icon }}"></i></a>
                @endforeach
            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>About</h2>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <img src="{{ asset($about->image) }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-8 pt-4 pt-lg-0 content">
                        <h3>{{ $about->title }}</h3>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong>
                                        <span>{{ $about->birthday }}</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong>
                                        <span>{{ $about->email }}</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong>
                                        <span>{{ $about->phone }}</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>City:</strong>
                                        <span>{{ $about->city }}</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong>
                                        <span>{{ $about->age }}</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong>
                                        <span>{{ $about->degree }}</span>
                                    </li>

                                    <li><i class="bi bi-chevron-right"></i> <strong>Hobbies:</strong>
                                        <span>{{ $about->hobbies }}</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Languages Know:</strong>
                                        <span>{{ $about->languages_know }}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->



        <!-- ======= Skills Section ======= -->
        <section id="skills" class="skills section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Skills</h2>

                </div>

                <div class="row skills-content">

                    <div class="col-lg-6 offset-lg-3">
                        @foreach ($skills as $item)
                            <div class="progress">
                                <span class="skill">{{ $item->name }} <i
                                        class="val">{{ $item->number }}%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="{{ $item->number }}"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        @endforeach
                    </div>



                </div>

            </div>
        </section><!-- End Skills Section -->

        <!-- ======= Resume Section ======= -->
        <section id="resume" class="resume">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Resume</h2>

                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <h3 class="resume-title">Education</h3>
                        @foreach ($educations as $item)
                            <div class="resume-item">
                                <h4>{{ $item->name }}</h4>
                                <h5>{{ $item->year }}</h5>
                                <br>
                                <h5>{{ $item->percentage }} %</h5>
                                <p><em>{{ $item->collage }}</em></p>
                                <p>{{ $item->content }}</p>
                            </div>
                        @endforeach


                    </div>
                    <div class="col-lg-6">
                        <h3 class="resume-title">Professional Experience</h3>
                        @foreach ($experiences as $item)
                            <div class="resume-item">
                                <h4>{{ $item->name }}</h4>
                                <h5>{{ $item->year }}</h5>
                                <p><em>{{ $item->location }} </em></p>
                                {!! $item->content !!}
                            </div>
                        @endforeach


                    </div>
                </div>

            </div>
        </section><!-- End Resume Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Project</h2>
                </div>



                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                    @foreach ($projects as $item)
                        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                            <div class="portfolio-wrap">
                                <img src="{{ asset($item->image) }}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>{{ $item->name }}</h4>

                                    <div class="portfolio-links">
                                        <a href="{{ $item->url }}" target="_blank"></a>
                                        <a href="{{ $item->url }}" target="_blank"><i class="bx bx-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Certificate</h2>
                </div>

                <div class="row">
                    @foreach ($certificates as $item)
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in"
                            data-aos-delay="100">
                            <div class="icon-box iconbox-blue">
                                <img src="{{ asset($item->image) }}" width="350" height="350" alt="">
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Review</h2>
                </div>

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">
                        @foreach ($reviews as $item)
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <img src="{{ asset($item->image) }}" class="testimonial-img" alt="">
                                    <h3>{{ $item->company }}</h3>
                                    <h4>{{ $item->ceo }}</h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        {{ $item->content }}
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div><!-- End testimonial item -->
                        @endforeach




                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contact</h2>
                </div>

                <div class="row mt-1">

                    <div class="col-lg-4">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>Javalli, Tudoor(P), Thirthahalli(Tq), Shimoga(D), Karnataka, 577226</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>abhirambs97@gmail.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>9481187122</p>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0">

                        <form action="{{ route('contact-post') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                            </div>

                            <div class="text-center mt-5"><button type="submit"
                                    class="btn btn-primary btn-large">Send
                                    Message</button></div>
                        </form>

                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <h3>{{ $name->name }}</h3>

            <div class="social-links">
                @foreach ($socials as $item)
                    <a href="{{ $item->url }}" target="_blank"><i class="{{ $item->icon }}"></i></a>
                @endforeach

            </div>
            <div class="copyright">
                &copy; Copyright <strong><span>Abhiram</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <span class="text-primary">Abhiram</span>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('user/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('user/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('user/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('user/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('user/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('user/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('user/assets/vendor/typed.js/typed.umd.js') }}"></script>
    <script src="{{ asset('user/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('user/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('user/assets/js/main.js') }}"></script>

    <!-- toastr js start -->

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        @if (Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}"
            switch (type) {
                case 'info':
                    toastr.info(" {{ Session::get('message') }} ");
                    break;
                case 'success':
                    toastr.success(" {{ Session::get('message') }} ");
                    break;
                case 'warning':
                    toastr.warning(" {{ Session::get('message') }} ");
                    break;
                case 'error':
                    toastr.error(" {{ Session::get('message') }} ");
                    break;
            }
        @endif
    </script>
    <!-- toastr js end -->

</body>

</html>
