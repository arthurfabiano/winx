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
    <div style="text-align: right;">
        <a href="#"><i class="fa-lg fas fa-power-off nav-icon color-logout-danger"></i></a>
    </div>

    <header>- Informações ao Cliente -</header>

    <p style="text-align: left;"><i>O Sr(a). <b>{{ $dadosOrcamento->nome_cliente }}</b> com o email <b>{{ $dadosOrcamento->email_contato }}</b> e telefone <b>{{ $dadosOrcamento->telefone }}</b>
            morador da cidade de <b>{{ $dadosOrcamento->address->cidade }}/{{ $dadosOrcamento->address->estado }}</b> solicitou no dia <b>{{ $dadosOrcamento->created_at }}</b> os orcamento de um projeto web e mobile cujo as
            informações estão listadas abaixo para aprovação!</i></p>

    <div class="spacing"></div>

    <h3 class="mt-10" style="text-align: center;">> Projeto Web <</h3>
    @include('parciais.dashboard-web')
    <div class="spacing"></div>

    <h3 class="mt-10" style="text-align: center;">> Projeto Mobile <</h3>
    @include('parciais.dashboard-mobile')
    <div class="spacing"></div>

    <div style="text-align: center;">
        <a href="#"><i class="fa-lg fas fa-file-pdf nav-icon mr-30"></i></a>
        <a href="#"><i class="fa-lg fas fa-paper-plane nav-icon mr-30"></i></a>
    </div>
</div>

@vite(['resources/js/script.js', 'resources/js/jquery/jquery.js', 'resources/js/jquery-mask/dist/jquery.mask.js', 'resources/js/jquery-mask/dist/custom.mask.js'])

</body>
</html>
