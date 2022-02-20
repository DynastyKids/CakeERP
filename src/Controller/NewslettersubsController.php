<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Newslettersubs Controller
 *
 * @property \App\Model\Table\NewslettersubsTable $Newslettersubs
 * @method \App\Model\Entity\Newslettersub[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class NewslettersubsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $newslettersubs = $this->paginate($this->Newslettersubs);

        $this->set(compact('newslettersubs'));
    }

    /**
     * View method
     *
     * @param string|null $id Newslettersub id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $newslettersub = $this->Newslettersubs->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('newslettersub'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $newslettersub = $this->Newslettersubs->newEmptyEntity();
        if ($this->request->is('post')) {
            $newslettersub = $this->Newslettersubs->patchEntity($newslettersub, $this->request->getData());
            if ($this->Newslettersubs->save($newslettersub)) {
                $this->Flash->success(__('The newslettersub has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The newslettersub could not be saved. Please, try again.'));
        }
        $this->set(compact('newslettersub'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Newslettersub id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $newslettersub = $this->Newslettersubs->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $newslettersub = $this->Newslettersubs->patchEntity($newslettersub, $this->request->getData());
            if ($this->Newslettersubs->save($newslettersub)) {
                $this->Flash->success(__('The newslettersub has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The newslettersub could not be saved. Please, try again.'));
        }
        $this->set(compact('newslettersub'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Newslettersub id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $newslettersub = $this->Newslettersubs->get($id);
        if ($this->Newslettersubs->delete($newslettersub)) {
            $this->Flash->success(__('The newslettersub has been deleted.'));
        } else {
            $this->Flash->error(__('The newslettersub could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
