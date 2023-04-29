<div class="page">
    <div class="field">
        <div class="label mt-10">@error('name') <span class="error-validation"> - {{ $message }}</span> @enderror</div>
        <input type="text" name="name" @error('name') class="input-error" @enderror value="{{ old('name') }}" placeholder="Email" maxlength="255">
    </div>
    <div class="field">
        <div class="label mt-10">@error('email') <span class="error-validation"> - {{ $message }}</span> @enderror</div>
        <input type="email" name="email" @error('navegador_web') class="input-error" @enderror value="{{ old('email') }}" placeholder="Email" maxlength="255">
    </div>
    <div class="field">
        <div class="label mt-10">@error('password') <span class="error-validation"> - {{ $message }}</span> @enderror</div>
        <input type="password" name="password" @error('navegador_web') class="input-error" @enderror placeholder="Password" maxlength="8">
    </div>
    <div class="field btns">
        <button class="prev-3 prev mt-5">Anterior</button>
        <button class="submit mt-5 btn-success">Solicitar Orçamento</button>
    </div>
</div>
