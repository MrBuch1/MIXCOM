<?php $__env->startSection('pagina_titulo', 'Recuperar senha' ); ?>

<?php $__env->startSection('pagina_conteudo'); ?>

<div class="container">
    <div class="row">
        <div class="col l6 offset-l3 s12 m10 offset-m2">

            <h4>Recuperar senha</h4>
            <?php if(session('status')): ?>
                <div class="card-panel green">
                    <?php echo e(session('status')); ?>

                </div>
            <?php endif; ?>
            <form method="POST" action="<?php echo e(url('/password/email')); ?>">
                <?php echo e(csrf_field()); ?>


                <?php echo $__env->make('auth._form_email', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                <div class="row">
                    <button type="submit" class="btn blue col l8 s12 m8">
                        Enviar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>