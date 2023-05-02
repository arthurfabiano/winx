<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Winx</title>

    @vite(['resources/css/style.css'])

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
<div class="container" style="height: 750px; overflow-y: scroll">
    <header>- Login de Usuário -</header>

    <p style="text-align: center;"><i>Faça seu login para ter acesso ao Orcamento.</i></p>

    <p style="text-align: center;"><i>Em breve chegara um email em sua caixa de mensagem.</i></p>

    <div class="form-outer margin-up-login">
        <form method="POST" action="{{ route('auth.logar') }}">
            @csrf

            <div class="page">
                <div class="field">
                    <div class="label mt-10">@error('email') <span class="error-validation"> - {{ $message }}</span> @enderror</div>
                    <input type="email" name="email" @error('email') class="input-error" @enderror value="{{ old('email') }}" placeholder="Email" maxlength="255">
                </div>
                <div class="field">
                    <div class="label mt-10">@error('password') <span class="error-validation"> - {{ $message }}</span> @enderror</div>
                    <input type="password" name="password" @error('password') class="input-error" @enderror placeholder="Password" maxlength="8">
                </div>
                <div class="field btns">
                    <button class="submit mt-5 btn-success">Realizar Login</button>
                </div>
            </div>
        </form>
    </div>
</div>

@vite(['resources/js/script.js', 'resources/js/jquery/jquery.js', 'resources/js/jquery-mask/dist/jquery.mask.js', 'resources/js/jquery-mask/dist/custom.mask.js'])

</body>
</html>
