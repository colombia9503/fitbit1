<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * HeartRates Controller
 *
 * @property \App\Model\Table\HeartRatesTable $HeartRates
 */
class HeartRatesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Profiles', 'Hrzones', 'Activities']
        ];
        $heartRates = $this->paginate($this->HeartRates);

        $this->set(compact('heartRates'));
        $this->set('_serialize', ['heartRates']);
    }

    /**
     * View method
     *
     * @param string|null $id Heart Rate id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $heartRate = $this->HeartRates->get($id, [
            'contain' => ['Profiles', 'Hrzones', 'Activities']
        ]);

        $this->set('heartRate', $heartRate);
        $this->set('_serialize', ['heartRate']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $heartRate = $this->HeartRates->newEntity();
        if ($this->request->is('post')) {
            $heartRate = $this->HeartRates->patchEntity($heartRate, $this->request->data);
            if ($this->HeartRates->save($heartRate)) {
                $this->Flash->success(__('The heart rate has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The heart rate could not be saved. Please, try again.'));
            }
        }
        $profiles = $this->HeartRates->Profiles->find('list', ['limit' => 200]);
        $hrzones = $this->HeartRates->Hrzones->find('list', ['limit' => 200]);
        $activities = $this->HeartRates->Activities->find('list', ['limit' => 200]);
        $this->set(compact('heartRate', 'profiles', 'hrzones', 'activities'));
        $this->set('_serialize', ['heartRate']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Heart Rate id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $heartRate = $this->HeartRates->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $heartRate = $this->HeartRates->patchEntity($heartRate, $this->request->data);
            if ($this->HeartRates->save($heartRate)) {
                $this->Flash->success(__('The heart rate has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The heart rate could not be saved. Please, try again.'));
            }
        }
        $profiles = $this->HeartRates->Profiles->find('list', ['limit' => 200]);
        $hrzones = $this->HeartRates->Hrzones->find('list', ['limit' => 200]);
        $activities = $this->HeartRates->Activities->find('list', ['limit' => 200]);
        $this->set(compact('heartRate', 'profiles', 'hrzones', 'activities'));
        $this->set('_serialize', ['heartRate']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Heart Rate id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $heartRate = $this->HeartRates->get($id);
        if ($this->HeartRates->delete($heartRate)) {
            $this->Flash->success(__('The heart rate has been deleted.'));
        } else {
            $this->Flash->error(__('The heart rate could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
