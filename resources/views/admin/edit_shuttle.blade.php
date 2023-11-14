<!doctype html>
<html lang="en">

<head>
    @include('admin.templates.links')
    <title>Edit Airport Shuttle</title>
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
                <h4 class="rounded-8 text-capitalize create-head px-3 py-3 mt-3">Update Airport Shuttle</h4>
                <form action="/updateshuttle" enctype="multipart/form-data" method="POST" class="mt-2">
                    @csrf
                    <input type="text" class="w-100 d-none" name="id" value="{{$vehicle->id}}">
                    <div class="form-field d-sm-flex justify-content-between flex-wrap">
                        <div class="input-field mt-4">
                            <input type="text" class="w-100" placeholder="From" value="{{$vehicle['from']}}" name="from">
                        </div>
                        <div class="input-field mt-4">
                            <input type="text" class="w-100" placeholder="TO" value="{{$vehicle['to']}}" name="to">
                        </div>
                    </div>
                    <div class="form-field d-sm-flex justify-content-between flex-wrap">
                        <div class="input-field mt-4">
                            <input type="number" class="w-100" placeholder="Passengers" value="{{$vehicle['passengers']}}" name="passengers">
                        </div>
                        <div class="input-field mt-4">
                            <input type="number" class="w-100" placeholder="Price" value="{{$vehicle['price']}}" name="price">
                        </div>
                    </div>
                    <div class="form-field d-sm-flex justify-content-between flex-wrap">
                        <div class="input-field mt-4">
                            <input type="text" class="w-100" placeholder="vehicle Type" value="{{$vehicle['vehicle']}}" name="vehicle">
                        </div>
                    </div>
                    <div class="form-field d-sm-flex justify-content-between flex-wrap">
                        <div class="input-field dark-btn mt-4">
                            <label for="tour-img" class="text-dark fw-bold s-field">Vehicle image<br>
                            <img id="image-preview-single" src="<?php echo asset('uploads/' . $vehicle['img']); ?>" alt="" class="w-300 mt-2">
                            </label>
                            <input type="file" id="tour-img" name="img" class="d-none" onchange="updateImagePreview(this)">
                        </div>
                    </div>
                    <div class="mt-3">
                        <img id="image-preview" src="" alt="" class="w-300" style="display: none;">
                    </div>
                    <div class="form-field d-sm-flex justify-content-between flex-wrap">
                        <div class="input-field dark-btn mt-4">
                            <input type="submit" name="submit" value="Update Airport Shuttle" class="w-100">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    @include('admin.templates.scripts')
</body>
</html>