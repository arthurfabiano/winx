<x-mail::message>
# Orçamento Winx.ai

Olá <b>{{ $data['nome_cliente'] }}</b> segue as informações do seu orçamento!

#### Projeto WEB
__Navegadore(s).:__ {{ $data['navegador_web'] }}<br>
__Quantidade de Páginas.:__ {{ $data['paginas_web'] }}<br>
__Login.:__ {{ $data['login_web'] }}<br>
__Pagamento.:__ {{ $data['pagamento_web'] }}<br>

#### Projeto Mobile
__Navegadore(s).:__ {{ $data['plataforma_mobile'] }}<br>
__Quantidade de Páginas.:__ {{ $data['quantidade_tela_mobile'] }}<br>
__Login.:__ {{ $data['login_mobile'] }}<br>
__Pagamento.:__ {{ $data['pagamento_mobile'] }}<br>

#### Projeto Desktop
__Navegadore(s).:__ {{ $data['plataforma_desktop'] }}<br>
__Quantidade de Páginas.:__ {{ $data['quantidade_telas_desktop'] }}<br>
__Login.:__ {{ $data['impressora_desktop'] }}<br>
__Pagamento.:__ {{ $data['licenca_desktop'] }}<br>

<x-mail::button :url="$url">
Ver na Web
</x-mail::button>

Obrigado,<br>
{{ config('app.name') }}
</x-mail::message>
