<!doctype html>
<html lang="en">

<head>
    @include('admin.templates.links')
    <title>Manage cities</title>
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
                <div class="d-flex justify-content-end">
                    <a href="/add_products" class="bg-yellow text-dark py-2 px-3 text-decoration-none rounded-3">Add
                        Products</a>
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
                <div class="tbl-main mt-3 table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Category</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach ($catagories as $catagory)
                          <tr>
                            <td>{{$catagory['name']}}</td>
                            <td>{{$catagory['price']}}</td>
                            <td>{{$catagory['catg']}}</td>
                            <td><img src="<?php echo asset('uploads/' . $catagory['img'])?>" alt="" ></td>
                            <td>
                                <a href="{{"edit_products/" .$catagory['id'] }}" class="bg-primary d-inline-block text-white text-decoration-none py-2 my-1 px-3 rounded-3">Edit</a>
                                <a href="{{"deleteproduct/" .$catagory['id'] }}" class="bg-danger d-inline-block text-white text-decoration-none py-2 my-1 px-3 rounded-3">Delete</a>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    @include('admin.templates.scripts')
</body>

</html>
