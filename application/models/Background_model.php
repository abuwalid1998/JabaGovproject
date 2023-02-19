<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Background_model extends CI_Model {

	public function getData()
	{
		return $this->db->get_where('bg_majors')->row();
	}

	public function updateData($id, $data)
	{
		$this->db->update('bg_majors', $data, ['id' => $id]);
		return $this->db->affected_rows();
	}
	
	public function uploadImage(){
      $config = [
        'upload_path'     => './img/background',
		  'encrypt_name'    => TRUE,
        'allowed_types'   => 'jpg|jpeg|png|JPG|PNG',
        'max_size'        => 3000,
        'max_width'       => 0,
        'max_height'      => 0,
        'overwrite'       => TRUE,
        'file_ext_tolower'=> TRUE
      ];
  
      $this->load->library('upload', $config);
		
		if($this->upload->do_upload('photo')){
			return $this->upload->data('file_name');
		}else{
			$this->session->set_flashdata('image_error', 'الملفات المرفقة غير مدعومة');
     		return false;
		}
   }

}

/* End of file ModelName.php */
