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
                <h4 class="rounded-8 text-capitalize create-head px-3 py-3 mt-3">Update Vehicle</h4>
                <form action="/updatevehicle" enctype="multipart/form-data" method="POST" class="mt-2">
                    @csrf
                    <input type="text" class="w-100 d-none" name="id" value="{{$vehicle->id}}">
                   
                    <div class="form-field d-sm-flex justify-content-between flex-wrap">
                        <div class="input-field mt-4">
                            <input type="text" class="w-100" placeholder="" value="{{$vehicle['vehicle']}}" name="vehicle">
                        </div>
                        <div class="input-field mt-4">
                            <input type="text" class="w-100" placeholder="" value="{{$vehicle['name']}}" name="name">
                        </div>
                    </div>
                    <div class="form-field d-sm-flex justify-content-between flex-wrap">
                        <div class="input-field mt-4">
                            <input type="number" class="w-100" placeholder="" value="{{$vehicle['price']}}" name="price">
                        </div>
                        <div class="input-field mt-4">
                            <input type="number" class="w-100" placeholder="" value="{{$vehicle['people']}}" name="people">
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
                            <input type="submit" name="submit" value="Update Vehicle" class="w-100">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    @include('admin.templates.scripts')
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAu1gwHCSzLG9ACacQqLk-LG8oJMkarNF0&libraries=drawing,places&callback=initAutocomplete">
</script>
</body>
</html>