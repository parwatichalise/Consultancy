@extends('Frontend.includes.main')

@section('head')
    <style>
        .success-card {
            background: linear-gradient(90deg, #00154F, #0275d8);
            color: #fff;
            border: none;
        }

        .success-card h5 {
            font-size: 1.5rem;
            line-height: 1.2;
        }

        .success-card img {
            border: 3px solid #fff;
        }

        .badge-custom {
            background-color: #ff5722;
            font-size: 0.9rem;
            padding: 0.5em 1em;
        }

        .quote-block {
            font-size: 1.2rem;
            font-weight: bold;
            color: #00154F;
        }
    </style>
@endsection
@section('content')
    <div class="container my-5">
        <section class="container border-bottom pb-3">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1 style="color: #0047AB ;">Our Students Journey:</h1>
                    <h1 style=" color:#FF0000; ">Inspiring Success Stories from Global Excel</h1>
                </div>
            </div>
        </section>


        <div class="row mt-5 g-4">
            <div class="col-md-6">
                <div class="card border-0 shadow-lg rounded-3 p-3">
                    <div class="row align-items-center">
                        <div class="success-card col-4 shadow-sm rounded-4 ">
                            <h6 class="card-title mb-2">AUSTRALIA<br>Student Visa<br>Granted</h5>
                                <img src="success_image.jpg" alt="Success Image" class="img-fluid rounded-circle my-3"
                                    style="width: 100px; height: 100px;">
                                <h4 class="mt-2">Nishan Dangi</h3>
                                    <p class="badge badge-custom mt-2">Bachelor of Arts</p>
                        </div>
                        <div class="col-8">
                            <h5 class="fw-bold mb-0">Nishan Dangi</h5>
                            <p class="text-muted mb-1">Australia VISA Success</p>
                            <p class="text-muted">September 15, 2024</p>
                        </div>
                    </div>
                    <div class="mt-3">
                        <p>
                            “Setting goals is the first step in turning the invisible into the visible.”
                            Congratulations on your visa grant. Your hard work paid off as you fly to your dreamland.
                        </p>
                        <a href="{{ route('successstory') }}" class="text-primary fw-bold mt-2">KNOW MORE
                            <span>&rarr;</span></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card border-0 shadow-lg rounded-3 p-3">
                    <div class="row align-items-center">
                        <div class="success-card col-4 shadow-sm rounded-4 ">
                            <h6 class="card-title mb-2">AUSTRALIA<br>Student Visa<br>Granted</h5>
                                <img src="success_image.jpg" alt="Success Image" class="img-fluid rounded-circle my-3"
                                    style="width: 100px; height: 100px;">
                                <h4 class="mt-2">Rijan Shah</h3>
                                    <p class="badge badge-custom mt-2">Bachelor of Arts</p>
                        </div>

                        <div class="col-8">
                            <h5 class="fw-bold mb-0">Rijan Shah</h5>
                            <p class="text-muted mb-1">Australia VISA Success</p>
                            <p class="text-muted">September 15, 2024</p>
                        </div>
                    </div>
                    <div class="mt-3">
                        <p>
                            “Setting goals is the first step in turning the invisible into the visible.”
                            Congratulations on your visa grant. Your hard work paid off as you fly to your dreamland.
                        </p>
                        <a href="{{ route('successstory') }}" class="text-primary fw-bold mt-2">KNOW MORE
                            <span>&rarr;</span></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card border-0 shadow-lg rounded-3 p-3">
                    <div class="row align-items-center">
                        <div class="success-card col-4 shadow-sm rounded-4 ">
                            <h6 class="card-title mb-2">AUSTRALIA<br>Student Visa<br>Granted</h5>
                                <img src="success_image.jpg" alt="Success Image" class="img-fluid rounded-circle my-3"
                                    style="width: 100px; height: 100px;">
                                <h4 class="mt-2">Bishal Dangi</h3>
                                    <p class="badge badge-custom mt-2">Bachelor of Arts</p>
                        </div>
                        <div class="col-8">
                            <h5 class="fw-bold mb-0">Bishal Dangi</h5>
                            <p class="text-muted mb-1">Australia VISA Success</p>
                            <p class="text-muted">September 15, 2024</p>
                        </div>
                    </div>
                    <div class="mt-3">
                        <p>
                            “Setting goals is the first step in turning the invisible into the visible.”
                            Congratulations on your visa grant. Your hard work paid off as you fly to your dreamland.
                        </p>
                        <a href="{{ route('successstory') }}" class="text-primary fw-bold mt-2">KNOW MORE
                            <span>&rarr;</span></a>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card border-0 shadow-lg rounded-3 p-3">
                    <div class="row align-items-center">
                        <div class="success-card col-4 shadow-sm rounded-4 ">
                            <h6 class="card-title mb-2">AUSTRALIA<br>Student Visa<br>Granted</h5>
                                <img src="success_image.jpg" alt="Success Image" class="img-fluid rounded-circle my-3"
                                    style="width: 100px; height: 100px;">
                                <h4 class="mt-2">Bandana Gautan</h3>
                                    <p class="badge badge-custom mt-2">Bachelor of Arts</p>
                        </div>
                        <div class="col-8">
                            <h5 class="fw-bold mb-0">Bandana Gautam</h5>
                            <p class="text-muted mb-1">Australia VISA Success</p>
                            <p class="text-muted">September 15, 2024</p>
                        </div>
                    </div>
                    <div class="mt-3">
                        <p>
                            “Setting goals is the first step in turning the invisible into the visible.”
                            Congratulations on your visa grant. Your hard work paid off as you fly to your dreamland.
                        </p>
                        <a href="{{ route('successstory') }}" class="text-primary fw-bold mt-2">KNOW MORE
                            <span>&rarr;</span></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
@endsection
