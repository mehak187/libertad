<!doctype html>
<html lang="en">

<head>
    @include('admin.templates.links')
    <title>Add Site and Monuments</title>
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
                <h4 class="rounded-8 text-capitalize create-head px-3 py-3 mt-3">Add Packages</h4>
                    <form action="save_packages2" method="POST" enctype="multipart/form-data" class="mt-2">
                        @csrf
                        <div class="form-field d-sm-flex justify-content-between flex-wrap">
                            <div class="input-field mt-4">
                                <input type="text" class="w-100" placeholder="Package name" name="name" value="{{old('name')}}" required>
                                @error('name')
                                    <span class="error text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="input-field mt-4">
                                <input type="text" class="w-100" placeholder="Tour Duration" name="nights" value="{{old('nights')}}" required>
                                @error('nights')
                                    <span class="error text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-field d-sm-flex justify-content-between flex-wrap">
                            <div class="input-field mt-4">
                                <input type="number" class="w-100" placeholder="Package price" name="price" value="{{old('price')}}" required>
                                @error('price')
                                    <span class="error text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        {{-- <div class="form-field d-sm-flex justify-content-between flex-wrap">
                            
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
                        </div> --}}
                        <div class="form-field d-sm-flex justify-content-between flex-wrap">
                            <div class="input-field w-100 dark-btn mt-4">
                                <textarea class="w-100" placeholder="Tour highlights" name="sight_seeing" required>{{old('sight_seeing')}}</textarea>
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
                                <textarea class="w-100" placeholder="include" name="include" required>{{old('include')}}</textarea>
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
                                <textarea class="w-100" placeholder="exclude" name="exclude" required>{{old('exclude')}}</textarea>
                                @error('exclude')
                                    <span class="error text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                                <p class="note mb-0"><b>Note:</b> Separate each with comma</p>
                            </div>
                        </div>
                        <div class="form-field d-sm-flex justify-content-between flex-wrap">
                            <div class="input-field w-100 dark-btn mt-4">
                                <textarea class="w-100" placeholder="Description" maxlength="250" name="des" required>{{old('des')}}</textarea>
                                @error('des')
                                    <span class="error text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <input type="number" name="city" value="{{$city}}" class="d-none" readonly>
                        @if(count($sites)>0)
                        <div class="form-field d-sm-flex justify-content-between flex-wrap">
                            <div class="input-field w-100 dark-btn mt-4 mb-4">
                                <p class="fs-6 mb-2">Add sites and monuments of {{$cityname}} city</p>
                               <div class="d-flex flex-wrap">
                                    @foreach ($sites as $site)
                                        <div class="me-3">
                                            <label for="input-{{$site['id']}}" class="small">
                                                <input type="checkbox" value="{{$site['id']}}" name="psites[]" id="input-{{$site['id']}}">
                                                <span class="text-dark">{{$site['name']}}</span>
                                            </label>
                                        </div>
                                    @endforeach
                               </div>
                            </div>
                        </div>
                        @endif
                        <div class="form-field d-sm-flex justify-content-between flex-wrap">
                            <div class="input-field dark-btn mt-2">
                                <label for="book_img" class="text-dark fs-bold">Package image</label>
                                <input type="file" class="w-100" id="book_img" name="img"
                                    onchange="showImagePreview(this)" required>
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
                        <div class="days-wrapper">
                            <div class="day-content mt-4">
                                <p class="fs-6 mb-0">Day 1:</p>
                                <div class="form-field d-sm-flex justify-content-between flex-wrap mt-2">
                                    <div class="input-field">
                                        <input type="text" class="w-100" placeholder="Day 1 title" name="day_title[]" required>
                                    </div>
                                </div>
                                <div class="form-field d-sm-flex justify-content-between flex-wrap">
                                    <div class="input-field w-100 dark-btn mt-4">
                                        <textarea class="w-100" placeholder="Day 1 Description" maxlength="250" name="day_des[]" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div id="add-days" class="pointer text-black">
                                <i class="fas fa-plus my-2 text-white bg-yellow px-2 py-2 ms-2"></i>
                                Add more days
                            </div>
                        </div>
                        <h4 class="fs-6 mt-4">Gallery images</h4>
                        <div class="d-flex flex-wrap align-items-center ">
                            <div class=" my-2 img-m me-2 d-flex flex-wrap">
                            </div>
                            <i class="fas fa-plus my-2 text-white bg-yellow px-2 py-2" id="addInput"></i>
                        </div>

                        <div class="form-field d-sm-flex justify-content-between flex-wrap">
                            <div class="input-field dark-btn mt-4">
                                <input type="submit" value="Save Package" class="w-100">
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </section>
    @include('admin.templates.scripts')
</body>

</html>
