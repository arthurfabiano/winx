<div class="page">
    <div class="field">
        <div class="label mt-10">@error('plataforma_mobile') <span class="error-validation"> - {{ $message }}</span> @enderror</div>
        <select name="plataforma_mobile" @error('navegador_web') class="input-error" @enderror>
            <option>Selecione a Plataforma</option>
            <option value="ambos">Ambos</option>
            <option value="ios">IOS</option>
            <option value="android">Andoid</option>
        </select>
    </div>
    <div class="field">
        <div class="label mt-10">@error('quantidade_tela_mobile') <span class="error-validation"> - {{ $message }}</span> @enderror</div>
        <input type="number" name="quantidade_tela_mobile" @error('navegador_web') class="input-error" @enderror placeholder="Quantidade de Telas" value="{{ old('quantidade_tela_mobile') }}">
    </div>
    <div class="field">
        <div class="label mt-10">@error('login_mobile') <span class="error-validation"> - {{ $message }}</span> @enderror</div>
        <select name="login_mobile" @error('navegador_web') class="input-error" @enderror>
            <option>Terá Login?</option>
            <option value="sim">Sim</option>
            <option value="nao">Não</option>
        </select>
    </div>
    <div class="field">
        <div class="label mt-10">@error('pagamento_mobile') <span class="error-validation"> - {{ $message }}</span> @enderror</div>
        <select name="pagamento_mobile" @error('navegador_web') class="input-error" @enderror>
            <option>Terá Pagamento?</option>
            <option value="sim">Sim</option>
            <option value="nao">Não</option>
        </select>
    </div>
    <div class="field btns">
        <button class="prev-2 prev mt-5">Anterior</button>
        <button class="next-2 next mt-5 btn-success">Próximo</button>
    </div>
</div>
