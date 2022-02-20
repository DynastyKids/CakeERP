<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Calendarevents Controller
 *
 * @property \App\Model\Table\CalendareventsTable $Calendarevents
 * @method \App\Model\Entity\Calendarevent[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CalendareventsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Staffs'],
        ];
        $calendarevents = $this->paginate($this->Calendarevents);

        $this->set(compact('calendarevents'));
    }

    /**
     * View method
     *
     * @param string|null $id Calendarevent id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $calendarevent = $this->Calendarevents->get($id, [
            'contain' => ['Staffs'],
        ]);

        $this->set(compact('calendarevent'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $calendarevent = $this->Calendarevents->newEmptyEntity();
        if ($this->request->is('post')) {
            $calendarevent = $this->Calendarevents->patchEntity($calendarevent, $this->request->getData());
            if ($this->Calendarevents->save($calendarevent)) {
                $this->Flash->success(__('The calendarevent has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The calendarevent could not be saved. Please, try again.'));
        }
        $staffs = $this->Calendarevents->Staffs->find('list', ['limit' => 200])->all();
        $this->set(compact('calendarevent', 'staffs'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Calendarevent id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $calendarevent = $this->Calendarevents->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $calendarevent = $this->Calendarevents->patchEntity($calendarevent, $this->request->getData());
            if ($this->Calendarevents->save($calendarevent)) {
                $this->Flash->success(__('The calendarevent has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The calendarevent could not be saved. Please, try again.'));
        }
        $staffs = $this->Calendarevents->Staffs->find('list', ['limit' => 200])->all();
        $this->set(compact('calendarevent', 'staffs'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Calendarevent id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $calendarevent = $this->Calendarevents->get($id);
        if ($this->Calendarevents->delete($calendarevent)) {
            $this->Flash->success(__('The calendarevent has been deleted.'));
        } else {
            $this->Flash->error(__('The calendarevent could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
