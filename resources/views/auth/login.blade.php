<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== REMIXICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <title>@yield('title', 'Login | Kursus Ryan Komputer')</title>
</head>
<body>
    <div class="container">
        <div class="login__content">
            <img src="{{ asset('images/bgtoska.jpg') }}" alt="login image" class="login__img">

            <form action="{{ route('login') }}" method="POST" class="login__form">
                @csrf
                <div>
                    <h1 class="login__title">
                        <span>Welcome</span> Back
                    </h1>
                    <p class="login__description">
                        Welcome! Please login to continue.
                    </p>
                </div>
                
                <div>
                    <div class="login__inputs">
                        <div>
                            @if(session('loginError'))
                                <div style="color: #EA4335; font-size: 0.75rem; margin-bottom: 0.5rem;">{{ session('loginError') }}</div>
                            @endif
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
                            <label for="input-pass" class="login__label">Password</label>

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
                    </div>

                    @if($errors->any() && !$errors->has('email') && !$errors->has('password'))
                        <div style="color: #EA4335; font-size: 0.75rem; margin-bottom: 0.5rem;">
                            <ul style="list-style: disc; margin-left: 20px;">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="login__check">
                        <input type="checkbox" class="login__check-input" id="input-check" name="remember">
                        <label for="input-check" class="login__check-label">Remember me</label>
                    </div>
                </div>

                <div>
                    <div class="login__buttons">
                        <button type="submit" class="login__button">Log In</button>
                        <a href="{{ route('register') }}" class="login__button login__button-ghost" style="text-decoration: none; display: flex; align-items: center; justify-content: center;">Sign Up</a>
                    </div>

                    <a href="#" class="login__forgot">Forgot Password?</a>
                </div>
            </form>
        </div>
    </div>

    <!--=============== MAIN JS ===============-->
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
