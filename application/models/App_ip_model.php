<?php
// App_ip_model.php
class App_ip_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}
	
	// --------------------------------------------------------------------

      /** 
       * function find()
       * find form data
       * @param $form_data - array
       * @return object
       */
	
	public function find()
            {
                return $this->db->get( 'app_ip' )->result() ;
            }

      /** 
       * function find_limit($offset,$limit)
       * find form data
       * @param $form_data - array
       * @return Array
       */
       	
	public function find_limit($limit = 100, $offset = 0 )
            {
                $query= $this->db->query("
                SELECT *
                FROM app_ip
                LIMIT $offset , $limit "); 
                return   $query->result();
            }

         /** 
       * function count all record 
       * 
       * @param $form_data - array
       * @return object
       */
	
        public function record_count()
            {
                return $this->db->count_all('app_ip');
            }

	/** 
       * function find_by_id($app_ip_id)
       * find app_ip_id
       * @param $form_data - array
       * @return object
       */

	public function find_by_id($app_ip_id)
            {	
                return $this->db->get_where( 'app_ip' , array('app_ip_id' => $app_ip_id ))->row();
            }

        /** 
       * function insert($data)
       * insert to app_ip data
       * @param $form_data - array
       * @return object
       */
		
	public function insert($data)
            {
                $this->db->set($data);
                $this->db->insert('app_ip');
                return $this->db->insert_id();
            }
		
        /** 
       * function update($app_ip_id, $data)
       * insert update app_ip_idform data
       * @param $form_data 
       * @return id
       */
		
	public function update($app_ip_id, $data)
            {
                $this->db->where('app_ip_id', $app_ip_id);
                $this->db->set($data);
                $this->db->update('app_ip');
                return $this->db->affected_rows();
            }

		/** 
       * function delete($app_ip_id)
       * delete form app_ip data
       * @param 
       * @return 
       */

	public function delete($app_ip_id)
            {
                $this->db->where('app_ip_id', $app_ip_id);
                $this->db->delete('app_ip');
                return $this->db->affected_rows();
            }

            
            
            	public function find_by_ip($ip_aderss)
            {	
                $query= $this->db->query("
                SELECT *
                FROM app_ip
                WERE  	ip_aderss = '$ip_aderss'
                 "); 
                return   $query->row();
            }

            
            
            
}
?>