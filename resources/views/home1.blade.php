<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>home</title>
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
                                <span class="step_circle active">01.</span>
                                <span class="step_label">
                                    <a href="{{asset('home')}}" class="mb-0 fs-6 active">Home</a>
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
                    <div class="sidebar_tab_content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xl-7 col-lg-9 px-md-0 px-2 mt-3 mt-md-0">
                                    <div>
                                        <p class="content_1_heading mb-0">
                                            <span class=" travel_text">Travel your</span>
                                            <span class="way_color">way</span>
                                        </p>
                                        <p class="text-white fs-14 px-2">
                                            The word “Libertad” means “freedom” in Spanish, and so we are willing to
                                            change the concept of traveling by offering our visitors.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="row flex-xl-row flex-column-reverse bg_map pt-3 pb-2 mx-2 mx-md-0">
                                        <div class="col-xl-8 mt-lg-0 mt-3">
                                            <div class="map-width position-relative">
                                                <img src="./imgs/Scroll-img.png" alt="" class="img-map">
                                                <div class="dot" id="dot">
                                                    <div class="position-img">
                                                        <img src="./imgs/hurghada.png" alt="" class="city-img">
                                                        <p class="m-0 mt-2 text-white text-center">Caire city</p>
                                                    </div>
                                                </div>
                                                <div class="dot" data-message="Message 2" id="dot1">
                                                    <div class="position-img1">
                                                        <img src="./imgs/hurghada.png" alt="" class="city-img">
                                                        <p class="m-0 mt-2 text-white text-center font-12">Alexandria
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="dot" data-message="Message 3" id="dot2">
                                                    <div class="position-img2">
                                                        <img src="./imgs/hurghada.png" alt="" class="city-img">
                                                        <p class="m-0 mt-2 text-white text-center">Luxor</p>
                                                    </div>
                                                </div>
                                                <div class="dot" data-message="Message 4" id="dot3">
                                                    <div class="position-img3">
                                                        <img src="./imgs/hurghada.png" alt="" class="city-img">
                                                        <p class="m-0 mt-2 text-white text-center">Aswan</p>
                                                    </div>
                                                </div>
                                                <div class="dot" data-message="Message 5" id="dot4">
                                                    <div class="position-img4">
                                                        <img src="./imgs/hurghada.png" alt="" class="city-img">
                                                        <p class="m-0 mt-2 text-white text-center">Siwa</p>
                                                    </div>
                                                </div>
                                                <div class="dot" data-message="Message 6" id="dot5">
                                                    <div class="position-img5">
                                                        <img src="./imgs/hurghada.png" alt="" class="city-img">
                                                        <p class="m-0 mt-2 text-white text-center">Hurghada</p>
                                                    </div>
                                                </div>
                                                <div class="dot" data-message="Message 7" id="dot6">
                                                    <div class="position-img6">
                                                        <img src="./imgs/hurghada.png" alt="" class="city-img">
                                                        <p class="m-0 mt-2 text-white text-center font-12">Sharm El
                                                            sheikh</p>
                                                    </div>
                                                </div>
                                                <div class="dot" data-message="Message 8" id="dot7">
                                                    <div class="position-img7">
                                                        <img src="./imgs/hurghada.png" alt="" class="city-img">
                                                        <p class="m-0 mt-2 text-white text-center font-12">Sharm El
                                                            sheikh</p>
                                                    </div>
                                                </div>
                                                <div class="dot" data-message="Message 9" id="dot8">
                                                    <div class="position-img8">
                                                        <img src="./imgs/hurghada.png" alt="" class="city-img">
                                                        <p class="m-0 mt-2 text-white text-center font-12">Fayoum</p>
                                                    </div>
                                                </div>
                                                <div class="dot" data-message="Message 10" id="dot9">
                                                    <div class="position-img9">
                                                        <img src="./imgs/hurghada.png" alt="" class="city-img">
                                                        <p class="m-0 mt-2 text-white text-center font-12">Giza-El Gouna
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="dot" data-message="Message 11" id="dot10">
                                                    <div class="position-img10">
                                                        <img src="./imgs/hurghada.png" alt="" class="city-img">
                                                        <p class="m-0 mt-2 text-white text-center font-12">Marsa Alam
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="dot" data-message="Message 12" id="dot11">
                                                    <div class="position-img11">
                                                        <img src="./imgs/hurghada.png" alt="" class="city-img">
                                                        <p class="m-0 mt-2 text-white text-center font-12">Al Alamein
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="dot" data-message="Message 13" id="dot12">
                                                    <div class="position-img12">
                                                        <img src="./imgs/hurghada.png" alt="" class="city-img">
                                                        <p class="m-0 mt-2 text-white text-center">Sinai</p>
                                                    </div>
                                                </div>
                                                <div class="dot" data-message="Message 14" id="dot13">
                                                    <div class="position-img13">
                                                        <img src="./imgs/hurghada.png" alt="" class="city-img">
                                                        <p class="m-0 mt-2 text-white text-center">Caire city</p>
                                                    </div>
                                                </div>
                                                <div class="dot" data-message="Message 15" id="dot14">
                                                    <div class="position-img14">
                                                        <img src="./imgs/hurghada.png" alt="" class="city-img">
                                                        <p class="m-0 mt-2 text-white text-center">Caire city</p>
                                                    </div>
                                                </div>
                                                <div class="dot" data-message="Message 16" id="dot15"></div>
                                                <div class="dot" data-message="Message 17" id="dot16"></div>
                                            </div>
                                            <div id="message-container"></div>
                                        </div>
                                        <div class="col-xl-4 position-relative">
                                            <div class="button_border rounded-4 rounded-pill ms-lg-auto mt-3">
                                                <button class="button_leniar_style px-4 rounded-pill fs-12"
                                                    id="toggleButton">
                                                    Ready to tailor your trip
                                                    <img src="./imgs/button_errow.png" style="width: 30px;" class="ps-2"
                                                        alt="">
                                                </button>
                                            </div>
                                            <div class="p-3 dropdown_bg_color max-w" id="content">
                                                <form action="">
                                                    <div>
                                                        <label for="" class="fs-12 dropdown_label_color">What are the
                                                            cities do you want to visit?</label>
                                                        <select name="city" id="city" class=" mb-1 text-white py-1"
                                                            multiple>
                                                            <option value="Cairo">Cairo</option>
                                                            <option value="Alexandria">Alexandria</option>
                                                            <option value="Luxor">Luxor</option>
                                                            <option value="Aswan">Aswan</option>
                                                            <option value="Hurghada">Hurghada</option>
                                                            <option value="Sharm El sheikh">Sharm El sheikh</option>
                                                            <option value="Baharyeh">Baharyeh</option>
                                                            <option value="Fayoum">Fayoum</option>
                                                            <option value="Giza">Giza</option>
                                                            <option value="El Gouna">El Gouna</option>
                                                            <option value="Marsa Alam">Marsa Alam</option>
                                                            <option value="Al Alamein">Al Alamein</option>
                                                            <option value="Sinai">Sinai</option>
                                                        </select>
                                                    </div>
                                                    <div>
                                                        <label for="" class="mb-1 fs-12 dropdown_label_color">How many
                                                            Person would join the trip?</label>
                                                        <input type="number"
                                                            class="form-control mb-1 dropdown_bg_color bg-transparent py-1 text-white">
                                                    </div>
                                                    <div>
                                                        <label for="" class="mb-1 fs-12 dropdown_label_color">How many
                                                            days do you want to spend in Egypt?</label>
                                                        <input type="number"
                                                            class="form-control mb-1 dropdown_bg_color bg-transparent py-1 text-white">
                                                    </div>
                                                    <div>
                                                        <label for="" class="fs-12 dropdown_label_color">What
                                                            transportation do you prefer between cities?</label>
                                                        <p class="mb-0 font-12 text-white">Note: Flight tickets are not
                                                            included in the price</p>
                                                        <select name="transport-whecle" id="transport-whecle"
                                                            class=" mb-1 text-white py-1" multiple>
                                                            <option value="Car">Car</option>
                                                            <option value="Train">Train</option>
                                                            <option value="Airplane">Airplane</option>
                                                        </select>
                                                    </div>
                                                    <div>
                                                        <label for="" class="mb-1 fs-12 dropdown_label_color">Trip Start
                                                            Date</label>
                                                        <input type="date"
                                                            class="form-control mb-1 dropdown_bg_color bg-transparent py-1 text-white">
                                                    </div>
                                                    <div class="button_border rounded-4 rounded-pill mt-3">
                                                        <a href="{{asset('travelyourway2')}}"><button type="button"
                                                                class="button_leniar_style py-1 px-4 rounded-pill fs-12 text-decoration-none text-dark">
                                                                Plan the Trip
                                                                <img src="./imgs/button_errow.png" style="width: 30px;"
                                                                    class="ps-2" alt="">
                                                            </button></a>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-2">
                                <h2 class="golden-clr">Libertad Special Tours</h2>
                                @foreach ($stours as $stour)
                                <div class="col-xl-3 col-md-6 col-sm-4 col-6 mt-3">
                                    <div class="container1 ">
                                        <img src="<?php echo asset('special/' . $stour['img'])?>" alt="Avatar" class="image1">
                                        <a href="{{"tourdetail/" .$stour['id'] }}" class="overlay text-decoration-none">
                                            <div class="text1">{{$stour['name']}}</div>
                                            <p class="text2 text-white mt-3 stext">{{$stour['des']}}</p>
                                        </a>
                                    </div>
                                </div>
                                @endforeach
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