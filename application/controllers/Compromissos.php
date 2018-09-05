<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class compromissos extends CI_Controller {

	public function index()
	{
		//lista compromissos
		$this->load->database();
		$this->load->model("compromissos_model");
		$lista = $this->compromissos_model->listaCompromissos();
		$dados = array("Compromissos" => $lista);
		$this->load->view('index', $dados);
		
		
	}

	
	public function editar($id)
	{
		
		$this->load->model("compromissos_model");
		$this->compromissos_model->addid($id);
		$lista = $this->compromissos_model->listaid();
		$dados = array("ids" => $lista);
		$this->load->view('editar', $dados);
				
	}
	
	public function salvar()
	{	
			$compromisso = (array(
			"id" => $this->input->post("id"),
			"titulo" => $this->input->post("titulo"),
			"dataa" =>$this->input->post("dataa")
			));
			$this->load->model("compromissos_model");
			$this->compromissos_model->addCompromisso($compromisso);
			redirect('/');
	
	}

	public function atualizar()
	{	
		$compromisso = (array(
			
			"titulo" => $this->input->post("titulo"),
			"dataa" =>$this->input->post("dataa")
			));
			$this->load->model("compromissos_model");
			$this->compromissos_model->save($compromisso);
			redirect('/');
	}

	public function delete($id) {
		
        $this->load->model("compromissos_model");
        $this->compromissos_model->deletar_compromissos($id);
  
       redirect('/');
	}
    
  

}
