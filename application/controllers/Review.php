    <?php
class Review extends CI_Controller {
               
	function __construct()
	{
 		parent::__construct();
        $this->load->model('camere_model');
        $this->load->model('hotel_model');
		 $this->load->model('review_model');
                      $this->load->model('app_ip_model');
                            $this->load->model('app_ip_model');
		 
		// review_list($hotel_id)
		// review_camara($hotel_id , $camera_id )
		// review_avg($hotel_id )
	}	
	
	
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

                
		
		$tex['review'] = 'Review';
		$data['menu'] = $tex;
		
              $data['review'] = $this->review_model->review_list($hotel_id);
              $data['review_avg'] = $this->review_model->review_avg($hotel_id);
	

// scegli il templete
		$temi = 'tem_bc_new';
		// carica la vista del contenuto
		$vista = 'review_list';
		// gestore templete
		$data['temp'] = array('templete' => $temi, 'contenuto' => $vista, 'bar1' => 'bar_1', 'bar_2' => 'bar_rev');
		$this->load->view('templetes', $data);	
	}
}
	?>