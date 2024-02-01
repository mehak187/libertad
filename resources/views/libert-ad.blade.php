<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Why Libertad?</title>
    @include('template.csslinks')
</head>

<body class="">
    @include('template.header')
    <section class="main-tem">
        @include('template.sidepanel')
        <!-- main content -->
        <div class="right-content fix_div back_img py-3">
            <div class="outer_sidebar px-md-4">
                <div class="sidebar_tabs d-flex flex-column area-height justify-content-between">
                    <div class="position-relative ms-3 ms-md-0">
                        <img src="./imgs/exclamate.png" alt="" class="exclamate-img d-md-none" id="tab-side">
                        <div class="position-sidetabs tab-sideab d-md-block">
                            <div class="sidebar_tab gap-3 home">
                                <span class="step_circle">01.</span>
                                <span class="step_label">
                                    <a href="home-libertad" class="mb-0 fs-6">Home</a>
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
                        @if(isset($libertad))
                        <div class="container-fluid ">
                            <h3 class="text-white">Why Libertad?</h3>
                            @if($galleryImages->count() > 0)
                            <div class="position-relative p-4  mt-3">
                                <div class="prev_arrows">
                                </div>
                                <div class=" ps-3  autoplay_2">
                                    @foreach($galleryImages as $image)
                                        <div class="mx-3">
                                            <img src="<?php echo asset('uploads/' . $image['image_path']); ?>" alt="" class="w-100">
                                        </div>
                                    @endforeach
                                </div>
                                <div class="next_arrows">
                                </div>
                            </div>
                            @endif
                            <div class="row mt-4 mb-4">
                                <div class="col-12">
                                    <div class="p-3 px-4 light-bground rounded-5 shadow ">
                                        <div class="">
                                            <h5 class="m-0">Why Libertad?</h5>
                                            <div class="row mt-3">
                                                <div class="col-12">
                                                    <p>{{ $libertad->des }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @else
                        <div class="mt-md-0 mt-3">
                            <p class="content_1_heading mb-0">
                                <span class=" travel_text">Why</span>
                                <span class="way_color">Libertad</span>
                            </p>
                        </div>
                        <div class="d-flex align-items-center mt-3 ">
                            <i class="fas fa-exclamation-triangle text-danger fs-4 me-2"></i><p class="text-danger fs-5 mb-0">No content to show</p>
                        </div>
                        @endif
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
    </section>
    @include('template.jslinks')
</body>

</html>
