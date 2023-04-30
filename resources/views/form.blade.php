<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Winx</title>

      @vite(['resources/css/style.css', 'resources/css/fontawesome-free/css/all.min.css'])

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <div class="container">
      <div class="progress-bar">
        <div class="step">
          <p>Cliente</p>
          <div class="bullet">
            <span>1</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
        <div class="step">
          <p>Web</p>
          <div class="bullet">
            <span>2</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
        <div class="step">
          <p>Mobile</p>
          <div class="bullet">
            <span>3</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
          <div class="step">
              <p>Desktop</p>
              <div class="bullet">
                  <span>4</span>
              </div>
              <div class="check fas fa-check"></div>
          </div>
        <div class="step">
          <p>Cadastro</p>
          <div class="bullet">
            <span>5</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
      </div>
      <div class="form-outer">
          <form method="POST" action="{{ route('user.cadastro-orcamento') }}">
              <input type="hidden" name="user_id" value="1">

              @csrf
              @include('parciais.cliente')
              @include('parciais.web')
              @include('parciais.mobile')
              @include('parciais.desktop')
              @include('parciais.login')
          </form>
      </div>
    </div>

    @vite(['resources/js/script.js', 'resources/js/jquery/jquery.js', 'resources/js/jquery-mask/dist/jquery.mask.js', 'resources/js/jquery-mask/dist/custom.mask.js'])

  </body>
</html>
