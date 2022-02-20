<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * PosProducts Controller
 *
 * @property \App\Model\Table\PosProductsTable $PosProducts
 * @method \App\Model\Entity\PosProduct[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PosProductsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Pointofsale', 'Products'],
        ];
        $posProducts = $this->paginate($this->PosProducts);

        $this->set(compact('posProducts'));
    }

    /**
     * View method
     *
     * @param string|null $id Pos Product id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $posProduct = $this->PosProducts->get($id, [
            'contain' => ['Pointofsale', 'Products'],
        ]);

        $this->set(compact('posProduct'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $posProduct = $this->PosProducts->newEmptyEntity();
        if ($this->request->is('post')) {
            $posProduct = $this->PosProducts->patchEntity($posProduct, $this->request->getData());
            if ($this->PosProducts->save($posProduct)) {
                $this->Flash->success(__('The pos product has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pos product could not be saved. Please, try again.'));
        }
        $pointofsale = $this->PosProducts->Pointofsale->find('list', ['limit' => 200])->all();
        $products = $this->PosProducts->Products->find('list', ['limit' => 200])->all();
        $this->set(compact('posProduct', 'pointofsale', 'products'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Pos Product id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $posProduct = $this->PosProducts->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $posProduct = $this->PosProducts->patchEntity($posProduct, $this->request->getData());
            if ($this->PosProducts->save($posProduct)) {
                $this->Flash->success(__('The pos product has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pos product could not be saved. Please, try again.'));
        }
        $pointofsale = $this->PosProducts->Pointofsale->find('list', ['limit' => 200])->all();
        $products = $this->PosProducts->Products->find('list', ['limit' => 200])->all();
        $this->set(compact('posProduct', 'pointofsale', 'products'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Pos Product id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $posProduct = $this->PosProducts->get($id);
        if ($this->PosProducts->delete($posProduct)) {
            $this->Flash->success(__('The pos product has been deleted.'));
        } else {
            $this->Flash->error(__('The pos product could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
