<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Socomments Controller
 *
 * @property \App\Model\Table\SocommentsTable $Socomments
 * @method \App\Model\Entity\Socomment[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SocommentsController extends AppController
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
        $socomments = $this->paginate($this->Socomments);

        $this->set(compact('socomments'));
    }

    /**
     * View method
     *
     * @param string|null $id Socomment id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $socomment = $this->Socomments->get($id, [
            'contain' => ['Salesorder'],
        ]);

        $this->set(compact('socomment'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $socomment = $this->Socomments->newEmptyEntity();
        if ($this->request->is('post')) {
            $socomment = $this->Socomments->patchEntity($socomment, $this->request->getData());
            if ($this->Socomments->save($socomment)) {
                $this->Flash->success(__('The socomment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The socomment could not be saved. Please, try again.'));
        }
        $salesorder = $this->Socomments->Salesorder->find('list', ['limit' => 200])->all();
        $this->set(compact('socomment', 'salesorder'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Socomment id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $socomment = $this->Socomments->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $socomment = $this->Socomments->patchEntity($socomment, $this->request->getData());
            if ($this->Socomments->save($socomment)) {
                $this->Flash->success(__('The socomment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The socomment could not be saved. Please, try again.'));
        }
        $salesorder = $this->Socomments->Salesorder->find('list', ['limit' => 200])->all();
        $this->set(compact('socomment', 'salesorder'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Socomment id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $socomment = $this->Socomments->get($id);
        if ($this->Socomments->delete($socomment)) {
            $this->Flash->success(__('The socomment has been deleted.'));
        } else {
            $this->Flash->error(__('The socomment could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
