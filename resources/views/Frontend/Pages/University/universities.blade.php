@extends('Frontend.includes.main')

@section('head')
    <style>
        .section-title {
            font-size: 2.5rem;
            font-weight: bold;
            color: #064D7C;
            margin-bottom: 20px;
        }

        .info-section {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .info-section h3 {
            font-size: 1.5rem;
            font-weight: bold;
            color: #000;
            margin-bottom: 10px;
        }

        .info-section p {
            color: #555;
            margin-bottom: 0;
        }

        .info-section a {
            color: #064D7C;
            font-weight: bold;
            display: inline-block;
            margin-top: 10px;
        }

        .info-section a i {
            color: red;
            font-size: 1rem;
            margin-left: 5px;
        }

        .study-options {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }

        .study-option {
            background-color: #e8f3fa;
            color: #064D7C;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            font-weight: bold;
            flex: 1 0 calc(20% - 20px);
            max-width: 18%;
            text-decoration: none;
            transition: transform 0.3s, box-shadow 0.3s;
            position: relative;
        }

        .study-option:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .study-option span {
            font-size: 1.5rem;
            font-weight: bold;
            display: block;
            margin-bottom: 10px;
            color: #064D7C;
        }

        .study-option h4 {
            margin: 0;
            font-size: 1rem;
        }

        .study-option:hover h4 {
            text-decoration: underline;
        }

        @media (max-width: 768px) {
            .study-option {
                flex: 1 0 calc(50% - 20px);
            }
        }

        @media (max-width: 576px) {
            .study-option {
                flex: 1 0 100%;
            }
        }

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

        .section-title {
            font-size: 2.5rem;
            font-weight: bold;
            color: #064D7C;
            margin-bottom: 20px;
        }

        .section-content {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: bold;
            color: #064D7C;
            margin-bottom: 20px;
            text-align: center;
        }
    </style>
@endsection

@section('content')
<section class="header-section position-relative text-start p-5 animate-section" 
         style="background: linear-gradient(180deg, #E8F2FC, #D9EAFB);">
    <div class="overlay position-absolute top-0 start-0 w-100 h-100" 
         style="background: rgba(255, 255, 255, 0.5);"></div>
    <div class="content position-relative z-2 col-md-7 py-5">
        <h1 style="display-4 fw-bold text-danger">{{ $university->name }} </h1>
        <p style="display-4 fw-bold text-danger">
            With a proud history built on a mission to advance knowledge and learning to shape the future of our
            world, we are the most successful Australian university at combining accessibility and excellence. Our
            passionate teachers deliver globally recognised learning to our diverse student body.
        </p>        
    </div>
</section>
    <section class="container my-5">
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="{{ $university->image_url ? asset('storage/' . $university->image_url) : asset('dist/img/default-image.png') }}" 
                alt="{{ $university->name }}" class="img-thumbnail"  style="width: 400px; height: auto;">                   
            </div>
            <div class="col-md-6">
                <h2 class="section-title">Making a Difference</h2>
                <p>{{ $university->name }} 's schools and departments are known for making a positive difference in the
                    lives of our students, partners, and communities.</p>
                <p>{{ $university->name }} {{ $university->description }}</p>
                <a href="{{ $university->website_url ?? '#' }}" class="btn btn-primary">Visit Website</a>
            </div>
        </div>
    </section>
    <div class="container my-5">
        <section class="mt-5">
            <h2 class="section-title text-center">Ways to Study</h2>
            <p class="text-center">
                Take the next step in your career with flexible online study options, industry connections, and the
                support of expert teachers.
            </p>
            <div class="study-options">
                <a href="{{ $university->website_url ?? '#' }}" class="study-option" target="_blank">
                    <span>1</span>
                    <h4>Undergraduate</h4>
                </a>
                <a href="{{ $university->website_url ?? '#' }}" class="study-option" target="_blank">
                    <span>2</span>
                    <h4>Postgraduate</h4>
                </a>
                <a href="{{ $university->website_url ?? '#' }}" class="study-option" target="_blank">
                    <span>3</span>
                    <h4>Graduate Research Degrees</h4>
                </a>
                <a href="{{ $university->website_url ?? '#' }}" class="study-option" target="_blank">
                    <span>4</span>
                    <h4>Online Courses</h4>
                </a>
                <a href="{{ $university->website_url ?? '#' }}" class="study-option" target="_blank">
                    <span>5</span>
                    <h4>Short Courses</h4>
                </a>
            </div>
        </section>

        <section class="py-4 bg-light">
            <div class="container my-5">
                <h2 class="section-title">{{ $university->name }} - Courses Offered</h2>
                <div class="row">
                    <div class="col-md-6 px-4">
                        <ul class="list-unstyled">
                            @foreach ($university->courses->slice(0, ceil($university->courses->count() / 2)) as $course)
                                <li class="mb-3 d-flex align-items-center">
                                    <span
                                        class="d-inline-flex align-items-center justify-content-center text-primary border border-primary rounded-circle me-3"
                                        style="width: 28px; height: 28px;">
                                        &#10003;
                                    </span>
                                    {{ $course->name }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-md-6 px-4">
                        <ul class="list-unstyled">
                            @foreach ($university->courses->slice(ceil($university->courses->count() / 2)) as $course)
                                <li class="mb-3 d-flex align-items-center">
                                    <span
                                        class="d-inline-flex align-items-center justify-content-center text-primary border border-primary rounded-circle me-3"
                                        style="width: 28px; height: 28px;">
                                        &#10003;
                                    </span>
                                    {{ $course->name }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <a href="{{ $university->website_url ?? '#' }}" class="btn btn-primary mt-4">Visit Website</a>
            </div>
        </section>
        <div class="container my-5">
            <div class="info-section">
                <h3>Entry Requirements</h3>
                <p>Our courses have a range of academic and English language requirements. These requirements are in place
                    to make sure you have the knowledge and skills you need to succeed in your studies.</p>
                <a href="{{ $university->website_url ?? '#' }}" target="_blank">Visit Website <i
                        class="bi bi-arrow-right-circle-fill"></i></a>
            </div>

            <div class="info-section">
                <h3>How to Apply</h3>
                <p>Select your level of study and begin your application process.</p>
                <a href="{{ $university->website_url ?? '#' }}" target="_blank">Visit Website <i
                        class="bi bi-arrow-right-circle-fill"></i></a>
            </div>

            <div class="info-section">
                <h3>International Tuition Fees and Scholarships</h3>
                <p>International study is a big decision, especially when the future can look a little uncertain. So we've
                    designed our range of scholarships to give you the support you need in a changing world. In the form of
                    tuition fee reductions, these scholarships recognize your potential and reward your hard work.</p>
                <a href="{{ $university->website_url ?? '#' }}" target="_blank">Visit Website <i
                        class="bi bi-arrow-right-circle-fill"></i></a>
            </div>
        </div>


        <section class="container my-5">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{ asset('dist/img/university.png') }}" alt="Slide 1">
                        <div class="slide-title">Explore Your Future</div>
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('dist/img/university.png') }}" alt="Slide 2">
                        <div class="slide-title">Innovative Learning</div>
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('dist/img/university.png') }}" alt="Slide 3">
                        <div class="slide-title">Global Opportunities</div>
                    </div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-pagination"></div>
            </div>
        </section>
    </div>

    <script>
        const swiper = new Swiper('.swiper-container', {
            slidesPerView: 1,
            spaceBetween: 10,
            loop: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                640: {
                    slidesPerView: 1
                },
                768: {
                    slidesPerView: 2
                },
                1024: {
                    slidesPerView: 3
                },
            },
        });
    </script>
@endsection
