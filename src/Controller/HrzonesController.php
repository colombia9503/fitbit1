<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Hrzones Controller
 *
 * @property \App\Model\Table\HrzonesTable $Hrzones
 */
class HrzonesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $hrzones = $this->paginate($this->Hrzones);

        $this->set(compact('hrzones'));
        $this->set('_serialize', ['hrzones']);
    }

    /**
     * View method
     *
     * @param string|null $id Hrzone id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $hrzone = $this->Hrzones->get($id, [
            'contain' => []
        ]);

        $this->set('hrzone', $hrzone);
        $this->set('_serialize', ['hrzone']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $hrzone = $this->Hrzones->newEntity();
        if ($this->request->is('post')) {
            $hrzone = $this->Hrzones->patchEntity($hrzone, $this->request->data);
            if ($this->Hrzones->save($hrzone)) {
                $this->Flash->success(__('The hrzone has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The hrzone could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('hrzone'));
        $this->set('_serialize', ['hrzone']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Hrzone id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $hrzone = $this->Hrzones->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $hrzone = $this->Hrzones->patchEntity($hrzone, $this->request->data);
            if ($this->Hrzones->save($hrzone)) {
                $this->Flash->success(__('The hrzone has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The hrzone could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('hrzone'));
        $this->set('_serialize', ['hrzone']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Hrzone id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $hrzone = $this->Hrzones->get($id);
        if ($this->Hrzones->delete($hrzone)) {
            $this->Flash->success(__('The hrzone has been deleted.'));
        } else {
            $this->Flash->error(__('The hrzone could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
