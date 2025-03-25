@extends('Frontend.includes.main')

@section('head')
    <style>
        section.header-section {
            position: relative;
            width: 100%;
            background: linear-gradient(180deg, #E8F2FC, #D9EAFB); /* Light blue gradient */
            padding: 100px 20px;
            text-align: left;
            color: #fff;
            border-bottom: 1px solid rgb(222, 222, 222);
        }

        section.header-section .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.5); 
            z-index: 1;
        }

        section.header-section .content {
            position: relative;
            z-index: 2;
        }

        section.header-section .content h1 {
            font-size: 48px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        section.header-section .content h1:first-child {
            color: #0047AB; 
        }

        section.header-section .content h1:last-child {
            color: #FF0000; 
        }

        section.header-section .content p {
            font-size: 18px;
            margin-top: 20px;
            line-height: 1.6;
            color: #000;
        }

        .overview-section {
            padding: 50px 20px;
        }

        .overview-section h3 {
            font-weight: bold;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .overview-section h4 {
            font-weight: bold;
            margin-top: 30px;
        }

        .overview-section p {
            font-size: 16px;
            line-height: 1.8;
        }

        .overview-section .row .col-6 {
            margin-top: 15px;
        }

        .overview-section .p-3 {
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .price-section {
            padding: 20px;
            background-color: #f8f9fa;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            text-align: center;
        }

        .price-section h3 {
            font-size: 24px;
            color: #007bff;
            margin-bottom: 15px;
        }

        .price-section p {
            font-size: 18px;
        }

        .price-section ul {
            list-style: none;
            padding: 0;
            margin-top: 15px;
        }

        .price-section ul li {
            font-size: 16px;
            margin-bottom: 10px;
        }

        .price-section ul li i {
            margin-right: 10px;
        }

        .price-section .btn {
            margin-top: 20px;
        }
        table {
        width: 100%; 
        margin-top: 20px;
        border-collapse: separate; 
        border-spacing: 10px 15px;
        }

        th, td {
            padding: 15px; 
            text-align: center; 
            border: 1px solid #ddd;
            background-color: #f9f9f9; 
        }

        th {
            background-color: #f1f1f1; 
            font-weight: bold;
            text-transform: uppercase;
        }

    .test-duration-section {
            padding: 50px 20px;
            background-color: #f9f9f9;
            border-top: 1px solid #ddd;
        }

        .test-duration-section h2 {
            font-size: 28px;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
        }

        .test-duration-section p {
            font-size: 16px;
            line-height: 1.8;
            color: #555;
        }

        .test-duration-section table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        .test-duration-section table th,
        .test-duration-section table td {
            padding: 15px;
            text-align: center;
            border: 1px solid #ddd;
        }

        .test-duration-section table th {
            background-color: #f1f1f1;
            font-weight: bold;
        }

        /* Band Scale Section */
        .band-scale-section {
            padding: 50px 20px;
        }

        .band-scale-section h2 {
            font-size: 28px;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
        }

        .band-scale-section p {
            font-size: 16px;
            line-height: 1.8;
            color: #555;
        }

        .band-scale-section table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        .band-scale-section table th,
        .band-scale-section table td {
            padding: 15px;
            text-align: left;
            border: 1px solid #ddd;
        }

        .band-scale-section table th {
            background-color: #f1f1f1;
            font-weight: bold;
        }

        /* Enroll Section */
        .enroll-section {
            background-color: #f8f9fa;
            padding: 50px 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            margin-top: 30px;
        }

        .enroll-section h3 {
            font-size: 24px;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
        }

        .enroll-section form .form-group {
            margin-bottom: 15px;
        }

        .enroll-section form input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .enroll-section form button {
            width: 100%;
            padding: 10px;
            background-color: #ff0000;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        .enroll-section form button:hover {
            background-color: #cc0000;
        }

        .custom-padding {
    padding:4rem;
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

        .text-content, .cards {
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
    </style>
@endsection

@section('content')
    <!-- Header Section -->
    <section class="header-section">
        <div class="overlay"></div>
        <div class="content col-md-7 custom-padding"> 
            <h1>IELTS</h1>
            <h1 style="color: #FF0000;">Test Preparation</h1>
            <p>
                It is a test of English Language proficiency. It is jointly managed by the University of Cambridge ESOL Examinations, the British Council, and IDP Education Australia. There are two versions of the pte: The Academic Version and the General Version.
            </p>
        </div>
    </section>

    <!-- Overview Section -->
    <div class="container overview-section">
        <div class="row g-4">
            <!-- Left Content -->
            <div class="col-md-8">
                <h1 style="font-weight: bold;">Overview</h1>
                <p>
                    IELTS stands for “International English Language Testing System.” The Academic Version is intended for those who want to enroll in universities and other institutions of higher education and for professionals such as medical professionals and nurses who want to study or practice.
                </p>
                <p>
                    The General Training Version is intended for those planning to undertake non-academic training or employment for immigration purposes.
                </p>
                <p>
                    IELTS is accepted by almost all Australian, British, Canadian, Irish, New Zealand, and more than 1800 US academic institutions. It is the only acceptable English test for immigration to Australia and also accepted by the UK and Canada.
                </p>

                <!-- Types of IELTS -->
                <h4>Types of IELTS Exam</h4>
                <div class="row">
                    <div class="col-md-4"> <!-- Reduced width to 4 (instead of 6) -->
                        <div class="p-4 border" style="min-height: 150px; background: linear-gradient(180deg, #E8F2FC, #D9EAFB);"> <!-- Added the gradient background -->
                            <h5 class="text-primary mb-2">01</h5>
                            <h5>Ielts Academic Test</h5>
                        </div>
                    </div>
                    
                    
                    <div class="col-md-4"> <!-- Reduced width to 4 (instead of 6) -->
                        <div class="p-4 border" style="min-height: 150px; background: linear-gradient(180deg, #E8F2FC, #D9EAFB);"> <!-- Added the gradient background -->
                            <h5 class="text-primary mb-2">02</h5>
                            <h5>Ielts General Test</h5>
                        </div>
                    </div>
                    
                </div>
            </div>

            <!-- Right Content -->
            <div class="col-md-4">
                <div class="price-section" style="background: linear-gradient(180deg, #E8F2FC, #D9EAFB);">
                    <h2 style="font-weight: bold;">IELTS Course</h2>
                    <p class="text-danger fs-4 fw-bold mt-3">NPR 7,500</p>
                    <p>per session</p>
                    <ul>
                        <li><i class="fas fa-check-circle text-success"></i> Complete Classes – 6 weeks</li>
                        <li><i class="fas fa-check-circle text-success"></i> Free Practice Materials</li>
                        <li><i class="fas fa-check-circle text-success"></i> Full Teaching Support</li>
                    </ul>
                    <button class="btn btn-danger w-100">Book Now</button>
                    <hr class="my-4">
                    <h5>IELTS Test Detail in Nepal</h5>
                    <br>
                    <h5>IELTS Academic Test</h5>
                    <h5>NPR 23,500.00</h5>
                    <br>
                    <h5>IELTS General Test</h5>
                    <h5>NPR 23,500.00</h5>
                </div>
            </div>
        </div>
    </div>

 <!-- Test Duration Section -->
 <div class="container test-duration-section mt-5">
        <h2 style="font-weight: bold;">Total Test Duration: 2 hours 45 minutes</h2>
        <p>The first three modules – Listening, Reading, and Writing (always in that order) – are completed in one day with no break in between. The Speaking Module may be taken at the discretion of the test center.</p>
        <table>
            <thead>
                <tr>
                    <th>Listening</th>
                    <th>Reading</th>
                    <th>Writing</th>
                    <th>Speaking</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>30 Minutes</td>
                    <td>60 Minutes</td>
                    <td>60 Minutes</td>
                    <td>11-14 Minutes</td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Band Scale Section -->
    <div class="container mt-5">
        <div class="row">
            <!-- Band Scale Table Section (Left Side) - Wider Table -->
            <div class="col-md-8">
                <h2 style="font-weight: bold;">IELTS Band Scale</h2>

                <table>
                    <thead>
                        <tr>
                            <th>Band Score</th>
                            <th>Level of Proficiency</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>9</td>
                            <td>Expert User</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Very Good User</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Good User</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Competent User</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Modest User</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Limited User</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Intermittent User</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Non User</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Didnot attempt test</td>
                        </tr>
                    </tbody>
                </table>
            </div>
    
            <!-- Enroll Section (Right Side) - Long and Less Wide -->
            <div class="col-md-4">
                <div class="enroll-section" style="height: 750px;"> <!-- Fixed Height for Enroll Section -->
                    <h3 class="text-center">Enroll Now</h3>
                    <form>
                        <div class="form-group">
                            <label for="name">Your Name *</label>
                            <input type="text" id="name" class="form-control" placeholder="Enter your name">
                        </div>
                        <div class="form-group">
                            <label for="email">Your Email *</label>
                            <input type="email" id="email" class="form-control" placeholder="Enter your email">
                        </div>
                        <div class="form-group">
                            <label for="mobile">Contact Number *</label>
                            <input type="text" id="mobile" class="form-control" placeholder="Enter Mobile Number">
                        </div>
                        <div class="form-group">
                            <label for="mobile">Select Your Course *</label>
                            <input type="text" id="course" class="form-control" placeholder="Enter Course">
                        </div>
                        <button type="submit" class="btn btn-danger w-100">Enroll Now</button>
                    </form>
                </div>
            </div>
        </div>
    </div> 
@endsection
