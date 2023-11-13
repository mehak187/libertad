<!doctype html>
<html lang="en">

<head>
    @include('admin.templates.links')
    <title>Add Airport Shuttle</title>
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
                <h4 class="rounded-8 text-capitalize create-head px-3 py-3 mt-3">Add Airport Shuttle</h4>
                <form action="addshuttle" enctype="multipart/form-data" method="POST" class="mt-2">
                    @csrf
                    <div class="form-field d-sm-flex justify-content-between flex-wrap">
                        <div class="input-field mt-4">
                            <input type="text" class="w-100" placeholder="From" name="from">
                            @error('from')
                                <span class="error text-danger">
                                    {{$message}}
                                </span>
                            @enderror
                        </div>
                        <div class="input-field mt-4">
                            <input type="text" class="w-100" placeholder="TO" name="to">
                            @error('to')
                                <span class="error text-danger">
                                    {{$message}}
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-field d-sm-flex justify-content-between flex-wrap">
                        <div class="input-field mt-4">
                            <input type="number" class="w-100" placeholder="Passengers" name="passengers">
                            @error('passengers')
                                <span class="error text-danger">
                                    {{$message}}
                                </span>
                            @enderror
                        </div>
                        <div class="input-field mt-4">
                            <input type="number" class="w-100" placeholder="Price" name="price">
                            @error('price')
                                <span class="error text-danger">
                                    {{$message}}
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-field d-sm-flex justify-content-between flex-wrap">
                        <div class="input-field mt-4">
                            <input type="text" class="w-100" placeholder="vehicle Type" name="vehicle">
                            @error('vehicle')
                                <span class="error text-danger">
                                    {{$message}}
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-field d-sm-flex justify-content-between flex-wrap">
                        <div class="input-field dark-btn mt-4">
                            <label for="tour-img" class="text-dark fs-bold">Vehicle image</label>
                            <input type="file" class="w-100" id="tour-img" name="img" onchange="showImagePreview(this)">
                        </div>
                    </div>
                    <div class="mt-3">
                        <img id="image-preview" src="" alt="" class="w-300" style="display: none;">
                        @error('img')
                                <span class="error text-danger">
                                    {{$message}}
                                </span>
                            @enderror
                    </div>
                    <div class="form-field d-sm-flex justify-content-between flex-wrap">
                        <div class="input-field dark-btn mt-4">
                            <input type="submit" name="submit" value="Save Airport Shuttle" class="w-100">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    @include('admin.templates.scripts')
</body>
</html>