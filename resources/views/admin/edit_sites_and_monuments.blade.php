<!doctype html>
<html lang="en">

<head>
    @include('admin.templates.links')
    <title>Edit city tours </title>
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
                <h4 class="rounded-8 text-capitalize create-head px-3 py-3 mt-3">Edit sites and monuments</h4>
                <form action="/update_sites_and_monuments" method="POST" enctype="multipart/form-data" class="mt-2">
                    @csrf
                    <input type="text" class="w-100 d-none" name="id" value="{{ $citytour->id }}">
                    <div class="form-field d-sm-flex justify-content-between flex-wrap">
                        <div class="input-field mt-4">
                            <label for="name" class="text-dark fw-bold">Name</label>
                            <input type="text" class="w-100" id="name" name="name"
                                value="{{ $citytour->name }}">
                        </div>
                        <div class="input-field mt-4">
                            <label for="location" class="text-dark fw-bold">Location</label>
                            <input type="text" class="w-100" id="location" value="{{ $citytour->location }}"
                                name="location">
                        </div>
                    </div>
                    <div class="form-field d-sm-flex justify-content-between flex-wrap">
                        <div class="input-field mt-4">
                            <label for="night" class="text-dark fw-bold">No. of nights</label>
                            <input type="text" class="w-100" id="nights" value="{{ $citytour->nights }}"
                                name="night">
                        </div>
                        <div class="input-field mt-4">
                            <label for="night" class="text-dark fw-bold">City</label>
                            <select name="city" class="w-100">
                                <option value="" selected disabled hidden>Choose city</option>
                                @foreach ($cities as $city)
                                    <option value="{{ $city['id'] }}" {{ (old('city') == $city['id'] || (old('city') == null && $city['id'] == $citytour->city)) ? 'selected' : '' }}>
                                        {{ $city['Cityname'] }} 
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-field d-sm-flex justify-content-between flex-wrap">
                        <div class="input-field w-100 dark-btn mt-4">
                            <label for="des" class="text-dark fw-bold">Description</label>
                            <textarea class="w-100" name="des"> {{ $citytour->des }}
                            </textarea>
                        </div>
                    </div>
                    <div class="form-field d-sm-flex justify-content-between flex-wrap">
                        <div class="input-field dark-btn mt-4">
                            <label for="tour-img" class="text-dark fw-bold s-field">Tour image<br>
                                <img id="image-preview-single" src="<?php echo asset('uploads/' . $citytour['img']); ?>" alt=""
                                    class="w-300 mt-2">
                            </label>
                            <input type="file" id="tour-img" name="img" class="d-none"
                                onchange="updateImagePreview(this)">
                        </div>
                    </div>
                    <div class="days-wrapper">
                        @php
                        $day_nmbr = 1;
                        @endphp
                        @foreach ($days as $day)
                        <div class="day-content mt-4">
                            <p class="fs-6 mb-0">Day {{$day_nmbr}}:</p>
                            <input type="text" class="w-100 d-none" name="days_id[]"
                            value="{{ $day->id }}">
                            <div class="form-field d-sm-flex justify-content-between flex-wrap mt-2">
                                <div class="input-field">
                                    <input type="text" class="w-100" placeholder="Day 1 title" name="day_title[]" value="{{$day->day_title}}">
                                </div>
                            </div>
                            <div class="form-field d-sm-flex justify-content-between flex-wrap">
                                <div class="input-field w-100 dark-btn mt-4">
                                    <textarea class="w-100" placeholder="Day 1 Description" name="day_des[]">{{$day->day_des}}</textarea>
                                </div>
                            </div>
                        </div>
                        @php
                            $day_nmbr=$day_nmbr+1;
                        @endphp
                        @endforeach
                        {{-- <div id="add-days" class="pointer text-black">
                            <i class="fas fa-plus my-2 text-white bg-yellow px-2 py-2 ms-2"></i>
                            Add more days
                        </div> --}}
                    </div>
                    @if (count($galleryImages) > 0)
                        <h4 class="fs-6 mt-4 mb-2 fw-bold">Gallery images</h4>
                        <div id="preview-container">
                            <?php $num = 1; ?>
                            @foreach ($galleryImages as $galleryImage)
                                <label for="gallery-img-<?php echo $num; ?>" class="position-relative w-300 my-2 mx-2">
                                    <input type="text" class="w-100 d-none" name="gallery_id[]"
                                        value="{{ $galleryImage->id }}">
                                    <img id="preview-img-<?php echo $num; ?>" src="<?php echo asset('uploads/' . $galleryImage['image_path']); ?>"
                                        alt="">
                                    <input type="file" name="imagesold[]"
                                        class="position-absolute top-0 start-0 w-100 h-100 d-none"
                                        id="gallery-img-<?php echo $num; ?>"
                                        onchange="updateImageSrc(this, 'preview-img-<?php echo $num; ?>')">
                                </label>
                                <?php $num++; ?>
                            @endforeach
                        </div>
                    @endif
                    <h4 class="fs-6 mt-4 ms-2">Add more Images</h4>
                    <div class="d-flex flex-wrap align-items-center ms-2">
                        <div class=" my-2 img-m me-2 d-flex flex-wrap">
                        </div>
                        <i class="fas fa-plus my-2 text-white bg-yellow px-2 py-2" id="addInput"></i>
                    </div>
                    <div class="form-field d-sm-flex justify-content-between flex-wrap">
                        <div class="input-field dark-btn mt-4">
                            <input type="submit" value="update sites and monuments" class="w-100">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    @include('admin.templates.scripts')
</body>

</html>
