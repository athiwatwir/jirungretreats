<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Retreat Controller
 *
 *
 * @method \App\Model\Entity\Retreat[] paginate($object = null, array $settings = [])
 */
class RetreatController extends AppController
{

    public function flora(){
        $this->viewBuilder()->layout('home');
    }
    
    public function emotion(){
        
    }
}
