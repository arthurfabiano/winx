<div class="page">
    <div class="field">
        <div class="label mt-10">@error('navegador_web') <span class="error-validation"> - {{ $message }}</span> @enderror</div>
        <select name="navegador_web" @error('navegador_web') class="input-error" @enderror>
            <option value="">Selecionar a plataforma</option>
            <option value="firefox">FireFox</option>
            <option value="google chrome">Google Chrome</option>
            <option value="opera">Opera</option>
            <option value="safari">Safari</option>
        </select>
    </div>
    <div class="field">
        <div class="label mt-10">@error('number') <span class="error-validation"> - {{ $message }}</span> @enderror</div>
        <input type="number" name="paginas_web" @error('paginas_web') class="input-error" @enderror value="{{ old('paginas_web') || 1 }}" placeholder="Número de páginas">
    </div>
    <div class="field">
        <div class="label mt-10">@error('login_web') <span class="error-validation"> - {{ $message }}</span> @enderror</div>
        <select name="login_web" @error('login_web') class="input-error" @enderror>
            <option value="">Terá login?</option>
            <option value="sim">Sim</option>
            <option value="nao">Não</option>
        </select>
    </div>
    <div class="field">
        <div class="label mt-10">@error('pagamento_web') <span class="error-validation"> - {{ $message }}</span> @enderror</div>
        <select name="pagamento_web" @error('pagamento_web') class="input-error" @enderror>
            <option value="">Terá meio de pagamento</option>
            <option value="sim">Sim</option>
            <option value="nao" selected>Não</option>
        </select>
    </div>

    <div class="field btns">
        <button class="prev-1 prev mt-5">Anterior</button>
        <button class="next-1 next mt-5 btn-success">Próximo</button>
    </div>
</div>
