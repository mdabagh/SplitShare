{{-- @extends('layouts.master')
@section('content')
    <div class='blogM'>
        <a href="{{ route('login.google.redirect') }}" class="dlBox fT"
            style="
      font: inherit;
    font-size: inherit;
    line-height: inherit;
  font-size: 100%;
  color: inherit;
  line-height: normal;
    height: 24px; padding: 24px; margin: 64px 0px 0px 64px;"><svg
                _ngcontent-xuc-c62="" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="google" role="img"
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488 512">
                <path _ngcontent-xuc-c62=""
                    d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z">
                </path>
            </svg> Sign in with Google</a>

    </div>
@endsection --}}

@extends('layouts.master')

@section('content')
<div class="login-form">
  <form method="POST" action="{{ route('login.store') }}">
    @csrf
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" name="email" id="email" required>
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" name="password" id="password" required>
    </div>
    <button type="submit">Login</button>
  </form>

  <div class="social-login">
    <a href="{{ route('login.google.redirect') }}">Sign in with Google</a>
    <a href="{{ route('login.github.redirect') }}">Sign in with GitHub</a>
  </div>
</div>
@endsection
