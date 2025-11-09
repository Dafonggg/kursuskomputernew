@extends('layouts.app')

@section('title', 'Kursus Ryan Komputer')

@section('content')
@include('partials.hero-section')


<section class="featured-section">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-lg-4 col-12 mb-4 mb-lg-0">
                <div class="custom-block bg-white shadow-lg">
                    <a href="{{ url('/detail-kursus') }}">
                        <div class="d-flex">
                            <div>
                                <h5 class="mb-2">Web Design</h5>

                                <p class="mb-0">When you search for free CSS templates, you will notice that TemplateMo is one of the best websites.</p>
                            </div>

                            <span class="badge bg-design rounded-pill ms-auto">14</span>
                        </div>

                        <img src="{{ asset('images/topics/undraw_Remote_design_team_re_urdx.png') }}" class="custom-block-image img-fluid" alt="">
                    </a>
                </div>
            </div>

            <div class="col-lg-6 col-12">
                <div class="custom-block custom-block-overlay">
                    <div class="d-flex flex-column h-100">
                        <img src="{{ asset('images/businesswoman-using-tablet-analysis.jpg') }}" class="custom-block-image img-fluid" alt="">

                        <div class="custom-block-overlay-text d-flex">
                            <div>
                                <h5 class="text-white mb-2">Finance</h5>

                                <p class="text-white">Topic Listing Template includes homepage, listing page, detail page, and contact page. You can feel free to edit and adapt for your CMS requirements.</p>

                                <a href="{{ route('detail-kursus') }}" class="btn custom-btn mt-2 mt-lg-3">Learn More</a>
                            </div>

                            <span class="badge bg-finance rounded-pill ms-auto">25</span>
                        </div>

                        <div class="social-share d-flex">
                            <p class="text-white me-4">Share:</p>

                            <ul class="social-icon">
                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-twitter"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-facebook"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-pinterest"></a>
                                </li>
                            </ul>

                            <a href="#" class="custom-icon bi-bookmark ms-auto"></a>
                        </div>

                        <div class="section-overlay"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="explore-section section-padding" id="section_2">
    <div class="container">
        <div class="row">

            <div class="col-12 text-center">
                <h2 class="mb-4">Kursus yang tersedia</h1>
            </div>

        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="design-tab" data-bs-toggle="tab" data-bs-target="#design-tab-pane" type="button" role="tab" aria-controls="design-tab-pane" aria-selected="true">Design</button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="marketing-tab" data-bs-toggle="tab" data-bs-target="#marketing-tab-pane" type="button" role="tab" aria-controls="marketing-tab-pane" aria-selected="false">Marketing</button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="finance-tab" data-bs-toggle="tab" data-bs-target="#finance-tab-pane" type="button" role="tab" aria-controls="finance-tab-pane" aria-selected="false">Finance</button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="music-tab" data-bs-toggle="tab" data-bs-target="#music-tab-pane" type="button" role="tab" aria-controls="music-tab-pane" aria-selected="false">Music</button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="education-tab" data-bs-toggle="tab" data-bs-target="#education-tab-pane" type="button" role="tab" aria-controls="education-tab-pane" aria-selected="false">Education</button>
                </li>
            </ul>
        </div>
    </div>

    <div class="container">
        <div class="row">

            <div class="col-12">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="design-tab-pane" role="tabpanel" aria-labelledby="design-tab" tabindex="0">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                                <div class="custom-block bg-white shadow-lg">
                                    <a href="{{ url('/detail-kursus') }}">
                                        <div class="d-flex">
                                            <div>
                                                <h5 class="mb-2">Web Design</h5>

                                                <p class="mb-0">Topic Listing Template based on Bootstrap 5</p>
                                            </div>

                                            <span class="badge bg-design rounded-pill ms-auto">14</span>
                                        </div>

                                        <img src="{{ asset('images/topics/undraw_Remote_design_team_re_urdx.png') }}" class="custom-block-image img-fluid" alt="">
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                                <div class="custom-block bg-white shadow-lg">
                                    <a href="{{ url('/detail-kursus') }}">
                                        <div class="d-flex">
                                            <div>
                                                <h5 class="mb-2">Graphic</h5>

                                                    <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                            </div>

                                            <span class="badge bg-design rounded-pill ms-auto">75</span>
                                        </div>

                                        <img src="{{ asset('images/topics/undraw_Redesign_feedback_re_jvm0.png') }}" class="custom-block-image img-fluid" alt="">
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="custom-block bg-white shadow-lg">
                                    <a href="{{ url('/detail-kursus') }}">
                                        <div class="d-flex">
                                            <div>
                                                <h5 class="mb-2">Logo Design</h5>

                                                    <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                            </div>

                                            <span class="badge bg-design rounded-pill ms-auto">100</span>
                                        </div>

                                        <img src="{{ asset('images/topics/colleagues-working-cozy-office-medium-shot.png') }}" class="custom-block-image img-fluid" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="marketing-tab-pane" role="tabpanel" aria-labelledby="marketing-tab" tabindex="0">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                                    <div class="custom-block bg-white shadow-lg">
                                        <a href="{{ url('/detail-kursus') }}">
                                            <div class="d-flex">
                                                <div>
                                                    <h5 class="mb-2">Advertising</h5>

                                                    <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                                </div>

                                                <span class="badge bg-advertising rounded-pill ms-auto">30</span>
                                            </div>

                                            <img src="{{ asset('images/topics/undraw_online_ad_re_ol62.png') }}" class="custom-block-image img-fluid" alt="">
                                        </a>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                                    <div class="custom-block bg-white shadow-lg">
                                        <a href="{{ url('/detail-kursus') }}">
                                            <div class="d-flex">
                                                <div>
                                                    <h5 class="mb-2">Video Content</h5>

                                                    <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                                </div>

                                                <span class="badge bg-advertising rounded-pill ms-auto">65</span>
                                            </div>

                                            <img src="{{ asset('images/topics/undraw_Group_video_re_btu7.png') }}" class="custom-block-image img-fluid" alt="">
                                        </a>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="custom-block bg-white shadow-lg">
                                        <a href="{{ url('/detail-kursus') }}">
                                            <div class="d-flex">
                                                <div>
                                                    <h5 class="mb-2">Viral Tweet</h5>

                                                    <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                                </div>

                                                <span class="badge bg-advertising rounded-pill ms-auto">50</span>
                                            </div>

                                            <img src="{{ asset('images/topics/undraw_viral_tweet_gndb.png') }}" class="custom-block-image img-fluid" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                      </div>

                    <div class="tab-pane fade" id="finance-tab-pane" role="tabpanel" aria-labelledby="finance-tab" tabindex="0">   <div class="row">
                            <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-0">
                                <div class="custom-block bg-white shadow-lg">
                                    <a href="{{ url('/detail-kursus') }}">
                                        <div class="d-flex">
                                            <div>
                                                <h5 class="mb-2">Investment</h5>

                                                <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                            </div>

                                            <span class="badge bg-finance rounded-pill ms-auto">30</span>
                                        </div>

                                        <img src="{{ asset('images/topics/undraw_Finance_re_gnv2.png') }}" class="custom-block-image img-fluid" alt="">
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="custom-block custom-block-overlay">
                                    <div class="d-flex flex-column h-100">
                                        <img src="{{ asset('images/businesswoman-using-tablet-analysis.jpg') }}" class="custom-block-image img-fluid" alt="">

                                        <div class="custom-block-overlay-text d-flex">
                                            <div>
                                                <h5 class="text-white mb-2">Finance</h5>

                                                <p class="text-white">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint animi necessitatibus aperiam repudiandae nam omnis</p>

                                                <a href="{{ route('detail-kursus') }}" class="btn custom-btn mt-2 mt-lg-3">Learn More</a>
                                            </div>

                                            <span class="badge bg-finance rounded-pill ms-auto">25</span>
                                        </div>

                                        <div class="social-share d-flex">
                                            <p class="text-white me-4">Share:</p>

                                            <ul class="social-icon">
                                                <li class="social-icon-item">
                                                    <a href="#" class="social-icon-link bi-twitter"></a>
                                                </li>

                                                <li class="social-icon-item">
                                                    <a href="#" class="social-icon-link bi-facebook"></a>
                                                </li>

                                                <li class="social-icon-item">
                                                    <a href="#" class="social-icon-link bi-pinterest"></a>
                                                </li>
                                            </ul>

                                            <a href="#" class="custom-icon bi-bookmark ms-auto"></a>
                                        </div>

                                        <div class="section-overlay"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="music-tab-pane" role="tabpanel" aria-labelledby="music-tab" tabindex="0">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                                <div class="custom-block bg-white shadow-lg">
                                    <a href="{{ url('/detail-kursus') }}">
                                        <div class="d-flex">
                                            <div>
                                                <h5 class="mb-2">Composing Song</h5>

                                                <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                            </div>

                                            <span class="badge bg-music rounded-pill ms-auto">45</span>
                                        </div>

                                        <img src="{{ asset('images/topics/undraw_Compose_music_re_wpiw.png') }}" class="custom-block-image img-fluid" alt="">
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                                <div class="custom-block bg-white shadow-lg">
                                    <a href="{{ url('/detail-kursus') }}">
                                        <div class="d-flex">
                                            <div>
                                                <h5 class="mb-2">Online Music</h5>

                                                <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                            </div>

                                            <span class="badge bg-music rounded-pill ms-auto">45</span>
                                        </div>

                                        <img src="{{ asset('images/topics/undraw_happy_music_g6wc.png') }}" class="custom-block-image img-fluid" alt="">
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="custom-block bg-white shadow-lg">
                                    <a href="{{ url('/detail-kursus') }}">
                                        <div class="d-flex">
                                            <div>
                                                <h5 class="mb-2">Podcast</h5>

                                                <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                            </div>

                                            <span class="badge bg-music rounded-pill ms-auto">20</span>
                                        </div>

                                        <img src="{{ asset('images/topics/undraw_Podcast_audience_re_4i5q.png') }}" class="custom-block-image img-fluid" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="education-tab-pane" role="tabpanel" aria-labelledby="education-tab" tabindex="0">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-3">
                                <div class="custom-block bg-white shadow-lg">
                                    <a href="{{ url('/detail-kursus') }}">
                                        <div class="d-flex">
                                            <div>
                                                <h5 class="mb-2">Graduation</h5>

                                                <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                            </div>

                                            <span class="badge bg-education rounded-pill ms-auto">80</span>
                                        </div>

                                        <img src="{{ asset('images/topics/undraw_Graduation_re_gthn.png') }}" class="custom-block-image img-fluid" alt="">
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="custom-block bg-white shadow-lg">
                                    <a href="{{ url('/detail-kursus') }}">
                                        <div class="d-flex">
                                            <div>
                                                <h5 class="mb-2">Educator</h5>

                                                <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                            </div>

                                            <span class="badge bg-education rounded-pill ms-auto">75</span>
                                        </div>

                                        <img src="{{ asset('images/topics/undraw_Educator_re_ju47.png') }}" class="custom-block-image img-fluid" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        </div>
    </div>
