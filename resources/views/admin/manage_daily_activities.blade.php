<!doctype html>
<html lang="en">

<head>
    @include('admin.templates.links')
    <title>Manage daily activities</title>
</head>

<body>
  @if (session('savectour'))
      <script>
          swal("Good job!", "{{session('savectour')}}", "success");
      </script>
    @endif
    @if (session('Delete'))
    <script>
        swal("Good job!", "{{session('Delete')}}", "success");
    </script>
  @endif
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
              <div class="d-flex justify-content-end">
                <a href="/add_daily_activities" class="bg-yellow text-dark py-2 px-3 text-decoration-none rounded-3">Add Daily Activities</a>
            </div>
            @if (count($citytours) > 0)
                <div class="tbl-main mt-3 table-responsive">
                    <table class="table">
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>Location</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($citytours as $citytour)
                          <tr>
                            <td>{{$citytour['name']}}</td>
                            <td>{{$citytour['location']}}</td>
                            <td>
                                <a href="{{"daily_activities_details/" .$citytour['id'] }}" class="bg-success d-inline-block text-white text-decoration-none py-2 my-1 px-3 rounded-3">View Details</a>
                                <a href="{{"edit_daily_activities/" .$citytour['id'] }}" class="bg-primary d-inline-block text-white text-decoration-none py-2 my-1 px-3 rounded-3">Edit</a>
                                <a href="{{"delete_daily_activities/" .$citytour['id'] }}" class="bg-danger d-inline-block text-white text-decoration-none py-2 my-1 px-3 rounded-3">Delete</a>
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