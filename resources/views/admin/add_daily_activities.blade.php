<!doctype html>
<html lang="en">

<head>
    @include('admin.templates.links')
    <title>Add daily activities</title>
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
                <h4 class="rounded-8 text-capitalize create-head px-3 py-3 mt-3">Add daily activities</h4>
                    <form action="save_daily_activities" method="POST" enctype="multipart/form-data" class="mt-2">
                        @csrf
                        <div class="form-field d-sm-flex justify-content-between flex-wrap">
                            <div class="input-field mt-4">
                                <input type="text" class="w-100" placeholder="Tour name" name="name" value="{{old('name')}}">
                                @error('name')
                                    <span class="error text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div class="input-field mt-4">
                                <input type="text" class="w-100" placeholder="location" name="location" value="{{old('location')}}">
                                @error('location')
                                    <span class="error text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                        </div>
                       
                        <div class="form-field d-sm-flex justify-content-between flex-wrap">
                            <div class="input-field w-100 dark-btn mt-4">
                                <textarea class="w-100" placeholder="Sight Seeing" name="sight_seeing">{{old('sight_seeing')}}</textarea>
                                @error('sight_seeing')
                                    <span class="error text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                                <p class="note mb-0"><b>Note:</b> Separate each with comma</p>
                            </div>
                        </div>
                        <div class="form-field d-sm-flex justify-content-between flex-wrap">
                            <div class="input-field w-100 dark-btn mt-4">
                                <textarea class="w-100" placeholder="include" name="include">{{old('include')}}</textarea>
                                @error('include')
                                    <span class="error text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                                <p class="note mb-0"><b>Note:</b> Separate each with comma</p>
                            </div>
                        </div>
                        <div class="form-field d-sm-flex justify-content-between flex-wrap">
                            <div class="input-field w-100 dark-btn mt-4">
                                <textarea class="w-100" placeholder="Description" name="des">{{old('des')}}</textarea>
                                @error('des')
                                    <span class="error text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-field d-sm-flex justify-content-between flex-wrap">
                            <div class="input-field dark-btn mt-4">
                                <label for="book_img" class="text-dark fs-bold">Daily Activity image</label>
                                <input type="file" class="w-100" id="book_img" name="img"
                                    onchange="showImagePreview(this)">
                                @error('img')
                                    <span class="error text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="mt-3">
                            <img id="image-preview" src="" alt="" class="w-300" style="display: none;">
                        </div>
                        <h4 class="fs-6 mt-4">Gallery images</h4>
                        <div class="d-flex flex-wrap align-items-center ">
                            <div class=" my-2 img-m me-2 d-flex flex-wrap">
                            </div>
                            <i class="fas fa-plus my-2 text-white bg-yellow px-2 py-2" id="addInput"></i>
                        </div>

                        <div class="form-field d-sm-flex justify-content-between flex-wrap">
                            <div class="input-field dark-btn mt-4">
                                <input type="submit" value="Save daily activities" class="w-100">
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </section>
    @include('admin.templates.scripts')
</body>
</html>
