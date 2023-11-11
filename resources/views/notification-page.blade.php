<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Notification</title>
    @include('template.csslinks')
</head>

<body class="">
    @include('template.header')
    <section class="main-tem">
        @include('template.sidepanel')
        <!-- main content -->
        <div class="right-content fix_div cyan-bg py-3 py-md-5">
            <div class="container">
                <div class="main-border py-2 d-flex align-items-center gap-2">
                    <div>
                        <a href="#" id="goBackButton" class="text-decoration-none">
                            <i class="bi bi-arrow-left text-dark sky-light pb-1 pt-1 px-2 rounded-2"></i>
                        </a>
                    </div>                    
                    <div class="">
                        <p class="text-white m-0 font-22">Notification</p>
                    </div>
                </div>
                <div class="row mt-3 mt-md-5 px-2">
                    <div class="col-12 bg-white p-4 d-flex rounded-3">
                        <div class="mt-2">
                            <i class="bi bi-bell blue-dark-bg p-2 rounded-2 text-white fs-4"></i>
                        </div>
                        <div class="ps-3">
                            <p class="mb-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officiis modi cum
                                provident veniam autem doloribus debitis recusandae nihil magni eaque illum asperiores,
                                est voluptate aut quis vel laboriosam, qui consequuntur?</p>
                            <span class="font-12 mb-0">10 min ago</span>
                        </div>
                    </div>
                    <div class="col-12 bg-white p-4 d-flex rounded-3 mt-3">
                        <div class="mt-2">
                            <i class="bi bi-bell blue-dark-bg p-2 rounded-2 text-white fs-4"></i>
                        </div>
                        <div class="ps-3">
                            <p class="mb-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officiis modi cum
                                provident veniam autem doloribus debitis recusandae nihil magni eaque illum asperiores,
                                est voluptate aut quis vel laboriosam, qui consequuntur?</p>
                            <span class="font-12 mb-0">10 min ago</span>
                        </div>
                    </div>
                    <div class="col-12 bg-white p-4 d-flex rounded-3 mt-3">
                        <div class="mt-2">
                            <i class="bi bi-bell blue-dark-bg p-2 rounded-2 text-white fs-4"></i>
                        </div>
                        <div class="ps-3">
                            <p class="mb-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officiis modi cum
                                provident veniam autem doloribus debitis recusandae nihil magni eaque illum asperiores,
                                est voluptate aut quis vel laboriosam, qui consequuntur?</p>
                            <span class="font-12 mb-0">10 min ago</span>
                        </div>
                    </div>
                    <div class="col-12 bg-white p-4 d-flex rounded-3 mt-3">
                        <div class="mt-2">
                            <i class="bi bi-bell blue-dark-bg p-2 rounded-2 text-white fs-4"></i>
                        </div>
                        <div class="ps-3">
                            <p class="mb-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officiis modi cum
                                provident veniam autem doloribus debitis recusandae nihil magni eaque illum asperiores,
                                est voluptate aut quis vel laboriosam, qui consequuntur?</p>
                            <span class="font-12 mb-0">10 min ago</span>
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
    @include('template.jslinks')
</body>
</html>