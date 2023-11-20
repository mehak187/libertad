<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Testimonial</title>
    @include('template.csslinks')
</head>

<body class="">
    @include('template.header')
    <section class="main-tem">
        @include('template.sidepanel')
        <!-- main content -->
        <div class="right-content ftr fix_div back_img py-5">
            <div class="container">
                <h1 class="m-0 text-white">Testimonial</h1>
                <p class="m-0 text-white">Reviews from our clients are listed as:</p>
                <div class="position-relative mt-5">
                    <div class="prev_arrow6">
                        <i class="bi bi-chevron-right"></i>
                    </div>
                    <div class="row mt-3 testimonial">
                        <div class="col-12 m-3">
                            <div class="border-golden sky-bg rounded-3 p-3">
                                <div class="blue-light-bg rounded-3 p-3">
                                    <div class="d-flex align-items-center ">
                                        <div class="">
                                            <i class="fa-solid fa-user fs-1"></i>
                                        </div>
                                        <div>
                                            <div>
                                                <input type="hidden" value="4" name="star" class="d-none">
                                                <div class="rating rating-show border-0 d-flex" direction="ltr" style="max-width: 100%">
                                                  <label class="py-0" for="star5"></label>
                                                  <label class="py-0" for="star4"></label>
                                                  <label class="py-0" for="star3"></label>
                                                  <label class="py-0" for="star2"></label>
                                                  <label class="py-0" for="star1"></label>
                                                </div>
                                                <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
                                                <script>
                                                  $(document).ready(function(){
                                                    var starValue = $('input[name="star"]').val();
                                                    $('.rating label').removeClass('active');
                                                    for (var i = 1; i <= starValue; i++) {
                                                      $('.rating label:nth-child(' + i + ')').addClass('active');
                                                    }
                                                  });
                                                </script>
                                                
                                            </div>
                                            <div>
                                                <h5 class="m-0 ms-2">Thomas Jhon</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="mt-3">Fabtechsol is a web and mobile app development Company that
                                            believes in making tomorrow’s world a better place. We focus on emerging
                                            technologies
                                            to create digital experiences that outshine expectations.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="next_arrow6">
                        <i class="bi bi-chevron-left"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('template.footer')
    @include('template.jslinks')
</body>

</html>
