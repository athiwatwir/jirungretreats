<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

/**
 * Home Controller
 *
 *
 * @method \App\Model\Entity\Home[] paginate($object = null, array $settings = [])
 */
class HomeController extends AppController {

    public $AgeOpt = [
        '20-30 ปี' => '20-30 ปี',
        '31-40 ปี' => '31-40 ปี',
        '41-50 ปี' => '41-50 ปี',
        '51-60 ปี' => '51-60 ปี',
        '60 ปีขึ้นไป' => '60 ปีขึ้นไป'
    ];
    public $Bookings = null;

    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        $this->Bookings = TableRegistry::get('Bookings');
    }

    public function index() {
        $this->viewBuilder()->layout('home');

        $booking = $this->Bookings->newEntity();

        $this->set('ageOpt', $this->AgeOpt);
        $this->set(compact('booking'));
        $this->set('_serialize', ['booking']);
    }

}
