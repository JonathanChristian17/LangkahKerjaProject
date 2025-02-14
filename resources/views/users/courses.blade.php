@extends('layouts.app')

@section('content')

    <section class="page-header-area my-course-area">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="page-title">My Courses</h1>
                    <ul>
                        <li class="active"><a href="">All courses</a></li>
                        <li>
                            <a href="">Wish lists</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="my-courses-area">
        <div class="container">
            <div class="row align-items-baseline">
                <div class="col-lg-6">
                    <div class="my-course-filter-bar filter-box">
                        <span>Filter By</span>
                        <div class="btn-group">
                            <a class="btn btn-outline-secondary dropdown-toggle all-btn" href="#"
                               data-toggle="dropdown">
                                Categories
                            </a>

                            <div class="dropdown-menu">
                                @foreach (\App\Models\Category::all() as $category)
                                    <a class="dropdown-item" href="#" id="{{ $category->title }}"
                                       onclick="getCoursesByCategoryId(this.id)">{{ $category->title }}</a>
                                @endforeach
                            </div>
                        </div>
                        <div class="btn-group">
                            <a class="btn btn-outline-secondary dropdown-toggle" href="#" data-toggle="dropdown">
                                Instructors
                            </a>

                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#"></a>
                            </div>
                        </div>
                        <div class="btn-group">
                            <a href="" class="btn reset-btn" disabled>Reset</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="my-course-search-bar">
                        <form action="">
                            <div class="input-group">
                                <input type="text" class="form-control"
                                       placeholder="search my courses"
                                       onkeyup="getCoursesBySearchString(this.value)">
                                <div class="input-group-append">
                                    <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row no-gutters" id="my_courses_area">
                @foreach ($enrolls as $enroll)

                    <div class="col-lg-3">
                        <div class="course-box-wrap">
                            <div class="course-box">
                                <a href="">
                                    <div class="course-image">
                                        <img src="{{ asset('images/learning.jpg') }}" alt=""
                                             class="img-fluid">
                                        <span class="play-btn"></span>
                                    </div>
                                </a>
                                <div class="course-details">
                                    <a href="">
                                        <h5 class="title">{{ $enroll->course->title }}</h5>
                                    </a>
                                    <p class="instructors"></p>
                                    <div class="rating your-rating-box" onclick="event.preventDefault();"
                                         data-toggle="modal" data-id="{{ $enroll->course->id }}"
                                         data-target="#EditRatingModal">

                                        @php
                                            //dd($enroll->course->review());
                                            $my_rating = $enroll->course->review()['rating'];
                                        @endphp
                                        @for($i = 1; $i <= 5; $i++)
                                            @if ($i <= $my_rating)
                                                <i class="fas fa-star filled"></i>
                                            @else
                                                <i class="fas fa-star"></i>
                                            @endif
                                        @endfor
                                        <p class="your-rating-text" id="ratings"
                                           onclick="courseModal({{$enroll->course->id}})">
                                            <span class="your">Your</span>
                                            <span class="edit">Edit</span>
                                            Rating
                                        </p>
                                    </div>
                                </div>
                                <div class="row" style="padding: 5px;">
                                    <div class="col-md-6">
                                        <a href="{{ route('course_detail', $enroll->course->id) }}" class="btn">Course
                                            Details</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="{{ route('user.courses.lessons', [$enroll->course, $enroll->course->lessons->first()->id]) }}"
                                           class="btn">Start lesson</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection


@section('scripts')

    <script>

        function courseModal($course_id) {
            // alert($course_id);
            $('#course_id_for_rating').val($course_id);
        }

    </script>

@endsection