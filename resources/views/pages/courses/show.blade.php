@extends('layouts.app')
@section('content')
    @component('components.breadcrumbs')
        <li class="breadcrumb-item">
            <a class="text-gray-800" href="{{url('/')}}">
                Home
            </a>
        </li>
        <li class="breadcrumb-item">
            <a class="text-gray-800" href="{{url('/courses')}}">
                Courses List
            </a>
        </li>
        <li class="breadcrumb-item text-gray-800 active" aria-current="page">
            {{ $data['name'] }}
        </li>

    @endcomponent
    <!-- COURSE
    ================================================== -->
    <div class="container">
        <div class="row mb-8">
            <div class="col-lg-8 mb-6 mb-lg-0 position-relative">
                <h1 class="me-7 me-xl-14">
                    {{$data['name']}}
                </h1>
                <a href="#"
                   class="badge badge-lg badge-rounded-circle badge-secondary font-size-base badge-float badge-float-inside top-0 text-white">
                    <i class="far fa-heart"></i>
                </a>

                <!-- COURSE META
                ================================================== -->
                <div class="d-md-flex align-items-center mb-5">
                    <div class="border rounded-circle d-inline-block mb-4 mb-md-0 me-md-6 me-lg-4 me-xl-6">
                        <div class="p-2">
                            <img src="{{$data['author']['image_url']}}" alt="Author" class="rounded-circle" width="68"
                                 height="68">
                        </div>
                    </div>

                    <div class="mb-4 mb-md-0 me-md-8 me-lg-4 me-xl-8">
                        <h6 class="mb-0">Created by</h6>
                        <a href="{{url('users/'.$data['author']['id'])}}" class="font-size-sm text-gray-800">{{$data['author']['name']}}</a>
                    </div>
                    @if(isset($data['category']))
                    <div class="mb-4 mb-md-0 me-md-8 me-lg-4 me-xl-8">
                        <h6 class="mb-0">Categories</h6>
                        <a href="{{url('courses?category='.$data['category']['id'])}}" class="font-size-sm text-gray-800">{{$data['category']['name']}}</a>
                    </div>
                    @endif

                    <div class="mb-4 mb-md-0 me-md-6 me-lg-4 me-xl-6">
                        <h6 class="mb-0">Review</h6>
                        <div class="d-lg-flex align-items-center">
                            <div class="star-rating mb-2 mb-lg-0">
                                <div class="rating" style="width:100%;"></div>
                            </div>

                            <div class="font-size-sm ms-lg-3">
                                <span>9.45 (9.8k+ reviews)</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- COURSE INFO TAB
                ================================================== -->
                <div id="Overview" class="mb-8">
             

                    <h3 class="">Course Description</h3>
                    <p class="mb-6 line-height-md">{{$data['description']}}</p>

                </div>

                <div id="Curriculum" class="mb-8">
                    

                    <div id="accordionCurriculum">
                        
                        @foreach($data['lessons_sectioned'] as $section => $lessons)
                                <?php
                                $section_id = str_replace(' ', '', $section);
                                ?>
                        <div class="border rounded shadow mb-6 overflow-hidden">
                            <div class="d-flex align-items-center" id="curriculumheadingOne">
                                <h5 class="mb-0 w-100">
                                    <button
                                        class="d-flex align-items-center p-5 min-height-80 text-dark fw-medium collapse-accordion-toggle line-height-one"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#Curriculumcollapse{{$section_id}}"
                                        aria-expanded="true" aria-controls="Curriculumcollapse{{$section_id}}">
                                        <span class="me-4 text-dark d-flex">
                                            <!-- Icon -->
                                            <svg width="15" height="2" viewBox="0 0 15 2" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <rect width="15" height="2" fill="currentColor"></rect>
                                            </svg>

                                            <svg width="15" height="16" viewBox="0 0 15 16" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0 7H15V9H0V7Z" fill="currentColor"></path>
                                                <path d="M6 16L6 8.74228e-08L8 0L8 16H6Z" fill="currentColor"></path>
                                            </svg>

                                        </span>

                                        {{$section}}
                                    </button>
                                </h5>
                            </div>

                            <div id="Curriculumcollapse{{$section_id}}" class="collapse show" aria-labelledby="curriculumheading{{$section_id}}"
                                 data-parent="#accordionCurriculum">
                                @foreach($lessons as $lesson)
                                <div class="border-top px-5 py-4 min-height-70 d-md-flex align-items-center bg-gray-100">
                                    <div class="d-flex align-items-center me-auto mb-4 mb-md-0">
                                        <div class="text-secondary d-flex">
                                            <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14.3164 4.20996C13.985 4.37028 13.8464 4.76904 14.0067 5.10026C14.4447 6.00505 14.6667 6.98031 14.6667 8C14.6667 11.6759 11.6759 14.6667 8 14.6667C4.32406 14.6667 1.33333 11.6759 1.33333 8C1.33333 4.32406 4.32406 1.33333 8 1.33333C9.52328 1.33333 10.9543 1.83073 12.1387 2.77165C12.4259 3.00098 12.846 2.95296 13.0754 2.66471C13.3047 2.37663 13.2567 1.95703 12.9683 1.72803C11.5661 0.613607 9.8016 0 8 0C3.58903 0 0 3.58903 0 8C0 12.411 3.58903 16 8 16C12.411 16 16 12.411 16 8C16 6.77767 15.7331 5.60628 15.2067 4.51969C15.0467 4.18766 14.6466 4.04932 14.3164 4.20996Z" fill="currentColor"></path>
                                                <path d="M7.99967 2.66663C7.63167 2.66663 7.33301 2.96529 7.33301 3.33329V7.99996C7.33301 8.36796 7.63167 8.66663 7.99967 8.66663H11.333C11.701 8.66663 11.9997 8.36796 11.9997 7.99996C11.9997 7.63196 11.701 7.33329 11.333 7.33329H8.66634V3.33329C8.66634 2.96529 8.36768 2.66663 7.99967 2.66663Z" fill="currentColor"></path>
                                            </svg>

                                        </div>

                                        <div class="ms-4">
                                            {{$lesson['name']}}
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-center overflow-auto overflow-md-visible flex-shrink-all">
                                        <div class="me-5 font-size-sm">{{$lesson['contents_count']}} lectures</div>
                                        <a href="{{url('lessons/'.$lesson['id'])}}" class="text-secondary">
                                            <!-- Icon -->
                                            <svg width="14" height="16" viewBox="0 0 14 16" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12.8704 6.15374L3.42038 0.328572C2.73669 -0.0923355 1.9101 -0.109836 1.20919 0.281759C0.508282 0.673291 0.0898438 1.38645 0.0898438 2.18929V13.7866C0.0898438 15.0005 1.06797 15.9934 2.27016 16C2.27344 16 2.27672 16 2.27994 16C2.65563 16 3.04713 15.8822 3.41279 15.6591C3.70694 15.4796 3.79991 15.0957 3.62044 14.8016C3.44098 14.5074 3.05697 14.4144 2.76291 14.5939C2.59188 14.6982 2.42485 14.7522 2.27688 14.7522C1.82328 14.7497 1.33763 14.3611 1.33763 13.7866V2.18933C1.33763 1.84492 1.51713 1.53907 1.81775 1.3711C2.11841 1.20314 2.47294 1.21064 2.76585 1.39098L12.2159 7.21615C12.4999 7.39102 12.6625 7.68262 12.6618 8.01618C12.6611 8.34971 12.4974 8.64065 12.2118 8.81493L5.37935 12.9983C5.08548 13.1783 4.9931 13.5623 5.17304 13.8562C5.35295 14.1501 5.73704 14.2424 6.03092 14.0625L12.8625 9.87962C13.5166 9.48059 13.9081 8.78496 13.9096 8.01868C13.9112 7.25249 13.5226 6.55524 12.8704 6.15374Z" fill="currentColor"></path>
                                            </svg>

                                        </a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @endforeach
                        
                    </div>
                </div>
                <div id="Instructor" class="mb-8">
             

                    <h3 class="mb-6">About the instructor</h3>

                    <div class="d-flex align-items-center mb-6">
                        <div class="d-inline-block rounded-circle border me-6 p-2">
                            <div class="avatar avatar-size-120">
                                <img src="{{asset('assets')}}/img/avatars/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                            </div>
                        </div>
                        <div class="media-body">
                            <h4 class="mb-0">Lauren Handerson</h4>
                            <span>iOS Developer &amp; UI Designer</span>
                        </div>
                    </div>

                    <div class="row mx-xl-n5 mb-6">
                        <div class="col-12 col-md-auto mb-3 mb-md-0 px-xl-5">
                            <div class="d-flex align-items-center">
                                <div class="me-3 d-flex text-secondary icon-uxs">
                                    <!-- Icon -->
                                    <svg width="16px" height="16px" viewBox="0 -10 511.98685 511"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill="currentColor"
                                              d="m114.59375 491.140625c-5.609375 0-11.179688-1.75-15.933594-5.1875-8.855468-6.417969-12.992187-17.449219-10.582031-28.09375l32.9375-145.089844-111.703125-97.960937c-8.210938-7.167969-11.347656-18.519532-7.976562-28.90625 3.371093-10.367188 12.542968-17.707032 23.402343-18.710938l147.796875-13.417968 58.433594-136.746094c4.308594-10.046875 14.121094-16.535156 25.023438-16.535156 10.902343 0 20.714843 6.488281 25.023437 16.511718l58.433594 136.769532 147.773437 13.417968c10.882813.980469 20.054688 8.34375 23.425782 18.710938 3.371093 10.367187.253906 21.738281-7.957032 28.90625l-111.703125 97.941406 32.9375 145.085938c2.414063 10.667968-1.726562 21.699218-10.578125 28.097656-8.832031 6.398437-20.609375 6.890625-29.910156 1.300781l-127.445312-76.160156-127.445313 76.203125c-4.308594 2.558594-9.109375 3.863281-13.953125 3.863281zm141.398438-112.875c4.84375 0 9.640624 1.300781 13.953124 3.859375l120.277344 71.9375-31.085937-136.941406c-2.21875-9.746094 1.089843-19.921875 8.621093-26.515625l105.472657-92.5-139.542969-12.671875c-10.046875-.917969-18.6875-7.234375-22.613281-16.492188l-55.082031-129.046875-55.148438 129.066407c-3.882812 9.195312-12.523438 15.511718-22.546875 16.429687l-139.5625 12.671875 105.46875 92.5c7.554687 6.613281 10.859375 16.769531 8.621094 26.539062l-31.0625 136.9375 120.277343-71.914062c4.308594-2.558594 9.109376-3.859375 13.953126-3.859375zm-84.585938-221.847656s0 .023437-.023438.042969zm169.128906-.0625.023438.042969c0-.023438 0-.023438-.023438-.042969zm0 0"></path>
                                    </svg>

                                </div>
                                4.87 Instructor rating
                            </div>
                        </div>



                        <div class="col-12 col-md-auto mb-3 mb-md-0 px-xl-5">
                            <div class="d-flex align-items-center">
                                <div class="me-3 d-flex text-secondary icon-uxs">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M17.1947 7.06802L14.6315 7.9985C14.2476 7.31186 13.712 6.71921 13.0544 6.25992C12.8525 6.11877 12.6421 5.99365 12.4252 5.88303C13.0586 5.25955 13.452 4.39255 13.452 3.43521C13.452 1.54098 11.9124 -1.90735e-06 10.0197 -1.90735e-06C8.12714 -1.90735e-06 6.58738 1.54098 6.58738 3.43521C6.58738 4.39255 6.98075 5.25955 7.61414 5.88303C7.39731 5.99365 7.1869 6.11877 6.98502 6.25992C6.32752 6.71921 5.79178 7.31186 5.40787 7.9985L2.8447 7.06802C2.33612 6.88339 1.79688 7.26044 1.79688 7.80243V16.5178C1.79688 16.8465 2.00256 17.14 2.31155 17.2522L9.75312 19.9536C9.93073 20.018 10.1227 20.0128 10.2863 19.9536L17.7278 17.2522C18.0368 17.14 18.2425 16.8465 18.2425 16.5178V7.80243C18.2425 7.26135 17.704 6.88309 17.1947 7.06802ZM10.0197 1.5625C11.0507 1.5625 11.8895 2.40265 11.8895 3.43521C11.8895 4.46777 11.0507 5.30792 10.0197 5.30792C8.98866 5.30792 8.14988 4.46777 8.14988 3.43521C8.14988 2.40265 8.98866 1.5625 10.0197 1.5625ZM9.23844 18.1044L3.35938 15.9703V8.91724L9.23844 11.0513V18.1044ZM10.0197 9.67255L6.90644 8.54248C7.58164 7.51892 8.75184 6.87042 10.0197 6.87042C11.2875 6.87042 12.4577 7.51892 13.1329 8.54248L10.0197 9.67255ZM16.68 15.9703L10.8009 18.1044V11.0513L16.68 8.91724V15.9703Z"
                                            fill="currentColor"></path>
                                    </svg>

                                </div>
                                23,912 students
                            </div>
                        </div>

                        <div class="col-12 col-md-auto mb-3 mb-md-0 px-xl-5">
                            <div class="d-flex align-items-center">
                                <div class="me-3 d-flex text-secondary icon-uxs">
                                    <!-- Icon -->
                                    <svg width="14" height="16" viewBox="0 0 14 16" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.8704 6.15374L3.42038 0.328572C2.73669 -0.0923355 1.9101 -0.109836 1.20919 0.281759C0.508282 0.673291 0.0898438 1.38645 0.0898438 2.18929V13.7866C0.0898438 15.0005 1.06797 15.9934 2.27016 16C2.27344 16 2.27672 16 2.27994 16C2.65563 16 3.04713 15.8822 3.41279 15.6591C3.70694 15.4796 3.79991 15.0957 3.62044 14.8016C3.44098 14.5074 3.05697 14.4144 2.76291 14.5939C2.59188 14.6982 2.42485 14.7522 2.27688 14.7522C1.82328 14.7497 1.33763 14.3611 1.33763 13.7866V2.18933C1.33763 1.84492 1.51713 1.53907 1.81775 1.3711C2.11841 1.20314 2.47294 1.21064 2.76585 1.39098L12.2159 7.21615C12.4999 7.39102 12.6625 7.68262 12.6618 8.01618C12.6611 8.34971 12.4974 8.64065 12.2118 8.81493L5.37935 12.9983C5.08548 13.1783 4.9931 13.5623 5.17304 13.8562C5.35295 14.1501 5.73704 14.2424 6.03092 14.0625L12.8625 9.87962C13.5166 9.48059 13.9081 8.78496 13.9096 8.01868C13.9112 7.25249 13.5226 6.55524 12.8704 6.15374Z"
                                            fill="currentColor"></path>
                                    </svg>

                                </div>
                                29 courses
                            </div>
                        </div>
                    </div>

                    <p class="mb-6 line-height-md">I am a UI/UX designer and an iOS developer with having almost six
                        years of experience in application development and also ten years of graphic design and User
                        Interface design.</p>
                    <p class="mb-6 line-height-md">My passion is helping people to learn new skills in a short-term
                        course and achieve their goals. I've been designing for more than ten years and developing iOS
                        apps for four years. It's my honor if I could help you learn to program in a simple word. I
                        currently am teaching iOS 13, Swift 5, ARKit 3, Sketch 5, Illustrator, Photoshop, Cinema 4D,
                        HTML, CSS, JavaScript, etc.</p>
                </div>

       
            </div>
            <div class="col-lg-4">
                <!-- SIDEBAR FILTER
                ================================================== -->
                <div class="d-block rounded border p-2 shadow mb-6">
                    <a class="d-block sk-thumbnail rounded mb-1">
                     
                        <img class="rounded shadow-light-lg" src="{{$data['image_url']}}" alt="...">
                    </a>

                    <div class="pt-5 pb-4 px-5 px-lg-3 px-xl-5">
                     
                        <button class="btn btn-orange btn-block mb-6" type="button" name="button">ENROLL</button>

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex align-items-center py-3">
                                <div class="text-secondary d-flex icon-uxs">
                                    <!-- Icon -->
                                    <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.7262 1.94825C13.4059 0.396725 10.401 0.315126 8.00002 1.73839C5.59897 0.315126 2.59406 0.396725 0.273859 1.94825C0.102729 2.06241 -3.54271e-05 2.25456 6.30651e-07 2.46027V14.6553C-0.000323889 14.8826 0.124616 15.0914 0.324917 15.1987C0.525109 15.3058 0.768066 15.294 0.9569 15.168C2.98471 13.8111 5.63063 13.8111 7.65844 15.168C7.66645 15.1735 7.67568 15.1747 7.68368 15.1796C7.69169 15.1846 7.7003 15.1932 7.70953 15.1987C7.73102 15.2079 7.75302 15.2159 7.77538 15.2227C7.79773 15.2329 7.82077 15.2415 7.84428 15.2486C7.87828 15.2564 7.91286 15.2616 7.94766 15.264C7.96551 15.264 7.98213 15.2714 7.99998 15.2714C8.00492 15.2714 8.00982 15.2714 8.01538 15.2714C8.03604 15.2699 8.05655 15.2672 8.07693 15.2634C8.10808 15.2602 8.13895 15.2547 8.16923 15.2467C8.19018 15.2399 8.21074 15.2319 8.23078 15.2227C8.24986 15.2147 8.27016 15.2104 8.28862 15.2006C8.29724 15.1956 8.30402 15.1883 8.31264 15.1827C8.32125 15.1772 8.3311 15.1753 8.33971 15.1698C10.3675 13.8129 13.0134 13.8129 15.0413 15.1698C15.3233 15.3595 15.7057 15.2846 15.8953 15.0026C15.9643 14.9 16.0008 14.779 16 14.6554V2.46027C16 2.25456 15.8973 2.06241 15.7262 1.94825ZM7.38462 13.6036C5.43516 12.6896 3.18022 12.6896 1.23076 13.6036V2.79993C3.12732 1.67313 5.48806 1.67313 7.38462 2.79993V13.6036ZM14.7692 13.6036C12.8198 12.6896 10.5648 12.6896 8.61538 13.6036V2.79993C10.5119 1.67313 12.8727 1.67313 14.7692 2.79993V13.6036Z" fill="currentColor"></path>
                                    </svg>

                                </div>
                                <h6 class="mb-0 ms-3 me-auto">Lectures</h6>
                                <span>{{$data['lessons_count']}}</span>
                            </li>


                            <li class="list-group-item d-flex align-items-center py-3">
                                <div class="text-secondary d-flex icon-uxs">
                                    <!-- Icon -->
                                    <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.7188 9.8575V3.1875C15.7188 2.41209 15.0879 1.78125 14.3125 1.78125H12.4688V1.25C12.4688 0.991125 12.2589 0.78125 12 0.78125C11.7411 0.78125 11.5312 0.991125 11.5312 1.25V1.78125H8.46875V1.25C8.46875 0.991125 8.25887 0.78125 8 0.78125C7.74113 0.78125 7.53125 0.991125 7.53125 1.25V1.78125H4.46875V1.25C4.46875 0.991125 4.25887 0.78125 4 0.78125C3.74113 0.78125 3.53125 0.991125 3.53125 1.25V1.78125H1.40625C0.630844 1.78125 0 2.41209 0 3.1875V11.8125C0 12.5879 0.630844 13.2188 1.40625 13.2188H8.68531C9.35484 14.4112 10.6317 15.2188 12.0938 15.2188C14.2477 15.2188 16 13.4664 16 11.3125C16 10.7985 15.9 10.3074 15.7188 9.8575ZM12.5625 8.38087C13.8248 8.58197 14.8243 9.58144 15.0254 10.8438H12.5625V8.38087ZM1.40625 12.2812C1.14778 12.2812 0.9375 12.071 0.9375 11.8125V3.1875C0.9375 2.92903 1.14778 2.71875 1.40625 2.71875H3.53125V3.28125C3.53125 3.54012 3.74113 3.75 4 3.75C4.25887 3.75 4.46875 3.54012 4.46875 3.28125V2.71875H7.53125V3.28125C7.53125 3.54012 7.74113 3.75 8 3.75C8.25887 3.75 8.46875 3.54012 8.46875 3.28125V2.71875H11.5312V3.28125C11.5312 3.54012 11.7411 3.75 12 3.75C12.2589 3.75 12.4688 3.54012 12.4688 3.28125V2.71875H14.3125C14.571 2.71875 14.7812 2.92903 14.7812 3.1875V8.48034C14.0805 7.81506 13.134 7.40625 12.0938 7.40625C9.93984 7.40625 8.1875 9.15859 8.1875 11.3125C8.1875 11.6468 8.22978 11.9713 8.30916 12.2812H1.40625ZM12.0938 14.2812C10.4568 14.2812 9.125 12.9495 9.125 11.3125C9.125 9.83503 10.21 8.60631 11.625 8.38087V11.3125C11.625 11.5714 11.8349 11.7812 12.0938 11.7812H15.0254C14.7999 13.1962 13.5712 14.2812 12.0938 14.2812Z" fill="currentColor"></path>
                                        <path d="M3.25 5.78125H2.5C2.24112 5.78125 2.03125 5.99112 2.03125 6.25C2.03125 6.50888 2.24112 6.71875 2.5 6.71875H3.25C3.50888 6.71875 3.71875 6.50888 3.71875 6.25C3.71875 5.99112 3.50888 5.78125 3.25 5.78125Z" fill="currentColor"></path>
                                        <path d="M6 5.78125H5.25C4.99112 5.78125 4.78125 5.99112 4.78125 6.25C4.78125 6.50888 4.99112 6.71875 5.25 6.71875H6C6.25888 6.71875 6.46875 6.50888 6.46875 6.25C6.46875 5.99112 6.25888 5.78125 6 5.78125Z" fill="currentColor"></path>
                                        <path d="M6 7.78125H5.25C4.99112 7.78125 4.78125 7.99112 4.78125 8.25C4.78125 8.50888 4.99112 8.71875 5.25 8.71875H6C6.25888 8.71875 6.46875 8.50888 6.46875 8.25C6.46875 7.99112 6.25888 7.78125 6 7.78125Z" fill="currentColor"></path>
                                        <path d="M3.25 7.78125H2.5C2.24112 7.78125 2.03125 7.99112 2.03125 8.25C2.03125 8.50888 2.24112 8.71875 2.5 8.71875H3.25C3.50888 8.71875 3.71875 8.50888 3.71875 8.25C3.71875 7.99112 3.50888 7.78125 3.25 7.78125Z" fill="currentColor"></path>
                                        <path d="M3.25 9.78125H2.5C2.24112 9.78125 2.03125 9.99112 2.03125 10.25C2.03125 10.5089 2.24112 10.7188 2.5 10.7188H3.25C3.50888 10.7188 3.71875 10.5089 3.71875 10.25C3.71875 9.99112 3.50888 9.78125 3.25 9.78125Z" fill="currentColor"></path>
                                        <path d="M6 9.78125H5.25C4.99112 9.78125 4.78125 9.99112 4.78125 10.25C4.78125 10.5089 4.99112 10.7188 5.25 10.7188H6C6.25888 10.7188 6.46875 10.5089 6.46875 10.25C6.46875 9.99112 6.25888 9.78125 6 9.78125Z" fill="currentColor"></path>
                                    </svg>

                                </div>
                                <h6 class="mb-0 ms-3 me-auto">Created</h6>
                                <span>{{date('d-m-Y', strtotime($data['created_at']))}}</span>
                            </li>

                            <li class="list-group-item d-flex align-items-center py-4">
                                <a href="./course-single-v5.html" class="mx-auto text-teal fw-medium d-flex align-items-center mt-2">
                                    <!-- Icon -->
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.0283 6.25C14.3059 6.25 12.9033 4.84833 12.9033 3.125C12.9033 1.40167 14.3059 0 16.0283 0C17.7509 0 19.1533 1.40167 19.1533 3.125C19.1533 4.84833 17.7509 6.25 16.0283 6.25ZM16.0283 1.25C14.995 1.25 14.1533 2.09076 14.1533 3.125C14.1533 4.15924 14.995 5 16.0283 5C17.0616 5 17.9033 4.15924 17.9033 3.125C17.9033 2.09076 17.0616 1.25 16.0283 1.25Z" fill="currentColor"></path>
                                        <path d="M16.0283 20C14.3059 20 12.9033 18.5983 12.9033 16.875C12.9033 15.1517 14.3059 13.75 16.0283 13.75C17.7509 13.75 19.1533 15.1517 19.1533 16.875C19.1533 18.5983 17.7509 20 16.0283 20ZM16.0283 15C14.995 15 14.1533 15.8408 14.1533 16.875C14.1533 17.9092 14.995 18.75 16.0283 18.75C17.0616 18.75 17.9033 17.9092 17.9033 16.875C17.9033 15.8408 17.0616 15 16.0283 15Z" fill="currentColor"></path>
                                        <path d="M3.94531 13.125C2.22275 13.125 0.820312 11.7233 0.820312 10C0.820312 8.27667 2.22275 6.875 3.94531 6.875C5.66788 6.875 7.07031 8.27667 7.07031 10C7.07031 11.7233 5.66788 13.125 3.94531 13.125ZM3.94531 8.125C2.91199 8.125 2.07031 8.96576 2.07031 10C2.07031 11.0342 2.91199 11.875 3.94531 11.875C4.97864 11.875 5.82031 11.0342 5.82031 10C5.82031 8.96576 4.97864 8.125 3.94531 8.125Z" fill="currentColor"></path>
                                        <path d="M6.12066 9.39154C5.90307 9.39154 5.69143 9.27817 5.57729 9.0766C5.40639 8.77661 5.51061 8.39484 5.8106 8.22409L13.5431 3.81568C13.8422 3.64325 14.2247 3.74823 14.3947 4.04914C14.5656 4.34912 14.4614 4.73075 14.1614 4.90164L6.42888 9.30991C6.33138 9.36484 6.22564 9.39154 6.12066 9.39154Z" fill="currentColor"></path>
                                        <path d="M13.8524 16.2665C13.7475 16.2665 13.6416 16.2398 13.5441 16.1841L5.81151 11.7757C5.51152 11.6049 5.40745 11.2231 5.5782 10.9232C5.74818 10.6224 6.12996 10.5182 6.42994 10.6899L14.1623 15.0981C14.4623 15.269 14.5665 15.6506 14.3958 15.9506C14.2807 16.1531 14.0691 16.2665 13.8524 16.2665Z" fill="currentColor"></path>
                                    </svg>

                                    <span class="ms-3">Share this course</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="d-block">
                    <div class="border rounded px-6 px-lg-5 px-xl-6 pt-5 shadow">
                        <h3 class="mb-5">Latest Courses</h3>
                        <ul class="list-unstyled mb-0">
                            <li class="media mb-6 d-flex">
                                <a href="./course-single-v5.html" class="w-100p d-block me-5">
                                    <img src="http://localhost/lms-laravel/public/assets/img/photos/photo-1.jpg" alt="..." class="avatar-img rounded-lg h-90p w-100p">
                                </a>
                                <div class="media-body flex-grow-1">
                                    <a href="./course-single-v5.html" class="d-block">
                                        <h6 class="line-clamp-2 mb-3">Web Developtment and Design</h6>
                                    </a>
                                    <del class="font-size-sm me-2">$959</del>
                                    <ins class="h6 mb-0 ">$415.99</ins>
                                </div>
                            </li>

                            <li class="media mb-6 d-flex">
                                <a href="./course-single-v5.html" class="w-100p d-block me-5">
                                    <img src="http://localhost/lms-laravel/public/assets/img/photos/photo-2.jpg" alt="..." class="avatar-img rounded-lg h-90p w-100p">
                                </a>
                                <div class="media-body flex-grow-1">
                                    <a href="./course-single-v5.html" class="d-block">
                                        <h6 class="line-clamp-2 mb-3">The Complete Cyber Security Course : Hackers </h6>
                                    </a>
                                    <del class="font-size-sm me-2">$959</del>
                                    <ins class="h6 mb-0 ">$415.99</ins>
                                </div>
                            </li>

                            <li class="media mb-6 d-flex">
                                <a href="./course-single-v5.html" class="w-100p d-block me-5">
                                    <img src="http://localhost/lms-laravel/public/assets/img/photos/photo-14.jpg" alt="..." class="avatar-img rounded-lg h-90p w-100p">
                                </a>
                                <div class="media-body flex-grow-1">
                                    <a href="./course-single-v5.html" class="d-block">
                                        <h6 class="line-clamp-2 mb-3">Fashion Photography From Professional</h6>
                                    </a>
                                    <del class="font-size-sm me-2">$959</del>
                                    <ins class="h6 mb-0 ">$415.99</ins>
                                </div>
                            </li>

                            <li class="media mb-6 d-flex">
                                <a href="./course-single-v5.html" class="w-100p d-block me-5">
                                    <img src="http://localhost/lms-laravel/public/assets/img/photos/photo-16.jpg" alt="..." class="avatar-img rounded-lg h-90p w-100p">
                                </a>
                                <div class="media-body flex-grow-1">
                                    <a href="./course-single-v5.html" class="d-block">
                                        <h6 class="line-clamp-2 mb-3">The Complete Financial Analyst Course 2020</h6>
                                    </a>
                                    <del class="font-size-sm me-2">$959</del>
                                    <ins class="h6 mb-0 ">$415.99</ins>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

   
    </div>
@endsection


