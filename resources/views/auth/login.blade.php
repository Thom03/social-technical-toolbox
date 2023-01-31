@include('layout.base')
@section('content')
<div class="container-scroller" id="app">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      
<div class="content-wrapper d-flex align-items-center justify-content-center auth theme-one" style="background-image: url('img/background_img.webp'); background-size: cover;">
  <div class="row w-100">
 
    <div class="col-lg-6 mx-auto">
     
      <div class="auto-form-wrapper"> 
      <h1 class="d-flex align-items-center justify-content-center">
      STIB
    </h1>
    
        <form method="POST" action="{{ route('login') }}">
        @csrf
          <div class="form-group">
            <label class="label">{{ __('Email Address') }}</label>
            <div class="input-group">
              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email Address" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
              @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              <div class="input-group-append">
                <span class="input-group-text">
                  <i class="mdi mdi-check-circle-outline"></i>
                </span>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="label">{{ __('Password') }}</label>
            <div class="input-group">
              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="*********">
              @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              <div class="input-group-append">
                <span class="input-group-text">
                  <i class="mdi mdi-check-circle-outline"></i>
                </span>
              </div>
            </div>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary submit-btn btn-block">{{ __('Login') }}</button>
          </div>
          <div class="form-group d-flex justify-content-between">
            <div class="form-check form-check-flat mt-0">
              <label class="form-check-label">
                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} class="form-check-input" checked> Keep me signed in </label>
            </div>
            @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}" class="text-small forgot-password text-black">{{ __('Forgot Your Password?') }}</a>
          </div>
          @endif
          <!-- <div class="form-group">
            <button class="btn btn-block g-login">
              <img class="mr-3" src="https://www.bootstrapdash.com/demo/star-laravel-free/template/assets/images/file-icons/icon-google.svg" alt="">Log in with Google</button>
          </div> -->
          <div class="text-block text-center my-3">
            <span class="text-small font-weight-semibold">Not a member ?</span>
            <a href="https://www.bootstrapdash.com/demo/star-laravel-free/template/user-pages/register" class="text-black text-small">Create new account</a>
          </div>
        </form>
      </div>
      <ul class="auth-footer text-black">
        <li>
          <a class="" href="#">Conditions</a>
        </li>
        <li>
          <a href="#">Help</a>
        </li>
        <li>
          <a href="#">Terms</a>
        </li>
      </ul>
      <p class="footer-text text-center">copyright © 2023 All rights reserved.</p>
    </div>
  </div>
</div>

    </div>
  </div>
