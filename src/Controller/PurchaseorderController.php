<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Purchaseorder Controller
 *
 * @property \App\Model\Table\PurchaseorderTable $Purchaseorder
 * @method \App\Model\Entity\Purchaseorder[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PurchaseorderController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Priorityref'],
        ];
        $purchaseorder = $this->paginate($this->Purchaseorder);

        $this->set(compact('purchaseorder'));
    }

    /**
     * View method
     *
     * @param string|null $id Purchaseorder id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $purchaseorder = $this->Purchaseorder->get($id, [
            'contain' => ['Priorityref'],
        ]);

        $this->set(compact('purchaseorder'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $purchaseorder = $this->Purchaseorder->newEmptyEntity();
        if ($this->request->is('post')) {
            $purchaseorder = $this->Purchaseorder->patchEntity($purchaseorder, $this->request->getData());
            if ($this->Purchaseorder->save($purchaseorder)) {
                $this->Flash->success(__('The purchaseorder has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The purchaseorder could not be saved. Please, try again.'));
        }
        $priorityref = $this->Purchaseorder->Priorityref->find('list', ['limit' => 200])->all();
        $this->set(compact('purchaseorder', 'priorityref'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Purchaseorder id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $purchaseorder = $this->Purchaseorder->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $purchaseorder = $this->Purchaseorder->patchEntity($purchaseorder, $this->request->getData());
            if ($this->Purchaseorder->save($purchaseorder)) {
                $this->Flash->success(__('The purchaseorder has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The purchaseorder could not be saved. Please, try again.'));
        }
        $priorityref = $this->Purchaseorder->Priorityref->find('list', ['limit' => 200])->all();
        $this->set(compact('purchaseorder', 'priorityref'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Purchaseorder id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $purchaseorder = $this->Purchaseorder->get($id);
        if ($this->Purchaseorder->delete($purchaseorder)) {
            $this->Flash->success(__('The purchaseorder has been deleted.'));
        } else {
            $this->Flash->error(__('The purchaseorder could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
