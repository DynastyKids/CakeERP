<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * CrmhomeHasCrmtag Controller
 *
 * @property \App\Model\Table\CrmhomeHasCrmtagTable $CrmhomeHasCrmtag
 * @method \App\Model\Entity\CrmhomeHasCrmtag[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CrmhomeHasCrmtagController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Crmhome', 'Crmtag'],
        ];
        $crmhomeHasCrmtag = $this->paginate($this->CrmhomeHasCrmtag);

        $this->set(compact('crmhomeHasCrmtag'));
    }

    /**
     * View method
     *
     * @param string|null $id Crmhome Has Crmtag id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $crmhomeHasCrmtag = $this->CrmhomeHasCrmtag->get($id, [
            'contain' => ['Crmhome', 'Crmtag'],
        ]);

        $this->set(compact('crmhomeHasCrmtag'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $crmhomeHasCrmtag = $this->CrmhomeHasCrmtag->newEmptyEntity();
        if ($this->request->is('post')) {
            $crmhomeHasCrmtag = $this->CrmhomeHasCrmtag->patchEntity($crmhomeHasCrmtag, $this->request->getData());
            if ($this->CrmhomeHasCrmtag->save($crmhomeHasCrmtag)) {
                $this->Flash->success(__('The crmhome has crmtag has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The crmhome has crmtag could not be saved. Please, try again.'));
        }
        $crmhome = $this->CrmhomeHasCrmtag->Crmhome->find('list', ['limit' => 200])->all();
        $crmtag = $this->CrmhomeHasCrmtag->Crmtag->find('list', ['limit' => 200])->all();
        $this->set(compact('crmhomeHasCrmtag', 'crmhome', 'crmtag'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Crmhome Has Crmtag id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $crmhomeHasCrmtag = $this->CrmhomeHasCrmtag->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $crmhomeHasCrmtag = $this->CrmhomeHasCrmtag->patchEntity($crmhomeHasCrmtag, $this->request->getData());
            if ($this->CrmhomeHasCrmtag->save($crmhomeHasCrmtag)) {
                $this->Flash->success(__('The crmhome has crmtag has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The crmhome has crmtag could not be saved. Please, try again.'));
        }
        $crmhome = $this->CrmhomeHasCrmtag->Crmhome->find('list', ['limit' => 200])->all();
        $crmtag = $this->CrmhomeHasCrmtag->Crmtag->find('list', ['limit' => 200])->all();
        $this->set(compact('crmhomeHasCrmtag', 'crmhome', 'crmtag'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Crmhome Has Crmtag id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $crmhomeHasCrmtag = $this->CrmhomeHasCrmtag->get($id);
        if ($this->CrmhomeHasCrmtag->delete($crmhomeHasCrmtag)) {
            $this->Flash->success(__('The crmhome has crmtag has been deleted.'));
        } else {
            $this->Flash->error(__('The crmhome has crmtag could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
