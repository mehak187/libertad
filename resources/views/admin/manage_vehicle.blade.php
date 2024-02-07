<!doctype html>
<html lang="en">

<head>
    @include('admin.templates.links')
    <title>Manage Airport Shuttle</title>
</head>

<body>
    <section class="main-tem">
        @include('admin.templates.sidebar-template')
        <div class="right-content p-0" style="background: #FAFBFE;">
            @include('admin.templates.adminheader')
            <div class="px-4 py-4 m-content px-lg-5">
                <div class="d-flex justify-content-end">
                    <a href="/add_vehicle" class="bg-yellow text-dark py-2 px-3 text-decoration-none rounded-3">Add
                       Vehicles</a>
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
                 @if (count($vehicles) > 0)
                <div class="tbl-main mt-3 table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Model</th>
                                <th>Price</th>
                                <th>Passengers</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach ($vehicles as $vehicle)
                          <tr>
                            <td>{{$vehicle['name']}}</td>
                            <td>{{$vehicle['vehicle']}}</td>
                            <td>{{$vehicle['price']}}</td>
                            <td>{{$vehicle['people']}}</td>
                            <td><img src="<?php echo asset('uploads/' . $vehicle['img'])?>" alt="" ></td>
                            <td>
                                <a href="{{"edit_vehicle/" .$vehicle['id'] }}" class="bg-primary d-inline-block text-white text-decoration-none py-2 my-1 px-3 rounded-3">Edit</a>
                                <a href="{{"deletevehicle/" .$vehicle['id'] }}" class="bg-danger d-inline-block text-white text-decoration-none py-2 my-1 px-3 rounded-3">Delete</a>
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
