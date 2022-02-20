<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Basecontent Controller
 *
 * @property \App\Model\Table\BasecontentTable $Basecontent
 * @method \App\Model\Entity\Basecontent[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BasecontentController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $basecontent = $this->paginate($this->Basecontent);

        $this->set(compact('basecontent'));
    }

    /**
     * View method
     *
     * @param string|null $id Basecontent id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $basecontent = $this->Basecontent->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('basecontent'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $basecontent = $this->Basecontent->newEmptyEntity();
        if ($this->request->is('post')) {
            $basecontent = $this->Basecontent->patchEntity($basecontent, $this->request->getData());
            if ($this->Basecontent->save($basecontent)) {
                $this->Flash->success(__('The basecontent has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The basecontent could not be saved. Please, try again.'));
        }
        $this->set(compact('basecontent'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Basecontent id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $basecontent = $this->Basecontent->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $basecontent = $this->Basecontent->patchEntity($basecontent, $this->request->getData());
            if ($this->Basecontent->save($basecontent)) {
                $this->Flash->success(__('The basecontent has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The basecontent could not be saved. Please, try again.'));
        }
        $this->set(compact('basecontent'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Basecontent id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $basecontent = $this->Basecontent->get($id);
        if ($this->Basecontent->delete($basecontent)) {
            $this->Flash->success(__('The basecontent has been deleted.'));
        } else {
            $this->Flash->error(__('The basecontent could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
