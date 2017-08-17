<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Producao extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index(){
            $this->load->view('includes/header');
            $this->load->view('includes/menu');
            $this->load->view('listar_producao');
            $this->load->view('includes/footer');
	}
        
    public function cadastro(){
            $this->load->view('includes/header');
            $this->load->view('includes/menu');
            $this->load->view('cadastro_producao');
            $this->load->view('includes/footer');
	}

	public function cadastrar(){
		$data['titulo'] = $this->input->post('titulo');
		$data['autores'] = $this->input->post('autor');
		$data['descricao'] = $this->input->post('descricao');
		$data['areas_idareas'] = $this->input->post('area');
		$data['link'] = $this->input->post('link');

		if($this->db->insert('producoes', $data)){
			redirect('producao');
		}
	}
}
