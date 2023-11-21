<!doctype html>
<html lang="en">

<head>
    @include('admin.templates.links')
    <title>Add Accomodation</title>
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
                <h4 class="rounded-8 text-capitalize create-head px-3 py-3 mt-3">Add accomodation</h4>
                <form action="addhotel" method="POST" enctype="multipart/form-data" class="mt-2">
                    @csrf
                    <div class="form-field d-sm-flex justify-content-between flex-wrap">
                        <div class="input-field mt-4">
                            <input type="text" class="w-100" placeholder="Hotel name" name="name">
                            @error('name')
                            <span class="error text-danger">
                                {{$message}}
                            </span>
                            @enderror
                        </div>
                        <div class="input-field mt-4">
                            <input type="text" class="w-100" placeholder="Location" name="location">
                            @error('location')
                            <span class="error text-danger">
                                {{$message}}
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-field d-sm-flex justify-content-between flex-wrap">
                        <div class="input-field mt-4">
                            <input type="number" class="w-100" placeholder="tour price in usd" name="tour_price">
                            @error('tour_price')
                            <span class="error text-danger">
                                {{$message}}
                            </span>
                            @enderror
                        </div>
                        <div class="input-field mt-4">
                            <input type="text" class="w-100" placeholder="No of nights" name="nights_nmbr">
                            @error('nights_nmbr')
                            <span class="error text-danger">
                                {{$message}}
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-field d-sm-flex justify-content-between flex-wrap">
                        <div class="input-field mt-4">
                            <input type="number" class="w-100" placeholder="No. of rooms" name="rooms">
                            @error('rooms')
                            <span class="error text-danger">
                                {{$message}}
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-field d-sm-flex justify-content-between flex-wrap">
                        <div class="input-field w-100 dark-btn mt-4">
                            <textarea class="w-100" placeholder="Sight Seeing" name="sight_seeing"></textarea>
                            <p class="note mb-0"><b>Note:</b> Separate each with comma</p>
                            @error('sight_seeing')
                            <span class="error text-danger">
                                {{$message}}
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-field d-sm-flex justify-content-between flex-wrap">
                        <div class="input-field w-100 dark-btn mt-4">
                            <textarea class="w-100" placeholder="include" name="include"></textarea>
                            <p class="note mb-0"><b>Note:</b> Separate each with comma</p>
                            @error('include')
                            <span class="error text-danger">
                                {{$message}}
                            </span>
                            @enderror
                        </div> 
                    </div>
                    <div class="form-field d-sm-flex justify-content-between flex-wrap">
                        <div class="input-field w-100 dark-btn mt-4">
                            <textarea class="w-100" placeholder="Card description" maxlength="250" name="card_des"></textarea>
                            @error('card_des')
                            <span class="error text-danger">
                                {{$message}}
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-field d-sm-flex justify-content-between flex-wrap">
                        <div class="input-field dark-btn mt-4">
                            <label for="tour-img" class="text-dark fs-bold">Tour image</label>
                            <input type="file" class="w-100" id="tour-img" name="tourimg" onchange="showImagePreview(this)">
                        </div>
                    </div>
                    <div class="mt-3">
                        <img id="image-preview" src="" alt="" class="w-300" style="display: none;">
                        @error('tourimg')
                            <span class="error text-danger">
                                {{$message}}
                            </span>
                        @enderror
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