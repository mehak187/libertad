<!doctype html>
<html lang="en">

<head>
    @include('admin.templates.links')
    <title>Manage libertad reviews</title>
</head>

<body>
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

                <div class="tbl-main mt-3 table-responsive">
                    <table class="table">
                        <thead>
                          <tr>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Review</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>John</td>
                            <td>Doe</td>
                            <td><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur quam reprehenderit reiciendis, dolor nisi inventore at temporibus. Quaerat illum, saepe iste ex, officiis vitae doloribus aliquid minus aliquam, expedita repellat!</p></td>
                            <td>
                            <a href="#" class="bg-danger d-inline-block text-white text-decoration-none py-2 my-1 px-3 rounded-3">Delete</a>
                            </td>
                          </tr>
                          <tr>
                            <td>John</td>
                            <td>Doe</td>
                            <td><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur quam reprehenderit reiciendis, dolor nisi inventore at temporibus. Quaerat illum, saepe iste ex, officiis vitae doloribus aliquid minus aliquam, expedita repellat!</p></td>
                            <td>
                              <a href="#" class="bg-danger d-inline-block text-white text-decoration-none py-2 my-1 px-3 rounded-3">Delete</a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </section>
    @include('admin.templates.scripts')
</body>
</html>