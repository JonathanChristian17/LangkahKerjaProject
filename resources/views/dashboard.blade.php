@extends('layouts.app')

@section('content')
    <section class="home-banner-area" style="background-image: url({{ asset('images/learning.jpg') }})">
        <div class="container-lg">
            <div class="row">
                <div class="col">
                    <div class="home-banner-wrap">
                        <h2>Best place for learning</h2>
                        <p>Learn from any topic, choose from category</p>
                        <form class="" action=""
                              method="post">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search_string"
                                       placeholder="what do you want to learn?">
                                <div class="input-group-append">
                                    <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="home-fact-area">
        <div class="container-lg">
            <div class="row">
                <div class="col-md-4 d-flex">
                    <div class="home-fact-box mr-md-auto ml-auto mr-auto">
                        <i class="fas fa-bullseye float-left"></i>
                        <div class="text-box">
                            <h4>{{ $courses->count() }} online_courses</h4>
                            <p>Explore A Variety Of Fresh Topics</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 d-flex">
                    <div class="home-fact-box mr-md-auto ml-auto mr-auto">
                        <i class="fa fa-check float-left"></i>
                        <div class="text-box">
                            <h4>Expert Instruction</h4>
                            <p>Find The Right Course For You</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 d-flex">
                    <div class="home-fact-box mr-md-auto ml-auto mr-auto">
                        <i class="fa fa-clock float-left"></i>
                        <div class="text-box">
                            <h4>Lifetime Access</h4>
                            <p>Learn On Your Schedule</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="course-carousel-area">
        <div class="container-lg">
            <div class="row">
                <div class="col">
                    <h2 class="course-carousel-title">Top Courses</h2>
                    <div class="course-carousel">
                        @foreach (\App\Models\Course::inRandomOrder()->get() as $top_course)
                            <div class="course-box-wrap">
                                <a href="{{ route('course_detail', $top_course) }}"
                                   class="has-popover">
                                    <div class="course-box">
                                        <!-- <div class="course-badge position best-seller">Best seller</div> -->
                                        <div class="course-image">
                                            <img src="" alt="" class="img-fluid">
                                        </div>
                                        <div class="course-details">
                                            <h5 class="title">{{ $top_course->title }}</h5>
                                            <p class="instructors">{{ $top_course->short_description }}</p>
                                            <div class="rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span class="d-inline-block average-rating">5</span>
                                            </div>
                                            <p class="price text-right">
                                                ${{ $top_course->price }}
                                            </p>
                                        </div>
                                    </div>
                                </a>

                                <div class="webui-popover-content">
                                    <div class="course-popover-content">

                                        <div class="course-title">
                                            <a href="{{ route('course_detail', $top_course) }}">{{ $top_course->title }}</a>
                                        </div>
                                        <!-- <div class="course-category">
                                            <span class="course-badge best-seller">Best seller</span>
                                            in
                                            <a href="">PHP</a>
                                        </div> -->
                                        <div class="course-meta">
                                        <span class=""><i class="fas fa-play-circle"></i>
                                            {{ $top_course->lessons->count() }} Lessons
                                        </span>
                                            <span class=""><i class="far fa-clock"></i>
                                            2 Hours
                                        </span>
                                            <span class="">
                                            <i class="fas fa-closed-captioning"></i>English
                                        </span>
                                        </div>
                                        <div class="course-subtitle">{{ $top_course->short_description }}</div>
                                        <div class="what-will-learn">
                                            <ul>
                                                {{ $top_course->outcomes }}
                                            </ul>
                                        </div>
                                        <div class="popover-btns">
                                            @if(auth()->check() && \App\Models\Enroll::whereCourseId($top_course->id)->first() !== null)
                                                <div class="purchased">
                                                    <a href="#">Already purchased</a>
                                                </div>
                                            @elseif(Cart::get($top_course->id) !== null)
                                                <button type="button"
                                                        class="btn add-to-cart-btn addedToCart big-cart-button-1"
                                                        id="1">
                                                    Added To Cart
                                                </button>
                                            @else
                                                <button type="button"
                                                        class="btn add-to-cart-btn addedToCart big-cart-button-1"
                                                        id="1">
                                                    Add To Cart
                                                </button>
                                            @endif
                                            <button type="button"
                                                    class="wishlist-btn"
                                                    title="Add to wishlist"
                                                    id="1"><i class="fas fa-heart"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="course-carousel-area">
        <div class="container-lg">
            <div class="row">
                <div class="col">
                    <h2 class="course-carousel-title">Top 10 latest courses</h2>
                    <div class="course-carousel">
                        @foreach($courses as $course)
                            <div class="course-box-wrap">
                                <a href="{{ route('course_detail', $course) }}">
                                    <div class="course-box">
                                        <div class="course-image">
                                            <img src="" alt="" class="img-fluid">
                                        </div>
                                        <div class="course-details">
                                            <h5 class="title">{{ $course->title }}</h5>
                                            <p class="instructors">first and last name of the instructor</p>
                                            <div class="rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span class="d-inline-block average-rating">5</span>
                                            </div>
                                            <p class="price text-right">
                                                <small>
                                                    $200
                                                </small>
                                                $100
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
