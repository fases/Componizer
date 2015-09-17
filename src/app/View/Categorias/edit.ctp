<div class="categoria view">
<h1> Editar Categoria </h1>
<?php
   echo $this->Form->create('Categoria', array('action' => 'edit'));
   echo $this->Form->input('nome');
   echo $this->Form->input('descricao',array('rows' => '5'));
   echo $this->Form->end('Salvar');
?>
</div>
<div class="actions">
	<h3><?php echo __('Categoria'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Nova categoria'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar categorias'), array('action' => 'index')); ?> </li>
	</ul>
  <h3><?php echo __('Subcategoria'); ?></h3>
  <ul>
		<li><?php echo $this->Html->link(__('Listar subcategorias'), array('controller' => 'subcategorias','action' => 'index')); ?> </li>
	</ul>
  <h3><?php echo __('Componente'); ?></h3>
  <ul>
    <li><?php echo $this->Html->link(__('Listar componentes'), array('controller' => 'componentes','action' => 'index')); ?> </li>
	</ul>
</div>
