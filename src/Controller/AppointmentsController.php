<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Mailer\Email;

/**
 * Appointments Controller
 *
 * @property \App\Model\Table\AppointmentsTable $Appointments
 */
class AppointmentsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->response->header('Access-Control-Allow-Origin', '*');
        $this->paginate = [
            'contain' => ['Patients', 'Doctors', 'Units']
        ];
        $page = $this->request->query('page') ? $this->request->query('page') : 1;
        $appointments = $this->paginate($this->Appointments);

        $this->set(compact('appointments'));
        $this->set(compact('page'));
        $this->set('_serialize', ['appointments']);
    }

    /**
     * View method
     *
     * @param string|null $id Appointment id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->response->header('Access-Control-Allow-Origin', '*');
        $appointment = $this->Appointments->get($id, [
            'contain' => ['Patients', 'Doctors', 'Units']
        ]);

        $this->set('appointment', $appointment);
        $this->set('_serialize', ['appointment']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->response->header('Access-Control-Allow-Origin', '*');
        $appointment = $this->Appointments->newEntity();
        if ($this->request->is('post')) {
            $appointment = $this->Appointments->patchEntity($appointment, $this->request->data);
            if ($this->Appointments->save($appointment)) {
                $this->Flash->success(__('The appointment has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The appointment could not be saved. Please, try again.'));
            }
        }
        $patients = $this->Appointments->Patients->find('list', ['limit' => 200]);
        $doctors = $this->Appointments->Doctors->find('list', ['limit' => 200]);
        $units = $this->Appointments->Units->find('list', ['limit' => 200]);
        $prices = $this->Appointments->Prices->find('all', ['limit' => 200]);
        $pricesList = $this->Appointments->Prices->find('list', ['limit' => 200]);
        $this->set(compact('appointment', 'patients', 'doctors', 'units', 'prices', 'pricesList'));
        $this->set('_serialize', ['appointment']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Appointment id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->response->header('Access-Control-Allow-Origin', '*');
        $appointment = $this->Appointments->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $appointment = $this->Appointments->patchEntity($appointment, $this->request->data);
            if ($this->Appointments->save($appointment)) {
                $this->Flash->success(__('The appointment has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The appointment could not be saved. Please, try again.'));
            }
        }
        $patients = $this->Appointments->Patients->find('list', ['limit' => 200]);
        $doctors = $this->Appointments->Doctors->find('list', ['limit' => 200]);
        $units = $this->Appointments->Units->find('list', ['limit' => 200]);
        $prices = $this->Appointments->Prices->find('list', ['limit' => 200]);
        $pricesList = $this->Appointments->Prices->find('list', ['limit' => 200]);
        $this->set(compact('appointment', 'patients', 'doctors', 'units', 'prices', 'pricesList'));
        $this->set('_serialize', ['appointment']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Appointment id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->response->header('Access-Control-Allow-Origin', '*');
        $this->request->allowMethod(['post', 'delete']);
        $appointment = $this->Appointments->get($id);
        if ($this->Appointments->delete($appointment)) {
            $this->Flash->success(__('The appointment has been deleted.'));
        } else {
            $this->Flash->error(__('The appointment could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }

    public function getByUserID() {
        $this->response->header('Access-Control-Allow-Origin', '*');
        $userID = isset($this->request->query['userID']) ? $this->request->query['userID'] : 0;
        $dentalDate = $this->Appointments->find()->where(['patient_id'=>$userID]);
        $this->set(compact('dentalDate'));
        $this->set('_serialize', ['dentalDate']);
    }

    public function confirmDate() {
        $this->response->header('Access-Control-Allow-Origin', '*');
        if ($this->request->is(['get'])) {
            $id = isset($this->request->query['id']) ? $this->request->query['id'] : 0;
            if($dentalDates = $this->Appointments->get($id)) {
                $dentalDates->set('confirmed', true);
                $this->Appointments->save($dentalDates);
                $this->set(['ok'=>true]);
            } else {
                $this->set(['ok'=>false]);
            }
        } else if ($this->request->is(['post'])) {
            $id = isset($this->request->params['pass'][0]) ? $this->request->params['pass'][0] : 0;
            $page = $this->request->query('page') ? $this->request->query('page') : 1;
            if($dentalDates = $this->Appointments->get($id)) {
                $dentalDates->set('confirmed', true);
                $this->Appointments->save($dentalDates);
                $this->Flash->success(__('Cita actualizada con éxito'));
            } else {
                $this->Flash->error(__('Verifique su conexión a internet.'));
            }
            return $this->redirect(['action' => 'index', '?' => ['page' =>$page]]);
        } 
    }

    public function unconfirmDate() {
        $this->response->header('Access-Control-Allow-Origin', '*');
        if ($this->request->is(['get'])) {
            $id = isset($this->request->query['id']) ? $this->request->query['id'] : 0;
            if($dentalDates = $this->Appointments->get($id)) {
                $dentalDates->set('confirmed', false);
                $this->Appointments->save($dentalDates);
                $this->set(['ok'=>true]);
            } else {
                $this->set(['ok'=>false]);
            }
        } else if ($this->request->is(['post'])) {
            $id = isset($this->request->params['pass'][0]) ? $this->request->params['pass'][0] : 0;
            $page = $this->request->query('page') ? $this->request->query('page') : 1;
            if($dentalDates = $this->Appointments->get($id)) {
                $dentalDates->set('confirmed', false);
                $this->Appointments->save($dentalDates);
                $this->Flash->success(__('Cita actualizada con éxito'));
            } else {
                $this->Flash->error(__('Verifique su conexión a internet.'));
            }
            return $this->redirect(['action' => 'index', '?' => ['page' =>$page]]);
        }
    }

    public function rateDate() {
        $this->response->header('Access-Control-Allow-Origin', '*');
        if ($this->request->is(['get'])) {
            $id = isset($this->request->query['id']) ? $this->request->query['id'] : 0;
            $rate = isset($this->request->query['rate']) ? $this->request->query['rate'] : 'GOOD';
            if($dentalDates = $this->Appointments->get($id)) {
                $dentalDates->set('rated', $rate);
                $this->Appointments->save($dentalDates);
                $this->set(['ok'=>true]);
            } else {
                $this->set(['ok'=>false]);
            }

        } 
    }

    public function home() {
        $this->response->header('Access-Control-Allow-Origin', '*');
        if ($this->request->is(['get'])) {
        // 1) citas para hoy
        // 2) cumpleaños para hoy

            $todayDay = date('d',strtotime('now'));
            $todayMonth = date('m',strtotime('now'));
            $todayYear = date('Y',strtotime('now'));
            $todayAppointments = $this->Appointments->find()
                                                    ->select(['doctors.name', 
                                                              'doctors.lastname', 
                                                              'units.name', 
                                                              'patients.name',
                                                              'patients.lastname',
                                                              'appointments.appointment_date',
                                                              'appointments.description',
                                                              'appointments.id',
                                                            ])
                                                    ->where(['YEAR(appointment_date)' => $todayYear,
                                                             'DAY(appointment_date)' => $todayDay,
                                                             'MONTH(appointment_date)' => $todayMonth
                                                        ])
                                                    ->innerJoinWith('Doctors')
                                                    ->innerJoinWith('Units')
                                                    ->innerJoinWith('Patients')
                                                    ->order('appointment_date', 'ASC');
            //$todayAppointments = $todayAppointments['_properties'];
            $this->set(compact('todayAppointments'));
        }
    }

    public function solicite() {
        $this->response->header('Access-Control-Allow-Origin', '*');
        if ($this->request->is(['get'])) {
            $phone = isset($this->request->query['phone']) ? $this->request->query['phone'] : '(no dejó número)';
            $date = isset($this->request->query['date']) ? $this->request->query['date'] : '(no seleccionó fecha)';
            //$unit = isset($this->request->query['unit']) ? $this->request->query['unit'] : '(no seleccionó lugar)';
            $patient = isset($this->request->query['patient']) ? $this->request->query['patient'] : 'no dio su nombre ';
            $email = new Email('default');
            $email->from(['quirodental@quirodental.com' => 'Quirodental'])
                  //->to('mfquiroz14@quirodental.com')
                  ->to('ddperalta.m@gmail.com')
                  ->subject('Solicitud de cita')
                  ->send("El paciente $patient, desea una cita para el día $date. Puedes comunicarte al teléfono $phone");
            $this->set(['ok'=>true]);
        }

    }
}
