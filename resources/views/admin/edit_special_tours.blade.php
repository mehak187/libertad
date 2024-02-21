<!doctype html>
<html lang="en">

<head>
    @include('admin.templates.links')
    <title>Edit special tours </title>
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
                <h4 class="rounded-8 text-capitalize create-head px-3 py-3 mt-3">Edit special tour</h4>
                <form action="/updatestour" enctype="multipart/form-data" method="POST" class="mt-2">
                    @csrf
                    <input type="text" class="w-100 d-none" name="id" value="{{$stour->id}}">
                    <div class="form-field d-sm-flex justify-content-between flex-wrap">
                        <div class="input-field mt-4">
                            <label for="name" class="text-dark fw-bold">Name</label>
                            <input type="text" class="w-100" id="name" name="name" value="{{$stour['name']}}">
                        </div>
                        <div class="input-field mt-4">
                            <label for="location" class="text-dark fw-bold">Location</label>
                            <input type="text" class="w-100" id="location" value="{{$stour['location']}}" name="location">
                        </div>
                    </div>
                    <div class="form-field d-sm-flex justify-content-between flex-wrap">
                        <div class="input-field mt-4">
                            <label for="price" class="text-dark fw-bold">Price in USD</label>
                            <input type="number" class="w-100" id="price" value="{{$stour['price']}}" name="price">
                        </div>
                        <div class="input-field mt-4">
                            <label for="night" class="text-dark fw-bold">No. of nights</label>
                            <input type="text" class="w-100" id="nights" value="{{$stour['night']}}" name="night">
                        </div>
                    </div>
                    <div class="form-field d-sm-flex justify-content-between flex-wrap">
                        <div class="input-field w-100 dark-btn mt-4">
                            <label for="sight_seeing" class="text-dark fw-bold">Tour highlights</label>
                            <textarea class="w-100" name="sight_seeing" id="sight_seeing">{{$stour['sight_seeing']}}> </textarea>
                        </div>
                    </div>
                    <div class="form-field d-sm-flex justify-content-between flex-wrap">
                        <div class="input-field w-100 dark-btn mt-4">
                            <label for="include" class="text-dark fw-bold">Include</label>
                            <textarea class="w-100" id="include" name="include">{{$stour['include']}} </textarea>
                            <p class="note mb-0"><b>Note:</b> Separate each with comma</p>
                        </div> 
                    </div>
                    <div class="form-field d-sm-flex justify-content-between flex-wrap">
                        <div class="input-field w-100 dark-btn mt-4">
                            <label for="exclude" class="text-dark fw-bold">Exclude</label>
                            <textarea class="w-100" id="exclude" name="exclude">{{$stour['exclude']}} </textarea>
                            <p class="note mb-0"><b>Note:</b> Separate each with comma</p>
                        </div> 
                    </div>
                    <div class="form-field d-sm-flex justify-content-between flex-wrap">
                        <div class="input-field w-100 dark-btn mt-4">
                            <label for="des" class="text-dark fw-bold">Description</label>
                            <textarea class="w-100" id="des" maxlength="250" name="des">{{$stour['des']}}</textarea>
                        </div>
                    </div>
                    <div class="form-field d-sm-flex justify-content-between flex-wrap">
                        <div class="input-field dark-btn mt-4">
                            <label for="tour-img" class="text-dark fw-bold s-field">Special tour image<br>
                            <img id="image-preview-single" src="<?php echo asset('uploads/' . $stour['img'])?>" alt="" class="w-300 mt-2">
                            </label>
                            <input type="file" id="tour-img" name="img" class="d-none" onchange="updateImagePreview(this)">
                        </div>
                    </div>
                    <div class="form-field d-sm-flex justify-content-between flex-wrap">
                        <div class="input-field dark-btn mt-4">
                            <input type="submit" value="Save Special tour" class="w-100">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    @include('admin.templates.scripts')
</body>
</html>