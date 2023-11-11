<!doctype html>
<html lang="en">

<head>
    @include('admin.templates.links')
    <title>Add Musuem</title>
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
                        <a href="/manage_musuem" class="d-flex align-items-center rounded-3">
                            <img src="{{ asset('imgs/back.png') }}" alt="back-arrow" class="me-3">
                            <span>Back</span>
                        </a>
                    </div>
                </div>
                <h4 class="rounded-8 text-capitalize create-head px-3 py-3 mt-3">Add musuem</h4>
                @if (count($cities) > 0)
                    <form action="save_musuem" method="POST" enctype="multipart/form-data" class="mt-2">
                        @csrf
                        <div class="form-field d-sm-flex justify-content-between flex-wrap">
                            <div class="input-field mt-4">
                                <input type="text" class="w-100" placeholder="Musuem name" name="name" value="{{old('name')}}">
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
                            <div class="input-field mt-4">
                                <input type="number" class="w-100" placeholder="tour price in usd" name="price" value="{{old('price')}}">
                                @error('price')
                                    <span class="error text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-field d-sm-flex justify-content-between flex-wrap">
                            <div class="input-field mt-4">
                                <select name="city" class="w-100" >
                                    <option value="" selected disabled hidden>Choose city</option>
                                    @foreach ($cities as $city)
                                        <option value="{{$city['id']}}">{{$city['Cityname']}}</option>
                                    @endforeach
                                </select>
                                @error('city')
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
                                <label for="book_img" class="text-dark fs-bold">Musuem image</label>
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
                                <input type="submit" value="Save musuem" class="w-100">
                            </div>
                        </div>
                    </form>
                @else
                <div class="d-flex align-items-center mt-3 ">
                    <i class="fas fa-exclamation-triangle text-danger fs-4 me-2"></i>
                    <p class="text-danger fs-5">No city exist. Add cities first</p>
                </div>
                    <div class="d-flex mt-3">
                        <a href="/add_cities" class="bg-yellow text-dark py-2 px-3 text-decoration-none rounded-3">Add
                            City</a>
                    </div>
                @endif
            </div>
        </div>
    </section>
    @include('admin.templates.scripts')
</body>

</html>
