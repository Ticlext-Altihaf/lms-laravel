

@extends('layouts.app')
@section('navigation')
<!-- NAVBAR
    ================================================== -->
    <header class="bg-white border-bottom py-3 header-fixed">
        <div class="px-5 px-lg-8 w-100">
            <div class="d-md-flex align-items-center">
                <!-- Brand -->
                <a class="navbar-brand me-0" href="{{url('/')}}">
                    <img src="{{asset('assets')}}/img/brand.svg" class="navbar-brand-img" alt="...">
                </a>

                <!-- Lesson Title -->
                <div class="ms-md-6 ms-wd-12 ms-xl-10 me-auto mb-5 mb-md-0">
                    <h3 class="mb-0 line-clamp-2 ms-wd-3">{{$data['course']['name']}} / {{$data['section']}} / {{$data['name']}}</h3>
                </div>
                <!-- Back to Course -->
                <a href="{{url('/courses') . '/'. $data['course']['id']}}" class="btn btn-sm btn-primary ms-md-6 px-6 mb-3 mb-md-0 flex-shrink-0">Back to Course</a>
            </div>
        </div>
    </header>
@endsection
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
        <li class="breadcrumb-item">
            <a class="text-gray-800" href='{{url('/courses') . '/'. $data['course']['id']}}'>
                {{$data['course']['name']}}
            </a>
        </li>
        <li class="breadcrumb-item">
            <a class="text-gray-800">
                {{$data['section']}}
            </a>
        </li>
        <li class="breadcrumb-item text-gray-800 active" aria-current="page">
            {{ $data['name'] }}
        </li>

@endcomponent

