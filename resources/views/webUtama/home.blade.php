@extends('layout.masterHome')

@section('content')
    {{-- banner --}}
    <div class="banner" id="home" style="background-image: url('/assets/img/background/bg1.png')">
        <div class="banner-text">
            <h1 style="background: url('assets/img/background/back.png'); -webkit-background-clip: text;">SELAMAT DATANG</h1>
            <p>Temukan kreativitasmu dan wujudkan impianmu dari sini.</p>
            <a class="btn btn-sm mt-5 px-4" href="register">Get Started</a>
        </div>
        <a id="scroll-btn" href="#about"></a>
    </div>
    {{-- end banner --}}

    {{-- about --}}
    <section class="about pt-3 pt-lg-5 pb-6 pb-lg-8 text-center" style="scroll-margin-top:-25px" id="about">
        <div class="container">
            <div class="row mb-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                <div class="col">
                    <div class="overflow-hidden">
                        <h2 class="fs-sm-5 mb-2" data-zanim-xs='{"duration":1.5,"delay":0}'>ABOUT US
                        </h2>
                    </div>
                    <div class="overflow-hidden">
                        <p class="text-uppercase fs--1 text-black ls-1 mb-0" data-zanim-xs='{"duration":1.5,"delay":0.1}'>
                            Our approach is to break down complicated concepts into simple, actionable steps</p>
                    </div>
                    <div class="overflow-hidden">
                        <hr class="hr-short border-black" data-zanim-xs='{"duration":1.5,"delay":0.2}' />
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-4 text-md-end">
                    <h5 class="ls-2 mb-3">we're SOLUTIVE</h5>
                    <p class="mb-0">Kami adalah Kreasibilitas, sebuah platform kreatif yang bertekad
                        membantu Anda
                        mewujudkan ide-ide inovatif menjadi kenyataan. Sebagai tim yang
                        solutif, kami selalu berusaha memberikan solusi terbaik bagi setiap masalah yang Anda hadapi. Dengan
                        kemampuan analisa dan pemecahan masalah yang kami miliki,
                        kami siap membantu Anda dalam menemukan solusi yang tepat untuk menghadapi berbagai tantangan dan
                        memenuhi kebutuhan Anda. Dengan komitmen kami untuk memberikan
                        hasil terbaik, mari bersama-sama menciptakan solusi kreatif dan inovatif yang dapat memenuhi
                        kebutuhan Anda!
                    </p>
                </div>
                <div class="col-md-4 px-lg-4 my-4 my-md-0"><img class="rounded w-100 w-sm-75 w-md-100"
                        src="/assets/img/background/about.png" alt="" /></div>
                <div class="col-md-4 text-md-start">
                    <h5 class="ls-2 mb-3">we're FRIENDLY</h5>
                    <p class="mb-0">Kami di Kreasibilitas adalah tim kreatif yang ramah dan friendly. Kami senantiasa
                        berusaha memberikan pengalaman kerja sama yang nyaman dan menyenangkan bagi setiap pengguna. Kami
                        percaya bahwa keramahan dan kebersahabatan adalah kunci dalam menjalin hubungan yang baik dengan
                        pengguna. Kami siap mendengarkan setiap kebutuhan Anda dan memberikan solusi terbaik untuk memenuhi
                        kebutuhan tersebut. Kami senang untuk dapat menjadi partner Anda dalam menciptakan solusi kreatif
                        dan inovatif yang dapat memenuhi kebutuhan Anda. Mari bergabung bersama kami dan rasakan pengalaman
                        yang menyenangkan!</p>
                </div>
            </div>
        </div>
    </section>
    {{-- end about --}}

    {{-- team --}}
    <section class="text-center" id="team">
        <div class="container">
            <div class="row">
                <div class="col mb-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                    <div class="overflow-hidden">
                        <h2 class="fs-md-5 text-uppercase" data-zanim-xs='{"delay":0}'>team</h2>
                    </div>
                    <div class="overflow-hidden">
                        <p class="fs--1 text-uppercase text-black ls-1 mb-0" data-zanim-xs='{"delay":0.1}'>meet
                            our team</p>
                    </div>
                    <div class="overflow-hidden">
                        <hr class="hr-short bg-black" data-zanim-xs='{"delay":0.2}' />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch wow fadeInUp" data-aos="zoom-in"
                    data-wow-delay="0.1s">
                    <div class="team-item text-center rounded overflow-hidden">
                        <div class="rounded-circle overflow-hidden m-4">
                            <img class="img-fluid" src="/assets/img/team/team1.jpg" alt="">
                        </div>
                        <h5 class="mb-0">Nabilah Zakiyah Salmaa F.</h5>
                        <small>Designation</small>
                        <div class="d-flex justify-content-center mt-3">
                            <a class="btn btn-square btn-dark mx-1" href=""><i class="bi bi-facebook"></i></a>
                            <a class="btn btn-square btn-dark mx-1"
                                href="https://twitter.com/salmaa_zakiyah?t=xQhjQdcStbCQRkqJobT58A&s=08"><i
                                    class="bi bi-twitter"></i></a>
                            <a class="btn btn-square btn-dark mx-1"
                                href="https://instagram.com/nab.zs?igshid=ZGUzMzM3NWJiOQ=="><i
                                    class="bi bi-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch wow fadeInUp" data-aos="zoom-in"
                    data-wow-delay="0.3s">
                    <div class="team-item text-center rounded overflow-hidden">
                        <div class="rounded-circle overflow-hidden m-4">
                            <img class="img-fluid" src="/assets/img/team/team2.jpg" alt="">
                        </div>
                        <h5 class="mb-0">Zaidatul Na'ima</h5>
                        <small>Designation</small>
                        <div class="d-flex justify-content-center mt-3">
                            <a class="btn btn-square btn-dark mx-1"
                                href="https://twitter.com/zl_naima?t=2hJbR_57bYcQ9AWsSMlKPA&s=08"><i class="bi bi-twitter"></i></a>
                            <a class="btn btn-square btn-dark mx-1"
                                href="https://instagram.com/zl.naima?igshid=NTc4MTIwNjQ2YQ=="><i class="bi bi-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch wow fadeInUp" data-aos="zoom-in"
                    data-wow-delay="0.5s">
                    <div class="team-item text-center rounded overflow-hidden">
                        <div class="rounded-circle overflow-hidden m-4">
                            <img class="img-fluid" src="/assets/img/team/team3.jpg" alt="">
                        </div>
                        <h5 class="mb-0">Muhammad Zulfikar Rafi</h5>
                        <small>Designation</small>
                        <div class="d-flex justify-content-center mt-3">
                            <a class="btn btn-square btn-dark mx-1" href=""><i class="bi bi-facebook"></i></a>
                            <a class="btn btn-square btn-dark mx-1" href=""><i class="bi bi-twitter"></i></a>
                            <a class="btn btn-square btn-dark mx-1" href=""><i class="bi bi-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- end team --}}

    {{-- batas --}}
    <section id="batas" class="batas"
        style="background-image: url('/assets/img/background/cta-bg.jpg'); margin-top:50px;">
        <div class="container text-center text-uppercase">
            <h3 class="text-white d-inline-block fs-4 mb-0 lh-1 mt-1"
                data-zanim-xs='{"from":{"opacity":1,"x":-30},"to":{"opacity":1,"x":0},"duration":1.5,"delay":0.2}'>
                Wujudkan ide-ide inovatif Anda dengan Kreasibilitas! </h3>
        </div>
    </section>
    {{-- end batas --}}

    {{-- contact --}}
    <section id="contact" style="margin-top: 50px">
        <div class="container">
            <div class="row">
                <div class="col text-center mb-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                    <div class="overflow-hidden">
                        <h2 class="fs-md-5 text-uppercase" data-zanim-xs='{"duration":1.5,"delay":0}'>Contact Us</h2>
                    </div>
                    <div class="overflow-hidden">
                        <p class="fs--1 text-uppercase text-black ls-1 mb-0" data-zanim-xs='{"duration":1.5,"delay":0.1}'>
                            we are happy to listen from you anytime</p>
                    </div>
                    <div class="overflow-hidden">
                        <hr class="hr-short border-black" data-zanim-xs='{"duration":1.5,"delay":0.2}' />
                    </div>
                </div>
            </div>
            <div>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.3539086704645!2d112.6155360145107!3d-7.962329431556347!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e788281bdd08839%3A0xc915f268bffa831f!2sUniversitas%20Negeri%20Malang!5e0!3m2!1sid!2sid!4v1679633584017!5m2!1sid!2sid"
                    width="100%" height="270px" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="row mt-5">
                <div class="col-lg-4">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Location:</h4>
                            <p>Universitas Negeri Malang</p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>pesimelitas@gmail.com</p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Call:</h4>
                            <p>+62 812 5213 0320</p>
                        </div>

                    </div>

                </div>

                <div class="col-lg-8 mt-5 mt-lg-0">

                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name"
                                    placeholder="Your Name" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject"
                                placeholder="Subject" required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>

                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->
@endsection
