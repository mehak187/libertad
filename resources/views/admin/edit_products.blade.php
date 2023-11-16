<!doctype html>
<html lang="en">

<head>
    @include('admin.templates.links')
    <title>Edit city </title>
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
                <h4 class="rounded-8 text-capitalize create-head px-3 py-3 mt-3">Update products</h4>
                <form action="/updateproduct" method="POST" enctype="multipart/form-data" class="mt-2">
                    @csrf
                    <input type="text" class="w-100 d-none" name="id" value="{{$product->id}}">
                    <div class="form-field d-sm-flex justify-content-between flex-wrap">
                        <div class="input-field mt-4">
                            <label for="name" class="text-dark fw-bold">Product name</label>
                            <input type="text" class="w-100" id="name" value="{{$product['name']}}" name="name">
                        </div>
                        <div class="input-field mt-4">
                            <label for="price" class="text-dark fw-bold">Product price (in USD)</label>
                            <input type="number" class="w-100" id="price" value="{{$product['price']}}" name="price">
                        </div>
                    </div>
                    <div class="form-field d-sm-flex justify-content-between flex-wrap">
                        <div class="input-field mt-4">
                            <select name="p_catg" class="w-100" id="">
                                @foreach ($catagories as $catagory)
                                <option value="{{ $catagory['id'] }}" {{ (old('p_catg') == $catagory['id'] || (old('p_catg') == null && $catagory['id'] == $product->p_catg)) ? 'selected' : '' }}>
                                    {{$catagory['catg']}}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-field d-sm-flex justify-content-between flex-wrap">
                        <div class="input-field dark-btn mt-4">
                            <label for="tour-img" class="text-dark fw-bold s-field">Product image<br>
                            <img id="image-preview-single" src="<?php echo asset('uploads/' . $product['img']); ?>" alt="" class="w-300 mt-2">
                            </label>
                            <input type="file" id="tour-img" name="img" class="d-none" onchange="updateImagePreview(this)">
                        </div>
                    </div>
                    <div class="form-field d-sm-flex justify-content-between flex-wrap">
                        <div class="input-field dark-btn mt-4">
                            <input type="submit" value="Update Product" class="w-100">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    @include('admin.templates.scripts')
</body>
</html>