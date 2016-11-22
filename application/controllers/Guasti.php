<?php

class Guasti extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('camere_model');
        $this->load->model('guasti_model');
        $this->load->model('pulizia_model');
        $this->load->model('hotel_model');
             $this->load->model('app_ip_model');
    }

    /*
     * elenca tutti i guasti aperti camare + area
     * 
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
        $date['today'] = $today = date('Y-m-d');
        $data['hotel_id'] = $hotel_id;

        
        
        $ip_aderss = $this->input->ip_address();
        $consenti = $this->app_ip_model->find_by_ip($ip_aderss);
        if ($consenti) {
            $data['ip_consenti'] = 1;
        } else {
            $data['ip_consenti'] = 0;
        }
        
        
        
        $data['guasti'] = $this->guasti_model->guasti_stato($hotel_id);
        $data['guasti_area'] = $this->guasti_model->guasti_area($hotel_id);



        // print_r($data['guasti']);		
// scegli il templete
        $temi = 'tem_bc_new';
        // carica la vista del contenuto
        $vista = 'guasti';
        // gestore templete
        $data['temp'] = array('templete' => $temi, 'contenuto' => $vista, 'bar1' => 'bar_1', 'bar_2' => 'bar_guasti');
        $this->load->view('templetes', $data);
    }

    /*
     * 
     * aggiungi i guasti per le aree (no camare)
     * 
     * 
     */

    function guasti_add() {
        $today = date('Y-m-d');
        if ($this->input->get('hotel_id')) {
            $hotel_id = $this->input->get('hotel_id');
        } else {
            $hotel_id = 1;
        }
        $date['today'] = $today = date('Y-m-d');
        $data['hotel_id'] = $hotel_id;
        
        
        
        $ip_aderss = $this->input->ip_address();
        $consenti = $this->app_ip_model->find_by_ip($ip_aderss);
        if ($consenti) {
            $data['ip_consenti'] = 1;
        } else {
            $data['ip_consenti'] = 0;
        }
        

        $data['guasti'] = $this->guasti_model->guasti_stato($hotel_id);

        // print_r($data['guasti']);		
        // scegli il templete
        $temi = 'tem_bc_new';
        // carica la vista del contenuto
        $vista = 'guasti_add';
        // gestore templete
        $data['temp'] = array('templete' => $temi, 'contenuto' => $vista, 'bar1' => 'bar_1', 'bar_2' => 'bar_guasti');
        $this->load->view('templetes', $data);
    }

    /*
     * Admin 
     * guasti area guasto _id
     *  aperti e chiusi
     */

    function guasti_area_adm() {
        $today = date('Y-m-d');
        if ($this->input->get('hotel_id')) {
            $hotel_id = $this->input->get('hotel_id');
        } else {
            $hotel_id = 1;
        }

        $date['today'] = $today = date('Y-m-d');
        $data['hotel_id'] = $hotel_id;
                
         
        $ip_aderss = $this->input->ip_address();
        $consenti = $this->app_ip_model->find_by_ip($ip_aderss);
        if ($consenti) {
            $data['ip_consenti'] = 1;
        } else {
            $data['ip_consenti'] = 0;
        }       
                

        /*
         * trovo i guasti aperti
         */

        $guasto_id = $this->input->get('guasto_id');

        $data['guasti'] = $this->guasti_model->find_by_id($guasto_id);

        // print_r($data['guasti']);		
        // scegli il templete
        $temi = 'tem_bc_new';
        // carica la vista del contenuto
        $vista = 'guasti_area_adm';
        // gestore templete
        $data['temp'] = array('templete' => $temi, 'contenuto' => $vista, 'bar1' => 'bar_1', 'bar_2' => 'bar_guasti');
        $this->load->view('templetes', $data);
    }

    /*
     * 
     * guasti riferiti ad una risorsa particolare
     *  aperti e chiusi
     */

    function guasto_camera() {

        $today = date('Y-m-d');
        if ($this->input->get('hotel_id')) {
            $hotel_id = $this->input->get('hotel_id');
        } else {
            $hotel_id = 1;
        }
        $date['today'] = $today = date('Y-m-d');
        $data['hotel_id'] = $hotel_id;
        
        
        
        $ip_aderss = $this->input->ip_address();
        $consenti = $this->app_ip_model->find_by_ip($ip_aderss);
        if ($consenti) {
            $data['ip_consenti'] = 1;
        } else {
            $data['ip_consenti'] = 0;
        }
        
        

        $camera_id = $this->input->get('camera_id');

        /*
         * trovo i guasti aperti
         */
        $data['guasti'] = $this->guasti_model->guasti_camara($hotel_id, $camera_id, $guasto_stato = 1);

        /*
         * trovo i guasti cancellati
         */
        $data['guasticax'] = $this->guasti_model->guasti_camara($hotel_id, $camera_id, $guasto_stato = 2);

        /*
         *  camara 
         */
        $data['camera'] = $this->camere_model->find_by_id($camera_id);

//                print_r($data['camera'] );
        // scegli il templete
        $temi = 'tem_bc_new';
        // carica la vista del contenuto
        $vista = 'guasti_camara';
        // gestore templete
        $data['temp'] = array('templete' => $temi, 'contenuto' => $vista, 'bar1' => 'bar_1', 'bar_2' => 'bar_guasti');
        $this->load->view('templetes', $data);
    }

    
    
    /**
     * 
     * elenca ultime 30 manutenzioni inserite
     * 
     */
    
 
      function lista_30() {

        $today = date('Y-m-d');
        if ($this->input->get('hotel_id')) {
            $hotel_id = $this->input->get('hotel_id');
        } else {
            $hotel_id = 1;
        }
        $date['today'] = $today = date('Y-m-d');
        $data['hotel_id'] = $hotel_id;

        
        $ip_aderss = $this->input->ip_address();
        $consenti = $this->app_ip_model->find_by_ip($ip_aderss);
        if ($consenti) {
            $data['ip_consenti'] = 1;
        } else {
            $data['ip_consenti'] = 0;
        }
        

        /*
         * trovo i guasti aperti
         */
        $data['guasti'] = $this->guasti_model->lista_30($hotel_id);
		 $data['guasti_aperti'] = $this->guasti_model->lista_stato($hotel_id, $guasto_stato = 1);


        /*
         *  camara 
         */


//                print_r($data['camera'] );
        // scegli il templete
        $temi = 'tem_bc_new';
        // carica la vista del contenuto
        $vista = 'guasti_lista_30';
        // gestore templete
        $data['temp'] = array('templete' => $temi, 'contenuto' => $vista, 'bar1' => 'bar_1', 'bar_2' => 'bar_guasti');
        $this->load->view('templetes', $data);
    }

    
    
    
    
    
    
    
    
    
    
    
    /*
     * dal form per aggiornare  il guato 
     * 
     */

    function mod_manutenzioni() {

        $id = $this->input->post('guasto_id');

        $form_guasti = array(
            'guasto_priorita' => $this->input->post('guasto_priorita'),
            'guasto_area' => $this->input->post('guasto_area'),
            'guasto_note' => $this->input->post('guasto_note'),
            'guasto_stato' => $this->input->post('guasto_stato'),
            'guasto_utente_id' => $this->input->post('guasto_utente_id')
        );


        if ($this->guasti_model->update($id, $form_guasti) == TRUE) {

            // the information has therefore been successfully saved in the db


            if ($this->input->post('camera_id') <> 0) {

                redirect(base_url() . 'index.php/guasti/guasto_camera?camera_id=' . $this->input->post('camera_id') . '&hotel_id=' . $this->input->post('hotel_id') . '');
            } else {

               
                
                redirect(base_url() . 'index.php/guasti/?hotel_id=' . $this->input->post('hotel_id') . '');
            }
        }
    }

}
?>

