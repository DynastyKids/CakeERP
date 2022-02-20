<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * StaffGroups Controller
 *
 * @property \App\Model\Table\StaffGroupsTable $StaffGroups
 * @method \App\Model\Entity\StaffGroup[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class StaffGroupsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $staffGroups = $this->paginate($this->StaffGroups);

        $this->set(compact('staffGroups'));
    }

    /**
     * View method
     *
     * @param string|null $id Staff Group id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $staffGroup = $this->StaffGroups->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('staffGroup'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $staffGroup = $this->StaffGroups->newEmptyEntity();
        if ($this->request->is('post')) {
            $staffGroup = $this->StaffGroups->patchEntity($staffGroup, $this->request->getData());
            if ($this->StaffGroups->save($staffGroup)) {
                $this->Flash->success(__('The staff group has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The staff group could not be saved. Please, try again.'));
        }
        $this->set(compact('staffGroup'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Staff Group id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $staffGroup = $this->StaffGroups->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $staffGroup = $this->StaffGroups->patchEntity($staffGroup, $this->request->getData());
            if ($this->StaffGroups->save($staffGroup)) {
                $this->Flash->success(__('The staff group has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The staff group could not be saved. Please, try again.'));
        }
        $this->set(compact('staffGroup'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Staff Group id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $staffGroup = $this->StaffGroups->get($id);
        if ($this->StaffGroups->delete($staffGroup)) {
            $this->Flash->success(__('The staff group has been deleted.'));
        } else {
            $this->Flash->error(__('The staff group could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
