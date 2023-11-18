<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Accommodation</title>
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
                                <span class="step_circle ">01.</span>
                                <span class="step_label">
                                    <a href="home-libertad" class="mb-0 fs-6 ">Home</a>
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
                                <span class="step_circle active">04.</span>
                                <span class="step_label">
                                    <a href="{{ asset('hotels') }}" class="mb-0 fs-6 active">Accommodation</a>
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
                    <div class="container-fluid">
                        @if (isset($error))
                        <div class="mt-md-0 mt-3">
                            <p class="content_1_heading mb-0">
                                <span class=" travel_text">Accomodation</span>
                            </p>
                        </div>
                            <div class="d-flex align-items-center mt-3 ">
                                <i class="fas fa-exclamation-triangle text-danger fs-4 me-2"></i><p class="text-danger fs-5 mb-0">No content to show</p>
                            </div>
                        @else
                            <div class="sidebar_tab_content first_slider  position-relative mt-md-0 mt-3">
                                <div class="slider_popup pb-4 px-sm-3 px-2 pt-3">
                                    <div class="d-flex flex-wrap align-items-center gap-2 ">
                                        <h5 class="my-auto" style="color: #E2BE4E;">Search Accommodation:</h5>
                                        <div class="button_border rounded-pill ms-auto mt-3">
                                            <button class="button_leniar_style px-4 rounded-pill fs-12"
                                                data-bs-toggle="modal" data-bs-target="#propertylisting">List your
                                                property</button>
                                        </div>
                                    </div>
                                    <div class="container-fluid">
                                        <div class="d-flex align-items-end">
                                            <div class="search-flex d-flex align-items-end flex-wrap">
                                                <div class="input-flex d-flex align-items-center flex-wrap">
                                                    <div class="hotel-input">
                                                        <label for="" class="fs-12 text-white">Select City</label>
                                                        <select name="" id=""
                                                            class="form-select bg_map1 text-white py-2">
                                                            <option value="">Sialkot</option>
                                                            <option value="">Lahore</option>
                                                            <option value="">Gujrat</option>
                                                        </select>
                                                    </div>
                                                    <div class="hotel-input">
                                                        <label for="" class="fs-12 text-white">Check in Date</label>
                                                        <input type="date" name=""
                                                            class="form-control bg_map1 text-white py-2" id="">
                                                    </div>
                                                    <div class="hotel-input">
                                                        <label for="" class="fs-12 text-white">Check out
                                                            Date</label>
                                                        <input type="date" name=""
                                                            class="form-control bg_map1 text-white py-2" id="">
                                                    </div>
                                                </div>
                                                <div class="hotel-input2 d-flex flex-column">
                                                    <label for="" class="fs-12 text-white">No. of People</label>
                                                    <div class="d-flex flex-wrapm">
                                                        <div style="width: 20%;" class="w1">
                                                            <input type="number" value="1"
                                                                class="form-control bg_map1 text-white py-2 right_border_r"
                                                                name="" id="">
                                                        </div>
                                                        <div style="width: 40%;" class="w2">
                                                            <select name="" id=""
                                                                class="form-select bg_map1 text-white py-2 rounded-0">
                                                                <option value="">Adults</option>
                                                                <option value="">Adults 1</option>
                                                            </select>
                                                        </div>
                                                        <div style="width: 40%;" class="w3">
                                                            <select name="" id=""
                                                                class="form-select bg_map1 text-white py-2 left_border_r">
                                                                <option value="">Children</option>
                                                                <option value="">Children 1</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="myHotel d-flex align-items-end">
                                                <div class="">
                                                    <button class="btn p-0" style="width: 2.5rem;">
                                                        <img src="./imgs/review_button.png" class=""
                                                            style="width: 2.6rem;" alt="">
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pt-2 mt-md-0 mt-3">
                                    <p class="mb-3">
                                        <span class=" travel_text text-uppercase">Recommended</span>
                                        <span class="way_color text-uppercase">Accommodation</span>
                                    </p>
                                </div>
                                @if (@isset($hotels1) && @isset($hotels2))
                                    <div class="row me-3">
                                        <div class="col-11">
                                            <div class="autoplay mb-3 px-1">
                                                @foreach ($hotels1 as $hotel1)
                                                    <div class="slide mx-2">
                                                        <a href="{{ 'accomodation_detail1/' . $hotel1['id'] }}"
                                                            class="text-decoration-none text-dark">
                                                            <div class="card first_card_slider border-0">
                                                                <img src="<?php echo asset('uploads/' . $hotel1['tourimg']); ?>" alt="Avatar"
                                                                    class="image1_2_duplicate rounded_top">
                                                                <div class="card-body card_bottom"
                                                                    style="background-color: #E2BE4E;">
                                                                    <div class="d-flex justify-content-between">
                                                                        <p class="mb-0 fs-12">{{ $hotel1['name'] }}</p>
                                                                        <p class="mb-0 fs-12 text-white"># of rooms:
                                                                            {{ $hotel1['rooms'] }}</p>
                                                                    </div>
                                                                    <p class="mb-0 fs-12">
                                                                        <i class="bi bi-geo-alt-fill me-2"></i>
                                                                        {{ $hotel1['location'] }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row me-3">
                                        <div class="col-11">
                                            <div class="autoplay mb-3 px-1">
                                                @foreach ($hotels2 as $hotel2)
                                                    <div class="slide mx-2">
                                                        <a href="{{ 'accomodation_detail1/' . $hotel2['id'] }}"
                                                            class="text-decoration-none text-dark">
                                                            <div class="card first_card_slider border-0">
                                                                <img src="<?php echo asset('uploads/' . $hotel2['tourimg']); ?>" alt="Avatar"
                                                                    class="image1_2_duplicate rounded_top">
                                                                <div class="card-body card_bottom"
                                                                    style="background-color: #E2BE4E;">
                                                                    <div class="d-flex justify-content-between">
                                                                        <p class="mb-0 fs-12">{{ $hotel2['name'] }}</p>
                                                                        <p class="mb-0 fs-12 text-white"># of rooms:
                                                                            {{ $hotel2['rooms'] }}</p>
                                                                    </div>
                                                                    <p class="mb-0 fs-12">
                                                                        <i class="bi bi-geo-alt-fill me-2"></i>
                                                                        {{ $hotel2['location'] }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="row ">
                                        <div class="col-xl-10 col-md-12 col-11">
                                            <div class="autoplay_2 mb-3">
                                                @foreach ($hotels as $hotel)
                                                    <div class="slide mx-2">
                                                        <a href="{{ 'accomodation_detail1/' . $hotel['id'] }}"
                                                            class="text-decoration-none text-dark">
                                                            <div class="card first_card_slider border-0">
                                                                <img src="<?php echo asset('uploads/' . $hotel['tourimg']); ?>" alt="Avatar"
                                                                    class="image1_2_duplicate rounded_top">
                                                                <div class="card-body card_bottom"
                                                                    style="background-color: #E2BE4E;">
                                                                    <div class="d-flex justify-content-between">
                                                                        <p class="mb-0 fs-12">{{ $hotel['name'] }}</p>
                                                                        <p class="mb-0 fs-12 text-white"># of rooms:
                                                                            {{ $hotel['rooms'] }}</p>
                                                                    </div>
                                                                    <p class="mb-0 fs-12">
                                                                        <i class="bi bi-geo-alt-fill me-2"></i>
                                                                        {{ $hotel['location'] }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        @endif
                        <div>
                            @includeif('template.social_mbl')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="modal" id="propertylisting" tabindex="-1" aria-labelledby="propertylistingLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="">
                    <div class="row">
                        <div class="col-12 bg-white rounded-4">
                            <div class="px-3 border-golden1 d-flex justify-content-between align-items-center">
                                <div class="">
                                    <h5 class="mb-0">List your property:</h5>
                                </div>
                                <div>
                                    <button type="button" data-bs-dismiss="modal"
                                        class="bg-transparent border-0 p-0"><i class="bi bi-x fs-1"></i></button>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-lg-4 col-sm-6 ">
                                    <label for="" class="font-12">Property name:</label>
                                    <input type="text" class="form-control shadow-none border border-dark font-12"
                                        placeholder="Property name here">
                                </div>
                                <div class="col-lg-4 col-sm-6 mt-sm-0 mt-3">
                                    <label for="" class="font-12">Location:</label>
                                    <input type="text" class="form-control shadow-none border border-dark font-12"
                                        placeholder="Location of the hotels here">
                                </div>
                                <div class="col-lg-4 col-sm-6 mt-lg-0 mt-3">
                                    <label for="" class="font-12">Number of rooms:</label>
                                    <input type="number" class="form-control shadow-none border border-dark font-12"
                                        placeholder="01">
                                </div>
                                <div class="col-lg-4 col-sm-6 mt-3">
                                    <label for="" class="font-12">Capacity/no of people</label>
                                    <input type="number" class="form-control shadow-none border border-dark font-12"
                                        placeholder="01">
                                </div>
                                <div class="col-lg-4 col-sm-6 mt-3">
                                    <label for="" class="font-12">From:</label>
                                    <input type="date" class="form-control shadow-none border border-dark font-12">
                                </div>
                                <div class="col-lg-4 col-sm-6 mt-3">
                                    <label for="" class="font-12">To:</label>
                                    <input type="date" class="form-control shadow-none border border-dark font-12">
                                </div>
                                <div class="col-lg-4 col-sm-6 mt-3">
                                    <label for="" class="font-12">Rent duration category:</label>
                                    <select class="form-select shadow-none border border-dark font-12">
                                        <option value="daily">Daily</option>
                                        <option value="daily rent">Daily Rent</option>
                                        <option value="monthly rent">Monthly Rent</option>
                                        <option value="yearly rent">Yearly Rent</option>
                                    </select>
                                </div>
                                <div class="col-12 mt-3">
                                    <label for="" class="font-12">Description:</label>
                                    <textarea name="" id="" class="form-control shadow-none border border-dark font-12"
                                        placeholder="Description" cols="40" rows="6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, eos esse. Laudantium explicabo minus temporibus sed nam corporis blanditiis veniam sapiente eligendi, ad ipsa repellat incidunt qui animi maxime labore.</textarea>
                                </div>
                                <div class="col-12 mt-3">
                                    <label for="myImg">
                                        <img id="blah" src="./imgs/add_profile.png" alt=""
                                            class="profile-img">
                                    </label>
                                    <input type="file" name="img" class="d-none" id="myImg"
                                        onchange="readURL(this);">
                                </div>
                                <div class="d-flex gap-2 mt-5">
                                    <input type="checkbox" class="form-check-input shadow-none" id="myCheck"
                                        checked>
                                    <label for="myCheck">Our Terms and Conditions</label>
                                </div>
                                <div class="mt-3">
                                    <button type="submit"
                                        class="mybutton border-5 border-golden3 rounded-pill px-4 py-2">
                                        Submit for
                                        approval
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @include('template.jslinks')
</body>

</html>
