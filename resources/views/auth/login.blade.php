@extends('frontend.template.default')

@section('content')
<div class="container">
    <h3>Login</h3>
    <form action="{{ route('login') }}" class="col s12" method="POST">
        @csrf

        <div class="row">
            <div class="col s12 input-field">
                <i class="material-icons prefix">email</i>
                <input type="email" class="validate @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                <label for="email">Email</label>
                @error('email')
                    <span class="helper-text" data-error="{{ $message }}"></span>
                @enderror
            </div>

            <div class="col s12 input-field">
                <i class="material-icons prefix">lock</i>
                <input type="password" class="@error('password') invalid @enderror" id="password" name="password" value="">
                <label for="password">Password</label>
                @error('password')
                    <span class="helper-text" data-error="{{ $message }}"></span>
                @enderror
            </div>

            <div class="input field right">
                <input type="submit" value="Login" class="btn red accent-1 vawes-effect waves-light">
            </div>
        </div>
    </form>
</div>
@endsection
