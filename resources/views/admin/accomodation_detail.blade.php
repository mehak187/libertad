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
                <h4 class="rounded-8 text-capitalize create-head px-3 py-3 mt-3">Accomodation details</h4>
                <div class="row mt-3">
                    <div class="col-lg-6">
                        <img src="<?php echo asset('uploads/' . $hotel['tourimg'])?>" alt="" class="img-tree rounded-4">
                    </div>
                    <div class="col-lg-6 py-3 px-4">
                        <p class="text-dark small">{{$hotel['name']}}</p>
                        <div class="row mt-3">
                            <p class="text-dark small">{{$hotel['card_des']}}</p>
                            <div class="d-flex gap-2 mt-4">
                                <h6 class="golden-clr">City:</h6>
                                <span class="text-dark">{{$hotel['Cityname']}}</span>
                            </div>
                            <div class="d-flex gap-2 mt-4">
                                <h6 class="golden-clr">Tour Duration:</h6>
                                <span class="text-dark">{{$hotel['nights_nmbr']}}</span>
                            </div>
                            <div class="d-flex gap-2 mt-4">
                                <h6 class="golden-clr">No. of rooms:</h6>
                                <span class="text-dark">{{$hotel['rooms']}}</span>
                            </div>
                            <div class="d-flex gap-2">
                                <h6 class="golden-clr">Tour Price:</h6>
                                <span class="text-dark">{{$hotel['tour_price']}} USD per adult</span>
                            </div>
                            <div>
                                <h6 class="golden-clr mt-3">Sightseeing</h6>
                                @php
                                $inputString = $hotel['sight_seeing'];
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
                                $inputString = $hotel['include'];
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
            </div>
        </div>
    </section>
    @include('admin.templates.scripts')
</body>
</html>