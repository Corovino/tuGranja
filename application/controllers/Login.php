<?php 

/**
* 
*/
class Loguin extends CI_Controller
{
	
	public function index()
	{
		$email =$this->input->post('user');
		$pass  =$this->input->post('password');
        
        $this->load->model('User');
        $fila=$this->User->getUser($email);
        if($fila != null){
        	if($fila->password == $pass ){
        		$data=  array(
			    'email'   => $email,
			    'id'      => $fila->id,
			    'login'   => true

			     );
		         
		         $this->session->set_userdata($data);
        	 	 header('Location:'.base_url());

                  
        	 }else{

        	 	return header('Location:'.base_url());

        	 }
        }else{
        	 	return header('Location:'.base_url());
        	
        }

		

	}


	public function logout(){
		$this->session->sess_destroy();
        header('Location:'.base_url());

	}
}
?>