<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Funcionario extends CI_Model{
 

   public function __construct()
        {
               // Call the CI_Model constructor
                parent::__construct();
                
        }

public function cadastro(){
 $this->db->set('nome',$this->input->post('nome'));
 $this->db->set('cpf',$this->input->post('cpf')); 
 $this->db->set('telefone',$this->input->post('tele'));
 $this->db->set('identidade',$this->input->post('identidade'));
 $this->db->set('cargo',$this->input->post('cargo'));
 $this->db->set('sexo',$this->input->post('sexo'));
 $this->db->set('cep',$this->input->post('cep'));
$this->db->set('estado',$this->input->post('estado'));
$this->db->set('cidade',$this->input->post('cidade'));
$this->db->set('bairro',$this->input->post('bairro'));
$this->db->set('endereco',$this->input->post('end'));
$this->db->set('email',$this->input->post('email'));
$senha=crypt($this->input->post('senha'));
$this->db->set('senha',$senha);
$this->db->insert('Funcionario');
$this->session->set_flashdata('mensagem', 'Cadastrado com sucesso!');
redirect('Welcome/funcionario');
}

public function atualizar()
{
 $this->db->set('nome',$this->input->post('nome'));
 $this->db->set('cpf',$this->input->post('cpf')); 
 $this->db->set('telefone',$this->input->post('tele'));
 $this->db->set('identidade',$this->input->post('identidade'));
 $this->db->set('cargo',$this->input->post('cargo'));
 $this->db->set('sexo',$this->input->post('sexo'));
 $this->db->set('cep',$this->input->post('cep'));
$this->db->set('estado',$this->input->post('estado'));
$this->db->set('cidade',$this->input->post('cidade'));
$this->db->set('bairro',$this->input->post('bairro'));
$this->db->set('endereco',$this->input->post('end'));
$this->db->set('email',$this->input->post('email'));
$senha=crypt($this->input->post('senha'));
$this->db->set('senha',$senha);
$this->db->where('id',$this->input->post('id'));
$this->db->update('Funcionario');
$this->session->set_flashdata('mensagem', 'Atualizado com sucesso!');
redirect('Welcome/funcionario');
}



public function busca()
{   
if($this->input->post('busca')){
	$this->db->where('status','ativo');
	$this->db->where('nome',$this->input->post('busca'));
return $this->db->get('Funcionario')->result();
}else{
   $this->db->where('status','ativo');
	return $this->db->get('Funcionario')->result();
}


}







    }
