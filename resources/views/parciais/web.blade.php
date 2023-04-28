<div class="page">
    <div class="field">
        <select name="navegador_web">
            <option>Selecionar Navegador</option>
            <option value="firefox">FireFox</option>
            <option value="google chrome">Google Chrome</option>
            <option value="opera">Opera</option>
            <option value="safari">Safari</option>
        </select>
    </div>
    <div class="field">
        <input type="number" name="paginas_web" value="{{ old('paginas_web') }}" placeholder="Número de páginas">
    </div>
    <div class="field">
        <select name="login_web">
            <option>Terá login?</option>
            <option value="sim">Sim</option>
            <option value="nao">Não</option>
        </select>
    </div>
    <div class="field">
        <select name="pagamento_web">
            <option>Terá meio de pagamento?</option>
            <option value="sim">Sim</option>
            <option value="nao" selected>Não</option>
        </select>
    </div>

    <div class="field btns">
        <button class="prev-1 prev mt-5">Anterior</button>
        <button class="next-1 next mt-5 btn-success">Próximo</button>
    </div>
</div>
