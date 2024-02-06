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
                                <th>User name</th>
                                <th>Vehicle name</th>
                                <th>Vehicle Type</th>
                                <th>From</th>
                                <th>To</th>
                                <th>Passengers</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach ($vehicles as $vehicle)
                          <tr>
                            <td>{{$vehicle['u_name']}}</td>
                            <td>{{$vehicle['v_name']}}</td>
                            <td>{{$vehicle['type']}}</td>
                            <td>{{$vehicle['from']}}</td>
                            <td>{{$vehicle['to']}}</td>
                            <td>{{$vehicle['people']}}</td>
                            <td>{{$vehicle['date']}}</td>
                            <td>
                                <a href="{{"deletevehicle_bookings/" .$vehicle['v_id'] }}" class="bg-danger d-inline-block text-white text-decoration-none py-2 my-1 px-3 rounded-3">Delete</a>
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
