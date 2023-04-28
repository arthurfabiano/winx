<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formulario Multipasos :: Urian Viera</title>

      @vite(['resources/css/style.css'])

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <div class="container">
      <div class="progress-bar">
        <div class="step">
          <p>Dados do Cliente</p>
          <div class="bullet">
            <span>1</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
        <div class="step">
          <p>Projeto Web</p>
          <div class="bullet">
            <span>2</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
        <div class="step">
          <p>Projeto Mobile</p>
          <div class="bullet">
            <span>3</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
        <div class="step">
          <p>Cadastro</p>
          <div class="bullet">
            <span>4</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
      </div>
      <div class="form-outer">
          <form method="POST" action="{{ route('user.cadastro-orcamento') }}">
              @csrf
              @include('parciais.cliente')
              @include('parciais.web')
              @include('parciais.mobile')
              @include('parciais.login')
          </form>
      </div>
    </div>

    @vite(['resources/js/script.js', 'resources/js/jquery/jquery.js', 'resources/js/jquery-mask/dist/jquery.mask.js', 'resources/js/jquery-mask/dist/custom.mask.js'])

  </body>
</html>
