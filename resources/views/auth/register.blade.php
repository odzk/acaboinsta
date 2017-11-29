@extends('layout.default')

@section('content')
    <div class="center-block w-xxl w-auto-xs p-y-md">
        <div class="navbar">
            <div class="pull-center">
                <div ui-include="'/third-party/views/blocks/navbar.brand.html'"></div>
            </div>
        </div>

        <div class="p-a-md box-color r box-shadow-z1 text-color m-a">
            <div class="m-b text-sm">
                Sign up to your Acaboinsta Account
            </div>
            <form role="form" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
                <div class="md-form-group">
                    <input id="name" type="text" class="md-input{{ $errors->has('email') ? ' has-error' : '' }}" name="name" value="{{ old('name') }}" autofocus>
                    <label>Name</label>
                </div>
                <div class="md-form-group">
                    <input id="email" type="text" class="md-input{{ $errors->has('email') ? ' has-error' : '' }}" name="email" value="{{ old('email') }}">
                    <label>Email</label>
                </div>
                <div class="md-form-group">
                    <input id="password" type="password" class="md-input{{ $errors->has('email') ? ' has-error' : '' }}" name="password">
                    <label>Password</label>
                </div>
                <div class="md-form-group">
                    <input id="password-confirm" type="password" class="md-input{{ $errors->has('email') ? ' has-error' : '' }}" name="password_confirmation">
                    <label>Confirm Password</label>
                </div>
                <div class="m-b-md">
                    <label class="md-check">
                        <input type="checkbox" name="agree" id="agree"><i class="primary{{ $errors->has('agree') ? ' has-error' : '' }}"></i> Agree to <a href="#"><strong>Terms and Condition</strong></a>
                    </label>
                </div>
                <button type="submit" class="btn primary btn-block p-x-md">Sign up</button>
            </form>
        </div>

        <div class="p-v-lg text-center">
            <div>Already have an account? <a href="{{ route('login') }}" class="text-primary _600">Sign in</a></div>
        </div>
    </div>
@endsection
