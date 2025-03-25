@extends('Frontend.includes.main')
@section('head')
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('dist/css/frontend.css') }}">
    <style>
        .swiper-container {
            position: relative;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .swiper-wrapper {
            display: flex;
        }

        .swiper-slide {
            width: 33.33%;
            padding: 0 5px;
            position: relative;
        }

        .slide-title {
            position: absolute;
            bottom: 10%;
            left: 10%;
            font-size: 2rem;
            font-weight: bold;
            color: #fff;
        }

        .swiper-slide img {
            width: 100%;
            height: 400px;
            border-radius: 10px;
        }

        .swiper-button-next,
        .swiper-button-prev {
            color: #fff;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            z-index: 10;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 1.5rem;
            border-radius: 50%;
        }

        .swiper-button-next {
            right: 10px;
        }

        .swiper-button-next::after,
        .swiper-button-prev::after {
            font-size: 1.6rem;
        }

        .swiper-button-prev {
            left: 10px;
        }

        .swiper-pagination-bullet {
            background: #fff;
        }

        .bubble-container {
            padding: 40px;
            border-radius: 25px;
            background-color: #ffe066;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: fit-content;
            margin: 20px auto;
        }

        .bubble-title {
            font-size: 2rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 15px;
            text-transform: uppercase;
        }

        .bubble-subtitle {
            font-size: 1.5rem;
            color: #555;
            font-style: italic;
            margin: 0;
        }

        .bubble-container:hover {
            background-color: #ffe066;
            transform: scale(1.05);
            transition: all 0.3s ease-in-out;
        }
    </style>
@endsection
@section('content')
    <section class="container" style="border-bottom: 1px solid rgb(222, 222, 222);">
        <div class="m-0 my-4 row align-items-center">
            <div class="col-sm-12 col-md-6">
                <div class="hero-title">
                    <h2><span style="color: rgb(16, 126, 194);font-weight: bold;">Global Excel</span></h2>
                    <h1><span style="color: red;font-weight: bold;font-size: 3rem;">Upskill and Study <br> Info
                            Center</span>
                    </h1>
                    <a href="{{ route('contact') }}" class="btn border py-2 px-5 my-4 bounce-animation "
                        style="
                  background-color: rgb(255, 193, 7);
                    color: white; 
                    border: 3px solid rgb(22, 61, 146); 
                    border-radius: 8px;  
                    display: inline-block;
                ">
                        Get Started &nbsp;&nbsp;<i class="fa fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <div class="col-sm-12 col-md-6">
                @include('Frontend.includes.banner-slider')
            </div>
        </div>
    </section>

    <section class="p-4 text-white" style=" background: linear-gradient(135deg, #0056b3, #003a80); ">

        <div class="row align-items-center">
            <div class="col-12 col-md-2 text-center">
                <h1><small>Recent</small> Events</h1>
            </div>
            <div class="col-12 col-md-8 row align-items-center">
                <div class="col-6 col-md-4 my-2">
                    <div class="row align-items-center">
                        <div class="col-12 col-md-4 text-center">
                            <h6 class="p-3 bg-danger rounded ">26 Nov</h6>
                        </div>
                        <div class="col-12 col-md-8">
                            <p style="font-size: 0.9rem;">
                                {{ \Illuminate\Support\Str::words('Discover Opportunities.. Lorem ipsum dluptatem ne', 4) }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 my-2">
                    <div class="row align-items-center">
                        <div class="col-12 col-md-4 text-center">
                            <h6 class="p-3 bg-success rounded ">22 Nov</h6>
                        </div>
                        <div class="col-12 col-md-8">
                            <p style="font-size: 0.9rem;">
                                {{ \Illuminate\Support\Str::words('Discover Opportunities.. Lorem ipsum dluptatem ne', 4) }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 my-2">
                    <div class="row align-items-center">
                        <div class="col-12 col-md-4 text-center">
                            <h6 class="p-3 bg-info rounded ">20 Nov</h6>
                        </div>
                        <div class="col-12 col-md-8">
                            <p style="font-size: 0.9rem;">
                                {{ \Illuminate\Support\Str::words('Discover Opportunities.. Lorem ipsum dluptatem ne', 4) }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-2 my-2">
                <a href="" class=" text-white btn" style="text-decoration: none;background-color: red;">More Events
                    <i class="fas fa-external-link-alt"></i>
                </a>
            </div>
        </div>
    </section>
    @include('Frontend.includes.university-slider')
    <div class="m-0 my-4 row align-items-center">
        @include('Frontend.includes.stories-slider')
    </div>

    <section class="container">
        <div class="py-4 mx-auto my-4 w-50" style="text-align: center;">
            <h2>Learning Center</h2>
        </div>
        <div class="row">
            <div class="mb-4 col-md-4">
                <div class="card">
                    <a href="{{ route('learning.ielts') }}">
                        <img src="{{ asset('dist/img/image1.jpg') }}" class="card-img-top" alt="Article Image">
                        <div class="card-body">
                            <h6 class="card-title">IELTS</h6>
                        </div>
                    </a>
                </div>
            </div>

            <div class="mb-4 col-md-4">
                <div class="card">
                    <a href="{{ route('learning.pte') }}">
                        <img src="{{ asset('dist/img/image2.jpg') }}" class="card-img-top" alt="Article Image">
                        <div class="card-body">
                            <h6 class="card-title">PTE</h6>
                        </div>
                    </a>
                </div>
            </div>

            <div class="mb-4 col-md-4">
                <div class="card">
                    <a href="{{ route('learning.toefl') }}">
                        <img src="{{ asset('dist/img/image3.jpg') }}" class="card-img-top" alt="Article Image">
                        <div class="card-body">
                            <h6 class="card-title">TOEFL</h6>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        @include('Frontend.includes.country-slider')

    </section>
    <section class="container py-4 my-4">
        <h2 class="py-2">Our Services</h2>
        <div class="row service-list">
            <div class="col-12 col-md-6">
                <div class="service-item">
                    <p><i class="fas fa-check-circle"></i></p>
                    <p>100% Visa Assistance</p>
                </div>
                <div class="service-item">
                    <p><i class="fas fa-check-circle"></i></p>
                    <p>International Educational Loans</p>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="service-item">
                    <p><i class="fas fa-check-circle"></i></p>
                    <p>Coaching for IELTS, TOEFL-iBT, PTE-A, OET, SAT</p>
                </div>
                <div class="service-item">
                    <p><i class="fas fa-check-circle"></i></p>
                    <p>Assistance in Documentation for Admission</p>
                </div>
            </div>
        </div>
    </section>
@endsection
