<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tours</title>
    @include('template.csslinks')
</head>

<body class="">
    @include('template.header')
    <section class="main-tem">
        @include('template.sidepanel')
        <!-- main content -->
        <div class="right-content ftr fix_div back_img py-5">
            <div class="container">
                <div class="main-border py-2 d-flex align-items-center gap-2">
                    <div>
                        <a href="{{ asset('tour1') }}" class="text-decoration-none">
                            <i class="bi bi-arrow-left text-dark sky-light pb-2 pt-1 px-2 rounded-2"></i>
                        </a>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <p class="golden-clr m-0 font-22">Tours</p>
                    </div>
                </div>
                @if (count($cityTours) > 0)
                    <div class="row">
                        <div class="col-md-11 col-12 mx-auto">
                            <div class=" mt-5 position-relative sandm sites px-4 px-sm-5 px-md-3">
                                <h4 class="text-white text-uppercase">City's Tours</h4>

                                <div class="prev_arrow5 ">
                                    <i class="fa-solid fa-arrow-left rounded-circle sky-bg px-2 py-2 text-dark"></i>
                                </div>
                                <div class="row site-map mx-3">
                                    @foreach ($cityTours as $citytour)
                                        <a href="/{{ 'city_tour_det/' . $citytour['id'] }}"
                                            class="col-12 mx-2 text-decoration-none text-dark">
                                            <div class="ct-img">
                                                <img src="<?php echo asset('uploads/' . $citytour['img']); ?>" alt="" class="minor-img">
                                            </div>
                                            <div class="sky-bg p-2 round-site px-2 py-3">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h5 class="font-14 m-0 fw-bold">{{ $citytour['name'] }}</h5>
                                                    <p class="text-white m-0 fw-bold">{{ $citytour['price'] }}</p>
                                                </div>
                                                <div class="d-flex align-items-center gap-2">
                                                    <i class="bi bi-geo-alt-fill"></i>
                                                    <p class="m-0 font-13">{{ $citytour['location'] }}.</p>
                                                </div>
                                            </div>
                                        </a>
                                    @endforeach
                                    <div class="next_arrow5 ">
                                        <i
                                            class="fa-solid fa-arrow-right rounded-circle sky-bg px-2 py-2 text-dark"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                @endif
                @if (count($museums) > 0)
                    <div class="row black-opacity mt-5 rounded-4 py-5 px-2 px-sm-0 mx-sm-0 mx-3">
                        <div class="col-sm-11 col-10 mx-auto">
                            <div class="position-relative sites">
                                <h4 class="text-white text-uppercase">Museums</h4>
                                <div class="prev_arrow3">
                                    <i class="fa-solid fa-arrow-left rounded-circle golden-bg px-2 py-2 text-dark"></i>
                                </div>
                                <div class="row site-map2">
                                    @foreach ($museums as $musuem)
                                        <div class="col-12 mx-2">
                                            <a href="/{{ 'musuem_det/' . $musuem['id'] }}"
                                                class="text-dark text-decoration-none">
                                                <div>
                                                    <img src="<?php echo asset('uploads/' . $musuem['img']); ?>" alt="" class="minor-img">
                                                </div>
                                                <div class="golden-bg p-2 round-site px-2 py-3">
                                                    <h5 class="font-14">{{ $musuem['name'] }}</h5>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <i class="bi bi-geo-alt-fill"></i>
                                                        <p class="m-0 font-13">{{ $musuem['location'] }}</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="next_arrow3">
                                    <i class="fa-solid fa-arrow-right rounded-circle golden-bg px-2 py-2 text-dark"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                @if (count($sites) > 0)
                    <div class="row">
                        <div class="col-sm-11 col-10 mx-auto">
                            <div class=" mt-5 position-relative sites">
                                <h4 class="text-white text-uppercase">Sites and Monuments</h4>
                                <div class="prev_arrow4">
                                    <i class="fa-solid fa-arrow-left rounded-circle sky-bg px-2 py-2 text-dark"></i>
                                </div>
                                <div class="row site-map3">
                                    @foreach ($sites as $site)
                                        <div class="col-12 mx-2">
                                            <a href="/{{ 'sitesandmonoments/' . $site['id'] }}"
                                                class="text-decoration-none text-dark">
                                                <div>
                                                    <img src="<?php echo asset('uploads/' . $site['img']); ?>" alt="" class="minor-img">
                                                </div>
                                                <div class="sky-bg p-2 round-site px-2 py-3">
                                                    <h5 class="font-14">{{ $site['name'] }}</h5>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <i class="bi bi-geo-alt-fill"></i>
                                                        <p class="m-0 font-13">{{ $site['location'] }}</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="next_arrow4">
                                    <i class="fa-solid fa-arrow-right rounded-circle sky-bg px-2 py-2 text-dark"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>
    @include('template.footer')
    @include('template.jslinks')
</body>

</html>
