<!doctype html>
<html lang="en">

<head>
    @include('admin.templates.links')
    <title>Manage books</title>
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
            
                @if (session('success'))
                    <script>
                        swal("Good job!", "{{session('success')}}", "success");
                    </script>
                @endif
                @if (session('Delete'))
                    <script>
                        swal("Good job!", "{{session('Delete')}}", "success");
                    </script>
                @endif
                @if (session('update'))
                    <script>
                        swal("Good job!", "{{session('update')}}", "success");
                    </script>
                @endif
            <div class="px-4 py-4 m-content px-lg-5">
                <div class="d-flex justify-content-end">
                    <a href="/add_book" class="bg-yellow text-dark py-2 px-3 text-decoration-none rounded-3">Add
                        Book</a>
                </div>
                @if (count($books) > 0)
                    <div class="tbl-main mt-3 table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Book name</th>
                                    <th>Author</th>
                                    <th>Description</th>
                                    <th>Download Link</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($books as $book)
                                <tr>

                                    <td>{{$book['book_name']}}</td>
                                    <td>{{$book['author_name']}}</td>
                                    <td>
                                        <p>{{$book['description']}}</p>
                                    </td>
                                    <td><a href="/{{$book['link']}}">Link</a></td>
                                    <td><img src="<?php echo asset('uploads/' . $book['image'])?>" alt=""></td>
                                    <td>
                                        <a href="{{"edit_book/" .$book['id'] }}" 
                                            class="bg-primary d-inline-block text-white text-decoration-none py-2 my-1 px-3 rounded-3">Edit</a>
                                        <a href="{{"deletebook/" .$book['id'] }}"
                                            class="bg-danger d-inline-block text-white text-decoration-none py-2 my-1 px-3 rounded-3">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <div class="d-flex align-items-center mt-3 ">
                        <i class="fas fa-exclamation-triangle text-danger fs-4 me-2"></i><p class="text-danger fs-5">No record to show</p>
                    </div>
                @endif
            </div>
        </div>
    </section>
    @include('admin.templates.scripts')
</body>

</html>
