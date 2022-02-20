<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Sostatus Controller
 *
 * @property \App\Model\Table\SostatusTable $Sostatus
 * @method \App\Model\Entity\Sostatus[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SostatusController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $sostatus = $this->paginate($this->Sostatus);

        $this->set(compact('sostatus'));
    }

    /**
     * View method
     *
     * @param string|null $id Sostatus id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sostatus = $this->Sostatus->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('sostatus'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sostatus = $this->Sostatus->newEmptyEntity();
        if ($this->request->is('post')) {
            $sostatus = $this->Sostatus->patchEntity($sostatus, $this->request->getData());
            if ($this->Sostatus->save($sostatus)) {
                $this->Flash->success(__('The sostatus has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sostatus could not be saved. Please, try again.'));
        }
        $this->set(compact('sostatus'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sostatus id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sostatus = $this->Sostatus->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sostatus = $this->Sostatus->patchEntity($sostatus, $this->request->getData());
            if ($this->Sostatus->save($sostatus)) {
                $this->Flash->success(__('The sostatus has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sostatus could not be saved. Please, try again.'));
        }
        $this->set(compact('sostatus'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sostatus id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sostatus = $this->Sostatus->get($id);
        if ($this->Sostatus->delete($sostatus)) {
            $this->Flash->success(__('The sostatus has been deleted.'));
        } else {
            $this->Flash->error(__('The sostatus could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
