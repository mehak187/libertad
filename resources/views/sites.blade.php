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
        <div class="right-content fix_div back_img pt-3 pb-5">
            <div class="outer_sidebar px-md-4">
                <div class="sidebar_tabs d-flex flex-column area-height justify-content-between">
                    <div class="position-relative ms-3 ms-md-0">
                        <img src="./imgs/exclamate.png" alt="" class="exclamate-img d-md-none" id="tab-side">
                        <div class="position-sidetabs tab-sideab d-md-block">
                            <div class="sidebar_tab gap-3 home">
                                <span class="step_circle">01.</span>
                                <span class="step_label">
                                    <a href="{{asset('home')}}" class="mb-0 fs-6">Home</a>
                                </span>
                            </div>
                            <div class="sidebar_tab gap-3 tour-1">
                                <span class="step_circle">02.</span>
                                <span class="step_label">
                                    <a href="{{asset('tour1')}}" class="mb-0 fs-6">Tours</a>
                                </span>
                            </div>
                            <div class="sidebar_tab gap-3 packages-1">
                                <span class="step_circle">03.</span>
                                <span class="step_label">
                                    <a href="{{asset('pakages')}}" class="mb-0 fs-6">Packages</a>
                                </span>
                            </div>
                            <div class="sidebar_tab gap-3 hotel-1">
                                <span class="step_circle">04.</span>
                                <span class="step_label">
                                    <a href="{{asset('hotels')}}" class="mb-0 fs-6">Accommodation</a>
                                </span>
                            </div>
                            <div class="sidebar_tab gap-3 daily-tours-1">
                                <span class="step_circle">05.</span>
                                <span class="step_label">
                                    <a href="{{asset('dailyactivites')}}" class="mb-0 fs-6">Daily Activites</a>
                                </span>
                            </div>
                            <div class="sidebar_tab sidebar_line_hide gap-3 airport">
                                <span class="step_circle">06.</span>
                                <span class="step_label">
                                    <a href="{{asset('airport')}}" class="mb-0 fs-6">Airport Shuttle</a>
                                </span>
                            </div>
                            <div class="sidebar_tab sidebar_line_hide gap-3 p-tool">
                                <span class="step_circle">07.</span>
                                <span class="step_label">
                                    <a href="{{asset('productsandtools')}}" class="mb-0 fs-6">Product & Tools</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-auto">
                        <div class="d-md-block d-none">
                            <p class="mb-0 fs-12" style="color: #E4C14F;">Social Media:</p>
                            <div>
                                <a
                                    href="https://www.tripadvisor.com/Attraction_Review-g294201-d26208912-Reviews-Libertad_Del_Mundo-Cairo_Cairo_Governorate.html"><img
                                        src="./imgs/social_icon_1.png" style="height: 40px; width: 40px;" alt=""></a>
                                <a href="https://www.facebook.com/profile.php?id=100090555392220"><img
                                        src="./imgs/social_icon_2.png" style="height: 40px; width: 40px;" alt=""></a>
                                <a href="mailto:info@libertadelmundo.com"><img src="./imgs/social_icon_3.png"
                                        style="height: 40px; width: 40px;" alt=""></a>
                                <a href="mailto:info@libertadelmundo.com"><img src="./imgs/social_icon_4.png"
                                        style="height: 40px; width: 40px;" alt=""></a>
                                <a href="https://www.instagram.com/libertadelmundoofficial/?next=%2F"><img
                                        src="./imgs/social_icon_5.png" style="height: 40px; width: 40px;" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sidebar_content ms-md-4">
                    <!-- main page content start -->
                    <div class="sidebar_tab_content ">
                        <div class="container-fluid">
                            <div class="my-3">
                                <h2 class="sky-clr fw-light mt-2"><span class="golden-clr">Sites and</span> Monuments
                                </h2>

                                <div class="position-relative mt-5  mx-auto">
                                    <div class="prev_arrow8">
                                        <i class="icn fa-solid fa-arrow-left"></i>
                                    </div>
                                    <div class="row autoplay_2 m-auto">
                                        <div class="col  mx-4">
                                            <a href="{{asset('sitesandmonoments')}}"><img class="img-fluid rounded-4"
                                                    src="./imgs/egypt-1.png " width="100%" alt=""></a>
                                        </div>
                                        <div class="col  mx-4">
                                            <a href="{{asset('sitesandmonoments')}}"><img class="img-fluid rounded-4"
                                                    src="./imgs/egypt-1.png" width="100%" alt=""></a>
                                        </div>
                                        <div class="col  mx-4">
                                            <a href="{{asset('sitesandmonoments')}}"><img class="img-fluid rounded-4"
                                                    src="./imgs/egypt-1.png" width="100%" alt=""></a>
                                        </div>
                                        <div class="col  mx-4">
                                            <a href="{{asset('sitesandmonoments')}}"><img class="img-fluid rounded-4"
                                                    src="./imgs/egypt-1.png" width="100%" alt=""></a>
                                        </div>
                                        <div class="col  mx-4">
                                            <a href="{{asset('sitesandmonoments')}}"><img class="img-fluid rounded-4"
                                                    src="./imgs/egypt-1.png" width="100%" alt=""></a>
                                        </div>
                                        <div class="col  mx-4">
                                            <a href="{{asset('sitesandmonoments')}}"><img class="img-fluid rounded-4"
                                                    src="./imgs/egypt-1.png" width="100%" alt=""></a>
                                        </div>
                                        <div class="col  mx-4">
                                            <a href="{{asset('sitesandmonoments')}}"><img class="img-fluid rounded-4"
                                                    src="./imgs/egypt-1.png" width="100%" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="next_arrow8">
                                        <i class="icn fa-solid fa-arrow-right"></i>
                                    </div>
                                </div>

                                <div class="position-relative mx-auto mt-5 pt-3 p">
                                    <div class="prev_arrow9">
                                        <i class="icn fa-solid fa-arrow-left"></i>
                                    </div>
                                    <div class="row autoplay_3  m-auto">
                                        <div class="col  mx-4">
                                            <a href="{{asset('sitesandmonoments')}}"><img class="img-fluid rounded-4"
                                                    src="./imgs/egypt-1.png " width="100%" alt=""></a>
                                        </div>
                                        <div class="col  mx-4">
                                            <a href="{{asset('sitesandmonoments')}}"><img class="img-fluid rounded-4"
                                                    src="./imgs/egypt-1.png" width="100%" alt=""></a>
                                        </div>
                                        <div class="col  mx-4">
                                            <a href="{{asset('sitesandmonoments')}}"><img class="img-fluid rounded-4"
                                                    src="./imgs/egypt-1.png" width="100%" alt=""></a>
                                        </div>
                                        <div class="col  mx-4">
                                            <a href="{{asset('sitesandmonoments')}}"><img class="img-fluid rounded-4"
                                                    src="./imgs/egypt-1.png" width="100%" alt=""></a>
                                        </div>
                                        <div class="col  mx-4">
                                            <a href="{{asset('sitesandmonoments')}}"><img class="img-fluid rounded-4"
                                                    src="./imgs/egypt-1.png" width="100%" alt=""></a>
                                        </div>
                                        <div class="col  mx-4">
                                            <a href="{{asset('sitesandmonoments')}}"><img class="img-fluid rounded-4"
                                                    src="./imgs/egypt-1.png" width="100%" alt=""></a>
                                        </div>
                                        <div class="col  mx-4">
                                            <a href="{{asset('sitesandmonoments')}}"><img class="img-fluid rounded-4"
                                                    src="./imgs/egypt-1.png" width="100%" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="next_arrow9">
                                        <i class="icn fa-solid fa-arrow-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-md-none d-block ps-3 mt-5 ms-1">
                        <p class="mb-0 fs-12" style="color: #E4C14F;">Social Media:</p>
                        <div>
                            <a
                                href="https://www.tripadvisor.com/Attraction_Review-g294201-d26208912-Reviews-Libertad_Del_Mundo-Cairo_Cairo_Governorate.html"><img
                                    src="./imgs/social_icon_1.png" style="height: 40px; width: 40px;" alt=""></a>
                            <a href="https://www.facebook.com/profile.php?id=100090555392220"><img
                                    src="./imgs/social_icon_2.png" style="height: 40px; width: 40px;" alt=""></a>
                            <a href="mailto:info@libertadelmundo.com"><img src="./imgs/social_icon_3.png"
                                    style="height: 40px; width: 40px;" alt=""></a>
                            <a href="mailto:info@libertadelmundo.com"><img src="./imgs/social_icon_4.png"
                                    style="height: 40px; width: 40px;" alt=""></a>
                            <a href="https://www.instagram.com/libertadelmundoofficial/?next=%2F"><img
                                    src="./imgs/social_icon_5.png" style="height: 40px; width: 40px;" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('template.jslinks')
</body>

</html>