<div class="page">
    <div class="field">
        <select name="plataforma_mobile">
            <option>Selecione a Plataforma</option>
            <option value="ambos">Ambos</option>
            <option value="ios">IOS</option>
            <option value="android">Andoid</option>
        </select>
    </div>
    <div class="field">
        <input type="number" name="quantidade_tela_mobile" placeholder="Quantidade de Telas" value="{{ old('quantidade_tela_mobile') }}">
    </div>
    <div class="field">
        <select name="login_mobile">
            <option>Terá Login?</option>
            <option value="sim">Sim</option>
            <option value="nao">Não</option>
        </select>
    </div>
    <div class="field">
        <select name="pagamento_mobile">
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
