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
                <h4 class="rounded-8 text-capitalize create-head px-3 py-3 mt-3">Add Products and Tools</h4>
                @if (count($catagories) > 0)
                    <form action="addproducts" enctype="multipart/form-data" method="POST" class="mt-2">
                        @csrf
                        <div class="form-field d-sm-flex justify-content-between flex-wrap">
                            <div class="input-field mt-4">
                                <input type="text" class="w-100" placeholder="Product name" name="name" required>
                            </div>
                            <div class="input-field mt-4">
                                <select name="p_catg" class="w-100" id="" required>
                                    <option selected disabled hidden>Category name</option>
                                    @foreach ($catagories as $catagory)
                                        <option value="{{ $catagory['id'] }}">{{ $catagory['catg'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                       
                        <label for="addSizes" class="text-dark mt-2">
                            Do you want to add size?
                            <input type="checkbox" id="addSizes" class="mt-3">
                        </label>
                        <div class="price">
                            <div class="form-field d-sm-flex justify-content-between flex-wrap ">
                                <div class="input-field mt-4">
                                    <input type="number" class="w-100" placeholder="Price in USD" name="price">
                                </div>
                            </div>
                        </div>
                        <div class="size-op">
                            <h3 class="fs-6 fw-md mt-3">Choose Size</h3>
                            <div class="d-flex mt-2">
                                <label class="text-dark me-3" for="ml">
                                    <input type="radio" name="size" id="ml">
                                    Size in ml
                                </label>
                                <label class="text-dark" for="sm">
                                    <input type="radio" name="size" id="sm">
                                    Size in sm, md and lg
                                </label>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-6 ml-size ">
                                <div class="d-flex">
                                    <div class="me-2 ">
                                        <label class="text-dark" for="pfifty">Price of 50ml</label>
                                        <input type="number" class="w-100 border border-1 border-dark rounded-3 px-3 py-2"
                                            name="mlfifty" id="pfifty">
                                    </div>
                                    <div class="me-2 ">
                                        <label class="text-dark" for="phundred">Price of 100ml</label>
                                        <input type="number" class="w-100 border border-1 border-dark rounded-3 px-3 py-2"
                                            name="mlhundred" id="phundred">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 sm-size ">
                                <div class="d-flex">
                                    <div class="me-2">
                                        <label class="text-dark" for="psm">Price of sm</label>
                                        <input type="number" class="w-100  border border-1 border-dark rounded-3 px-3 py-2" name="sm" id="psm">
                                    </div>
                                    <div class="me-2">
                                        <label class="text-dark" for="pmd">Price of md</label>
                                        <input type="number" class="w-100  border border-1 border-dark rounded-3 px-3 py-2" name="md" id="pmd">
                                    </div>
                                    <div class="me-2">
                                        <label class="text-dark" for="plg">Price of lg</label>
                                        <input type="number" class="w-100  border border-1 border-dark rounded-3 px-3 py-2" name="lg" id="plg">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-field d-sm-flex justify-content-between mt-2 flex-wrap">
                            <div class="input-field mt-2">
                                <textarea name="des" class="w-100" rows="6" placeholder="Description" required></textarea>
                            </div>
                        </div>
                        <div class="form-field d-sm-flex justify-content-between flex-wrap">
                            <div class="input-field dark-btn mt-3">
                                <input type="file" class="w-100" id="tour-img" name="img"
                                    onchange="showImagePreview(this)" required>
                            </div>
                        </div>
                        <div class="mt-3">
                            <img id="image-preview" src="" alt="" class="w-300"
                                style="display: none;">
                            @error('img')
                                <span class="error text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
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
                        <a href="/add_product_categories"
                            class="bg-yellow text-dark py-2 px-3 text-decoration-none rounded-3">Add
                            Category</a>
                    </div>
                @endif
            </div>
        </div>
    </section>
    @include('admin.templates.scripts')
    <style>
        .ml-size,
        .sm-size {
            display: none;
        }

        .size-op {
            display: none;
        }
    </style>
    <script>
        $(document).ready(function() {
            $(".size-op").hide();
            $(".ml-size, .sm-size").hide();
            $("#addSizes").change(function() {
                if ($(this).is(":checked")) {
                    $(".size-op").show();
                    $(".price").hide();
                } else {
                    $(".size-op").hide();
                    $(".price").show();
                }
            });

            $("input[name='size']").change(function() {
                if ($(this).attr("id") === "ml") {
                    $(".ml-size").show();
                    $(".sm-size").hide();
                } else if ($(this).attr("id") === "sm") {
                    $(".sm-size").show();
                    $(".ml-size").hide();
                }
            });
        });
    </script>
</body>

</html>
