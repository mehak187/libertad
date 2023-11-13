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
                        @includeif('template.social_desktop')
                    </div>
                </div>
                <div class="sidebar_content ms-md-4">
                    <div class="sidebar_tab_content is-active">
                        <div class="container-fluid">
                            <div class="row mt-md-0 mt-4">
                                <div class="main-border py-2 d-flex align-items-center gap-2">
                                    <div>
                                        <a href="{{ asset('airport') }}" class="text-decoration-none">
                                            <i
                                                class="bi bi-arrow-left text-dark sky-light pb-2 pt-1 px-2 rounded-2"></i>
                                        </a>
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <p class="golden-clr m-0 font-22">Select the Vehicle:</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6 mt-3">
                                    <div class="card first_card_slider border-0">
                                        <img src="./imgs/1.jpg" alt="Avatar" class="image1_2_duplicate rounded_top">
                                        <div class="card-body card_bottom" style="background-color: #E2BE4E;">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <p class="fw-bold fs-12 mb-0">Car Model: Toyota</p>
                                                    <p class="mb-0 fs-12 fw-bold">Price: USD 500</p>
                                                    <p class="mb-0 fs-12 fw-bold">No. of passengers: 5</p>
                                                </div>
                                                <div class="button_border rounded-pill dropdown">
                                                    <div>
                                                        <button class="button_leniar_style px-4 rounded-pill fs-12"
                                                            style="height: 25px;" data-bs-target="#exampleModalToggle2"
                                                            data-bs-toggle="modal">Book</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6 mt-3">
                                    <div class="card first_card_slider border-0">
                                        <img src="./imgs/car3.jpg" alt="Avatar"
                                            class="image1_2_duplicate rounded_top">
                                        <div class="card-body card_bottom" style="background-color: #E2BE4E;">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <p class="fw-bold fs-12 mb-0">Car Model: Toyota</p>
                                                    <p class="mb-0 fs-12 fw-bold">Price: USD 500</p>
                                                    <p class="mb-0 fs-12 fw-bold">No. of passengers: 5</p>
                                                </div>
                                                <div class="button_border rounded-pill dropdown">
                                                    <div>
                                                        <button class="button_leniar_style px-4 rounded-pill fs-12"
                                                            style="height: 25px;" data-bs-target="#exampleModalToggle2"
                                                            data-bs-toggle="modal">Book</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6 mt-3">
                                    <div class="card first_card_slider border-0">
                                        <img src="./imgs/car2.jpg" alt="Avatar"
                                            class="image1_2_duplicate rounded_top">
                                        <div class="card-body card_bottom" style="background-color: #E2BE4E;">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <p class="fw-bold fs-12 mb-0">Car Model: Toyota</p>
                                                    <p class="mb-0 fs-12 fw-bold">Price: USD 500</p>
                                                    <p class="mb-0 fs-12 fw-bold">No. of passengers: 5</p>
                                                </div>
                                                <div class="button_border rounded-pill dropdown">
                                                    <div>
                                                        <button class="button_leniar_style px-4 rounded-pill fs-12"
                                                            style="height: 25px;"
                                                            data-bs-target="#exampleModalToggle2"
                                                            data-bs-toggle="modal">Book</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @includeif('template.social_mbl')

                </div>
            </div>
        </div>
    </section>
    <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2"
        tabindex="-1">
        <div class="modal-dialog modal-booking modal-dialog-centered">
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
                        <div class="">
                            <label for="" class="font-12">Flight number</label>
                            <input type="number" class="form-control shadow-none font-12"
                                placeholder="Enter flight number">
                        </div>
                        <div class="">
                            <label for="" class="font-12">Arrival time</label>
                            <input type="time" class="form-control shadow-none font-12"
                                placeholder="Arrival time">
                        </div>
                        <div class="">
                            <label for="" class="font-12">Departure time</label>
                            <input type="time" class="form-control shadow-none font-12"
                                placeholder="Departure time">
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
                            <label for="" class="fw-semibold">Time</label>
                            <p class="shadow-none font-12">6:31 PM</p>
                        </div>
                        <div class="mt-3">
                            <label for="" class="fw-semibold">Car Model</label>
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
                    <button data-bs-target="#exampleModalToggle5" data-bs-toggle="modal"
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
</body>

</html>
