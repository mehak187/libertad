<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Testimonial</title>
    @include('template.csslinks')
</head>

<body class="">
    @include('template.header')
    <section class="main-tem">
        @include('template.sidepanel')
        <!-- main content -->
        <div class="right-content ftr fix_div back_img py-5">
            <div class="container ">
                <h1 class="m-0 text-white">Testimonial</h1>
                @if ((count($StourRatings) > 0) || (count($citytourRatings) > 0) || (count($musuemRatings) > 0) || (count($activitiesRatings) > 0) || (count($siteRatings) > 0) || (count($accRatings) > 0 || (count($tripRatings) > 0)))
                    <p class="m-0 text-white">Reviews from our clients are listed as:</p>
                    @if (count($StourRatings) > 0)
                        <h2 class="sky-clr fw-bold mt-2 ps-3"><span class="golden-clr">Special </span>Tours
                        </h2>
                        <div class="position-relative mt-5">
                            <div class="prev_arrow6">
                                <i class="bi bi-chevron-right"></i>
                            </div>
                            <div class="row mt-3 testimonial">
                                @foreach ($StourRatings as $StourRating)
                                <div class="col-12 m-3">
                                    <div class="border-golden sky-bg rounded-3 p-3 sld">
                                        <div class="blue-light-bg rounded-3 p-3">
                                            <div class="d-flex align-items-center ">
                                                <div class="">
                                                    <i class="fa-solid fa-user fs-1"></i>
                                                </div>
                                                <div>
                                                    <div>
                                                        <input type="hidden" value="{{$StourRating['star']}}" name="star" class="d-none">
                                                        <div class="rating-show border-0 d-flex" direction="ltr" style="max-width: 100%">
                                                        <label class="py-0" for="star5"></label>
                                                        <label class="py-0" for="star4"></label>
                                                        <label class="py-0" for="star3"></label>
                                                        <label class="py-0" for="star2"></label>
                                                        <label class="py-0" for="star1"></label>
                                                        </div>
                                                        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
                                                        <script>
                                                        $(document).ready(function(){
                                                            var starValue = $('input[name="star"]').val();
                                                            $('.rating-show label').removeClass('active');
                                                            for (var i = 1; i <= starValue; i++) {
                                                            $('.rating-show label:nth-child(' + i + ')').addClass('active');
                                                            }
                                                        });
                                                        </script>
                                                    </div>
                                                    <div>
                                                        <h5 class="m-0 ms-2">{{$StourRating['name']}} {{$StourRating['lastname']}}</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <p class="mt-3">{{$StourRating['review']}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="next_arrow6">
                                <i  class="bi bi-chevron-left"></i>
                            </div>
                        </div>
                    @endif

                    @if (count($citytourRatings) > 0)
                        <h2 class="sky-clr fw-bold mt-2 ps-3"><span class="golden-clr">City </span>Tours</h2>
                        <div class="position-relative mt-5 h-100">
                            <div class="prev_arrow11">
                                <i class="bi bi-chevron-right"></i>
                            </div>
                            <div class="row mt-3 testimonial11">
                                @foreach ($citytourRatings as $citytourRating)
                                <div class="col-12 m-3">
                                    <div class="border-golden sky-bg rounded-3 p-3 sld">
                                        <div class="blue-light-bg rounded-3 p-3">
                                            <div class="d-flex align-items-center ">
                                                <div class="">
                                                    <i class="fa-solid fa-user fs-1"></i>
                                                </div>
                                                <div>
                                                    <div>
                                                        <input type="hidden" value="{{$citytourRating['star']}}" name="star" class="d-none">
                                                        <div class="rating-show border-0 d-flex" direction="ltr" style="max-width: 100%">
                                                        <label class="py-0" for="star5"></label>
                                                        <label class="py-0" for="star4"></label>
                                                        <label class="py-0" for="star3"></label>
                                                        <label class="py-0" for="star2"></label>
                                                        <label class="py-0" for="star1"></label>
                                                        </div>
                                                        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
                                                        <script>
                                                        $(document).ready(function(){
                                                            var starValue = $('input[name="star"]').val();
                                                            $('.rating-show label').removeClass('active');
                                                            for (var i = 1; i <= starValue; i++) {
                                                            $('.rating-show label:nth-child(' + i + ')').addClass('active');
                                                            }
                                                        });
                                                        </script>
                                                    </div>
                                                    <div>
                                                        <h5 class="m-0 ms-2">{{$citytourRating['name']}} {{$citytourRating['lastname']}}</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <p class="mt-3">{{$citytourRating['review']}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="next_arrow11">
                                <i class="bi bi-chevron-left"></i>
                            </div>
                        </div>
                    @endif

                    @if (count($musuemRatings) > 0)
                        <h2 class="sky-clr fw-bold mt-2 ps-3"><span class="golden-clr">Musuems </span></h2>
                        <div class="position-relative mt-5 h-100">
                            <div class="prev_arrow12">
                                <i class="bi bi-chevron-right"></i>
                            </div>
                            <div class="row mt-3 testimonial12">
                                @foreach ($musuemRatings as $musuemRating)
                                <div class="col-12 m-3">
                                    <div class="border-golden sky-bg rounded-3 p-3 sld">
                                        <div class="blue-light-bg rounded-3 p-3">
                                            <div class="d-flex align-items-center ">
                                                <div class="">
                                                    <i class="fa-solid fa-user fs-1"></i>
                                                </div>
                                                <div>
                                                    <div>
                                                        <input type="hidden" value="{{$musuemRating['star']}}" name="star" class="d-none">
                                                        <div class="rating-show border-0 d-flex" direction="ltr" style="max-width: 100%">
                                                        <label class="py-0" for="star5"></label>
                                                        <label class="py-0" for="star4"></label>
                                                        <label class="py-0" for="star3"></label>
                                                        <label class="py-0" for="star2"></label>
                                                        <label class="py-0" for="star1"></label>
                                                        </div>
                                                        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
                                                        <script>
                                                        $(document).ready(function(){
                                                            var starValue = $('input[name="star"]').val();
                                                            $('.rating-show label').removeClass('active');
                                                            for (var i = 1; i <= starValue; i++) {
                                                            $('.rating-show label:nth-child(' + i + ')').addClass('active');
                                                            }
                                                        });
                                                        </script>
                                                    </div>
                                                    <div>
                                                        <h5 class="m-0 ms-2">{{$musuemRating['name']}} {{$musuemRating['lastname']}}</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <p class="mt-3">{{$musuemRating['review']}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="next_arrow12">
                                <i class="bi bi-chevron-left"></i>
                            </div>
                        </div>
                    @endif

                    @if (count($siteRatings) > 0)
                        <h2 class="sky-clr fw-bold mt-2 ps-3"><span class="golden-clr">Sites </span>and <span class="golden-clr">Monuments </span></h2>
                        <div class="position-relative mt-5 h-100">
                            <div class="prev_arrow13">
                                <i class="bi bi-chevron-right"></i>
                            </div>
                            <div class="row mt-3 testimonial13">
                                @foreach ($siteRatings as $siteRating)
                                <div class="col-12 m-3">
                                    <div class="border-golden sky-bg rounded-3 p-3 sld">
                                        <div class="blue-light-bg rounded-3 p-3">
                                            <div class="d-flex align-items-center ">
                                                <div class="">
                                                    <i class="fa-solid fa-user fs-1"></i>
                                                </div>
                                                <div>
                                                    <div>
                                                        <input type="hidden" value="{{$siteRating['star']}}" name="star" class="d-none">
                                                        <div class="rating-show border-0 d-flex" direction="ltr" style="max-width: 100%">
                                                        <label class="py-0" for="star5"></label>
                                                        <label class="py-0" for="star4"></label>
                                                        <label class="py-0" for="star3"></label>
                                                        <label class="py-0" for="star2"></label>
                                                        <label class="py-0" for="star1"></label>
                                                        </div>
                                                        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
                                                        <script>
                                                        $(document).ready(function(){
                                                            var starValue = $('input[name="star"]').val();
                                                            $('.rating-show label').removeClass('active');
                                                            for (var i = 1; i <= starValue; i++) {
                                                            $('.rating-show label:nth-child(' + i + ')').addClass('active');
                                                            }
                                                        });
                                                        </script>
                                                    </div>
                                                    <div>
                                                        <h5 class="m-0 ms-2">{{$siteRating['name']}} {{$siteRating['lastname']}}</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <p class="mt-3">{{$siteRating['review']}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="next_arrow13">
                                <i class="bi bi-chevron-left"></i>
                            </div>
                        </div>
                    @endif

                    @if (count($activitiesRatings) > 0)
                        <h2 class="sky-clr fw-bold mt-2 ps-3"><span class="golden-clr">Daily </span>Activities</h2>
                        <div class="position-relative mt-5 h-100">
                            <div class="prev_arrow14">
                                <i class="bi bi-chevron-right"></i>
                            </div>
                            <div class="row mt-3 testimonial14">
                                @foreach ($activitiesRatings as $activitiesRating)
                                <div class="col-12 m-3">
                                    <div class="border-golden sky-bg rounded-3 p-3 sld">
                                        <div class="blue-light-bg rounded-3 p-3">
                                            <div class="d-flex align-items-center ">
                                                <div class="">
                                                    <i class="fa-solid fa-user fs-1"></i>
                                                </div>
                                                <div>
                                                    <div>
                                                        <input type="hidden" value="{{$activitiesRating['star']}}" name="star" class="d-none">
                                                        <div class="rating-show border-0 d-flex" direction="ltr" style="max-width: 100%">
                                                        <label class="py-0" for="star5"></label>
                                                        <label class="py-0" for="star4"></label>
                                                        <label class="py-0" for="star3"></label>
                                                        <label class="py-0" for="star2"></label>
                                                        <label class="py-0" for="star1"></label>
                                                        </div>
                                                        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
                                                        <script>
                                                        $(document).ready(function(){
                                                            var starValue = $('input[name="star"]').val();
                                                            $('.rating-show label').removeClass('active');
                                                            for (var i = 1; i <= starValue; i++) {
                                                            $('.rating-show label:nth-child(' + i + ')').addClass('active');
                                                            }
                                                        });
                                                        </script>
                                                    </div>
                                                    <div>
                                                        <h5 class="m-0 ms-2">{{$activitiesRating['name']}} {{$activitiesRating['lastname']}}</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <p class="mt-3">{{$activitiesRating['review']}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            </div>
                            <div class="next_arrow14">
                                <i class="bi bi-chevron-left"></i>
                            </div>
                        </div>
                    @endif

                    @if (count($accRatings) > 0)
                        <h2 class="sky-clr fw-bold mt-2 ps-3"><span class="golden-clr">Accomodations </span></h2>
                        <div class="position-relative mt-5 h-100">
                            <div class="prev_arrow15">
                                <i class="bi bi-chevron-right"></i>
                            </div>
                            <div class="row mt-3 testimonial15">
                                @foreach ($accRatings as $accRating)
                                <div class="col-12 m-3">
                                    <div class="border-golden sky-bg rounded-3 p-3 sld">
                                        <div class="blue-light-bg rounded-3 p-3">
                                            <div class="d-flex align-items-center ">
                                                <div class="">
                                                    <i class="fa-solid fa-user fs-1"></i>
                                                </div>
                                                <div>
                                                    <div>
                                                        <input type="hidden" value="{{$accRating['star']}}" name="star" class="d-none">
                                                        <div class="rating-show border-0 d-flex" direction="ltr" style="max-width: 100%">
                                                        <label class="py-0" for="star5"></label>
                                                        <label class="py-0" for="star4"></label>
                                                        <label class="py-0" for="star3"></label>
                                                        <label class="py-0" for="star2"></label>
                                                        <label class="py-0" for="star1"></label>
                                                        </div>
                                                        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
                                                        <script>
                                                        $(document).ready(function(){
                                                            var starValue = $('input[name="star"]').val();
                                                            $('.rating-show label').removeClass('active');
                                                            for (var i = 1; i <= starValue; i++) {
                                                            $('.rating-show label:nth-child(' + i + ')').addClass('active');
                                                            }
                                                        });
                                                        </script>
                                                    </div>
                                                    <div>
                                                        <h5 class="m-0 ms-2">{{$accRating['name']}} {{$accRating['lastname']}}</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <p class="mt-3">{{$accRating['review']}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="next_arrow15">
                                <i class="bi bi-chevron-left"></i>
                            </div>
                        </div>
                    @endif
                    @if (count($tripRatings) > 0)
                    <h2 class="sky-clr fw-bold mt-2 ps-3"><span class="golden-clr">Trip </span></h2>
                    <div class="position-relative mt-5 h-100">
                        <div class="prev_arrow15">
                            <i class="bi bi-chevron-right"></i>
                        </div>
                        <div class="row mt-3 testimonial15">
                            @foreach ($tripRatings as $tripRating)
                            <div class="col-12 m-3">
                                <div class="border-golden sky-bg rounded-3 p-3 sld">
                                    <div class="blue-light-bg rounded-3 p-3">
                                        <div class="d-flex align-items-center ">
                                            <div class="">
                                                <i class="fa-solid fa-user fs-1"></i>
                                            </div>
                                            <div>
                                                <div>
                                                    <input type="hidden" value="{{$tripRating['star']}}" name="star" class="d-none">
                                                    <div class="rating-show border-0 d-flex" direction="ltr" style="max-width: 100%">
                                                    <label class="py-0" for="star5"></label>
                                                    <label class="py-0" for="star4"></label>
                                                    <label class="py-0" for="star3"></label>
                                                    <label class="py-0" for="star2"></label>
                                                    <label class="py-0" for="star1"></label>
                                                    </div>
                                                    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
                                                    <script>
                                                    $(document).ready(function(){
                                                        var starValue = $('input[name="star"]').val();
                                                        $('.rating-show label').removeClass('active');
                                                        for (var i = 1; i <= starValue; i++) {
                                                        $('.rating-show label:nth-child(' + i + ')').addClass('active');
                                                        }
                                                    });
                                                    </script>
                                                </div>
                                                <div>
                                                    <h5 class="m-0 ms-2">{{$tripRating['name']}} {{$tripRating['lastname']}}</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="mt-3">{{$tripRating['review']}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="next_arrow15">
                            <i class="bi bi-chevron-left"></i>
                        </div>
                    </div>
                    @endif
                    @if (count($packageRatings) > 0)
                        <h2 class="sky-clr fw-bold mt-2 ps-3"><span class="golden-clr">Packages</h2>
                        <div class="position-relative mt-5 h-100">
                            <div class="prev_arrow11">
                                <i class="bi bi-chevron-right"></i>
                            </div>
                            <div class="row mt-3 testimonial11">
                                @foreach ($packageRatings as $packageRating)
                                <div class="col-12 m-3">
                                    <div class="border-golden sky-bg rounded-3 p-3 sld">
                                        <div class="blue-light-bg rounded-3 p-3">
                                            <div class="d-flex align-items-center ">
                                                <div class="">
                                                    <i class="fa-solid fa-user fs-1"></i>
                                                </div>
                                                <div>
                                                    <div>
                                                        <input type="hidden" value="{{$packageRating['star']}}" name="star" class="d-none">
                                                        <div class="rating-show border-0 d-flex" direction="ltr" style="max-width: 100%">
                                                        <label class="py-0" for="star5"></label>
                                                        <label class="py-0" for="star4"></label>
                                                        <label class="py-0" for="star3"></label>
                                                        <label class="py-0" for="star2"></label>
                                                        <label class="py-0" for="star1"></label>
                                                        </div>
                                                        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
                                                        <script>
                                                        $(document).ready(function(){
                                                            var starValue = $('input[name="star"]').val();
                                                            $('.rating-show label').removeClass('active');
                                                            for (var i = 1; i <= starValue; i++) {
                                                            $('.rating-show label:nth-child(' + i + ')').addClass('active');
                                                            }
                                                        });
                                                        </script>
                                                    </div>
                                                    <div>
                                                        <h5 class="m-0 ms-2">{{$packageRating['name']}} {{$packageRating['lastname']}}</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <p class="mt-3">{{$packageRating['review']}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="next_arrow11">
                                <i class="bi bi-chevron-left"></i>
                            </div>
                        </div>
                    @endif
                @else
                    <div class="d-flex align-items-center mt-3 ">
                        <i class="fas fa-exclamation-triangle text-danger fs-4 me-2"></i><p class="text-danger fs-5 mb-0">No record to show</p>
                    </div>
                @endif
            </div>
        </div>
    </section>
    @include('template.footer')
    @include('template.jslinks')
</body>

</html>
