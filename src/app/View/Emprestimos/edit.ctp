<div class="emprestimos view">
<h1> Editar Requisição </h1>
<?php
    echo $this->Form->create('Emprestimo', array('action' => 'edit'));
    echo $this->Form->input('horario');
    echo $this->Form->input('turno');
    echo $this->Form->input('data_aula');
    echo $this->Form->input('laboratorio_id', array('type' => 'select', 'options' => $laboratorio, 'label' => 'local'));
    echo $this->Form->input('user_id',array('type' => 'select','options' => $user,'label' => 'Solicitante'));
    echo $this->Form->input('observacoes',array('rows' => '5'));
    echo $this->Form->end('Salvar');
?>

</div>
<div class="actions">
	<h3><?php echo __('Requisição'); ?></h3>
	<ul>
		<!--<li><?php //echo $this->Html->link(__('Nova requisição'), array('action' => 'add')); ?></li> -->
		<li><?php echo $this->Html->link(__('Listar requisições'), array('action' => 'index')); ?> </li>
	</ul>
  <!--<h3><?php //echo __('Subcategoria'); ?></h3>
  <ul>
		<li><?php //echo $this->Html->link(__('Listar subcategorias'), array('controller' => 'subcategorias','action' => 'index')); ?> </li>
	</ul>
  <h3><?php //echo __('Componente'); ?></h3>
  <ul>
    <li><?php //echo $this->Html->link(__('Listar componentes'), array('controller' => 'componentes','action' => 'index')); ?> </li>
	</ul>-->
</div>
