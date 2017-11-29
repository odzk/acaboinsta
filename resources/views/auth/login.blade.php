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
                Sign in with your Acaboinsta Account
            </div>
            <div class="m-b text-sm">
                <a class="btn btn-danger btn-block p-x-md" href="{{ route('glogin') }}"> Login with Google</a>
            </div>
            
            <form role="form" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="md-form-group float-label">
                    <input id="email" type="text" class="md-input{{ $errors->has('email') ? ' has-error' : '' }}" name="email" value="{{ old('email') }}" autofocus>
                    <label>Email</label>
                </div>
                <div class="md-form-group float-label">
                    <input id="password" type="password" class="md-input{{ $errors->has('password') ? ' has-error' : '' }}" name="password">
                    <label>Password</label>
                </div>
                <div class="m-b-md">
                  <label class="md-check">
                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}><i class="primary"></i> Keep me signed in
                  </label>
                </div>
                <button type="submit" class="btn primary btn-block p-x-md">Sign in</button>
            </form>
        </div>

        <div class="p-v-lg text-center">
            <div class="m-b"><a href="{{ route('password.request') }}" class="text-primary _600">Forgot password?</a></div>
            <div>Do not have an account? <a href="{{ route('register') }}" class="text-primary _600">Sign up</a></div>
        </div>
    </div>
@endsection
