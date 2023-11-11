<!doctype html>
<html lang="en">

<head>
    @include('admin/templates/links')
</head>

<body>
    <section class="main-tem">
        @include('admin/templates/sidebar-template')
        <div class="right-content p-0" style="background: #FAFBFE;">
             <div class="top-nav d-flex justify-content-between align-items-center px-3 position-relative">
                <img class="position-absolute togg-btn" src="{{ asset('imgs/white-ham.png') }}" alt="" style="left: 15px;">
                <div class="search-box d-flex align-items-center">
                    <h1>Admin Panel</h1>
                </div>
                <img src="{{ asset('imgs/profile.png') }}" alt="">
            </div>
            <div class="px-4 py-4 m-content px-lg-5">

            </div>
        </div>
    </section>
    @include('admin.templates.scripts')
</body>

</html>