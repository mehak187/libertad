<!doctype html>
<html lang="en">

<head>
    @include('admin.templates.links')
    <title>Manage contact</title>
</head>

<body>
    @if (session('success'))
    <script>
        swal("Good job!", "{{session('success')}}", "success");
    </script>
  @endif
    <section class="main-tem">
        @include('admin.templates.sidebar-template')
        <div class="right-content p-0" style="background: #FAFBFE;">
            <div class="top-nav d-flex justify-content-between align-items-center px-3 position-relative">
                <img class="position-absolute togg-btn" src="{{ asset('imgs/white-ham.png') }}" alt=""
                    style="left: 15px;">
                <div class="search-box d-flex align-items-center">
                    <h1>Contact information</h1>
                </div>
                <img src="{{ asset('imgs/profile.png') }}" alt="">
            </div>
            <div class="px-4 py-4 m-content px-lg-5">
                <h4 class="rounded-8 text-capitalize create-head px-3 py-3 mt-3">Manage Contact Information</h4>
                <form action="contact_save" method="post" class="mt-2">
                    @csrf
                    {{-- @method('patch')  --}}
                    <div class="form-field d-sm-flex justify-content-between flex-wrap">
                        <div class="input-field mt-4">
                            <label for="office_location" class="text-dark fw-bold">Office Location</label>
                            <input type="text" class="w-100" id="office_location"
                                value="{{ old('office_location', $contact->office_location ?? '') }}"
                                name="office_location">
                            @error('office_location')
                                <span class="error text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="input-field mt-4">
                            <label for="map_location" class="text-dark fw-bold">Map Location</label>
                            <input type="text" class="w-100" id="map_location"
                                value="{{ old('map_location', $contact->map_location ?? '') }}" name="map_location">
                            @error('map_location')
                                <span class="error text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-field d-sm-flex justify-content-between flex-wrap">
                        <div class="input-field mt-4">
                            <label for="phone1" class="text-dark fw-bold">Phone No. (1)</label>
                            <input type="tel" class="w-100" id="phone1"
                                value="{{ old('phone1', $contact->phone1 ?? '') }}" name="phone1">
                            @error('phone1')
                                <span class="error text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="input-field mt-4">
                            <label for="phone2" class="text-dark fw-bold">Phone No. (2)</label>
                            <input type="tel" class="w-100" id="phone2"
                                value="{{ old('phone2', $contact->phone2 ?? '') }}" name="phone2">
                            @error('phone2')
                                <span class="error text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-field d-sm-flex justify-content-between flex-wrap">
                        <div class="input-field mt-4">
                            <label for="email1" class="text-dark fw-bold">Email (1)</label>
                            <input type="email" class="w-100" id="email1"
                                value="{{ old('email1', $contact->email1 ?? '') }}" name="email1">
                            @error('email1')
                                <span class="error text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="input-field mt-4">
                            <label for="email2" class="text-dark fw-bold">Email (2)</label>
                            <input type="email" class="w-100" id="email2"
                                value="{{ old('email2', $contact->email2 ?? '') }}" name="email2">
                            @error('email2')
                                <span class="error text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-field d-sm-flex justify-content-between flex-wrap">
                        <div class="input-field mt-4">
                            <label for="google" class="text-dark fw-bold">Whatsapp</label>
                            <input type="tel" id="google" class="w-100"
                                value="{{ old('google', $contact->google ?? '') }}" name="google">
                            {{-- <p class="note mb-0"><b>Note:</b> Use # if there is no link</p> --}}
                            @error('google')
                                <span class="error text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="input-field mt-4">
                            <label for="tripadvisor" class="text-dark fw-bold">Trip Advisor Link</label>
                            <input type="text" id="tripadvisor" class="w-100"
                                value="{{ old('tripadvisor', $contact->tripadvisor ?? '') }}"
                                placeholder="https://www.tripadvisor.com" name="tripadvisor">
                            {{-- <p class="note mb-0"><b>Note:</b> Use # if there is no link</p> --}}
                            @error('tripadvisor')
                                <span class="error text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-field d-sm-flex justify-content-between flex-wrap">
                        <div class="input-field dark-btn mt-4">
                            <label for="fb_link" class="text-dark fw-bold">Facebook Link</label>
                            <input type="text" id="fb_link" class="w-100"
                                value="{{ old('fb_link', $contact->fb_link ?? '') }}" name="fb_link">
                            {{-- <p class="note mb-0"><b>Note:</b> Use # if there is no link</p> --}}
                            @error('fb_link')
                                <span class="error text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="input-field dark-btn mt-4">
                            <label for="yt_link" class="text-dark fw-bold">Youtube Link</label>
                            <input type="text" id="yt_link" class="w-100"
                                value="{{ old('yt_link', $contact->yt_link ?? '') }}" name="yt_link">
                            {{-- <p class="note mb-0"><b>Note:</b> Use # if there is no link</p> --}}
                            @error('yt_link')
                                <span class="error text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-field d-sm-flex justify-content-between flex-wrap">
                        <div class="input-field mt-4">
                            <label for="insta_link" class="text-dark fw-bold">Instagram Link</label>
                            <input type="text" id="insta_link" class="w-100"
                                value="{{ old('insta_link', $contact->insta_link ?? '') }}" name="insta_link">
                            {{-- <p class="note mb-0"><b>Note:</b> Use # if there is no link</p> --}}
                            @error('insta_link')
                                <span class="error text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-field d-sm-flex justify-content-between flex-wrap">
                        <div class="input-field w-100 dark-btn mt-4">
                            <label for="des" class="text-dark fw-bold">Description</label>
                            <textarea class="w-100" id="des" placeholder="description" name="des">{{ old('des', $contact->des ?? '') }}</textarea>
                            @error('des')
                                <span class="error text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
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
