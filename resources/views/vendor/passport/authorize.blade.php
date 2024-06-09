<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }} - Authorization</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@400;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

    <style>
        body {
            font-family: 'Comfortaa', cursive;
            background-image: url('https://elearning.ipvc.pt/imgs/logo_bkg.gif');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .passport-authorize .container {
            margin-top: 30px;
            text-align: center;
        }

        .passport-authorize .card {
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #ffffffcc;
            /* Slightly transparent background */
        }

        .passport-authorize .card-header {
            background-color: #f5f5f5;
            font-size: 1.25rem;
            font-weight: bold;
            color: #f98012;
        }

        .passport-authorize .card-body {
            padding: 2rem;
        }

        .passport-authorize .scopes {
            margin-top: 20px;
            text-align: left;
        }

        .passport-authorize .buttons {
            margin-top: 25px;
        }

        .passport-authorize .btn {
            width: 150px;
            margin: 0 10px;
            padding: 10px 20px;
            border-radius: 25px;
            display: inline-block;
        }

        .passport-authorize .btn-approve {
            background-color: #28a745;
            color: #fff;
        }

        .passport-authorize .btn-approve:hover {
            background-color: #218838;
        }

        .passport-authorize .btn-cancel {
            background-color: #dc3545;
            color: #fff;
        }

        .passport-authorize .btn-cancel:hover {
            background-color: #c82333;
        }

        .passport-authorize img {
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
        }

        .passport-authorize p {
            font-size: 1rem;
        }

        .passport-authorize form {
            display: inline-block;
        }
    </style>
</head>

<body class="passport-authorize">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card card-default">
                    <div class="card-header">
                        Muudal Authorization Request
                    </div>
                    <div class="card-body">
                        <!-- Puss in Boots Sad Face Image -->
                        <img src="https://s3.amazonaws.com/colorslive/png/348298-JfdY3FI89jwfdlhr.png"
                            alt="Puss in Boots Sad Face">

                        <!-- Introduction -->
                        <p><strong style="color:#f98012">{{ $client->name }}</strong> is requesting permission to access
                            your account.</p>

                        <!-- Scope List -->
                        @if (count($scopes) > 0)
                            <div class="scopes">
                                <p><strong>This application will be able to:</strong></p>
                                <ul>
                                    @foreach ($scopes as $scope)
                                        <li>{{ $scope->description }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="buttons">
                            <!-- Authorize Button -->
                            <form method="post" action="{{ route('passport.authorizations.approve') }}">
                                @csrf
                                <input type="hidden" name="state" value="{{ $request->state }}">
                                <input type="hidden" name="client_id" value="{{ $client->getKey() }}">
                                <input type="hidden" name="auth_token" value="{{ $authToken }}">
                                <button type="submit" class="btn btn-approve">Authorize</button>
                            </form>

                            <!-- Cancel Button -->
                            <form method="post" action="{{ route('passport.authorizations.deny') }}">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="state" value="{{ $request->state }}">
                                <input type="hidden" name="client_id" value="{{ $client->getKey() }}">
                                <input type="hidden" name="auth_token" value="{{ $authToken }}">
                                <button type="submit" class="btn btn-cancel">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
