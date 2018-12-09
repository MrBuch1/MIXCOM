<?php $__env->startSection('pagina_titulo', 'Login' ); ?>

<?php $__env->startSection('pagina_conteudo'); ?>

<div class="container">
    <div class="row">
        <div class="col l6 offset-l3 s12 m10 offset-m2">
            
            <h4>Login</h4>
            <form method="POST" action="<?php echo e(url('/login')); ?>">
                <?php echo e(csrf_field()); ?>


                <?php echo $__env->make('auth._form_email', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <?php echo $__env->make('auth._form_password', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                <div class="row">
                    <input type="checkbox" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?> id="remember" />
                    <label for="remember">Lembre-se de mim</label>
                </div>

                <div class="row">
                    <button type="submit" class="btn blue col l8 s12 m8">
                        Entrar
                    </button>
                </div>

                <div class="row">
                    <a class="" href="<?php echo e(url('/password/reset')); ?>">
                        Esqueceu sua senha?
                    </a>
                </div>

            </form>
        </div>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>