<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact us</title>
    @include('template.csslinks')
</head>

<body class="">
    @include('template.header')
    <section class="main-tem">
        @include('template.sidepanel')
        <!-- main content -->
        <div class="right-content ftr fix_div back_img py-5">
            @if(isset($contact))
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 py-3 position-relative">
                        <h3 class="m-0 text-center ps-lg-3 text-white">Contact Us</h3>
                        <div class="rounded-5 mt-3 position-32">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d6732.85505351798!2d74.50312502295535!3d32.46125483593828!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1689419926554!5m2!1sen!2s"
                                width="100%" height="350" style="border-radius:20px;" allowfullscreen=""
                                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-8 ">
                        <div class="p-md-5 p-4 light-bground rounded-5 shadow libert-min">
                            <div class="mt-3">
                                <div class="row mt-3 justify-content-end">
                                    <div class="col-lg-11">
                                        <h2 class="m-0">Contact Info</h2>
                                        <div class="row border-golden rounded-5 mt-3 py-3">
                                            <div class="col-xl-4 col-sm-6">
                                                <div class="d-flex align-items-baseline office-font gap-1">
                                                    <div>
                                                        <i class="bi bi-geo-alt-fill brown-clr"></i>
                                                    </div>
                                                    <div>
                                                        <h5>Office</h5>
                                                        <p class="m-0 font-12">{{ $contact->office_location }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-sm-6">
                                                <div class="d-flex align-items-baseline office-font gap-1">
                                                    <div>
                                                        <i class="bi bi-telephone-fill brown-clr"></i>
                                                    </div>
                                                    <div>
                                                        <h5>Call Center</h5>
                                                        <p class="m-0 font-12">{{ $contact->phone1 }}</p>
                                                        <p class="m-0 font-12">{{ $contact->phone2 }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-sm-6">
                                                <div class="d-flex align-items-baseline office-font gap-1">
                                                    <div>
                                                        <i class="bi bi-envelope-fill brown-clr"></i>
                                                    </div>
                                                    <div>
                                                        <h5>Email</h5>
                                                        <p class="m-0 font-12">{{ $contact->email1 }}</p>
                                                        <p class="m-0 font-12">{{ $contact->email2 }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row border-golden rounded-5 mt-3 p-3">
                                            <h3>Follow Us</h3>
                                            <div class="col-12">
                                                <a href="{{ $contact->tripadvisor }}" target="_blank"><img
                                                        src="./imgs/owl.png" style="height: 40px; width: 40px;"
                                                        alt=""></a>
                                                <a href="{{ $contact->fb_link }}" target="_blank"><img
                                                        src="./imgs/fb.png" style="height: 40px; width: 40px;"
                                                        alt=""></a>
                                                <a href="mailto:{{ $contact->google }}" target="_blank"><img
                                                        src="./imgs/google-plus.png" style="height: 40px; width: 40px;"
                                                        alt=""></a>
                                                <a href="{{ $contact->yt_link }}" target="_blank"><img
                                                        src="./imgs/youtube.png" style="height: 40px; width: 40px;"
                                                        alt=""></a>
                                                <a href="{{ $contact->insta_link }}" target="_blank"><img
                                                        src="./imgs/insta.png" style="height: 40px; width: 40px;"
                                                        alt=""></a>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-12">
                                                <p>{{ $contact->des }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @else
           <div class="container">
            <div class="mt-md-0 mt-3">
                <p class="content_1_heading mb-0">
                    <span class=" travel_text">Contact</span>
                </p>
            </div>
            <div class="d-flex align-items-center mt-3 ">
                <i class="fas fa-exclamation-triangle text-danger fs-4 me-2"></i><p class="text-danger fs-5 mb-0">No content to show</p>
            </div>
           </div>
            @endif
        </div>
    </section>
    <!-- ======= footer ======= -->
    @include('template.footer')
    @include('template.jslinks')
</body>

</html>
