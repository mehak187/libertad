<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bahareya Oasis</title>
    @include('template.csslinks')
</head>

<body class="">
    @if (session('success'))
        <script>
            swal("Good job!", "{{ session('success') }}", "success");
        </script>
    @endif
    @if (session('error'))
        <script>
            swal("Ooops!", "{{ session('error') }}", "error");
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
                        <a href="{{ URL::previous() }}" class="text-decoration-none">
                            <i class="bi bi-arrow-left text-dark sky-light pb-2 pt-1 px-2 rounded-2"></i>
                        </a>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <p class="text-white m-0 font-22">Tours</p>
                        <i class="bi bi-chevron-right text-white"></i>
                        <p class="text-white m-0 font-22">{{ $citytour->name }}</p>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-6">
                        <img src="<?php echo asset('uploads/' . $citytour['img']); ?>" alt="" class="img-tree rounded-4">
                    </div>
                    <div class="col-lg-6 py-3 px-4">
                        <p class="text-white">{{ $citytour->name }}</p>
                        <div class="row align-items-center">
                            <div class="col-sm-6 col-lg-12 col-xl-6 d-flex align-items-center gap-4 border-tb py-2 ">
                                <a href="#"
                                    class=" view-modal d-flex align-items-center text text-decoration-none gap-2">
                                    <i class="bi bi-share border-golden rounded-circle px-2 py-1 golden-clr"></i>
                                    <p class="m-0 text-white ">Share</p>
                                </a>
                                @include('template.popup')
                                @if (auth()->check())
                                    <button type="button"
                                        class="d-inline-block mt-3 mt-sm-0 mt-lg-3 mt-xl-0 rate-button"
                                        data-bs-toggle="modal" data-bs-target="#myModal">
                                        Rate &
                                        Review
                                    </button>
                                @endif
                            </div>
                        </div>
                        <div class="row mt-3">
                            <p class="text-white">
                                {{ $citytour->des }}
                            </p>
                        </div>
                       
                    </div>
                </div>
                <div>
                    <div class="d-flex gap-2 mt-4">
                        <h6 class="golden-clr">No. of nights:</h6>
                        <span class=" mb-0 text-white">{{ $citytour->nights }}</span>
                    </div>
                    <h6 class="golden-clr">Tour Highlights</h6>
                    @php
                        $inputString = $citytour['sight_seeing'];
                        $dataArray = explode(',', $inputString);
                    @endphp
                    <ul class="text-white">
                        @foreach ($dataArray as $item)
                            <li class="text-white">{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>
                <div>
                    <h6 class="golden-clr">Includes</h6>
                    @php
                        $inputString = $citytour['include'];
                        $dataArray = explode(',', $inputString);
                    @endphp
                    <ul class="text-white">
                        @foreach ($dataArray as $item)
                            <li class="text-white">{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>
                <div>
                    <h6 class="golden-clr">Excludes</h6>
                    @php
                        $inputString = $citytour['exclude'];
                        $dataArray = explode(',', $inputString);
                    @endphp
                    <ul class="text-white">
                        @foreach ($dataArray as $item)
                            <li class="text-white">{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="d-flex gap-2">
                    <h6 class="golden-clr">Tour Price:</h6>
                    <span class=" mb-0 text-white">{{ $citytour->price }} USD</span>
                </div>
                @if (auth()->check())
                <div class="">
                    <div class="button_border rounded-pill">
                        <button type="button"
                            class="button_leniar_style px-5 rounded-pill open-res">Book</button>
                    </div>
                </div>
            @endif
                @if (count($galleryImages) > 0)
                    <div class="row mt-5 mx-sm-0 mx-2">
                        <h5 class="text-white">Photos and gallery</h5>
                        <div class="col site-bg rounded-4 px-4 py-3 mt-4">
                            <div class="row">
                                @foreach ($galleryImages as $galleryImage)
                                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 my-3">
                                        <img src="<?php echo asset('uploads/' . $galleryImage['image_path']); ?>" alt=""
                                            class="img-fluid h-100 cover rounded-4">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>
    @include('template.footer')

    <div class="custom-model res-model">
        <form action="/book1" method="POST">
            @csrf
            <div class="d-flex justify-content-between border-1 pb-3 border-bottom px-3 ">
                <h1 class="modal-title fs-5 ">Reservation</h1>
                <i class="fas fa-times text-secondary fs-4 close-m"></i>
            </div>
            <div class="mt-3 px-3">
                <label for="" class="font-12">Select the date</label>
                <input type="date" class="w-100 form-control-n border-1 shadow-none small" name="date"
                    placeholder="date" id="date" required>
            </div>
            @php
                $price = $citytour->price;
            @endphp
            <div class="px-3">
                <label for="" class="font-12">No. of people</label>
                <input type="number" name="people" id="peopleInput" class="form-control shadow-none font-12"
                    value="1" oninput="updateTotalPrice()" required>
            </div>
            <input type="number" name="price" id="priceInput" class="form-control shadow-none font-12 d-none"
                value="{{ $price }}" oninput="updateTotalPrice()">
            <div class="px-3">
                <label for="" class="font-12">Total Price</label>
                <div class="d-flex align-items-center form-control justify-content-between shadow-none font-12">
                    <input type="number" name="tprice" id="tpriceInput"
                        class="bg-transparent text-dark border-0 shadow-none font-12" value="{{ $price }}"
                        readonly required>
                    <span>| USD</span>
                </div>
            </div>
            <div class="border-1 border-top mt-3 d-flex justify-content-end">
                <button type="submit" class="btn mybutton px-4 rounded-pill mt-3 mx-3 open-book">Continue with my
                    booking</button>
            </div>
        </form>
    </div>
    @if (session('bookingm'))
        <div class="custom-model book-model">
            <form name="booking" action="/savebooking" method="POST" enctype="multipart/form-data" class="mt-2">
                @csrf
                <div class="d-flex justify-content-between border-1 pb-3 border-bottom px-3 ">
                    <h1 class="modal-title fs-5 ">Booking Data</h1>
                    <i class="fas fa-times text-secondary fs-4 close-m"></i>
                </div>
                <input type="number" class="d-none" name="tour_id" value="{{ $citytour->id }}">
                <input type="text" class="d-none" name="tour_name" value="{{ $citytour->name }}">
                <input type="number" class="d-none" name="role" value="1" readonly>
                <input type="number" id="pvalue" class="d-none" value="{{ session('requestData.people') }}"
                    readonly>
                <input type="number" name="peoplenew" id="tpriceInputn" class="d-none" value="" readonly>
                <input type="number" name="t_price" id="tpricenew" class="d-none "
                    value="{{ session('requestData.tprice') }}" readonly>
                <input type="date" name="date" id="datenew" class="d-none "
                    value="{{ session('requestData.date') }}" readonly>
                <div class="tbody px-3" id="tbodyContainer">
                    <div class="t-data">
                        <h6 class="mt-3">Traveller 1</h6>
                        <div class="">
                            <label for="f_name" class="font-12">First Name</label>
                            <input type="text" class="form-control shadow-none font-12" placeholder="First Name"
                                id="f_name" name="f_name[]" required>
                        </div>
                        <div class="">
                            <label for="l_name" class="font-12">Last Name</label>
                            <input type="text" class="form-control shadow-none font-12" placeholder="Last Name"
                                id="l_name" name="l_name[]" required>
                        </div>
                        <div class="">
                            <label for="dob" class="font-12">Date of Birth</label>
                            <input type="date" class="form-control shadow-none font-12"
                                placeholder="Date of birth" id="dob" name="dob[]" required>
                        </div>
                        <div class="mt-2">
                            <div class="d-flex flex-column">
                                <span for="" class="font-12">Passport Copy/ID for Egyptians</span>
                                <input type="file" name="passport[]" class="form-control shadow-none font-12"
                                    id="myImg2" onchange="readURL(this);" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-3 d-flex justify-content-end">
                    <input type="submit" value="Confirm my booking" name="booking"
                        class="w-100 mx-3 w-auto text-dark border-0 mybutton px-4 rounded-pill py-2 ">
                </div>
            </form>
        </div>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                var bprice = document.getElementById('tpriceInputn');
                var bpricev = document.getElementById('pvalue');
                var bpricevv = parseInt(bpricev.value) || 0;
                bprice.value = bpricevv;
                updateTable();
            });

            function updateTable() {
                var numberOfPeople = document.getElementById("tpriceInputn").value;
                var tbodyContainer = document.getElementById("tbodyContainer");
                tbodyContainer.innerHTML = '';
                for (var i = 1; i <= numberOfPeople; i++) {
                    var newRow = document.createElement("div");
                    newRow.className = "t-data";
                    newRow.innerHTML = `
                                <h6 class="mt-3">Traveller ${i}</h6>
                                <div class="">
                                    <label for="f_name-${i}" class="font-12">First Name</label>
                                    <input type="text" class="form-control shadow-none font-12" id="f_name-${i}" name="f_name[]" placeholder="First Name" required>
                                </div>
                                <div class="">
                                    <label for="l_name-${i}" class="font-12">Last Name</label>
                                    <input type="text" class="form-control shadow-none font-12" id="l_name-${i}" name="l_name[]" placeholder="Last Name" required>
                                </div>
                                <div class="">
                                    <label for="dob-${i}" class="font-12">Date of Birth</label>
                                    <input type="date" class="form-control shadow-none font-12" id="dob-${i}" name="dob[]" placeholder="Date of birth" required>
                                </div>
                                <div class="mt-2">
                                    <div class="d-flex flex-column">
                                        <span for="" class="font-12">
                                            Passport Copy/ID for Egyptians
                                        </span>
                                        <input type="file" class="form-control shadow-none font-12" id="myImg${i}" name="passport[]" onchange="readURL(this);" required>
                                    </div>
                                </div>
                            `;
                    tbodyContainer.appendChild(newRow);
                }
            }
            updateTable();
        </script>
    @endif
    @if (session('showm'))
        <div class="custom-model show-model">
            <form action="/check" method="POST">
                @csrf
                <div class="d-flex justify-content-between border-1 pb-3 border-bottom px-3 ">
                    <h1 class="modal-title fs-5 ">Summary</h1>
                    <i class="fas fa-times text-secondary fs-4 close-m"></i>
                </div>
                <div class="px-3">
                    <h6 class="fw-bold">Tour data</h6>
                    <div class="">
                        <h6>Tour Name</h6>
                        <p>{{ $citytour->name }}</p>
                    </div>
                    <div class="">
                        <h6>Cities</h6>
                        <p>{{ $ct->Cityname }}</p>
                    </div>
                    <div class="">
                        <h6>Tour duration</h6>
                        <p>{{ $citytour->nights }}</p>
                    </div>
                    <div class="">
                        <h6>Date</h6>
                        <p>{{ session('booking')->date }}</p>
                    </div>
                    <div class="">
                        <h6>No. of people</h6>
                        <p>{{ session('booking')->people }}</p>
                    </div>
                    <h6 class="fw-bold">Total Price</h6>
                    <p>{{ session('booking')->t_price }}$</p>
                    <input type="" name="totalamount" value="{{ session('booking')->t_price }}"
                        class="d-none" readonly>
                    <input type="" name="booking_id" value="{{ session('booking')->id }}" class='d-none'
                        readonly>
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
                            placeholder="Cardholder name">
                    </div>
                    <div class="mt-3">
                        <input type="number" name="" id="flexRadioDefault1" autocomplete='off'
                            placeholder="Card number" class='form-control shadow-none card-number'>
                    </div>
                    <div class="mt-3">
                <input type="" name="book_role" value="1" class='d-none' readonly>
                        <input type="text" class='form-control card-number d-none'
                            value="{{ session('requestData.totalamount') }}" name="amount" readonly>
                        <input type="text" class='form-control card-number d-none'
                            value="{{ session('requestData.booking_id') }}" name="booking_id" readonly>
                    </div>
                    {{-- <div class="mt-3">
                        <input type="text" id="monthYearInput" class="form-control shadow-none"
                            placeholder="MM/YYYY" maxlength="7" pattern="\d{2}/\d{4}"
                            title="Please enter a valid Month/Year (MM/YYYY)">
                    </div> --}}
                    <div class="row mt-3">
                        <div class='col-md-6 form-group expiration required'>
                            <input class='form-control card-expiry-month' placeholder='MM' size='2'
                                type='text'>
                        </div>
                        <div class='col-md-6 col-md-4 form-group expiration required'>
                            <input class='form-control card-expiry-year' placeholder='YYYY' size='4'
                                type='text'>
                        </div>
                    </div>
                    <div class="mt-3">
                        <input type="number" class="form-control shadow-none card-cvc" placeholder="CCV"
                            maxlength='4'>
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
    <script>
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
            // Get the current date
            var currentDate = new Date();

            // Format the date as 'YYYY-MM-DD' (required format for input type date)
            var formattedDate = currentDate.toISOString().split('T')[0];

            // Set the maximum date for the input
            $('#dob').attr('max', formattedDate);
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
<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-booking">
        <div class="modal-content light-bground py-3 rounded-4">
            <div class="modal-header border-0 pt-0 px-5">
                <h1 class="modal-title fs-5 brown-clr">Rate & Review</h1>
            </div>
            <div class="modal-body pt-0 px-5">
                <form action="/citytourreview" enctype="multipart/form-data" method="POST">
                    @csrf
                    <input type="number" class="d-none" name="stour_id" value="{{ $citytour->id }}">
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
                        <input type="number" id="star" name="star" class="d-none" value="" required>
                        <script>
                            function updateStarValue(value) {
                                document.getElementById('star').value = value;
                            }
                        </script>
                    </div>
                    <div class="mt-3">
                        <textarea class="myInput" placeholder="Write" name="review" rows="3" maxlength="200" required></textarea>
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="mybutton button_border rounded-pill px-5 py-2">Save</button>
                    </div>
            </div>
        </div>
    </div>
</div>

</html>
