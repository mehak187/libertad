<?php
use Carbon\Carbon;
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Travel your way detail</title>
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
        <div class="right-content fix_div back_img py-5">
            <div class="container">
                <div class="main-border py-2 d-flex align-items-center gap-2">
                    <div>
                        <a href="/{{ URL::previous() }}" class="text-decoration-none">
                            <i class="bi bi-arrow-left text-dark sky-light pb-2 pt-1 px-2 rounded-2"></i>
                        </a>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <p class="text-white m-0 font-22">Travel your way</p>
                    </div>
                </div>
                <div class="row mt-3 flex-column flex-column-reverse flex-lg-row">
                    <div class="col-lg-6 h-100">
                        <div class="autoplay-travel mb-3 px-1 h-100">
                            @foreach ($tripcities as $tripcity)
                                <div class="slide mx-2 city-result mt-3">
                                    <div class="container1 container-travel">
                                        <img src="<?php echo asset('uploads/' . $tripcity['tourimg']); ?>" alt="Avatar" class="image1 image1_2">
                                        <a href="/{{ 'cities_detail/' . $tripcity['id'] }}" class="overlay ">
                                            <div class="text1 d-flex align-items-center justify-content-between">
                                                <span class="text-white searchable">{{ $tripcity['Cityname'] }}</span>
                                                <i class="bi bi-heart fs-5" style="color: #4EBFC7;"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="col-lg-6 py-3 px-4">
                        <div class="row align-items-center">
                            <div class="col-sm-6 col-lg-12 col-xl-6 d-flex align-items-center gap-4 border-tb py-2 max">
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
                            <div>
                                <h6 class="fw-bold golden-clr fs-5">Tour trail</h6>
                                <div class="d-flex align-items-center position-city-p">
                                    @foreach ($tripcities as $tripcity)
                                        <p class="text-white">{{ $tripcity['Cityname'] }}</p>
                                    @endforeach
                                </div>

                                <h6 class="fw-bold golden-clr fs-5">Tours Information</h6>
                                @php
                                    $originalDate = $trip->date;
                                    $days = $trip->days;
                                    $carbonDate = Carbon::parse($originalDate);
                                    $newDate = $carbonDate->addDays($days);
                                @endphp
                                <div>
                                    <h6 class="golden-clr">Date</h6>
                                    <p class="text-white">{{ $trip->date }} to {{ $newDate->format('Y-m-d') }}</p>
                                </div>
                                <div>
                                    <h6 class="golden-clr">Tour Duration</h6>
                                    <p class="text-white">{{ $trip->days }}</p>
                                </div>
                                <div>
                                    <h6 class="golden-clr">No. of Travellers</h6>
                                    <p class="text-white">{{ $trip->persons }}</p>
                                </div>

                                <div>
                                    <h6 class="golden-clr">Transportation between cities</h6>
                                    <p class="text-white">{{ $trip->transportation }}</p>
                                </div>
                                <div>
                                    <h6 class="golden-clr">Accommodation</h6>
                                    <p class="text-white">{{ $trip->accommodation }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap align-items-center gap-2 mt-3">
                            <div class="">
                                <div class="button_border rounded-pill">
                                    <button type="button"
                                        class="button_leniar_style px-5 rounded-pill open-res">Book</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                {{-- ---------cities------- --}}
                {{-- <div class="row me-3 mt-4">
                    <div class="col-11">
                       
                    </div>
                </div> --}}
            </div>
        </div>
    </section>


    @include('template.footer')
    <div class="custom-model res-model">
        <form name="booking" action="/tripbooking" method="POST" enctype="multipart/form-data" class="mt-2">
            @csrf
            <div class="d-flex justify-content-between border-1 pb-3 border-bottom px-3 ">
                <h1 class="modal-title fs-5 ">Booking Data</h1>
                <i class="fas fa-times text-secondary fs-4 close-m"></i>
            </div>
            <input type="number" class="d-none" name="trip_id" value="{{ $trip->id }}">
            <div class="tbody px-3" id="tbodyContainer">
                <div class="t-data">
                    {{-- <h6 class="mt-3">Traveller 1</h6> --}}
                    <div class="">
                        <label for="f_name" class="font-12">First Name</label>
                        <input type="text" class="form-control shadow-none font-12" placeholder="First Name"
                            id="f_name" name="f_name" required>
                    </div>
                    <div class="">
                        <label for="l_name" class="font-12">Family Name</label>
                        <input type="text" class="form-control shadow-none font-12" placeholder="Last Name"
                            id="l_name" name="l_name" required>
                    </div>
                    <div class="">
                        <label for="nationality" class="font-12">Nationality</label>
                        <input type="text" class="form-control shadow-none font-12" placeholder="nationality"
                            id="nationality" name="nationality" required>
                    </div>
                    <div class="">
                        <label for="email" class="font-12">Email</label>
                        <input type="email" class="form-control shadow-none font-12" placeholder="Email"
                            id="email" name="email" required>
                    </div>
                    <div class="">
                        <label for="phone" class="font-12">Phone No.</label>
                        <input type="phone" class="form-control shadow-none font-12" placeholder="phone"
                            id="phone" name="phone" required>
                    </div>

                </div>
            </div>
            <div class="mt-3 d-flex justify-content-end">
                <input type="submit" value="Confirm my booking" name="booking"
                    class="w-100 mx-3 w-auto text-dark border-0 mybutton px-4 rounded-pill py-2 ">
            </div>
        </form>
    </div>
    @if (session('showm'))
        <div class="custom-model show-model">
            <form action="/check" method="POST">
                @csrf
                <div class="d-flex justify-content-between border-1 pb-3 border-bottom px-3 ">
                    <h1 class="modal-title fs-5 ">Summary</h1>
                    <i class="fas fa-times text-secondary fs-4 close-m"></i>
                </div>
                <div class="px-3">
                    <div class="mt-2">
                        <h6>Tour Name</h6>
                        <p>{{ $trip->accommodation }}</p>
                    </div>
                    <div class="">
                        <h6>Cities</h6>
                        <p class="mb-2">
                            @foreach ($tripcities as $tripcity)
                                <p class="">{{ $tripcity['Cityname'] }}</p>
                            @endforeach
                        </p>
                    </div>
                    <div class="">
                        <h6>Tour duration</h6>
                        <p>{{ $trip->days }}</p>
                    </div>
                    <div class="">
                        <h6>Date</h6>
                        <p>{{ $trip->date }} to {{ $newDate->format('Y-m-d') }}</p>
                    </div>
                    <div class="">
                        <h6>No. of travellers</h6>
                        <p>{{ $trip->persons }}</p>
                    </div>
                    <div class="">
                        <h6>Transportation between cities</h6>
                        <p>{{ $trip->transportation }}</p>
                    </div>
                    <div class="">
                        <h6>Accommodation</h6>
                        <p>{{ $trip->accommodation }}</p>
                    </div>
                    
                </div>
                <div class="d-flex align-items-center mx-3 border border-1 rounded-3 px-3 py-2">
                    <label for="check" class="fs-6">Thank u for choosing us. Our team will contact u within 24 hours
                </div>
                {{-- <div class="mt-3 d-flex justify-content-end">
                    <button class="text-secondary fs-4 close-m w-100 mx-3 w-auto text-dark border-0 mybutton px-4 text-center rounded-pill py-2">OK</button>
                </div> --}}
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
            var currentDate = new Date();
            var formattedDate = currentDate.toISOString().split('T')[0];
            $('#dob').attr('max', formattedDate);
        });
    </script>
</body>
<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-booking">
        <div class="modal-content light-bground py-3 rounded-4">
            <div class="modal-header border-0 pt-0 px-5">
                <h1 class="modal-title fs-5 brown-clr">Rate & Review</h1>
            </div>
            <div class="modal-body pt-0 px-5">
                <form action="/tripreview" enctype="multipart/form-data" method="POST">
                    @csrf
                    <input type="number" class="d-none" name="stour_id" value="{{ $trip->id }}">
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
                </form>
            </div>
        </div>
    </div>
</div>

</html>
