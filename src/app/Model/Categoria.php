<?php
    class Categoria extends AppModel{
      public $name = 'Categoria';
      public $hasMany = array('Subcategoria' => array(
            'className' => 'Subcategoria',
            'foreignKey' => 'categoria_id',
            'dependent' => true,
            'conditions' => '',
            'fields' => array('id','nome')),
      'Componente' => array(
            'className' => 'Componente',
            'foreignKey' => 'categoria_id',
            'dependent' => true,
            'conditions' => '',
            'fields' => array('id','nome'))
      );

	    public $validate = array(
		    'nome' => array(
			   'rule' => 'notEmpty',
               'required' => 'true',
               'message' => 'O campo nome é obrigatório!'
		     ),
            'descricao' => array(
               'rule' => 'notEmpty',
               'required' => 'true',
               'message' => 'O campo descricão é obrigatório!'
            )
        );
    }
?>
