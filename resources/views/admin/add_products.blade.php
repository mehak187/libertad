<!doctype html>
<html lang="en">

<head>
    @include('admin.templates.links')
    <title>Add Products and Tools</title>
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
                <h4 class="rounded-8 text-capitalize create-head px-3 py-3 mt-3">Add Products and Tools</h4>
                @if (count($catagories) > 0)
                <form action="addproducts" enctype="multipart/form-data" method="POST" class="mt-2">
                    @csrf
                    <div class="form-field d-sm-flex justify-content-between flex-wrap">
                        <div class="input-field mt-4">
                            <input type="text" class="w-100" placeholder="Product name" name="name">
                        </div>
                        <div class="input-field mt-4">
                            <input type="number" class="w-100" placeholder="Price in USD" name="price">
                        </div>
                    </div>
                    <div class="form-field d-sm-flex justify-content-between flex-wrap">
                        <div class="input-field mt-4">
                            <select name="p_catg" class="w-100" id="">
                                <option selected disabled hidden>Category name</option>
                                @foreach ($catagories as $catagory)
                                <option value="{{$catagory['id']}}">{{$catagory['catg']}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-field d-sm-flex justify-content-between flex-wrap">
                        <div class="input-field dark-btn mt-4">
                            <label for="tour-img" class="text-dark fs-bold">Product image</label>
                            <input type="file" class="w-100" id="tour-img" name="img" onchange="showImagePreview(this)">
                        </div>
                    </div>
                    <div class="mt-3">
                        <img id="image-preview" src="" alt="" class="w-300" style="display: none;">
                    </div>
                    <div class="form-field d-sm-flex justify-content-between flex-wrap">
                        <div class="input-field dark-btn mt-4">
                            <input type="submit" name="submit" value="Save Product" class="w-100">
                        </div>
                    </div>
                </form>
                @else
                <div class="d-flex align-items-center mt-3 ">
                    <i class="fas fa-exclamation-triangle text-danger fs-4 me-2"></i>
                    <p class="text-danger fs-5">No category exist. Add a category first</p>
                </div>
                    <div class="d-flex mt-3">
                        <a href="/add_product_categories" class="bg-yellow text-dark py-2 px-3 text-decoration-none rounded-3">Add
                            Category</a>
                    </div>
                @endif
            </div>
        </div>
    </section>
    @include('admin.templates.scripts')
</body>
</html>