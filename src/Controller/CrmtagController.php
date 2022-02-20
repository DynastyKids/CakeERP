<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Crmtag Controller
 *
 * @property \App\Model\Table\CrmtagTable $Crmtag
 * @method \App\Model\Entity\Crmtag[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CrmtagController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $crmtag = $this->paginate($this->Crmtag);

        $this->set(compact('crmtag'));
    }

    /**
     * View method
     *
     * @param string|null $id Crmtag id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $crmtag = $this->Crmtag->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('crmtag'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $crmtag = $this->Crmtag->newEmptyEntity();
        if ($this->request->is('post')) {
            $crmtag = $this->Crmtag->patchEntity($crmtag, $this->request->getData());
            if ($this->Crmtag->save($crmtag)) {
                $this->Flash->success(__('The crmtag has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The crmtag could not be saved. Please, try again.'));
        }
        $this->set(compact('crmtag'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Crmtag id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $crmtag = $this->Crmtag->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $crmtag = $this->Crmtag->patchEntity($crmtag, $this->request->getData());
            if ($this->Crmtag->save($crmtag)) {
                $this->Flash->success(__('The crmtag has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The crmtag could not be saved. Please, try again.'));
        }
        $this->set(compact('crmtag'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Crmtag id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $crmtag = $this->Crmtag->get($id);
        if ($this->Crmtag->delete($crmtag)) {
            $this->Flash->success(__('The crmtag has been deleted.'));
        } else {
            $this->Flash->error(__('The crmtag could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
