<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Crmorders Controller
 *
 * @property \App\Model\Table\CrmordersTable $Crmorders
 * @method \App\Model\Entity\Crmorder[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CrmordersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Crmhome'],
        ];
        $crmorders = $this->paginate($this->Crmorders);

        $this->set(compact('crmorders'));
    }

    /**
     * View method
     *
     * @param string|null $id Crmorder id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $crmorder = $this->Crmorders->get($id, [
            'contain' => ['Crmhome'],
        ]);

        $this->set(compact('crmorder'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $crmorder = $this->Crmorders->newEmptyEntity();
        if ($this->request->is('post')) {
            $crmorder = $this->Crmorders->patchEntity($crmorder, $this->request->getData());
            if ($this->Crmorders->save($crmorder)) {
                $this->Flash->success(__('The crmorder has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The crmorder could not be saved. Please, try again.'));
        }
        $crmhome = $this->Crmorders->Crmhome->find('list', ['limit' => 200])->all();
        $this->set(compact('crmorder', 'crmhome'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Crmorder id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $crmorder = $this->Crmorders->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $crmorder = $this->Crmorders->patchEntity($crmorder, $this->request->getData());
            if ($this->Crmorders->save($crmorder)) {
                $this->Flash->success(__('The crmorder has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The crmorder could not be saved. Please, try again.'));
        }
        $crmhome = $this->Crmorders->Crmhome->find('list', ['limit' => 200])->all();
        $this->set(compact('crmorder', 'crmhome'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Crmorder id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $crmorder = $this->Crmorders->get($id);
        if ($this->Crmorders->delete($crmorder)) {
            $this->Flash->success(__('The crmorder has been deleted.'));
        } else {
            $this->Flash->error(__('The crmorder could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