</section>


<section class="timeline-section section-padding" id="section_3">
    <div class="section-overlay"></div>

    <div class="container">
        <div class="row">

            <div class="col-12 text-center">
                <h2 class="text-white mb-4">How does it work?</h1>
            </div>

            <div class="col-lg-10 col-12 mx-auto">
                <div class="timeline-container">
                    <ul class="vertical-scrollable-timeline" id="vertical-scrollable-timeline">
                        <div class="list-progress">
                            <div class="inner"></div>
                        </div>

                        <li>
                            <h4 class="text-white mb-3">Course Your Course</h4>

                            <p class="text-white">Pilih kursus komputer yang kamu mau — dari dasar hingga tingkat lanjut. Ada pilihan desain grafis, pemrograman, Office, dan banyak lagi!</p>

                            <div class="icon-holder">
                              <i class="bi-search"></i>
                            </div>
                        </li>
                        
                        <li>
                            <h4 class="text-white mb-3">Learn Anywhere</h4>

                            <p class="text-white">Belajar dengan cara yang paling nyaman buat kamu! Bisa online lewat platform kami atau datang langsung ke kelas offline.</p>

                            <div class="icon-holder">
                              <i class="bi-bookmark"></i>
                            </div>
                        </li>

                        <li>
                            <h4 class="text-white mb-3">Get Certified</h4>

                            <p class="text-white">Setelah selesai kursus, kamu akan mendapatkan sertifikat resmi dari Kursus Ryan Komputer!</p>

                            <div class="icon-holder">
                              <i class="bi-book"></i>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-12 text-center mt-5">
                <p class="text-white">
                    Want to learn more?
                    <a href="#" class="btn custom-btn custom-border-btn ms-3">Check out Youtube</a>
                </p>
            </div>
        </div>
    </div>
