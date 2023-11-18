<!doctype html>
<html lang="en">

<head>
    @include('admin.templates.links')
    <title>Manage libertad reviews</title>
</head>

<body>
                @if (session('Delete'))
                    <script>
                        swal("Good job!", "{{session('Delete')}}", "success");
                    </script>
                @endif
    <section class="main-tem">
        @include('admin.templates.sidebar-template')
        <div class="right-content p-0" style="background: #FAFBFE;">
          @include('admin.templates.adminheader')
            <div class="px-4 py-4 m-content px-lg-5">

                <div class="tbl-main mt-3 table-responsive">
                    <table class="table">
                        <thead>
                          <tr>
                            <th>name</th>
                            <th>Review</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($reviews as $review)
                          <tr>
                            <td>{{$review['name']}}</td>
                            <td class="text-wrap"><p>{{$review['review']}}</p></td>
                            <td>
                            <a href="{{"delete_reviews/" .$review['id'] }}" class="bg-danger d-inline-block text-white text-decoration-none py-2 my-1 px-3 rounded-3">Delete</a>
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