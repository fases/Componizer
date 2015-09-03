<?php
  class CategoriasController extends AppController {
    public $helpers = array('Html','Form');
    public $name = 'Categorias';

    public function index() {
      $this->set('categories',$this->Categoria->find('all'));
    }

    public function add () {
		  if ($this->request->is('post')) {
      	  $this->Categoria->create();
			if ($this->Categoria->save($this->request->data)) {
			    $this->Session->setFlash(__('A categoria foi salva!.'));
			    return $this->redirect(array('action' => 'index'));
			}
          $this->Session->setFlash(__('A categoria não foi salva!.'));
		  }
		}

        function edit($id = null) {
        $this->Categoria->id = $id;
			if ($this->request->is('get')) {
				$this->request->data = $this->Categoria->read();
			} else {
				if ($this->Categoria->save($this->request->data)) {
					$this->Session->setFlash('A categoria foi editada!');
					$this->redirect(array('action' => 'index'));
				}
			}
		}

		function delete($id) {
        if (!$this->request->is('get')) {
            throw new MethodNotAllowedException();
        }
			if ($this->Categoria->delete($id)) {
				$this->Session->setFlash('A categoria foi deletada.');
				$this->redirect(array('action' => 'index'));
			}
		}
    }
?>
