<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Muudal - Forgot Password</title>

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

        .forgot-password-container {
            background-color: #ffffffcc;
            /* Slightly transparent background */
            width: 40%;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .forgot-password-header {
            font-size: 2rem;
            font-weight: bold;
            color: #f98012;
            margin-bottom: 1rem;
        }

        .forgot-password-form div {
            margin-bottom: 1rem;
            text-align: left;
        }

        .forgot-password-form input,
        .forgot-password-form button {
            width: 100%;
            padding: 0.5rem;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .forgot-password-form button {
            background-color: #f98012;
            color: #fff;
            font-weight: bold;
            font-size: 1rem;
            border: none;
            cursor: pointer;
            padding: 0.75rem;
        }

        .forgot-password-form button:hover {
            background-color: #f98012cc;
        }

        .forgot-password-form label {
            display: block;
            margin-bottom: 0.5rem;
        }
    </style>
</head>

<body>
    <div class="forgot-password-container">
        <div class="forgot-password-header">Muudal</div>

        <div class="mb-4 text-sm text-gray-600 dark:text-gray-400" style="padding-bottom: 5%">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('password.email') }}" class="forgot-password-form">
            @csrf

            <!-- Email Address -->
            <div>
                <label for="email">{{ __('Email') }}</label>
                <input id="email" type="email" name="email" :value="old('email')" required autofocus>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Submit Button -->
            <div class="mt-4">
                <button type="submit">
                    {{ __('Email Password Reset Link') }}
                </button>
            </div>
        </form>
    </div>
</body>

</html>
