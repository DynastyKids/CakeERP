<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Soproducts Controller
 *
 * @property \App\Model\Table\SoproductsTable $Soproducts
 * @method \App\Model\Entity\Soproduct[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SoproductsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Salesorder', 'Products'],
        ];
        $soproducts = $this->paginate($this->Soproducts);

        $this->set(compact('soproducts'));
    }

    /**
     * View method
     *
     * @param string|null $id Soproduct id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $soproduct = $this->Soproducts->get($id, [
            'contain' => ['Salesorder', 'Products'],
        ]);

        $this->set(compact('soproduct'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $soproduct = $this->Soproducts->newEmptyEntity();
        if ($this->request->is('post')) {
            $soproduct = $this->Soproducts->patchEntity($soproduct, $this->request->getData());
            if ($this->Soproducts->save($soproduct)) {
                $this->Flash->success(__('The soproduct has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The soproduct could not be saved. Please, try again.'));
        }
        $salesorder = $this->Soproducts->Salesorder->find('list', ['limit' => 200])->all();
        $products = $this->Soproducts->Products->find('list', ['limit' => 200])->all();
        $this->set(compact('soproduct', 'salesorder', 'products'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Soproduct id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $soproduct = $this->Soproducts->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $soproduct = $this->Soproducts->patchEntity($soproduct, $this->request->getData());
            if ($this->Soproducts->save($soproduct)) {
                $this->Flash->success(__('The soproduct has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The soproduct could not be saved. Please, try again.'));
        }
        $salesorder = $this->Soproducts->Salesorder->find('list', ['limit' => 200])->all();
        $products = $this->Soproducts->Products->find('list', ['limit' => 200])->all();
        $this->set(compact('soproduct', 'salesorder', 'products'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Soproduct id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $soproduct = $this->Soproducts->get($id);
        if ($this->Soproducts->delete($soproduct)) {
            $this->Flash->success(__('The soproduct has been deleted.'));
        } else {
            $this->Flash->error(__('The soproduct could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
