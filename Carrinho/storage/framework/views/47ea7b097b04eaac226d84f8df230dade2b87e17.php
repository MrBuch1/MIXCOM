<?php $__env->startSection('pagina_titulo', 'Carrinho de compras - Produtos editar'); ?>

<?php $__env->startSection('pagina_conteudo'); ?>
	<div class="container">
		<div class="row">
			<h3>Editar produto "<?php echo e($registro->nome); ?>"</h3>
			<form method="POST" action="<?php echo e(route('admin.produtos.atualizar', $registro->id)); ?>">
				<?php echo e(csrf_field()); ?>

				<?php echo e(method_field('PUT')); ?>


				<?php echo $__env->make('admin.produto._form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

				<button type="submit" class="btn blue">Atualizar</button>
			</form>
		</div>
	</div>
	<?php echo $__env->make('admin.produto._lib', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>