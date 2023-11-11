<form action="">
    <div class="div-main pic-bg d-md-none d-block py-2">
        <div class="container-fluid px-md-4">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center gap-1 d-md-none d-block ">
                    <div class="my-auto d-md-none d-block position-relative">
                        <div class="dropdown">
                            <button type="button" class="way_color" id="login-mbl"
                                style="background-color: transparent; border-style: none;">LOGIN</button>
                            <div class="dropdown-menu px-3 pt-4 pb-2 sign_in_dropdown parent-class"
                                id="login-mbl-show">
                                <form action="">
                                    <div class="d-flex justify-content-between">
                                        <h5 class="mb-3" style="color: #B38029;">Login NOW</h5>
                                        <a class="cursor" id="close-login-mbl">
                                            <i class=" fa-solid fa-xmark cursor" id="x-mark-m"
                                                style="color: #000;"></i>
                                        </a>
                                    </div>
                                    <div>
                                        <input type="email" class="form-control mb-2" placeholder="Email">
                                    </div>
                                    <div>
                                        <input type="password" class="form-control mb-4" placeholder="password">
                                    </div>
                                    <div>
                                        <input type="button" class="form-control input sign_in_button mb-2"
                                            value="Sign In">
                                    </div>
                                    <div>
                                        <p class="mb-0 text-end fs-14 text-white cursor" id="reset-mbl">Forget
                                            password</p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="new-div-class position-forget sign_in_dropdown2 " id="reset-mbl-show">
                        <form action="">
                            <div class="row px-3 pt-4 pb-2">
                                <div class="d-flex justify-content-between">
                                    <h4 class="brown-clr">Reset Password</h4>
                                    <a class="cursor" id="close-reset-mbl">
                                        <i class=" fa-solid fa-xmark cursor" style="color: #000;"></i>
                                    </a>
                                </div>
                                <div class="col-12">
                                    <div>
                                        <input type="email" class="form-control shadow-none" placeholder="Email">
                                    </div>
                                    <div class="mt-3">
                                        <input type="button" class="form-control input sign_in_button mb-2"
                                            value="Reset" onclick="resetForm1()" data-bs-toggle="modal"
                                            data-bs-target="#myModal2">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="new-div-class position-forget2 sign_in_dropdown2 sign_in_dropdown2b"
                        id="reset-mbl2-show">
                        <form action="">
                            <div class="row px-3 pt-4 pb-2">
                                <div class="d-flex justify-content-between">
                                    <h4 class="brown-clr">Reset Password</h4>
                                    <a class="cursor" id="close-reset2-mbl">
                                        <i class=" fa-solid fa-xmark cursor" style="color: #000;"></i>
                                    </a>
                                </div>
                                <div class="col-12">
                                    <div>
                                        <input type="password" class="form-control shadow-none"
                                            placeholder="New password">
                                    </div>
                                    <div class="mt-3">
                                        <input type="password" class="form-control shadow-none"
                                            placeholder="Re-enter password">
                                    </div>
                                    <div class="mt-3">
                                        <input type="submit" class="form-control input sign_in_button mb-2"
                                            value="Reset">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="my-auto">
                        <div class="dropdown my-drop">
                            <button type="button" class="text-white " id="register-mbl"
                                style="background-color: transparent; border-style: none;">REGISTER</button>
                            <div class="dropdown-menu px-3 pt-4 pb-2 sign_in_dropdown px-4 " id="register-mbl-show">
                                <form action="">
                                    <div class="d-flex justify-content-between">
                                        <h5 class="mb-3" style="color: #B38029;">Register NOW</h5>
                                        <a id="close-register-mbl">
                                            <i class=" fa-solid fa-xmark cursor" style="color: #000;"></i>
                                        </a>
                                    </div>
                                    <div>
                                        <input type="text" class="form-control mb-2" placeholder="First name">
                                    </div>
                                    <div>
                                        <input type="text" class="form-control mb-2" placeholder="Last name">
                                    </div>
                                    <div>
                                        <input type="tel" class="form-control mb-2" placeholder="Phone">
                                    </div>
                                    <div>
                                        <input type="email" class="form-control mb-2" placeholder="Email">
                                    </div>
                                    <div>
                                        <input type="password" class="form-control mb-2" placeholder="password">
                                    </div>
                                    <div>
                                        <input type="password" class="form-control mb-2"
                                            placeholder="Confirm password">
                                    </div>
                                    <div>
                                        <input type="button" class="form-control input sign_in_button mb-2"
                                            value="Register">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center gap-3">
                    <div class="d-md-none d-block">
                        <form action="" class="search1">
                            <input class="search__input1" type="search" placeholder="Search" id="searchInput1">
                            <div class="search__icon-container1">
                                <label for="searchInput1" class="search__label1" aria-label="Search">
                                    <svg viewBox="0 0 1000 1000" title="Search">
                                        <path fill="currentColor"
                                            d="M408 745a337 337 0 1 0 0-674 337 337 0 0 0 0 674zm239-19a396 396 0 0 1-239 80 398 398 0 1 1 319-159l247 248a56 56 0 0 1 0 79 56 56 0 0 1-79 0L647 726z" />
                                    </svg>
                                </label>
                                <button class="search__submit1 my-auto" aria-label="Search">
                                    <svg viewBox="0 0 1000 1000" title="Search">
                                        <path fill="currentColor"
                                            d="M408 745a337 337 0 1 0 0-674 337 337 0 0 0 0 674zm239-19a396 396 0 0 1-239 80 398 398 0 1 1 319-159l247 248a56 56 0 0 1 0 79 56 56 0 0 1-79 0L647 726z" />
                                    </svg>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div>
                        <p class="my-auto  way_color">
                            <a href="{{asset('cart')}}">
                                <i class="fa-sharp fa-solid fa-cart-shopping"></i>
                            </a>
                            </i>
                        </p>
                    </div>
                    <div>
                        <p class="my-auto  way_color">
                            <a href="{{asset('notification')}}">
                                <i class="fa-sharp fa-solid fa-bell"></i>
                            </a>
                            </i>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="dashboard-sec height-sec">
        <div class="container-fluid gx-0">
            <div class="yellow-bg m-0 px-md-3 px-1 align-items-center justify-content-between">
                <div class="">
                    <div class="align-items-md-center flex-md-row flex-column justify-content-md-start">
                        <div class=" d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <button class="openbtn" onclick="openNav()">
                                    <img src="{{asset('imgs/list.png')}}" alt="" class="img-list">
                                </button>
                                <div>
                                    <a href="{{asset('/')}}" class="d-flex align-items-center text-decoration-none">
                                        <img src="{{asset('imgs/logo_text.png')}}" alt="logo" class="img-logo">
                                        <p class="text-white mb-0 text-p">Liberta<span
                                                class="way_color">d</span>elmundo</p>
                                    </a>
                                </div>
                            </div>
                            <div>
                                <ul class="nav_ul_style mb-0 position-relative">
                                    <li class="my-auto d-md-block d-none">
                                        <div class="dropdown">
                                            <button type="button" class="way_color"
                                                style="background-color: transparent; border-style: none;"
                                                id="login-desktop">LOGIN</button>
                                            <div class="dropdown-menu px-3 pt-4 pb-2 sign_in_dropdown parent"
                                                id="login-desktop-show">
                                                <form action="">
                                                    <div class="d-flex justify-content-between">
                                                        <h5 class="mb-3" style="color: #B38029;">Login NOW</h5>
                                                        <a class="cursor" id="close-login">
                                                            <i class=" fa-solid fa-xmark cursor"
                                                                style="color: #000;"></i>
                                                        </a>
                                                    </div>
                                                    <div>
                                                        <input type="email" class="form-control mb-2"
                                                            placeholder="Email">
                                                    </div>
                                                    <div>
                                                        <input type="password" class="form-control mb-4"
                                                            placeholder="password">
                                                    </div>
                                                    <div>
                                                        <input type="button"
                                                            class="form-control input sign_in_button mb-2"
                                                            value="Sign In">
                                                    </div>
                                                    <div>
                                                        <p class="mb-0 text-end fs-14 text-white" id="reset-desktop"
                                                            style="cursor: pointer;">Forget password</p>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </li>
                                    <div class="new-div position-forget position-forgetn sign_in_dropdown2"
                                        id="reset-desktop-show">
                                        <form action="">
                                            <div class="row px-3 pt-4 pb-2">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="brown-clr">Reset Password</h4>
                                                    <a class="cursor" id="close-reset">
                                                        <i class=" fa-solid fa-xmark " style="color: #000;"></i>
                                                    </a>
                                                </div>
                                                <div class="col-12">
                                                    <div>
                                                        <input type="email" class="form-control shadow-none"
                                                            placeholder="Email">
                                                    </div>
                                                    <div class="mt-3">
                                                        <input type="button"
                                                            class="form-control input sign_in_button mb-2"
                                                            value="Reset" onclick="resetForm()"
                                                            data-bs-toggle="modal" data-bs-target="#myModal3">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="new-div2 position-forget2 sign_in_dropdown2 sign_in_dropdown2h"
                                        id="reset-desktop-show2">
                                        <form action="">
                                            <div class="row px-3 pt-4 pb-2">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="brown-clr">Reset Password</h4>
                                                    <a class="cursor" id="close-reset2">
                                                        <i class=" fa-solid fa-xmark cursor"
                                                            style="color: #000;"></i>
                                                    </a>
                                                </div>
                                                <div class="col-12">
                                                    <div>
                                                        <input type="password" class="form-control shadow-none"
                                                            placeholder="New password">
                                                    </div>
                                                    <div class="mt-3">
                                                        <input type="password" class="form-control shadow-none"
                                                            placeholder="Re-enter password">
                                                    </div>
                                                    <div class="mt-3">
                                                        <input type="submit"
                                                            class="form-control input sign_in_button mb-2"
                                                            value="Reset">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <li class="my-auto d-md-block d-none">
                                        <div class="dropdown my-drop">
                                            <button type="button" class="text-white" id="register-desktop"
                                                style="background-color: transparent; border-style: none;">REGISTER</button>
                                            <div class="dropdown-menu px-3 pt-4 pb-2 sign_in_dropdown px-4"
                                                id="register-desktop-show">
                                                <form action="">
                                                    <div class="d-flex justify-content-between">
                                                        <h5 class="mb-3" style="color: #B38029;">Register NOW</h5>
                                                        <a class="cursor" id="close-register">
                                                            <i class=" fa-solid fa-xmark cursor"
                                                                style="color: #000;"></i>
                                                        </a>
                                                    </div>
                                                    <div>
                                                        <input type="text" class="form-control mb-2"
                                                            placeholder="First name">
                                                    </div>
                                                    <div>
                                                        <input type="text" class="form-control mb-2"
                                                            placeholder="Last name">
                                                    </div>
                                                    <div>
                                                        <input type="tel" class="form-control mb-2"
                                                            placeholder="Phone">
                                                    </div>
                                                    <div>
                                                        <input type="email" class="form-control mb-2"
                                                            placeholder="Email">
                                                    </div>
                                                    <div>
                                                        <input type="password" class="form-control mb-2"
                                                            placeholder="password">
                                                    </div>
                                                    <div>
                                                        <input type="password" class="form-control mb-2"
                                                            placeholder="Confirm password">
                                                    </div>
                                                    <div>
                                                        <input type="button"
                                                            class="form-control input sign_in_button mb-2"
                                                            value="Register">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="my-auto  way_color d-md-block d-none">
                                        <a href="{{asset('cart')}}">
                                            <i class="fa-sharp fa-solid fa-cart-shopping"></i>
                                        </a>
                                    </li>
                                    <li class="my-auto  way_color d-md-block d-none">
                                        <a href="{{asset('notification')}}">
                                            <i class="fa-sharp fa-solid fa-bell"></i>
                                        </a>
                                    </li>
                                    <div class="dropdown py-2">
                                        <button type="button"
                                            class="btn dropdown-toggle rounded-pill px-sm-4 px-2 py-1"
                                            style="border: 1px solid black;" data-bs-toggle="dropdown">
                                            English
                                        </button>
                                        <ul class="dropdown-menu border-dark rounded-3 golden-bg">
                                            <li class="dropdown-item">English</li>
                                            <li class="dropdown-item">Spanish</li>
                                            <li class="dropdown-item">Russian</li>
                                        </ul>
                                    </div>
                                    <div class="d-flex align-items-center d-md-block d-none my-2">
                                        <form action="" class="search">
                                            <input class="search__input" type="search" placeholder="Search"
                                                id="searchInput">
                                            <div class="search__icon-container">
                                                <label for="searchInput" class="search__label" aria-label="Search">
                                                    <svg viewBox="0 0 1000 1000" title="Search">
                                                        <path fill="currentColor"
                                                            d="M408 745a337 337 0 1 0 0-674 337 337 0 0 0 0 674zm239-19a396 396 0 0 1-239 80 398 398 0 1 1 319-159l247 248a56 56 0 0 1 0 79 56 56 0 0 1-79 0L647 726z" />
                                                    </svg>
                                                </label>
                                                <button class="search__submit my-auto" aria-label="Search">
                                                    <svg viewBox="0 0 1000 1000" title="Search">
                                                        <path fill="currentColor"
                                                            d="M408 745a337 337 0 1 0 0-674 337 337 0 0 0 0 674zm239-19a396 396 0 0 1-239 80 398 398 0 1 1 319-159l247 248a56 56 0 0 1 0 79 56 56 0 0 1-79 0L647 726z" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<div class="modal" id="myModal2">
    <div class="modal-dialog">
        <div class="modal-content px-2 light-bground">
            <div class="py-3 border_golden">
                <h4 class="modal-title text-center">Reset Password</h4>
            </div>
            <div class="modal-body text-center">
                <i class="fa-solid fa-check rounded-circle mybutton" style="padding: 12px 14px;"></i>
                <h4>Email</h4>
                <p>
                    An email is sent to your email address. click
                    <br>
                    on the link to reset your password.
                </p>
                <button type="button" class="mybutton unique border-0 rounded-pill close-modal-button min-w py-2"
                    data-bs-dismiss="modal">
                    Close
                    <i style="float: right;" class="bi bi-x rounded-circle px-1 text-end text-white bg-dark"></i>
                </button>
            </div>
        </div>
    </div>
</div>
<div class="modal" id="myModal3">
    <div class="modal-dialog">
        <div class="modal-content px-2 light-bground">
            <div class="py-3 border_golden">
                <h4 class="modal-title text-center">Reset Password</h4>
            </div>
            <div class="modal-body text-center">
                <i class="fa-solid fa-check rounded-circle mybutton" style="padding: 12px 14px;"></i>
                <h4>Email</h4>
                <p>
                    An email is sent to your email address. click
                    <br>
                    on the link to reset your password.
                </p>
                <button type="button"
                    class="mybutton unique border-0 rounded-pill close-modal-button1 min-w py-2 web-reset"
                    data-bs-dismiss="modal">
                    Close
                    <i style="float: right;" class="bi bi-x rounded-circle px-1 text-end text-white bg-dark"></i>
                </button>
            </div>
        </div>
    </div>
</div>
<div class="icon">
    <a href="https://api.whatsapp.com/send?phone=">
        <img src="{{asset('imgs/whatsapp.png')}}" alt="Sticky Icon" class="whatsapp-img">
    </a>
</div>