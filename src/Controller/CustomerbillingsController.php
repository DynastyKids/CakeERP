<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Customerbillings Controller
 *
 * @property \App\Model\Table\CustomerbillingsTable $Customerbillings
 * @method \App\Model\Entity\Customerbilling[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CustomerbillingsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Customers'],
        ];
        $customerbillings = $this->paginate($this->Customerbillings);

        $this->set(compact('customerbillings'));
    }

    /**
     * View method
     *
     * @param string|null $id Customerbilling id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $customerbilling = $this->Customerbillings->get($id, [
            'contain' => ['Customers'],
        ]);

        $this->set(compact('customerbilling'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $customerbilling = $this->Customerbillings->newEmptyEntity();
        if ($this->request->is('post')) {
            $customerbilling = $this->Customerbillings->patchEntity($customerbilling, $this->request->getData());
            if ($this->Customerbillings->save($customerbilling)) {
                $this->Flash->success(__('The customerbilling has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The customerbilling could not be saved. Please, try again.'));
        }
        $customers = $this->Customerbillings->Customers->find('list', ['limit' => 200])->all();
        $this->set(compact('customerbilling', 'customers'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Customerbilling id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $customerbilling = $this->Customerbillings->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $customerbilling = $this->Customerbillings->patchEntity($customerbilling, $this->request->getData());
            if ($this->Customerbillings->save($customerbilling)) {
                $this->Flash->success(__('The customerbilling has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The customerbilling could not be saved. Please, try again.'));
        }
        $customers = $this->Customerbillings->Customers->find('list', ['limit' => 200])->all();
        $this->set(compact('customerbilling', 'customers'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Customerbilling id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $customerbilling = $this->Customerbillings->get($id);
        if ($this->Customerbillings->delete($customerbilling)) {
            $this->Flash->success(__('The customerbilling has been deleted.'));
        } else {
            $this->Flash->error(__('The customerbilling could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
