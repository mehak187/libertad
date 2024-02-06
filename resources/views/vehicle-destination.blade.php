<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>dashboard</title>
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
                                @if (count($shuttles) > 0)
                                    <div class="row me-md-0 me-sm-2 my-3">
                                        <div class="col-xl-11">
                                            <div class="first_slider">
                                                <div class="autoplay_2 mb-3">
                                                    @foreach ($shuttles as $shuttle)
                                                        <div class="slide mx-2 city-result1">
                                                            <div class="card first_card_slider border-0">
                                                                <img src="<?php echo asset('uploads/' . $shuttle['img']); ?>" alt="Avatar"
                                                                    class="image1_2_duplicate rounded_top">
                                                                <div class="card-body card_bottom"
                                                                    style="background-color: #E2BE4E;">
                                                                    <div
                                                                        class="d-flex flex-wrap justify-content-end align-items-end">
                                                                        <div class="col-12">
                                                                            {{-- <p class="mb-0 fs-12 fw-bold">
                                                                                {{ $shuttle['from'] }} to
                                                                                {{ $shuttle['to'] }}</p> --}}
                                                                            <p class="mb-0 fs-12 fw-bold">
                                                                                Vehicle name:
                                                                                <span class="searchable1">
                                                                                    {{ $shuttle['name'] }}</span>
                                                                            </p>
                                                                            <p class="mb-0 fs-12 fw-bold">
                                                                                Vehicle type:
                                                                                <span class="searchable1">
                                                                                    {{ $shuttle['vehicle'] }}</span>
                                                                            </p>
                                                                        </div>
                                                                         @if (auth()->check())
                                                                        <div class="col-12 d-flex justify-content-end button_border rounded-pill">
                                                                            <div class="d-flex justify-content-end">
                                                                                <button
                                                                                    class="button_leniar_style position-relative px-4 rounded-pill fs-12 open-res"
                                                                                    style="height: 25px;">
                                                                                    <input type="text"
                                                                                        class="vid w-100 h-100 position-absolute bg-transparent border-0 color-transparent start-0 top-0 rounded-pill"
                                                                                        value="{{ $shuttle['id'] }}">
                                                                                    Book</button>
                                                                                {{-- <input type="text"
                                                                                    class="vprice d-none w-0 border-0 bg-transparent"
                                                                                    value="{{ $shuttle['name'] }}"> --}}
                                                                                <input type="text"
                                                                                    class="vpeople d-none w-0 border-0 bg-transparent"
                                                                                    value="{{ $shuttle['name'] }}">
                                                                                <input type="text"
                                                                                    class="vtype d-none w-0 border-0 bg-transparent"
                                                                                    value="{{ $shuttle['vehicle'] }}">
                                                                            </div>
                                                                        </div>
                                                                        @endif
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
                                    <div class="d-flex align-items-center mt-3 ">
                                        <i class="fas fa-exclamation-triangle text-danger fs-4 me-2"></i>
                                        <p class="mb-0 text-danger fs-5">No record to show</p>
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
    <div class="custom-model res-model">
        <form action="/bookvehicle" method="POST">
            @csrf
            <div class="d-flex justify-content-between border-1 pb-3 border-bottom px-3 ">
                <h1 class="modal-title fs-5 ">Booking Information</h1>
                <i class="fas fa-times text-secondary fs-4 close-m"></i>
            </div>
            <div class="px-3">
               <input type="number" value="" class="vget d-none" id="vgetValue" name="shuttle_id" readonly required >
                <div class="mt-3">
                    <label for="" class="w-100 fw-semibold">Vehicle Name</label>
                    <input type="text" value="" class="bg-transparent focus-b-none text-dark w-100 border-0" id="peopleget" name="name" readonly required>
                </div>
                <div class="mt-3">
                    <label for="" class="w-100 fw-semibold">Vehicle Type</label>
                    <input type="text" value="" class="bg-transparent focus-b-none text-dark w-100 border-0" id="typeget" name="type" readonly required>
                </div>
                <div class="mt-3">
                    <label for="" class="w-100 fw-semibold">From</label>
                    <input type="text" value="{{$vehicle['from']}}" class="bg-transparent focus-b-none text-dark w-100 border-0" name="from" readonly>
                </div>
                <div class="mt-3">
                    <label for="" class="w-100 fw-semibold">To</label>
                    <input type="text" value="{{$vehicle['to']}}" class="bg-transparent focus-b-none text-dark w-100 border-0" name="to" readonly>
                </div>
                <div class="mt-3">
                    <label for="" class="w-100 fw-semibold">No. of Passengers</label>
                    <input type="number" value="{{$vehicle['people']}}" class="bg-transparent focus-b-none text-dark w-100 border-0" name="people" readonly>
                </div>
                <div class="mt-3">
                    <label for="" class="w-100 fw-semibold">Date</label>
                    <input type="text" value="{{$vehicle['date']}}" class="bg-transparent focus-b-none text-dark w-100 border-0" name="date" readonly>
                </div>
             <div class="border-1 border-top mt-3 d-flex justify-content-end">
                <button type="submit" class="btn mybutton px-4 rounded-pill mt-3 mx-3 open-book">Confirm</button>
            </div>
        </form>
        @if (session('showm'))
        <script>
            swal("Good job!", "Your booking completed successfully", "success");
        </script>
        @endif
        {{-- <form action="/shuttlebooking" method="POST">
            @csrf
            <div class="d-flex justify-content-between border-1 pb-3 border-bottom px-3 ">
                <h1 class="modal-title fs-5 ">Reservation</h1>
                <i class="fas fa-times text-secondary fs-4 close-m"></i>
            </div>
            <div class="px-3">
               <input type="number" value="" class="vget d-none" id="vgetValue" name="shuttle_id" readonly required >
                  <input type="number" value="" class="d-none pget" id="pgetValue" name="price" readonly required>
                <input type="text" value="" class="d-none " id="peopleget" name="people" readonly required>
                <input type="text" value="" class="d-none" id="typeget" name="type" readonly required>
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
        </form> --}}
    </div>
    {{-- @if (session('showm'))
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
    @endif --}}
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
