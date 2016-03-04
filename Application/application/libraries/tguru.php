<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tguru
{
  protected $_CI;

	public function __construct()
	{
        $this->_CI =& get_instance();
	}

    function display($template,$data=null){
        $data['_navbar']=$this->_CI->load->view('templates/main/mainnav',$data,true);
        
        $data['_sidebar']=$this->_CI->load->view('templates/main/guru/guruside',$data,true);
        
        $data['_content']=$this->_CI->load->view($template,$data,true);

        // $data['_footer']=$this->_CI->load->view('template/footer',$data,true);
               
        $this->_CI->load->view('templates/main/tmain',$data);
    }
    
}
	

/* End of file Tadmin.php */
/* Location: ./application/libraries/main.php */
