@extends('Frontend.includes.main')
@section('head')
    <style>
        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes bounceIn {
            from {
                opacity: 0;
                transform: scale(0.3);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        @media (max-width: 1024px) {
            .content-wrapper {
                flex-direction: column;
                align-items: center;
            }

            .text-content,
            .cards {
                max-width: 100%;
                text-align: center;
            }

            .text-content {
                margin-bottom: 20px;
            }

            .cards {
                flex-direction: row;
                justify-content: center;
            }
        }

        @media (max-width: 768px) {
            .custom-padding {
                padding: 3rem;
            }

            .swiper-slide img {
                height: 200px;
            }
        }

        @media (max-width: 480px) {
            section.header-section {
                padding: 60px 10px;
            }

            .custom-padding {
                padding: 2rem;
            }

            section.header-section .content h1 {
                font-size: 32px;
            }

            section.header-section .content p {
                font-size: 16px;
            }
        }

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
    <section class="header-section position-relative text-start p-5 animate-section"
        style="background: linear-gradient(180deg, #E8F2FC, #D9EAFB);">
        <div class="overlay position-absolute top-0 start-0 w-100 h-100" style="background: rgba(255, 255, 255, 0.5);"></div>
        <div class="content position-relative z-2 col-md-7 py-5 px-4">
            <div>
                <h1 class="display-4 fw-bold text-danger animate-section-item">We Provide</h1>
                <h1 class="display-4 fw-bold text-primary animate-section-item">Top Universities <span
                        style="color: red">Accross the world</span></h1>
            </div>
    </section>

    @include('Frontend.includes.country-slider')
    </section>
    <!-- Appointment Section -->
    <section
        style="width: 100%; position: relative; background-color:rgb(222, 222, 222); background-size: cover; background-position: center; border-bottom: 1px solid rgb(222, 222, 222);">
        <div class="container py-4">
            <div class="row align-items-center">
                <div class="bubble-container">
                    <h1 class="bubble-title">Get to know us better</h1>
                    <h3 class="bubble-subtitle">Make an Appointment Now!</h3>
                </div>

                <div class="col-md-6 bg-white p-5 rounded border">
                    @include('Frontend.includes.contact')
                </div>
            </div>
        </div>
<<<<<<< HEAD
        <div class=" col-sm-12 col-md-6 ">
                @include('Frontend.includes.banner-slider')
        </div>
    </div>
</section>

@include('Frontend.includes.country-slider')
</section>
<section
style="width: 100%; position: relative; background-color:rgb(222, 222, 222); background-size: cover; background-position: center; border-bottom: 1px solid rgb(222, 222, 222);">    <div class="container py-4">
        <div class="row align-items-center">
            <div class="bubble-container">
                <h1 class="bubble-title">Get to know us better</h1>
                <h3 class="bubble-subtitle">Make an Appointment Now!</h3>
            </div>            

            <div class="col-md-6 bg-white p-5 rounded border">
                @include('Frontend.includes.contact')
            </div>
        </div>
    </div>
</section>
@endsection
=======
    </section>
@endsection
>>>>>>> 6cf0be7efdd7564878295a0728719de137ba7743
