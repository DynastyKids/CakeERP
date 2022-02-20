<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * BranchesHasProducts Controller
 *
 * @property \App\Model\Table\BranchesHasProductsTable $BranchesHasProducts
 * @method \App\Model\Entity\BranchesHasProduct[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BranchesHasProductsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Branches', 'Products'],
        ];
        $branchesHasProducts = $this->paginate($this->BranchesHasProducts);

        $this->set(compact('branchesHasProducts'));
    }

    /**
     * View method
     *
     * @param string|null $id Branches Has Product id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $branchesHasProduct = $this->BranchesHasProducts->get($id, [
            'contain' => ['Branches', 'Products'],
        ]);

        $this->set(compact('branchesHasProduct'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $branchesHasProduct = $this->BranchesHasProducts->newEmptyEntity();
        if ($this->request->is('post')) {
            $branchesHasProduct = $this->BranchesHasProducts->patchEntity($branchesHasProduct, $this->request->getData());
            if ($this->BranchesHasProducts->save($branchesHasProduct)) {
                $this->Flash->success(__('The branches has product has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The branches has product could not be saved. Please, try again.'));
        }
        $branches = $this->BranchesHasProducts->Branches->find('list', ['limit' => 200])->all();
        $products = $this->BranchesHasProducts->Products->find('list', ['limit' => 200])->all();
        $this->set(compact('branchesHasProduct', 'branches', 'products'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Branches Has Product id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $branchesHasProduct = $this->BranchesHasProducts->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $branchesHasProduct = $this->BranchesHasProducts->patchEntity($branchesHasProduct, $this->request->getData());
            if ($this->BranchesHasProducts->save($branchesHasProduct)) {
                $this->Flash->success(__('The branches has product has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The branches has product could not be saved. Please, try again.'));
        }
        $branches = $this->BranchesHasProducts->Branches->find('list', ['limit' => 200])->all();
        $products = $this->BranchesHasProducts->Products->find('list', ['limit' => 200])->all();
        $this->set(compact('branchesHasProduct', 'branches', 'products'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Branches Has Product id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $branchesHasProduct = $this->BranchesHasProducts->get($id);
        if ($this->BranchesHasProducts->delete($branchesHasProduct)) {
            $this->Flash->success(__('The branches has product has been deleted.'));
        } else {
            $this->Flash->error(__('The branches has product could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
