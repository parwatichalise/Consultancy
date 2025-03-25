@extends('Frontend.includes.main')

@section('head')
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <style>
        .form-link {
            color: #ffffff;
        }
    </style>
@endsection

@section('content')
<section class="header-section">
    <div class="overlay"></div>
    <div class="content col-md-7 custom-padding">
        <h1 style="color: #0047AB; ">GLOBAL EXCEL</h1>
        <h1 style="color: #FF0000;">LEARNING CENTER</h1>
    </div>
</section>

<section class="info-section">
    <div class="content-wrapper custom-padding">
        <div class="text-content">
            <p>You might be wondering how one can conduct such an international level class at an economical (Competitive) price...</p>
            <p>Every institution claims that they provide expert instructors to get you the desired band...</p>
            <p><strong>Book Class of your choice from 7 am till 6 pm.</strong></p>
        </div>
        <div class="cards">
            <div class="card p-3 bg-primary">
                <h6>PTE Mock Test Free* / Paid</h6>
                <a href="#" class="form-link">Form</a>
            </div>
            <div class="card p-3 bg-danger">
                <h6>Duolingo Online Booking</h6>
                <a href="#" class="form-link">Form</a>
            </div>
            <div class="card p-3 bg-danger">
                <h6>Inquiry or Registration</h6>
                <a href="#" class="form-link">Form</a>
            </div>
            <div class="card p-3 bg-primary">
                <h6>Learning Center Class Schedule</h6>
                <a href="#" class="form-link">Form</a>
            </div>
        </div>
    </div>
</section>

@include('Frontend.includes.test-classes')

<section class="header-section">
    <div class="overlay"></div>
    <div class="content col-md-7 custom-padding">
        <h1 style="color: #0056b3">ABROAD STUDY <span style="color:red;">DESTINATIONS AND FACTS</span></h1>
        <p style="font:bold">We have partnered with top universities in nine countries.</p>
    </div>
</section>

    <section class="container my-4">
        <h2 class="py-4">Our <span style="color:red;">Services</span></h2>
        <div>
            <div>
                <div>
                    <div class="service-item">
                        <p><i class="fas fa-check-circle"></i></p>
                        <p>100% Visa Assistance</p>
                    </div>
                </div>
                <div>
                    <div class="service-item">
                        <p><i class="fas fa-check-circle"></i></p>
                        <p>International Educational Loans</p>
                    </div>
                </div>
                <div>
                    <div class="service-item">
                        <p><i class="fas fa-check-circle"></i></p>
                        <p>Coaching for IELTS, TOEFL-iBT, PTE-A, OET, SAT</p>
                    </div>
                </div>
                <div>
                    <div class="service-item">
                        <p><i class="fas fa-check-circle"></i></p>
                        <p>Assistance in Documentation for Admission</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        const swiper = new Swiper('.swiper-container', {
            slidesPerView: 1,
            spaceBetween: 10,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            },
        });
    </script>
@endsection
