<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daily tours</title>
    @include('template.csslinks')
</head>

<body class="">
    @if (session('success'))
    <script>
        swal("Good job!", "{{session('success')}}", "success");
    </script>
    @endif
    @if (session('error'))
        <script>
            swal("Ooops!", "{{session('error')}}", "error");
        </script>
    @endif
    @include('template.header')
    <section class="main-tem">
        @include('template.sidepanel')
        <!-- main content -->
        <div class="right-content ftr fix_div back_img py-5">
            <div class="container">
                <div class="main-border py-2 d-flex align-items-center gap-2">
                    <div>
                        <a href="{{ asset('dailyactivites') }}" class="text-decoration-none">
                            <i class="bi bi-arrow-left text-dark sky-light pb-2 pt-1 px-2 rounded-2"></i>
                        </a>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <p class="text-white m-0 font-22">Daily Activites</p>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-6">
                        <img src="<?php echo asset('uploads/' . $citytour['img']); ?>" alt="" class="img-tree rounded-4">
                    </div>
                    <div class="col-lg-6 py-3 px-4">
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-geo-alt text-white m-0"></i>
                            <p class="text-white m-0">{{ $citytour->location }}</p>
                        </div>
                        <div class="row align-items-center mt-3">
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
                            <p class="text-white">
                                {{ $citytour->des }}
                            </p>
                            <div>
                                <h6 class="golden-clr">Sightseeing</h6>
                                @php
                                    $inputString = $citytour['sight_seeing'];
                                    $dataArray = explode(',', $inputString);
                                @endphp
                                <ul class="text-white">
                                    @foreach ($dataArray as $item)
                                        <li class="text-white">{{ $item }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <div>
                                <h6 class="golden-clr">Includes</h6>
                                @php
                                    $inputString = $citytour['include'];
                                    $dataArray = explode(',', $inputString);
                                @endphp
                                <ul class="text-white">
                                    @foreach ($dataArray as $item)
                                        <li class="text-white">{{ $item }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                    
                    </div>
                </div>
                @if (count($galleryImages) > 0)
                    <div class="row mt-5 position-relative">
                        <h5 class="text-white">Photos and gallery</h5>
                        <div class="col-10 col-sm-11 golden-bg golden-bg-remove rounded-4 py-2 px-4 mt-4 mx-auto">
                            <div class="prev_arrow2t1">
                                <i class="fa-solid fa-arrow-left rounded-circle golden-bg px-2 py-2 text-dark"></i>
                            </div>
                            <div class="row site-mapt1">
                                @foreach ($galleryImages as $galleryImage)
                                    <div class="col-12 mx-2 my-2">
                                        <img src="<?php echo asset('uploads/' . $galleryImage['image_path']); ?>" alt="" class="img-fluid rounded-4">
                                    </div>
                                @endforeach
                            </div>
                            <div class="next_arrow2t1">
                                <i class="fa-solid fa-arrow-right rounded-circle golden-bg px-2 py-2 text-dark"></i>
                            </div>
                        </div>
                    </div>
                @endif
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
                    <form action="/activities_review" enctype="multipart/form-data" method="POST">
                        @csrf
                        <input type="number" class="d-none" name="stour_id" value="{{ $citytour->id }}">
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
                            <textarea class="myInput" placeholder="Write" name="review" rows="3"  maxlength="200" required></textarea>
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