<!-- COURSE
    ================================================== -->
    <div class="mt-15 mt-md-11 pt-md-3">
        <div class="sidebar-collapse">
            <a class="text-white bg-primary rounded-right-lg p-4 w-60p h-50p collapsed" data-bs-toggle="collapse" href="#sidebarcollapseExample" role="button" aria-expanded="false" aria-controls="sidebarcollapseExample">
                <!-- Icon -->
                <svg width="25" height="17" viewBox="0 0 25 17" xmlns="http://www.w3.org/2000/svg">
                    <rect width="25" height="1" fill="currentColor"></rect>
                    <rect y="8" width="15" height="1" fill="currentColor"></rect>
                    <rect y="16" width="20" height="1" fill="currentColor"></rect>
                </svg>

                <svg width="16" height="17" viewBox="0 0 16 17" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.142135 2.00015L1.55635 0.585938L15.6985 14.7281L14.2843 16.1423L0.142135 2.00015Z" fill="currentColor"></path>
                    <path d="M14.1421 1.0001L15.5563 2.41431L1.41421 16.5564L0 15.1422L14.1421 1.0001Z" fill="currentColor"></path>
                </svg>

            </a>

            <div class="shadow collapse" id="sidebarcollapseExample" style="">
                <div class="p-5">
                    <!-- Search -->
                    <form class="mt-10 mt-sm-0">
                        <div class="input-group border rounded">
                            <div class="input-group-prepend">
                                <button class="btn btn-sm text-secondary" type="submit">
                                    <!-- Icon -->
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.80758 0C3.95121 0 0 3.95121 0 8.80758C0 13.6642 3.95121 17.6152 8.80758 17.6152C13.6642 17.6152 17.6152 13.6642 17.6152 8.80758C17.6152 3.95121 13.6642 0 8.80758 0ZM8.80758 15.9892C4.8477 15.9892 1.62602 12.7675 1.62602 8.80762C1.62602 4.84773 4.8477 1.62602 8.80758 1.62602C12.7675 1.62602 15.9891 4.8477 15.9891 8.80758C15.9891 12.7675 12.7675 15.9892 8.80758 15.9892Z" fill="currentColor"></path>
                                        <path d="M19.762 18.6121L15.1007 13.9509C14.7831 13.6332 14.2687 13.6332 13.9511 13.9509C13.6335 14.2682 13.6335 14.7831 13.9511 15.1005L18.6124 19.7617C18.7712 19.9205 18.9791 19.9999 19.1872 19.9999C19.395 19.9999 19.6032 19.9205 19.762 19.7617C20.0796 19.4444 20.0796 18.9295 19.762 18.6121Z" fill="currentColor"></path>
                                    </svg>

                                </button>
                            </div>
                            <input class="form-control form-control-sm border-0 ps-0" type="search" placeholder="Search item" aria-label="Search">
                        </div>
                    </form>
                </div>

                <div id="accordionCurriculum" class="sidebar-collapse-scroll">
        
                @foreach($data['course']['lessons_sectioned'] as $section => $lessons)
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
        </div>
        
        <div class="container">
            <div class="row mb-11">
                <div class="col-lg-11 col-wd-12 ms-lg-auto pt-11 pt-lg-8">
                    <h2 class="font-size-xl mb-6">
                        {{$data['name']}}
                    </h2>
                    
                     @if($data['content']['type'] == 'youtube_video')
                    <a href="https://www.youtube.com/watch?v={{$data['content']['video_id']}}" class="d-block sk-thumbnail rounded mb-8" data-fancybox="">
                        <div class="h-90p w-90p rounded-circle bg-white size-30-all d-inline-flex align-items-center justify-content-center position-absolute center z-index-1">
                            <!-- Icon -->
                            <svg width="14" height="16" viewBox="0 0 14 16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.8704 6.15374L3.42038 0.328572C2.73669 -0.0923355 1.9101 -0.109836 1.20919 0.281759C0.508282 0.673291 0.0898438 1.38645 0.0898438 2.18929V13.7866C0.0898438 15.0005 1.06797 15.9934 2.27016 16C2.27344 16 2.27672 16 2.27994 16C2.65563 16 3.04713 15.8822 3.41279 15.6591C3.70694 15.4796 3.79991 15.0957 3.62044 14.8016C3.44098 14.5074 3.05697 14.4144 2.76291 14.5939C2.59188 14.6982 2.42485 14.7522 2.27688 14.7522C1.82328 14.7497 1.33763 14.3611 1.33763 13.7866V2.18933C1.33763 1.84492 1.51713 1.53907 1.81775 1.3711C2.11841 1.20314 2.47294 1.21064 2.76585 1.39098L12.2159 7.21615C12.4999 7.39102 12.6625 7.68262 12.6618 8.01618C12.6611 8.34971 12.4974 8.64065 12.2118 8.81493L5.37935 12.9983C5.08548 13.1783 4.9931 13.5623 5.17304 13.8562C5.35295 14.1501 5.73704 14.2424 6.03092 14.0625L12.8625 9.87962C13.5166 9.48059 13.9081 8.78496 13.9096 8.01868C13.9112 7.25249 13.5226 6.55524 12.8704 6.15374Z" fill="currentColor"></path>
                            </svg>

                        </div>
                        <img class="rounded shadow-light-lg" src="https://img.youtube.com/vi/{{$data['content']['video_id']}}/0.jpg" alt="...">
                    </a>
                                    

                     @elseif($data['content']['type'] == 'text')
                     
                      <p>{{$data['content']['text']}}</p>
                     @endif
               
    
                    <div class="d-md-flex align-items-center justify-content-between mb-8">
                        <a href="#" class="btn btn-teal d-flex align-items-center text-white mb-5 mb-md-0 btn-block mw-md-280p justify-content-center">
                            <i class="fas fa-arrow-left font-size-xs"></i>
                            <span class="ms-3">Introduction</span>
                        </a>
                        <a href="#" class="btn btn-teal d-flex align-items-center text-white btn-block mw-md-280p justify-content-center mt-0">
                            <span class="me-3">Structure of the course</span>
                            <i class="fas fa-arrow-right font-size-xs"></i>
                        </a>
                    </div>

                    <h3 class="mb-6">Comment</h3>
                    <ul class="list-unstyled pt-2">
                        <li class="media d-flex">
                            <div class="avatar avatar-xxl me-3 me-md-6 flex-shrink-0">
                                <img src="{{asset('assets')}}/img/avatars/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                            </div>
                            <div class="media-body flex-grow-1">
                                <div class="d-md-flex align-items-center mb-5">
                                    <div class="me-auto mb-4 mb-md-0">
                                        <h5 class="mb-0">Oscar Cafeo</h5>
                                        <p class="font-size-sm font-italic">Beautiful courses</p>
                                    </div>
                                    <div class="star-rating">
                                        <div class="rating" style="width:100%;"></div>
                                    </div>
                                </div>
                                <p class="mb-6 line-height-md">This course was well organized and covered a lot more details than any other Figma courses. I really enjoy it. One suggestion is that it can be much better if we could complete the prototype together. Since we created 24 frames, I really want to test it on Figma mirror to see all the connections. Could you please let me take a look at the complete prototype?</p>
                            </div>
                        </li>
                        <li class="media d-flex">
                            <div class="avatar avatar-xxl me-3 me-md-6 flex-shrink-0">
                                <img src="{{asset('assets')}}/img/avatars/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                            </div>
                            <div class="media-body flex-grow-1">
                                <div class="d-md-flex align-items-center mb-5">
                                    <div class="me-auto mb-4 mb-md-0">
                                        <h5 class="mb-0">Alex Morgan</h5>
                                        <p class="font-size-sm font-italic">Beautiful courses</p>
                                    </div>
                                    <div class="star-rating">
                                        <div class="rating" style="width:100%;"></div>
                                    </div>
                                </div>
                                <p class="mb-6 line-height-md">This course was well organized and covered a lot more details than any other Figma courses. I really enjoy it. One suggestion is that it can be much better if we could complete the prototype together. Since we created 24 frames, I really want to test it on Figma mirror to see all the connections. Could you please let me take a look at the complete prototype?</p>
                            </div>
                        </li>
                    </ul>

                    <div class="border shadow rounded p-6 p-md-9">
                        <h3 class="mb-2">Add Reviews &amp; Rate</h3>
                        <div class="">What is it like to Course?</div>
                        <form>
                            <div class="clearfix">
                                <fieldset class="slect-rating mb-3">
                                    <input type="radio" id="star5" name="rating" value="5">
                                    <label class="full" for="star5" title="Awesome - 5 stars"></label>

                                    <input type="radio" id="star4half" name="rating" value="4 and a half">
                                    <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>

                                    <input type="radio" id="star4" name="rating" value="4">
                                    <label class="full" for="star4" title="Pretty good - 4 stars"></label>

                                    <input type="radio" id="star3half" name="rating" value="3 and a half">
                                    <label class="half" for="star3half" title="Meh - 3.5 stars"></label>

                                    <input type="radio" id="star3" name="rating" value="3">
                                    <label class="full" for="star3" title="Meh - 3 stars"></label>

                                    <input type="radio" id="star2half" name="rating" value="2 and a half">
                                    <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>

                                    <input type="radio" id="star2" name="rating" value="2">
                                    <label class="full" for="star2" title="Kinda bad - 2 stars"></label>

                                    <input type="radio" id="star1half" name="rating" value="1 and a half">
                                    <label class="half" for="star1half" title="Meh - 1.5 stars"></label>

                                    <input type="radio" id="star1" name="rating" value="1">
                                    <label class="full" for="star1" title="Sucks big time - 1 star"></label>

                                    <input type="radio" id="starhalf" name="rating" value="half">
                                    <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                                </fieldset>
                            </div>

                            <div class="form-group mb-6">
                                <label for="exampleInputTitle1">Review Title</label>
                                <input type="text" class="form-control placeholder-1" id="exampleInputTitle1" placeholder="Courses">
                            </div>

                            <div class="form-group mb-6">
                                <label for="exampleFormControlTextarea1">Review Content</label>
                                <textarea class="form-control placeholder-1" id="exampleFormControlTextarea1" rows="6" placeholder="Content"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary btn-block mw-md-300p">SUBMIT REVIEW</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection