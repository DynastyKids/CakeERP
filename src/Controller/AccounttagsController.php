<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Accounttags Controller
 *
 * @property \App\Model\Table\AccounttagsTable $Accounttags
 * @method \App\Model\Entity\Accounttag[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AccounttagsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $accounttags = $this->paginate($this->Accounttags);

        $this->set(compact('accounttags'));
    }

    /**
     * View method
     *
     * @param string|null $id Accounttag id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $accounttag = $this->Accounttags->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('accounttag'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $accounttag = $this->Accounttags->newEmptyEntity();
        if ($this->request->is('post')) {
            $accounttag = $this->Accounttags->patchEntity($accounttag, $this->request->getData());
            if ($this->Accounttags->save($accounttag)) {
                $this->Flash->success(__('The accounttag has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The accounttag could not be saved. Please, try again.'));
        }
        $this->set(compact('accounttag'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Accounttag id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $accounttag = $this->Accounttags->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $accounttag = $this->Accounttags->patchEntity($accounttag, $this->request->getData());
            if ($this->Accounttags->save($accounttag)) {
                $this->Flash->success(__('The accounttag has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The accounttag could not be saved. Please, try again.'));
        }
        $this->set(compact('accounttag'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Accounttag id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $accounttag = $this->Accounttags->get($id);
        if ($this->Accounttags->delete($accounttag)) {
            $this->Flash->success(__('The accounttag has been deleted.'));
        } else {
            $this->Flash->error(__('The accounttag could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
