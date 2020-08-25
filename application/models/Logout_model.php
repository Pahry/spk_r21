<?php  
/**
 * 
 */
class Logout_model extends CI_Model
{
	
	function logout($date)
	{
		$this->db->update('user', $date);
	}
}
?>