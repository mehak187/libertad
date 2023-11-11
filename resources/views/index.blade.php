<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>dashboard</title>
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
                    <div>
                        <div class="d-md-block d-none">
                            <u style="color: #E4C14F;">Leave your Review</u>
                            <div class="d-flex gap-2">
                                <textarea class="rounded-3 bg_review border-0 px-3" name="" id="" cols="25" rows="3"
                                    placeholder="Please leave your Review"></textarea>
                                <button class="p-0 mt-auto btn_submit_rivew">
                                    <img src="./imgs/review_button.png" class="img-fluid" width="40px" height="40px"
                                        alt="">
                                </button>
                            </div>
                        </div>
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
                    <div class="sidebar_tab_content is-active">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="">
                                        <div>
                                            <img src="./imgs/body_text.png" class="img-libert2" alt="">
                                        </div>
                                        <p class="url_style mb-0 text-wrap">www.libertadelmundo.com</p>
                                        <p class="text-white fs-14">
                                            The word “Libertad” means “freedom” in Spanish, and so we are willing
                                            to change the concept of traveling by offering our visitors the opportunity
                                            to discover our
                                            land in his/her way: “Libertad- Travel your way”
                                        </p>
                                        <a href="{{asset('home')}}">
                                            <div class="button_border rounded-pill">
                                                <button class="button_leniar_style px-4 rounded-pill">Explore Egypt
                                                    <img src="./imgs/button_errow.png" style="width: 30px;" class="ps-2"
                                                        alt="">
                                                </button>
                                            </div>
                                    </div>
                                    </a>
                                </div>
                                <div class="col-lg-6  mt-lg-0 mt-4">
                                    <div class="py-4 px-3 slider_popup">
                                        <div class="d-flex gap-3 justify-content-center pb-2">

                                        </div>
                                        <div class="">
                                            <div style="width: 100%; " class="click_img_style position-relative">
                                                <video src="./imgs/calm-egypt.mp4" style="width: 100%;" autoplay=""
                                                    muted></video>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-md-none d-block ps-3 mt-4">
                                    <u style="color: #E4C14F;">Leave your Review</u>
                                    <div class="d-flex gap-2 bg_review mt-2 p-3 rounded-3 width-text">
                                        <textarea class="bg-transparent border-0 w-100" name="" id="" rows="3"
                                            placeholder="Please leave your Review" style="resize: none;"></textarea>
                                        <button class="p-0 mt-auto btn_submit_rivew">
                                            <img src="./imgs/review_button.png" class="img-fluid" width="40px"
                                                height="40px" alt="">
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-md-none d-block ps-3 mt-3 ms-1">
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