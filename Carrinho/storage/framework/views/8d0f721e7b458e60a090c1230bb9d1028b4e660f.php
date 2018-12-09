<?php $__env->startSection('pagina_titulo', 'Carrinho de compras - Produtos adicionar'); ?>

<?php $__env->startSection('pagina_conteudo'); ?>
	<div class="container">
		<div class="row">
			<h3>Adicionar produto</h3>
			<form method="POST" action="<?php echo e(route('admin.produtos.salvar')); ?>">
				<?php echo e(csrf_field()); ?>

				<?php echo $__env->make('admin.produto._form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

				<button type="submit" class="btn blue">Salvar</button>
			</form>
		</div>
	</div>
	<?php echo $__env->make('admin.produto._lib', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>