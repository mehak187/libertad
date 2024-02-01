<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Our Packages</title>
    @include('template.csslinks')
</head>

<body class="background_img">
    @include('template.header')
    <section class="main-tem">
        @include('template.sidepanel')
        <!-- main content -->
        <div class="right-content ftr back_img py-3">
            <div class="outer_sidebar px-md-4">
                <div class="sidebar_tabs d-flex flex-column area-height justify-content-between">
                    <div class="position-relative ms-3 ms-md-0">
                        <img src="./imgs/exclamate.png" alt="" class="exclamate-img d-md-none" id="tab-side">
                        <div class="position-sidetabs tab-sideab d-md-block">
                            <div class="sidebar_tab gap-3 home">
                                <span class="step_circle ">01.</span>
                                <span class="step_label">
                                    <a href="home-libertad" class="mb-0 fs-6 ">Home</a>
                                </span>
                            </div>
                            <div class="sidebar_tab gap-3 tour-1">
                                <span class="step_circle">02.</span>
                                <span class="step_label">
                                    <a href="{{ asset('tour1') }}" class="mb-0 fs-6">Tours</a>
                                </span>
                            </div>
                            <div class="sidebar_tab gap-3 packages-1">
                                <span class="step_circle active">03.</span>
                                <span class="step_label">
                                    <a href="{{ asset('pakages') }}" class="mb-0 fs-6 active">Packages</a>
                                </span>
                            </div>
                            <div class="sidebar_tab gap-3 hotel-1">
                                <span class="step_circle">04.</span>
                                <span class="step_label">
                                    <a href="{{ asset('hotels') }}" class="mb-0 fs-6 ">Accommodation</a>
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
                        @if (session('success'))
                    <script>
                        swal("Good job!", "{{session('success')}}", "success");
                    </script>
                    @endif
                        <div class="d-md-block d-none">
                            @if(auth()->user())
                            <u style="color: #E4C14F;">Leave your Review</u>
                            <form action="/savereview" method="POST">
                                    @csrf
                                <div class="d-flex gap-2">
                                    <textarea class="rounded-3 bg_review border-0 px-3" name="review" id="" cols="25" rows="3"
                                        placeholder="Please leave your Review" maxlength="400"></textarea>
                                    <button class="p-0 mt-auto btn_submit_rivew">
                                        <img src="./imgs/review_button.png" class="img-fluid" width="40px" height="40px"
                                            alt="">
                                    </button>
                                    @error('review')
                                    <span class="error text-danger">
                                        {{$message}}
                                    </span>
                                    @enderror
                                </div>
                            </form>
                            @endif
                        </div>
                        @includeif('template.social_desktop')
                    </div>
                </div>
                <div class="sidebar_content ms-md-4">
                    <!-- main page content start -->
                    <div class="sidebar_tab_content">
                        <div class="ps-md-0 ps-3 mt-md-0 mt-3">
                            <p class="content_1_heading mb-0"><span class=" travel_text">OUR</span> <span
                                    class="way_color">PACKAGES</span></p>
                        </div>

                        <div class="autoplay_1 second_slider my-3 pb-3">
                          @foreach ($packages as $package)
                            <a href="{{"package_details/" .$package['id'] }}" class="text-decoration-none text-dark">
                                <div class="card mx-3 first_card_slider border-0">
                                    <img src="<?php echo asset('uploads/' . $package['img'])?>" alt="" class="image1_2 rounded_top">
                                    <div class="card-body card_bottom" style="background-color: #E2BE4E;">
                                        <div class="d-flex justify-content-between">
                                            <p class="mb-0 fs-12">{{$package['name']}}</p>
                                            <p class="mb-0 fs-12">{{$package['price']}} USD</p>
                                        </div>
                                        <p class="mb-0 fs-12">No. of Nights : {{$package['nights']}}</p>
                                    </div>
                                </div>
                            </a>
                            @endforeach
                        </div>
                        @includeif('template.social_mbl')
                        <div class="d-md-none d-block px-3 mt-4">
                            @if(auth()->user()) 
                            <u style="color: #E4C14F;">Leave your Review</u>
                            <div class="d-flex bg_review mt-2 p-3 rounded-3 width-text">
                                <form action="/savereview" method="POST">
                                    @csrf
                                    <textarea class="bg-transparent border-0 w-100" name="review" id="" rows="3"
                                        placeholder="Please leave your Review" style="resize: none;"></textarea>
                                    <button type="submit" class="p-0 mt-auto btn_submit_rivew">
                                        <img src="./imgs/review_button.png" class="img-fluid" width="40px"
                                            height="40px" alt="">
                                    </button>
                                </form>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
    </section>
    @include('template.jslinks')
</body>

</html>
