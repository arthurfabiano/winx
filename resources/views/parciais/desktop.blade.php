<div class="page">
    <div class="field">
        <div class="label mt-10">@error('plataforma_desktop') <span class="error-validation"> - {{ $message }}</span> @enderror</div>
        <select name="plataforma_desktop" @error('plataforma_desktop') class="input-error" @enderror>
            <option value="">Qual OS suportado</option>
            <option value="windows">Windows</option>
            <option value="linux">Linux</option>
            <option value="mac">Mac</option>
        </select>
    </div>
    <div class="field">
        <div class="label mt-10">@error('quantidade_telas_desktop') <span class="error-validation"> - {{ $message }}</span> @enderror</div>
        <input type="number" name="quantidade_telas_desktop" @error('quantidade_telas_desktop') class="input-error" @enderror value="{{ old('quantidade_telas_desktop') || 1 }}" placeholder="Quantas telas teremos">
    </div>
    <div class="field">
        <div class="label mt-10">@error('impressora_desktop') <span class="error-validation"> - {{ $message }}</span> @enderror</div>
        <select name="impressora_desktop" @error('impressora_desktop') class="input-error" @enderror>
            <option value="">Suporte a Impressora?</option>
            <option value="sim">Sim</option>
            <option value="nao">Não</option>
        </select>
    </div>
    <div class="field">
        <div class="label mt-10">@error('licenca_desktop') <span class="error-validation"> - {{ $message }}</span> @enderror</div>
        <select name="licenca_desktop" @error('licenca_desktop') class="input-error" @enderror>
            <option value="">Terá licença de acesso?</option>
            <option value="sim" selected>Sim</option>
            <option value="nao">Não</option>
        </select>
    </div>

    <div class="field btns">
        <button class="prev-3 prev mt-5">Anterior</button>
        <button class="next-3 next mt-5 btn-success">Próximo</button>
    </div>
</div>
