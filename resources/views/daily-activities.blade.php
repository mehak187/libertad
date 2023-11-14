<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daily Activities</title>
    @include('template.csslinks')
</head>

<body class="background_img">
    @include('template.header')
    <section class="main-tem">
        @include('template.sidepanel')
        <!-- main content -->
        <div class="right-content back_img py-3">
            <div class="outer_sidebar px-md-4">
                <div class="sidebar_tabs area-height d-flex justify-content-between">
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
                                <span class="step_circle">02.</span>
                                <span class="step_label">
                                    <a href="{{ asset('tour1') }}" class="mb-0 fs-6">Tours</a>
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
                            <div class="sidebar_tab gap-3 hotel-1">
                                <span class="step_circle active">05.</span>
                                <span class="step_label">
                                    <a href="{{ asset('dailyactivites') }}" class="mb-0 fs-6 active">Daily Activites</a>
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
                    <div>
                        @includeif('template.social_desktop')
                    </div>
                </div>
                <div class="sidebar_content ms-md-4">
                    <!-- main page content start -->
                    <div class="sidebar_tab_content">
                        <div class="container-fluid">
                            <div class="mt-md-0 mt-3">
                                <p class="content_1_heading mb-0">
                                    <span class=" travel_text">DAILY</span>
                                    <span class="way_color">Activities</span>
                                </p>
                            </div>
                            @if (count($activities) > 0)
                                <div class="row pt-2">
                                    @foreach ($activities as $activity)
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-6 mt-3">
                                            <a href="{{ 'daily_activities_det/' . $activity['id'] }}"
                                                class="container1_2_3">
                                                <div class=""><img src="<?php echo asset('uploads/' . $activity['img']); ?>" alt="Avatar"
                                                        class="image1_2_3"></div>
                                                <div href="#" class="overlay text-decoration-none">
                                                    <div
                                                        class="text1 d-flex align-items-center justify-content-between">
                                                        <span>{{ $activity['name'] }}</span>
                                                        <i data-bs-toggle="modal" data-bs-target="#thankyouModal"
                                                            class="bi bi-heart fs-5" style="color: #4EBFC7;"></i>
                                                    </div>
                                                    <p class="text3 mt-3">{{ $activity['des'] }}</p>
                                                </div>
                                                </a>
                                        </div>
                                    @endforeach
                                </div>
                            @else
                                <div class="d-flex align-items-center mt-3 ">
                                    <i class="fas fa-exclamation-triangle text-danger fs-4 me-2"></i>
                                    <p class="text-danger fs-5 mb-0">No record to show</p>
                                </div>
                            @endif
                            @includeif('template.social_mbl')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade" id="thankyouModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="text-center">
                        <i class="bi bi-check-circle fs-1 text-success"></i>
                    </div>
                    <div>
                        <p class="text-center fs-5">Product added successfully.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('template.jslinks')
</body>

</html>
