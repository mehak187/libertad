<!doctype html>
<html lang="en">

<head>
    @include('admin.templates.links')
    <title>Edit Accomodation </title>
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
                <h4 class="rounded-8 text-capitalize create-head px-3 py-3 mt-3">Edit Accomodation</h4>
                <form action="/updateaccomodation" method="POST" enctype="multipart/form-data" class="mt-2">
                    @csrf
                    <div class="form-field d-sm-flex justify-content-between flex-wrap">
                        <input type="text" class="w-100 d-none" name="id" value="{{$accomodation->id}}">
                        <div class="input-field mt-4">
                            <label for="name" class="text-dark fw-bold">Name</label>
                            <input type="text" class="w-100" id="name" name="name" value="{{$accomodation['name']}}">
                        </div>
                        <div class="input-field mt-4">
                            <label for="location" class="text-dark fw-bold">Location</label>
                            <input type="text" class="w-100" id="location" value="{{$accomodation['location']}}" name="location">
                        </div>
                    </div>
                    <div class="form-field d-sm-flex justify-content-between flex-wrap">
                        <div class="input-field mt-4">
                            <label for="price" class="text-dark fw-bold">Price in USD</label>
                            <input type="number" class="w-100" id="price" value="{{$accomodation['tour_price']}}" name="price">
                        </div>
                        <div class="input-field mt-4">
                            <label for="night" class="text-dark fw-bold">No. of nights</label>
                            <input type="text" class="w-100" id="nights" value="{{$accomodation['nights_nmbr']}}" name="night">
                        </div>
                    </div>
                    <div class="form-field d-sm-flex justify-content-between flex-wrap">
                        <div class="input-field mt-4">
                            <label for="rooms" class="text-dark fw-bold">No. of rooms</label>
                            <input type="number" class="w-100" id="rooms" value="{{$accomodation['rooms']}}" name="rooms">
                        </div>
                    </div>
                    <div class="form-field d-sm-flex justify-content-between flex-wrap">
                        <div class="input-field w-100 dark-btn mt-4">
                            <label for="sight_seeing" class="text-dark fw-bold">Sight Seeing</label>
                            <textarea  class="w-100" name="sight_seeing" id="sight_seeing">{{$accomodation['sight_seeing']}}</textarea>
                            <p class="note mb-0"><b>Note:</b> Separate each with comma</p>
                        </div>
                    </div>
                    <div class="form-field d-sm-flex justify-content-between flex-wrap">
                        <div class="input-field w-100 dark-btn mt-4">
                            <label for="include" class="text-dark fw-bold">Include</label>
                            <textarea  class="w-100" id="include" name="include">{{$accomodation['include']}}</textarea>
                            <p class="note mb-0"><b>Note:</b> Separate each with comma</p>
                        </div> 
                    </div>
                    <div class="form-field d-sm-flex justify-content-between flex-wrap">
                        <div class="input-field w-100 dark-btn mt-4">
                            <label for="des" class="text-dark fw-bold">Description</label>
                            <textarea class="w-100" id="des" name="des">{{$accomodation['card_des']}}</textarea>
                        </div>
                    </div>
                    <div class="form-field d-sm-flex justify-content-between flex-wrap">
                        <div class="input-field dark-btn mt-4">
                            <label for="tour-img" class="text-dark fw-bold s-field">Accomodation image<br>
                            <img id="image-preview-single" src="<?php echo asset('uploads/' . $accomodation['tourimg'])?>" alt="" class="w-300 mt-2">
                            </label>
                            <input type="file" id="tour-img" name="tourimg" class="d-none" onchange="updateImagePreview(this)">
                        </div>
                    </div>
                    <div class="form-field d-sm-flex justify-content-between flex-wrap">
                        <div class="input-field dark-btn mt-4">
                            <input type="submit" value="Save Accomodation" class="w-100">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    @include('admin.templates.scripts')
</body>
</html>