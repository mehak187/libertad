<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Package</title>
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
            <a href="{{asset('pakages')}}" class="text-decoration-none"><i
                class="bi bi-arrow-left text-dark sky-light pb-2 pt-1 px-2 rounded-2"></i></a>
          </div>
          <div class="d-flex align-items-center gap-2">
            <p class="golden-clr m-0 font-22">Packages</p>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-lg-6">
            <img src="./imgs/tours-2.png" alt="" class="img-tree rounded-4">
          </div>
          <div class="col-lg-6 py-3 px-4">
            <p class="golden-clr">Full day tour of Giza pyramids, Egyptian museum, Citadel & Old Cairo </p>
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
                      <button type="button" class="d-inline-block mt-3 mt-sm-0 mt-lg-3 mt-xl-0 rate-button" data-bs-toggle="modal"
                          data-bs-target="#myModal">
                          Rate &
                          Review
                      </button>
                  </div>
              </div>
          </div>
            <div class="row mt-3">
              <p class="text-white">The tour starts at 8 am, you will visit the Giza Pyramids, the Great pyramid of
                Khufu, the pyramid of Khafre, explore Khafre’s impressive valley temple and the sphinx. After lunch you
                will head to visit the Egyptian museum at Tahrrir square (down-town Cairo) where you will explore its
                collection of work of arts. Then you will visit the inspiring buildings of the Islamic period, the
                monumental 19th century Mosque of Mohamed Ali in the citadel of Saladin.
                <br>
                <br>
                Optional -not included: you can visit The National museum of Egyptian civilization and/or have a free
                time for shopping in the oldest markets of Khan Al Khalili.

              </p>
            </div>
            <div class="d-flex gap-2">
              <p class="golden-clr">No. of nights:</p>
              <span class="text-white">0</span>
            </div>
            <div>
              <h6 class="golden-clr">Sightseeing</h6>
              <ul>
                <li class="text-white">Giza Pyramids</li>
                <li class="text-white">The Valley Temple of king Khafre </li>
                <li class="text-white">The sphinx.</li>
                <li class="text-white">The Egyptian museum</li>
                <li class="text-white">Citadel of Saladin- Mosque of Mohamed Ali </li>
                <li class="text-white">The National museum of Egyptian civilization- OPTIONAL</li>
                <li class="text-white">Old market of Khan Al Khalili - OPTIONAL</li>
              </ul>
            </div>
            <div>
              <h6 class="golden-clr">Include</h6>
              <ul>
                <li class="text-white">Professional Egyptologist Multi-Lingual tour guide during your trip.</li>
                <li class="text-white">Lunch.</li>
                <li class="text-white">Mineral water on board the vehicle during the tours.</li>
                <li class="text-white">Private vehicles, modern, air-conditioned. </li>
              </ul>
            </div>
          </div>

        </div>
        <div class="mt-5">
          <div>
            <div class="d-flex align-items-center">
              <div class="sky-bg py-1 px-3 rounded-3">1</div>
              <div class="d-flex align-items-center mt-2">
                <h5 class="golden-clr mx-2 fw-normal">Day 1 : </h5>
              </div>
            </div>
            <div>
              <p class="text-white fw-light fs-small">
                The tour starts at 6 am, upon arrival to the oasis, you will have lunch in the camp, then visit the
                Black Desert and climb the Black Mountains, movement by 4x4 cars, to reach Elhaiz Bedouin village where
                you will swim in the natural spring, and visit the crystal mountain, then drive to enjoy the panoramic
                views of Agabat Valley to see the high white mountains that blend with sand dunes, after that you will
                enjoy the new white desert by seeing the beautiful forms of limestone such as chicken, rabbits, dog, ice
                cream and more natural rock formations.
                Dinner will be a BBQ then camping under the stars in tents.
              </p>
            </div>
          </div>
        </div>
        <div class="mt-5">
          <div>
            <div class="d-flex align-items-center">
              <div class="sky-bg py-1 px-3 rounded-3">2</div>
              <div class="d-flex align-items-center mt-2">
                <h5 class="golden-clr mx-2 fw-normal">Day 2 : </h5>
              </div>
            </div>
            <div>
              <p class="text-white fw-light fs-small">
                After breakfast you will visit the ancient Shali Castle in Siwa and the House of Siwa Museum, a small
                museum with an interesting display of traditional clothing, jewelry and crafts.
                After lunch you will go for a safari adventure trip in the desert, where you can enjoy the hot and cold
                springs of fresh water. Then you will go for surfing experience at the giant dunes of the Great Sand
                Sea, the best sandboarding location in Egypt. Before spending your night in the desert, you will enjoy
                the bedouin dinner, and tea. Then you will have time for relaxation and star gazing.


              </p>
            </div>
          </div>
        </div>
        <div class="mt-5">
          <div>
            <div class="d-flex align-items-center">
              <div class="sky-bg py-1 px-3 rounded-3">3</div>
              <div class="d-flex align-items-center mt-2">
                <h5 class="golden-clr mx-2 fw-normal">Day 3 : </h5>
              </div>
            </div>
            <div>
              <p class="text-white fw-light fs-small">
                After breakfast, you will visit the local market in Siwa and then head back to Cairo.
              </p>
            </div>
            <div class="">
              <div class="button_border rounded-pill">
                <button type="button" class="button_leniar_style px-5 rounded-pill "
                  data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Book</button>
              </div>
            </div>
            <div class=" mt-5 position-relative sites sandm px-4 px-sm-5 px-md-3">
              <h4 class="text-white ps-4">Sites and Monuments</h4>
              <div class="prev_arrow5">
                <i class="fa-solid fa-arrow-left rounded-circle sky-bg px-2 py-2 text-dark"></i>
              </div>
              <div class="row site-map p-3">
                <div class="col-12 mx-2">
                  <a href="{{asset('sites')}}" class="text-decoration-none text-dark">
                    <div>
                      <img src="./imgs/egypt-1.png" alt="" class="minor-img">
                    </div>
                    <div class="sky-bg p-2 round-site px-2 py-3">
                      <h5 class="font-14">Site name</h5>
                      <div class="d-flex align-items-center gap-2">
                        <i class="bi bi-geo-alt-fill"></i>
                        <p class="m-0 font-13">Location of the sites will be here.</p>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-12 mx-2">
                  <a href="{{asset('sites')}}" class="text-decoration-none text-dark">
                    <div>
                      <img src="./imgs/egypt-2.png" alt="" class="minor-img">
                    </div>
                    <div class="sky-bg p-2 round-site px-2 py-3">
                      <h5 class="font-14">Site name</h5>
                      <div class="d-flex align-items-center gap-2">
                        <i class="bi bi-geo-alt-fill"></i>
                        <p class="m-0 font-13">Location of the sites will be here.</p>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-12 mx-2">
                  <a href="{{asset('sites')}}" class="text-decoration-none text-dark">
                    <div>
                      <img src="./imgs/egypt-3.png" alt="" class="minor-img">
                    </div>
                    <div class="sky-bg p-2 round-site px-2 py-3">
                      <h5 class="font-14">Site name</h5>
                      <div class="d-flex align-items-center gap-2">
                        <i class="bi bi-geo-alt-fill"></i>
                        <p class="m-0 font-13">Location of the sites will be here.</p>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-12 mx-2">
                  <a href="{{asset('sites')}}" class="text-decoration-none text-dark">
                    <div>
                      <img src="./imgs/egypt-4.png" alt="" class="minor-img">
                    </div>
                    <div class="sky-bg p-2 round-site px-2 py-3">
                      <h5 class="font-14">Site name</h5>
                      <div class="d-flex align-items-center gap-2">
                        <i class="bi bi-geo-alt-fill"></i>
                        <p class="m-0 font-13">Location of the sites will be here.</p>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-12 mx-2">
                  <a href="{{asset('sites')}}" class="text-decoration-none text-dark">
                    <div>
                      <img src="./imgs/egypt-1.png" alt="" class="minor-img">
                    </div>
                    <div class="sky-bg p-2 round-site px-2 py-3">
                      <h5 class="font-14">Site name</h5>
                      <div class="d-flex align-items-center gap-2">
                        <i class="bi bi-geo-alt-fill"></i>
                        <p class="m-0 font-13">Location of the sites will be here.</p>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-12 mx-2">
                  <a href="{{asset('sites')}}" class="text-decoration-none text-dark">
                    <div>
                      <img src="./imgs/egypt-2.png" alt="" class="minor-img">
                    </div>
                    <div class="sky-bg p-2 round-site px-2 py-3">
                      <h5 class="font-14">Site name</h5>
                      <div class="d-flex align-items-center gap-2">
                        <i class="bi bi-geo-alt-fill"></i>
                        <p class="m-0 font-13">Location of the sites will be here.</p>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-12 mx-2">
                  <a href="{{asset('sites')}}" class="text-decoration-none text-dark">
                    <div>
                      <img src="./imgs/egypt-3.png" alt="" class="minor-img">
                    </div>
                    <div class="sky-bg p-2 round-site px-2 py-3">
                      <h5 class="font-14">Site name</h5>
                      <div class="d-flex align-items-center gap-2">
                        <i class="bi bi-geo-alt-fill"></i>
                        <p class="m-0 font-13">Location of the sites will be here.</p>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-12 mx-2">
                  <a href="{{asset('sites')}}" class="text-decoration-none text-dark">
                    <div>
                      <img src="./imgs/egypt-4.png" alt="" class="minor-img">
                    </div>
                    <div class="sky-bg p-2 round-site px-2 py-3">
                      <h5 class="font-14">Site name</h5>
                      <div class="d-flex align-items-center gap-2">
                        <i class="bi bi-geo-alt-fill"></i>
                        <p class="m-0 font-13">Location of the sites will be here.</p>
                      </div>
                    </div>
                  </a>
                </div>



              </div>
              <div class="next_arrow5 ">
                <i class="fa-solid fa-arrow-right rounded-circle sky-bg px-2 py-2 text-dark"></i>
              </div>
            </div>
            <div class="row mt-5  mx-5 mx-md-4 position-relative">
              <h5 class="text-white">Photos and gallery</h5>
              <div class="col site-bg rounded-4 px-4 py-2 my-4">
                <div class="prev_arrow2t">
                  <i class="fa-solid fa-arrow-left rounded-circle site-bg px-2 py-2 text-dark"></i>
                </div>
                <div class="row site-mapt ">
                  <div class="col-12 mx-2 my-2">
                    <img src="./imgs/slider_img_2.png" alt="" class="img-fluid rounded-4">
                  </div>
                  <div class="col-12 mx-2 my-2">
                    <img src="./imgs/slider_img_1.png" alt="" class="img-fluid rounded-4">
                  </div>
                  <div class="col-12 mx-2 my-2">
                    <img src="./imgs/slider_img_4.png" alt="" class="img-fluid rounded-4">
                  </div>
                  <div class="col-12 mx-2 my-2">
                    <img src="./imgs/slider_img_5.png" alt="" class="img-fluid rounded-4">
                  </div>
                  <div class="col-12 mx-2 my-2">
                    <img src="./imgs/slider_img_6.png" alt="" class="img-fluid rounded-4">
                  </div>
                  <div class="col-12 mx-2 my-2">
                    <img src="./imgs/slider_img_2.png" alt="" class="img-fluid rounded-4">
                  </div>
                  <div class="col-12 mx-2 my-2">
                    <img src="./imgs/slider_img_1.png" alt="" class="img-fluid rounded-4">
                  </div>
                </div>
                <div class="next_arrow2t">
                  <i class="fa-solid fa-arrow-right rounded-circle site-bg px-2 py-2 text-dark"></i>
                </div>
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
              <input type="email" class="form-control shadow-none font-12" placeholder="Confirm Email">
            </div>
            <div class="">
              <label for="" class="font-12">Phone Number</label>
              <input type="tel" class="form-control shadow-none font-12" placeholder="Phone Number">
            </div>
            <div class="mt-2">
              <div class="d-flex flex-column">
                <span for="" class="font-12">
                  Passport Copy/ID for Egyptians
                </span>
                <label for="myImg2">
                  <img id="blah2" src="./imgs/add_profile.png" alt="" class="profile-img">
                </label>
                <input type="file" name="img" class="d-none" id="myImg2" onchange="readURL(this);">
              </div>
            </div>
            <h6 class="fw-bold mt-3">Travelers Detail</h6>
            <h6>Traveler 1</h6>
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
                  <img id="blah2" src="./imgs/add_profile.png" alt="" class="profile-img">
                </label>
                <input type="file" name="img" class="d-none" id="myImg2" onchange="readURL(this);">
              </div>
            </div>
            <h6>Traveler 2</h6>
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
                  <img id="blah2" src="./imgs/add_profile.png" alt="" class="profile-img">
                </label>
                <input type="file" name="img" class="d-none" id="myImg2" onchange="readURL(this);">
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
            <h6>Terms & Conditions/Cancellation policy</h6>
            <div class="d-flex align-items-start">
              <input type="checkbox" class="me-2 mt-2">
              <label for="" class="font-12">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est deserunt sed
                repudiandae doloribus quod accusantium cumque consectetur omnis laboriosam.label>
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
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
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
                <input type="text" name="" id="flexRadioDefault1" class="form-control shadow-none"
                  placeholder="Cardholder name">
              </div>
              <div class="mt-3">
                <input type="text" id="monthYearInput" class="form-control shadow-none" placeholder="MM/YYYY"
                  maxlength="7" pattern="\d{2}/\d{4}" title="Please enter a valid Month/Year (MM/YYYY)">
              </div>
              <div class="mt-3">
                <input type="text" class="form-control shadow-none" placeholder="CCV">
              </div>
            </div>
            <div class="mt-3 form-check">
              <input class=" form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
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
                <input type="text" name="" id="" class="form-control shadow-none" placeholder="Email">
              </div>
              <div class="mt-3">
                <label for="">Password</label>
                <input type="password" class="text-dark form-control shadow-none" placeholder="Password">
              </div>
              <div class="text-center mt-3">
                <input type="submit" value="Login" class="golden-bg border-0 rounded-pill px-3 py-2">
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
              <p class="shadow-none font-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ac odio ac
                justo facilisis fringilla ac eu justo.</p>
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
          <button data-bs-toggle="modal" aria-label="Close" class="btn mybutton px-4 border-0 rounded-pill">Send
            Email</button>
        </div>
      </div>
    </div>
  </div>
  @include('template.jslinks')
</body>

</html>