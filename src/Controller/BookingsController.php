<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Mailer\Email;

/**
 * Bookings Controller
 *
 * @property \App\Model\Table\BookingsTable $Bookings
 *
 * @method \App\Model\Entity\Booking[] paginate($object = null, array $settings = [])
 */
class BookingsController extends AppController {

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index() {
        $bookings = $this->paginate($this->Bookings);

        $this->set(compact('bookings'));
        $this->set('_serialize', ['bookings']);
    }

    /**
     * View method
     *
     * @param string|null $id Booking id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $booking = $this->Bookings->get($id, [
            'contain' => []
        ]);

        $this->set('booking', $booking);
        $this->set('_serialize', ['booking']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $booking = $this->Bookings->newEntity();
        if ($this->request->is('post')) {
            $data = $this->request->getData();
            //debug($data);
            $program = '';
            if (isset($data['program']) && sizeof($data['program']) != 0) {
                foreach ($data['program'] as $value):
                    $program = $program . $value . ', ';
                endforeach;

                $data['program'] = rtrim($program, ', ');
            }


            $booking = $this->Bookings->patchEntity($booking, $data);
            $booking->description = $data['time'];

            if ($this->Bookings->save($booking)) {
                //$this->Flash->success(__('The booking has been saved.'));
                $this->sendemail($booking->id);
                return $this->redirect(['controller' => 'success']);
            }
            //$this->Flash->error(__('The booking could not be saved. Please, try again.'));
        }
        $this->set(compact('booking'));
        $this->set('_serialize', ['booking']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Booking id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $booking = $this->Bookings->get($id);
        if ($this->Bookings->delete($booking)) {
            $this->Flash->success(__('The booking has been deleted.'));
        } else {
            $this->Flash->error(__('The booking could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    private function sendemail($booking_id = null) {
        if (is_null($booking_id)) {
            return;
        }
        $booking = $this->Bookings->get($booking_id);
        if (is_null($booking)) {
            return;
        }

        $email = new Email('default');
        $email->from(['noreply@jirungretreats.com' => 'Jirungretreats.com'])
                ->template('newbooking', 'default')
                ->emailFormat('html')
                ->to(EMAIL)
                ->viewVars(['booking' => $booking])
                ->subject('ลูกค้าลงทะเบียนจองโปรแกรมมาใหม่!')
                ->send('My message');
    }

}
