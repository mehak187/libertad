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
      <div class="right-content fix_div">
        <div class="container">
          <div class="main-border py-2 d-flex align-items-center gap-2">
            <div>
              <a href="{{asset('/')}}"><img src="./imgs/home.png" alt="" class="img-fluid"></a>
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
                  <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                    type="button" role="tab" aria-controls="pills-home" aria-selected="true">Shopping Cart</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
                    type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Completed
                    Orders</button>
                </li>
              </ul>

              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                  <div class="row">
                    <div class="col-lg-8">
                      <div class="table-responsive myDiv">
                        <table class="table mb-0">
                          <thead>
                            <tr class="cyan-bg">
                              <th class="text-nowrap px-4 py-3">Image</th>
                              <th class="text-nowrap px-4 py-3">Product Name</th>
                              <th class="text-nowrap px-4 py-3">Unit price</th>
                              <th class="text-nowrap px-4 py-3">Quantity</th>
                              <th class="text-nowrap px-4 py-3 position-relative">Total <div
                                  class="position-x close-icon"><i class="bi bi-x"></i>
                                </div>
                              </th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr class="light-bground">
                              <td class="align-middle text-nowrap px-4 py-2">
                                <div><img src="./imgs/galal-garwan.png" alt="" class="img-galal"></div>
                              </td>
                              <td class="fw-bold align-middle text-nowrap px-4 py-2">
                                <p class="toggle-button">Package #01</p>
                              </td>
                              <td class="align-middle text-nowrap px-4 py-2">USD 990</td>
                              <td class="align-middle text-nowrap px-4 py-2">1</td>
                              <td class="align-middle text-nowrap px-4 py-2">USD 990</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div class="table-responsive myDiv mt-3">
                        <table class="table mb-0">
                          <thead>
                            <tr class="cyan-bg">
                              <th class="text-nowrap px-4 py-3">Image</th>
                              <th class="text-nowrap px-4 py-3">Activity Name</th>
                              <th class="text-nowrap px-4 py-3">Unit price</th>
                              <th class="text-nowrap px-4 py-3">Quantity</th>
                              <th class="text-nowrap px-4 py-3 position-relative">Total <div
                                  class="position-x close-icon"><i class="bi bi-x"></i>
                                </div>
                              </th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr class="light-bground">
                              <td class="align-middle text-nowrap px-4 py-2">
                                <div><img src="./imgs/galal-garwan.png" alt="" class="img-galal"></div>
                              </td>
                              <td class="fw-bold align-middle text-nowrap px-4 py-2">
                                <p class="toggle-button">Camel Riding</p>
                              </td>
                              <td class="align-middle text-nowrap px-4 py-2">USD 990</td>
                              <td class="align-middle text-nowrap px-4 py-2">1</td>
                              <td class="align-middle text-nowrap px-4 py-2">USD 990</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="col-lg-4 mt-lg-0 mt-3 contain">
                      <div class="light-bground p-2 my-height d-flex flex-column justify-content-between">
                        <div class="p-3">
                          <p class="font-semi">Orders Summary</p>
                          <div class="row">
                            <div class="col-6">
                              <p>SubTotal</p>
                            </div>
                            <div class="col-6">
                              <p>990</p>
                            </div>
                          </div>
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
                            <button type="button" data-bs-target="#myModal" data-bs-toggle="modal"
                              class="mybutton border-0 text-white w-100 py-2 rounded-2">Proceed
                              to Pay</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                  <div class="row pb-5">
                    <div class="col-xl-8">
                      <div class="table-responsive">
                        <table class="table mb-0">
                          <thead>
                            <tr class="cyan-bg">
                              <th class="text-nowrap px-4 py-3">Image</th>
                              <th class="text-nowrap px-4 py-3">Product Name</th>
                              <th class="text-nowrap px-4 py-3">Unit price</th>
                              <th class="text-nowrap px-4 py-3">Quantity</th>
                              <th class="text-nowrap px-4 py-3 position-relative">Total <div
                                  class="position-x close-icon"><i class="bi bi-x"></i>
                                </div>
                              </th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr class="light-bground">
                              <td class="align-middle text-nowrap px-4 py-2">
                                <div><img src="./imgs/galal-garwan.png" alt="" class="img-galal"></div>
                              </td>
                              <td class="fw-bold align-middle text-nowrap px-4 py-2">
                                Package #01
                              </td>
                              <td class="align-middle text-nowrap px-4 py-2">USD 990</td>
                              <td class="align-middle text-nowrap px-4 py-2">1</td>
                              <td class="align-middle text-nowrap px-4 py-2">USD 990</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer class="sky-light py-3 mt-auto position-footer">
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
                    <h4 class="m-0">Liberta<span class="sky-clr">d</span>elmundo</h4>
                  </div>
                </div>
                <div class="mt-3">
                  <p class="mb-0">The word “Libertad” means “freedom” in Spanish, and so we are willing to
                    change the concept of traveling by offering our visitors the opportunity to discover
                    our land in his/her way: “Libertad- Travel your way”</p>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 d-flex justify-content-md-end">
                <div>
                  <div>
                    <h5>Social Media:</h5>
                  </div>
                  <div class="d-flex align-items-center gap-2">
                    <a href="https://www.tripadvisor.com/Attraction_Review-g294201-d26208912-Reviews-Libertad_Del_Mundo-Cairo_Cairo_Governorate.html"
                      class="p-0"><img src="./imgs/owl-2.png" style="height: 40px; width: 40px;" alt=""></a>
                    <a href="https://www.facebook.com/profile.php?id=100090555392220" class="p-0"><img
                        src="./imgs/fb-2.png" style="height: 40px; width: 40px;" alt=""></a>
                    <a href="mailto:info@libertadelmundo.com" class="p-0"><img src="./imgs/google-plus2.png"
                        style="height: 40px; width: 40px;" alt=""></a>
                    <a href="mailto:info@libertadelmundo.com" class="p-0"><img src="./imgs/youtube2.png"
                        style="height: 40px; width: 40px;" alt=""></a>
                    <a href="https://www.instagram.com/libertadelmundoofficial/?next=%2F" class="p-0"><img
                        src="./imgs/insta2.png" style="height: 40px; width: 40px;" alt=""></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content light-bground py-3 rounded-4">
        <div class="modal-header border-0 pt-0 px-5">
          <h1 class="modal-title fs-5 brown-clr">Add Card Details</h1>
        </div>
        <div class="modal-body pt-0 px-5">
          <form action="">
            <div>
              <input type="text" name="" id="" class="myInput" placeholder="Name on card">
            </div>

            <div class="mt-3">
              <input type="number" class="myInput" placeholder="Card number">
            </div>

            <div class="mt-3">
              <label for="" class="ps-3">Expiration:</label>
              <input type="number" name="" id="" class="myInput">
            </div>
            <div class="mt-3">
              <label for="" class="ps-3">CVV</label>
              <input type="number" class="myInput" placeholder="509">
            </div>
            <div class="mt-3">
              <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModalToggle5"
                class="mybutton border-0 rounded-3 w-100  text-white py-2">Confirm &
                Pay</button>
            </div>
          </form>
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