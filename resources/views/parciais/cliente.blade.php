<div class="page slide-page data-cliente">
    <div class="field">
        <div class="label mt-10">@error('nome_cliente') <span class="error-validation"> - {{ $message }}</span> @enderror</div>
        <input type="text" name="nome_cliente" class="nome_cliente @error('nome_cliente') input-error @enderror" value="{{ old('nome_cliente') }}" placeholder="Nome" maxlength="255">
    </div>
    <div class="field">
        <div class="label mt-10">@error('email_contato') <span class="error-validation"> - {{ $message }}</span> @enderror</div>
        <input type="email" @error('email_contato') class="input-error" @enderror name="email_contato" value="{{ old('email_contato') }}" placeholder="Email para Contato" maxlength="255">
    </div>
    <div class="field">
        <div class="label mt-10">@error('telefone') <span class="error-validation"> - {{ $message }}</span> @enderror</div>
        <input type="text" name="telefone" class="telefone @error('telefone') input-error @enderror" value="{{ old('telefone') }}" placeholder="Telefone">
    </div>
    <div class="field">
        <div class="label mt-10">@error('cep') <span class="error-validation"> - {{ $message }}</span> @enderror</div>
        <input type="text" name="cep" id="cep" class="cep @error('cep') input-error @enderror"  value="{{ old('cep') }}" placeholder="CEP" maxlength="8">
    </div>

    <div class="field">
        <div class="label mt-10">@error('logradouro') <span class="error-validation"> - {{ $message }}</span> @enderror</div>
        <input type="text" name="logradouro" class="@error('logradouro') input-error @enderror" id="logradouro" value="{{ old('logradouro') }}" placeholder="Endereço" maxlength="100">
    </div>
    <div class="field">
        <div class="label mt-10">@error('bairro') <span class="error-validation"> - {{ $message }}</span> @enderror</div>
        <input type="text" name="bairro" class="@error('bairro') input-error @enderror" id="bairro" value="{{ old('bairro') }}" placeholder="Bairro" maxlength="50">
    </div>
    <div class="field">
        <div class="label mt-10">@error('cidade') <span class="error-validation"> - {{ $message }}</span> @enderror</div>
        <input type="text" name="cidade" class="@error('cidade') input-error @enderror" id="cidade" value="{{ old('cidade') }}" placeholder="Cidade" maxlength="50">
    </div>
    <div class="field">
        <div class="label mt-10">@error('estado') <span class="error-validation"> - {{ $message }}</span> @enderror</div>
        <input type="text" name="estado" class="@error('estado') input-error @enderror" id="estado" value="{{ old('estado') }}" placeholder="Estado" maxlength="2">
    </div>

    <div class="field">
        <button class="firstNext next mt-5 btn-success">Próximo</button>
    </div>
</div>


