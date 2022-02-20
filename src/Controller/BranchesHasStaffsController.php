<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * BranchesHasStaffs Controller
 *
 * @property \App\Model\Table\BranchesHasStaffsTable $BranchesHasStaffs
 * @method \App\Model\Entity\BranchesHasStaff[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BranchesHasStaffsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Branches', 'Staffs'],
        ];
        $branchesHasStaffs = $this->paginate($this->BranchesHasStaffs);

        $this->set(compact('branchesHasStaffs'));
    }

    /**
     * View method
     *
     * @param string|null $id Branches Has Staff id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $branchesHasStaff = $this->BranchesHasStaffs->get($id, [
            'contain' => ['Branches', 'Staffs'],
        ]);

        $this->set(compact('branchesHasStaff'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $branchesHasStaff = $this->BranchesHasStaffs->newEmptyEntity();
        if ($this->request->is('post')) {
            $branchesHasStaff = $this->BranchesHasStaffs->patchEntity($branchesHasStaff, $this->request->getData());
            if ($this->BranchesHasStaffs->save($branchesHasStaff)) {
                $this->Flash->success(__('The branches has staff has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The branches has staff could not be saved. Please, try again.'));
        }
        $branches = $this->BranchesHasStaffs->Branches->find('list', ['limit' => 200])->all();
        $staffs = $this->BranchesHasStaffs->Staffs->find('list', ['limit' => 200])->all();
        $this->set(compact('branchesHasStaff', 'branches', 'staffs'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Branches Has Staff id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $branchesHasStaff = $this->BranchesHasStaffs->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $branchesHasStaff = $this->BranchesHasStaffs->patchEntity($branchesHasStaff, $this->request->getData());
            if ($this->BranchesHasStaffs->save($branchesHasStaff)) {
                $this->Flash->success(__('The branches has staff has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The branches has staff could not be saved. Please, try again.'));
        }
        $branches = $this->BranchesHasStaffs->Branches->find('list', ['limit' => 200])->all();
        $staffs = $this->BranchesHasStaffs->Staffs->find('list', ['limit' => 200])->all();
        $this->set(compact('branchesHasStaff', 'branches', 'staffs'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Branches Has Staff id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $branchesHasStaff = $this->BranchesHasStaffs->get($id);
        if ($this->BranchesHasStaffs->delete($branchesHasStaff)) {
            $this->Flash->success(__('The branches has staff has been deleted.'));
        } else {
            $this->Flash->error(__('The branches has staff could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
