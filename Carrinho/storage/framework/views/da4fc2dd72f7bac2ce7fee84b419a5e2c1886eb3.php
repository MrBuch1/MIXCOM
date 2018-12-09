<div class="row">
    <div class="input-field">
        <input id="password-confirm" type="password" name="password_confirmation" class="validate <?php echo e($errors->has('password-confirm') ? ' invalid' : ''); ?>" required>
        <label for="password-confirm" data-error="<?php echo e($errors->has('password-confirm') ? $errors->first('password-confirm') : null); ?>" >Confirmação de senha</label>
    </div>
</div>