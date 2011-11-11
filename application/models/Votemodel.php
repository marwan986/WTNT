<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Votemodel
 *
 * @author Compaq User
 */
class Votemodel extends CI_Model{
    //put your code here
    public function getVote(){
       $q = $this->db->get('messages');
       
       if($q->num_rows() > 0)
       {
           foreach($q->result() as $row)
           {
              $data[] = $row; 
              
           }
       }
       
       return $data;
        
    }
    
}
?>
