<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Salesorder Controller
 *
 * @property \App\Model\Table\SalesorderTable $Salesorder
 * @method \App\Model\Entity\Salesorder[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SalesorderController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Customers', 'Coupons', 'SoStaffs', 'Sostatus', 'Priorityref'],
        ];
        $salesorder = $this->paginate($this->Salesorder);

        $this->set(compact('salesorder'));
    }

    /**
     * View method
     *
     * @param string|null $id Salesorder id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $salesorder = $this->Salesorder->get($id, [
            'contain' => ['Customers', 'Coupons', 'SoStaffs', 'Sostatus', 'Priorityref'],
        ]);

        $this->set(compact('salesorder'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $salesorder = $this->Salesorder->newEmptyEntity();
        if ($this->request->is('post')) {
            $salesorder = $this->Salesorder->patchEntity($salesorder, $this->request->getData());
            if ($this->Salesorder->save($salesorder)) {
                $this->Flash->success(__('The salesorder has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The salesorder could not be saved. Please, try again.'));
        }
        $customers = $this->Salesorder->Customers->find('list', ['limit' => 200])->all();
        $coupons = $this->Salesorder->Coupons->find('list', ['limit' => 200])->all();
        $soStaffs = $this->Salesorder->SoStaffs->find('list', ['limit' => 200])->all();
        $sostatus = $this->Salesorder->Sostatus->find('list', ['limit' => 200])->all();
        $priorityref = $this->Salesorder->Priorityref->find('list', ['limit' => 200])->all();
        $this->set(compact('salesorder', 'customers', 'coupons', 'soStaffs', 'sostatus', 'priorityref'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Salesorder id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $salesorder = $this->Salesorder->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $salesorder = $this->Salesorder->patchEntity($salesorder, $this->request->getData());
            if ($this->Salesorder->save($salesorder)) {
                $this->Flash->success(__('The salesorder has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The salesorder could not be saved. Please, try again.'));
        }
        $customers = $this->Salesorder->Customers->find('list', ['limit' => 200])->all();
        $coupons = $this->Salesorder->Coupons->find('list', ['limit' => 200])->all();
        $soStaffs = $this->Salesorder->SoStaffs->find('list', ['limit' => 200])->all();
        $sostatus = $this->Salesorder->Sostatus->find('list', ['limit' => 200])->all();
        $priorityref = $this->Salesorder->Priorityref->find('list', ['limit' => 200])->all();
        $this->set(compact('salesorder', 'customers', 'coupons', 'soStaffs', 'sostatus', 'priorityref'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Salesorder id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $salesorder = $this->Salesorder->get($id);
        if ($this->Salesorder->delete($salesorder)) {
            $this->Flash->success(__('The salesorder has been deleted.'));
        } else {
            $this->Flash->error(__('The salesorder could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
