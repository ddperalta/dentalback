<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Patients Controller
 *
 * @property \App\Model\Table\PatientsTable $Patients
 */
class PatientsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->response->header('Access-Control-Allow-Origin', '*');
        $patients = $this->paginate($this->Patients);

        $this->set(compact('patients'));
        $this->set('_serialize', ['patients']);
    }

    /**
     * View method
     *
     * @param string|null $id Patient id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->response->header('Access-Control-Allow-Origin', '*');
        $patient = $this->Patients->get($id, [
            'contain' => ['Appointments']
        ]);
        $user = $this->Patients->get($id);
        $this->set(compact('user'));
        $this->set('patient', $patient);
        $this->set('_serialize', ['patient', 'user']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->response->header('Access-Control-Allow-Origin', '*');
        $patient = $this->Patients->newEntity();
        if ($this->request->is('post')) {
            $patient = $this->Patients->patchEntity($patient, $this->request->data);
            if ($this->Patients->save($patient)) {
                $this->Flash->success(__('The patient has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The patient could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('patient'));
        $this->set('_serialize', ['patient']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Patient id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->response->header('Access-Control-Allow-Origin', '*');
        $patient = $this->Patients->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $patient = $this->Patients->patchEntity($patient, $this->request->data);
            if ($this->Patients->save($patient)) {
                $this->Flash->success(__('The patient has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The patient could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('patient'));
        $this->set('_serialize', ['patient']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Patient id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->response->header('Access-Control-Allow-Origin', '*');
        $this->request->allowMethod(['post', 'delete']);
        $patient = $this->Patients->get($id);
        if ($this->Patients->delete($patient)) {
            $this->Flash->success(__('The patient has been deleted.'));
        } else {
            $this->Flash->error(__('The patient could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }

    /**
     * Login method
     * 
     */
    public function login() {
        $this->response->header('Access-Control-Allow-Origin', '*');
        $this->request->allowMethod(['GET']);
        if ($this->request->is('GET')) {
            $username = isset($this->request->query['username']) ? $this->request->query['username'] : '';
            $pass = isset($this->request->query['pass']) ? $this->request->query['pass'] : '';
            $user = $this->Patients->find()->where(['patientnumber'=>$username, 'password'=>$pass]);
        }
        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }
}
