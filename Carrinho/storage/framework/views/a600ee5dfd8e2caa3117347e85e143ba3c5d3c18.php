<?php $__env->startSection('pagina_titulo', 'Adicionar cupom'); ?>

<?php $__env->startSection('pagina_conteudo'); ?>
	<div class="container">
		<div class="row">
			<h3>Adicionar cupom</h3>
			<form method="POST" action="<?php echo e(route('admin.cupons.salvar')); ?>">
				<?php echo e(csrf_field()); ?>

				<?php echo $__env->make('admin.cupom_desconto._form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

				<button type="submit" class="btn blue">Salvar</button>
			</form>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>