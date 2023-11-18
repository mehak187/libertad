<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('template.csslinks')
    @include('admin.templates.links')
    <title>Document</title>
</head>
<body class="back_img vh-100">
    <div class="container h-100">
        <div class="row align-items-center h-100 justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card reset-cr">
                    <div class="card-header text-black fw-bold">{{ __('Verify Your Email Address') }}</div>
    
                    <div class="card-body text-black">
                        @if (session('resent'))
                            <div class="alert alert-success " role="alert">
                                {{ __('A fresh verification link has been sent to your email address.') }}
                            </div>
                        @endif
    
                        {{ __('Before proceeding, please check your email for a verification link.') }}
                        {{ __('If you did not receive the email') }},
                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>