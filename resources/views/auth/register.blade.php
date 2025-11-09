<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== REMIXICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <title>@yield('title', 'Register | Kursus Ryan Komputer')</title>
</head>
<body>
    <div class="container">
        <div class="login__content">
            <img src="{{ asset('images/bg-login.png') }}" alt="register image" class="login__img">

            <form action="{{ route('register') }}" method="POST" class="login__form">
                @csrf
                <div>
                    <h1 class="login__title">
                        <span>Create</span> Account
                    </h1>
                    <p class="login__description">
                        Welcome! Please register to create your account.
                    </p>
                </div>
                
                <div>
                    <div class="login__inputs">
                        <div>
                            <label for="input-name" class="login__label">Nama Lengkap</label>
                            <input type="text" 
                                   name="name" 
                                   placeholder="Enter your full name" 
                                   value="{{ old('name') }}" 
                                   required 
                                   class="login__input" 
                                   id="input-name">
                            @error('name')
                                <div style="color: #EA4335; font-size: 0.75rem; margin-top: 0.25rem;">{{ $message }}</div>
                            @enderror
                        </div>

                        <div>
                            <label for="input-email" class="login__label">Email</label>
                            <input type="email" 
                                   name="email" 
                                   placeholder="Enter your email address" 
                                   value="{{ old('email') }}" 
                                   required 
                                   class="login__input" 
                                   id="input-email">
                            @error('email')
                                <div style="color: #EA4335; font-size: 0.75rem; margin-top: 0.25rem;">{{ $message }}</div>
                            @enderror
                        </div>

                        <div>
                            <label for="input-email-confirm" class="login__label">Konfirmasi Email</label>
                            <input type="email" 
                                   name="email_confirmation" 
                                   placeholder="Confirm your email address" 
                                   required 
                                   class="login__input" 
                                   id="input-email-confirm">
                            @error('email_confirmation')
                                <div style="color: #EA4335; font-size: 0.75rem; margin-top: 0.25rem;">{{ $message }}</div>
                            @enderror
                        </div>

                        <div>
                            <label for="input-phone" class="login__label">Nomor Handphone</label>
                            <input type="tel" 
                                   name="phone" 
                                   placeholder="Enter your phone number" 
                                   value="{{ old('phone') }}" 
                                   required 
                                   class="login__input" 
                                   id="input-phone">
                            @error('phone')
                                <div style="color: #EA4335; font-size: 0.75rem; margin-top: 0.25rem;">{{ $message }}</div>
                            @enderror
                        </div>

                        <div>
                            <label for="input-pass" class="login__label">Kata Sandi</label>

                            <div class="login__box">
                                <input type="password" 
                                       name="password" 
                                       placeholder="Enter your password" 
                                       required 
                                       class="login__input" 
                                       id="input-pass">
                                <i class="ri-eye-off-line login__eye" id="input-icon"></i>
                            </div>
                            @error('password')
                                <div style="color: #EA4335; font-size: 0.75rem; margin-top: 0.25rem;">{{ $message }}</div>
                            @enderror
                        </div>

                        <div>
                            <label for="input-pass-confirm" class="login__label">Konfirmasi Kata Sandi</label>

                            <div class="login__box">
                                <input type="password" 
                                       name="password_confirmation" 
                                       placeholder="Confirm your password" 
                                       required 
                                       class="login__input" 
                                       id="input-pass-confirm">
                                <i class="ri-eye-off-line login__eye" id="input-icon-confirm"></i>
                            </div>
                            @error('password_confirmation')
                                <div style="color: #EA4335; font-size: 0.75rem; margin-top: 0.25rem;">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    @if($errors->any() && !$errors->has('name') && !$errors->has('email') && !$errors->has('email_confirmation') && !$errors->has('phone') && !$errors->has('password') && !$errors->has('password_confirmation'))
                        <div style="color: #EA4335; font-size: 0.75rem; margin-bottom: 0.5rem;">
                            <ul style="list-style: disc; margin-left: 20px;">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>

                <div>
                    <div class="login__buttons">
                        <button type="submit" class="login__button">Register</button>
                        <a href="{{ route('login') }}" class="login__button login__button-ghost" style="text-decoration: none; display: flex; align-items: center; justify-content: center;">Sign In</a>
                    </div>

                    <div style="text-align: center; margin-top: 1rem;">
                        <span style="font-size: var(--smaller-font-size);">Sudah punya akun? <a href="{{ route('login') }}" class="login__forgot">Login</a></span>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!--=============== MAIN JS ===============-->
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
