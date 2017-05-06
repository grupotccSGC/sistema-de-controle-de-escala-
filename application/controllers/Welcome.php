<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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


public function __construct(){
		parent::__construct();
	    $this->load->helper('form');
	    $this->load->helper('url_helper');
	    $this->load->model("Empresa");
	  $this->load->library('form_validation');
	  if(!$this->session->userdata('user') and !$this->session->userdata('perfil')){
redirect('Login/');
}
}
   

public function central(){
	$this->load->model("Escala");
	$data['da']=$this->Escala->consulta_id();
	$this->load->view('central',$data);
}


	public function index()
	{
		$query['da'] = $this->db->get('empresa')->row();
		$this->load->view('welcome_message',$query);
	}


public function cadastro(){
	$this->Empresa->cadastro();
 }

public function atualizar()
{
$this->Empresa->atualizar();
}



public function funcionario()
	{
	
		$this->load->view('funcionario');
	}


public function valida_fu()
{

    $this->form_validation->set_rules('cpf','cpf','is_unique[Funcionario.cpf]');
$this->form_validation->set_rules('tele','Telefone','is_unique[Funcionario.telefone]');
$this->form_validation->set_rules('email','email','is_unique[Funcionario.email]');
}


public function cadastra_fu()
{
 $this->valida_fu();

	if($this->form_validation->run()===true){
		$this->load->model("Funcionario");
	    $this->Funcionario->cadastro();}
	    else{

	    	$this->load->view('funcionario');
	    }

}

	


public function consulta_fun()
{ 
 $this->load->model("Funcionario");
 $dados['da']=$this->Funcionario->busca();
$this->load->view('consulta_funcionario',$dados);

}

public function excluir_fu($id)
{
	$this->db->where('id',$id);
	$this->db->set('status','desativado');
	$this->db->update('Funcionario');
	redirect('Welcome/consulta_fun');
}

public function edit_fu($cod)
{    $this->db->where('id',$cod);
	$dados['da']=$this->db->get('Funcionario')->row();
	$this->load->view('funcionario',$dados);
}

public function atualizar_fu()
{
	    $this->load->model("Funcionario");
	    $dados['da']=$this->Funcionario->atualizar();
}



public function operacoes()
{
	$this->load->view('operacoes');
}





public function cadastro_op()
{
$this->form_validation->set_rules('operacao','Descrição da operacões','is_unique[operacoes.descricao]');
if($this->form_validation->run()=== FALSE){
		$this->load->view('operacoes');}
		 else{
        $this->load->model("Operacao");
	    $this->Operacao->cadastro();
	    $this->load->view('operacoes');
}
}

public function consulta_op()
{ 
 $this->load->model("Operacao");
 $dados['da']=$this->Operacao->consulta();
$this->load->view('consulta_op',$dados);

}

public function edit_op($cod)
{    $this->db->where('id',$cod);
	$dados['da']=$this->db->get('operacoes')->row();
	$this->load->view('operacoes',$dados);
}


public function atualizar_op()
{
        $this->load->model("Operacao");
	    $dados['da']=$this->Operacao->atualizar();

}

public function excluir_op($id)
{
        $this->load->model("Operacao");
	    $dados['da']=$this->Operacao->excluir_op($id);

}


public function escala()
{
$dados['de']=$this->db->get('operacoes')->result();	
$this->load->view('escala',$dados);
}


public function cadastro_es()
{
	$this->load->model("Escala");
	$this->Escala->cadastro();
}


public function consulta_es()
{
$this->load->model("Escala");
$dados['da']=$this->Escala->consulta();
$this->load->view("consulta_es",$dados);
}

public function aprovar($cod)
{
	$this->load->model("Escala");
	$this->Escala->aprovar($cod);
}

public function reprovar($cod)
{
	$this->load->model("Escala");
	$this->Escala->reprovado($cod);
}


}
