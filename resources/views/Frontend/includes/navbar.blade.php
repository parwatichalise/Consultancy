<nav class="navbar navbar-expand-lg py-3"  style="position: sticky; top: 0; z-index: 1000; background:white;">
    <div class="container container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">
            @if ($setting->logo)
                <img src="{{ asset('storage/' . $setting->logo ?? '') }}" style="width:40px;" alt="">
            @else
                <img src="{{ asset('dist/img/logo.jpg') }}" style="width:40px;" alt="">
            @endif
            <small class="orgName">{{ $setting->name ?? '' }}</small>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">

                <!-- Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle mx-2" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Study Abroad
                    </a>
                </li>
                <li class="nav-item">
                    <a class="mx-2 nav-link" href="{{route('learning')}}">Learning Center</a>
                </li>
                <li class="nav-item">
                    <a class="mx-2 nav-link" href="{{route('countries')}}">University</a>
                </li>
                <li class="nav-item">
                    <a class="mx-2 nav-link" href="{{route('services')}}">Services</a>
                </li>
                <li class="nav-item">
                    <a class="mx-2 nav-link" href="{{route('about')}}">About us</a>
                </li>
                <li class="nav-item">
                    <a class="mx-2 nav-link btn" href="{{route('contact')}}"
                        style=" background: linear-gradient(135deg, #0056b3, #003a80); color:white;">&nbsp;&nbsp;Contact us&nbsp;&nbsp;</a>
                </li>
                <li class="nav-item">
                    <span class="openMenuBtn">&#9776;</span>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Dropdown for Countries -->
<div class="dropdown-container ">
    <div class="dropdown">
        <div class="dropdown-content country">
            <div class="row" style="flex:1;">
                <div class="col-3" style="display: flex;align-items: center;">
                    <img src="https://www.flagpedia.net/data/flags/h80/gb.png" alt="United Kingdom Flag"
                        style="width:80px;height:40px">
                    <span style="font-weight: bold;">UK</span>
                </div>
                <div class="col-3" style="display: flex;align-items: center">
                    <img src="https://www.flagpedia.net/data/flags/h80/au.png" alt="Australia Flag"
                        style="width:80px;height:40px">
                    <span style="font-weight: bold;">Australia</span>
                </div>
                <div class="col-3" style="display: flex;align-items: center">
                    <img src="https://www.flagpedia.net/data/flags/h80/de.png" alt="Germany Flag" style="width:80px;height:40px">
                    <span style="font-weight: bold;">Germany</span>
                </div>
                <div class="col-3" style="display: flex;align-items: center">
                    <img src="https://www.flagpedia.net/data/flags/h80/ca.png" alt="Canada Flag" style="width:80px;height:40px">
                    <span style="font-weight: bold;">Canada</span>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="overlay"></div>
<div id="sideMenu" style="background: linear-gradient(135deg, #0056b3, #003a80);">
    <a href="javascript:void(0)" class="closeMenuBtn" style="color: #ffffff;">&times;</a>
    <a href="{{route('home')}}" style="color: #ffffff;" >Home</a>
    <a href="{{route('about')}}" style="color: #ffffff;">About</a>
    <a href="{{route('services')}}" style="color: #ffffff;">Services</a>
    <a href="{{route('contact')}}" style="color: #ffffff;">Contact</a>
    <a href="{{route('faqs')}}" style="color: #ffffff;">FAQ</a>
    <a href="{{route('event')}}" style="color: #ffffff;">Events</a>
    <a href="{{route('testimonials')}}" style="color: #ffffff;">Testimonials and Reviews</a>
    <a href="{{route('success')}}" style="color: #ffffff;">Success Stories</a>

    <a href="#" style="color: #ffffff;">Blog</a>
</div>

