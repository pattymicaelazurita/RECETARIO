<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\I18n\FrozenTime;

/**
 * Recetas Controller
 *
 * @property \App\Model\Table\RecetasTable $Recetas
 * @method \App\Model\Entity\Receta[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RecetasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $recetas = $this->paginate($this->Recetas, ['limit'=> 3]);

        $this->set(compact('recetas'));
    }

    /**
     * View method
     *
     * @param string|null $id Receta id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $receta = $this->Recetas->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('receta'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $receta = $this->Recetas->newEmptyEntity();
        if ($this->request->is('post')) {
            
            $receta = $this->Recetas->patchEntity($receta, $this->request->getData());
                        
            //Agregar imagen de la receta

            $imagen=$this->request->getData('imagen');

            if($imagen){

                $tiempo= FrozenTime::now()->toUnixString();

                $nombreImagen=$tiempo."_".$imagen->getClientFileName();
                $destino=WWW_ROOT.'img\Recetas'.$nombreImagen;
                $imagen->moveTo($destino);
                $receta->imagen=$nombreImagen;
            }
            
            
            
            
            if ($this->Recetas->save($receta)) {
                $this->Flash->success(__('The receta has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The receta could not be saved. Please, try again.'));
        }
        $this->set(compact('receta'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Receta id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $receta = $this->Recetas->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {

            $nombreImagenAnterior=$receta->imagen;

            $receta = $this->Recetas->patchEntity($receta, $this->request->getData());

            $imagen=$this->request->getData('imagen');
            $receta->imagen=$nombreImagenAnterior;

            if($imagen->getClientFilename()){
                if(file_exists(WWW_ROOT.'img\Recetas'.$nombreImagenAnterior)){
                    unlink(WWW_ROOT.'img\Recetas'.$nombreImagenAnterior);
                }
                $tiempo= FrozenTime::now()->toUnixString();

                $nombreImagen=$tiempo."_".$imagen->getClientFileName();
                $destino=WWW_ROOT.'img\Recetas'.$nombreImagen;
                $imagen->moveTo($destino);
                $receta->imagen=$nombreImagen;
            }

            if ($this->Recetas->save($receta)) {
                $this->Flash->success(__('The receta has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The receta could not be saved. Please, try again.'));
        }
        $this->set(compact('receta'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Receta id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $receta = $this->Recetas->get($id);

        if(file_exists(WWW_ROOT.'img\Recetas'.$receta['imagen'])){
            unlink(WWW_ROOT.'img\Recetas'.$receta['imagen']);
        }

        if ($this->Recetas->delete($receta)) {
            $this->Flash->success(__('The receta has been deleted.'));
        } else {
            $this->Flash->error(__('The receta could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
