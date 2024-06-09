<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Muudal - Login</title>

    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@400;700&display=swap" rel="stylesheet">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

    <style>
        body {
            font-family: 'Comfortaa', cursive;
            background-image: url('https://elearning.ipvc.pt/imgs/logo_bkg.gif');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background-color: #ffffffcc;
            /* Slightly transparent background */
            width: 40%;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .login-header {
            font-size: 2rem;
            font-weight: bold;
            color: #f98012;
            margin-bottom: 1rem;
        }

        .login-form div {
            margin-bottom: 1rem;
            text-align: left;
        }

        .login-form input,
        .login-form button {
            width: 100%;
            padding: 0.5rem;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .login-form button {
            background-color: #f98012;
            color: #fff;
            font-weight: bold;
            font-size: 1rem;
            border: none;
            cursor: pointer;
            padding: 0.75rem;
        }

        .login-form button:hover {
            background-color: #f98012cc;
        }

        .login-form .form-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 0.5rem;
        }

        .login-form .form-footer a {
            color: #6c757d;
        }

        .login-form .form-footer a:hover {
            color: #495057;
        }

        .login-form label {
            display: block;
            margin-bottom: 0.5rem;
        }

        .login-form .remember-me {
            display: flex;
            align-items: center;
        }

        .login-form .remember-me input {
            margin-right: 0.5rem;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <div class="login-header">Muudal</div>

        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}" class="login-form">
            @csrf

            <div>
                <label for="email">{{ __('Email') }}</label>
                <input id="email" type="email" name="email" :value="old('email')" required autofocus
                    autocomplete="username">
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div>
                <label for="password">{{ __('Password') }}</label>
                <input id="password" type="password" name="password" required autocomplete="current-password">
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <div class="form-footer">
                <div class="remember-me">
                    <input id="remember_me" type="checkbox" name="remember">
                    <label for="remember_me">{{ __('Remember me') }}</label>
                </div>

                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>

            <button type="submit">
                {{ __('Log in') }}
            </button>
        </form>
    </div>
</body>

</html>
