<!doctype html>
<html lang="en">

<head>
    @include('admin.templates.links')
    <title>Add City Tours</title>
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
                <h4 class="rounded-8 text-capitalize create-head px-3 py-3 mt-3">Manage why libertad</h4>
                <form action="save_libertad" method="POST" enctype="multipart/form-data" class="mt-2">
                    @csrf

                    <div class="form-field d-sm-flex justify-content-between flex-wrap">
                        <div class="input-field w-100 dark-btn mt-4">
                            <label for="des" class="text-dark">Why Libertad Description</label>
                            <textarea id="des" class="w-100" placeholder="Description" name="des">{{ old('des', $libertad->des ?? '') }}</textarea>
                            @error('des')
                                <span class="error text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>
                    @if (isset($galleryImages) && count($galleryImages) > 0)
                        <?php $num = 1; ?>
                        @foreach ($galleryImages as $galleryImage)
                            <label for="gallery-img-<?php echo $num; ?>" class="position-relative w-300 my-2 mx-2">
                                <input type="text" class="w-100 d-none" name="gallery_id[]"
                                    value="{{ $galleryImage->id }}">
                                <img id="preview-img-<?php echo $num; ?>" src="<?php echo asset('uploads/' . $galleryImage['image_path']); ?>" alt="">
                                <input type="file" name="images_old[]"
                                    class="position-absolute top-0 start-0 w-100 h-100 d-none"
                                    id="gallery-img-<?php echo $num; ?>"
                                    onchange="updateImageSrc(this, 'preview-img-<?php echo $num; ?>')">
                            </label>
                            <?php $num++; ?>
                        @endforeach
                    @endif
                    <h4 class="fs-6 mt-4">Add more Images</h4>
                    <div class="d-flex flex-wrap align-items-center ">
                        <div class=" my-2 img-m me-2 d-flex flex-wrap">
                        </div>
                        <i class="fas fa-plus my-2 text-white bg-yellow px-2 py-2" id="addInput"></i>
                    </div>

                    <div class="form-field d-sm-flex justify-content-between flex-wrap">
                        <div class="input-field dark-btn mt-4">
                            <input type="submit" value="Save libertad" class="w-100">
                        </div>
                    </div>
                </form>
                {{-- @endif --}}
            </div>
        </div>
    </section>
    @include('admin.templates.scripts')
</body>

</html>
