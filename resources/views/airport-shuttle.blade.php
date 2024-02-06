<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Airport Shuttle</title>
    @include('template.csslinks')
</head>

<body class="background_img">
    @if (session('success'))
        <script>
            swal("Good job!", "{{ session('success') }}", "success");
        </script>
    @endif
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
                                <span class="step_circle active">06.</span>
                                <span class="step_label">
                                    <a href="{{ asset('airport') }}" class="mb-0 fs-6 active">Airport Shuttle</a>
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
                    <div class="sidebar_tab_content is-active">
                        <div class="container-fluid">
                            @if (isset($error))
                                <div class="mt-md-0 mt-3">
                                    <p class="content_1_heading mb-0">
                                        <span class=" travel_text">Airport</span>
                                        <span class="way_color">Shuttle</span>
                                    </p>
                                </div>
                                <div class="d-flex align-items-center mt-3 ">
                                    <i class="fas fa-exclamation-triangle text-danger fs-4 me-2"></i>
                                    <p class="text-danger fs-5 mb-0">No content to show</p>
                                </div>
                            @else
                                <div class="slider_popup py-4 px-3 mb-3 mt-3 mt-md-0 mx-2">
                                    <div class="d-flex">
                                        <h5 class="my-auto text-uppercase" style="color: #E2BE4E;">Airport shuttle:</h5>
                                    </div>
                                    <div class="container-fluid">
                                       <form action="search_vehicle" method="GET">
                                        @csrf
                                        <div class="d-flex align-items-end">
                                            <div class="input-des d-flex align-items-center p-0 w-100">
                                                <div class="input-container">
                                                    <div>
                                                        <label for="" class="font-12 text-white">From</label>
                                                        <input type="text" id="locationInput" value="" placeholder="Airport"
                                                            class="form-control shadow-none bg-transparent text-white" name="from" required>
                                                    </div>
                                                    <div class="mt-3">
                                                        <span id="swap-icon" onclick="swapFields()">🔄</span>
                                                    </div>
                                                    <div>
                                                        <label for="" class="font-12 text-white">To</label>
                                                        <input type="text" id="locationInput1" value="" placeholder="Hotel name"
                                                            class="form-control shadow-none bg-transparent text-white" name="to" required>
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <label for="" class="fs-12 text-white">Number of
                                                        people</label>
                                                    <input type="number" value="1" class="form-control text-white"
                                                        name="people" id=""
                                                        style="background-color: transparent;" required>
                                                </div>
                                                <div class="">
                                                    <label for="" class="fs-12 text-white">Date</label>
                                                    <input type="date" class="form-control text-white"
                                                        name="date" id=""
                                                        style="background-color: transparent;" required>
                                                </div>
                                                <div class=" d-flex align-items-end">
                                                    <div class="">
                                                        <a href="{{ asset('vehicle') }}">
                                                            <button class="btn p-0 mt-3" style="width: 1.5rem;">
                                                                <img src="./imgs/review_button.png" class=""
                                                                    style="width: 2.6rem;" alt="">
                                                            </button>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       </form>
                                    </div>
                                </div>
                                <div class="container-fluid">
                                    <div class="travel-v">
                                        <p class="mb-0">
                                            <span class=" golden-clr text-uppercase">Transportation</span>
                                        </p>
                                    </div>
                                    <div
                                        class="search-width mt-3 border-golden bg-transparent rounded-pill d-flex align-items-center">
                                        <input type="search"
                                            class="form-control text-white shadow-none border-0 shadow-none bg-transparent"
                                            placeholder="Search here...." id="myinput" onkeyup="searchFunction()">
                                        <button class="border-0 bg-transparent"><i
                                                class="bi bi-search golden-clr"></i></button>
                                    </div>
                                    @if (@isset($vehicles1) && @isset($vehicles2))
                                        <div class="row me-md-0 me-sm-2">
                                            <div class="col-xl-11">
                                                <div class="first_slider">
                                                    <div class="autoplay_2 mb-3">
                                                        @foreach ($vehicles1 as $vehicle1)
                                                            <div class="slide mx-2 city-result1">
                                                                <div class="card first_card_slider border-0">
                                                                    <img src="<?php echo asset('uploads/' . $vehicle1['img']); ?>" alt="Avatar"
                                                                        class="image1_2_duplicate rounded_top">
                                                                    <div class="card-body card_bottom"
                                                                        style="background-color: #E2BE4E;">
                                                                        <div
                                                                            class="d-flex flex-wrap justify-content-between align-items-end">
                                                                            <div class="w-100 mb-3">
                                                                                <p class="mb-0 fs-12 fw-bold">
                                                                                    {{ $vehicle1['from'] }} to
                                                                                    {{ $vehicle1['to'] }}</p>
                                                                                <p
                                                                                    class="mb-0 fs-12 fw-bold">
                                                                                    Vehicle type:
                                                                                    <span class="searchable1"> {{ $vehicle1['vehicle'] }}</span>
                                                                                </p>
                                                                                <p class="mb-0 fs-12 fw-bold">No. of
                                                                                    people:
                                                                                    {{ $vehicle1['passengers'] }}
                                                                                </p>
                                                                                <p class="mb-0 fs-12 fw-bold">Price:
                                                                                    USD
                                                                                    {{ $vehicle1['price'] }}</p>
                                                                            </div>
                                                                            <div class="button_border rounded-pill">
                                                                                <div class="d-flex">
                                                                                    <button
                                                                                        class="button_leniar_style position-relative px-4 rounded-pill fs-12 open-res"
                                                                                        style="height: 25px;">
                                                                                        <input type="text"
                                                                                            class="vid w-100 h-100 position-absolute bg-transparent border-0 color-transparent start-0 top-0 rounded-pill"
                                                                                            value="{{ $vehicle1['id'] }}">
                                                                                        Book</button>
                                                                                        <input type="text"
                                                                                        class="vprice d-none w-0 border-0 bg-transparent"
                                                                                        value="{{ $vehicle1['price'] }}">
                                                                                    <input type="text"
                                                                                        class="vpeople d-none w-0 border-0 bg-transparent"
                                                                                        value="{{ $vehicle1['passengers'] }}">
                                                                                    <input type="text"
                                                                                        class="vtype d-none w-0 border-0 bg-transparent"
                                                                                        value="{{ $vehicle1['vehicle'] }}">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row me-md-0 me-sm-2">
                                            <div class="col-xl-11">
                                                <div class="first_slider">
                                                    <div class="autoplay_2 mb-3">
                                                        @foreach ($vehicles2 as $vehicle2)
                                                            <div class="slide mx-2 city-result">
                                                                <div class="card first_card_slider border-0">
                                                                    <img src="<?php echo asset('uploads/' . $vehicle2['img']); ?>" alt="Avatar"
                                                                        class="image1_2_duplicate rounded_top">
                                                                    <div class="card-body card_bottom"
                                                                        style="background-color: #E2BE4E;">
                                                                        <div
                                                                            class="d-flex flex-wrap justify-content-between align-items-end">
                                                                            <div class="w-100 mb-3">
                                                                                <p class="mb-0 fs-12 fw-bold">
                                                                                    {{ $vehicle2['from'] }} to
                                                                                    {{ $vehicle2['to'] }}</p>
                                                                                <p
                                                                                    class="mb-0 fs-12 fw-bold ">
                                                                                    Vehicle type:
                                                                                  <span class="searchable">{{ $vehicle2['vehicle'] }}</span>  
                                                                                </p>
                                                                                <p class="mb-0 fs-12 fw-bold">No. of
                                                                                    people:
                                                                                    {{ $vehicle2['passengers'] }}
                                                                                </p>
                                                                                <p class="mb-0 fs-12 fw-bold">Price:
                                                                                    USD
                                                                                    {{ $vehicle2['price'] }}</p>
                                                                            </div>
                                                                            <div class="button_border rounded-pill">
                                                                                <div class="d-flex">
                                                                                    <button
                                                                                        class="button_leniar_style position-relative px-4 rounded-pill fs-12 open-res"
                                                                                        style="height: 25px;">
                                                                                        <input type="text"
                                                                                            class="vid w-100 h-100 position-absolute bg-transparent border-0 color-transparent start-0 top-0 rounded-pill"
                                                                                            value="{{ $vehicle2['id'] }}">
                                                                                        Book</button>
                                                                                        <input type="text"
                                                                                        class="vprice d-none w-0 border-0 bg-transparent"
                                                                                        value="{{ $vehicle2['price'] }}">
                                                                                    <input type="text"
                                                                                        class="vpeople d-none w-0 border-0 bg-transparent"
                                                                                        value="{{ $vehicle2['passengers'] }}">
                                                                                    <input type="text"
                                                                                        class="vtype d-none w-0 border-0 bg-transparent"
                                                                                        value="{{ $vehicle2['vehicle'] }}">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        <div class="row me-md-0 me-sm-2">
                                            <div class="col-xl-11">
                                                <div class="first_slider">
                                                    <div class="autoplay_2 mb-3">
                                                        {{-- @if (@isset($vehicles)) --}}
                                                        @foreach ($vehicles as $vehicle)
                                                            <div class="slide mx-2 city-result">
                                                                <div class="card first_card_slider border-0">
                                                                    <img src="<?php echo asset('uploads/' . $vehicle['img']); ?>" alt="Avatar"
                                                                        class="image1_2_duplicate rounded_top">
                                                                    <div class="card-body card_bottom"
                                                                        style="background-color: #E2BE4E;">
                                                                        <div
                                                                            class="d-flex flex-wrap justify-content-between align-items-end">
                                                                            <div class="w-100 mb-3">
                                                                                <p class="mb-0 fs-12 fw-bold">
                                                                                    {{ $vehicle['from'] }} to
                                                                                    {{ $vehicle['to'] }}</p>
                                                                                <p class="mb-0 fs-12 fw-bold">Vehicle
                                                                                    type:
                                                                                    <span
                                                                                        class="searchable">{{ $vehicle['vehicle'] }}</span>
                                                                                </p>
                                                                                <p class="mb-0 fs-12 fw-bold">No. of
                                                                                    people:
                                                                                    {{ $vehicle['passengers'] }}
                                                                                </p>
                                                                                <p class="mb-0 fs-12 fw-bold">Price:
                                                                                    USD
                                                                                    {{ $vehicle['price'] }}</p>
                                                                            </div>

                                                                            <div class="button_border rounded-pill">
                                                                                <div class="d-flex">
                                                                                    <button
                                                                                        class="button_leniar_style position-relative px-4 rounded-pill fs-12 open-res"
                                                                                        style="height: 25px;">
                                                                                        <input type="text"
                                                                                            class="vid w-100 h-100 position-absolute bg-transparent border-0 color-transparent start-0 top-0 rounded-pill"
                                                                                            value="{{ $vehicle['id'] }}">
                                                                                        Book</button>
                                                                                        <input type="text"
                                                                                        class="vprice d-none w-0 border-0 bg-transparent"
                                                                                        value="{{ $vehicle['price'] }}">
                                                                                    <input type="text"
                                                                                        class="vpeople d-none w-0 border-0 bg-transparent"
                                                                                        value="{{ $vehicle['passengers'] }}">
                                                                                    <input type="text"
                                                                                        class="vtype d-none w-0 border-0 bg-transparent"
                                                                                        value="{{ $vehicle['vehicle'] }}">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                        {{-- @endif --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            @endif
                        </div>
                    </div>
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
                    @includeif('template.social_mbl')
                </div>
            </div>
        </div>
    </section>
    <div class="custom-model res-model">
        <form action="/shuttlebooking" method="POST">
            @csrf
            <div class="d-flex justify-content-between border-1 pb-3 border-bottom px-3 ">
                <h1 class="modal-title fs-5 ">Reservation</h1>
                <i class="fas fa-times text-secondary fs-4 close-m"></i>
            </div>
           <div class="px-3">
            <input type="number" value="" class="d-none vget" id="vgetValue" name="shuttle_id" readonly required>
            <input type="number" value="" class="d-none pget" id="pgetValue" name="price" readonly required>
            <input type="text" value="" class="d-none " id="peopleget" name="people" readonly required>
            <input type="text" value="" class="d-none " id="typeget" name="type" readonly required>
            <div class="mt-3">
                <label for="" class="fw-semibold">Date of the ride</label>
                <input type="date" name="date" class="form-control shadow-none" id="date" required>
            </div>
            <div class="mt-3">
                <label for="" class="fw-semibold">Pick-Up time</label>
                <select name="pick_time" class="input time  w-100 text-secondary py-2 border border-1 rounded-3 px-2 shadow-none bg-white grey-bg" id="arrivetime"  required>
                    <option value="00:00:00">12:00 AM</option>
                    <option value="00:30:00">12:30 AM</option>
                    <option value="01:00:00">01:00 AM</option>
                    <option value="01:30:00">01:30 AM</option>
                    <option value="02:00:00">02:00 AM</option>
                    <option value="02:30:00">02:30 AM</option>
                    <option value="03:00:00">03:00 AM</option>
                    <option value="03:30:00">03:30 AM</option>
                    <option value="04:00:00">04:00 AM</option>
                    <option value="04:30:00">04:30 AM</option>
                    <option value="05:00:00">05:00 AM</option>
                    <option value="05:30:00">05:30 AM</option>
                    <option value="06:00:00">06:00 AM</option>
                    <option value="06:30:00">06:30 AM</option>
                    <option value="07:00:00">07:00 AM</option>
                    <option value="07:30:00">07:30 AM</option>
                    <option value="08:00:00">08:00 AM</option>
                    <option value="08:30:00">08:30 AM</option>
                    <option value="09:00:00">09:00 AM</option>
                    <option value="09:30:00">09:30 AM</option>
                    <option value="10:00:00">10:00 AM</option>
                    <option value="10:30:00">10:30 AM</option>
                    <option value="11:00:00">11:00 AM</option>
                    <option value="11:30:00">11:30 AM</option>
                    <option value="12:00:00">12:00 PM</option>
                    <option value="12:30:00">12:30 PM</option>
                    <option value="13:00:00">01:00 PM</option>
                    <option value="13:30:00">01:30 PM</option>
                    <option value="14:00:00">02:00 PM</option>
                    <option value="14:30:00">02:30 PM</option>
                    <option value="15:00:00">03:00 PM</option>
                    <option value="15:30:00">03:30 PM</option>
                    <option value="16:00:00">04:00 PM</option>
                    <option value="16:30:00">04:30 PM</option>
                    <option value="17:00:00">05:00 PM</option>
                    <option value="17:30:00">05:30 PM</option>
                    <option value="18:00:00">06:00 PM</option>
                    <option value="18:30:00">06:30 PM</option>
                    <option value="19:00:00">07:00 PM</option>
                    <option value="19:30:00">07:30 PM</option>
                    <option value="20:00:00">08:00 PM</option>
                    <option value="20:30:00">08:30 PM</option>
                    <option value="21:00:00">09:00 PM</option>
                    <option value="21:30:00">09:30 PM</option>
                    <option value="22:00:00">10:00 PM</option>
                    <option value="22:30:00">10:30 PM</option>
                    <option value="23:00:00">11:00 PM</option>
                    <option value="23:30:00">11:30 PM</option>
                </select>
            </div>
            <div class="mt-3">
                <label for="" class="fw-semibold">Pick-up location</label>
                <input type="text" id="locationInput2" name="pick_location" class="form-control shadow-none" required>
            </div>
            <div class="mt-3">
                <label for="" class="fw-semibold">Drop-of time</label>
                <select name="drop_time" class="input time  w-100 text-secondary py-2 border border-1 rounded-3 px-2 shadow-none bg-white grey-bg" id="arrivetime"  required>
                    <option value="00:00:00">12:00 AM</option>
                    <option value="00:30:00">12:30 AM</option>
                    <option value="01:00:00">01:00 AM</option>
                    <option value="01:30:00">01:30 AM</option>
                    <option value="02:00:00">02:00 AM</option>
                    <option value="02:30:00">02:30 AM</option>
                    <option value="03:00:00">03:00 AM</option>
                    <option value="03:30:00">03:30 AM</option>
                    <option value="04:00:00">04:00 AM</option>
                    <option value="04:30:00">04:30 AM</option>
                    <option value="05:00:00">05:00 AM</option>
                    <option value="05:30:00">05:30 AM</option>
                    <option value="06:00:00">06:00 AM</option>
                    <option value="06:30:00">06:30 AM</option>
                    <option value="07:00:00">07:00 AM</option>
                    <option value="07:30:00">07:30 AM</option>
                    <option value="08:00:00">08:00 AM</option>
                    <option value="08:30:00">08:30 AM</option>
                    <option value="09:00:00">09:00 AM</option>
                    <option value="09:30:00">09:30 AM</option>
                    <option value="10:00:00">10:00 AM</option>
                    <option value="10:30:00">10:30 AM</option>
                    <option value="11:00:00">11:00 AM</option>
                    <option value="11:30:00">11:30 AM</option>
                    <option value="12:00:00">12:00 PM</option>
                    <option value="12:30:00">12:30 PM</option>
                    <option value="13:00:00">01:00 PM</option>
                    <option value="13:30:00">01:30 PM</option>
                    <option value="14:00:00">02:00 PM</option>
                    <option value="14:30:00">02:30 PM</option>
                    <option value="15:00:00">03:00 PM</option>
                    <option value="15:30:00">03:30 PM</option>
                    <option value="16:00:00">04:00 PM</option>
                    <option value="16:30:00">04:30 PM</option>
                    <option value="17:00:00">05:00 PM</option>
                    <option value="17:30:00">05:30 PM</option>
                    <option value="18:00:00">06:00 PM</option>
                    <option value="18:30:00">06:30 PM</option>
                    <option value="19:00:00">07:00 PM</option>
                    <option value="19:30:00">07:30 PM</option>
                    <option value="20:00:00">08:00 PM</option>
                    <option value="20:30:00">08:30 PM</option>
                    <option value="21:00:00">09:00 PM</option>
                    <option value="21:30:00">09:30 PM</option>
                    <option value="22:00:00">10:00 PM</option>
                    <option value="22:30:00">10:30 PM</option>
                    <option value="23:00:00">11:00 PM</option>
                    <option value="23:30:00">11:30 PM</option>
                </select>
            </div>
            <div class="mt-3">
                <label for="" class="fw-semibold">Drop-of location</label>
                <input type="address" id="locationInput3" name="drop_location" class="form-control shadow-none" required>
            </div>
           </div>
            <div class="border-1 border-top mt-3 d-flex justify-content-end">
                <button type="submit" class="btn mybutton px-4 rounded-pill mt-3 mx-3 open-book">Confirm and pay</button>
            </div>
        </form>
    </div>
    @if (session('showm'))
    <div class="custom-model show-model">
        <form action="/shuttle_check" method="POST">
            @csrf
            <div class="d-flex justify-content-between border-1 pb-3 border-bottom px-3 ">
                <h1 class="modal-title fs-5 ">Summary</h1>
                <i class="fas fa-times text-secondary fs-4 close-m"></i>
            </div>
            <div class="px-3">
                <div class="">
                        <label for="" class="fw-semibold">From</label>
                        <p class="shadow-none font-12">{{ session('booking')->pick_location }}</p>
                </div>
                <div class="mt-3">
                    <label for="" class="fw-semibold">To</label>
                    <p class="shadow-none font-12">{{ session('booking')->drop_location }}</p>
                </div>
                <div class="mt-3">
                    <label for="" class="fw-semibold">Date of the ride</label>
                    <p class="shadow-none font-12">{{ session('booking')->date }}</p>
                </div>
                <div class="mt-3">
                    <label for="" class="fw-semibold">Pick-Up Time</label>
                    <p class="shadow-none font-12">{{ session('booking')->pick_time }}</p>
                </div>
                <div class="mt-3">
                    <label for="" class="fw-semibold">Drop-off Time</label>
                    <p class="shadow-none font-12">{{ session('booking')->drop_time }}</p>
                </div>
                <div class="mt-3">
                    <label for="" class="fw-semibold">Car Type</label>
                    <p class="shadow-none font-12">{{ session('booking')->type }}</p>
                </div>
                <div class="mt-3">
                    <label for="" class="fw-semibold">No. of passengers</label>
                    <p class="shadow-none font-12">{{ session('booking')->people }}</p>
                </div>
                <div class="mt-3">
                    <label for="" class="fw-semibold">Price</label>
                    <p class="shadow-none font-12">{{ session('booking')->price }}</p>
                </div>
                <input type="" name="totalamount" value="{{ session('booking')->price }}" class="d-none" readonly>
                <input type="" name="booking_id" value="{{ session('booking')->id }}" class='d-none' readonly>
                <h6>Terms $ Conditions/Cancellation policy</h6>
            </div>
            <div class="d-flex align-items-center px-3">
                <input type="checkbox" id="check" class="me-2 mt-0" name="check" required>
                <label for="check" class="font-12">I agree to terms and conditions.
            </div>
            <div class="mt-3 d-flex justify-content-end">
                <input type="submit" value="Continue & Pay"
                    class="w-100 mx-3 w-auto text-dark border-0 mybutton px-4 text-center rounded-pill py-2">
            </div>
        </form>
    </div>
    @endif
    @if (session('paymentm'))
    <div class="custom-model payment-model">
        <form role="form" action="{{ route('stripe.post') }}" method="post" class="require-validation"
            data-cc-on-file="false" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form">
            @csrf
            <div class="d-flex justify-content-between border-1 pb-3 border-bottom px-3 ">
                <h1 class="modal-title fs-5">Payment methods</h1>
                <i class="fas fa-times text-secondary fs-4 close-m"></i>
            </div>

            <div class="row d-flex align-items-center justify-content-between px-3">
                <div class="col-6 form-check px-3">
                    <label class="form-check-label  ms-3" for="flexRadioDefault1" id="credit">
                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                            id="flexRadioDefault1" checked>
                        Credit Card
                    </label>
                </div>
                <div class="col-6 d-flex align-items-center justify-content-end">
                    <img class="payment-logos" src="{{ asset('imgs/VISA-Logo-2014.png') }}" alt="">
                    <img class="payment-logos" src="{{ asset('imgs/Mastercard-Logo.png') }}" alt="">
                    <img class="payment-logos" src="{{ asset('imgs/Emex-logo.png') }}" alt="">
                </div>
            </div>
            {{-- -----credit card---- --}}
            <div id="credit-det" class="px-3 ">
                <div class="mt-3">
                    <input type="text" class="form-control shadow-none" name="name"
                        placeholder="Cardholder name" required>
                </div>
                <div class="mt-3">
                    <input type="number" name="" id="flexRadioDefault1" autocomplete='off'
                        placeholder="Card number" class='form-control shadow-none card-number' required>
                </div>
                <div class="mt-3">
                    <input type="text" class='form-control card-number d-none'
                        value="{{ session('requestData.totalamount') }}" name="amount" readonly>
                    <input type="text" class='form-control card-number d-none'
                        value="{{ session('requestData.booking_id') }}" name="booking_id" readonly>
                    <input type="" name="book_role" value="2" class='d-none' readonly>
                </div>
                {{-- <div class="mt-3">
                    <input type="text" id="monthYearInput" class="form-control shadow-none"
                        placeholder="MM/YYYY" maxlength="7" pattern="\d{2}/\d{4}"
                        title="Please enter a valid Month/Year (MM/YYYY)">
                </div> --}}
                <div class="row mt-3">
                    <div class='col-md-6 form-group expiration required'>
                        <input class='form-control card-expiry-month' placeholder='MM' size='2'
                            type='text' required>
                    </div>
                    <div class='col-md-6 col-md-4 form-group expiration required'>
                        <input class='form-control card-expiry-year' placeholder='YYYY' size='4'
                            type='text' required>
                    </div>
                </div>
                <div class="mt-3">
                    <input type="number" class="form-control shadow-none card-cvc" placeholder="CCV"
                        maxlength='4' required>
                </div>
            </div>
            {{-- ----paypal---- --}}
            <div class="mt-3 form-check " class="px-3">
                <label class="form-check-label  ms-3" for="flexRadioDefault2" id="paypal">
                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                        id="flexRadioDefault2">
                    <img class="w-25" src="{{ asset('imgs/paypal-logo-png-16.png') }}" alt="">
                </label>
            </div>

            <div class="mt-3 ps-4 d-flex align-items-center px-3">
                <img class="payment-logoslast" src="{{ asset('imgs/VISA-Logo-2014.png') }}" alt="">
                <img class="payment-logoslast" src="{{ asset('imgs/Mastercard-Logo.png') }}" alt="">
                <img class="payment-logoslast" src="{{ asset('imgs/Emex-logo.png') }}" alt="">
            </div>
            <div class="px-3" id="paypal-det">
                <div class="mt-3">
                    <label for="">Email</label>
                    <input type="text" name="" id="" class="form-control shadow-none"
                        placeholder="Email">
                </div>
                <div class="mt-3">
                    <label for="">Password</label>
                    <input type="password" class="text-dark form-control shadow-none" placeholder="Password">
                </div>
                <div class="text-center mt-3">
                    <input type="submit" value="Login" class="golden-bg border-0 rounded-pill px-3 py-2">
                </div>
            </div>
            <div class="mt-3 d-flex justify-content-end">
                <input type="submit" value="Pay Secure"
                    class="w-100 mx-3 w-auto text-dark border-0 mybutton px-4 rounded-pill py-2">
            </div>
        </form>
    </div>
    @endif
    @include('template.jslinks')
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAu1gwHCSzLG9ACacQqLk-LG8oJMkarNF0&libraries=drawing,places&callback=initAutocomplete">
</script>
    <script>
        function searchFunction() {
            var input, filter, ul, li, a, i;
            input = document.getElementById('myinput');
            filter = input.value.toUpperCase();
            li = document.getElementsByClassName('city-result');

            cusall = document.getElementsByClassName('customer-all-main');
            var resultsFound = false; // initialize the flag to false

            for (i = 0; i < li.length; i++) {
                a = li[i].getElementsByClassName('searchable')[0];
                if (a.innerHTML.toUpperCase().startsWith(filter)) {
                    li[i].style.display = "";
                    resultsFound = true;
                } else {
                    li[i].style.display = 'none';
                }
            }
            document.getElementById('filter-heading').style.display = 'none';
            for (var j = 0; j < cusall.length; j++) {
                cusall[j].style.display = 'none';
            }
            if (!resultsFound) {
                document.getElementById('searcherror').style.display = 'block';
                document.getElementById('error_msg').style.display = 'none';

            } else {
                document.getElementById('searcherror').style.display = 'none';
            }
        }
 
        $(".res-model").hide();
        $(".open-book").click(function() {
            $(".book-model").show();
        });
        $(".open-res").click(function() {
            $(".res-model").show();
        });
        $(".close-m").click(function() {
            $(".book-model").hide();
            $(".res-model").hide();
            $(".show-model").hide();
            $(".payment-model").hide();
        });
        $(document).ready(function() {
            $("#paypal-det").hide();
            $("#credit").click(function() {
                $("#credit-det").show();
                $("#paypal-det").hide();
            });
            $("#paypal").click(function() {
                $("#credit-det").hide();
                $("#paypal-det").show();
            });
        });
        $(document).ready(function() {
            var currentDate = new Date();
            var tomorrow = new Date();
            tomorrow.setDate(currentDate.getDate() + 1);
            var formattedDate = tomorrow.toISOString().split('T')[0];
            $('#date').attr('min', formattedDate);
        });
   
        $(document).ready(function() {
            $('.vid').click(function() {
                var vidValue = $(this).val();
                var vpValue = $(this).parent().siblings(".vprice").val();
                var vpeople = $(this).parent().siblings(".vpeople").val();
                var vtype = $(this).parent().siblings(".vtype").val();
                $('#vgetValue').val(vidValue);
                $('#pgetValue').val(vpValue);
                $('#peopleget').val(vpeople);
                $('#typeget').val(vtype);
            });
        });
    </script>

</body>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>

<script type="text/javascript">
    $(function() {

        var $form = $(".require-validation");

        $('form.require-validation').bind('submit', function(e) {
            var $form = $(".require-validation"),
                inputSelector = ['input[type=email]', 'input[type=password]',
                    'input[type=text]', 'input[type=file]',
                    'textarea'
                ].join(', '),
                $inputs = $form.find('.required').find(inputSelector),
                $errorMessage = $form.find('div.error'),
                valid = true;
            $errorMessage.addClass('hide');

            $('.has-error').removeClass('has-error');
            $inputs.each(function(i, el) {
                var $input = $(el);
                if ($input.val() === '') {
                    $input.parent().addClass('has-error');
                    $errorMessage.removeClass('hide');
                    e.preventDefault();
                }
            });

            if (!$form.data('cc-on-file')) {
                e.preventDefault();
                Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                Stripe.createToken({
                    number: $('.card-number').val(),
                    cvc: $('.card-cvc').val(),
                    exp_month: $('.card-expiry-month').val(),
                    exp_year: $('.card-expiry-year').val()
                }, stripeResponseHandler);
            }

        });

        function stripeResponseHandler(status, response) {
            if (response.error) {
                $('.error')
                    .removeClass('hide')
                    .find('.alert')
                    .text(response.error.message);
            } else {
                var token = response['id'];
                $form.find('input[type=text]').empty();
                $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                $form.get(0).submit();
            }
        }
    });
</script>
</html>
