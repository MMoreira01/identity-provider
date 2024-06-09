<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Muudal - Register</title>

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

        .register-container {
            background-color: #ffffffcc;
            /* Slightly transparent background */
            width: 40%;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .register-header {
            font-size: 2rem;
            font-weight: bold;
            color: #f98012;
            margin-bottom: 1rem;
        }

        .register-form div {
            margin-bottom: 1rem;
            text-align: left;
        }

        .register-form input,
        .register-form button {
            width: 100%;
            padding: 0.5rem;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .register-form button {
            background-color: #f98012;
            color: #fff;
            font-weight: bold;
            font-size: 1rem;
            border: none;
            cursor: pointer;
            padding: 0.75rem;
        }

        .register-form button:hover {
            background-color: #f98012cc;
        }

        .register-form a {
            display: block;
            margin-top: 0.5rem;
            color: #6c757d;
            text-align: right;
        }

        .register-form a:hover {
            color: #495057;
        }

        .register-form label {
            display: block;
            margin-bottom: 0.5rem;
        }

        .register-form .form-footer {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            margin-top: 1rem;
        }
    </style>
</head>

<body>
    <div class="register-container">
        <div class="register-header">Muudal</div>

        <form method="POST" action="{{ route('register') }}" class="register-form">
            @csrf

            <!-- Name -->
            <div>
                <label for="name">{{ __('Name') }}</label>
                <input id="name" type="text" name="name" :value="old('name')" required autofocus
                    autocomplete="name">
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div>
                <label for="email">{{ __('Email') }}</label>
                <input id="email" type="email" name="email" :value="old('email')" required
                    autocomplete="username">
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div>
                <label for="password">{{ __('Password') }}</label>
                <input id="password" type="password" name="password" required autocomplete="new-password">
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div>
                <label for="password_confirmation">{{ __('Confirm Password') }}</label>
                <input id="password_confirmation" type="password" name="password_confirmation" required
                    autocomplete="new-password">
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <!-- Already Registered Link -->
            <a href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <!-- Register Button -->
            <div class="form-footer">
                <button type="submit">
                    {{ __('Register') }}
                </button>
            </div>
        </form>
    </div>
</body>

</html>
