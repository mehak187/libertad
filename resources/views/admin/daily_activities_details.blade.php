<!doctype html>
<html lang="en">

<head>
    @include('admin.templates.links')
    <title>Daily Activities Details </title>
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
                            <div>
                                <h6 class="golden-clr mt-3">Sightseeing</h6>
                                @php
                                $inputString = $citytour['sight_seeing'];
                                $dataArray = explode(',', $inputString);
                                @endphp
                                <ul class="text-dark">
                                    @foreach ($dataArray as $item)
                                        <li class="text-dark">{{ $item }}</li>
                                    @endforeach
                                </ul>
                               
                            </div>
                            <div>
                                <h6 class="golden-clr">Include</h6>
                                @php
                                $inputString = $citytour['include'];
                                $dataArray = explode(',', $inputString);
                                @endphp
                                <ul class="text-dark">
                                    @foreach ($dataArray as $item)
                                        <li class="text-dark">{{ $item }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @if (count($galleryImages) > 0)
                <h3 class="fs-4 mb-0 mt-3">Photos and Gallery</h3>
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
            <div class="d-flex align-items-center mt-3 ">
                <i class="fas fa-exclamation-triangle text-danger fs-4 me-2"></i><p class="text-danger fs-5">No gallery image exists</p>
            </div>
         @endif
        </div>
    </section>
    @include('admin.templates.scripts')
</body>
</html>