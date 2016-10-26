<?php

class Prezzi extends CI_Controller {

    function __construct() {
        parent::__construct();
		
        $this->load->model('prezzi_disponibilita_model');

    }

    /*
     * elenca tutti i guasti aperti camare + area
     * 
     * 
     * 
     */

    function index() {

        
        $today = '2015-11-22';
        $hotel_id = 2 ;
        $now = date('Y-m-d');
        
     //   $data =  $this->prezzi_disponibilita_model->rs_hotel($hotel_id);
      $data =  $this->prezzi_disponibilita_model->prezzo_hotel($hotel_id, $today, $includi_prezzi = 0);
      //  $data =  $this->prezzi_disponibilita_model->rs_conti_aperti($hotel_id, $today);
	//	$data =  $this->prezzi_disponibilita_model->camere_in_arrivo($hotel_id, $today, $now) ;
		
      print_r($data);
        
    }
    
}