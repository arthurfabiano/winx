<div class="page slide-page data-cliente">
    <div class="field">
        <input type="text" name="nome_cliente" class="nome_cliente @error('nome_cliente') input-error @enderror" value="{{ old('nome_cliente') }}" placeholder="Nome" maxlength="255">
        <input type="text" name="nome_cliente" class="nome_cliente" value="{{ old('nome_cliente') }}" placeholder="Sobrenome" maxlength="255">
    </div>
    <div class="field">
        <!-- <div class="label">E-mail @error('email_contato') <span class="error-validation"> - {{ $message }}</span> @enderror</div>-->
        <input type="email" name="email_contato" value="{{ old('email_contato') }}" placeholder="Email para Contato" maxlength="255">
    </div>
    <div class="field">
        <!-- <div class="label">Telefone @error('telefone') <span class="error-validation"> - {{ $message }}</span> @enderror</div>-->
        <input type="text" name="telefone" class="telefone" value="{{ old('telefone') }}" placeholder="Telefone">
    </div>
    <div class="field">
        <!-- <div class="label">CEP @error('cep') <span class="error-validation"> - {{ $message }}</span> @enderror</div> -->
        <input type="text" name="cep" class="cep"  value="{{ old('cep') }}" placeholder="CEP" maxlength="255">
    </div>

    <div class="field">
        <!-- <div class="label">Logradouro @error('logradouro') <span class="error-validation"> - {{ $message }}</span> @enderror</div> -->
        <input type="text" name="logradouro" value="{{ old('logradouro') }}" placeholder="Endereço" maxlength="255">
    </div>
    <div class="field">
        <!-- <div class="label">Bairro @error('bairro') <span class="error-validation"> - {{ $message }}</span> @enderror</div> -->
        <input type="text" name="bairro" value="{{ old('bairro') }}" placeholder="Bairro" maxlength="255">
    </div>
    <div class="field">
        <!-- <div class="label">Cidade @error('cidade') <span class="error-validation"> - {{ $message }}</span> @enderror</div> -->
        <input type="text" name="cidade" value="{{ old('cidade') }}" placeholder="Cidade" maxlength="255">
    </div>
    <div class="field">
        <!-- <div class="label">Estado @error('estado') <span class="error-validation"> - {{ $message }}</span> @enderror</div> -->
        <input type="text" name="estado" value="{{ old('estado') }}" placeholder="Estado" maxlength="255">
    </div>

    <div class="field">
        <button class="firstNext next mt-5 btn-success">Próximo</button>
    </div>
</div>


