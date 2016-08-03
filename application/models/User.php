<?php

/**
* 
*/
class User extends CI_Model
{
	
	public function getUser($email)
	{
		 $result = $this->db->query("select * from user where email='".$email."' LIMIT 1");

		 if($result->num_rows() > 0){
		 	return $result->row();
		 }else{
		 	return null;
		 }
	}
}

?>