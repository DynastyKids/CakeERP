<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Soinvoice Controller
 *
 * @property \App\Model\Table\SoinvoiceTable $Soinvoice
 * @method \App\Model\Entity\Soinvoice[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SoinvoiceController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Salesorder'],
        ];
        $soinvoice = $this->paginate($this->Soinvoice);

        $this->set(compact('soinvoice'));
    }

    /**
     * View method
     *
     * @param string|null $id Soinvoice id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $soinvoice = $this->Soinvoice->get($id, [
            'contain' => ['Salesorder'],
        ]);

        $this->set(compact('soinvoice'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $soinvoice = $this->Soinvoice->newEmptyEntity();
        if ($this->request->is('post')) {
            $soinvoice = $this->Soinvoice->patchEntity($soinvoice, $this->request->getData());
            if ($this->Soinvoice->save($soinvoice)) {
                $this->Flash->success(__('The soinvoice has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The soinvoice could not be saved. Please, try again.'));
        }
        $salesorder = $this->Soinvoice->Salesorder->find('list', ['limit' => 200])->all();
        $this->set(compact('soinvoice', 'salesorder'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Soinvoice id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $soinvoice = $this->Soinvoice->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $soinvoice = $this->Soinvoice->patchEntity($soinvoice, $this->request->getData());
            if ($this->Soinvoice->save($soinvoice)) {
                $this->Flash->success(__('The soinvoice has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The soinvoice could not be saved. Please, try again.'));
        }
        $salesorder = $this->Soinvoice->Salesorder->find('list', ['limit' => 200])->all();
        $this->set(compact('soinvoice', 'salesorder'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Soinvoice id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $soinvoice = $this->Soinvoice->get($id);
        if ($this->Soinvoice->delete($soinvoice)) {
            $this->Flash->success(__('The soinvoice has been deleted.'));
        } else {
            $this->Flash->error(__('The soinvoice could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
