<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#2B2B35">
    <link rel="shortcut icon" href="{{ asset('mobile/img/logo_rita.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/log.css') }}">
    <link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('images/Logo_effiServices.png') }}"/>
    <title>NKU VGB | login</title>
</head>

<body>
    <div class="container shadow">
        @if(session()->has('message'))
            <div class="alert alert-warning alert-dismissable fade show" role="alert">
                <strong>{{session()->get('message')}}</strong>
            </div>
        @endif
        <form id="contact" method="POST" action="{{ route('auth') }}">
            @csrf
            <div style="display: flex; justify-content: center; margin-bottom: 10px;">
                <img src="{{ asset('img/logo_rita.png') }}" alt="logo" style="width: 50%">
            </div>
            <h3>Bienvenu dans NKUL VBG!</h3>
            <h4 style="text-align: center;">Veuillez renseignez vos informations</h4>

            <fieldset>
                <label style="color: rgb(211, 168, 12)" for="">Email</label>
                <input type="email" style="color: rgb(245, 245, 237)" name="email" required />
            </fieldset>

            <fieldset>
                <label style="color: rgb(211, 168, 12)" for="">Password</label>
                <input type="password" style="color: rgb(245, 245, 237)" name="password" />
            </fieldset>

            <fieldset>
                <button name="submit" type="submit" id="contact-submit">Se connecter</button>
            </fieldset>

        </form>
    </div>
</body>

</html>
