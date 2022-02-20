<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Priorityref Controller
 *
 * @property \App\Model\Table\PriorityrefTable $Priorityref
 * @method \App\Model\Entity\Priorityref[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PriorityrefController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $priorityref = $this->paginate($this->Priorityref);

        $this->set(compact('priorityref'));
    }

    /**
     * View method
     *
     * @param string|null $id Priorityref id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $priorityref = $this->Priorityref->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('priorityref'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $priorityref = $this->Priorityref->newEmptyEntity();
        if ($this->request->is('post')) {
            $priorityref = $this->Priorityref->patchEntity($priorityref, $this->request->getData());
            if ($this->Priorityref->save($priorityref)) {
                $this->Flash->success(__('The priorityref has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The priorityref could not be saved. Please, try again.'));
        }
        $this->set(compact('priorityref'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Priorityref id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $priorityref = $this->Priorityref->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $priorityref = $this->Priorityref->patchEntity($priorityref, $this->request->getData());
            if ($this->Priorityref->save($priorityref)) {
                $this->Flash->success(__('The priorityref has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The priorityref could not be saved. Please, try again.'));
        }
        $this->set(compact('priorityref'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Priorityref id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $priorityref = $this->Priorityref->get($id);
        if ($this->Priorityref->delete($priorityref)) {
            $this->Flash->success(__('The priorityref has been deleted.'));
        } else {
            $this->Flash->error(__('The priorityref could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
