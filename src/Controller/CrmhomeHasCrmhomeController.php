<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * CrmhomeHasCrmhome Controller
 *
 * @property \App\Model\Table\CrmhomeHasCrmhomeTable $CrmhomeHasCrmhome
 * @method \App\Model\Entity\CrmhomeHasCrmhome[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CrmhomeHasCrmhomeController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Crmhome'],
        ];
        $crmhomeHasCrmhome = $this->paginate($this->CrmhomeHasCrmhome);

        $this->set(compact('crmhomeHasCrmhome'));
    }

    /**
     * View method
     *
     * @param string|null $id Crmhome Has Crmhome id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $crmhomeHasCrmhome = $this->CrmhomeHasCrmhome->get($id, [
            'contain' => ['Crmhome'],
        ]);

        $this->set(compact('crmhomeHasCrmhome'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $crmhomeHasCrmhome = $this->CrmhomeHasCrmhome->newEmptyEntity();
        if ($this->request->is('post')) {
            $crmhomeHasCrmhome = $this->CrmhomeHasCrmhome->patchEntity($crmhomeHasCrmhome, $this->request->getData());
            if ($this->CrmhomeHasCrmhome->save($crmhomeHasCrmhome)) {
                $this->Flash->success(__('The crmhome has crmhome has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The crmhome has crmhome could not be saved. Please, try again.'));
        }
        $crmhome = $this->CrmhomeHasCrmhome->Crmhome->find('list', ['limit' => 200])->all();
        $this->set(compact('crmhomeHasCrmhome', 'crmhome'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Crmhome Has Crmhome id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $crmhomeHasCrmhome = $this->CrmhomeHasCrmhome->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $crmhomeHasCrmhome = $this->CrmhomeHasCrmhome->patchEntity($crmhomeHasCrmhome, $this->request->getData());
            if ($this->CrmhomeHasCrmhome->save($crmhomeHasCrmhome)) {
                $this->Flash->success(__('The crmhome has crmhome has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The crmhome has crmhome could not be saved. Please, try again.'));
        }
        $crmhome = $this->CrmhomeHasCrmhome->Crmhome->find('list', ['limit' => 200])->all();
        $this->set(compact('crmhomeHasCrmhome', 'crmhome'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Crmhome Has Crmhome id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $crmhomeHasCrmhome = $this->CrmhomeHasCrmhome->get($id);
        if ($this->CrmhomeHasCrmhome->delete($crmhomeHasCrmhome)) {
            $this->Flash->success(__('The crmhome has crmhome has been deleted.'));
        } else {
            $this->Flash->error(__('The crmhome has crmhome could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
