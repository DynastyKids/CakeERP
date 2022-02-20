<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Crmorderstatus Controller
 *
 * @property \App\Model\Table\CrmorderstatusTable $Crmorderstatus
 * @method \App\Model\Entity\Crmorderstatus[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CrmorderstatusController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $crmorderstatus = $this->paginate($this->Crmorderstatus);

        $this->set(compact('crmorderstatus'));
    }

    /**
     * View method
     *
     * @param string|null $id Crmorderstatus id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $crmorderstatus = $this->Crmorderstatus->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('crmorderstatus'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $crmorderstatus = $this->Crmorderstatus->newEmptyEntity();
        if ($this->request->is('post')) {
            $crmorderstatus = $this->Crmorderstatus->patchEntity($crmorderstatus, $this->request->getData());
            if ($this->Crmorderstatus->save($crmorderstatus)) {
                $this->Flash->success(__('The crmorderstatus has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The crmorderstatus could not be saved. Please, try again.'));
        }
        $this->set(compact('crmorderstatus'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Crmorderstatus id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $crmorderstatus = $this->Crmorderstatus->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $crmorderstatus = $this->Crmorderstatus->patchEntity($crmorderstatus, $this->request->getData());
            if ($this->Crmorderstatus->save($crmorderstatus)) {
                $this->Flash->success(__('The crmorderstatus has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The crmorderstatus could not be saved. Please, try again.'));
        }
        $this->set(compact('crmorderstatus'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Crmorderstatus id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $crmorderstatus = $this->Crmorderstatus->get($id);
        if ($this->Crmorderstatus->delete($crmorderstatus)) {
            $this->Flash->success(__('The crmorderstatus has been deleted.'));
        } else {
            $this->Flash->error(__('The crmorderstatus could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
