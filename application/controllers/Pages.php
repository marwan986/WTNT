<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pages
 *
 * @author Marwan
 */
class Pages extends CI_Controller{
    public function view($page = 'home'){
        if ( ! file_exists('application/views/pages/'.$page.'.php'))
	{
		// Whoops, we don't have a page for that!
		show_404();
	}
	//added a line
	$data['title'] = ucfirst($page); // Capitalize the first letter
	$this->load->model('Votemodel');
        $result['content'] = $this->Votemodel->getVote();
        $this->load->view('pages/'.$page,$result);
        
        //print_r($result->msg);
	//$this->load->view('templates/header', $data);
	//$this->load->view('pages/'.$page, $data);
	//$this->load->view('templates/footer', $data);

    }
}

?>
