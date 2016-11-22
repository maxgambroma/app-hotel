<?php
// Agenda_model.php
class Agenda_model extends CI_Model {

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
                return $this->db->get( 'agenda' )->result() ;
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
                FROM agenda
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
                return $this->db->count_all('agenda');
            }

	/** 
       * function find_by_id($preno_id)
       * find preno_id
       * @param $form_data - array
       * @return object
       */

	public function find_by_id($preno_id)
            {	
                return $this->db->get_where( 'agenda' , array('preno_id' => $preno_id ))->row();
            }

        /** 
       * function insert($data)
       * insert to agenda data
       * @param $form_data - array
       * @return object
       */
		
	public function insert($data)
            {
                $this->db->set($data);
                $this->db->insert('agenda');
                return $this->db->insert_id();
            }
		
        /** 
       * function update($preno_id, $data)
       * insert update preno_idform data
       * @param $form_data 
       * @return id
       */
		
	public function update($preno_id, $data)
            {
                $this->db->where('preno_id', $preno_id);
                $this->db->set($data);
                $this->db->update('agenda');
                return $this->db->affected_rows();
            }

		/** 
       * function delete($preno_id)
       * delete form agenda data
       * @param 
       * @return 
       */

	public function delete($preno_id)
            {
                $this->db->where('preno_id', $preno_id);
                $this->db->delete('agenda');
                return $this->db->affected_rows();
            }
	
            
            

public function preno_by_id($preno_id, $hotel_id) {
        $query = $this->db->query("
        SELECT *,
        agenda.hotel_id ,
        ( agenda.q1 + agenda.q2 + agenda.q3 + agenda.q4 + agenda.q5 + agenda.q6 ) AS Tot_cam,
        ( if( agenda.t1 = 1 , agenda.q1 , 0 ) + if( agenda.t2 = 1 , agenda.q2 , 0 ) + if( agenda.t3 = 1 , agenda.q3 , 0 ) + if( agenda.t4 = 1 , agenda.q4 , 0 ) + if( agenda.t5 = 1 , agenda.q5 , 0 ) + if( agenda.t6 = 1 , agenda.q6 , 0 ) ) AS Singola,
        ( if( agenda.t1 = 7 , agenda.q1 , 0 ) + if( agenda.t2 = 7 , agenda.q2 , 0 ) + if( agenda.t3 = 7 , agenda.q3 , 0 ) + if( agenda.t4 = 7 , agenda.q4 , 0 ) + if( agenda.t5 = 7 , agenda.q5 , 0 ) + if( agenda.t6 = 7 , agenda.q6 , 0 ) ) AS Doppia_Uso,
        ( if( agenda.t1 = 2 , agenda.q1 , 0 ) + if( agenda.t2 = 2 , agenda.q2 , 0 ) + if( agenda.t3 = 2 , agenda.q3 , 0 ) + if( agenda.t4 = 2 , agenda.q4 , 0 ) + if( agenda.t5 = 2 , agenda.q5 , 0 ) + if( agenda.t6 = 2 , agenda.q6 , 0 ) ) AS Doppia,
        ( if( agenda.t1 = 3 , agenda.q1 , 0 ) + if( agenda.t2 = 3 , agenda.q2 , 0 ) + if( agenda.t3 = 3 , agenda.q3 , 0 ) + if( agenda.t4 = 3 , agenda.q4 , 0 ) + if( agenda.t5 = 3 , agenda.q5 , 0 ) + if( agenda.t6 = 3 , agenda.q6 , 0 ) ) AS Matrimoniale,
        ( if( agenda.t1 = 9 , agenda.q1 , 0 ) + if( agenda.t2 = 9 , agenda.q2 , 0 ) + if( agenda.t3 = 9 , agenda.q3 , 0 ) + if( agenda.t4 = 9 , agenda.q4 , 0 ) + if( agenda.t5 = 9 , agenda.q5 , 0 ) + if( agenda.t6 = 9 , agenda.q6 , 0 ) ) AS Matri_Balcone,
        ( if( agenda.t1 = 4 , agenda.q1 , 0 ) + if( agenda.t2 = 4 , agenda.q2 , 0 ) + if( agenda.t3 = 4 , agenda.q3 , 0 ) + if( agenda.t4 = 4 , agenda.q4 , 0 ) + if( agenda.t5 = 4 , agenda.q5 , 0 ) + if( agenda.t6 = 4 , agenda.q6 , 0 ) ) AS Tripla,
        ( if( agenda.t1 = 5 , agenda.q1 , 0 ) + if( agenda.t2 = 5 , agenda.q2 , 0 ) + if( agenda.t3 = 5 , agenda.q3 , 0 ) + if( agenda.t4 = 5 , agenda.q4 , 0 ) + if( agenda.t5 = 5 , agenda.q5 , 0 ) + if( agenda.t6 = 5 , agenda.q6 , 0 ) ) AS Quadrupla,
        ( if( agenda.t1 = 6 , agenda.q1 , 0 ) + if( agenda.t2 = 6 , agenda.q2 , 0 ) + if( agenda.t3 = 6 , agenda.q3 , 0 ) + if( agenda.t4 = 6 , agenda.q4 , 0 ) + if( agenda.t5 = 6 , agenda.q5 , 0 ) + if( agenda.t6 = 6 , agenda.q6 , 0 ) ) AS Junior_Suit,
        ( if( agenda.t1 = 8 , agenda.q1 , 0 ) + if( agenda.t2 = 8 , agenda.q2 , 0 ) + if( agenda.t3 = 8 , agenda.q3 , 0 ) + if( agenda.t4 = 8 , agenda.q4 , 0 ) + if( agenda.t5 = 8 , agenda.q5 , 0 ) + if( agenda.t6 = 8 , agenda.q6 , 0 ) ) AS Quintupla,
        agenzie.agenzia_nome,
        agenzie.agenzia_tipologia,
        agenzie.agenzia_id
        FROM
        agenda
        LEFT OUTER JOIN agenzie
        ON agenda.preno_agenzia = agenzie.agenzia_id
        WHERE
        (agenda.preno_id = '$preno_id') AND 
        (agenda.hotel_id = '$hotel_id')    
            ");
        return $query->result();
    }

}
?>