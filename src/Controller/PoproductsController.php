<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Poproducts Controller
 *
 * @property \App\Model\Table\PoproductsTable $Poproducts
 * @method \App\Model\Entity\Poproduct[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PoproductsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Purchaseorder', 'Products'],
        ];
        $poproducts = $this->paginate($this->Poproducts);

        $this->set(compact('poproducts'));
    }

    /**
     * View method
     *
     * @param string|null $id Poproduct id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $poproduct = $this->Poproducts->get($id, [
            'contain' => ['Purchaseorder', 'Products'],
        ]);

        $this->set(compact('poproduct'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $poproduct = $this->Poproducts->newEmptyEntity();
        if ($this->request->is('post')) {
            $poproduct = $this->Poproducts->patchEntity($poproduct, $this->request->getData());
            if ($this->Poproducts->save($poproduct)) {
                $this->Flash->success(__('The poproduct has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The poproduct could not be saved. Please, try again.'));
        }
        $purchaseorder = $this->Poproducts->Purchaseorder->find('list', ['limit' => 200])->all();
        $products = $this->Poproducts->Products->find('list', ['limit' => 200])->all();
        $this->set(compact('poproduct', 'purchaseorder', 'products'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Poproduct id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $poproduct = $this->Poproducts->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $poproduct = $this->Poproducts->patchEntity($poproduct, $this->request->getData());
            if ($this->Poproducts->save($poproduct)) {
                $this->Flash->success(__('The poproduct has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The poproduct could not be saved. Please, try again.'));
        }
        $purchaseorder = $this->Poproducts->Purchaseorder->find('list', ['limit' => 200])->all();
        $products = $this->Poproducts->Products->find('list', ['limit' => 200])->all();
        $this->set(compact('poproduct', 'purchaseorder', 'products'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Poproduct id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $poproduct = $this->Poproducts->get($id);
        if ($this->Poproducts->delete($poproduct)) {
            $this->Flash->success(__('The poproduct has been deleted.'));
        } else {
            $this->Flash->error(__('The poproduct could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
