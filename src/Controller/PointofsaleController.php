<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Pointofsale Controller
 *
 * @property \App\Model\Table\PointofsaleTable $Pointofsale
 * @method \App\Model\Entity\Pointofsale[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PointofsaleController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $pointofsale = $this->paginate($this->Pointofsale);

        $this->set(compact('pointofsale'));
    }

    /**
     * View method
     *
     * @param string|null $id Pointofsale id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pointofsale = $this->Pointofsale->get($id, [
            'contain' => ['PosProducts'],
        ]);

        $this->set(compact('pointofsale'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pointofsale = $this->Pointofsale->newEmptyEntity();
        if ($this->request->is('post')) {
            $pointofsale = $this->Pointofsale->patchEntity($pointofsale, $this->request->getData());
            if ($this->Pointofsale->save($pointofsale)) {
                $this->Flash->success(__('The pointofsale has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pointofsale could not be saved. Please, try again.'));
        }
        $this->set(compact('pointofsale'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Pointofsale id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pointofsale = $this->Pointofsale->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pointofsale = $this->Pointofsale->patchEntity($pointofsale, $this->request->getData());
            if ($this->Pointofsale->save($pointofsale)) {
                $this->Flash->success(__('The pointofsale has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pointofsale could not be saved. Please, try again.'));
        }
        $this->set(compact('pointofsale'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Pointofsale id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pointofsale = $this->Pointofsale->get($id);
        if ($this->Pointofsale->delete($pointofsale)) {
            $this->Flash->success(__('The pointofsale has been deleted.'));
        } else {
            $this->Flash->error(__('The pointofsale could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
