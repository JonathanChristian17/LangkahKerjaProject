<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign in & Sign up Langkah kerja</title>
    <link rel="icon" href="{{ asset('images/logo.png') }}">
    <link rel="stylesheet" href="{{asset('css/login-register.css')}}"/>
  </head>
  <body>
    <main>
      <div class="box">
        <div class="inner-box">
          <div class="forms-wrap">
            <form method="POST" action="{{ route('login') }}" autocomplete="off" class="sign-in-form">
              @csrf
              <div class="logo">
                <img src="{{asset('img/logo.png')}}" alt="Langkah Kerja" />
                <h4>Langkah Kerja</h4>
              </div>

              <div class="heading">
                <h2>Welcome Back</h2>
                <h6>Not registred yet?</h6>
                <a href="#" class="toggle">Sign up</a>
              </div>

              <div class="actual-form">
                <div class="input-wrap">
                  <input
                    id="email"
                    type="email"
                    minlength="4"
                    class="input-field"
                    name="email" 
                    :value="old('email')"
                    autocomplete="username"
                    required
                  />
                  <label for="email" :value="__('Email')">Email</label>
                </div>

                <div class="input-wrap">
                  <input
                    id="password"
                    type="password"
                    minlength="4"
                    class="input-field"
                    name="password"
                    autocomplete="current-password"
                    required
                  />
                  <label for="password" :value="__('Password')">Password</label>
                </div>

                <input type="submit" value="{{ __('Log in') }}" class="sign-btn" />
                <div class="separator">
                  <span>or</span>
                </div>
                <div class="login-options">
                  <button class="login-btn google-login">
                    <img src="{{asset('img/google-logo.png')}}" alt="Google Login" />
                  </button>
                </div>

                <p class="text">
                  @if (Route::has('password.request'))
                  Forgotten your password or you login details?
                  <a href="{{ route('password.request') }}">{{ __('Forgot your password?') }}</a> 
                  signing in
                  @endif
                </p>
              </div>
            </form>

            <form method="POST" action="{{ route('register') }}" autocomplete="off" class="sign-up-form">
              @csrf
              <div class="logo">
                <img src="{{asset('img/logo.png')}}" alt="Langkah Kerja" />
                <h4>Langkah Kerja</h4>
              </div>

              <div class="heading">
                <h2>Get Started</h2>
                <h6>Grab Your Future Today, Let's Start with the First Step with Langkah Kerja!</h6>
                <a href="#" class="toggle">Sign in</a>
              </div>

              <div class="actual-form">
                <div class="input-wrap">
                  <input
                    id="name"
                    type="text"
                    name="name" 
                    :value="old('name')"
                    minlength="4"
                    class="input-field"
                    autocomplete="name"
                    required
                  />
                  <label for="name" :value="__('Name')">Name</label>
                </div>

                <div class="input-wrap">
                  <input
                    id="email"
                    type="email"
                    name="email" 
                    :value="old('email')"
                    class="input-field"
                    autocomplete="username"
                    required
                  />
                  <label for="email" :value="__('Email')">Email</label>
                </div>

                <div class="input-wrap">
                  <input
                    id="phone_number"
                    type="text"
                    name="phone_number" 
                    :value="old('phone_number')"
                    class="input-field"
                    autocomplete="phone_number"
                    required
                  />
                  <label for="phone_number" :value="__('phone_number')">Phone Number</label>
                </div>

                <div class="input-wrap">
                  <input
                    id="password"
                    type="password"
                    name="password"
                    minlength="4"
                    class="input-field"
                    autocomplete="new-password"
                    required
                  />
                  <label for="password" :value="__('Password')">Password</label>
                </div>

                <div class="input-wrap">
                  <input
                    id="password_confirmation"
                    type="password"
                    minlength="4"
                    class="input-field"
                    name="password_confirmation"
                    autocomplete="new-password"
                    required
                  />
                  <label for="password_confirmation" :value="__('Confirm Password')">Password Confirmation</label>
                </div>

                <input type="submit" value="{{ __('Register') }}" class="sign-btn" />
                <div class="login-options">
                  <button class="login-btn google-login">
                    <img src="{{asset('img/google-logo.png')}}" alt="Google Login" />
                  </button>
                </div>


                <p class="text">
                  By signing up, I agree to the
                  <a href="#">Terms of Services</a> and
                  <a href="#">Privacy Policy</a>
                </p>
              </div>
            </form>
          </div>

          <div class="carousel">
            <div class="images-wrapper">
              <img src="{{asset('img/image1.png')}}" class="image img-1 show" alt="" />
              <img src="{{asset('img/image2.png')}}" class="image img-2" alt="" />
              <img src="{{asset('img/image3.png')}}" class="image img-3" alt="" />
            </div>

            <div class="text-slider">
              <div class="text-wrap">
                <div class="text-group">
                  <h2>Pasti Ada Langkah Untuk Kerja</h2>
                  <h2>Langkah Anda, Solusi Kami</h2>
                  <h2>Jalan Baru untuk Kerja yang Lebih Baik</h2>
                </div>
              </div>

              <div class="bullets">
                <span class="active" data-value="1"></span>
                <span data-value="2"></span>
                <span data-value="3"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <!-- Javascript file -->

    <script src="{{asset('js/app.js')}}"></script>
  </body>
</html>
