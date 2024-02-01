<!doctype html>
<html lang="en">

<head>
    @include('admin.templates.links')
    <title>Accomodation Details </title>
</head>
<body>
    <section class="main-tem">
        @include('admin.templates.sidebar-template')
        <div class="right-content p-0" style="background: #FAFBFE;">
    @include('admin.templates.adminheader')
            <div class="px-4 py-4 m-content px-lg-5">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="dark-btn">
                        <a href="{{ URL::previous() }}" class="d-flex align-items-center rounded-3">
                            <img src="{{ asset('imgs/back.png') }}" alt="back-arrow" class="me-3">
                            <span>Back</span>
                        </a>
                    </div>
                </div>
                <h4 class="rounded-8 text-capitalize create-head px-3 py-3 mt-3">Listing details</h4>
                <div class="row mt-3">
                    <div class="col-lg-6">
                        <img src="<?php echo asset('uploads/' . $hotel['tourimg'])?>" alt="" class="img-tree rounded-4">
                    </div>
                    <div class="col-lg-6 py-3 px-4">
                        <p class="text-dark small">{{$hotel['name']}}</p>
                        <div class="row mt-3">
                            <p class="text-dark small">{{$hotel['des']}}</p>
                            <div class="d-flex gap-2 mt-4">
                                <h6 class="golden-clr">People:</h6>
                                <span class="text-dark">{{$hotel['people']}}</span>
                            </div>
                            <div class="d-flex gap-2">
                                <h6 class="golden-clr">No. of rooms:</h6>
                                <span class="text-dark">{{$hotel['room']}}</span>
                            </div>
                            <div class="d-flex gap-2">
                                <h6 class="golden-clr">From:</h6>
                                <span class="text-dark">{{$hotel['from']}}</span>
                            </div>
                            <div class="d-flex gap-2">
                                <h6 class="golden-clr">To:</h6>
                                <span class="text-dark">{{$hotel['to']}}</span>
                            </div>
                            <div class="d-flex gap-2">
                                <h6 class="golden-clr">Rent Category:</h6>
                                <span class="text-dark">{{$hotel['rent_catg']}}</span>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('admin.templates.scripts')
</body>
</html>