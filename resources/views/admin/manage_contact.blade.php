<!doctype html>
<html lang="en">

<head>
    @include('admin.templates.links')
    <title>Add Event</title>
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
                <h4 class="rounded-8 text-capitalize create-head px-3 py-3 mt-3">Manage Contact Information</h4>
                <form action="" class="mt-2">
                    <div class="form-field d-sm-flex justify-content-between flex-wrap">
                        <div class="input-field mt-4">
                            <label for="office_location" class="text-dark fw-bold">Office Location</label>
                            <input type="text" class="w-100" id="office_location" placeholder="Lac 2, Tunis, Tunisie, France" name="office_location">
                        </div>
                        <div class="input-field mt-4">
                            <label for="map_location" class="text-dark fw-bold">Map Location</label>
                            <input type="text" class="w-100" id="map_location" placeholder="Lac 2, Tunis, Tunisie, France" name="map_location">
                        </div>
                    </div>
                    <div class="form-field d-sm-flex justify-content-between flex-wrap">
                        <div class="input-field mt-4">
                            <label for="phone1" class="text-dark fw-bold">Phone No. (1)</label>
                            <input type="tel" class="w-100" id="phone1" placeholder="+33 6 98 59 05 22" name="phone1">
                        </div>
                        <div class="input-field mt-4">
                            <label for="phone2" class="text-dark fw-bold">Phone No. (2)</label>
                            <input type="tel" class="w-100" id="phone2" placeholder="+33 6 98 59 05 22" name="phone2">
                        </div>
                    </div>
                    <div class="form-field d-sm-flex justify-content-between flex-wrap">
                        <div class="input-field mt-4">
                            <label for="email1" class="text-dark fw-bold">Email (1)</label>
                            <input type="email" class="w-100" id="email1" placeholder="+33 6 98 59 05 22" name="email1">
                        </div>
                        <div class="input-field mt-4">
                            <label for="email2" class="text-dark fw-bold">Email (2)</label>
                            <input type="email" class="w-100" id="email2" placeholder="+33 6 98 59 05 22" name="email2">
                        </div>
                    </div>
                    <div class="form-field d-sm-flex justify-content-between flex-wrap">
                        <div class="input-field mt-4">
                            <label for="tripadvisor" class="text-dark fw-bold">Trip Advisor Link</label>
                            <input type="link" id="tripadvisor" class="w-100" placeholder="https://www.tripadvisor.com" name="tripadvisor">
                            <p class="note mb-0"><b>Note:</b> Use # if there is no link</p>
                        </div>
                        <div class="input-field dark-btn mt-4">
                            <label for="fb_link" class="text-dark fw-bold">Facebook Link</label>
                            <input type="link" id="fb_link" class="w-100" placeholder="https://www.facebook.com/people/Libertad-del-Mundo/100090555392220/" name="fb_link">
                            <p class="note mb-0"><b>Note:</b> Use # if there is no link</p>
                        </div>
                    </div>
                    <div class="form-field d-sm-flex justify-content-between flex-wrap">
                        <div class="input-field mt-4">
                            <label for="google" class="text-dark fw-bold">Google+ Link</label>
                            <input type="link" id="google" class="w-100" placeholder="" name="google">
                            <p class="note mb-0"><b>Note:</b> Use # if there is no link</p>
                        </div>
                        <div class="input-field dark-btn mt-4">
                            <label for="yt_link" class="text-dark fw-bold">Youtube Link</label>
                            <input type="link" id="yt_link" class="w-100" placeholder="#" name="yt_link">
                            <p class="note mb-0"><b>Note:</b> Use # if there is no link</p>
                        </div>
                    </div>
                    <div class="form-field d-sm-flex justify-content-between flex-wrap">
                        <div class="input-field mt-4">
                            <label for="insta_link" class="text-dark fw-bold">Instagram Link</label>
                            <input type="link" id="insta_link" class="w-100" placeholder="https://www.instagram.com/libertadelmundoofficial/?next=%2F" name="insta_link">
                            <p class="note mb-0"><b>Note:</b> Use # if there is no link</p>
                        </div>
                    </div>
                    <div class="form-field d-sm-flex justify-content-between flex-wrap">
                        <div class="input-field w-100 dark-btn mt-4">
                            <label for="des" class="text-dark fw-bold">Description</label>
                            <textarea class="w-100" id="des" placeholder="description" name="des"></textarea>
                        </div>
                    </div>
                    <div class="form-field d-sm-flex justify-content-between flex-wrap">
                        <div class="input-field dark-btn mt-4">
                            <input type="submit" value="Save Information" class="w-100">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    @include('admin.templates.scripts')
</body>
</html>