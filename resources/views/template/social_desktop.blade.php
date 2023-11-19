<div class="d-md-block d-none">
    @php
    $contact = \App\Models\contact::first();
    @endphp

<!-- Now you can use $socialData in your view -->

    <p class="mb-0 fs-12" style="color: #E4C14F;">Social Media:</p>
    <div>
        @if ($contact)
        <a
            href="{{$contact->tripadvisor}}" target="_blank"><img
                src="./imgs/social_icon_1.png" style="height: 40px; width: 40px;" alt=""></a>
        <a href="{{$contact->fb_link}}" target="_blank"><img
                src="./imgs/social_icon_2.png" style="height: 40px; width: 40px;" alt=""></a>
        <a href="{{$contact->yt_link}}" target="_blank"><img src="./imgs/social_icon_4.png"
                style="height: 40px; width: 40px;" alt=""></a>
        <a href="{{$contact->insta_link}}" target="_blank"><img
                src="./imgs/social_icon_5.png" style="height: 40px; width: 40px;" alt=""></a>
        @endif
    </div>
</div>