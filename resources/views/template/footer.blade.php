@php
$contact = \App\Models\Contact::first();
@endphp
<footer class="sky-light py-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-11 mx-auto">
                <div class="row justify-content-between align-items-end">
                    <div class="col-md-6">
                        <div class="d-flex align-items-center gap-2">
                            <div>
                                <img src="{{asset('imgs/footer-logo.png')}}" alt="" class="rounded-circle img-footer">
                            </div>
                            <div>
                                <h4 class="m-0">Liberta<span class="sky-clr">d</span>elmundo</h4>
                            </div>
                        </div>
                        <div class="mt-3">
                            <p class="mb-0">
                                The word “Libertad” means “freedom” in Spanish, and so we are willing to
                                change the concept of traveling by offering our visitors the opportunity to discover
                                our land in his/her way: “Libertad- Travel your way”
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex justify-content-md-end mt-md-0 mt-3">
                        <div>
                            <div>
                                <h5>Social Media:</h5>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                        @if ($contact)
                                <a href="{{$contact->tripadvisor}}" target="_blank"
                                    class="p-0"><img src="{{asset('imgs/owl-2.png')}}" style="height: 40px; width: 40px;"
                                        alt=""></a>
                                <a href="{{$contact->fb_link}}" target="_blank" class="p-0"><img
                                        src="{{asset('imgs/fb-2.png')}}" style="height: 40px; width: 40px;" alt=""></a>
                                <a href="{{$contact->yt_link}}" target="_blank" class="p-0"><img src="{{asset('imgs/youtube2.png')}}"
                                        style="height: 40px; width: 40px;" alt=""></a>
                                <a href="{{$contact->insta_link}}" target="_blank"
                                    class="p-0"><img src="{{asset('imgs/insta2.png')}}" style="height: 40px; width: 40px;"
                                        alt=""></a>
                           @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
