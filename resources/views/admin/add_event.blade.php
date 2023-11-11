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
                <div class="d-flex align-items-center justify-content-between">
                    <div class="dark-btn">
                        <a href="{{ URL::previous() }}" class="d-flex align-items-center rounded-3">
                            <img src="{{ asset('imgs/back.png') }}" alt="back-arrow" class="me-3">
                            <span>Back</span>
                        </a>
                    </div>
                </div>
                <h4 class="rounded-8 text-capitalize create-head px-3 py-3 mt-3">Add Event</h4>
                <form action="addevent" method="POST" class="mt-2">
                    @csrf
                    <div class="form-field d-sm-flex justify-content-between flex-wrap">
                        <div class="input-field mt-4">
                            <label for="event_name" class="text-dark fw-bold">Event Name</label>
                            <input type="text" class="w-100" id="event_name" placeholder="Event name" name="event_name">
                            @error('event_name')
                            <span class="error text-danger">
                                {{$message}}
                            </span>
                            @enderror
                        </div>
                        <div class="input-field mt-4">
                            <label for="city_name" class="text-dark fw-bold">City Name</label>
                            <input type="text" class="w-100" id="city_name" placeholder="City name" name="city_name">
                            @error('city_name')
                            <span class="error text-danger">
                                {{$message}}
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-field d-sm-flex justify-content-between flex-wrap">
                        <div class="input-field mt-4">
                            <label for="st_date" class="text-dark fw-bold">Start Date</label>
                            <input type="date" id="st_date" class="w-100" placeholder="Start Date" name="st_date">
                            @error('st_date')
                            <span class="error text-danger">
                                {{$message}}
                            </span>
                            @enderror
                        </div>
                        <div class="input-field dark-btn mt-4">
                            <label for="st_time" class="text-dark fw-bold">Start Time</label>
                            <input type="time" id="st_time" class="w-100" placeholder="Start Time" name="st_time">
                            @error('st_time')
                            <span class="error text-danger">
                                {{$message}}
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-field d-sm-flex justify-content-between flex-wrap">
                        <div class="input-field mt-4">
                            <label for="end_date" class="text-dark fw-bold">End Date</label>
                            <input type="date" id="end_date" class="w-100" placeholder="Start Date" name="end_date">
                            @error('end_date')
                            <span class="error text-danger">
                                {{$message}}
                            </span>
                            @enderror
                        </div>
                        <div class="input-field dark-btn mt-4">
                            <label for="end_time" class="text-dark fw-bold">End Time</label>
                            <input type="time" id="end_time" class="w-100" placeholder="Start Time" name="end_time">
                            @error('end_time')
                            <span class="error text-danger">
                                {{$message}}
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-field d-sm-flex justify-content-between flex-wrap">
                        <div class="input-field mt-4">
                            <label for="heading" class="text-dark fw-bold">Heading</label>
                            <input type="text" class="w-100" id="heading" placeholder="Heading" name="heading">
                            @error('heading')
                            <span class="error text-danger">
                                {{$message}}
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-field d-sm-flex justify-content-between flex-wrap">
                        <div class="input-field w-100 dark-btn mt-4">
                            <label for="des" class="text-dark fw-bold">Event Description</label>
                            <textarea class="w-100" id="des" placeholder="Event description" name="des"></textarea>
                            @error('des')
                            <span class="error text-danger">
                                {{$message}}
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-field d-sm-flex justify-content-between flex-wrap">
                        <div class="input-field dark-btn mt-4">
                            <input type="submit" value="Save Event" class="w-100">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    @include('admin.templates.scripts')
</body>
</html>