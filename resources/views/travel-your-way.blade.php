<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Travel Your way</title>
    @include('template.csslinks')
</head>

<body class="">
    @include('template.header')
    <section class="main-tem">
        @include('template.sidepanel')
        <!-- main content -->
        <div class="right-content ftr fix_div back_img py-5 ">
            <div class="container-fluid px-md-5 px-3 mb-lg-5 pb-lg-5">
                <div class="main-border py-2 d-flex align-items-center gap-2">
                    <div>
                        <a href="{{ asset('/') }}">
                            <img src="./imgs/home.png" alt="" class="img-fluid">
                        </a>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <i class="bi bi-play-fill text-white"></i>
                        <p class="text-white m-0 font-22">Events</p>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-xl-10">
                        <div class="row align-items-center border-golden rounded-4 p-sm-3 p-2 mx-sm-0 mx-2">
                            <div class="col-12">
                                <h3 class="text-white m-0">Search:</h3>
                            </div>
                            <div class="row p-0">
                                <div class="col-lg-3 col-sm-4 col-6 mt-3">
                                    <input type="text"
                                        class="form-control sky-bg shadow-none text-dark border border-dark py-2"
                                        placeholder="Keyword">
                                </div>
                                <div class="col-lg-3 col-sm-4 col-6 mt-3">
                                    <input type="date"
                                        class="form-control sky-bg shadow-none text-dark border border-dark py-2"
                                        placeholder="From">
                                </div>
                                <div class="col-lg-3 col-sm-4 col-6 mt-3">
                                    <input type="date"
                                        class="form-control sky-bg shadow-none text-dark border border-dark py-2"
                                        placeholder="To">
                                </div>
                                <div class="col-lg-3 col-sm-4 col-6 mt-3">
                                    <div>
                                        <button
                                            class="py-2 px-3 border border-warning bg-warning rounded-3 d-flex align-items-center">
                                            <i class="bi bi-search text-dark me-2"></i>
                                            Search
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-10">
                        <div class="row mt-4" id="content">
                            @foreach ($events as $event)
                                <div class="col-lg-4 col-md-6 mt-3 position-relative">
                                    <div class="bg-white rounded-4 p-3 shadow">
                                        <div class="d-flex align-items-center gap-2 border-bottom pb-4">
                                            <div class="sky-bg rounded-3 p-3 crdate">
                                                <h4 class="m-0 fs-6 fw-normal">
                                                    {{ \Carbon\Carbon::parse($event['st_date'])->format('d/m') }}</h4>
                                            </div>
                                            <div>
                                                <div>
                                                    <i class="bi bi-geo-alt"></i>
                                                    <span class="font-12">{{ $event['event_name'] }}-
                                                        {{ $event['city_name'] }}</span>
                                                </div>
                                                <div class="d-flex align-items-center gap-2">
                                                    <div>
                                                        <i class="bi bi-clock-history"></i>
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span class="font-12">
                                                            {{ \Carbon\Carbon::parse($event['st_date'])->format('d/m/Y') }},
                                                            {{ $event['st_time'] }}
                                                        </span>
                                                        <span
                                                            class="font-12">{{ \Carbon\Carbon::parse($event['end_date'])->format('d/m/Y') }},
                                                            {{ $event['end_time'] }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <h5>{{ $event['heading'] }}</h5>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <button
                                                    class="read-more bg-transparent border-0 brown-clr p-0 m-0 text-decoration-underline">Read
                                                    More</button>
                                                <button
                                                    class="read-less bg-transparent border-0 brown-clr p-0 m-0 text-decoration-underline">Read
                                                    Less</button>
                                                <div class="">
                                                    <p class="mb-0 sky-clr bk-1" style="cursor: pointer;">Book</p>
                                                    <div class="position-form bg-white rounded-3 p-3">
                                                        <form action="">
                                                            <div>
                                                                <label for="">First Name</label>
                                                                <input type="text" class="form-control shadow-none"
                                                                    placeholder="First name">
                                                            </div>
                                                            <div>
                                                                <label for="">Last Name</label>
                                                                <input type="text" class="form-control shadow-none"
                                                                    placeholder="Last name">
                                                            </div>
                                                            <div>
                                                                <label for="">Email Address</label>
                                                                <input type="email" class="form-control shadow-none"
                                                                    placeholder="Email address">
                                                            </div>
                                                            <div>
                                                                <label for="">Phone Number</label>
                                                                <input type="number" class="form-control shadow-none"
                                                                    placeholder="Phone number">
                                                            </div>
                                                            <div>
                                                                <label for="">Qty.</label>
                                                                <input type="number" class="form-control shadow-none"
                                                                    placeholder="Qty.">
                                                            </div>
                                                            <div>
                                                                <input type="button"
                                                                    class=" btn shadow-none golden-bg mt-2"
                                                                    value="Confirm"
                                                                    data-bs-target="#exampleModalToggle3"
                                                                    data-bs-toggle="modal">
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="brown-clr mb-0 read-text">{{ $event['des'] }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="mt-3">
                        <div>
                            {{ $events->links() }}
                        </div>
                </div>
            </div>
        </div>
    </section>
    @include('template.footer')
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
                        <h6>Terms & Conditions/Cancellation policy</h6>
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
                            <img class="w-25" src="./imgs/paypal-logo-png-16.png" alt="">
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
