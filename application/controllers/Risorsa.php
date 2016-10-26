<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Risorsa extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('camere_model');
        $this->load->model('adebbiti_model');
        $this->load->model('guasti_model');
        $this->load->model('pulizia_model');
        $this->load->model('hotel_model');

    }
 
    
    /*
     * dettaglio risorsa conti aperti
     * 
     * 
     */
        function index() {
        $today = date('Y-m-d');
        if ($this->input->get('hotel_id')) {
            $hotel_id = $this->input->get('hotel_id');
        } else {
            $hotel_id = 1;
        }

        $tex['conti_aperti'] = 'Occupate';
        $tex['partiti'] = 'Partite';
        $tex['partenze'] = 'In Partenza';
        $tex['arrivi'] = 'In Arrivo';
        $data['menu'] = $tex;
        $data['hotel_id'] = $hotel_id;
        
        $conto_id = $this->input->get('conto_id');  
        
         $data['conto'] = $this->camere_model->conti_id($hotel_id, $conto_id ); 
//      
//          $data['partenze'] = $this->camere_model->partenze($hotel_id, $today);
//        $data['partiti'] = $this->camere_model->partiti($hotel_id, $today);
//        $data['adr'] =  $this->camere_model->fermate( $hotel_id ,$today ) ; 
        $data['conti_aperti'] = $this->camere_model->conti_aperti($hotel_id);
//        $data['arrivi'] = $this->camere_model->arrivi($hotel_id, $today);

// scegli il templete
        $temi = 'tem_bc';
// carica la vista del contenuto
        $vista = 'risorsa';
// gestore templete
        $data['temp'] = array('templete' => $temi, 'contenuto' => $vista, 'bar1' => 'bar_1', 'bar2' => '');
        $this->load->view('templetes', $data);
    }
    
    
      /*
     * dettaglio risorsa camara_id
     * 
     * 
     */
    
          function camera() {
        $today = date('Y-m-d');
        if ($this->input->get('hotel_id')) {
            $hotel_id = $this->input->get('hotel_id');
        } else {
            $hotel_id = 1;
        }


         $camera_id = $this->input->get('camera_id');
        
    
        $data['hotel_id'] = $hotel_id;
        $data['camara_id'] = $camera_id;

        
        $data['camera'] = $this->camere_model->find_by_id( $camera_id); 
        
                
        
        $data['guasti'] = $this->guasti_model->guasti_camara( $hotel_id, $camera_id , $guasto_stato = 1);
        $data['guasticax'] = $this->guasti_model->guasti_camara( $hotel_id, $camera_id , $guasto_stato = 2);
       


// scegli il templete
        $temi = 'tem_bc';
// carica la vista del contenuto
        $vista = 'risorsa_camera';
// gestore templete
        $data['temp'] = array('templete' => $temi, 'contenuto' => $vista, 'bar1' => 'bar_1', 'bar2' => '');
        $this->load->view('templetes', $data);
    }
    
    
    
    
     /*
     * dettaglio risorsa assegnata
     * 
     * 
     */
    
    
              function foglio() {
        $today = date('Y-m-d');
        if ($this->input->get('hotel_id')) {
            $hotel_id = $this->input->get('hotel_id');
        } else {
            $hotel_id = 1;
        }


        $data['menu'] = $tex;
        $data['hotel_id'] = $hotel_id;
        
        $conto_id = $this->input->get('conto_id');  
        
         $data['conto'] = $this->camere_model->conti_id($hotel_id, $conto_id ); 
//      
//          $data['partenze'] = $this->camere_model->partenze($hotel_id, $today);
//        $data['partiti'] = $this->camere_model->partiti($hotel_id, $today);
//        $data['adr'] =  $this->camere_model->fermate( $hotel_id ,$today ) ; 
        $data['conti_aperti'] = $this->camere_model->conti_aperti($hotel_id);
//        $data['arrivi'] = $this->camere_model->arrivi($hotel_id, $today);

// scegli il templete
        $temi = 'tem_bc';
// carica la vista del contenuto
        $vista = 'risorsa_camara';
// gestore templete
        $data['temp'] = array('templete' => $temi, 'contenuto' => $vista, 'bar1' => 'bar_1', 'bar2' => '');
        $this->load->view('templetes', $data);
    }
    
    
    
    
    
    
    
    
    
    
    
}