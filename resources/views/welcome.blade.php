@extends('layouts.app')
@section('content')

    <!-- HERO
    ================================================== -->
    <section class="py-4 py-md-13 position-relative bg-white">
        <!-- Cursor position parallax -->
        <div class="position-absolute right-0 left-0 top-0 bottom-0">
            <div class="cs-parallax">
                <div class="cs-parallax-layer" data-depth="0.1">
                    <img class="img-fluid" src="{{asset('assets')}}/img/parallax/layer-01.svg" alt="Layer">
                </div>
                <div class="cs-parallax-layer" data-depth="0.3">
                    <img class="img-fluid" src="{{asset('assets')}}/img/parallax/layer-02.svg" alt="Layer">
                </div>
                <div class="cs-parallax-layer" data-depth="0.2">
                    <img class="img-fluid" src="{{asset('assets')}}/img/parallax/layer-03.svg" alt="Layer">
                </div>
                <div class="cs-parallax-layer" data-depth="0.2">
                    <img class="img-fluid" src="{{asset('assets')}}/img/parallax/layer-04.svg" alt="Layer">
                </div>
                <div class="cs-parallax-layer" data-depth="0.4">
                    <img class="img-fluid" src="{{asset('assets')}}/img/parallax/layer-05.svg" alt="Layer">
                </div>
                <div class="cs-parallax-layer" data-depth="0.3">
                    <img class="img-fluid" src="{{asset('assets')}}/img/parallax/layer-06.svg" alt="Layer">
                </div>
                <div class="cs-parallax-layer" data-depth="0.2">
                    <img class="img-fluid" src="{{asset('assets')}}/img/parallax/layer-07.svg" alt="Layer">
                </div>
                <div class="cs-parallax-layer" data-depth="0.2">
                    <img class="img-fluid" src="{{asset('assets')}}/img/parallax/layer-08.svg" alt="Layer">
                </div>
                <div class="cs-parallax-layer" data-depth="0.4">
                    <img class="img-fluid" src="{{asset('assets')}}/img/parallax/layer-09.svg" alt="Layer">
                </div>
                <div class="cs-parallax-layer" data-depth="0.3">
                    <img class="img-fluid" src="{{asset('assets')}}/img/parallax/layer-10.svg" alt="Layer">
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-5 col-lg-6 order-md-2" data-aos="fade-in" data-aos-delay="50">

                    <!-- Image -->
                    <img src="{{asset('assets')}}/img/illustrations/illustration-1.png"
                         class="img-fluid mw-md-150 mw-lg-130 mb-6 mb-md-0" alt="...">

                </div>
                <div class="col-12 col-md-7 col-lg-6 order-md-1 px-md-0">
                    <!-- Heading -->
                    <h1 class="display-2" data-aos="fade-left" data-aos-duration="150">
                        Learn From <span class="text-orange fw-bold">Anywhere</span>
                    </h1>

                    <!-- Text -->
                    <p class="lead pe-md-8 text-capitalize" data-aos="fade-up" data-aos-duration="200">
                        Technology is bringing a massive wave of evolution on learning things in different ways.
                    </p>

                    <!-- Buttons -->
                    <a href="course-list-v1.html"
                       class="btn btn-wide btn-slide slide-primary shadow mb-4 mb-md-0 me-md-5" data-aos-duration="200"
                       data-aos="fade-up">GET STARTED</a>
                    <a href="{{ url('courses') }}" class="btn btn-primary btn-wide lift d-none d-lg-inline-block"
                       data-aos-duration="200" data-aos="fade-up">VIEW COURSES</a>

                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>

    <!-- FEATURED PRODUCT
    ================================================== -->
    <section class="pt-5 pb-9 py-md-11">
        <div class="container">
            <div class="row align-items-center mb-5" data-aos="fade-up">
                <div class="col-md mb-2 mb-md-0">
                    <h1 class="mb-1">Featured Courses</h1>
                    <p class="font-size-lg text-capitalize">Discover your perfect program in our courses.</p>
                </div>
                <div class="col-md-auto">
                    <select class="form-select form-select-sm text-primary fw-medium shadow" data-choices>
                        <option>All Subjects</option>
                        <option>Another option</option>
                        <option>Something else here</option>
                    </select>
                </div>
            </div>

            <div class="mx-n4"
                 data-flickity='{"pageDots": true, "prevNextButtons": false, "cellAlign": "left", "wrapAround": true, "imagesLoaded": true}'>
                <div class="col-12 col-md-6 col-xl-4 pb-4 pb-md-7" data-aos="fade-up" data-aos-delay="50"
                     style="padding-right:15px;padding-left:15px;">
                    <!-- Card -->
                    <div class="card border shadow p-2 sk-fade">
                        <!-- Image -->
                        <div class="card-zoom position-relative">
                            <div class="badge-float sk-fade-top top-0 right-0 mt-4 me-4">
                                <a href="course-single-v1.html"
                                   class="btn btn-xs btn-dark text-white rounded-circle lift opacity-dot-7 me-1 p-2 d-inline-flex justify-content-center align-items-center w-36 h-36">
                                    <!-- Icon -->
                                    <svg width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M17.8856 8.64995C17.7248 8.42998 13.8934 3.26379 8.99991 3.26379C4.10647 3.26379 0.274852 8.42998 0.114223 8.64974C-0.0380743 8.85843 -0.0380743 9.14147 0.114223 9.35016C0.274852 9.57013 4.10647 14.7363 8.99991 14.7363C13.8934 14.7363 17.7248 9.5701 17.8856 9.35034C18.0381 9.14169 18.0381 8.85843 17.8856 8.64995ZM8.99991 13.5495C5.39537 13.5495 2.27345 10.1206 1.3493 8.99965C2.27226 7.87771 5.38764 4.4506 8.99991 4.4506C12.6043 4.4506 15.726 7.8789 16.6505 9.00046C15.7276 10.1224 12.6122 13.5495 8.99991 13.5495Z"
                                            fill="currentColor"/>
                                        <path
                                            d="M8.9999 5.43958C7.03671 5.43958 5.43945 7.03683 5.43945 9.00003C5.43945 10.9632 7.03671 12.5605 8.9999 12.5605C10.9631 12.5605 12.5603 10.9632 12.5603 9.00003C12.5603 7.03683 10.9631 5.43958 8.9999 5.43958ZM8.9999 11.3736C7.69103 11.3736 6.62629 10.3089 6.62629 9.00003C6.62629 7.6912 7.69107 6.62642 8.9999 6.62642C10.3087 6.62642 11.3735 7.6912 11.3735 9.00003C11.3735 10.3089 10.3088 11.3736 8.9999 11.3736Z"
                                            fill="currentColor"/>
                                    </svg>

                                </a>
                                <a href="course-single-v1.html"
                                   class="btn btn-xs btn-dark text-white rounded-circle lift opacity-dot-7 p-2 d-inline-flex justify-content-center align-items-center w-36 h-36">
                                    <!-- Icon -->
                                    <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.2437 1.20728C10.0203 1.20728 8.87397 1.66486 7.99998 2.48357C7.12598 1.66486 5.97968 1.20728 4.7563 1.20728C2.13368 1.20728 0 3.341 0 5.96366C0 7.2555 0.425164 8.52729 1.26366 9.74361C1.91197 10.6841 2.80887 11.5931 3.92937 12.4454C5.809 13.8753 7.66475 14.6543 7.74285 14.6867L7.99806 14.7928L8.25384 14.6881C8.33199 14.6562 10.1889 13.8882 12.0696 12.4635C13.1907 11.6142 14.0881 10.7054 14.7367 9.7625C15.575 8.54385 16 7.26577 16 5.96371C16 3.341 13.8663 1.20728 11.2437 1.20728ZM8.00141 13.3353C6.74962 12.7555 1.33966 10.0142 1.33966 5.96366C1.33966 4.07969 2.87237 2.54698 4.75634 2.54698C5.827 2.54698 6.81558 3.03502 7.46862 3.88598L8.00002 4.57845L8.53142 3.88598C9.18446 3.03502 10.173 2.54698 11.2437 2.54698C13.1276 2.54698 14.6604 4.07969 14.6604 5.96366C14.6603 10.0433 9.25265 12.7613 8.00141 13.3353Z"
                                            fill="currentColor"/>
                                    </svg>

                                </a>
                            </div>

                            <a href="course-single-v1.html" class="card-img sk-thumbnail d-block">
                                <img class="rounded shadow-light-lg"
                                     src="{{asset('assets')}}/img/products/product-1.jpg" alt="...">
                            </a>

                            <span
                                class="badge sk-fade-bottom badge-lg badge-orange badge-pill badge-float bottom-0 left-0 mb-4 ms-4">
                                <span class="text-white text-uppercase fw-bold font-size-xs">BEST SELLER</span>
                            </span>
                        </div>

                        <!-- Footer -->
                        <div class="card-footer px-2 pb-2 mb-1 pt-4 position-relative">
                            <a href="instructors-single.html" class="d-block">
                                <div
                                    class="avatar avatar-xl badge-float position-absolute top-0 right-0 mt-n6 me-5 rounded-circle shadow border border-white border-w-lg">
                                    <img src="{{asset('assets')}}/img/avatars/avatar-1.jpg" alt="..."
                                         class="avatar-img rounded-circle">
                                </div>
                            </a>

                            <!-- Preheading -->
                            <a href="course-single-v1.html"><span
                                    class="mb-1 d-inline-block text-gray-800">Photography</span></a>


                            <!-- Heading -->
                            <div class="position-relative">
                                <a href="course-single-v1.html" class="d-block stretched-link"><h4
                                        class="line-clamp-2 h-md-48 h-lg-58 me-md-6 me-lg-10 me-xl-4 mb-2">Fashion
                                        Photography From Professional</h4></a>

                                <div class="d-lg-flex align-items-end flex-wrap mb-n1">
                                    <div class="star-rating mb-2 mb-lg-0 me-lg-3">
                                        <div class="rating" style="width:50%;"></div>
                                    </div>

                                    <div class="font-size-sm">
                                        <span>5.45 (5.8k+ reviews)</span>
                                    </div>
                                </div>

                                <div class="row mx-n2 align-items-end mh-50">
                                    <div class="col px-2">
                                        <ul class="nav mx-n3">
                                            <li class="nav-item px-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="me-2 d-flex icon-uxs text-secondary">
                                                        <!-- Icon -->
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M17.1947 7.06802L14.6315 7.9985C14.2476 7.31186 13.712 6.71921 13.0544 6.25992C12.8525 6.11877 12.6421 5.99365 12.4252 5.88303C13.0586 5.25955 13.452 4.39255 13.452 3.43521C13.452 1.54098 11.9124 -1.90735e-06 10.0197 -1.90735e-06C8.12714 -1.90735e-06 6.58738 1.54098 6.58738 3.43521C6.58738 4.39255 6.98075 5.25955 7.61414 5.88303C7.39731 5.99365 7.1869 6.11877 6.98502 6.25992C6.32752 6.71921 5.79178 7.31186 5.40787 7.9985L2.8447 7.06802C2.33612 6.88339 1.79688 7.26044 1.79688 7.80243V16.5178C1.79688 16.8465 2.00256 17.14 2.31155 17.2522L9.75312 19.9536C9.93073 20.018 10.1227 20.0128 10.2863 19.9536L17.7278 17.2522C18.0368 17.14 18.2425 16.8465 18.2425 16.5178V7.80243C18.2425 7.26135 17.704 6.88309 17.1947 7.06802ZM10.0197 1.5625C11.0507 1.5625 11.8895 2.40265 11.8895 3.43521C11.8895 4.46777 11.0507 5.30792 10.0197 5.30792C8.98866 5.30792 8.14988 4.46777 8.14988 3.43521C8.14988 2.40265 8.98866 1.5625 10.0197 1.5625ZM9.23844 18.1044L3.35938 15.9703V8.91724L9.23844 11.0513V18.1044ZM10.0197 9.67255L6.90644 8.54248C7.58164 7.51892 8.75184 6.87042 10.0197 6.87042C11.2875 6.87042 12.4577 7.51892 13.1329 8.54248L10.0197 9.67255ZM16.68 15.9703L10.8009 18.1044V11.0513L16.68 8.91724V15.9703Z"
                                                                fill="currentColor"/>
                                                        </svg>

                                                    </div>
                                                    <div class="font-size-sm">5 lessons</div>
                                                </div>
                                            </li>
                                            <li class="nav-item px-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="me-2 d-flex icon-uxs text-secondary">
                                                        <!-- Icon -->
                                                        <svg width="16" height="16" viewBox="0 0 16 16"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M14.3164 4.20996C13.985 4.37028 13.8464 4.76904 14.0067 5.10026C14.4447 6.00505 14.6667 6.98031 14.6667 8C14.6667 11.6759 11.6759 14.6667 8 14.6667C4.32406 14.6667 1.33333 11.6759 1.33333 8C1.33333 4.32406 4.32406 1.33333 8 1.33333C9.52328 1.33333 10.9543 1.83073 12.1387 2.77165C12.4259 3.00098 12.846 2.95296 13.0754 2.66471C13.3047 2.37663 13.2567 1.95703 12.9683 1.72803C11.5661 0.613607 9.8016 0 8 0C3.58903 0 0 3.58903 0 8C0 12.411 3.58903 16 8 16C12.411 16 16 12.411 16 8C16 6.77767 15.7331 5.60628 15.2067 4.51969C15.0467 4.18766 14.6466 4.04932 14.3164 4.20996Z"
                                                                fill="currentColor"/>
                                                            <path
                                                                d="M7.99967 2.66663C7.63167 2.66663 7.33301 2.96529 7.33301 3.33329V7.99996C7.33301 8.36796 7.63167 8.66663 7.99967 8.66663H11.333C11.701 8.66663 11.9997 8.36796 11.9997 7.99996C11.9997 7.63196 11.701 7.33329 11.333 7.33329H8.66634V3.33329C8.66634 2.96529 8.36768 2.66663 7.99967 2.66663Z"
                                                                fill="currentColor"/>
                                                        </svg>

                                                    </div>
                                                    <div class="font-size-sm">8h 12m</div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="col-auto px-2 text-right">
                                        <del class="font-size-sm">$959</del>
                                        <ins class="h4 mb-0 d-block mb-lg-n1">$415.99</ins>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-4 pb-4 pb-md-7" data-aos="fade-up" data-aos-delay="100"
                     style="padding-right:15px;padding-left:15px;">
                    <!-- Card -->
                    <div class="card border shadow p-2 sk-fade">
                        <!-- Image -->
                        <div class="card-zoom position-relative">
                            <a href="course-single-v1.html" class="card-img sk-thumbnail d-block">
                                <img class="rounded shadow-light-lg"
                                     src="{{asset('assets')}}/img/products/product-2.jpg" alt="...">
                            </a>
                        </div>

                        <!-- Footer -->
                        <div class="card-footer px-2 pb-2 mb-1 pt-4 position-relative">
                            <a href="instructors-single.html" class="">
                                <div
                                    class="avatar avatar-xl badge-float position-absolute top-0 right-0 mt-n6 me-5 rounded-circle shadow border border-white border-w-lg">
                                    <img src="{{asset('assets')}}/img/avatars/avatar-2.jpg" alt="..."
                                         class="avatar-img rounded-circle">
                                </div>
                            </a>

                            <!-- Preheading -->
                            <a href="course-single-v1.html"><span
                                    class="mb-1 d-inline-block text-gray-800">Development</span></a>

                            <!-- Heading -->
                            <div class="position-relative">
                                <a href="course-single-v1.html" class="d-block stretched-link"><h4
                                        class="line-clamp-2 h-md-48 h-lg-58 me-md-6 me-lg-10 me-xl-4 mb-2">The Complete
                                        JavaScript Course 2020: Build Real Projects!</h4></a>

                                <div class="d-lg-flex align-items-end flex-wrap mb-n1">
                                    <div class="star-rating mb-2 mb-lg-0 me-lg-3">
                                        <div class="rating" style="width:50%;"></div>
                                    </div>

                                    <div class="font-size-sm">
                                        <span>5.45 (5.8k+ reviews)</span>
                                    </div>
                                </div>

                                <div class="row mx-n2 align-items-end mh-50">
                                    <div class="col px-2">
                                        <ul class="nav mx-n3">
                                            <li class="nav-item px-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="me-2 d-flex icon-uxs text-secondary">
                                                        <!-- Icon -->
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M17.1947 7.06802L14.6315 7.9985C14.2476 7.31186 13.712 6.71921 13.0544 6.25992C12.8525 6.11877 12.6421 5.99365 12.4252 5.88303C13.0586 5.25955 13.452 4.39255 13.452 3.43521C13.452 1.54098 11.9124 -1.90735e-06 10.0197 -1.90735e-06C8.12714 -1.90735e-06 6.58738 1.54098 6.58738 3.43521C6.58738 4.39255 6.98075 5.25955 7.61414 5.88303C7.39731 5.99365 7.1869 6.11877 6.98502 6.25992C6.32752 6.71921 5.79178 7.31186 5.40787 7.9985L2.8447 7.06802C2.33612 6.88339 1.79688 7.26044 1.79688 7.80243V16.5178C1.79688 16.8465 2.00256 17.14 2.31155 17.2522L9.75312 19.9536C9.93073 20.018 10.1227 20.0128 10.2863 19.9536L17.7278 17.2522C18.0368 17.14 18.2425 16.8465 18.2425 16.5178V7.80243C18.2425 7.26135 17.704 6.88309 17.1947 7.06802ZM10.0197 1.5625C11.0507 1.5625 11.8895 2.40265 11.8895 3.43521C11.8895 4.46777 11.0507 5.30792 10.0197 5.30792C8.98866 5.30792 8.14988 4.46777 8.14988 3.43521C8.14988 2.40265 8.98866 1.5625 10.0197 1.5625ZM9.23844 18.1044L3.35938 15.9703V8.91724L9.23844 11.0513V18.1044ZM10.0197 9.67255L6.90644 8.54248C7.58164 7.51892 8.75184 6.87042 10.0197 6.87042C11.2875 6.87042 12.4577 7.51892 13.1329 8.54248L10.0197 9.67255ZM16.68 15.9703L10.8009 18.1044V11.0513L16.68 8.91724V15.9703Z"
                                                                fill="currentColor"/>
                                                        </svg>

                                                    </div>
                                                    <div class="font-size-sm">5 lessons</div>
                                                </div>
                                            </li>
                                            <li class="nav-item px-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="me-2 d-flex icon-uxs text-secondary">
                                                        <!-- Icon -->
                                                        <svg width="16" height="16" viewBox="0 0 16 16"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M14.3164 4.20996C13.985 4.37028 13.8464 4.76904 14.0067 5.10026C14.4447 6.00505 14.6667 6.98031 14.6667 8C14.6667 11.6759 11.6759 14.6667 8 14.6667C4.32406 14.6667 1.33333 11.6759 1.33333 8C1.33333 4.32406 4.32406 1.33333 8 1.33333C9.52328 1.33333 10.9543 1.83073 12.1387 2.77165C12.4259 3.00098 12.846 2.95296 13.0754 2.66471C13.3047 2.37663 13.2567 1.95703 12.9683 1.72803C11.5661 0.613607 9.8016 0 8 0C3.58903 0 0 3.58903 0 8C0 12.411 3.58903 16 8 16C12.411 16 16 12.411 16 8C16 6.77767 15.7331 5.60628 15.2067 4.51969C15.0467 4.18766 14.6466 4.04932 14.3164 4.20996Z"
                                                                fill="currentColor"/>
                                                            <path
                                                                d="M7.99967 2.66663C7.63167 2.66663 7.33301 2.96529 7.33301 3.33329V7.99996C7.33301 8.36796 7.63167 8.66663 7.99967 8.66663H11.333C11.701 8.66663 11.9997 8.36796 11.9997 7.99996C11.9997 7.63196 11.701 7.33329 11.333 7.33329H8.66634V3.33329C8.66634 2.96529 8.36768 2.66663 7.99967 2.66663Z"
                                                                fill="currentColor"/>
                                                        </svg>

                                                    </div>
                                                    <div class="font-size-sm">8h 12m</div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="col-auto px-2 text-right">
                                        <del class="font-size-sm">$959</del>
                                        <ins class="h4 mb-0 d-block mb-lg-n1">$21.99</ins>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-4 pb-4 pb-md-7" data-aos="fade-up" data-aos-delay="150"
                     style="padding-right:15px;padding-left:15px;">
                    <!-- Card -->
                    <div class="card border shadow p-2 sk-fade">
                        <!-- Image -->
                        <div class="card-zoom position-relative">
                            <a href="#" class="card-img sk-thumbnail d-block">
                                <img class="rounded shadow-light-lg"
                                     src="{{asset('assets')}}/img/products/product-3.jpg" alt="...">
                            </a>

                            <span
                                class="badge sk-fade-bottom badge-lg badge-purple badge-pill badge-float bottom-0 left-0 mb-4 ms-4">
                                <span class="text-white text-uppercase fw-bold font-size-xs">Featured</span>
                            </span>
                        </div>

                        <!-- Footer -->
                        <div class="card-footer px-2 pb-2 mb-1 pt-4 position-relative">
                            <a href="instructors-single.html" class="">
                                <div
                                    class="avatar avatar-xl badge-float position-absolute top-0 right-0 mt-n6 me-5 rounded-circle shadow border border-white border-w-lg">
                                    <img src="{{asset('assets')}}/img/avatars/avatar-3.jpg" alt="..."
                                         class="avatar-img rounded-circle">
                                </div>
                            </a>

                            <!-- Preheading -->
                            <a href="course-single-v1.html"><span
                                    class="mb-1 d-inline-block text-gray-800">Photography</span></a>

                            <!-- Heading -->
                            <div class="position-relative">
                                <a href="course-single-v1.html" class="d-block stretched-link"><h4
                                        class="line-clamp-2 h-md-48 h-lg-58 me-md-6 me-lg-10 me-xl-4 mb-2">Learn Figma:
                                        User Interface Design Essentials - UI/UX Design</h4></a>

                                <div class="d-lg-flex align-items-end flex-wrap mb-n1">
                                    <div class="star-rating mb-2 mb-lg-0 me-lg-3">
                                        <div class="rating" style="width:50%;"></div>
                                    </div>

                                    <div class="font-size-sm">
                                        <span>5.45 (5.8k+ reviews)</span>
                                    </div>
                                </div>

                                <div class="row mx-n2 align-items-end mh-50">
                                    <div class="col px-2">
                                        <ul class="nav mx-n3">
                                            <li class="nav-item px-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="me-2 d-flex icon-uxs text-secondary">
                                                        <!-- Icon -->
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M17.1947 7.06802L14.6315 7.9985C14.2476 7.31186 13.712 6.71921 13.0544 6.25992C12.8525 6.11877 12.6421 5.99365 12.4252 5.88303C13.0586 5.25955 13.452 4.39255 13.452 3.43521C13.452 1.54098 11.9124 -1.90735e-06 10.0197 -1.90735e-06C8.12714 -1.90735e-06 6.58738 1.54098 6.58738 3.43521C6.58738 4.39255 6.98075 5.25955 7.61414 5.88303C7.39731 5.99365 7.1869 6.11877 6.98502 6.25992C6.32752 6.71921 5.79178 7.31186 5.40787 7.9985L2.8447 7.06802C2.33612 6.88339 1.79688 7.26044 1.79688 7.80243V16.5178C1.79688 16.8465 2.00256 17.14 2.31155 17.2522L9.75312 19.9536C9.93073 20.018 10.1227 20.0128 10.2863 19.9536L17.7278 17.2522C18.0368 17.14 18.2425 16.8465 18.2425 16.5178V7.80243C18.2425 7.26135 17.704 6.88309 17.1947 7.06802ZM10.0197 1.5625C11.0507 1.5625 11.8895 2.40265 11.8895 3.43521C11.8895 4.46777 11.0507 5.30792 10.0197 5.30792C8.98866 5.30792 8.14988 4.46777 8.14988 3.43521C8.14988 2.40265 8.98866 1.5625 10.0197 1.5625ZM9.23844 18.1044L3.35938 15.9703V8.91724L9.23844 11.0513V18.1044ZM10.0197 9.67255L6.90644 8.54248C7.58164 7.51892 8.75184 6.87042 10.0197 6.87042C11.2875 6.87042 12.4577 7.51892 13.1329 8.54248L10.0197 9.67255ZM16.68 15.9703L10.8009 18.1044V11.0513L16.68 8.91724V15.9703Z"
                                                                fill="currentColor"/>
                                                        </svg>

                                                    </div>
                                                    <div class="font-size-sm">5 lessons</div>
                                                </div>
                                            </li>
                                            <li class="nav-item px-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="me-2 d-flex icon-uxs text-secondary">
                                                        <!-- Icon -->
                                                        <svg width="16" height="16" viewBox="0 0 16 16"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M14.3164 4.20996C13.985 4.37028 13.8464 4.76904 14.0067 5.10026C14.4447 6.00505 14.6667 6.98031 14.6667 8C14.6667 11.6759 11.6759 14.6667 8 14.6667C4.32406 14.6667 1.33333 11.6759 1.33333 8C1.33333 4.32406 4.32406 1.33333 8 1.33333C9.52328 1.33333 10.9543 1.83073 12.1387 2.77165C12.4259 3.00098 12.846 2.95296 13.0754 2.66471C13.3047 2.37663 13.2567 1.95703 12.9683 1.72803C11.5661 0.613607 9.8016 0 8 0C3.58903 0 0 3.58903 0 8C0 12.411 3.58903 16 8 16C12.411 16 16 12.411 16 8C16 6.77767 15.7331 5.60628 15.2067 4.51969C15.0467 4.18766 14.6466 4.04932 14.3164 4.20996Z"
                                                                fill="currentColor"/>
                                                            <path
                                                                d="M7.99967 2.66663C7.63167 2.66663 7.33301 2.96529 7.33301 3.33329V7.99996C7.33301 8.36796 7.63167 8.66663 7.99967 8.66663H11.333C11.701 8.66663 11.9997 8.36796 11.9997 7.99996C11.9997 7.63196 11.701 7.33329 11.333 7.33329H8.66634V3.33329C8.66634 2.96529 8.36768 2.66663 7.99967 2.66663Z"
                                                                fill="currentColor"/>
                                                        </svg>

                                                    </div>
                                                    <div class="font-size-sm">8h 12m</div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="col-auto px-2 text-right">
                                        <del class="font-size-sm">$959</del>
                                        <ins class="h4 mb-0 d-block mb-lg-n1">$129.99</ins>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-4 pb-4 pb-md-7" data-aos="fade-up" data-aos-delay="200"
                     style="padding-right:15px;padding-left:15px;">
                    <!-- Card -->
                    <div class="card border shadow p-2 sk-fade">
                        <!-- Image -->
                        <div class="card-zoom position-relative">
                            <a href="course-single-v1.html" class="card-img sk-thumbnail d-block">
                                <img class="rounded shadow-light-lg"
                                     src="{{asset('assets')}}/img/products/product-4.jpg" alt="...">
                            </a>
                        </div>

                        <!-- Footer -->
                        <div class="card-footer px-2 pb-2 mb-1 pt-4 position-relative">
                            <a href="instructors-single.html" class="">
                                <div
                                    class="avatar avatar-xl badge-float position-absolute top-0 right-0 mt-n6 me-5 rounded-circle shadow border border-white border-w-lg">
                                    <img src="{{asset('assets')}}/img/avatars/avatar-3.jpg" alt="..."
                                         class="avatar-img rounded-circle">
                                </div>
                            </a>

                            <!-- Preheading -->
                            <a href="course-single-v1.html"><span
                                    class="mb-1 d-inline-block text-gray-800">Photography</span></a>

                            <!-- Heading -->
                            <div class="position-relative">
                                <a href="course-single-v1.html" class="d-block stretched-link"><h4
                                        class="line-clamp-2 h-md-48 h-lg-58 me-md-6 me-lg-10 me-xl-4 mb-2">The Complete
                                        Financial Analyst Course 2020</h4></a>

                                <div class="d-lg-flex align-items-end flex-wrap mb-n1">
                                    <div class="star-rating mb-2 mb-lg-0 me-lg-3">
                                        <div class="rating" style="width:50%;"></div>
                                    </div>

                                    <div class="font-size-sm">
                                        <span>5.45 (5.8k+ reviews)</span>
                                    </div>
                                </div>

                                <div class="row mx-n2 align-items-end mh-50">
                                    <div class="col px-2">
                                        <ul class="nav mx-n3">
                                            <li class="nav-item px-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="me-2 d-flex">
                                                        <!-- Icon -->
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M17.1947 7.06802L14.6315 7.9985C14.2476 7.31186 13.712 6.71921 13.0544 6.25992C12.8525 6.11877 12.6421 5.99365 12.4252 5.88303C13.0586 5.25955 13.452 4.39255 13.452 3.43521C13.452 1.54098 11.9124 -1.90735e-06 10.0197 -1.90735e-06C8.12714 -1.90735e-06 6.58738 1.54098 6.58738 3.43521C6.58738 4.39255 6.98075 5.25955 7.61414 5.88303C7.39731 5.99365 7.1869 6.11877 6.98502 6.25992C6.32752 6.71921 5.79178 7.31186 5.40787 7.9985L2.8447 7.06802C2.33612 6.88339 1.79688 7.26044 1.79688 7.80243V16.5178C1.79688 16.8465 2.00256 17.14 2.31155 17.2522L9.75312 19.9536C9.93073 20.018 10.1227 20.0128 10.2863 19.9536L17.7278 17.2522C18.0368 17.14 18.2425 16.8465 18.2425 16.5178V7.80243C18.2425 7.26135 17.704 6.88309 17.1947 7.06802ZM10.0197 1.5625C11.0507 1.5625 11.8895 2.40265 11.8895 3.43521C11.8895 4.46777 11.0507 5.30792 10.0197 5.30792C8.98866 5.30792 8.14988 4.46777 8.14988 3.43521C8.14988 2.40265 8.98866 1.5625 10.0197 1.5625ZM9.23844 18.1044L3.35938 15.9703V8.91724L9.23844 11.0513V18.1044ZM10.0197 9.67255L6.90644 8.54248C7.58164 7.51892 8.75184 6.87042 10.0197 6.87042C11.2875 6.87042 12.4577 7.51892 13.1329 8.54248L10.0197 9.67255ZM16.68 15.9703L10.8009 18.1044V11.0513L16.68 8.91724V15.9703Z"
                                                                fill="currentColor"/>
                                                        </svg>

                                                    </div>
                                                    <div class="font-size-sm">5 lessons</div>
                                                </div>
                                            </li>
                                            <li class="nav-item px-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="me-2 d-flex text-secondary">
                                                        <!-- Icon -->
                                                        <svg width="16" height="16" viewBox="0 0 16 16"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M14.3164 4.20996C13.985 4.37028 13.8464 4.76904 14.0067 5.10026C14.4447 6.00505 14.6667 6.98031 14.6667 8C14.6667 11.6759 11.6759 14.6667 8 14.6667C4.32406 14.6667 1.33333 11.6759 1.33333 8C1.33333 4.32406 4.32406 1.33333 8 1.33333C9.52328 1.33333 10.9543 1.83073 12.1387 2.77165C12.4259 3.00098 12.846 2.95296 13.0754 2.66471C13.3047 2.37663 13.2567 1.95703 12.9683 1.72803C11.5661 0.613607 9.8016 0 8 0C3.58903 0 0 3.58903 0 8C0 12.411 3.58903 16 8 16C12.411 16 16 12.411 16 8C16 6.77767 15.7331 5.60628 15.2067 4.51969C15.0467 4.18766 14.6466 4.04932 14.3164 4.20996Z"
                                                                fill="currentColor"/>
                                                            <path
                                                                d="M7.99967 2.66663C7.63167 2.66663 7.33301 2.96529 7.33301 3.33329V7.99996C7.33301 8.36796 7.63167 8.66663 7.99967 8.66663H11.333C11.701 8.66663 11.9997 8.36796 11.9997 7.99996C11.9997 7.63196 11.701 7.33329 11.333 7.33329H8.66634V3.33329C8.66634 2.96529 8.36768 2.66663 7.99967 2.66663Z"
                                                                fill="currentColor"/>
                                                        </svg>

                                                    </div>
                                                    <div class="font-size-sm">8h 12m</div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="col-auto px-2 text-right">
                                        <del class="font-size-sm">$959</del>
                                        <ins class="h4 mb-0 d-block mb-lg-n1">$415.99</ins>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CATEGORIES
    ================================================== -->
    <section class="py-5 py-md-11 bg-white">
        <div class="container">
            <div class="row align-items-end mb-md-7 mb-4" data-aos="fade-up">
                <div class="col-md mb-4 mb-md-0">
                    <h1 class="mb-1">Trending Categories</h1>
                    <p class="font-size-lg mb-0 text-capitalize">Cum doctus civibus efficiantur in imperdiet
                        deterruisset.</p>
                </div>
                <div class="col-md-auto">
                    <a href="course-list-v3.html" class="d-flex align-items-center fw-medium">
                        Browse All
                        <div class="ms-2 d-flex">
                            <!-- Icon -->
                            <svg width="10" height="10" viewBox="0 0 10 10" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7.7779 4.6098L3.32777 0.159755C3.22485 0.0567475 3.08745 0 2.94095 0C2.79445 0 2.65705 0.0567475 2.55412 0.159755L2.2264 0.487394C2.01315 0.700889 2.01315 1.04788 2.2264 1.26105L5.96328 4.99793L2.22225 8.73895C2.11933 8.84196 2.0625 8.97928 2.0625 9.1257C2.0625 9.27228 2.11933 9.4096 2.22225 9.51269L2.54998 9.84025C2.65298 9.94325 2.7903 10 2.9368 10C3.0833 10 3.2207 9.94325 3.32363 9.84025L7.7779 5.38614C7.88107 5.2828 7.93774 5.14484 7.93741 4.99817C7.93774 4.85094 7.88107 4.71305 7.7779 4.6098Z"
                                    fill="currentColor"/>
                            </svg>

                        </div>
                    </a>
                </div>
            </div>

            <div class="row row-cols-2 row-cols-lg-3 row-cols-xl-4">
                <div class="col mb-md-6 mb-4 px-2 px-md-4" data-aos="fade-up" data-aos-delay="50">
                    <!-- Card -->
                    <a href="course-list-v3.html"
                       class="card icon-category border shadow-dark p-md-5 p-3 text-center lift">
                        <!-- Image -->
                        <div class="position-relative text-light">
                            <div class="position-absolute bottom-0 right-0 left-0 icon-h-p">
                                <i class="fas fa-bezier-curve"></i>
                            </div>
                            <!-- Icon BG -->
                            <svg width="116" height="82" viewBox="0 0 116 82" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.9238 65.8391C11.9238 65.8391 20.4749 72.4177 35.0465 70.036C49.6182 67.6542 75.9897 78.4406 75.9897 78.4406C75.9897 78.4406 90.002 85.8843 104.047 79.2427C118.093 72.6012 115.872 58.8253 115.872 58.8253C115.743 56.8104 115.606 46.9466 97.5579 22.0066C91.0438 13.0024 84.1597 6.97958 75.9458 3.74641C58.8245 -2.99096 37.7881 -0.447684 22.9067 9.81852C15.5647 14.8832 7.65514 22.0695 3.0465 31.5007C-7.27017 52.6135 11.9238 65.8391 11.9238 65.8391Z"
                                    fill="currentColor"/>
                            </svg>

                        </div>

                        <!-- Footer -->
                        <div class="card-footer px-0 pb-0 pt-6">
                            <h5 class="mb-0 line-clamp-1">Design</h5>
                            <p class="mb-0 line-clamp-1">Over 960 Courses</p>
                        </div>
                    </a>
                </div>

                <div class="col mb-md-6 mb-4 px-2 px-md-4" data-aos="fade-up" data-aos-delay="100">
                    <!-- Card -->
                    <a href="course-list-v3.html"
                       class="card icon-category border shadow-dark p-md-5 p-3 text-center lift">
                        <!-- Image -->
                        <div class="position-relative text-light">
                            <div class="position-absolute bottom-0 right-0 left-0 icon-h-p">
                                <i class="fas fa-briefcase"></i>
                            </div>
                            <!-- Icon BG -->
                            <svg width="116" height="82" viewBox="0 0 116 82" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.9238 65.8391C11.9238 65.8391 20.4749 72.4177 35.0465 70.036C49.6182 67.6542 75.9897 78.4406 75.9897 78.4406C75.9897 78.4406 90.002 85.8843 104.047 79.2427C118.093 72.6012 115.872 58.8253 115.872 58.8253C115.743 56.8104 115.606 46.9466 97.5579 22.0066C91.0438 13.0024 84.1597 6.97958 75.9458 3.74641C58.8245 -2.99096 37.7881 -0.447684 22.9067 9.81852C15.5647 14.8832 7.65514 22.0695 3.0465 31.5007C-7.27017 52.6135 11.9238 65.8391 11.9238 65.8391Z"
                                    fill="currentColor"/>
                            </svg>

                        </div>

                        <!-- Footer -->
                        <div class="card-footer px-0 pb-0 pt-6">
                            <h5 class="mb-0 line-clamp-1">Business</h5>
                            <p class="mb-0 line-clamp-1">Over 43 Courses</p>
                        </div>
                    </a>
                </div>

                <div class="col mb-md-6 mb-4 px-2 px-md-4" data-aos="fade-up" data-aos-delay="150">
                    <!-- Card -->
                    <a href="course-list-v3.html"
                       class="card icon-category border shadow-dark p-md-5 p-3 text-center lift">
                        <!-- Image -->
                        <div class="position-relative text-light">
                            <div class="position-absolute bottom-0 right-0 left-0 icon-h-p">
                                <i class="fas fa-laptop-code"></i>
                            </div>
                            <!-- Icon BG -->
                            <svg width="116" height="82" viewBox="0 0 116 82" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.9238 65.8391C11.9238 65.8391 20.4749 72.4177 35.0465 70.036C49.6182 67.6542 75.9897 78.4406 75.9897 78.4406C75.9897 78.4406 90.002 85.8843 104.047 79.2427C118.093 72.6012 115.872 58.8253 115.872 58.8253C115.743 56.8104 115.606 46.9466 97.5579 22.0066C91.0438 13.0024 84.1597 6.97958 75.9458 3.74641C58.8245 -2.99096 37.7881 -0.447684 22.9067 9.81852C15.5647 14.8832 7.65514 22.0695 3.0465 31.5007C-7.27017 52.6135 11.9238 65.8391 11.9238 65.8391Z"
                                    fill="currentColor"/>
                            </svg>

                        </div>

                        <!-- Footer -->
                        <div class="card-footer px-0 pb-0 pt-6">
                            <h5 class="mb-0 line-clamp-1">Software Development</h5>
                            <p class="mb-0 line-clamp-1">Over 1209 Courses</p>
                        </div>
                    </a>
                </div>

                <div class="col mb-md-6 mb-4 px-2 px-md-4" data-aos="fade-up" data-aos-delay="200">
                    <!-- Card -->
                    <a href="course-list-v3.html"
                       class="card icon-category border shadow-dark p-md-5 p-3 text-center lift">
                        <!-- Image -->
                        <div class="position-relative text-light">
                            <div class="position-absolute bottom-0 right-0 left-0 icon-h-p">
                                <i class="far fa-file-alt"></i>
                            </div>
                            <!-- Icon BG -->
                            <svg width="116" height="82" viewBox="0 0 116 82" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.9238 65.8391C11.9238 65.8391 20.4749 72.4177 35.0465 70.036C49.6182 67.6542 75.9897 78.4406 75.9897 78.4406C75.9897 78.4406 90.002 85.8843 104.047 79.2427C118.093 72.6012 115.872 58.8253 115.872 58.8253C115.743 56.8104 115.606 46.9466 97.5579 22.0066C91.0438 13.0024 84.1597 6.97958 75.9458 3.74641C58.8245 -2.99096 37.7881 -0.447684 22.9067 9.81852C15.5647 14.8832 7.65514 22.0695 3.0465 31.5007C-7.27017 52.6135 11.9238 65.8391 11.9238 65.8391Z"
                                    fill="currentColor"/>
                            </svg>

                        </div>

                        <!-- Footer -->
                        <div class="card-footer px-0 pb-0 pt-6">
                            <h5 class="mb-0 line-clamp-1">Personal Development</h5>
                            <p class="mb-0 line-clamp-1">Over 921 Courses</p>
                        </div>
                    </a>
                </div>

                <div class="col mb-md-6 mb-4 px-2 px-md-4" data-aos="fade-up" data-aos-delay="250">
                    <!-- Card -->
                    <a href="course-list-v3.html"
                       class="card icon-category border shadow-dark p-md-5 p-3 text-center lift">
                        <!-- Image -->
                        <div class="position-relative text-light">
                            <div class="position-absolute bottom-0 right-0 left-0 icon-h-p">
                                <i class="fas fa-camera"></i>
                            </div>
                            <!-- Icon BG -->
                            <svg width="116" height="82" viewBox="0 0 116 82" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.9238 65.8391C11.9238 65.8391 20.4749 72.4177 35.0465 70.036C49.6182 67.6542 75.9897 78.4406 75.9897 78.4406C75.9897 78.4406 90.002 85.8843 104.047 79.2427C118.093 72.6012 115.872 58.8253 115.872 58.8253C115.743 56.8104 115.606 46.9466 97.5579 22.0066C91.0438 13.0024 84.1597 6.97958 75.9458 3.74641C58.8245 -2.99096 37.7881 -0.447684 22.9067 9.81852C15.5647 14.8832 7.65514 22.0695 3.0465 31.5007C-7.27017 52.6135 11.9238 65.8391 11.9238 65.8391Z"
                                    fill="currentColor"/>
                            </svg>

                        </div>

                        <!-- Footer -->
                        <div class="card-footer px-0 pb-0 pt-6">
                            <h5 class="mb-0 line-clamp-1">Photography</h5>
                            <p class="mb-0 line-clamp-1">Over 693 Courses</p>
                        </div>
                    </a>
                </div>

                <div class="col mb-md-6 mb-4 px-2 px-md-4" data-aos="fade-up" data-aos-delay="300">
                    <!-- Card -->
                    <a href="course-list-v3.html"
                       class="card icon-category border shadow-dark p-md-5 p-3 text-center lift">
                        <!-- Image -->
                        <div class="position-relative text-light">
                            <div class="position-absolute bottom-0 right-0 left-0 icon-h-p">
                                <i class="fas fa-music"></i>
                            </div>
                            <!-- Icon BG -->
                            <svg width="116" height="82" viewBox="0 0 116 82" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.9238 65.8391C11.9238 65.8391 20.4749 72.4177 35.0465 70.036C49.6182 67.6542 75.9897 78.4406 75.9897 78.4406C75.9897 78.4406 90.002 85.8843 104.047 79.2427C118.093 72.6012 115.872 58.8253 115.872 58.8253C115.743 56.8104 115.606 46.9466 97.5579 22.0066C91.0438 13.0024 84.1597 6.97958 75.9458 3.74641C58.8245 -2.99096 37.7881 -0.447684 22.9067 9.81852C15.5647 14.8832 7.65514 22.0695 3.0465 31.5007C-7.27017 52.6135 11.9238 65.8391 11.9238 65.8391Z"
                                    fill="currentColor"/>
                            </svg>

                        </div>

                        <!-- Footer -->
                        <div class="card-footer px-0 pb-0 pt-6">
                            <h5 class="mb-0 line-clamp-1">Audio + Music</h5>
                            <p class="mb-0 line-clamp-1">Over 53 Courses</p>
                        </div>
                    </a>
                </div>

                <div class="col mb-md-6 mb-4 px-2 px-md-4" data-aos="fade-up" data-aos-delay="350">
                    <!-- Card -->
                    <a href="course-list-v3.html"
                       class="card icon-category border shadow-dark p-md-5 p-3 text-center lift">
                        <!-- Image -->
                        <div class="position-relative text-light">
                            <div class="position-absolute bottom-0 right-0 left-0 icon-h-p">
                                <i class="fas fa-bullhorn"></i>
                            </div>
                            <!-- Icon BG -->
                            <svg width="116" height="82" viewBox="0 0 116 82" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.9238 65.8391C11.9238 65.8391 20.4749 72.4177 35.0465 70.036C49.6182 67.6542 75.9897 78.4406 75.9897 78.4406C75.9897 78.4406 90.002 85.8843 104.047 79.2427C118.093 72.6012 115.872 58.8253 115.872 58.8253C115.743 56.8104 115.606 46.9466 97.5579 22.0066C91.0438 13.0024 84.1597 6.97958 75.9458 3.74641C58.8245 -2.99096 37.7881 -0.447684 22.9067 9.81852C15.5647 14.8832 7.65514 22.0695 3.0465 31.5007C-7.27017 52.6135 11.9238 65.8391 11.9238 65.8391Z"
                                    fill="currentColor"/>
                            </svg>

                        </div>

                        <!-- Footer -->
                        <div class="card-footer px-0 pb-0 pt-6">
                            <h5 class="mb-0 line-clamp-1">Marketing</h5>
                            <p class="mb-0 line-clamp-1">Over 12 Courses</p>
                        </div>
                    </a>
                </div>

                <div class="col mb-md-6 mb-4 px-2 px-md-4" data-aos="fade-up" data-aos-delay="400">
                    <!-- Card -->
                    <a href="course-list-v3.html"
                       class="card icon-category border shadow-dark p-md-5 p-3 text-center lift">
                        <!-- Image -->
                        <div class="position-relative text-light">
                            <div class="position-absolute bottom-0 right-0 left-0 icon-h-p">
                                <i class="fas fa-wallet"></i>
                            </div>
                            <!-- Icon BG -->
                            <svg width="116" height="82" viewBox="0 0 116 82" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.9238 65.8391C11.9238 65.8391 20.4749 72.4177 35.0465 70.036C49.6182 67.6542 75.9897 78.4406 75.9897 78.4406C75.9897 78.4406 90.002 85.8843 104.047 79.2427C118.093 72.6012 115.872 58.8253 115.872 58.8253C115.743 56.8104 115.606 46.9466 97.5579 22.0066C91.0438 13.0024 84.1597 6.97958 75.9458 3.74641C58.8245 -2.99096 37.7881 -0.447684 22.9067 9.81852C15.5647 14.8832 7.65514 22.0695 3.0465 31.5007C-7.27017 52.6135 11.9238 65.8391 11.9238 65.8391Z"
                                    fill="currentColor"/>
                            </svg>

                        </div>

                        <!-- Footer -->
                        <div class="card-footer px-0 pb-0 pt-6">
                            <h5 class="mb-0 line-clamp-1">Finance & Accounting</h5>
                            <p class="mb-0 line-clamp-1">Over 322 Courses</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- TESTIMONIAL
    ================================================== -->
    <section class="pt-5 pt-md-11 pb-9">
        <div class="container">
            <div class="text-center mb-2" data-aos="fade-up">
                <h1 class="mb-1">What our students have to say</h1>
                <p class="font-size-lg text-capitalize mb-0">Discover your perfect program in our courses.</p>
            </div>

            <div class="mx-n4"
                 data-flickity='{"pageDots": true, "prevNextButtons": false, "cellAlign": "left", "wrapAround": true, "imagesLoaded": true}'>
                <div class="col-12 col-md-6 col-xl-4 py-md-7 py-3" data-aos="fade-up" data-aos-delay="50"
                     style="padding-right:15px;padding-left:15px;">
                    <!-- Card -->
                    <div class="card border shadow p-6 lift-md">
                        <!-- Image -->
                        <div class="card-zoom">
                            <div class="d-flex align-items-center">
                                <div class="avatar avatar-custom me-5">
                                    <img src="{{asset('assets')}}/img/avatars/avatar-1.jpg" alt="..."
                                         class="avatar-img rounded-circle">
                                </div>
                                <div class="media-body">
                                    <h5 class="mb-0">Albert Cole</h5>
                                    <span>Designer</span>
                                </div>
                            </div>
                        </div>

                        <!-- Footer -->
                        <div class="card-footer px-0 pb-0">
                            <p class="mb-0 text-capitalize">“ I believe in lifelong learning and Skola is a great place
                                to learn from experts. I've learned a lot and recommend it to all my friends “</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-xl-4 py-md-7 py-3" data-aos="fade-up" data-aos-delay="100"
                     style="padding-right:15px;padding-left:15px;">
                    <!-- Card -->
                    <div class="card border shadow p-6 lift-md">
                        <!-- Image -->
                        <div class="card-zoom">
                            <div class="d-flex align-items-center">
                                <div class="avatar avatar-custom me-5">
                                    <img src="{{asset('assets')}}/img/avatars/avatar-2.jpg" alt="..."
                                         class="avatar-img rounded-circle">
                                </div>
                                <div class="media-body">
                                    <h5 class="mb-0">Alison Dawn</h5>
                                    <span>WordPress Developer</span>
                                </div>
                            </div>
                        </div>

                        <!-- Footer -->
                        <div class="card-footer px-0 pb-0">
                            <p class="mb-0 text-capitalize">“ I believe in lifelong learning and Skola is a great place
                                to learn from experts. I've learned a lot and recommend it to all my friends “</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-xl-4 py-md-7 py-3" data-aos="fade-up" data-aos-delay="150"
                     style="padding-right:15px;padding-left:15px;">
                    <!-- Card -->
                    <div class="card border shadow p-6 lift-md">
                        <!-- Image -->
                        <div class="card-zoom">
                            <div class="d-flex align-items-center">
                                <div class="avatar avatar-custom me-5">
                                    <img src="{{asset('assets')}}/img/avatars/avatar-3.jpg" alt="..."
                                         class="avatar-img rounded-circle">
                                </div>
                                <div class="media-body">
                                    <h5 class="mb-0">Daniel Parker</h5>
                                    <span>Front-end Developer</span>
                                </div>
                            </div>
                        </div>

                        <!-- Footer -->
                        <div class="card-footer px-0 pb-0">
                            <p class="mb-0 text-capitalize">“ I believe in lifelong learning and Skola is a great place
                                to learn from experts. I've learned a lot and recommend it to all my friends “</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-xl-4 py-md-7 py-3" data-aos="fade-up" data-aos-delay="200"
                     style="padding-right:15px;padding-left:15px;">
                    <!-- Card -->
                    <div class="card border shadow p-6 lift-md">
                        <!-- Image -->
                        <div class="card-zoom">
                            <div class="d-flex align-items-center">
                                <div class="avatar avatar-custom me-5">
                                    <img src="{{asset('assets')}}/img/avatars/avatar-4.jpg" alt="..."
                                         class="avatar-img rounded-circle">
                                </div>
                                <div class="media-body">
                                    <h5 class="mb-0">Albert Cole</h5>
                                    <span>Designer</span>
                                </div>
                            </div>
                        </div>

                        <!-- Footer -->
                        <div class="card-footer px-0 pb-0">
                            <p class="mb-0 text-capitalize">“ I believe in lifelong learning and Skola is a great place
                                to learn from experts. I've learned a lot and recommend it to all my friends “</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- BRAND
    ================================================== -->
    <div class="py-2 pt-md-5 pb-md-10">
        <div class="container">
            <div
                class="row row-cols-3 row-cols-md-5 text-center w-xl-80 mx-xl-auto justify-content-center align-items-center"
                data-aos="fade-up">
                <div class="col-md mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="50">
                    <div class="mw-100p mx-auto">
                        <!-- Image -->
                        <svg viewBox="0 0 100 34" xmlns="http://www.w3.org/2000/svg">
                            <path fill="#000000" d="M15,19.1c-0.1,0-0.2,0.1-0.3,0.1c-0.2,0-0.6-0.9-0.7-1.5c-0.5,0.5-1.4,1.5-3.2,1.5c-2.3,0-3.7-1.5-3.7-3.8
                                c0-4.2,4.5-4.2,6.5-4.2v-0.8c0-1.1-0.2-1.8-1.8-1.8c-1.4,0-2.8,0.7-3.1,0.7c-0.1,0-0.2-0.1-0.2-0.2L7.9,7.7c0-0.1-0.1-0.2-0.1-0.3
                                c0-0.6,2.5-1.2,4.4-1.2c3.1,0,4.3,1.4,4.3,4v4.7c0,2.4,0.6,2.7,0.6,3.2c0,0.1-0.1,0.2-0.2,0.2L15,19.1z M13.5,13.3
                                c-0.6,0-3.5-0.2-3.5,2c0,1,0.7,1.7,1.6,1.7c0.9,0,1.6-0.6,1.9-0.9V13.3z M35.9,18.4c0,0.3-0.1,0.3-0.3,0.3H33
                                c-0.3,0-0.3-0.1-0.3-0.3v-7.6c0-0.9-0.1-2.1-1-2.1c-1,0-1.9,0.7-2.2,1v8.6c0,0.3,0,0.3-0.3,0.3h-2.5c-0.3,0-0.3-0.1-0.3-0.3v-7.6
                                c0-0.9-0.1-2.1-1-2.1c-1,0-1.9,0.7-2.2,1v8.6c0,0.3,0,0.3-0.3,0.3h-2.5c-0.3,0-0.3-0.1-0.3-0.3V11c0-3.5-0.5-3.3-0.5-3.8
                                c0-0.1,0.1-0.2,0.3-0.3l1.9-0.6c0.1,0,0.3-0.1,0.4-0.1c0.3,0,0.5,0.5,0.8,1.7c0.7-0.6,1.8-1.7,3.8-1.7c1.1,0,2.2,0.7,2.5,1.7
                                c0.7-0.6,1.8-1.7,3.9-1.7c2.3,0,2.9,1.7,2.9,3.9V18.4z M46.4,19.1c-0.1,0-0.2,0.1-0.3,0.1c-0.2,0-0.6-0.9-0.7-1.5
                                c-0.5,0.5-1.4,1.5-3.2,1.5c-2.3,0-3.7-1.5-3.7-3.8c0-4.2,4.5-4.2,6.5-4.2v-0.8c0-1.1-0.2-1.8-1.8-1.8c-1.4,0-2.8,0.7-3.1,0.7
                                c-0.1,0-0.2-0.1-0.2-0.2l-0.5-1.5c0-0.1-0.1-0.2-0.1-0.3c0-0.6,2.5-1.2,4.4-1.2c3.1,0,4.3,1.4,4.3,4v4.7c0,2.4,0.6,2.7,0.6,3.2
                                c0,0.1-0.1,0.2-0.2,0.2L46.4,19.1z M44.9,13.3c-0.6,0-3.5-0.2-3.5,2c0,1,0.7,1.7,1.6,1.7c0.9,0,1.6-0.6,1.9-0.9V13.3z M59,18.5
                                c-0.1,0.2-0.2,0.3-0.3,0.3h-8.3c-0.1,0-0.2-0.1-0.2-0.2v-1.8l5.7-7.5h-5c-0.1,0-0.2-0.1-0.2-0.3V7c0-0.2,0.1-0.3,0.3-0.3h7.9
                                c0.2,0,0.4,0.1,0.4,0.2v1.9l-5.6,7.4h5.7c0.5,0,0.5,0.2,0.5,0.2c0,0.1-0.1,0.2-0.1,0.3L59,18.5z M65.9,18.4c0,0.3,0,0.3-0.3,0.3
                                h-2.5c-0.3,0-0.3-0.1-0.3-0.3V8.9h-1.9c-0.3,0-0.3-0.1-0.3-0.3V7c0-0.3,0.1-0.3,0.3-0.3h4.7c0.3,0,0.3,0.1,0.3,0.3V18.4z M64.3,5.1
                                c-1.1,0-2.1-0.9-2.1-2c0-1.1,0.9-2,2.1-2c1.1,0,2,0.9,2,2C66.4,4.1,65.4,5.1,64.3,5.1z M79.6,18.4c0,0.3,0,0.3-0.3,0.3h-2.5
                                c-0.3,0-0.3-0.1-0.3-0.3v-7.6c0-0.9-0.1-2.1-1.4-2.1c-1,0-1.9,0.7-2.2,1v8.6c0,0.3,0,0.3-0.3,0.3H70c-0.3,0-0.3-0.1-0.3-0.3V11
                                c0-3.5-0.5-3.3-0.5-3.8c0-0.1,0.1-0.2,0.3-0.3l1.9-0.6c0.1,0,0.3-0.1,0.4-0.1c0.3,0,0.5,0.5,0.8,1.7c0.7-0.6,1.8-1.7,3.8-1.7
                                c1.4,0,3.2,0.6,3.2,3.6V18.4z M92.3,14c0,1.6,0.1,4.2,0.1,5.5c0,2.7-1.3,4.4-4.8,4.4c-1.9,0-5.2-0.8-5.2-1.3c0-0.2,0-0.3,0.1-0.5
                                l0.5-1.5c0-0.2,0.1-0.2,0.3-0.2c0.3,0,1.8,1,4,1c1.7,0,2-0.7,2-2.1c0-0.9-0.1-1.5-0.1-1.6c-0.4,0.2-1.3,0.9-3,0.9
                                c-2.8,0-4.3-2.3-4.3-6c0-4,1.7-6.4,4.7-6.4c1.8,0,2.5,0.8,3,1.2c0.1-0.2,0.5-1.2,0.9-1.2c0.1,0,0.2,0,0.2,0L92.8,7
                                C92.9,7,93,7.1,93,7.2c0,0.3-0.7,1.2-0.7,3.1V14z M89.3,9.6c-0.3-0.2-0.8-0.7-2-0.7c-1.5,0-2.1,1.4-2.1,3.7c0,2.2,0.5,3.6,2,3.6
                                c1.3,0,1.9-0.6,2.1-0.8V9.6z"/>
                            <path fill="#FF9900" d="M74.2,25.3c-6.6,5-16.1,7.7-24.3,7.7c-11.5,0-21.8-4.4-29.7-11.7c-0.6-0.6-0.1-1.4,0.7-0.9
                                c8.5,5.1,18.9,8.2,29.7,8.2c7.3,0,15.3-1.6,22.6-4.8C74.4,23.2,75.3,24.5,74.2,25.3 M77,22.1c-0.8-1.1-5.6-0.5-7.7-0.3
                                c-0.6,0.1-0.7-0.5-0.2-0.9c3.8-2.7,9.9-1.9,10.6-1c0.7,0.9-0.2,7.3-3.7,10.4c-0.5,0.5-1.1,0.2-0.8-0.4C76,27.8,77.8,23.2,77,22.1"/>
                        </svg>

                    </div>
                </div>
                <div class="col-md mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="100">
                    <div class="mw-100p mx-auto">
                        <!-- Image -->
                        <svg viewBox="0 0 100 34" xmlns="http://www.w3.org/2000/svg">
                            <path fill="#FF5A5F" d="M31.5,23.4c-1-1.1-1.5-2.5-1.5-4.2c0-1.7,0.5-3.1,1.5-4.1c1-1.1,2.2-1.6,3.7-1.6c1.5,0,2.7,0.6,3.4,1.9v-1.7
                            h2.8v11.2h-2.8V23c-0.8,1.4-2,2-3.5,2C33.7,25,32.5,24.5,31.5,23.4z M37.8,21.6c0.6-0.6,0.9-1.4,0.9-2.4s-0.3-1.8-0.9-2.4
                            c-0.6-0.6-1.3-0.9-2-0.9c-0.8,0-1.5,0.3-2,0.9c-0.6,0.6-0.9,1.4-0.9,2.4c0,1,0.3,1.8,0.9,2.4c0.6,0.6,1.3,0.9,2,0.9
                            C36.5,22.5,37.2,22.2,37.8,21.6z M46.3,10.7c0,0.5-0.2,0.9-0.5,1.2c-0.3,0.3-0.7,0.5-1.2,0.5c-0.5,0-0.9-0.2-1.2-0.5
                            c-0.3-0.3-0.5-0.8-0.5-1.2s0.2-0.9,0.5-1.2C43.7,9.2,44.1,9,44.6,9c0.5,0,0.9,0.2,1.2,0.5C46.1,9.8,46.3,10.3,46.3,10.7z M43.2,24.8
                            V13.6H46v11.2H43.2z M50.6,13.6v2c0.7-1.4,1.8-2.1,3.2-2.1v2.9h-0.7c-0.8,0-1.5,0.2-1.9,0.6s-0.6,1.2-0.6,2.2v5.6h-2.8V13.6H50.6z
                             M57.4,15.3c0.8-1.3,1.9-1.9,3.4-1.9c1.5,0,2.7,0.5,3.7,1.6c1,1.1,1.5,2.5,1.5,4.2c0,1.7-0.5,3.1-1.5,4.2c-1,1.1-2.2,1.6-3.7,1.6
                            s-2.6-0.7-3.5-2v1.9h-2.8v-15h2.8V15.3z M62.3,21.6c0.6-0.6,0.9-1.4,0.9-2.4c0-1-0.3-1.8-0.9-2.4s-1.3-0.9-2-0.9
                            c-0.8,0-1.5,0.3-2,0.9c-0.6,0.6-0.9,1.4-0.9,2.4s0.3,1.8,0.9,2.4c0.6,0.6,1.3,0.9,2,0.9C61,22.5,61.7,22.2,62.3,21.6z M67.8,23.4
                            c-1.1-1.1-1.6-2.5-1.6-4.2c0-1.7,0.5-3.1,1.6-4.2c1.1-1.1,2.4-1.6,4-1.6s2.9,0.5,4,1.6c1.1,1.1,1.6,2.4,1.6,4.2
                            c0,1.7-0.5,3.1-1.6,4.2c-1.1,1.1-2.4,1.6-4.1,1.6S68.9,24.5,67.8,23.4z M71.9,22.6c0.8,0,1.4-0.3,2-0.9c0.6-0.6,0.8-1.4,0.8-2.5
                            c0-1.1-0.3-1.9-0.8-2.5c-0.6-0.6-1.2-0.9-2-0.9s-1.4,0.3-2,0.9s-0.8,1.4-0.8,2.5c0,1.1,0.3,1.9,0.8,2.5
                            C70.4,22.3,71.1,22.6,71.9,22.6z M81.4,15.3c0.8-1.3,1.9-1.9,3.4-1.9c1.5,0,2.7,0.5,3.7,1.6c1,1.1,1.5,2.5,1.5,4.2
                            c0,1.7-0.5,3.1-1.5,4.2c-1,1.1-2.2,1.6-3.7,1.6c-1.5,0-2.6-0.7-3.5-2v1.9h-2.8v-15h2.8V15.3z M86.3,21.6c0.6-0.6,0.9-1.4,0.9-2.4
                            c0-1-0.3-1.8-0.9-2.4s-1.3-0.9-2-0.9c-0.8,0-1.5,0.3-2,0.9c-0.6,0.6-0.9,1.4-0.9,2.4s0.3,1.8,0.9,2.4c0.6,0.6,1.3,0.9,2,0.9
                            C85.1,22.5,85.7,22.2,86.3,21.6z M15.5,29.8c0.1,0.1,0.3,0.2,0.5,0.2s0.4-0.1,0.5-0.2C20,26.4,26,19,26,14c0-5.5-4.5-10-10-10
                            S6,8.5,6,14C6,19,12.1,26.4,15.5,29.8z M16,5.5c4.7,0,8.5,3.8,8.5,8.4c0,4.9-6.5,12.1-8.5,14.2c-2-2.1-8.5-9.3-8.5-14.2
                            C7.5,9.3,11.3,5.5,16,5.5z M16.2,19.2c2.6-0.9,5.1-3.1,5.1-6.1c0-1.7-1.4-3-3.1-3c-0.9,0-1.7,0.4-2.3,1c-0.6-0.6-1.4-1-2.3-1
                            c-1.7,0-3.1,1.4-3.1,3c0,3,2.6,5.2,5.1,6.1c0.1,0,0.2,0,0.2,0C16.1,19.3,16.2,19.3,16.2,19.2z M12.2,13.2c0-0.8,0.7-1.5,1.5-1.5
                            c0.8,0,1.5,0.7,1.5,1.5c0,0.4,0.3,0.8,0.8,0.8c0.4,0,0.8-0.3,0.8-0.8c0-0.8,0.7-1.5,1.5-1.5c0.8,0,1.5,0.7,1.5,1.5
                            c0,2.7-3,4.2-3.8,4.5C15.1,17.3,12.2,15.9,12.2,13.2L12.2,13.2z"/>
                        </svg>

                    </div>
                </div>
                <div class="col-md mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="150">
                    <div class="mw-100p mx-auto">
                        <!-- Image -->
                        <svg viewBox="0 0 100 34" xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <g>
                                    <path fill="#E43D91" d="M15.2,27c-1,0-1.8-0.9-1.6-2l2.8-16.6C16.6,7.6,17.3,7,18.1,7c1,0,1.8,0.9,1.6,2l-2.8,16.6
                                    C16.7,26.4,16,27,15.2,27L15.2,27z"/>
                                    <path fill="#E43D91" d="M15.2,25l2.8-16.6c0.1-0.5,0.4-0.9,0.8-1.2C18.7,7.1,18.4,7,18.1,7c-0.8,0-1.5,0.6-1.6,1.4L13.6,25
                                    c-0.2,1,0.6,2,1.6,2c0.3,0,0.6-0.1,0.8-0.2C15.5,26.4,15.1,25.8,15.2,25z"/>
                                </g>
                                <g>
                                    <path fill="#009ADD" d="M22.9,27c-1,0-1.8-0.9-1.6-2l2.8-16.6C24.3,7.6,25,7,25.8,7c1,0,1.8,0.9,1.6,2l-2.8,16.6
                                    C24.4,26.4,23.7,27,22.9,27L22.9,27z"/>
                                    <path fill="#009ADD" d="M22.9,25l2.8-16.6c0.1-0.5,0.4-0.9,0.8-1.2C26.3,7.1,26.1,7,25.8,7c-0.8,0-1.5,0.6-1.6,1.4L21.3,25
                                    c-0.2,1,0.6,2,1.6,2c0.3,0,0.6-0.1,0.8-0.2C23.1,26.5,22.8,25.8,22.9,25L22.9,25z"/>
                                </g>
                                <g>
                                    <path fill="#FEDE3A" d="M11.4,12.8c0.1-0.8,0.8-1.4,1.7-1.4h16.3c1,0,1.8,1,1.7,2c-0.1,0.8-0.8,1.4-1.7,1.4H13
                                    C12,14.8,11.2,13.8,11.4,12.8L11.4,12.8z"/>
                                    <path fill="#FEDE3A" d="M29.3,13.1H13c-0.6,0-1.2-0.3-1.5-0.9c-0.1,0.2-0.2,0.4-0.2,0.6c-0.2,1,0.6,2,1.7,2h16.3
                                    c0.8,0,1.5-0.6,1.7-1.4c0.1-0.4,0-0.8-0.2-1.1C30.5,12.8,29.9,13.1,29.3,13.1L29.3,13.1z"/>
                                </g>
                                <g>
                                    <path fill="#A2F2B3" d="M11,20.6c0.1-0.8,0.8-1.4,1.7-1.4H29c1,0,1.8,1,1.7,2c-0.1,0.8-0.8,1.4-1.7,1.4H12.7
                                    C11.6,22.6,10.8,21.7,11,20.6z"/>
                                    <path fill="#A2F2B3" d="M29,20.9H12.7c-0.6,0-1.2-0.3-1.5-0.9c-0.1,0.2-0.2,0.4-0.2,0.6c-0.2,1,0.6,2,1.7,2H29c0.8,0,1.5-0.6,1.7-1.4
                                    c0.1-0.4,0-0.8-0.2-1.1C30.1,20.6,29.6,20.9,29,20.9L29,20.9z"/>
                                </g>
                            </g>
                            <path stroke="#000000" stroke-miterlimit="10" d="M35.5,24.8c-0.3-0.2-0.5-0.5-0.5-0.9c0-0.3,0.1-0.5,0.3-0.8c0.2-0.2,0.5-0.3,0.8-0.3c0.2,0,0.3,0,0.5,0.1
                            c0.6,0.3,1.2,0.4,1.7,0.6c0.6,0.1,1.2,0.2,2,0.2c2,0,3-0.6,3-1.9c0-0.4-0.2-0.7-0.7-0.9c-0.5-0.2-1.2-0.5-2.3-0.7
                            c-1.1-0.3-2-0.5-2.7-0.8c-0.7-0.3-1.3-0.7-1.8-1.2c-0.5-0.5-0.7-1.3-0.7-2.2c0-1.3,0.5-2.3,1.4-3.1c0.9-0.8,2.2-1.2,3.9-1.2
                            c1.4,0,2.7,0.2,4,0.7c0.3,0.1,0.5,0.2,0.6,0.4c0.1,0.2,0.2,0.4,0.2,0.6c0,0.3-0.1,0.5-0.3,0.8c-0.2,0.2-0.5,0.3-0.8,0.3
                            c-0.1,0-0.2,0-0.4-0.1c-1.1-0.3-2.1-0.5-3.1-0.5c-1,0-1.8,0.2-2.3,0.5c-0.6,0.3-0.8,0.8-0.8,1.4c0,0.5,0.3,0.9,0.8,1.2
                            c0.5,0.3,1.3,0.5,2.4,0.7c1.1,0.3,1.9,0.5,2.6,0.8c0.7,0.3,1.3,0.7,1.7,1.2c0.5,0.6,0.7,1.3,0.7,2.2c0,1.1-0.5,2.1-1.4,2.8
                            c-0.9,0.8-2.2,1.1-3.9,1.1C38.6,26,37,25.6,35.5,24.8z M47.7,25.5c-0.2-0.2-0.4-0.5-0.4-0.9V7.2c0-0.3,0.1-0.6,0.4-0.9
                            C48,6.1,48.3,6,48.6,6c0.4,0,0.7,0.1,0.9,0.3c0.2,0.2,0.4,0.5,0.4,0.9v17.4c0,0.3-0.1,0.6-0.4,0.9c-0.2,0.2-0.5,0.3-0.9,0.3
                            C48.3,25.9,48,25.7,47.7,25.5z M53.9,25.5c-0.7-0.3-1.2-0.8-1.6-1.4c-0.4-0.6-0.6-1.3-0.6-2.1c0-1.3,0.5-2.4,1.6-3.2
                            c1.1-0.8,2.6-1.2,4.7-1.2h3.3v-0.2c0-1.2-0.3-2-0.9-2.6c-0.6-0.5-1.5-0.8-2.8-0.8c-0.7,0-1.3,0.1-1.8,0.2c-0.5,0.1-1.1,0.3-1.8,0.5
                            c-0.1,0-0.3,0.1-0.4,0.1c-0.3,0-0.5-0.1-0.7-0.3c-0.2-0.2-0.3-0.4-0.3-0.7c0-0.5,0.2-0.8,0.7-1c1.5-0.6,3.1-1,4.7-1
                            c1.3,0,2.3,0.3,3.2,0.8c0.9,0.5,1.5,1.2,1.9,1.9c0.4,0.8,0.6,1.7,0.6,2.6v7.6c0,0.3-0.1,0.6-0.4,0.9c-0.2,0.2-0.5,0.3-0.9,0.3
                            c-0.3,0-0.6-0.1-0.9-0.3c-0.2-0.2-0.4-0.5-0.4-0.9V24c-1.3,1.4-3.1,2-5.1,2C55.3,26,54.5,25.8,53.9,25.5z M59.3,23.3
                            c0.7-0.4,1.4-0.9,1.9-1.4v-2.3h-3c-2.7,0-4.1,0.7-4.1,2.1c0,0.6,0.2,1.2,0.7,1.6c0.4,0.4,1.2,0.6,2.2,0.6
                            C57.8,23.9,58.6,23.7,59.3,23.3z M68.7,25.1c-1.1-0.6-1.9-1.4-2.4-2.5c-0.6-1.1-0.9-2.3-0.9-3.7c0-1.4,0.3-2.6,0.9-3.7
                            c0.6-1.1,1.4-1.9,2.4-2.5c1.1-0.6,2.3-0.9,3.7-0.9c1.4,0,2.6,0.3,3.7,0.9c1.1,0.6,1.9,1.4,2.5,2.5c0.6,1.1,0.9,2.3,0.9,3.7
                            c0,1.4-0.3,2.6-0.9,3.7c-0.6,1.1-1.4,1.9-2.5,2.5S73.8,26,72.4,26C71,26,69.7,25.7,68.7,25.1z M74.5,23.3c0.7-0.3,1.2-0.9,1.7-1.6
                            c0.4-0.7,0.7-1.7,0.7-2.8c0-1.1-0.2-2-0.7-2.8c-0.4-0.7-1-1.3-1.7-1.6c-0.7-0.3-1.4-0.5-2.1-0.5c-0.8,0-1.5,0.2-2.2,0.5
                            c-0.7,0.3-1.2,0.9-1.7,1.6c-0.4,0.7-0.7,1.7-0.7,2.8c0,1.1,0.2,2.1,0.7,2.8c0.4,0.7,1,1.3,1.7,1.6c0.7,0.3,1.4,0.5,2.2,0.5
                            C73.1,23.8,73.8,23.6,74.5,23.3z M81.5,25.5c-0.2-0.2-0.4-0.5-0.4-0.9V7.2c0-0.3,0.1-0.6,0.4-0.9C81.8,6.1,82.1,6,82.4,6
                            s0.6,0.1,0.9,0.4c0.2,0.2,0.4,0.5,0.4,0.9v11l6.5-5.9c0.3-0.2,0.5-0.3,0.8-0.3c0.4,0,0.7,0.1,0.9,0.3c0.2,0.2,0.3,0.5,0.3,0.8
                            c0,0.3-0.2,0.6-0.5,0.9l-3.9,3.5l4.9,6.4c0.2,0.2,0.3,0.5,0.3,0.7c0,0.4-0.1,0.6-0.4,0.9c-0.2,0.2-0.5,0.3-0.9,0.3
                            c-0.2,0-0.4,0-0.5-0.1c-0.2-0.1-0.3-0.2-0.5-0.4L86,19.1l-2.4,2.1v3.5c0,0.3-0.1,0.6-0.4,0.9c-0.2,0.2-0.5,0.3-0.9,0.3
                            S81.8,25.7,81.5,25.5z"/>
                        </svg>

                    </div>
                </div>
                <div class="col-md mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="200">
                    <div class="mw-100p mx-auto">
                        <!-- Image -->
                        <svg viewBox="0 0 100 34" xmlns="http://www.w3.org/2000/svg">
                            <path fill="#0096DA"
                                  d="M20.2,7h-6.6v7H9.6v3.6h3.9v7.7h4.7v-7.7h0.6h1.3c3.7,0,5.8-2,5.8-5.5C26,8.9,23.9,7,20.2,7z M20,14h-1.1 h-0.6v-3.4H20c1,0,1.6,0.6,1.6,1.7C21.6,13.4,21,14,20,14z"/>
                            <polygon fill="#002B86" points="13.6,14 13.6,7 11.9,8.7 11.9,14"/>
                            <path fill="#002B86"
                                  d="M20,14c1,0,1.6-0.6,1.6-1.7c0-1.1-0.6-1.7-1.6-1.7h-1.7v1.7h0.1C19.3,12.3,19.9,12.9,20,14C19.9,14,19.9,14,20,14L20,14z"/>
                            <path fill="#002B86"
                                  d="M20.2,17.6h-1.3h-0.6v1.7h0.3c2,0,3.6-0.7,4.7-1.7c0.5-0.5,1.1-1.1,1.6-1.8C23.9,17,22.3,17.6,20.2,17.6z"/>
                            <polygon fill="#002B86"
                                     points="13.6,17.6 9.6,17.6 9.6,14 8,15.7 8,19.3 11.9,19.3 11.9,27 16.6,27 18.3,25.3 13.6,25.3"/>
                            <path fill="#002B86" stroke="#002B86" stroke-miterlimit="#002B86"
                                  d="M32,7h3.3c1.5,0,2.6,0.2,3.3,0.7c0.6,0.4,1.1,0.9,1.5,1.6c0.4,0.7,0.5,1.5,0.5,2.3c0,1.2-0.3,2.2-1,3.1 c-1,1.3-2.5,2-4.7,2h-1.8l-0.8,6.6H30L32,7z M34.2,9.2l-0.7,5.3h1.6c1,0,1.8-0.3,2.3-0.8c0.5-0.5,0.8-1.2,0.8-2.2 c0-1.6-1-2.3-3-2.3H34.2z"/>
                            <path fill="#002B86" stroke="#002B86" stroke-miterlimit="#002B86"
                                  d="M51.4,13.4l-1.2,9.9h-2.4l0.1-1.1c-1,0.9-2.1,1.3-3.1,1.3c-1.3,0-2.4-0.4-3.3-1.3c-0.8-0.9-1.3-2.1-1.3-3.5 c0-1.6,0.5-3,1.4-4c1-1,2.2-1.6,3.8-1.6c0.7,0,1.3,0.1,1.8,0.3c0.5,0.2,1,0.6,1.6,1.2l0.2-1.3H51.4z M48.5,18 c0-0.9-0.3-1.6-0.8-2.1c-0.5-0.6-1.2-0.8-2-0.8c-0.9,0-1.6,0.3-2.2,1c-0.6,0.7-0.9,1.5-0.9,2.5c0,0.9,0.2,1.6,0.7,2.1 c0.5,0.6,1.1,0.8,1.9,0.8c0.9,0,1.6-0.3,2.3-1C48.2,19.9,48.5,19,48.5,18z"/>
                            <path fill="#002B86" stroke="#002B86" stroke-miterlimit="#002B86"
                                  d="M63.5,13.4L54.4,29h-2.7l4.1-6.9l-3.6-8.7h2.5l2.5,6.4l3.6-6.4H63.5z"/>
                            <path fill="#0096DA" stroke="#0096DA" stroke-miterlimit="#0096DA"
                                  d="M67.4,7h3.3c1.5,0,2.6,0.2,3.3,0.7c0.6,0.4,1.1,0.9,1.5,1.6c0.4,0.7,0.5,1.5,0.5,2.3c0,1.2-0.3,2.2-1,3.1 c-1,1.3-2.5,2-4.7,2h-1.8l-0.8,6.6h-2.4L67.4,7z M69.5,9.2l-0.7,5.3h1.6c1,0,1.8-0.3,2.3-0.8c0.5-0.5,0.8-1.2,0.8-2.2 c0-1.6-1-2.3-3-2.3H69.5z"/>
                            <path fill="#0096DA" stroke="#0096DA" stroke-miterlimit="#0096DA"
                                  d="M86.7,13.4l-1.2,9.9h-2.4l0.1-1.1c-1,0.9-2.1,1.3-3.1,1.3c-1.3,0-2.4-0.4-3.3-1.3c-0.8-0.9-1.3-2.1-1.3-3.5 c0-1.6,0.5-3,1.4-4c1-1,2.2-1.6,3.8-1.6c0.7,0,1.3,0.1,1.8,0.3c0.5,0.2,1,0.6,1.6,1.2l0.2-1.3H86.7z M83.8,18 c0-0.9-0.3-1.6-0.8-2.1c-0.5-0.6-1.2-0.8-2-0.8c-0.9,0-1.6,0.3-2.2,1c-0.6,0.7-0.9,1.5-0.9,2.5c0,0.9,0.2,1.6,0.7,2.1 c0.5,0.6,1.1,0.8,1.9,0.8c0.9,0,1.6-0.3,2.3-1C83.5,19.9,83.8,19,83.8,18z"/>
                            <path fill="#0096DA" stroke="#0096DA" stroke-miterlimit="#0096DA"
                                  d="M91.3,13.4L90,23.3h-2.4l1.2-9.9H91.3z M92,8.6c0,0.3-0.1,0.6-0.4,0.9c-0.2,0.2-0.5,0.4-0.9,0.4 c-0.3,0-0.7-0.1-0.9-0.4c-0.2-0.3-0.4-0.6-0.4-0.9c0-0.3,0.1-0.6,0.4-0.9c0.2-0.2,0.5-0.4,0.9-0.4c0.3,0,0.7,0.1,0.9,0.4 C91.9,8,92,8.3,92,8.6z"/>
                        </svg>

                    </div>
                </div>
                <div class="col-md mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="250">
                    <div class="mw-100p mx-auto">
                        <!-- Image -->
                        <svg viewBox="0 0 100 34" xmlns="http://www.w3.org/2000/svg">
                            <path fill="#1DD05D" d="M29.3,17c0,6.6-5.4,12-12.1,12C10.4,29,5,23.6,5,17c0-6.6,5.4-12,12.1-12C23.8,5,29.3,10.4,29.3,17z M17.1,11.5
                            c-3.2,0-6.1,1.5-7.9,3.9l1.1,1.1c1.5-2.1,4-3.4,6.8-3.4c2.8,0,5.3,1.4,6.8,3.4l1.1-1.1C23.2,13,20.4,11.5,17.1,11.5z M17.1,14.1
                            c-2.6,0-4.9,1.3-6.3,3.2l1.1,1.1c1.1-1.7,3-2.8,5.2-2.8c2.2,0,4.1,1.1,5.2,2.8l1.1-1.1C22,15.4,19.7,14.1,17.1,14.1z M17.1,16.8
                            c-1.8,0-3.4,1-4.3,2.5l1.1,1.1c0.5-1.2,1.7-2.1,3.1-2.1c1.4,0,2.6,0.9,3.1,2.1l1.1-1.1C20.6,17.8,19,16.8,17.1,16.8z M17.1,22.8
                            l1.9-1.9c-0.5-0.5-1.2-0.8-1.9-0.8c-0.8,0-1.4,0.3-1.9,0.8L17.1,22.8z M39.1,24.2c2.9,0,4.9-1.5,4.9-4v0c0-2.2-1.5-3.2-4.4-3.9
                            c-2.6-0.6-3.2-1.1-3.2-2.1v0c0-0.9,0.8-1.6,2.2-1.6c1.1,0,2.1,0.3,3.1,1c0.2,0.1,0.4,0.2,0.6,0.2c0.6,0,1.1-0.5,1.1-1.1
                            c0-0.5-0.3-0.8-0.5-0.9c-1.2-0.8-2.6-1.2-4.3-1.2c-2.7,0-4.6,1.6-4.6,3.9v0c0,2.5,1.6,3.3,4.5,4c2.5,0.6,3.1,1.1,3.1,2.1v0
                            c0,1-0.9,1.7-2.4,1.7c-1.5,0-2.7-0.5-3.8-1.4c-0.2-0.1-0.4-0.2-0.7-0.2c-0.6,0-1.1,0.5-1.1,1.1c0,0.4,0.2,0.7,0.5,0.9
                            C35.5,23.7,37.2,24.2,39.1,24.2z M45.5,26.1c0,0.7,0.5,1.2,1.2,1.2c0.7,0,1.2-0.5,1.2-1.2v-3.6c0.7,0.9,1.8,1.8,3.5,1.8
                            c2.4,0,4.8-1.9,4.8-5.3v0c0-3.4-2.4-5.3-4.8-5.3c-1.7,0-2.7,0.8-3.5,1.9V15c0-0.7-0.5-1.2-1.2-1.2c-0.7,0-1.2,0.5-1.2,1.2V26.1z
                             M50.8,22.2c-1.6,0-3-1.3-3-3.2v0c0-1.9,1.4-3.2,3-3.2s2.9,1.3,2.9,3.2v0C53.7,21,52.4,22.2,50.8,22.2z M60.5,24.3
                            c1.6,0,2.6-0.7,3.3-1.5v0.4c0,0.5,0.5,1,1.1,1c0.6,0,1.1-0.5,1.1-1.1v-5c0-1.3-0.3-2.4-1.1-3.1c-0.7-0.7-1.9-1.1-3.4-1.1
                            c-1.3,0-2.3,0.2-3.3,0.6c-0.3,0.1-0.6,0.5-0.6,0.9c0,0.5,0.4,1,1,1c0.1,0,0.2,0,0.4-0.1c0.6-0.2,1.4-0.4,2.3-0.4
                            c1.7,0,2.5,0.8,2.5,2.2v0.2c-0.8-0.2-1.6-0.4-2.8-0.4c-2.5,0-4.2,1.1-4.2,3.3v0C56.9,23.2,58.6,24.3,60.5,24.3z M61.2,22.6
                            c-1.1,0-2-0.6-2-1.5v0c0-1.1,0.9-1.7,2.4-1.7c0.9,0,1.7,0.2,2.3,0.4v0.7C63.9,21.7,62.7,22.6,61.2,22.6z M71.3,24.2
                            c0.6,0,1.1-0.1,1.6-0.3c0.3-0.1,0.6-0.5,0.6-0.9c0-0.5-0.5-1-1-1c-0.1,0-0.3,0.1-0.6,0.1c-0.8,0-1.3-0.4-1.3-1.3v-5h1.8
                            c0.6,0,1-0.4,1-1c0-0.6-0.5-1-1-1h-1.8v-1.7c0-0.6-0.5-1.2-1.2-1.2c-0.7,0-1.2,0.5-1.2,1.2v1.7H68c-0.6,0-1,0.4-1,1c0,0.6,0.4,1,1,1
                            h0.4v5.3C68.4,23.5,69.6,24.2,71.3,24.2z M74.9,11.3c0,0.7,0.6,1.2,1.3,1.2c0.8,0,1.3-0.5,1.3-1.2v-0.1c0-0.7-0.6-1.1-1.3-1.1
                            c-0.8,0-1.3,0.4-1.3,1.1V11.3z M75,23c0,0.7,0.5,1.2,1.2,1.2c0.7,0,1.2-0.5,1.2-1.2v-8c0-0.7-0.5-1.2-1.2-1.2S75,14.3,75,15V23z
                             M80,23c0,0.6,0.5,1.2,1.2,1.2c0.7,0,1.2-0.5,1.2-1.2v-7.1h1.8c0.5,0,1-0.4,1-1s-0.4-1-1-1h-1.8v-0.6c0-1.1,0.5-1.5,1.4-1.5
                            c0.2,0,0.3,0,0.5,0c0.5,0,1-0.4,1-1c0-0.5-0.4-0.9-0.8-1C84,10,83.6,9.9,83.2,9.9c-1,0-1.8,0.3-2.3,0.8c-0.5,0.5-0.8,1.4-0.8,2.5V14
                            h-0.4c-0.5,0-1,0.4-1,1s0.4,1,1,1H80V23z M87.7,27.2c1.7,0,2.6-0.8,3.5-2.8l3.8-8.9c0-0.1,0.1-0.4,0.1-0.6c0-0.6-0.5-1.1-1.1-1.1
                            c-0.6,0-0.9,0.4-1.1,0.9l-2.6,6.7l-2.8-6.7c-0.2-0.5-0.5-0.9-1.1-0.9c-0.7,0-1.2,0.5-1.2,1.1c0,0.2,0.1,0.4,0.1,0.6l3.8,8.4L89,24.1
                            c-0.4,0.8-0.8,1.1-1.5,1.1c-0.3,0-0.5-0.1-0.8-0.1c-0.1,0-0.2-0.1-0.4-0.1c-0.5,0-1,0.4-1,1c0,0.6,0.4,0.8,0.7,1
                            C86.5,27.1,87,27.2,87.7,27.2z"/>
                        </svg>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- EVENTS
    ================================================== -->
    <section class="bg-white py-5 pt-md-11 pb-md-10">
        <div class="container">
            <div class="row align-items-end mb-4 mb-md-7">
                <div class="col-md mb-4 mb-md-0">
                    <h1 class="mb-1">Upcoming Events</h1>
                    <p class="font-size-lg mb-0 text-capitalize">Discover your perfect program in our courses.</p>
                </div>
                <div class="col-md-auto">
                    <a href="event-list.html" class="d-flex align-items-center fw-medium">
                        Browse All
                        <div class="ms-2 d-flex">
                            <!-- Icon -->
                            <svg width="10" height="10" viewBox="0 0 10 10" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7.7779 4.6098L3.32777 0.159755C3.22485 0.0567475 3.08745 0 2.94095 0C2.79445 0 2.65705 0.0567475 2.55412 0.159755L2.2264 0.487394C2.01315 0.700889 2.01315 1.04788 2.2264 1.26105L5.96328 4.99793L2.22225 8.73895C2.11933 8.84196 2.0625 8.97928 2.0625 9.1257C2.0625 9.27228 2.11933 9.4096 2.22225 9.51269L2.54998 9.84025C2.65298 9.94325 2.7903 10 2.9368 10C3.0833 10 3.2207 9.94325 3.32363 9.84025L7.7779 5.38614C7.88107 5.2828 7.93774 5.14484 7.93741 4.99817C7.93774 4.85094 7.88107 4.71305 7.7779 4.6098Z"
                                    fill="currentColor"/>
                            </svg>

                        </div>
                    </a>
                </div>
            </div>

            <div class="row row-cols-lg-2">
                <div class="col-lg mb-5 mb-md-6">
                    <!-- Card -->
                    <div class="card border shadow p-2 lift">
                        <div class="row gx-0">
                            <!-- Image -->
                            <a href="event-single.html" class="col-auto d-block mw-md-152" style="max-width: 120px;">
                                <img class="img-fluid rounded shadow-light-lg h-100 o-f-c"
                                     src="{{asset('assets')}}/img/events/event-1.jpg" alt="...">
                            </a>

                            <!-- Body -->
                            <div class="col">
                                <div class="card-body py-0 px-md-5 px-3">
                                    <div class="badge badge-lg badge-orange badge-pill mb-3 mt-1 px-5 py-2">
                                        <span class="text-white font-size-sm fw-normal">06 Aprıl</span>
                                    </div>

                                    <a href="event-single.html" class="d-block mb-2"><h5
                                            class="line-clamp-2 h-xl-52 mb-1">Elegant Light Box Paper Cut Dioramas New
                                            Design Conference</h5></a>

                                    <ul class="nav mx-n3 d-block d-md-flex">
                                        <li class="nav-item px-3 mb-3 mb-md-0">
                                            <div class="d-flex align-items-center">
                                                <div class="me-2 d-flex text-secondary icon-uxs">
                                                    <!-- Icon -->
                                                    <svg width="16" height="16" viewBox="0 0 16 16"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M14.3164 4.20996C13.985 4.37028 13.8464 4.76904 14.0067 5.10026C14.4447 6.00505 14.6667 6.98031 14.6667 8C14.6667 11.6759 11.6759 14.6667 8 14.6667C4.32406 14.6667 1.33333 11.6759 1.33333 8C1.33333 4.32406 4.32406 1.33333 8 1.33333C9.52328 1.33333 10.9543 1.83073 12.1387 2.77165C12.4259 3.00098 12.846 2.95296 13.0754 2.66471C13.3047 2.37663 13.2567 1.95703 12.9683 1.72803C11.5661 0.613607 9.8016 0 8 0C3.58903 0 0 3.58903 0 8C0 12.411 3.58903 16 8 16C12.411 16 16 12.411 16 8C16 6.77767 15.7331 5.60628 15.2067 4.51969C15.0467 4.18766 14.6466 4.04932 14.3164 4.20996Z"
                                                            fill="currentColor"/>
                                                        <path
                                                            d="M7.99967 2.66663C7.63167 2.66663 7.33301 2.96529 7.33301 3.33329V7.99996C7.33301 8.36796 7.63167 8.66663 7.99967 8.66663H11.333C11.701 8.66663 11.9997 8.36796 11.9997 7.99996C11.9997 7.63196 11.701 7.33329 11.333 7.33329H8.66634V3.33329C8.66634 2.96529 8.36768 2.66663 7.99967 2.66663Z"
                                                            fill="currentColor"/>
                                                    </svg>

                                                </div>
                                                <div class="font-size-sm">8:00 am - 5:00 pm</div>
                                            </div>
                                        </li>
                                        <li class="nav-item px-3 mb-3 mb-md-0">
                                            <div class="d-flex align-items-center">
                                                <div class="me-2 d-flex text-secondary icon-uxs">
                                                    <!-- Icon -->
                                                    <svg width="18" height="18" viewBox="0 0 18 18"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M14.9748 3.12964C13.6007 1.14086 11.4229 0 9.0002 0C6.57754 0 4.39972 1.14086 3.02557 3.12964C1.65816 5.10838 1.34243 7.61351 2.17929 9.82677C2.40313 10.4312 2.75894 11.0184 3.23433 11.5687L8.52105 17.7784C8.64062 17.919 8.8158 18 9.0002 18C9.18459 18 9.35978 17.919 9.47934 17.7784L14.7646 11.5703C15.2421 11.0169 15.5974 10.4303 15.8194 9.83078C16.658 7.61351 16.3422 5.10838 14.9748 3.12964ZM14.6408 9.38999C14.4697 9.85257 14.1902 10.3099 13.8107 10.7498C13.8096 10.7509 13.8086 10.7519 13.8077 10.7532L9.0002 16.3999L4.1897 10.7497C3.8104 10.3101 3.53094 9.85282 3.35808 9.38581C2.66599 7.55539 2.92864 5.48413 4.06088 3.84546C5.19668 2.20155 6.9971 1.25873 9.0002 1.25873C11.0033 1.25873 12.8035 2.20152 13.9393 3.84546C15.0718 5.48413 15.3346 7.55539 14.6408 9.38999Z"
                                                            fill="currentColor"/>
                                                        <path
                                                            d="M9.00019 3.73438C7.0569 3.73438 5.47571 5.31535 5.47571 7.25886C5.47571 9.20237 7.05668 10.7833 9.00019 10.7833C10.9437 10.7833 12.5247 9.20237 12.5247 7.25886C12.5247 5.31556 10.9435 3.73438 9.00019 3.73438ZM9.00019 9.52457C7.75088 9.52457 6.73444 8.50814 6.73444 7.25882C6.73444 6.00951 7.75088 4.99307 9.00019 4.99307C10.2495 4.99307 11.2659 6.00951 11.2659 7.25882C11.2659 8.50814 10.2495 9.52457 9.00019 9.52457Z"
                                                            fill="currentColor"/>
                                                    </svg>

                                                </div>
                                                <div class="font-size-sm">London, UK</div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg mb-5 mb-md-6">
                    <!-- Card -->
                    <div class="card border shadow p-2 lift">
                        <div class="row gx-0">
                            <!-- Image -->
                            <a href="event-single.html" class="col-auto d-block mw-md-152" style="max-width: 120px;">
                                <img class="img-fluid rounded shadow-light-lg h-100 o-f-c"
                                     src="{{asset('assets')}}/img/events/event-2.jpg" alt="...">
                            </a>

                            <!-- Body -->
                            <div class="col">
                                <div class="card-body py-0 px-md-5 px-3">
                                    <div class="badge badge-lg badge-orange badge-pill mb-3 mt-1 px-5 py-2">
                                        <span class="text-white font-size-sm fw-normal">06 Aprıl</span>
                                    </div>

                                    <a href="event-single.html" class="d-block mb-2"><h5
                                            class="line-clamp-2 h-xl-52 mb-1">Lambeth Safeguarding: Understanding
                                            Contextual Harm</h5></a>

                                    <ul class="nav mx-n3 d-block d-md-flex">
                                        <li class="nav-item px-3 mb-3 mb-md-0">
                                            <div class="d-flex align-items-center">
                                                <div class="me-2 d-flex text-secondary icon-uxs">
                                                    <!-- Icon -->
                                                    <svg width="16" height="16" viewBox="0 0 16 16"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M14.3164 4.20996C13.985 4.37028 13.8464 4.76904 14.0067 5.10026C14.4447 6.00505 14.6667 6.98031 14.6667 8C14.6667 11.6759 11.6759 14.6667 8 14.6667C4.32406 14.6667 1.33333 11.6759 1.33333 8C1.33333 4.32406 4.32406 1.33333 8 1.33333C9.52328 1.33333 10.9543 1.83073 12.1387 2.77165C12.4259 3.00098 12.846 2.95296 13.0754 2.66471C13.3047 2.37663 13.2567 1.95703 12.9683 1.72803C11.5661 0.613607 9.8016 0 8 0C3.58903 0 0 3.58903 0 8C0 12.411 3.58903 16 8 16C12.411 16 16 12.411 16 8C16 6.77767 15.7331 5.60628 15.2067 4.51969C15.0467 4.18766 14.6466 4.04932 14.3164 4.20996Z"
                                                            fill="currentColor"/>
                                                        <path
                                                            d="M7.99967 2.66663C7.63167 2.66663 7.33301 2.96529 7.33301 3.33329V7.99996C7.33301 8.36796 7.63167 8.66663 7.99967 8.66663H11.333C11.701 8.66663 11.9997 8.36796 11.9997 7.99996C11.9997 7.63196 11.701 7.33329 11.333 7.33329H8.66634V3.33329C8.66634 2.96529 8.36768 2.66663 7.99967 2.66663Z"
                                                            fill="currentColor"/>
                                                    </svg>

                                                </div>
                                                <div class="font-size-sm">8:00 am - 5:00 pm</div>
                                            </div>
                                        </li>
                                        <li class="nav-item px-3 mb-3 mb-md-0">
                                            <div class="d-flex align-items-center">
                                                <div class="me-2 d-flex text-secondary icon-uxs">
                                                    <!-- Icon -->
                                                    <svg width="18" height="18" viewBox="0 0 18 18"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M14.9748 3.12964C13.6007 1.14086 11.4229 0 9.0002 0C6.57754 0 4.39972 1.14086 3.02557 3.12964C1.65816 5.10838 1.34243 7.61351 2.17929 9.82677C2.40313 10.4312 2.75894 11.0184 3.23433 11.5687L8.52105 17.7784C8.64062 17.919 8.8158 18 9.0002 18C9.18459 18 9.35978 17.919 9.47934 17.7784L14.7646 11.5703C15.2421 11.0169 15.5974 10.4303 15.8194 9.83078C16.658 7.61351 16.3422 5.10838 14.9748 3.12964ZM14.6408 9.38999C14.4697 9.85257 14.1902 10.3099 13.8107 10.7498C13.8096 10.7509 13.8086 10.7519 13.8077 10.7532L9.0002 16.3999L4.1897 10.7497C3.8104 10.3101 3.53094 9.85282 3.35808 9.38581C2.66599 7.55539 2.92864 5.48413 4.06088 3.84546C5.19668 2.20155 6.9971 1.25873 9.0002 1.25873C11.0033 1.25873 12.8035 2.20152 13.9393 3.84546C15.0718 5.48413 15.3346 7.55539 14.6408 9.38999Z"
                                                            fill="currentColor"/>
                                                        <path
                                                            d="M9.00019 3.73438C7.0569 3.73438 5.47571 5.31535 5.47571 7.25886C5.47571 9.20237 7.05668 10.7833 9.00019 10.7833C10.9437 10.7833 12.5247 9.20237 12.5247 7.25886C12.5247 5.31556 10.9435 3.73438 9.00019 3.73438ZM9.00019 9.52457C7.75088 9.52457 6.73444 8.50814 6.73444 7.25882C6.73444 6.00951 7.75088 4.99307 9.00019 4.99307C10.2495 4.99307 11.2659 6.00951 11.2659 7.25882C11.2659 8.50814 10.2495 9.52457 9.00019 9.52457Z"
                                                            fill="currentColor"/>
                                                    </svg>

                                                </div>
                                                <div class="font-size-sm">London, UK</div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg mb-5 mb-md-6">
                    <!-- Card -->
                    <div class="card border shadow p-2 lift">
                        <div class="row gx-0">
                            <!-- Image -->
                            <a href="event-single.html" class="col-auto d-block mw-md-152" style="max-width: 120px;">
                                <img class="img-fluid rounded shadow-light-lg h-100 o-f-c"
                                     src="{{asset('assets')}}/img/events/event-3.jpg" alt="...">
                            </a>

                            <!-- Body -->
                            <div class="col">
                                <div class="card-body py-0 px-md-5 px-3">
                                    <div class="badge badge-lg badge-orange badge-pill mb-3 mt-1 px-5 py-2">
                                        <span class="text-white font-size-sm fw-normal">06 Aprıl</span>
                                    </div>

                                    <a href="event-single.html" class="d-block mb-2"><h5
                                            class="line-clamp-2 h-xl-52 mb-1">Discover Law - Get into the best UK law
                                            schools</h5></a>

                                    <ul class="nav mx-n3 d-block d-md-flex">
                                        <li class="nav-item px-3 mb-3 mb-md-0">
                                            <div class="d-flex align-items-center">
                                                <div class="me-2 d-flex text-secondary icon-uxs">
                                                    <!-- Icon -->
                                                    <svg width="16" height="16" viewBox="0 0 16 16"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M14.3164 4.20996C13.985 4.37028 13.8464 4.76904 14.0067 5.10026C14.4447 6.00505 14.6667 6.98031 14.6667 8C14.6667 11.6759 11.6759 14.6667 8 14.6667C4.32406 14.6667 1.33333 11.6759 1.33333 8C1.33333 4.32406 4.32406 1.33333 8 1.33333C9.52328 1.33333 10.9543 1.83073 12.1387 2.77165C12.4259 3.00098 12.846 2.95296 13.0754 2.66471C13.3047 2.37663 13.2567 1.95703 12.9683 1.72803C11.5661 0.613607 9.8016 0 8 0C3.58903 0 0 3.58903 0 8C0 12.411 3.58903 16 8 16C12.411 16 16 12.411 16 8C16 6.77767 15.7331 5.60628 15.2067 4.51969C15.0467 4.18766 14.6466 4.04932 14.3164 4.20996Z"
                                                            fill="currentColor"/>
                                                        <path
                                                            d="M7.99967 2.66663C7.63167 2.66663 7.33301 2.96529 7.33301 3.33329V7.99996C7.33301 8.36796 7.63167 8.66663 7.99967 8.66663H11.333C11.701 8.66663 11.9997 8.36796 11.9997 7.99996C11.9997 7.63196 11.701 7.33329 11.333 7.33329H8.66634V3.33329C8.66634 2.96529 8.36768 2.66663 7.99967 2.66663Z"
                                                            fill="currentColor"/>
                                                    </svg>

                                                </div>
                                                <div class="font-size-sm">8:00 am - 5:00 pm</div>
                                            </div>
                                        </li>
                                        <li class="nav-item px-3 mb-3 mb-md-0">
                                            <div class="d-flex align-items-center">
                                                <div class="me-2 d-flex text-secondary icon-uxs">
                                                    <!-- Icon -->
                                                    <svg width="18" height="18" viewBox="0 0 18 18"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M14.9748 3.12964C13.6007 1.14086 11.4229 0 9.0002 0C6.57754 0 4.39972 1.14086 3.02557 3.12964C1.65816 5.10838 1.34243 7.61351 2.17929 9.82677C2.40313 10.4312 2.75894 11.0184 3.23433 11.5687L8.52105 17.7784C8.64062 17.919 8.8158 18 9.0002 18C9.18459 18 9.35978 17.919 9.47934 17.7784L14.7646 11.5703C15.2421 11.0169 15.5974 10.4303 15.8194 9.83078C16.658 7.61351 16.3422 5.10838 14.9748 3.12964ZM14.6408 9.38999C14.4697 9.85257 14.1902 10.3099 13.8107 10.7498C13.8096 10.7509 13.8086 10.7519 13.8077 10.7532L9.0002 16.3999L4.1897 10.7497C3.8104 10.3101 3.53094 9.85282 3.35808 9.38581C2.66599 7.55539 2.92864 5.48413 4.06088 3.84546C5.19668 2.20155 6.9971 1.25873 9.0002 1.25873C11.0033 1.25873 12.8035 2.20152 13.9393 3.84546C15.0718 5.48413 15.3346 7.55539 14.6408 9.38999Z"
                                                            fill="currentColor"/>
                                                        <path
                                                            d="M9.00019 3.73438C7.0569 3.73438 5.47571 5.31535 5.47571 7.25886C5.47571 9.20237 7.05668 10.7833 9.00019 10.7833C10.9437 10.7833 12.5247 9.20237 12.5247 7.25886C12.5247 5.31556 10.9435 3.73438 9.00019 3.73438ZM9.00019 9.52457C7.75088 9.52457 6.73444 8.50814 6.73444 7.25882C6.73444 6.00951 7.75088 4.99307 9.00019 4.99307C10.2495 4.99307 11.2659 6.00951 11.2659 7.25882C11.2659 8.50814 10.2495 9.52457 9.00019 9.52457Z"
                                                            fill="currentColor"/>
                                                    </svg>

                                                </div>
                                                <div class="font-size-sm">London, UK</div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg mb-5 mb-md-6">
                    <!-- Card -->
                    <div class="card border shadow p-2 lift">
                        <div class="row gx-0">
                            <!-- Image -->
                            <a href="event-single.html" class="col-auto d-block mw-md-152" style="max-width: 120px;">
                                <img class="img-fluid rounded shadow-light-lg h-100 o-f-c"
                                     src="{{asset('assets')}}/img/events/event-4.jpg" alt="...">
                            </a>

                            <!-- Body -->
                            <div class="col">
                                <div class="card-body py-0 px-md-5 px-3">
                                    <div class="badge badge-lg badge-orange badge-pill mb-3 mt-1 px-5 py-2">
                                        <span class="text-white font-size-sm fw-normal">06 Aprıl</span>
                                    </div>

                                    <a href="event-single.html" class="d-block mb-2"><h5
                                            class="line-clamp-2 h-xl-52 mb-1">Undergraduate Open Day – Holloway Campus -
                                            3 July 2020</h5></a>

                                    <ul class="nav mx-n3 d-block d-md-flex">
                                        <li class="nav-item px-3 mb-3 mb-md-0">
                                            <div class="d-flex align-items-center">
                                                <div class="me-2 d-flex text-secondary icon-uxs">
                                                    <!-- Icon -->
                                                    <svg width="16" height="16" viewBox="0 0 16 16"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M14.3164 4.20996C13.985 4.37028 13.8464 4.76904 14.0067 5.10026C14.4447 6.00505 14.6667 6.98031 14.6667 8C14.6667 11.6759 11.6759 14.6667 8 14.6667C4.32406 14.6667 1.33333 11.6759 1.33333 8C1.33333 4.32406 4.32406 1.33333 8 1.33333C9.52328 1.33333 10.9543 1.83073 12.1387 2.77165C12.4259 3.00098 12.846 2.95296 13.0754 2.66471C13.3047 2.37663 13.2567 1.95703 12.9683 1.72803C11.5661 0.613607 9.8016 0 8 0C3.58903 0 0 3.58903 0 8C0 12.411 3.58903 16 8 16C12.411 16 16 12.411 16 8C16 6.77767 15.7331 5.60628 15.2067 4.51969C15.0467 4.18766 14.6466 4.04932 14.3164 4.20996Z"
                                                            fill="currentColor"/>
                                                        <path
                                                            d="M7.99967 2.66663C7.63167 2.66663 7.33301 2.96529 7.33301 3.33329V7.99996C7.33301 8.36796 7.63167 8.66663 7.99967 8.66663H11.333C11.701 8.66663 11.9997 8.36796 11.9997 7.99996C11.9997 7.63196 11.701 7.33329 11.333 7.33329H8.66634V3.33329C8.66634 2.96529 8.36768 2.66663 7.99967 2.66663Z"
                                                            fill="currentColor"/>
                                                    </svg>

                                                </div>
                                                <div class="font-size-sm">8:00 am - 5:00 pm</div>
                                            </div>
                                        </li>
                                        <li class="nav-item px-3 mb-3 mb-md-0">
                                            <div class="d-flex align-items-center">
                                                <div class="me-2 d-flex text-secondary icon-uxs">
                                                    <!-- Icon -->
                                                    <svg width="18" height="18" viewBox="0 0 18 18"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M14.9748 3.12964C13.6007 1.14086 11.4229 0 9.0002 0C6.57754 0 4.39972 1.14086 3.02557 3.12964C1.65816 5.10838 1.34243 7.61351 2.17929 9.82677C2.40313 10.4312 2.75894 11.0184 3.23433 11.5687L8.52105 17.7784C8.64062 17.919 8.8158 18 9.0002 18C9.18459 18 9.35978 17.919 9.47934 17.7784L14.7646 11.5703C15.2421 11.0169 15.5974 10.4303 15.8194 9.83078C16.658 7.61351 16.3422 5.10838 14.9748 3.12964ZM14.6408 9.38999C14.4697 9.85257 14.1902 10.3099 13.8107 10.7498C13.8096 10.7509 13.8086 10.7519 13.8077 10.7532L9.0002 16.3999L4.1897 10.7497C3.8104 10.3101 3.53094 9.85282 3.35808 9.38581C2.66599 7.55539 2.92864 5.48413 4.06088 3.84546C5.19668 2.20155 6.9971 1.25873 9.0002 1.25873C11.0033 1.25873 12.8035 2.20152 13.9393 3.84546C15.0718 5.48413 15.3346 7.55539 14.6408 9.38999Z"
                                                            fill="currentColor"/>
                                                        <path
                                                            d="M9.00019 3.73438C7.0569 3.73438 5.47571 5.31535 5.47571 7.25886C5.47571 9.20237 7.05668 10.7833 9.00019 10.7833C10.9437 10.7833 12.5247 9.20237 12.5247 7.25886C12.5247 5.31556 10.9435 3.73438 9.00019 3.73438ZM9.00019 9.52457C7.75088 9.52457 6.73444 8.50814 6.73444 7.25882C6.73444 6.00951 7.75088 4.99307 9.00019 4.99307C10.2495 4.99307 11.2659 6.00951 11.2659 7.25882C11.2659 8.50814 10.2495 9.52457 9.00019 9.52457Z"
                                                            fill="currentColor"/>
                                                    </svg>

                                                </div>
                                                <div class="font-size-sm">London, UK</div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg mb-5 mb-md-6">
                    <!-- Card -->
                    <div class="card border shadow p-2 lift">
                        <div class="row gx-0">
                            <!-- Image -->
                            <a href="event-single.html" class="col-auto d-block mw-md-152" style="max-width: 120px;">
                                <img class="img-fluid rounded shadow-light-lg h-100 o-f-c"
                                     src="{{asset('assets')}}/img/events/event-5.jpg" alt="...">
                            </a>

                            <!-- Body -->
                            <div class="col">
                                <div class="card-body py-0 px-md-5 px-3">
                                    <div class="badge badge-lg badge-orange badge-pill mb-3 mt-1 px-5 py-2">
                                        <span class="text-white font-size-sm fw-normal">06 Aprıl</span>
                                    </div>

                                    <a href="event-single.html" class="d-block mb-2"><h5
                                            class="line-clamp-2 h-xl-52 mb-1">"Introduction to Law" Open Day with
                                            Bristows</h5></a>

                                    <ul class="nav mx-n3 d-block d-md-flex">
                                        <li class="nav-item px-3 mb-3 mb-md-0">
                                            <div class="d-flex align-items-center">
                                                <div class="me-2 d-flex text-secondary icon-uxs">
                                                    <!-- Icon -->
                                                    <svg width="16" height="16" viewBox="0 0 16 16"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M14.3164 4.20996C13.985 4.37028 13.8464 4.76904 14.0067 5.10026C14.4447 6.00505 14.6667 6.98031 14.6667 8C14.6667 11.6759 11.6759 14.6667 8 14.6667C4.32406 14.6667 1.33333 11.6759 1.33333 8C1.33333 4.32406 4.32406 1.33333 8 1.33333C9.52328 1.33333 10.9543 1.83073 12.1387 2.77165C12.4259 3.00098 12.846 2.95296 13.0754 2.66471C13.3047 2.37663 13.2567 1.95703 12.9683 1.72803C11.5661 0.613607 9.8016 0 8 0C3.58903 0 0 3.58903 0 8C0 12.411 3.58903 16 8 16C12.411 16 16 12.411 16 8C16 6.77767 15.7331 5.60628 15.2067 4.51969C15.0467 4.18766 14.6466 4.04932 14.3164 4.20996Z"
                                                            fill="currentColor"/>
                                                        <path
                                                            d="M7.99967 2.66663C7.63167 2.66663 7.33301 2.96529 7.33301 3.33329V7.99996C7.33301 8.36796 7.63167 8.66663 7.99967 8.66663H11.333C11.701 8.66663 11.9997 8.36796 11.9997 7.99996C11.9997 7.63196 11.701 7.33329 11.333 7.33329H8.66634V3.33329C8.66634 2.96529 8.36768 2.66663 7.99967 2.66663Z"
                                                            fill="currentColor"/>
                                                    </svg>

                                                </div>
                                                <div class="font-size-sm">8:00 am - 5:00 pm</div>
                                            </div>
                                        </li>
                                        <li class="nav-item px-3 mb-3 mb-md-0">
                                            <div class="d-flex align-items-center">
                                                <div class="me-2 d-flex text-secondary icon-uxs">
                                                    <!-- Icon -->
                                                    <svg width="18" height="18" viewBox="0 0 18 18"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M14.9748 3.12964C13.6007 1.14086 11.4229 0 9.0002 0C6.57754 0 4.39972 1.14086 3.02557 3.12964C1.65816 5.10838 1.34243 7.61351 2.17929 9.82677C2.40313 10.4312 2.75894 11.0184 3.23433 11.5687L8.52105 17.7784C8.64062 17.919 8.8158 18 9.0002 18C9.18459 18 9.35978 17.919 9.47934 17.7784L14.7646 11.5703C15.2421 11.0169 15.5974 10.4303 15.8194 9.83078C16.658 7.61351 16.3422 5.10838 14.9748 3.12964ZM14.6408 9.38999C14.4697 9.85257 14.1902 10.3099 13.8107 10.7498C13.8096 10.7509 13.8086 10.7519 13.8077 10.7532L9.0002 16.3999L4.1897 10.7497C3.8104 10.3101 3.53094 9.85282 3.35808 9.38581C2.66599 7.55539 2.92864 5.48413 4.06088 3.84546C5.19668 2.20155 6.9971 1.25873 9.0002 1.25873C11.0033 1.25873 12.8035 2.20152 13.9393 3.84546C15.0718 5.48413 15.3346 7.55539 14.6408 9.38999Z"
                                                            fill="currentColor"/>
                                                        <path
                                                            d="M9.00019 3.73438C7.0569 3.73438 5.47571 5.31535 5.47571 7.25886C5.47571 9.20237 7.05668 10.7833 9.00019 10.7833C10.9437 10.7833 12.5247 9.20237 12.5247 7.25886C12.5247 5.31556 10.9435 3.73438 9.00019 3.73438ZM9.00019 9.52457C7.75088 9.52457 6.73444 8.50814 6.73444 7.25882C6.73444 6.00951 7.75088 4.99307 9.00019 4.99307C10.2495 4.99307 11.2659 6.00951 11.2659 7.25882C11.2659 8.50814 10.2495 9.52457 9.00019 9.52457Z"
                                                            fill="currentColor"/>
                                                    </svg>

                                                </div>
                                                <div class="font-size-sm">London, UK</div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg mb-5 mb-md-6">
                    <!-- Card -->
                    <div class="card border shadow p-2 lift">
                        <div class="row gx-0">
                            <!-- Image -->
                            <a href="event-single.html" class="col-auto d-block mw-md-152" style="max-width: 120px;">
                                <img class="img-fluid rounded shadow-light-lg h-100 o-f-c"
                                     src="{{asset('assets')}}/img/events/event-6.jpg" alt="...">
                            </a>

                            <!-- Body -->
                            <div class="col">
                                <div class="card-body py-0 px-md-5 px-3">
                                    <div class="badge badge-lg badge-orange badge-pill mb-3 mt-1 px-5 py-2">
                                        <span class="text-white font-size-sm fw-normal">06 Aprıl</span>
                                    </div>

                                    <a href="event-single.html" class="d-block mb-2"><h5
                                            class="line-clamp-2 h-xl-52 mb-1">Kingston College undergraduate Open Events
                                            2019-20</h5></a>

                                    <ul class="nav mx-n3 d-block d-md-flex">
                                        <li class="nav-item px-3 mb-3 mb-md-0">
                                            <div class="d-flex align-items-center">
                                                <div class="me-2 d-flex text-secondary icon-uxs">
                                                    <!-- Icon -->
                                                    <svg width="16" height="16" viewBox="0 0 16 16"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M14.3164 4.20996C13.985 4.37028 13.8464 4.76904 14.0067 5.10026C14.4447 6.00505 14.6667 6.98031 14.6667 8C14.6667 11.6759 11.6759 14.6667 8 14.6667C4.32406 14.6667 1.33333 11.6759 1.33333 8C1.33333 4.32406 4.32406 1.33333 8 1.33333C9.52328 1.33333 10.9543 1.83073 12.1387 2.77165C12.4259 3.00098 12.846 2.95296 13.0754 2.66471C13.3047 2.37663 13.2567 1.95703 12.9683 1.72803C11.5661 0.613607 9.8016 0 8 0C3.58903 0 0 3.58903 0 8C0 12.411 3.58903 16 8 16C12.411 16 16 12.411 16 8C16 6.77767 15.7331 5.60628 15.2067 4.51969C15.0467 4.18766 14.6466 4.04932 14.3164 4.20996Z"
                                                            fill="currentColor"/>
                                                        <path
                                                            d="M7.99967 2.66663C7.63167 2.66663 7.33301 2.96529 7.33301 3.33329V7.99996C7.33301 8.36796 7.63167 8.66663 7.99967 8.66663H11.333C11.701 8.66663 11.9997 8.36796 11.9997 7.99996C11.9997 7.63196 11.701 7.33329 11.333 7.33329H8.66634V3.33329C8.66634 2.96529 8.36768 2.66663 7.99967 2.66663Z"
                                                            fill="currentColor"/>
                                                    </svg>

                                                </div>
                                                <div class="font-size-sm">8:00 am - 5:00 pm</div>
                                            </div>
                                        </li>
                                        <li class="nav-item px-3 mb-3 mb-md-0">
                                            <div class="d-flex align-items-center">
                                                <div class="me-2 d-flex text-secondary icon-uxs">
                                                    <!-- Icon -->
                                                    <svg width="18" height="18" viewBox="0 0 18 18"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M14.9748 3.12964C13.6007 1.14086 11.4229 0 9.0002 0C6.57754 0 4.39972 1.14086 3.02557 3.12964C1.65816 5.10838 1.34243 7.61351 2.17929 9.82677C2.40313 10.4312 2.75894 11.0184 3.23433 11.5687L8.52105 17.7784C8.64062 17.919 8.8158 18 9.0002 18C9.18459 18 9.35978 17.919 9.47934 17.7784L14.7646 11.5703C15.2421 11.0169 15.5974 10.4303 15.8194 9.83078C16.658 7.61351 16.3422 5.10838 14.9748 3.12964ZM14.6408 9.38999C14.4697 9.85257 14.1902 10.3099 13.8107 10.7498C13.8096 10.7509 13.8086 10.7519 13.8077 10.7532L9.0002 16.3999L4.1897 10.7497C3.8104 10.3101 3.53094 9.85282 3.35808 9.38581C2.66599 7.55539 2.92864 5.48413 4.06088 3.84546C5.19668 2.20155 6.9971 1.25873 9.0002 1.25873C11.0033 1.25873 12.8035 2.20152 13.9393 3.84546C15.0718 5.48413 15.3346 7.55539 14.6408 9.38999Z"
                                                            fill="currentColor"/>
                                                        <path
                                                            d="M9.00019 3.73438C7.0569 3.73438 5.47571 5.31535 5.47571 7.25886C5.47571 9.20237 7.05668 10.7833 9.00019 10.7833C10.9437 10.7833 12.5247 9.20237 12.5247 7.25886C12.5247 5.31556 10.9435 3.73438 9.00019 3.73438ZM9.00019 9.52457C7.75088 9.52457 6.73444 8.50814 6.73444 7.25882C6.73444 6.00951 7.75088 4.99307 9.00019 4.99307C10.2495 4.99307 11.2659 6.00951 11.2659 7.25882C11.2659 8.50814 10.2495 9.52457 9.00019 9.52457Z"
                                                            fill="currentColor"/>
                                                    </svg>

                                                </div>
                                                <div class="font-size-sm">London, UK</div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- INSTRUCTORS
    ================================================== -->
    <section class="py-5 py-md-11">
        <div class="container">
            <div class="row align-items-end mb-3 mb-md-5" data-aos="fade-up">
                <div class="col-md mb-4 mb-md-0">
                    <h1 class="mb-1">Top Rating Instructors</h1>
                    <p class="font-size-lg mb-0 text-capitalize">Discover your perfect program in our courses.</p>
                </div>
                <div class="col-md-auto">
                    <a href="instructors-list-v1.html" class="d-flex align-items-center fw-medium">
                        Browse All
                        <div class="ms-2 d-flex">
                            <!-- Icon -->
                            <svg width="10" height="10" viewBox="0 0 10 10" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7.7779 4.6098L3.32777 0.159755C3.22485 0.0567475 3.08745 0 2.94095 0C2.79445 0 2.65705 0.0567475 2.55412 0.159755L2.2264 0.487394C2.01315 0.700889 2.01315 1.04788 2.2264 1.26105L5.96328 4.99793L2.22225 8.73895C2.11933 8.84196 2.0625 8.97928 2.0625 9.1257C2.0625 9.27228 2.11933 9.4096 2.22225 9.51269L2.54998 9.84025C2.65298 9.94325 2.7903 10 2.9368 10C3.0833 10 3.2207 9.94325 3.32363 9.84025L7.7779 5.38614C7.88107 5.2828 7.93774 5.14484 7.93741 4.99817C7.93774 4.85094 7.88107 4.71305 7.7779 4.6098Z"
                                    fill="currentColor"/>
                            </svg>

                        </div>
                    </a>
                </div>
            </div>

            <div class="mx-n3 mx-md-n4"
                 data-flickity='{"pageDots": false,"cellAlign": "left", "wrapAround": true, "imagesLoaded": true}'>
                <div class="col-6 col-md-4 col-lg-3 text-center py-5 text-md-left px-3 px-md-4" data-aos="fade-up"
                     data-aos-delay="50">
                    <div class="card border shadow p-2 lift">
                        <!-- Image -->
                        <div class="card-zoom position-relative" style="max-width: 250px;">
                            <div class="card-float card-hover right-0 left-0 bottom-0 mb-4">
                                <ul class="nav mx-n4 justify-content-center">
                                    <li class="nav-item px-4">
                                        <a href="#" class="d-block text-white">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item px-4">
                                        <a href="#" class="d-block text-white">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item px-4">
                                        <a href="#" class="d-block text-white">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item px-4">
                                        <a href="#" class="d-block text-white">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <a href="instructors-single.html"
                               class="card-img sk-thumbnail img-ratio-4 card-hover-overlay d-block"><img
                                    class="rounded shadow-light-lg img-fluid"
                                    src="{{asset('assets')}}/img/instructors/instructor-1.jpg" alt="..."></a>
                        </div>

                        <!-- Footer -->
                        <div class="card-footer px-3 pt-4 pb-1">
                            <a href="instructors-single.html" class="d-block"><h5 class="mb-0">Jack Wilson</h5></a>
                            <span class="font-size-d-sm">Developer</span>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 text-center py-5 text-md-left px-3 px-md-4" data-aos="fade-up"
                     data-aos-delay="100">
                    <div class="card border shadow p-2 lift">
                        <!-- Image -->
                        <div class="card-zoom position-relative" style="max-width: 250px;">
                            <div class="card-float card-hover right-0 left-0 bottom-0 mb-4">
                                <ul class="nav mx-n4 justify-content-center">
                                    <li class="nav-item px-4">
                                        <a href="#" class="d-block text-white">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item px-4">
                                        <a href="#" class="d-block text-white">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item px-4">
                                        <a href="#" class="d-block text-white">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item px-4">
                                        <a href="#" class="d-block text-white">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <a href="instructors-single.html"
                               class="card-img sk-thumbnail img-ratio-4 card-hover-overlay d-block"><img
                                    class="rounded shadow-light-lg img-fluid"
                                    src="{{asset('assets')}}/img/instructors/instructor-2.jpg" alt="..."></a>
                        </div>

                        <!-- Footer -->
                        <div class="card-footer px-3 pt-4 pb-1">
                            <a href="instructors-single.html" class="d-block"><h5 class="mb-0">Anna Richard</h5></a>
                            <span class="font-size-d-sm">Travel Bloger</span>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 text-center py-5 text-md-left px-3 px-md-4" data-aos="fade-up"
                     data-aos-delay="150">
                    <div class="card border shadow p-2 lift">
                        <!-- Image -->
                        <div class="card-zoom position-relative" style="max-width: 250px;">
                            <div class="card-float card-hover right-0 left-0 bottom-0 mb-4">
                                <ul class="nav mx-n4 justify-content-center">
                                    <li class="nav-item px-4">
                                        <a href="#" class="d-block text-white">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item px-4">
                                        <a href="#" class="d-block text-white">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item px-4">
                                        <a href="#" class="d-block text-white">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item px-4">
                                        <a href="#" class="d-block text-white">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <a href="instructors-single.html"
                               class="card-img sk-thumbnail img-ratio-4 card-hover-overlay d-block"><img
                                    class="rounded shadow-light-lg img-fluid"
                                    src="{{asset('assets')}}/img/instructors/instructor-3.jpg" alt="..."></a>
                        </div>

                        <!-- Footer -->
                        <div class="card-footer px-3 pt-4 pb-1">
                            <a href="instructors-single.html" class="d-block"><h5 class="mb-0">Kathelen Monero</h5></a>
                            <span class="font-size-d-sm">Designer</span>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 text-center py-5 text-md-left px-3 px-md-4" data-aos="fade-up"
                     data-aos-delay="200">
                    <div class="card border shadow p-2 lift">
                        <!-- Image -->
                        <div class="card-zoom position-relative" style="max-width: 250px;">
                            <div class="card-float card-hover right-0 left-0 bottom-0 mb-4">
                                <ul class="nav mx-n4 justify-content-center">
                                    <li class="nav-item px-4">
                                        <a href="#" class="d-block text-white">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item px-4">
                                        <a href="#" class="d-block text-white">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item px-4">
                                        <a href="#" class="d-block text-white">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item px-4">
                                        <a href="#" class="d-block text-white">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <a href="instructors-single.html"
                               class="card-img sk-thumbnail img-ratio-4 card-hover-overlay d-block"><img
                                    class="rounded shadow-light-lg img-fluid"
                                    src="{{asset('assets')}}/img/instructors/instructor-4.jpg" alt="..."></a>
                        </div>

                        <!-- Footer -->
                        <div class="card-footer px-3 pt-4 pb-1">
                            <a href="instructors-single.html" class="d-block"><h5 class="mb-0">Kristen Pala</h5></a>
                            <span class="font-size-d-sm">User Experience Design</span>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 text-center py-5 text-md-left px-3 px-md-4" data-aos="fade-up"
                     data-aos-delay="250">
                    <div class="card border shadow p-2 lift">
                        <!-- Image -->
                        <div class="card-zoom position-relative" style="max-width: 250px;">
                            <div class="card-float card-hover right-0 left-0 bottom-0 mb-4">
                                <ul class="nav mx-n4 justify-content-center">
                                    <li class="nav-item px-4">
                                        <a href="#" class="d-block text-white">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item px-4">
                                        <a href="#" class="d-block text-white">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item px-4">
                                        <a href="#" class="d-block text-white">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item px-4">
                                        <a href="#" class="d-block text-white">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <a href="instructors-single.html"
                               class="card-img sk-thumbnail img-ratio-4 card-hover-overlay d-block"><img
                                    class="rounded shadow-light-lg img-fluid"
                                    src="{{asset('assets')}}/img/instructors/instructor-2.jpg" alt="..."></a>
                        </div>

                        <!-- Footer -->
                        <div class="card-footer px-3 pt-4 pb-1">
                            <a href="instructors-single.html" class="d-block"><h5 class="mb-0">Anna Richard</h5></a>
                            <span class="font-size-d-sm">Travel Bloger</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- BLOG
    ================================================== -->
    <section class="bg-white py-5 py-md-11">
        <div class="container">
            <div class="row align-items-end mb-4 mb-md-7" data-aos="fade-up">
                <div class="col-md mb-4 mb-md-0">
                    <h1 class="mb-1">Latest News</h1>
                    <p class="font-size-lg mb-0 text-capitalize">Discover your perfect program in our courses.</p>
                </div>
                <div class="col-md-auto">
                    <a href="blog-grid-v1.html" class="d-flex align-items-center fw-medium">
                        Browse All
                        <div class="ms-2 d-flex">
                            <!-- Icon -->
                            <svg width="10" height="10" viewBox="0 0 10 10" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7.7779 4.6098L3.32777 0.159755C3.22485 0.0567475 3.08745 0 2.94095 0C2.79445 0 2.65705 0.0567475 2.55412 0.159755L2.2264 0.487394C2.01315 0.700889 2.01315 1.04788 2.2264 1.26105L5.96328 4.99793L2.22225 8.73895C2.11933 8.84196 2.0625 8.97928 2.0625 9.1257C2.0625 9.27228 2.11933 9.4096 2.22225 9.51269L2.54998 9.84025C2.65298 9.94325 2.7903 10 2.9368 10C3.0833 10 3.2207 9.94325 3.32363 9.84025L7.7779 5.38614C7.88107 5.2828 7.93774 5.14484 7.93741 4.99817C7.93774 4.85094 7.88107 4.71305 7.7779 4.6098Z"
                                    fill="currentColor"/>
                            </svg>

                        </div>
                    </a>
                </div>
            </div>

            <div class="row row-cols-md-2 row-cols-lg-3">
                <div class="col-md mb-5 mb-lg-0">
                    <!-- Card -->
                    <div class="card border shadow p-2 lift sk-fade">
                        <!-- Image -->
                        <div class="card-zoom position-relative">
                            <a href="blog-single.html" class="card-img d-block sk-thumbnail img-ratio-3"><img
                                    class="rounded shadow-light-lg img-fluid"
                                    src="{{asset('assets')}}/img/post/post-1.jpg" alt="..."></a>

                            <a href="blog-single.html"
                               class="badge sk-fade-bottom badge-lg badge-purple badge-pill badge-float bottom-0 left-0 mb-4 ms-4 px-5 me-4">
                                <span class="text-white fw-normal font-size-sm">Figma</span>
                            </a>
                        </div>

                        <!-- Footer -->
                        <div class="card-footer px-2 pb-0 pt-4">
                            <ul class="nav mx-n3 mb-3">
                                <li class="nav-item px-3">
                                    <a href="blog-single.html" class="d-flex align-items-center text-gray-800">
                                        <div class="me-3 d-flex">
                                            <!-- Icon -->
                                            <svg width="15" height="15" viewBox="0 0 15 15"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M13.8102 9.52183C13.313 9.08501 12.7102 8.70758 12.0181 8.40008C11.7223 8.2687 11.3761 8.40191 11.2447 8.69762C11.1134 8.99334 11.2466 9.33952 11.5423 9.47102C12.1258 9.73034 12.6287 10.0436 13.0367 10.4021C13.5396 10.8441 13.8281 11.484 13.8281 12.1582V13.2422C13.8281 13.5653 13.5653 13.8281 13.2422 13.8281H1.75781C1.43475 13.8281 1.17188 13.5653 1.17188 13.2422V12.1582C1.17188 11.484 1.46038 10.8441 1.96335 10.4021C2.55535 9.88186 4.2802 8.67188 7.5 8.67188C9.89079 8.67188 11.8359 6.72672 11.8359 4.33594C11.8359 1.94515 9.89079 0 7.5 0C5.10921 0 3.16406 1.94515 3.16406 4.33594C3.16406 5.7336 3.82896 6.97872 4.85893 7.77214C2.97432 8.18642 1.80199 8.98384 1.18984 9.52183C0.433731 10.1862 0 11.147 0 12.1582V13.2422C0 14.2115 0.788498 15 1.75781 15H13.2422C14.2115 15 15 14.2115 15 13.2422V12.1582C15 11.147 14.5663 10.1862 13.8102 9.52183ZM4.33594 4.33594C4.33594 2.59129 5.75535 1.17188 7.5 1.17188C9.24465 1.17188 10.6641 2.59129 10.6641 4.33594C10.6641 6.08059 9.24465 7.5 7.5 7.5C5.75535 7.5 4.33594 6.08059 4.33594 4.33594Z"
                                                    fill="currentColor"/>
                                            </svg>

                                        </div>
                                        <div class="font-size-sm">Jack Wilson</div>
                                    </a>
                                </li>
                                <li class="nav-item px-3">
                                    <a href="blog-single.html" class="d-flex align-items-center text-gray-800">
                                        <div class="me-2 d-flex">
                                            <!-- Icon -->
                                            <svg width="15" height="15" viewBox="0 0 15 15"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M13.0664 1.17188H11.7188V0.46875C11.7188 0.209883 11.5089 0 11.25 0C10.9911 0 10.7812 0.209883 10.7812 0.46875V1.17188H4.21875V0.46875C4.21875 0.209883 4.0089 0 3.75 0C3.4911 0 3.28125 0.209883 3.28125 0.46875V1.17188H1.93359C0.867393 1.17188 0 2.03927 0 3.10547V13.0664C0 14.1326 0.867393 15 1.93359 15H13.0664C14.1326 15 15 14.1326 15 13.0664V3.10547C15 2.03927 14.1326 1.17188 13.0664 1.17188ZM1.93359 2.10938H3.28125V2.57812C3.28125 2.83699 3.4911 3.04688 3.75 3.04688C4.0089 3.04688 4.21875 2.83699 4.21875 2.57812V2.10938H10.7812V2.57812C10.7812 2.83699 10.9911 3.04688 11.25 3.04688C11.5089 3.04688 11.7188 2.83699 11.7188 2.57812V2.10938H13.0664C13.6157 2.10938 14.0625 2.55621 14.0625 3.10547V4.21875H0.9375V3.10547C0.9375 2.55621 1.38434 2.10938 1.93359 2.10938ZM13.0664 14.0625H1.93359C1.38434 14.0625 0.9375 13.6157 0.9375 13.0664V5.15625H14.0625V13.0664C14.0625 13.6157 13.6157 14.0625 13.0664 14.0625Z"
                                                    fill="currentColor"/>
                                            </svg>

                                        </div>
                                        <div class="font-size-sm">06 April, 2020</div>
                                    </a>
                                </li>
                            </ul>

                            <!-- Heading -->
                            <a href="blog-single.html" class="d-block"><h5 class="line-clamp-2 h-48 h-lg-52">The Best
                                    Destinations to Begin Your Round the World Trip</h5></a>
                        </div>
                    </div>
                </div>

                <div class="col-md mb-5 mb-lg-0">
                    <!-- Card -->
                    <div class="card border shadow p-2 lift sk-fade">
                        <!-- Image -->
                        <div class="card-zoom position-relative">
                            <a href="blog-single.html" class="card-img d-block sk-thumbnail img-ratio-3"><img
                                    class="rounded shadow-light-lg img-fluid"
                                    src="{{asset('assets')}}/img/post/post-2.jpg" alt="..."></a>

                            <a href="blog-single.html"
                               class="badge sk-fade-bottom badge-lg badge-purple badge-pill badge-float bottom-0 left-0 mb-4 ms-4 px-5 me-4">
                                <span class="text-white fw-normal font-size-sm">Adobe XD</span>
                            </a>
                        </div>

                        <!-- Footer -->
                        <div class="card-footer px-2 pb-0 pt-4">
                            <ul class="nav mx-n3 mb-3">
                                <li class="nav-item px-3">
                                    <a href="blog-single.html" class="d-flex align-items-center text-gray-800">
                                        <div class="me-3 d-flex">
                                            <!-- Icon -->
                                            <svg width="15" height="15" viewBox="0 0 15 15"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M13.8102 9.52183C13.313 9.08501 12.7102 8.70758 12.0181 8.40008C11.7223 8.2687 11.3761 8.40191 11.2447 8.69762C11.1134 8.99334 11.2466 9.33952 11.5423 9.47102C12.1258 9.73034 12.6287 10.0436 13.0367 10.4021C13.5396 10.8441 13.8281 11.484 13.8281 12.1582V13.2422C13.8281 13.5653 13.5653 13.8281 13.2422 13.8281H1.75781C1.43475 13.8281 1.17188 13.5653 1.17188 13.2422V12.1582C1.17188 11.484 1.46038 10.8441 1.96335 10.4021C2.55535 9.88186 4.2802 8.67188 7.5 8.67188C9.89079 8.67188 11.8359 6.72672 11.8359 4.33594C11.8359 1.94515 9.89079 0 7.5 0C5.10921 0 3.16406 1.94515 3.16406 4.33594C3.16406 5.7336 3.82896 6.97872 4.85893 7.77214C2.97432 8.18642 1.80199 8.98384 1.18984 9.52183C0.433731 10.1862 0 11.147 0 12.1582V13.2422C0 14.2115 0.788498 15 1.75781 15H13.2422C14.2115 15 15 14.2115 15 13.2422V12.1582C15 11.147 14.5663 10.1862 13.8102 9.52183ZM4.33594 4.33594C4.33594 2.59129 5.75535 1.17188 7.5 1.17188C9.24465 1.17188 10.6641 2.59129 10.6641 4.33594C10.6641 6.08059 9.24465 7.5 7.5 7.5C5.75535 7.5 4.33594 6.08059 4.33594 4.33594Z"
                                                    fill="currentColor"/>
                                            </svg>

                                        </div>
                                        <div class="font-size-sm">Jack Wilson</div>
                                    </a>
                                </li>
                                <li class="nav-item px-3">
                                    <a href="blog-single.html" class="d-flex align-items-center text-gray-800">
                                        <div class="me-2 d-flex">
                                            <!-- Icon -->
                                            <svg width="15" height="15" viewBox="0 0 15 15"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M13.0664 1.17188H11.7188V0.46875C11.7188 0.209883 11.5089 0 11.25 0C10.9911 0 10.7812 0.209883 10.7812 0.46875V1.17188H4.21875V0.46875C4.21875 0.209883 4.0089 0 3.75 0C3.4911 0 3.28125 0.209883 3.28125 0.46875V1.17188H1.93359C0.867393 1.17188 0 2.03927 0 3.10547V13.0664C0 14.1326 0.867393 15 1.93359 15H13.0664C14.1326 15 15 14.1326 15 13.0664V3.10547C15 2.03927 14.1326 1.17188 13.0664 1.17188ZM1.93359 2.10938H3.28125V2.57812C3.28125 2.83699 3.4911 3.04688 3.75 3.04688C4.0089 3.04688 4.21875 2.83699 4.21875 2.57812V2.10938H10.7812V2.57812C10.7812 2.83699 10.9911 3.04688 11.25 3.04688C11.5089 3.04688 11.7188 2.83699 11.7188 2.57812V2.10938H13.0664C13.6157 2.10938 14.0625 2.55621 14.0625 3.10547V4.21875H0.9375V3.10547C0.9375 2.55621 1.38434 2.10938 1.93359 2.10938ZM13.0664 14.0625H1.93359C1.38434 14.0625 0.9375 13.6157 0.9375 13.0664V5.15625H14.0625V13.0664C14.0625 13.6157 13.6157 14.0625 13.0664 14.0625Z"
                                                    fill="currentColor"/>
                                            </svg>

                                        </div>
                                        <div class="font-size-sm">06 April, 2020</div>
                                    </a>
                                </li>
                            </ul>

                            <!-- Heading -->
                            <a href="blog-single.html" class="d-block"><h5 class="line-clamp-2 h-48 h-lg-52">An
                                    Indigenous Anatolian Syllabic Script From 3500 Years Ago</h5></a>
                        </div>
                    </div>
                </div>

                <div class="col-md mb-5 mb-lg-0">
                    <!-- Card -->
                    <div class="card border shadow p-2 lift sk-fade">
                        <!-- Image -->
                        <div class="card-zoom position-relative">
                            <a href="blog-single.html" class="card-img d-block sk-thumbnail img-ratio-3"><img
                                    class="rounded shadow-light-lg img-fluid"
                                    src="{{asset('assets')}}/img/post/post-3.jpg" alt="..."></a>

                            <a href="blog-single.html"
                               class="badge badge-lg sk-fade-bottom badge-purple badge-pill badge-float bottom-0 left-0 mb-4 ms-4 px-5 me-4">
                                <span class="text-white fw-normal font-size-sm">Photoshop</span>
                            </a>
                        </div>

                        <!-- Footer -->
                        <div class="card-footer px-2 pb-0 pt-4">
                            <ul class="nav mx-n3 mb-3">
                                <li class="nav-item px-3">
                                    <a href="blog-single.html" class="d-flex align-items-center text-gray-800">
                                        <div class="me-3 d-flex">
                                            <!-- Icon -->
                                            <svg width="15" height="15" viewBox="0 0 15 15"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M13.8102 9.52183C13.313 9.08501 12.7102 8.70758 12.0181 8.40008C11.7223 8.2687 11.3761 8.40191 11.2447 8.69762C11.1134 8.99334 11.2466 9.33952 11.5423 9.47102C12.1258 9.73034 12.6287 10.0436 13.0367 10.4021C13.5396 10.8441 13.8281 11.484 13.8281 12.1582V13.2422C13.8281 13.5653 13.5653 13.8281 13.2422 13.8281H1.75781C1.43475 13.8281 1.17188 13.5653 1.17188 13.2422V12.1582C1.17188 11.484 1.46038 10.8441 1.96335 10.4021C2.55535 9.88186 4.2802 8.67188 7.5 8.67188C9.89079 8.67188 11.8359 6.72672 11.8359 4.33594C11.8359 1.94515 9.89079 0 7.5 0C5.10921 0 3.16406 1.94515 3.16406 4.33594C3.16406 5.7336 3.82896 6.97872 4.85893 7.77214C2.97432 8.18642 1.80199 8.98384 1.18984 9.52183C0.433731 10.1862 0 11.147 0 12.1582V13.2422C0 14.2115 0.788498 15 1.75781 15H13.2422C14.2115 15 15 14.2115 15 13.2422V12.1582C15 11.147 14.5663 10.1862 13.8102 9.52183ZM4.33594 4.33594C4.33594 2.59129 5.75535 1.17188 7.5 1.17188C9.24465 1.17188 10.6641 2.59129 10.6641 4.33594C10.6641 6.08059 9.24465 7.5 7.5 7.5C5.75535 7.5 4.33594 6.08059 4.33594 4.33594Z"
                                                    fill="currentColor"/>
                                            </svg>

                                        </div>
                                        <div class="font-size-sm">Jack Wilson</div>
                                    </a>
                                </li>
                                <li class="nav-item px-3">
                                    <a href="blog-single.html" class="d-flex align-items-center text-gray-800">
                                        <div class="me-2 d-flex">
                                            <!-- Icon -->
                                            <svg width="15" height="15" viewBox="0 0 15 15"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M13.0664 1.17188H11.7188V0.46875C11.7188 0.209883 11.5089 0 11.25 0C10.9911 0 10.7812 0.209883 10.7812 0.46875V1.17188H4.21875V0.46875C4.21875 0.209883 4.0089 0 3.75 0C3.4911 0 3.28125 0.209883 3.28125 0.46875V1.17188H1.93359C0.867393 1.17188 0 2.03927 0 3.10547V13.0664C0 14.1326 0.867393 15 1.93359 15H13.0664C14.1326 15 15 14.1326 15 13.0664V3.10547C15 2.03927 14.1326 1.17188 13.0664 1.17188ZM1.93359 2.10938H3.28125V2.57812C3.28125 2.83699 3.4911 3.04688 3.75 3.04688C4.0089 3.04688 4.21875 2.83699 4.21875 2.57812V2.10938H10.7812V2.57812C10.7812 2.83699 10.9911 3.04688 11.25 3.04688C11.5089 3.04688 11.7188 2.83699 11.7188 2.57812V2.10938H13.0664C13.6157 2.10938 14.0625 2.55621 14.0625 3.10547V4.21875H0.9375V3.10547C0.9375 2.55621 1.38434 2.10938 1.93359 2.10938ZM13.0664 14.0625H1.93359C1.38434 14.0625 0.9375 13.6157 0.9375 13.0664V5.15625H14.0625V13.0664C14.0625 13.6157 13.6157 14.0625 13.0664 14.0625Z"
                                                    fill="currentColor"/>
                                            </svg>

                                        </div>
                                        <div class="font-size-sm">06 April, 2020</div>
                                    </a>
                                </li>
                            </ul>

                            <!-- Heading -->
                            <a href="blog-single.html" class="d-block"><h5 class="line-clamp-2 h-48 h-lg-52">10 Best
                                    Countries to Visit for Beginner Travelers</h5></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CALL ACTION
    ================================================== -->
    <section class="py-6 py-md-11 border-top border-bottom jarallax" data-jarallax data-speed=".8"
             style="background-image: url({{asset('assets')}}/img/illustrations/illustration-1.jpg)">
        <div class="container text-center py-xl-4" data-aos="fade-up">
            <h1 class="text-capitalize">Get personal learning recommendations</h1>
            <div class="font-size-lg mb-md-6 mb-4">Enhance your skills with best Online courses</div>
            <div class="mx-auto">
                <a href="course-list-v1.html" class="btn btn-primary btn-x-wide lift d-inline-block">GET STARTED NOW</a>
            </div>
        </div>
    </section>

@endsection
