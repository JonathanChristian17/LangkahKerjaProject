<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign in & Sign up Langkah kerja</title>
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
                    type="email"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Email</label>
                </div>

                <div class="input-wrap">
                  <input
                    type="password"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Password</label>
                </div>

                <input type="submit" value="Sign In" class="sign-btn" />
                <div class="separator">
                  <span>or</span>
                </div>
                <div class="login-options">
                  <button class="login-btn google-login">
                    <img src="./img/google-logo.png" alt="Google Login" />
                  </button>
                  <button class="login-btn github-login">
                    <img src="./img/github-logo.png" alt="GitHub Login" />
                  </button>
                </div>

                <p class="text">
                  Forgotten your password or you login datails?
                  <a href="#">Get help</a> signing in
                </p>
              </div>
            </form>

            <form action="index.html" autocomplete="off" class="sign-up-form">
              <div class="logo">
                <img src="./img/logo.png" alt="Langkah Kerja" />
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
                    type="text"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Name</label>
                </div>

                <div class="input-wrap">
                  <input
                    type="email"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Email</label>
                </div>

                <div class="input-wrap">
                  <input
                    type="phone-number"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>phone-number</label>
                </div>

                <div class="input-wrap">
                  <input
                    type="password"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Password</label>
                </div>

                <input type="submit" value="Sign Up" class="sign-btn" />
                <div class="login-options">
                  <button class="login-btn google-login">
                    <img src="./img/google-logo.png" alt="Google Login" />
                  </button>
                  <button class="login-btn github-login">
                    <img src="./img/github-logo.png" alt="GitHub Login" />
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
              <img src="./img/image1.png" class="image img-1 show" alt="" />
              <img src="./img/image2.png" class="image img-2" alt="" />
              <img src="./img/image3.png" class="image img-3" alt="" />
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

    <script src="js/app.js"></script>
  </body>
</html>
