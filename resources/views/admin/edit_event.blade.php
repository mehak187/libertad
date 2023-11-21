<!doctype html>
<html lang="en">

<head>
    @include('admin.templates.links')
    <title>Edit event </title>
</head>
<body>
    <section class="main-tem">
        @include('admin.templates.sidebar-template')
        <div class="right-content p-0" style="background: #FAFBFE;">
            @include('admin.templates.adminheader')
            <div class="px-4 py-4 m-content px-lg-5">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="dark-btn">
                        <a href="{{ URL::previous() }}" class="d-flex align-items-center rounded-3">
                            <img src="{{ asset('imgs/back.png') }}" alt="back-arrow" class="me-3">
                            <span>Back</span>
                        </a>
                    </div>
                </div>
                <h4 class="rounded-8 text-capitalize create-head px-3 py-3 mt-3">Edit Event</h4>
                <form action="/updateevent" method="POST" class="mt-2">
                    @csrf
                    <input type="text" class="w-100 d-none" name="id" value="{{$event->id}}">
                    <div class="form-field d-sm-flex justify-content-between flex-wrap">
                        <div class="input-field mt-4">
                            <label for="event_name" class="text-dark fw-bold">EventName </label>
                            <input type="text" class="w-100" id="event_name" name="event_name" value="{{$event->event_name}}">
                        </div>
                        <div class="input-field mt-4">
                            <label for="city_name" class="text-dark fw-bold">City Name</label>
                            <input type="text" class="w-100" id="city_name" value="{{$event->city_name}}" name="city_name">
                        </div>
                    </div>
                    <div class="form-field d-sm-flex justify-content-between flex-wrap">
                        <div class="input-field mt-4">
                            <label for="st_date" class="text-dark fw-bold">Start Date</label>
                            <input type="date" id="st_date" value="{{$event->st_date}}" class="w-100" placeholder="Start Date" name="st_date">
                        </div>
                        <div class="input-field dark-btn mt-4">
                            <label for="st_time" class="text-dark fw-bold">Start Time</label>
                            <input type="time" id="st_time" value="{{$event->st_time}}" class="w-100" placeholder="Start Time" name="st_time">
                        </div>
                    </div>
                    <div class="form-field d-sm-flex justify-content-between flex-wrap">
                        <div class="input-field mt-4">
                            <label for="end_date" class="text-dark fw-bold">End Date</label>
                            <input type="date" id="end_date" value="{{$event->end_date}}" class="w-100" placeholder="Start Date" name="end_date">
                        </div>
                        <div class="input-field dark-btn mt-4">
                            <label for="end_time" class="text-dark fw-bold">End Time</label>
                            <input type="time" id="end_time" value="{{$event->end_time}}" class="w-100" placeholder="Start Time" name="end_time">
                        </div>
                    </div>
                    <div class="form-field d-sm-flex justify-content-between flex-wrap">
                        <div class="input-field w-100 dark-btn mt-4">
                            <label for="des" class="text-dark fw-bold">Event Description</label>
                            <textarea class="w-100" id="des" placeholder="Event description" maxlength="250" name="des">{{$event->des}}</textarea>
                        </div>
                    </div>
                    <div class="form-field d-sm-flex justify-content-between flex-wrap">
                        <div class="input-field dark-btn mt-4">
                            <input type="submit" value="Update Event" class="w-100">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    @include('admin.templates.scripts')
</body>
</html>