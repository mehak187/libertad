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
            <div class="top-nav d-flex justify-content-between align-items-center px-3 position-relative">
                <img class="position-absolute togg-btn" src="{{ asset('imgs/white-ham.png') }}" alt=""
                    style="left: 15px;">
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
                <h4 class="rounded-8 text-capitalize create-head px-3 py-3 mt-3">Edit city tour</h4>
                <form action="/update_musuem" method="POST" enctype="multipart/form-data" class="mt-2">
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
                            <label for="price" class="text-dark fw-bold">Price in USD</label>
                            <input type="number" class="w-100" id="price" value="{{ $citytour->price }}"
                                name="price">
                        </div>
                    </div>
                    <div class="form-field d-sm-flex justify-content-between flex-wrap">
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
                            <label for="sight_seeing" class="text-dark fw-bold">Sight Seeing</label>
                            <textarea class="w-100" name="sight_seeing">{{ $citytour->sight_seeing }}</textarea>
                            <p class="note mb-0"><b>Note:</b> Separate each with comma</p>
                        </div>
                    </div>
                    <div class="form-field d-sm-flex justify-content-between flex-wrap">
                        <div class="input-field w-100 dark-btn mt-4">
                            <label for="include" class="text-dark fw-bold">Include</label>
                            <textarea class="w-100" name="include">{{ $citytour->include }}</textarea>
                            <p class="note mb-0"><b>Note:</b> Separate each with comma</p>
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
                            <label for="tour-img" class="text-dark fw-bold">Tour image<br>
                                <img id="image-preview-single" src="<?php echo asset('uploads/' . $citytour['img']); ?>" alt=""
                                    class="w-300 mt-2">
                            </label>
                            <input type="file" id="tour-img" name="img" class="d-none"
                                onchange="updateImagePreview(this)">
                        </div>
                    </div>
                    @if (count($galleryImages) > 0)
                        <h4 class="fs-6 mt-4 mb-2 fw-bold">Gallery images</h4>
                        <div id="preview-container">
                            <?php $num = 1; ?>
                            @foreach ($galleryImages as $galleryImage)
                                <label for="gallery-img-<?php echo $num; ?>" class="position-relative w-300">
                                    <input type="text" class="w-100 d-none" name="gallery_id[]"
                                        value="{{ $galleryImage->id }}">
                                    <img id="preview-img-<?php echo $num; ?>" src="<?php echo asset('uploads/' . $galleryImage['image_path']); ?>"
                                        alt="">
                                    <input type="file" name="images[]"
                                        class="position-absolute top-0 start-0 w-100 h-100 d-none"
                                        id="gallery-img-<?php echo $num; ?>"
                                        onchange="updateImageSrc(this, 'preview-img-<?php echo $num; ?>')">
                                </label>
                                <?php $num++; ?>
                            @endforeach
                        </div>
                    @endif
                    <div class="form-field d-sm-flex justify-content-between flex-wrap">
                        <div class="input-field dark-btn mt-4">
                            <input type="submit" value="update city tour" class="w-100">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    @include('admin.templates.scripts')
</body>

</html>
