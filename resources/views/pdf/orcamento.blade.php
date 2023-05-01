<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Winx.ai</title>

</head>
<body>
<div class="container" style="height: 750px; overflow-y: scroll">
    <div style="text-align: right;color: green">
        <p>{{ Session::get('sucesso') }}</p>
    </div>

    <h1 style="text-align: center;"> Informações do orcamento ao Cliente </h1>

    <p style="text-align: justify;"><i>O Sr(a). <b>{{ $dadosOrcamento['nome_cliente'] }}</b> com o email <b>{{ $dadosOrcamento['email_contato'] }}</b>
        e telefone <b>{{ $dadosOrcamento['telefone'] }}</b> morador da cidade de <b>{{ $dadosOrcamento['address']['cidade'] }}/{{ $dadosOrcamento['address']['estado'] }}</b>
        solicitou no dia <b>{{ data_iso_para_br($dadosOrcamento['created_at']) }}</b> os orcamento de um projeto web, mobile e desktop cujo as
        informações estão listadas abaixo!
    </i></p>

    <br>

    <h2 class="mt-10" style="padding: 20px; background-color: #a0aec0;">Projeto Web</h2>
    <div style="padding: 20px">
        <b>Selecionar Navegador.:</b> {{ $dadosOrcamento['navegador_web'] }}<br>
        <b>Quantidade de Páginas.:</b> {{ $dadosOrcamento['paginas_web'] }}<br>
        <b>Login.:</b> {{ $dadosOrcamento['login_web'] }}<br>
        <b>Pagamento.:</b> {{ $dadosOrcamento['pagamento_web'] }}
    </div>


    <h2 class="mt-10" style="padding: 20px; background-color: #a0aec0;">Projeto Mobile</h2>
    <div style="padding: 20px">
        <b>Plataforma Mobile.:</b> {{ $dadosOrcamento['plataforma_mobile'] }}<br>
        <b>Quantidade de Telas.:</b> {{ $dadosOrcamento['quantidade_tela_mobile'] }}<br>
        <b>Login.:</b> {{ $dadosOrcamento['login_mobile'] }}<br>
        <b>Pagamento.:</b> {{ $dadosOrcamento['pagamento_mobile'] }}
    </div>

    <h2 class="mt-10" style="padding: 20px; background-color: #a0aec0;">Projeto Desktop</h2>
    <div style="padding: 20px">
        <b>Sistema Operacional.:</b> {{ $dadosOrcamento['plataforma_desktop'] }}<br>
        <b>Quantidade de Telas.:</b> {{ $dadosOrcamento['quantidade_telas_desktop'] }}<br>
        <b>Impressora.:</b> {{ $dadosOrcamento['impressora_desktop'] }}<br>
        <b>Licenca.:</b> {{ $dadosOrcamento['licenca_desktop'] }}
</div>

<h1 style="text-align: center;padding: 20px; background-color: #a0aec0;"> Winx.ai </h1>

</body>
</html>
