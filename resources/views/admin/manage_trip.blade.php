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
            @include('admin.templates.adminheader')
            <div class="px-4 py-4 m-content px-lg-5">
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
                 @if (count($trips) > 0)
                <div class="tbl-main mt-3 table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>User email</th>
                                <th>Cities</th>
                                <th>Persons</th>
                                <th>Days</th>
                                <th>transportation</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach ($trips as $trip)
                          <tr>
                            <td>{{$trip['email']}}</td>
                            <td>{{$trip['cities']}}</td>
                            <td>{{$trip['persons']}}</td>
                            <td>{{$trip['days']}}</td>
                            <td>{{$trip['transportation']}}</td>
                            <td>{{$trip['date']}}</td>
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
