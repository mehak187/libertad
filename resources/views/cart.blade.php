<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cart</title>
    @include('template.csslinks')
</head>

<body class="back_img">
    @include('template.header')
    <div class="d-flex flex-column min-100">
        <section class="main-tem">
            @include('template.sidepanel')
            <!-- main content -->
            <div class="right-content fix_div fix_div2">
                <div class="container">
                    <div class="main-border py-2 d-flex align-items-center gap-2">
                        <div>
                            <a href="{{ asset('/') }}"><img src="./imgs/home.png" alt=""
                                    class="img-fluid"></a>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-play-fill text-white"></i>
                            <p class="text-white m-0 font-22">Cart</p>
                        </div>
                    </div>
                    <div class="row pb-5">
                        <div class="col-xl-11 mx-auto mt-5">
                            <ul class="nav nav-pills mb-3 gap-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-home" type="button" role="tab"
                                        aria-controls="pills-home" aria-selected="true">Shopping Cart</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-profile" type="button" role="tab"
                                        aria-controls="pills-profile" aria-selected="false">Completed
                                        Orders</button>
                                </li>
                            </ul>

                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                    aria-labelledby="pills-home-tab">
                                    @if (count($unpaidproducts) > 0)
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <?php $num=1 ?>
                                            @foreach ($unpaidproducts as $unpaidproduct)
                                            <label for="pr-{{$num}}" class="d-flex">
                                                <input type="checkbox" id="pr-{{$num}}" class="checkbox" name="myCheckbox" value=" {{ $unpaidproduct['t_price'] }}">
                                                <input type="number" class="b_id bg-transparent d-none" name="book_id[]" value="{{ $unpaidproduct['bk_id'] }}">
                                                {{-- <input type="text" class="b_id bg-transparent" name="book_id[]" value=" {{ $unpaidproduct['bk_id'] }}"> --}}
                                                <div class="table-responsive w-100 myDiv mt-3">
                                                    <table class="table mb-0">
                                                        <thead>
                                                            <tr class="cyan-bg">
                                                                <th class="text-nowrap px-4 py-3">Image</th>
                                                                <th class="text-nowrap px-4 py-3">Activity Name</th>
                                                                <th class="text-nowrap px-4 py-3">Unit price</th>
                                                                <th class="text-nowrap px-4 py-3">People</th>
                                                                <th class="text-nowrap px-4 py-3 position-relative">
                                                                    Total
                                                                    <div class="position-x close-icon"><i
                                                                            class="bi bi-x"></i>
                                                                    </div>
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr class="light-bground">
                                                                <td class="align-middle text-nowrap px-4 py-2">
                                                                    <div><img src="./imgs/galal-garwan.png"
                                                                            alt="" class="img-galal">
                                                                    </div>
                                                                </td>
                                                                <td
                                                                    class="fw-bold align-middle text-nowrap px-4 py-2">
                                                                    {{ $unpaidproduct['tour_name'] }}
                                                                </td>
                                                                <td class="align-middle text-nowrap px-4 py-2">
                                                                    @php
                                                                        $nprice = $unpaidproduct['t_price'];
                                                                        $npeople = $unpaidproduct['people'];
                                                                        $singleprice = $nprice / $npeople;
                                                                    @endphp
                                                                    {{ $singleprice }}</td>
                                                                <td class="align-middle text-nowrap px-4 py-2">
                                                                    {{ $unpaidproduct['people'] }}</td>
                                                                <td class="align-middle text-nowrap px-4 py-2">
                                                                    {{ $unpaidproduct['t_price'] }}</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </label>
                                            <?php $num+=1 ?>
                                             @endforeach
                                        </div>
                                        <div class="col-lg-4 mt-lg-0 mt-3 contain">
                                            <div
                                                class="light-bground p-2 my-height d-flex flex-column justify-content-between">
                                                <div class="p-3">
                                                    <p class="font-semi">Orders Summary</p>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <p>SubTotal</p>
                                                        </div>
                                                        <div class="col-6">
                                                            <p class="sum">$<span id="totalSum">0.00</span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ids">

                                                </div>
                                                <div class="px-3">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <p>Grand Total</p>
                                                        </div>
                                                        <div class="col-6">
                                                            <p>1000</p>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <button type="button" data-bs-target="#myModal"
                                                            data-bs-toggle="modal"
                                                            class="mybutton border-0 text-white w-100 py-2 rounded-2">Proceed
                                                            to Pay</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                    aria-labelledby="pills-profile-tab">
                                    @if (count($products) > 0)
                                        <div class="row pb-5">
                                            @foreach ($products as $product)
                                            <div class="col-xl-8 my-2">
                                                    <div class="table-responsive">
                                                            <table class="table mb-0">
                                                                <thead>
                                                                    <tr class="cyan-bg">
                                                                        <th class="text-nowrap px-4 py-3">Image</th>
                                                                        <th class="text-nowrap px-4 py-3">Product Name</th>
                                                                        <th class="text-nowrap px-4 py-3">Unit price</th>
                                                                        <th class="text-nowrap px-4 py-3">People</th>
                                                                        <th
                                                                            class="text-nowrap px-4 py-3 position-relative">
                                                                            Total
                                                                        </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr class="light-bground">
                                                                        <td class="align-middle text-nowrap px-4 py-2">
                                                                            <div><img src="./imgs/galal-garwan.png"
                                                                                    alt="" class="img-galal">
                                                                            </div>
                                                                        </td>
                                                                        <td
                                                                            class="fw-bold align-middle text-nowrap px-4 py-2">
                                                                            {{ $product['tour_name'] }}
                                                                        </td>
                                                                        <td class="align-middle text-nowrap px-4 py-2">
                                                                        @php
                                                                            $nprice= $product['t_price'];
                                                                            $npeople= $product['people'];
                                                                            $singleprice =  $nprice / $npeople;
                                                                        @endphp
                                                                            {{ $singleprice }}</td>
                                                                        <td class="align-middle text-nowrap px-4 py-2">
                                                                            {{ $product['people'] }}</td>
                                                                        <td class="align-middle text-nowrap px-4 py-2">
                                                                            {{ $product['t_price'] }}</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                    </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    @else
                                        <div class="d-flex align-items-center mt-3 ">
                                            <i class="fas fa-exclamation-triangle text-danger fs-4 me-2"></i>
                                            <p class="text-danger fs-5">No record to show</p>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('template.footer')

    </div>
    <div class="custom-model res-model">
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
    </div>
    @include('template.jslinks')
    <script>
        $(document).ready(function () {
            // Event listener for checkbox changes
            $('.checkbox').change(function () {
                updateTotalSum();
            });
    
            // Function to update the total sum
            function updateTotalSum() {
                var totalSum = 0;
                // Iterate over checked checkboxes and sum their values
                $('.checkbox:checked').each(function () {
                    totalSum += parseFloat($(this).val());
                });
                // Update the displayed total sum
                $('#totalSum').text(totalSum.toFixed(2));
            }
        });
    </script>
    <script>
        $(document).ready(function () {
            $('.checkbox').change(function () {
                updateIds();
            });
            function updateIds() {
                $('.ids').empty();
                $('.checkbox:checked').each(function () {
                    var bookIdValue = $(this).siblings('.b_id').val();
                    $('.ids').append('<input type="number" class="book_id" name="book_id[]" value="' + bookIdValue + '">');
                });
            }
        });
    </script>
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
</html>
