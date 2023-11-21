<!doctype html>
<html lang="en">

<head>
    @include('admin.templates.links')
    <title>Edit Book </title>
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
                <h4 class="rounded-8 text-capitalize create-head px-3 py-3 mt-3">Edit Book</h4>
                <form action="/updatebook" enctype="multipart/form-data" method="POST" class="mt-2">
                    @csrf
                    <input type="text" class="w-100 d-none" name="id" value="{{$book->id}}">
                    <div class="form-field d-sm-flex justify-content-between flex-wrap">
                        <div class="input-field mt-4">
                            <label for="name" class="text-dark fw-bold">Book Name</label>
                            <input type="text" class="w-100" id="name" name="book_name" value="{{$book['book_name']}}">
                        </div>
                        <div class="input-field mt-4">
                            <label for="author_name" class="text-dark fw-bold">Author Name</label>
                            <input type="text" class="w-100" id="author_name" value="{{$book['author_name']}}" name="author_name">
                        </div>
                    </div>
                    <div class="form-field d-sm-flex justify-content-between flex-wrap">
                        <div class="input-field mt-4">
                            <label for="link" class="text-dark fw-bold">Download Link</label>
                            <input type="text" class="w-100" id="link" value="{{$book['link']}}" name="link">
                        </div>
                    </div>
                    <div class="form-field d-sm-flex justify-content-between flex-wrap">
                        <div class="input-field w-100 dark-btn mt-4">
                            <label for="des" class="text-dark fw-bold">Description</label>
                            <textarea class="w-100" id="des" name="description" maxlength="250">{{$book['description']}} </textarea>
                        </div>
                    </div>
                    <div class="form-field d-sm-flex justify-content-between flex-wrap">
                        <div class="input-field dark-btn mt-4">
                            <label for="tour-img" class="text-dark fw-bold s-field">Book image<br>
                            <img id="image-preview-single" src="<?php echo asset('uploads/' . $book['image'])?>" alt="" class="w-300 mt-2">
                            </label>
                            <input type="file" id="tour-img" name="image" class="d-none" onchange="updateImagePreview(this)">
                        </div>
                    </div>
                    <div class="form-field d-sm-flex justify-content-between flex-wrap">
                        <div class="input-field dark-btn mt-4">
                            <input type="submit" value="Update Book" class="w-100">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    @include('admin.templates.scripts')
</body>
</html>