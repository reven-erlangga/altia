@extends('frontend.template.default')

@section('content')
<div class="container">
    <div class="col s12 m7">
        <h4 class="header">{{ __('Verify Your Email Address') }}</h4>
        <div class="card horizontal">
            <div class="card-stacked">
                <div class="card-content" role="alert">
                @if (session('resent'))
                    <p>{{ __('A fresh verification link has been sent to your email address.') }}</p><br>
                @endif
                    <p>{{ __('Before proceeding, please check your email for a verification link.') }}</p>
                    <p>{{ __('If you did not receive the email') }},</p>
                </div>
                <div class="card-action">
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                    @csrf
                    <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
