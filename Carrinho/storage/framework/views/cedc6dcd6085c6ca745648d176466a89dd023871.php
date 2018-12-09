<div class="row">
    <div class="input-field">
        <input id="password" type="password" name="password" class="validate <?php echo e($errors->has('password') ? ' invalid' : ''); ?>" required>
        <label for="password" data-error="<?php echo e($errors->has('password') ? $errors->first('password') : null); ?>" >Senha</label>
    </div>
</div>