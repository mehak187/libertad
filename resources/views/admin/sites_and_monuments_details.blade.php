<!doctype html>
<html lang="en">

<head>
    @include('admin.templates.links')
    <title>Sites and Monuments Details </title>
</head>
<body>
    <section class="main-tem">
        @include('admin.templates.sidebar-template')
        <div class="right-content p-0" style="background: #FAFBFE;">
            <div class="top-nav d-flex justify-content-between align-items-center px-3 position-relative">
                <img class="position-absolute togg-btn" src="{{ asset('imgs/white-ham.png') }}" alt="" style="left: 15px;">
                <div class="search-box d-flex align-items-center">
                    <h1>Admin Panel</h1>
                </div>
                <img src="{{ asset('imgs/profile.png') }}" alt="">
            </div>
            <div class="px-4 py-4 m-content px-lg-5">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="dark-btn">
                        <a href="{{ URL::previous() }}" class="d-flex align-items-center rounded-3">
                            <img src="{{ asset('imgs/back.png') }}" alt="back-arrow" class="me-3">
                            <span>Back</span>
                        </a>
                    </div>
                </div>
                <h4 class="rounded-8 text-capitalize create-head px-3 py-3 mt-3">Special tour details</h4>
                <div class="row mt-3">
                    <div class="col-lg-6">
                        <img src="<?php echo asset('uploads/' . $citytour['img'])?>" alt="" class="img-tree rounded-4">
                    </div>
                    <div class="col-lg-6 py-3 px-4">
                        <p class="text-dark small">{{$citytour->name}}</p>
                        <div class="row mt-3">
                            <p class="text-dark small">
                                {{$citytour->des}}
                            </p>
                            <div class="d-flex align-items-center gap-2 mt-3">
                                <h6 class="golden-clr mb-0">No. of nights:</h6>
                                <span class="text-dark mb-0">{{$citytour->nights}}</span>
                            </div>
                        </div>
                    </div>
                </div>
                @php
                    $day_nmbr = 1;
                @endphp
                @foreach ($days as $day)
                    <div class="mt-3">
                        <div>
                           <div class="d-flex align-items-center mt-2">
                                    <h5 class="golden-clr fw-normal">Day {{$day_nmbr}}: </h5>
                                    <h5 class="sky-clr  fw-normal ms-2"> {{$day->day_title}}</h5>
                           </div>
                            <div class="mt-1">
                                <p class="text-black fw-light fs-small">
                                    {{$day->day_des}}
                                </p>
                            </div>
                        </div>
                    </div>
                    @php
                        $day_nmbr=$day_nmbr+1;
                    @endphp
                @endforeach
            @if (count($galleryImages) > 0)
                <h3 class="fs-4 mb-0 mt-4">Photos and Gallery</h3>
                <div class="col bg-yellow rounded-3 px-4 py-3 mt-3">
                    <div class="row">
                        @foreach ($galleryImages as $galleryImage)
                        <div class="col-lg-2 col-md-3 col-sm-4 col-6 my-3">
                            <img src="<?php echo asset('uploads/' . $galleryImage['image_path'])?>" alt="" class="img-fluid rounded-4">
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @else
            <div class="d-flex align-items-center mt-4 ">
                <i class="fas fa-exclamation-triangle text-danger fs-4 me-2"></i><p class="text-danger fs-5">No gallery image exists</p>
            </div>
         @endif
        </div>
    </section>
    @include('admin.templates.scripts')
</body>
</html>