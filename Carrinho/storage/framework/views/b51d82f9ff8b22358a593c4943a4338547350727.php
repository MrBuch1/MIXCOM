<?php $__env->startSection('pagina_titulo', 'Cadastro de usuário' ); ?>

<?php $__env->startSection('pagina_conteudo'); ?>

<div class="container">
    <div class="row">
        <div class="col l10 offset-l1 s12 m12">
            <h4>Cadastro de usuário</h4>
            <form method="POST" action="<?php echo e(url('/register')); ?>">
                <?php echo e(csrf_field()); ?>


                <div class="row">
                    <div class="input-field">
                        <input id="name" type="text" name="name" value="<?php echo e(old('name')); ?>" class="validate <?php echo e($errors->has('name') ? ' invalid' : ''); ?>" required autofocus>
                        <label for="name" data-error="<?php echo e($errors->has('name') ? $errors->first('name') : null); ?>" >Nome</label>
                    </div>
                </div>

                <?php echo $__env->make('auth._form_email', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <?php echo $__env->make('auth._form_password', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <?php echo $__env->make('auth._form_password_confirm', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                <div class="row">
                    <button type="submit" class="btn blue waves-effect waves-light col l6 m6 s12">
                        Cadastrar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>