<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product and Tools</title>
    @include('template.csslinks')
</head>

<body class="">
    @include('template.header')
    <section class="main-tem">
        @include('template.sidepanel')
        <!-- main content -->
        <div class="right-content fix_div back_img pt-3 pb-5">
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
                            <div class="sidebar_tab gap-3 daily-tours-1">
                                <span class="step_circle">05.</span>
                                <span class="step_label">
                                    <a href="{{ asset('dailyactivites') }}" class="mb-0 fs-6">Daily Activites</a>
                                </span>
                            </div>
                            <div class="sidebar_tab sidebar_line_hide gap-3 airport">
                                <span class="step_circle ">06.</span>
                                <span class="step_label">
                                    <a href="{{ asset('airport') }}" class="mb-0 fs-6 ">Airport Shuttle</a>
                                </span>
                            </div>
                            <div class="sidebar_tab sidebar_line_hide gap-3 p-tool">
                                <span class="step_circle active">07.</span>
                                <span class="step_label">
                                    <a href="{{ asset('productsandtools') }}" class="mb-0 fs-6 active">Product &
                                        Tools</a>
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
                    <div class="sidebar_tab_content ">
                        <div class="container-fluid">
                            <div>
                                <h2 class="sky-clr fw-bold mt-2 ps-3"><span class="golden-clr">Products and </span>Tools
                                </h2> 
                            @if (count($products) > 0)
                                @foreach ($catagories as $catagory)
                                    <div class="px-3">
                                        <h5 class="text-white">{{ $catagory->catg }}</h5>
                                        <div class="position-relative my-3">
                                            <div class="row autoplay_2">
                                                @foreach ($products as $product)
                                                    @if ($product->p_catg == $catagory->id)
                                                        <div class="col mx-1 padimg ">
                                                            <img class="img-fluid w-100" src="<?php echo asset('uploads/' . $product['img']); ?>"
                                                                alt="">
                                                            <div
                                                                class="dis1 d-flex p-3 sky-bg justify-content-between align-items-center">
                                                                <div>
                                                                    <p class="mb-0 fs-12 fw-bold">{{ $product->name }}
                                                                    </p>
                                                                    <p class="mb-0 fs-12 fw-bold">USD
                                                                        {{ $product->price }}</p>
                                                                </div>
                                                                <div class="button_border rounded-pill mx-3">
                                                                    <a href="{{ asset('cart') }}">
                                                                        <button
                                                                            class="button_leniar_style px-4 rounded-pill fs-12">Add
                                                                            to Cart</button>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="d-flex align-items-center mt-3 ">
                                    <i class="fas fa-exclamation-triangle text-danger fs-4 me-2"></i><p class="text-danger mb-0 fs-5">No record to show</p>
                                </div>
                            @endif
                            </div>

                        </div>
                    </div>
                    @includeif('template.social_mbl')

                </div>
            </div>
        </div>
    </section>
    @include('template.jslinks')
</body>

</html>