<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ProductsHasProductcategory Controller
 *
 * @property \App\Model\Table\ProductsHasProductcategoryTable $ProductsHasProductcategory
 * @method \App\Model\Entity\ProductsHasProductcategory[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProductsHasProductcategoryController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Products', 'Productcategory'],
        ];
        $productsHasProductcategory = $this->paginate($this->ProductsHasProductcategory);

        $this->set(compact('productsHasProductcategory'));
    }

    /**
     * View method
     *
     * @param string|null $id Products Has Productcategory id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $productsHasProductcategory = $this->ProductsHasProductcategory->get($id, [
            'contain' => ['Products', 'Productcategory'],
        ]);

        $this->set(compact('productsHasProductcategory'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $productsHasProductcategory = $this->ProductsHasProductcategory->newEmptyEntity();
        if ($this->request->is('post')) {
            $productsHasProductcategory = $this->ProductsHasProductcategory->patchEntity($productsHasProductcategory, $this->request->getData());
            if ($this->ProductsHasProductcategory->save($productsHasProductcategory)) {
                $this->Flash->success(__('The products has productcategory has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The products has productcategory could not be saved. Please, try again.'));
        }
        $products = $this->ProductsHasProductcategory->Products->find('list', ['limit' => 200])->all();
        $productcategory = $this->ProductsHasProductcategory->Productcategory->find('list', ['limit' => 200])->all();
        $this->set(compact('productsHasProductcategory', 'products', 'productcategory'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Products Has Productcategory id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $productsHasProductcategory = $this->ProductsHasProductcategory->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $productsHasProductcategory = $this->ProductsHasProductcategory->patchEntity($productsHasProductcategory, $this->request->getData());
            if ($this->ProductsHasProductcategory->save($productsHasProductcategory)) {
                $this->Flash->success(__('The products has productcategory has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The products has productcategory could not be saved. Please, try again.'));
        }
        $products = $this->ProductsHasProductcategory->Products->find('list', ['limit' => 200])->all();
        $productcategory = $this->ProductsHasProductcategory->Productcategory->find('list', ['limit' => 200])->all();
        $this->set(compact('productsHasProductcategory', 'products', 'productcategory'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Products Has Productcategory id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $productsHasProductcategory = $this->ProductsHasProductcategory->get($id);
        if ($this->ProductsHasProductcategory->delete($productsHasProductcategory)) {
            $this->Flash->success(__('The products has productcategory has been deleted.'));
        } else {
            $this->Flash->error(__('The products has productcategory could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
