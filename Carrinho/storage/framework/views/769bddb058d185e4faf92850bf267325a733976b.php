<?php $__env->startSection('pagina_titulo', 'Carrinho de compras - Produtos'); ?>

<?php $__env->startSection('pagina_conteudo'); ?>
	<div class="container">
		<div class="row">
			<h3>Lista de produtos</h3>
			<?php if(Session::has('admin-mensagem-sucesso')): ?>
	            <div class="card-panel green"><strong><?php echo e(Session::get('admin-mensagem-sucesso')); ?><strong></div>
	        <?php endif; ?>
			<table>
				<thead>
					<tr>
						<th></th>
						<th>ID</th>
						<th>Nome</th>
						<th>Valor</th>
					</tr>
				</thead>
				<tbody>
					<?php $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produto): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
					<tr>
						<td>
							<a class="btn-flat tooltipped" href="<?php echo e(route('admin.produtos.editar', $produto->id)); ?>" class="btn-flat tooltipped" data-position="right" data-delay="50" data-tooltip="Editar produto?">
								<i class="material-icons black-text">mode_edit</i>
							</a>
							<a class="btn-flat tooltipped" href="<?php echo e(route('admin.produtos.deletar', $produto->id)); ?>" class="btn-flat tooltipped" data-position="right" data-delay="50" data-tooltip="Deletar produto?">
								<i class="material-icons black-text">delete</i>
								</a>
						</td>
						<td><?php echo e($produto->id); ?></td>
						<td><?php echo e($produto->nome); ?></td>
						<td>R$ <?php echo e($produto->valor); ?></td>
					</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
				</tbody>
			</table>
		</div>
		<div class="row">
			<a class="btn-floating btn-large blue tooltipped" href="<?php echo e(route('admin.produtos.adicionar')); ?>" title="Adicionar" data-position="top" data-delay="50" data-tooltip="Adicionar produto?">
				<i class="material-icons">add</i>
			</a>
		</div>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>