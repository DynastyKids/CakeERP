<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Accountmessages Controller
 *
 * @property \App\Model\Table\AccountmessagesTable $Accountmessages
 * @method \App\Model\Entity\Accountmessage[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AccountmessagesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $accountmessages = $this->paginate($this->Accountmessages);

        $this->set(compact('accountmessages'));
    }

    /**
     * View method
     *
     * @param string|null $id Accountmessage id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $accountmessage = $this->Accountmessages->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('accountmessage'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $accountmessage = $this->Accountmessages->newEmptyEntity();
        if ($this->request->is('post')) {
            $accountmessage = $this->Accountmessages->patchEntity($accountmessage, $this->request->getData());
            if ($this->Accountmessages->save($accountmessage)) {
                $this->Flash->success(__('The accountmessage has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The accountmessage could not be saved. Please, try again.'));
        }
        $this->set(compact('accountmessage'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Accountmessage id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $accountmessage = $this->Accountmessages->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $accountmessage = $this->Accountmessages->patchEntity($accountmessage, $this->request->getData());
            if ($this->Accountmessages->save($accountmessage)) {
                $this->Flash->success(__('The accountmessage has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The accountmessage could not be saved. Please, try again.'));
        }
        $this->set(compact('accountmessage'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Accountmessage id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $accountmessage = $this->Accountmessages->get($id);
        if ($this->Accountmessages->delete($accountmessage)) {
            $this->Flash->success(__('The accountmessage has been deleted.'));
        } else {
            $this->Flash->error(__('The accountmessage could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
