<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product Details</title>
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
        <div class="right-content ftr fix_div cyan-bg py-3 h-100" style="min-height: calc(100vh - 53px);">
            <div class="container ">
                <div class="main-border py-2 d-flex align-items-center gap-2">
                    <div>
                        <a href='{{ URL::previous() }}' class="text-decoration-none"><i
                                class="bi bi-arrow-left text-dark sky-light pb-2 pt-1 px-2 rounded-2"></i></a>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <p class="text-white m-0 font-22">{{ $category->catg }}</p>
                    </div>
                </div>
                <div class="row px-3 mt-3 align-items-start">
                    <div class="col-lg-6">
                        <img src="<?php echo asset('uploads/' . $category->img); ?>" alt="" class="img-tree rounded-4">
                    </div>
                    <div class="col-lg-6 py-3 px-4">
                        <div class="row mt-3">
                            <p class="golden-clr fs-5 fw-bold mb-0">Description:</p>
                            <p class="text-white">
                                {{ $category->des }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center mt-4 ms-3 gap-2">
                    <p class="text-white m-0 fs-4 fw-bold">Products</p>
                </div>
                @if (count($products) > 0)
                    <div class="w-100">
                        <div class="px-3">
                            <div class="position-relative my-3">
                                <h5 class="text-white"></h5>
                                <div class="row">
                                    {{-- add autoplay_2 in row --}}
                                    @foreach ($products as $product)
                                        <div class="text-dark col padimg my-3 col-md-6 col-lg-4 ">
                                            <div class="bg-white h-100 rounded-4">
                                                <img class="img-fluid w-100" src="<?php echo asset('uploads/' . $product['img']); ?>" alt="">
                                                <div class=" dis1 pb-3">
                                                    <div
                                                        class="d-flex px-3 pt-3 bg-white justify-content-between align-items-center">
                                                        <div>
                                                            <p class="mb-0 fs-6 fw-bold name">{{ $product->name }}</p>
                                                            @if ($product->price !== null)
                                                                <p class="mb-0 fs-6 fw-bold ">Price</p>
                                                                <p class="mb-0 fs-6"><span
                                                                        class="price">{{ $product->price }}</span> USD
                                                                </p>
                                                            @endif
                                                            @if ($product->p_id !== null)
                                                                <p class="mb-0 fs-6 fw-bold ">Price</p>
                                                                <ul class="ps-0 ms-3">
                                                                    @if ($product->mlfifty !== null)
                                                                        <li><span class="fw-bold"> 50 ml:
                                                                            </span>{{ $product->mlfifty }} USD</li>
                                                                    @endif
                                                                    @if ($product->mlhundred !== null)
                                                                        <li><span class="fw-bold"> 100 ml:
                                                                            </span>{{ $product->mlhundred }} USD</li>
                                                                    @endif
                                                                    @if ($product->sm !== null)
                                                                        <li><span class="fw-bold"> sm:
                                                                            </span>{{ $product->sm }} USD</li>
                                                                    @endif
                                                                    @if ($product->md !== null)
                                                                        <li><span class="fw-bold"> md:
                                                                            </span>{{ $product->md }} USD</li>
                                                                    @endif
                                                                    @if ($product->lg !== null)
                                                                        <li><span class="fw-bold"> lg:
                                                                            </span>{{ $product->lg }} USD</li>
                                                                    @endif
                                                                </ul>
                                                            @endif
                                                        </div>
                                                        <form action="/product_next" method="post">
                                                            @csrf
                                                            <input type="number" name="myp_id" class="d-none"
                                                                value="{{ $product->product_id }}">
                                                            <input type="text" name="product_name" class="d-none"
                                                                value="{{ $product->name }}">
                                                            <div class="button_border rounded-pill ms-3">
                                                                <button type="submit"
                                                                    class="button_leniar_style open-book px-4 rounded-pill fs-12 btn-up buy-now-button">Buy
                                                                    Now</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="" style="max-height:100px;overflow:auto ">
                                                        <p class="mb-0 px-3 pr-des">
                                                            {{ $product['des'] }}
                                                        </p>
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
                        <p class="text-danger mb-0 fs-5">No record to show</p>
                    </div>
                @endif
            </div>
        </div>
    </section>
    @include('template.footer')

    @if (auth()->check())

        @if (session('bookingm'))
            <div class="custom-model book-model">
                <form action="/bookingstep" method="POST" enctype="multipart/form-data" class="mt-2">
                    @csrf
                    <div class="d-flex justify-content-between border-1 pb-3 border-bottom px-3 ">
                        <h1 class="modal-title fs-5 ">Item Details</h1>
                        <i class="fas fa-times text-secondary fs-4 close-m"></i>
                    </div>
                    <div class="tbody px-3" id="tbodyContainer">
                        <div class="t-data">
                            @if (session('bookproduct'))
                                @foreach (session('bookproduct') as $bookproduct)
                                    <input type="number" value="{{ $bookproduct->product_id }}" class="d-none" name="tour_id">
                                    <input type="text" value="{{ $bookproduct->product_name }}" class="d-none" name="tour_name">

                                    <div class="mt-3">
                                        <label for="" class="fs-6">Quantity</label>
                                        <input type="number" name="people" value="1"
                                            class="bg-transparent border border-1 border-dark w-100 px-2 rounded-3 py-2 text-dark quantity"
                                            min="1" required>
                                    </div>
                                    @if ($bookproduct->p_id !== null)
                                        <label for="" class="fs-6 mt-3">Choose Size</label>
                                        <select name="ml" id="ml"
                                            class="bg-transparent border-1 border-dark w-100 px-2 rounded-3 py-2 text-dark"
                                            required>
                                            <option value="" selected disabled hidden>Select Size</option>
                                            @if ($bookproduct->mlfifty !== null)
                                                <option value="{{ $bookproduct->mlfifty }}">50 ml</option>
                                            @endif
                                            @if ($bookproduct->mlhundred !== null)
                                                <option value="{{ $bookproduct->mlhundred }}">100 ml</option>
                                            @endif
                                            @if ($bookproduct->sm !== null)
                                                <option value="{{ $bookproduct->sm }}">sm</option>
                                            @endif
                                            @if ($bookproduct->md !== null)
                                                <option value="{{ $bookproduct->md }}">md</option>
                                            @endif
                                            @if ($bookproduct->lg !== null)
                                                <option value="{{ $bookproduct->lg }}">lg</option>
                                            @endif
                                        </select>
                                    @endif
                                    <div>
                                        @if ($bookproduct->p_id !== null)
                                            <input type="number"
                                                class="bg-transparent border border-1 border-dark w-100 px-2 rounded-3 py-2 text-dark sprize  d-none"
                                                readonly>
                                        @else
                                            <input type="number"
                                                class="bg-transparent border border-1 border-dark w-100 px-2 rounded-3 py-2 text-dark sprize  d-none"
                                                value="{{ $product->price }}" readonly>
                                        @endif
                                        <label for="" class="fs-6 mt-3">Total Price</label>
                                        <input type="number" name="tprize"
                                            class="bg-transparent border border-1 border-dark w-100 px-2 rounded-3 py-2 text-dark stprize"
                                            readonly>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <div class="mt-3 d-flex justify-content-end">
                        <input type="submit" value="Confirm my booking" name="bookingnew"
                            class="w-100 mx-3 w-auto text-dark border-0 mybutton px-4 rounded-pill py-2 ">
                    </div>
                </form>
            </div>

        @endif
         @if (session('bookingshow'))
            <div class="book2-model custom-model">
                <form action="/savebooking" method="POST" enctype="multipart/form-data" class="mt-2">
                    @csrf
                    <div class="d-flex justify-content-between border-1 pb-3 border-bottom px-3 ">
                        <h1 class="modal-title fs-5 ">Booking Data</h1>
                        <i class="fas fa-times text-secondary fs-4 close-m"></i>
                    </div>
                    <div class="tbody px-3" id="tbodyContainer">
                        <div class="t-data">
                            <div class="">
                                <label for="f_name" class="font-12">Name</label>
                                <input type="text" class="form-control shadow-none font-12" placeholder="First Name"
                                    id="f_name"  value="{{auth()->user()->name}}" required readonly>
                            </div>
                            <div class="">
                                <label for="email" class="font-12">Email</label>
                                <input type="email" class="form-control shadow-none font-12" placeholder="Email"
                                    id="email"  value="{{auth()->user()->email}}" required readonly>
                            </div>
                            <div class="">
                                <label for="phone" class="font-12">Phone number</label>
                                <input type="text" class="form-control shadow-none font-12"
                                    placeholder="Date of birth" id="phone"  value="{{auth()->user()->phone}}" required readonly>
                            </div>
                            <div class="">
                                <label for="address" class="font-12">Address</label>
                                <input type="text" class="form-control shadow-none font-12"  placeholder="Address" id="address" name="address" required >
                            </div>
                            <input type="number" name="tour_id" value="{{ session('bookdata.tour_id') }}" class="d-none" readonly>
                            <input type="text" name="tour_name" value="{{ session('bookdata.tour_name') }}" class="d-none" readonly>
                            <input type="text" name="role" value="6" class="d-none" readonly>
                            <input type="number" name="peoplenew" value="{{ session('bookdata.people') }}" class="d-none" readonly>
                            <input type="text" name="t_price" value="{{ session('bookdata.tprize') }}" class="d-none" readonly>
                        </div>
                    </div>
                    <div class="mt-3 d-flex justify-content-end">
                        <input type="submit" value="Confirm my booking" name="booking"
                            class="w-100 mx-3 w-auto text-dark border-0 mybutton px-4 rounded-pill py-2 ">
                    </div>
                </form>
            </div>
        @endif
         @if (session('showm'))
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
                                value="{{ session('t_price') }}" name="amount" readonly>
                            <input type="text" class='form-control card-number d-none'
                                value="{{ session('latestBookingId') }}" name="booking_id" readonly>
                        </div>
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
    @else
        <div class="custom-model book-model px-4 pb-5">
            <div class="d-flex justify-content-between border-1 pb-3 border-bottom px-3 ">
                <h1 class="modal-title fs-5 ">Alert</h1>
                <i class="fas fa-times text-secondary fs-4 close-m"></i>
            </div>
            <div class="d-flex align-items-center mt-3  mb-5">
                <i class="fas fa-exclamation-triangle text-danger fs-4 me-2"></i>
                <p class="text-danger mb-0 fs-5">In order to book a product, login first</p>
            </div>
        </div>
    @endif
    <!-- Add this script section at the end of your HTML -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var buyNowButtons = document.querySelectorAll('.buy-now-button');
            buyNowButtons.forEach(function(button) {
                button.addEventListener('click', function() {
                    var productContainer = button.closest('.padimg');
                    var productPrice = productContainer.querySelector('.price').innerText;
                    document.querySelector('.pricenew').value = productPrice;

                    var productName = productContainer.querySelector('.name').innerText;
                    document.querySelector('.namenew').value = productName;

                    var productId = productContainer.querySelector('.pid').innerText;
                    document.querySelector('.pidnew').value = productId;
                });
            });
        });
    </script>

    @include('template.jslinks')
    <script>
        $(".res-model").hide();
        // $(".open-book").click(function() {
        //     $(".book-model").show();
        // });
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
            var currentDate = new Date();
            var formattedDate = currentDate.toISOString().split('T')[0];
            $('#dob').attr('max', formattedDate);
        });


        $(document).ready(function() {
            $('#ml').change(function() {
                var selectedValue = $(this).val();
                $('.sprize').val(selectedValue).trigger("input"); // Trigger input event
            });

            // Function to update stprize value
            function updateStprize() {
                var quantityValue = parseFloat($(".quantity").val()) || 0;
                var sprizeValue = parseFloat($(".sprize").val()) || 0;
                var stprizeResult = quantityValue * sprizeValue;
                $(".stprize").val(stprizeResult);
            }

            // Bind the updateStprize function to input change events
            $(".quantity, .sprize").on("input", function() {
                updateStprize();
            });

            // Trigger the input event manually to handle pre-existing values
            $(".quantity, .sprize").trigger("input");
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
</body>

</html>
