<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign In</title>
    <!-- Font Icon -->
    <link rel="stylesheet" href="{{ asset('colorlib-regform-7') }}/fonts/material-icon/css/material-design-iconic-font.min.css">
    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('colorlib-regform-7') }}/css/style.css">
</head>
<body>
    <div class="main">
        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        {{-- jika ada session status, tampilkan alert, akan berisi dua hal yaitu "berhasil registrasi, silahkan login" atau "Berhasil Logout" --}}
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{-- cetak nilai sesi status --}}
                                {{ session('status') }}
                            </div>
                        @endif

                        <h2 class="form-title">Sign In</h2>
                        {{-- cetak panggil rute login.store --}}
                        <form action="{{ route('login.store') }}" method="POST" class="register-form" id="register-form">
                            {{-- laravel mewajibkan keamanan dari serangan csrf --}}
                            @csrf
                            {{-- untuk memanggil rute tipe post --}}
                            @method('POST')
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input name="email" type="email" id="email" value="{{ old('email') }}" placeholder="Your email"/>
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input name="password" type="password" id="password" value="{{ old('password') }}" placeholder="Password"/>
                                @error('password')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group form-button">
                                <button type="submit" class="form-submit">Sign In</button>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="{{ asset('colorlib-regform-7') }}/images/signin-image.jpg" alt="sign in image"></figure>
                        {{-- cetak panggil rute registrasi.index --}}
                        <a href="{{ route('registrasi.index') }}" class="signup-image-link">Not registered yet? click here</a>
                    </div>
                </div>
            </div>
        </section>

        {{-- <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/signin-image.jpg" alt="sing up image"></figure>
                        <a href="#" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="your_name" id="your_name" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="your_pass" id="your_pass" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                        <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
    </div>
    <!-- JS -->
    <script src="{{ asset('colorlib-regform-7') }}/vendor/jquery/jquery.min.js"></script>
    <script src="{{ asset('colorlib-regform-7') }}/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
