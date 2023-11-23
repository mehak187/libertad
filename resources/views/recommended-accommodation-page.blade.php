<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Accommodation</title>
    @include('template.csslinks')
</head>

<body class="">
    @if (session('success'))
    <script>
        swal("Good job!", "{{session('success')}}", "success");
    </script>
    @endif
    @if (session('error'))
        <script>
            swal("Ooops!", "{{session('error')}}", "error");
        </script>
    @endif
    @include('template.header')
    <section class="main-tem">
        @include('template.sidepanel')
        <!-- main content -->
        <div class="right-content ftr fix_div cyan-bg py-5">
            <div class="container">
                <div class="main-border py-2 d-flex align-items-center gap-2">
                    <div>
                        <a href='/hotels' class="text-decoration-none"><i
                                class="bi bi-arrow-left text-dark sky-light pb-2 pt-1 px-2 rounded-2"></i></a>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <p class="text-white m-0 font-22">Accommodation</p>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-6">
                        <img src="<?php echo asset('uploads/' . $hotel['tourimg']); ?>" alt="" class="img-tree rounded-4">
                    </div>
                    <div class="col-lg-6 py-3 px-4">
                        <p class="text-white">{{ $hotel['name'] }}</p>
                        <div class="row align-items-center">
                            <div class="col-sm-6 col-lg-12 col-xl-6 d-flex align-items-center gap-4 border-tb py-2 max">
                                <a href="#"
                                    class=" view-modal d-flex align-items-center text text-decoration-none gap-2">
                                    <i class="bi bi-share border-golden rounded-circle px-2 py-1 golden-clr"></i>
                                    <p class="m-0 text-white ">Share</p>
                                </a>
                                @include('template.popup')
                                <button type="button"
                                        class="d-inline-block mt-3 mt-sm-0 mt-lg-3 mt-xl-0 rate-button"
                                        data-bs-toggle="modal" data-bs-target="#myModal">
                                        Rate &
                                        Review
                                    </button>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <p class="text-white">{{ $hotel['card_des'] }}
                        </div>
                        <div class="d-flex gap-2">
                            <p class="golden-clr mb-0">No. of nights:</p>
                            <span class="text-white mb-0">{{ $hotel['nights_nmbr'] }}</span>
                        </div>
                        <div class="d-flex gap-2">
                            <p class="golden-clr mb-0">Tour Price:</p>
                            <span class="text-white mb-0">{{ $hotel['tour_price'] }} USD per adult</span>
                        </div>
                        <div class="d-flex gap-2 mt-4">
                            <h6 class="golden-clr">City:</h6>
                            <span class="text-light">{{$hotel['Cityname']}}</span>
                        </div>
                        <div>
                            <h6 class="golden-clr">Sightseeing</h6>
                            @php
                                $inputString = $hotel['sight_seeing'];
                                $dataArray = explode(',', $inputString);
                            @endphp
                            <ul class="text-light">
                                @foreach ($dataArray as $item)
                                    <li class="text-light">{{ $item }}</li>
                                @endforeach
                            </ul>
                        </div>
                        <div>
                            <h6 class="golden-clr">Include</h6>
                            @php
                                $inputString = $hotel['include'];
                                $dataArray = explode(',', $inputString);
                            @endphp
                            <ul class="text-light">
                                @foreach ($dataArray as $item)
                                    <li class="text-light">{{ $item }}</li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="">
                            <div class="button_border rounded-pill">
                                <button type="button" class="button_leniar_style px-5 rounded-pill "
                                    data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Book</button>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
    @include('template.footer')
    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-booking">
            <div class="modal-content light-bground py-3 rounded-4">
                <div class="modal-header border-0 pt-0 px-5">
                    <h1 class="modal-title fs-5 brown-clr">Rate & Review</h1>
                </div>
                <div class="modal-body pt-0 px-5">
                    <form action="/acc_review" enctype="multipart/form-data" method="POST">
                        @csrf
                        <input type="number" class="d-none" name="stour_id" value="{{ $hotel['id'] }}">
                        <div>
                            <div class="rating">
                                <input type="radio" id="star5" name="rating" value="5">
                                <label for="star5" onclick="updateStarValue(5)"></label>
                                <input type="radio" id="star4" name="rating" value="4">
                                <label for="star4" onclick="updateStarValue(4)"></label>
                                <input type="radio" id="star3" name="rating" value="3">
                                <label for="star3" onclick="updateStarValue(3)"></label>
                                <input type="radio" id="star2" name="rating" value="2">
                                <label for="star2" onclick="updateStarValue(2)"></label>
                                <input type="radio" id="star1" name="rating" value="1">
                                <label for="star1" onclick="updateStarValue(1)"></label>
                            </div>
                            <input type="number" id="star" name="star" class="d-none" value=""  required>
                            <script>
                                function updateStarValue(value) {
                                    document.getElementById('star').value = value;
                                }
                            </script>
                        </div>
                        <div class="mt-3">
                            <textarea class="myInput" placeholder="Write" name="review" maxlength="200" rows="3" required></textarea>
                        </div>
                        <div class="mt-3">
                            <button type="submit" class="mybutton button_border rounded-pill px-5 py-2">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
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
                            <input type="email" class="form-control shadow-none font-12" placeholder="Email">
                        </div>
                        <div class="">
                            <label for="" class="font-12">Phone Number</label>
                            <input type="number" class="form-control shadow-none font-12" placeholder="Contact">
                        </div>
                        <div class="d-flex align-items-center mt-3">
                            <div class="col-12">
                                <span for="" class="font-12 d-block">Passport Copy/ID for Egyptians</span>
                                <label for="myImg1">
                                    <img id="blah1" src="./imgs/add_profile.png" alt=""
                                        class="profile-img">
                                </label>
                                <input type="file" name="img" class="d-none" id="myImg1"
                                    onchange="readURL(this);">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button data-bs-target="#exampleModalToggle3" data-bs-toggle="modal"
                        class="btn mybutton px-4 border-0 rounded-pill">Confirm my booking</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModalToggle3" aria-hidden="true" aria-labelledby="exampleModalToggleLabel4"
        tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Summary</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <h6 class="fw-bold">Tour data</h6>
                        <div class="">
                            <h6>Tour Name</h6>
                            <p>Alexandria</p>
                        </div>
                        <div class="">
                            <h6>Cities</h6>
                            <p>Alexandria, Siwa</p>
                        </div>
                        <div class="">
                            <h6>Tour duration</h6>
                            <p>2 days</p>
                        </div>
                        <div class="">
                            <h6>Date</h6>
                            <p>12/12/23</p>
                        </div>
                        <div class="">
                            <h6>No. of people</h6>
                            <p>12</p>
                        </div>
                        <h6 class="fw-bold">Total Price</h6>
                        <p>120$</p>
                        <h6>Terms $ Conditions/Cancellation policy</h6>
                        <div class="d-flex align-items-start">
                            <input type="checkbox" class="me-2 mt-2">
                            <label for="" class="font-12">Lorem ipsum dolor, sit amet consectetur adipisicing
                                elit. Est
                                deserunt sed repudiandae doloribus quod accusantium cumque consectetur omnis
                                laboriosam.label>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button data-bs-target="#exampleModalToggle5" data-bs-toggle="modal"
                        class="btn mybutton px-4 border-0 rounded-pill">Continue & Pay</button>
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
