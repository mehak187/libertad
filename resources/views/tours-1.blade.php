<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>tours-1</title>
    @include('template.csslinks')
</head>

<body class="background_img">
    @include('template.header')
    <section class="main-tem">
        @include('template.sidepanel')
        <!-- main content -->
        <div class="right-content back_img py-3">
            <div class="outer_sidebar px-md-4">
                <div class="sidebar_tabs d-flex flex-column area-height justify-content-between">
                    <div class="position-relative ms-3 ms-md-0">
                        <img src="./imgs/exclamate.png" alt="" class="exclamate-img d-md-none" id="tab-side">
                        <div class="position-sidetabs tab-sideab d-md-block">
                            <div class="sidebar_tab gap-3 home">
                                <span class="step_circle">01.</span>
                                <span class="step_label">
                                    <a href="{{ asset('home') }}" class="mb-0 fs-6">Home</a>
                                </span>
                            </div>
                            <div class="sidebar_tab gap-3 tour-1">
                                <span class="step_circle active">02.</span>
                                <span class="step_label">
                                    <a href="{{ asset('tour1') }}" class="mb-0 fs-6 active">Tours</a>
                                </span>
                            </div>
                            <div class="sidebar_tab gap-3 packages-1">
                                <span class="step_circle">03.</span>
                                <span class="step_label">
                                    <a href="{{ asset('pakages') }}" class="mb-0 fs-6">Packages</a>
                                </span>
                            </div>
                            <div class="sidebar_tab gap-3 hotel-1">
                                <span class="step_circle">04.</span>
                                <span class="step_label">
                                    <a href="{{ asset('hotels') }}" class="mb-0 fs-6">Accommodation</a>
                                </span>
                            </div>
                            <div class="sidebar_tab gap-3 daily-tours-1">
                                <span class="step_circle">05.</span>
                                <span class="step_label">
                                    <a href="{{ asset('dailyactivites') }}" class="mb-0 fs-6">Daily Activites</a>
                                </span>
                            </div>
                            <div class="sidebar_tab sidebar_line_hide gap-3 airport">
                                <span class="step_circle">06.</span>
                                <span class="step_label">
                                    <a href="{{ asset('airport') }}" class="mb-0 fs-6">Airport Shuttle</a>
                                </span>
                            </div>
                            <div class="sidebar_tab sidebar_line_hide gap-3 p-tool">
                                <span class="step_circle">07.</span>
                                <span class="step_label">
                                    <a href="{{ asset('productsandtools') }}" class="mb-0 fs-6">Product & Tools</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-auto">
                        @includeif('template.social_desktop')
                    </div>
                </div>
                <div class="sidebar_content ms-md-4">
                    <!-- main page content start -->
                    <div class="sidebar_tab_content first_slider ps-2">

                        <div class="mt-md-0 mt-3">
                            <p class="content_1_heading mb-0"><span class=" travel_text">TOURS</span></p>
                        </div>
                        <div class="container-fluid">
                            <div class="row my-2">
                                <div class="col-xl-7">
                                    <div class="row align-items-center px-sm-2">
                                        <div class="col-xl-10 col-md-9 col-sm-7">
                                            <input type="search"
                                                class="form-control shadow-none rounded-pill bg-transparent border text-white"
                                                placeholder="Where do you want to go?">
                                        </div>
                                        <div class="col-xl-2 col-md-3 col-sm-5 mt-sm-0 mt-3">
                                            <div class="button_border rounded-pill"><button
                                                    class="button_leniar_style px-4 rounded-pill py-1 d-flex align-items-center justify-content-between"><i
                                                        class="bi bi-search me-3"></i>Search </button></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if (@isset($cities1) && @isset($cities2))
                            <div class="row me-3">
                                <div class="col-11">
                                    <div class="autoplay mb-3 px-1">
                                        @foreach ($cities1 as $city1)
                                            <div class="slide mx-2">
                                                <div class="container1 container1_2">
                                                    <img src="<?php echo asset('uploads/' . $city1['tourimg']); ?>" alt="Avatar"
                                                        class="image1 image1_2">
                                                    <a href="{{ 'cities_detail/' . $city1['id'] }}" class="overlay">
                                                        <div
                                                            class="text1 d-flex align-items-center justify-content-between">
                                                            <span class="text-white">{{ $city1['Cityname'] }}</span>
                                                            <i class="bi bi-heart fs-5" style="color: #4EBFC7;"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="row me-3">
                                <div class="col-11">
                                    <div class="autoplay mb-3 px-1">
                                        @foreach ($cities2 as $city2)
                                            <div class="slide mx-2">
                                                <div class="container1 container1_2">
                                                    <img src="<?php echo asset('uploads/' . $city2['tourimg']); ?>" alt="Avatar"
                                                        class="image1 image1_2">
                                                    <a href="{{ 'cities_detail/' . $city2['id'] }}" class="overlay">
                                                        <div
                                                            class="text1 d-flex align-items-center justify-content-between">
                                                            <span class="text-white">{{ $city2['Cityname'] }}</span>
                                                            <i class="bi bi-heart fs-5" style="color: #4EBFC7;"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="row me-3">
                                <div class="col-11">
                                    <div class="autoplay mb-3 px-1">
                                        @foreach ($cities as $city)
                                            <div class="slide mx-2">
                                                <div class="container1 container1_2">
                                                    <img src="<?php echo asset('uploads/' . $city['tourimg']); ?>" alt="Avatar"
                                                        class="image1 image1_2">
                                                    <a href="{{ 'cities_detail/' . $city['id'] }}" class="overlay">
                                                        <div
                                                            class="text1 d-flex align-items-center justify-content-between">
                                                            <span class="text-white">{{ $city['Cityname'] }}</span>
                                                            <i class="bi bi-heart fs-5" style="color: #4EBFC7;"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                    @includeif('template.social_mbl')

                </div>
            </div>
        </div>
    </section>
    @include('template.jslinks')
</body>

</html>
