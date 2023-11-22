<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Airport Shuttle</title>
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
                                    <i class="fas fa-exclamation-triangle text-danger fs-4 me-2"></i><p class="text-danger fs-5 mb-0">No content to show</p>
                                </div>
                            @else
                                <div class="slider_popup py-4 px-3 mb-3 mt-3 mt-md-0 mx-2">
                                    <div class="d-flex">
                                        <h5 class="my-auto text-uppercase" style="color: #E2BE4E;">Airport shuttle:</h5>
                                    </div>
                                    <div class="container-fluid">
                                        <div class="d-flex align-items-end">
                                            <div class="input-des d-flex align-items-center p-0 w-100">
                                                <div class="input-container">
                                                    <div>
                                                        <label for="" class="font-12 text-white">From</label>
                                                        <input type="text" id="input1" value="Airport"
                                                            class="form-control shadow-none bg-transparent text-white">
                                                    </div>
                                                    <div class="mt-3">
                                                        <span id="swap-icon" onclick="swapFields()">🔄</span>
                                                    </div>
                                                    <div>
                                                        <label for="" class="font-12 text-white">To</label>
                                                        <input type="text" id="input2" value="Hotel name"
                                                            class="form-control shadow-none bg-transparent text-white">
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <label for="" class="fs-12 text-white">Number of people</label>
                                                    <input type="number" value="1" class="form-control text-white"
                                                        name="" id=""
                                                        style="background-color: transparent;">
                                                </div>
                                                <div class="">
                                                    <label for="" class="fs-12 text-white">Check in Date</label>
                                                    <input type="date" name="" class="form-control"
                                                        id=""
                                                        style="background-color: transparent; color: white;">
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
                                                            <div class="slide mx-2 city-result">
                                                                <div class="card first_card_slider border-0">
                                                                    <img src="<?php echo asset('uploads/' . $vehicle1['img']); ?>" alt="Avatar"
                                                                        class="image1_2_duplicate rounded_top">
                                                                    <div class="card-body card_bottom"
                                                                        style="background-color: #E2BE4E;">
                                                                        <div
                                                                            class="d-flex justify-content-between align-items-end">
                                                                            <div>
                                                                                <p class="mb-0 fs-12 fw-bold">
                                                                                    {{ $vehicle1['from'] }} to
                                                                                    {{ $vehicle1['to'] }}</p>
                                                                                <p class="mb-0 fs-12 fw-bold searchable">Vehicle type:
                                                                                    {{ $vehicle1['vehicle'] }}
                                                                                </p>
                                                                                <p class="mb-0 fs-12 fw-bold">No. of
                                                                                    people: {{ $vehicle1['passengers'] }}
                                                                                </p>
                                                                                <p class="mb-0 fs-12 fw-bold">Price: USD
                                                                                    {{ $vehicle1['price'] }}</p>
                                                                            </div>
                                                                            <div class="button_border rounded-pill">
                                                                                <div>
                                                                                    <button
                                                                                        class="button_leniar_style px-4 rounded-pill fs-12"
                                                                                        style="height: 25px;"
                                                                                        data-bs-target="#exampleModalToggle1"
                                                                                        data-bs-toggle="modal">Book</button>
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
                                                                            class="d-flex justify-content-between align-items-end">
                                                                            <div>
                                                                                <p class="mb-0 fs-12 fw-bold">
                                                                                    {{ $vehicle2['from'] }} to
                                                                                    {{ $vehicle2['to'] }}</p>
                                                                                <p class="mb-0 fs-12 fw-bold searchable">Vehicle type:
                                                                                    {{ $vehicle2['vehicle'] }}
                                                                                </p>
                                                                                <p class="mb-0 fs-12 fw-bold">No. of
                                                                                    people: {{ $vehicle2['passengers'] }}
                                                                                </p>
                                                                                <p class="mb-0 fs-12 fw-bold">Price: USD
                                                                                    {{ $vehicle2['price'] }}</p>
                                                                            </div>
                                                                            <div class="button_border rounded-pill">
                                                                                <div>
                                                                                    <button
                                                                                        class="button_leniar_style px-4 rounded-pill fs-12"
                                                                                        style="height: 25px;"
                                                                                        data-bs-target="#exampleModalToggle1"
                                                                                        data-bs-toggle="modal">Book</button>
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
                                                                            class="d-flex justify-content-between align-items-end">
                                                                            <div>
                                                                                <p class="mb-0 fs-12 fw-bold">
                                                                                    {{ $vehicle['from'] }} to
                                                                                    {{ $vehicle['to'] }}</p>
                                                                                <p class="mb-0 fs-12 fw-bold searchable">Vehicle type:
                                                                                    {{ $vehicle['vehicle'] }}
                                                                                </p>
                                                                                <p class="mb-0 fs-12 fw-bold">No. of
                                                                                    people: {{ $vehicle['passengers'] }}
                                                                                </p>
                                                                                <p class="mb-0 fs-12 fw-bold">Price: USD
                                                                                    {{ $vehicle['price'] }}</p>
                                                                            </div>
                                                                            <div class="button_border rounded-pill">
                                                                                <div>
                                                                                    <button
                                                                                        class="button_leniar_style px-4 rounded-pill fs-12"
                                                                                        style="height: 25px;"
                                                                                        data-bs-target="#exampleModalToggle1"
                                                                                        data-bs-toggle="modal">Book</button>
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
                    @includeif('template.social_mbl')
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade" id="exampleModalToggle1" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2"
        tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-booking">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Reservation</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="mt-3">
                            <label for="" class="fw-semibold">Date of the ride</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label for="" class="fw-semibold">Pick-Up time</label>
                            <input type="time" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label for="" class="fw-semibold">Pick-up location</label>
                            <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label for="" class="fw-semibold">Drop-of time</label>
                            <input type="time" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label for="" class="fw-semibold">Drop-of location</label>
                            <input type="address" class="form-control shadow-none">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button data-bs-target="#exampleModalToggle2" data-bs-toggle="modal"
                        class="btn mybutton px-4 border-0 rounded-pill">Confirm & Pay</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2"
        tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Reservation</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="">
                            <label for="" class="font-12">First name</label>
                            <input type="text" class="form-control shadow-none font-12" placeholder="First name">
                        </div>
                        <div class="">
                            <label for="" class="font-12">Last name</label>
                            <input type="text" class="form-control shadow-none font-12" placeholder="Last name">
                        </div>
                        <div class="">
                            <label for="" class="font-12">Email</label>
                            <input type="email" class="form-control shadow-none font-12" placeholder="Email">
                        </div>
                        <div class="">
                            <label for="" class="font-12">Confirm Email</label>
                            <input type="email" class="form-control shadow-none font-12"
                                placeholder="Confirm Email">
                        </div>
                        <div class="">
                            <label for="" class="font-12">Phone Number</label>
                            <input type="tel" class="form-control shadow-none font-12" placeholder="Contact">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button data-bs-target="#exampleModalToggle3" data-bs-toggle="modal"
                        class="btn mybutton px-4 border-0 rounded-pill">Confirm & Pay</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModalToggle3" aria-hidden="true" aria-labelledby="exampleModalToggleLabel3"
        tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalToggleLabel3">Summary</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div>
                            <label for="" class="fw-semibold">From</label>
                            <p class="shadow-none font-12">Cairo International Airport</p>
                        </div>
                        <div class="mt-3">
                            <label for="" class="fw-semibold">To</label>
                            <p class="shadow-none font-12">Abu Simbel Airport</p>
                        </div>
                        <div class="mt-3">
                            <label for="" class="fw-semibold">Date of the ride</label>
                            <p class="shadow-none font-12">8/18/2023</p>
                        </div>
                        <div class="mt-3">
                            <label for="" class="fw-semibold">Pick-Up Time</label>
                            <p class="shadow-none font-12">6:31 PM</p>
                        </div>
                        <div class="mt-3">
                            <label for="" class="fw-semibold">Drop-off Time</label>
                            <p class="shadow-none font-12">11:30 PM</p>
                        </div>
                        <div class="mt-3">
                            <label for="" class="fw-semibold">Location</label>
                            <p class="shadow-none font-12">1st floor, Akbar Mart, Daska Rd, Sialkot, Punjab 51310</p>
                        </div>
                        <div class="mt-3">
                            <label for="" class="fw-semibold">Car Type</label>
                            <p class="shadow-none font-12">Toyota Land Cruiser V8</p>
                        </div>
                        <div class="mt-3">
                            <label for="" class="fw-semibold">No. of passengers</label>
                            <p class="shadow-none font-12">2</p>
                        </div>
                        <div class="mt-3">
                            <label for="" class="fw-semibold">Price</label>
                            <p class="shadow-none font-12">200$</p>
                        </div>
                        <div class="d-flex align-items-start">
                            <input type="checkbox" class="form-check shadow-none" id="chk">
                            <label for="chk" class="font-12 ps-2 bg-white">Lorem ipsum dolor sit amet,
                                consectetur
                                adipiscing elit. Vivamus ac odio ac justo facilisis fringilla ac eu justo. I have read
                                and agree to the Terms and Conditions / Cancellation Policy. I am Agree on terms and
                                conditions.</label>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button data-bs-toggle="modal" data-bs-target="#exampleModalToggle5" type="submit"
                        class="btn mybutton px-4 border-0 rounded-pill">Pay secure</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModalToggle5" aria-hidden="true" aria-labelledby="exampleModalToggleLabel5"
        tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalToggleLabel4">Payment methods</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="row d-flex align-items-center justify-content-between px-3">
                            <div class="col-6 form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault1" checked>
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Credit Card
                                </label>
                            </div>

                            <div class="col-6 d-flex align-items-center justify-content-end">
                                <img class="payment-logos" src="./imgs/VISA-Logo-2014.png" alt="">
                                <img class="payment-logos" src="./imgs/Mastercard-Logo.png" alt="">
                                <img class="payment-logos" src="./imgs/Emex-logo.png" alt="">
                            </div>
                        </div>
                        <div id="has" style="display: block;">


                            <div class="mt-3">
                                <input type="number" class="form-control shadow-none" placeholder="Card number">
                            </div>
                            <div class="mt-3">
                                <input type="text" name="" id="flexRadioDefault1"
                                    class="form-control shadow-none" placeholder="Cardholder name">
                            </div>
                            <div class="mt-3">
                                <input type="text" id="monthYearInput" class="form-control shadow-none"
                                    placeholder="MM/YYYY" maxlength="7" pattern="\d{2}/\d{4}"
                                    title="Please enter a valid Month/Year (MM/YYYY)">
                            </div>
                            <div class="mt-3">
                                <input type="text" class="form-control shadow-none" placeholder="CCV">
                            </div>
                        </div>
                        <div class="mt-3 form-check">
                            <input class=" form-check-input" type="radio" name="flexRadioDefault"
                                id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault1">
                                <img class="w-25" src="./imgs/paypal-logo-png-16.png" alt="">
                            </label>
                        </div>

                        <div class="mt-3 ps-4 d-flex align-items-center">
                            <img class="payment-logoslast" src="./imgs/VISA-Logo-2014.png" alt="">
                            <img class="payment-logoslast" src="./imgs/Mastercard-Logo.png" alt="">
                            <img class="payment-logoslast" src="./imgs/Emex-logo.png" alt="">
                        </div>
                        <div id="asd" style="display: none;">
                            <div class="mt-3">
                                <label for="">Email</label>
                                <input type="text" name="" id="" class="form-control shadow-none"
                                    placeholder="Email">
                            </div>
                            <div class="mt-3">
                                <label for="">Password</label>
                                <input type="password" class="text-dark form-control shadow-none"
                                    placeholder="Password">
                            </div>
                            <div class="text-center mt-3">
                                <input type="submit" value="Login"
                                    class="golden-bg border-0 rounded-pill px-3 py-2">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button data-bs-toggle="modal" data-bs-target="#exampleModalToggle6 "
                        class="btn mybutton px-4 border-0 rounded-pill">Pay Secure</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModalToggle6" aria-hidden="true" aria-labelledby="exampleModalToggleLabel6"
        tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalToggleLabel5">Summary</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div>
                            <label for="" class="fw-semibold">Product description</label>
                            <p class="shadow-none font-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Vivamus ac odio ac justo facilisis fringilla ac eu justo.</p>
                        </div>
                        <div class="mt-3">
                            <label for="" class="fw-semibold">Qty</label>
                            <p class="shadow-none font-12">4</p>
                        </div>
                        <div class="mt-3">
                            <label for="" class="fw-semibold">Receipt No.</label>
                            <p class="shadow-none font-12">200</p>
                        </div>
                        <div class="mt-3">
                            <label for="" class="fw-semibold">Date Paid</label>
                            <p class="shadow-none font-12">8/18/2023</p>
                        </div>
                        <div class="mt-3">
                            <label for="" class="fw-semibold">Payment Method</label>
                            <p class="shadow-none font-12">PayPal</p>
                        </div>
                        <div>
                            <label for="" class="w-100 fw-semibold">Logo</label>
                            <img class="w-25" src="./imgs/logo_text.png" alt="">
                            <p class="d-flex">Liberta<span class="way_color">d</span>elmundo</p>
                        </div>
                        <div class="mt-3">
                            <label for="" class="fw-semibold">Person name</label>
                            <p class="shadow-none font-12">Ashir Ali Bhalli</p>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button data-bs-toggle="modal" aria-label="Close"
                        class="btn mybutton px-4 border-0 rounded-pill">Send Email</button>
                </div>
            </div>
        </div>
    </div>
    @include('template.jslinks')
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
        </script>
</body>

</html>
