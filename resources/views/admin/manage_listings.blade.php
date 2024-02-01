<!doctype html>
<html lang="en">

<head>
    @include('admin.templates.links')
    <title>Manage Listing</title>
</head>

<body>
    <section class="main-tem">
        @include('admin.templates.sidebar-template')
        <div class="right-content p-0" style="background: #FAFBFE;">
            @include('admin.templates.adminheader')
          
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
             
            @if (count($hotels) > 0)
                <div class="tbl-main mt-3 table-responsive">
                    <table class="table">
                        <thead>
                          <tr>
                            <th>name</th>
                            <th>rooms</th>
                            <th>Location</th>
                            <th>Rent Category</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($hotels as $hotel)
                          <tr>
                            <td>{{$hotel['name']}}</td>
                            <td>{{$hotel['room']}}</td>
                            <td>{{$hotel['location']}}</td>
                            <td>{{$hotel['rent_catg']}}</td>
                            <td>
                                <a href="{{"listing_detail/" .$hotel['id'] }}" class="bg-success d-inline-block text-white text-decoration-none py-2 my-1 px-3 rounded-3">View Details</a>
                                {{-- <a href="{{"approve_listing/" .$hotel['id'] }}" class="bg-primary d-inline-block text-white text-decoration-none py-2 my-1 px-3 rounded-3">Approve</a> --}}
                                <a href="{{"delete_listing/" .$hotel['id'] }}" class="bg-danger d-inline-block text-white text-decoration-none py-2 my-1 px-3 rounded-3">Delete</a>
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