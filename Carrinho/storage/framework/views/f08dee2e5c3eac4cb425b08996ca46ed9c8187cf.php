<div class="row">
    <div class="input-field">
        <input id="email" type="email" name="email" value="<?php echo e(old('email')); ?>" class="validate <?php echo e($errors->has('email') ? ' invalid' : ''); ?>" required autofocus>
        <label for="email" data-error="<?php echo e($errors->has('email') ? $errors->first('email') : null); ?>" >E-mail</label>
    </div>
</div>