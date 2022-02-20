<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Ordercomments Controller
 *
 * @property \App\Model\Table\OrdercommentsTable $Ordercomments
 * @method \App\Model\Entity\Ordercomment[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OrdercommentsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Purchaseorder', 'Salesorder'],
        ];
        $ordercomments = $this->paginate($this->Ordercomments);

        $this->set(compact('ordercomments'));
    }

    /**
     * View method
     *
     * @param string|null $id Ordercomment id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ordercomment = $this->Ordercomments->get($id, [
            'contain' => ['Purchaseorder', 'Salesorder'],
        ]);

        $this->set(compact('ordercomment'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ordercomment = $this->Ordercomments->newEmptyEntity();
        if ($this->request->is('post')) {
            $ordercomment = $this->Ordercomments->patchEntity($ordercomment, $this->request->getData());
            if ($this->Ordercomments->save($ordercomment)) {
                $this->Flash->success(__('The ordercomment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ordercomment could not be saved. Please, try again.'));
        }
        $purchaseorder = $this->Ordercomments->Purchaseorder->find('list', ['limit' => 200])->all();
        $salesorder = $this->Ordercomments->Salesorder->find('list', ['limit' => 200])->all();
        $this->set(compact('ordercomment', 'purchaseorder', 'salesorder'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ordercomment id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ordercomment = $this->Ordercomments->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ordercomment = $this->Ordercomments->patchEntity($ordercomment, $this->request->getData());
            if ($this->Ordercomments->save($ordercomment)) {
                $this->Flash->success(__('The ordercomment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ordercomment could not be saved. Please, try again.'));
        }
        $purchaseorder = $this->Ordercomments->Purchaseorder->find('list', ['limit' => 200])->all();
        $salesorder = $this->Ordercomments->Salesorder->find('list', ['limit' => 200])->all();
        $this->set(compact('ordercomment', 'purchaseorder', 'salesorder'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ordercomment id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ordercomment = $this->Ordercomments->get($id);
        if ($this->Ordercomments->delete($ordercomment)) {
            $this->Flash->success(__('The ordercomment has been deleted.'));
        } else {
            $this->Flash->error(__('The ordercomment could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
