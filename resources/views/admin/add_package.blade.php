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
                @if (count($cities) > 0)
                    <form action="save_packages" method="POST" enctype="multipart/form-data" class="mt-2">
                        @csrf
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
                            <div class="input-field dark-btn mt-4">
                                <input type="submit" value="Next" class="w-100">
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