</section>


<section class="faq-section section-padding" id="section_4">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-12">
                <h2 class="mb-4">Frequently Asked Questions</h2>
            </div>

            <div class="clearfix"></div>

            <div class="col-lg-5 col-12">
                <img src="{{ asset('images/faq_graphic.jpg') }}" class="img-fluid" alt="FAQs">
            </div>

            <div class="col-lg-6 col-12 m-auto">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            1. Apakah kursus ini bisa dilakukan secara online?
                            </button>
                        </h2>

                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Tentu! Kamu bisa ikut kelas secara online lewat platform kami atau datang langsung ke kelas offline sesuai jadwal yang tersedia.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            2. Apakah peserta akan mendapat sertifikat?
                        </button>
                        </h2>

                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Ya, setiap peserta yang menyelesaikan kursus akan mendapatkan sertifikat resmi sebagai bukti keahlianmu.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            3. Apakah ada biaya pendaftaran?
                        </button>
                        </h2>

                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Beberapa kursus kami gratis, namun untuk kelas tertentu ada biaya pendaftaran dan materi. Semua informasinya bisa kamu lihat di halaman detail kursus.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            4. Apakah saya perlu membawa laptop sendiri untuk kelas offline?
                        </button>
                        </h2>

                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Disarankan membawa laptop sendiri agar bisa langsung praktik. Tapi kalau tidak punya, kami juga menyediakan komputer di ruang kelas.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            5. Apakah ada batas usia untuk mengikuti kursus?
                        </button>
                        </h2>

                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Tidak ada batasan usia — semua orang boleh belajar, baik pelajar, mahasiswa, maupun profesional yang ingin meningkatkan skill komputer!
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@include('partials.contact-section')
@endsection

