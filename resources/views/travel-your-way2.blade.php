<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Travel your way detail</title>
    @include('template.csslinks')
</head>

<body class="">
    @include('template.header')
    <section class="main-tem">
        @include('template.sidepanel')
        <!-- main content -->
        <div class="right-content fix_div back_img py-5">
            <div class="container">
                <div class="main-border py-2 d-flex align-items-center gap-2">
                    <div>
                        <a href="{{ asset('home') }}" class="text-decoration-none">
                            <i class="bi bi-arrow-left text-dark sky-light pb-2 pt-1 px-2 rounded-2"></i>
                        </a>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <p class="text-white m-0 font-22">Travel your way</p>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-6">
                        <img src="./imgs/IMG_7.jpg" alt="" class="img-tree rounded-4">
                    </div>
                    <div class="col-lg-6 py-3 px-4">
                        <div class="row align-items-center">
                            <div class="col-sm-6 col-lg-12 col-xl-6 d-flex align-items-center gap-4 border-tb py-2 max">
                                <a href="#" class="d-flex align-items-center text text-decoration-none gap-2">
                                    <i class="bi bi-share border-golden rounded-circle px-2 py-1 golden-clr"></i>
                                    <p class="m-0 text-white">Share</p>
                                </a>
                                <a href="#" class="d-flex align-items-center text text-decoration-none gap-2">
                                    <i class="bi bi-plus border-golden rounded-circle px-2 py-1 golden-clr"></i>
                                    <p class="m-0 text-white">Add Story</p>
                                </a>
                            </div>
                            <div class="col-sm-6 col-lg-12 col-xl-6 mt-sm-0">
                                <div class="text-sm-end text-lg-start text-xl-end">
                                    <button type="button"
                                        class="d-inline-block mt-3 mt-sm-0 mt-lg-3 mt-xl-0 rate-button"
                                        data-bs-toggle="modal" data-bs-target="#myModal">
                                        Rate &
                                        Review
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div>
                                <h6 class="fw-bold golden-clr fs-5">Tour trail</h6>
                                <div class="d-flex align-items-center position-city-p">
                                    <p class="text-white">{{ session('trip')->cities }}</p>
                                </div>
                                <h6 class="fw-bold golden-clr fs-5">Tours Information</h6>
                                <div>
                                    <h6 class="golden-clr">Date</h6>
                                    <p class="text-white">{{ session('trip')->date }}</p>
                                </div>
                                <div>
                                    <h6 class="golden-clr">Tour Duration</h6>
                                    <p class="text-white">{{ session('trip')->days }}</p>
                                </div>
                                <div>
                                    <h6 class="golden-clr">No. of Travellers</h6>
                                    <p class="text-white">{{ session('trip')->persons }}</p>
                                </div>

                                <div>
                                    <h6 class="golden-clr">Transportation between cities</h6>
                                    <p class="text-white">{{ session('trip')->transportation }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-2 mt-3">
                            <div class="">
                                <div class="button_border rounded-pill">
                                    <button type="button" class="button_leniar_style px-5 rounded-pill "
                                        data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Book</button>
                                </div>
                            </div>
                            <div>
                                <div class="button_border rounded-pill">
                                    <button type="button" class="button_leniar_style px-5 rounded-pill ">Add to
                                        Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <footer class="sky-light py-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-11 mx-auto">
                    <div class="row justify-content-between align-items-end">
                        <div class="col-md-6">
                            <div class="d-flex align-items-center gap-2">
                                <div>
                                    <img src="./imgs/footer-logo.png" alt="" class="rounded-circle img-footer">
                                </div>
                                <div>
                                    <h4 class="m-0">Liberta<span class="sky-clr">d</span>elmund</h4>
                                </div>
                            </div>
                            <div class="mt-3">
                                <p class="mb-0">
                                    The word “Libertad” means “freedom” in Spanish, and so we are willing to
                                    change the concept of traveling by offering our visitors the opportunity to discover
                                    our land in his/her way: “Libertad- Travel your way”
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 d-flex justify-content-md-end mt-md-0 mt-3">
                            <div>
                                <div>
                                    <h5>Social Media:</h5>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <a href="https://www.tripadvisor.com/Attraction_Review-g294201-d26208912-Reviews-Libertad_Del_Mundo-Cairo_Cairo_Governorate.html"
                                        class="p-0"><img src="./imgs/owl-2.png" style="height: 40px; width: 40px;"
                                            alt=""></a>
                                    <a href="https://www.facebook.com/profile.php?id=100090555392220"
                                        class="p-0"><img src="./imgs/fb-2.png" style="height: 40px; width: 40px;"
                                            alt=""></a>
                                    <a href="mailto:info@libertadelmundo.com" class="p-0"><img
                                            src="./imgs/google-plus2.png" style="height: 40px; width: 40px;"
                                            alt=""></a>
                                    <a href="mailto:info@libertadelmundo.com" class="p-0"><img
                                            src="./imgs/youtube2.png" style="height: 40px; width: 40px;"
                                            alt=""></a>
                                    <a href="https://www.instagram.com/libertadelmundoofficial/?next=%2F"
                                        class="p-0"><img src="./imgs/insta2.png"
                                            style="height: 40px; width: 40px;" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-booking">
            <div class="modal-content light-bground py-3 rounded-4">
                <div class="modal-header border-0 pt-0 px-5">
                    <h1 class="modal-title fs-5 brown-clr">Rate & Review</h1>
                </div>
                <div class="modal-body pt-0 px-5">
                    <form action="">
                        <div>
                            <div class="rating">
                                <input type="radio" id="star5" name="rating" value="5">
                                <label for="star5"></label>
                                <input type="radio" id="star4" name="rating" value="4">
                                <label for="star4"></label>
                                <input type="radio" id="star3" name="rating" value="3">
                                <label for="star3"></label>
                                <input type="radio" id="star2" name="rating" value="2">
                                <label for="star2"></label>
                                <input type="radio" id="star1" name="rating" value="1">
                                <label for="star1"></label>
                            </div>
                        </div>
                        <div class="mt-3">
                            <textarea class="myInput" placeholder="Write" rows="3"></textarea>
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
                            <label for="" class="font-12">Select the date</label>
                            <input type="date" class="form-control shadow-none font-12" placeholder="date">
                        </div>
                        <div class="">
                            <label for="" class="font-12">No. of people</label>
                            <input type="number" class="form-control shadow-none font-12" placeholder="12">
                        </div>
                        <div class="">
                            <label for="" class="font-12">Total Price</label>
                            <input type="number" class="form-control shadow-none font-12" placeholder="12$">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button data-bs-target="#exampleModalToggle3" data-bs-toggle="modal"
                        class="btn mybutton px-4 border-0 rounded-pill">Continue with my booking</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModalToggle3" aria-hidden="true" aria-labelledby="exampleModalToggleLabel3"
        tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalToggleLabel3">Booking Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <h6 class="fw-bold ">Enter your details</h6>
                        <div class="">
                            <label for="" class="font-12">First Name</label>
                            <input type="text" class="form-control shadow-none font-12" placeholder="First Name">
                        </div>
                        <div class="">
                            <label for="" class="font-12">Family Name</label>
                            <input type="text" class="form-control shadow-none font-12" placeholder="Family Name">
                        </div>
                        <div class="">
                            <label for="" class="font-12">Nationality</label>
                            <input type="text" class="form-control shadow-none font-12" placeholder="Nationality">
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
                            <input type="tel" class="form-control shadow-none font-12"
                                placeholder="Phone Number">
                        </div>
                        <div class="mt-2">
                            <div class="d-flex flex-column">
                                <span for="" class="font-12">
                                    Passport Copy/ID for Egyptians
                                </span>
                                <label for="myImg2">
                                    <img id="blah2" src="./imgs/add_profile.png" alt=""
                                        class="profile-img">
                                </label>
                                <input type="file" name="img" class="d-none" id="myImg2"
                                    onchange="readURL(this);">
                            </div>
                        </div>
                        <h6 class="fw-bold mt-3">Travellers Detail</h6>
                        <h6>Traveller 1</h6>
                        <div class="">
                            <label for="" class="font-12">First Name</label>
                            <input type="text" class="form-control shadow-none font-12" placeholder="First Name">
                        </div>
                        <div class="">
                            <label for="" class="font-12">Family Name</label>
                            <input type="text" class="form-control shadow-none font-12" placeholder="Family Name">
                        </div>
                        <div class="">
                            <label for="" class="font-12">Date of Birth</label>
                            <input type="date" class="form-control shadow-none font-12" placeholder="Nationality">
                        </div>
                        <div class="mt-2">
                            <div class="d-flex flex-column">
                                <span for="" class="font-12">
                                    Passport Copy/ID for Egyptians
                                </span>
                                <label for="myImg2">
                                    <img id="blah2" src="./imgs/add_profile.png" alt=""
                                        class="profile-img">
                                </label>
                                <input type="file" name="img" class="d-none" id="myImg2"
                                    onchange="readURL(this);">
                            </div>
                        </div>
                        <h6>Traveller 2</h6>
                        <div class="">
                            <label for="" class="font-12">First Name</label>
                            <input type="text" class="form-control shadow-none font-12" placeholder="First Name">
                        </div>
                        <div class="">
                            <label for="" class="font-12">Family Name</label>
                            <input type="text" class="form-control shadow-none font-12" placeholder="Family Name">
                        </div>
                        <div class="">
                            <label for="" class="font-12">Date of Birth</label>
                            <input type="date" class="form-control shadow-none font-12" placeholder="Nationality">
                        </div>
                        <div class="mt-2">
                            <div class="d-flex flex-column">
                                <span class="font-12">
                                    Passport Copy/ID for Egyptians
                                </span>
                                <label for="myImg2">
                                    <img id="blah2" src="./imgs/add_profile.png" alt=""
                                        class="profile-img">
                                </label>
                                <input type="file" name="img" class="d-none" id="myImg2"
                                    onchange="readURL(this);">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button data-bs-target="#exampleModalToggle4" data-bs-toggle="modal"
                        class="btn mybutton px-4 border-0 rounded-pill">Confirm my Booking</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModalToggle4" aria-hidden="true" aria-labelledby="exampleModalToggleLabel4"
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
