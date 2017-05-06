<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Operacao extends CI_Model{
 

   public function __construct()
        {
               // Call the CI_Model constructor
                parent::__construct();
                
        }

public function cadastro(){
 $this->db->set('descricao',$this->input->post('operacao'));
 $this->db->set('status',$this->input->post('status')); 
 $this->db->set('Funcionario_id',$this->session->userdata('cod'));
 $this->db->insert('operacoes');
$this->session->set_flashdata('mensagem', 'Cadastrado com sucesso!');
redirect('Welcome/operacoes');
}

public function atualizar()
{
 $this->db->set('descricao',$this->input->post('operacao'));
 $this->db->set('status',$this->input->post('status')); 
 $this->db->set('Funcionario_id',$this->session->userdata('cod'));
 $this->db->where('id',$this->input->post('id'));
$this->db->update('operacoes');
$this->session->set_flashdata('mensagem', 'Atualizado com sucesso!');
redirect('Welcome/consulta_op');
}



public function consulta()
{
if($this->input->post('busca')){
$this->db->select('o.*,f.nome as funcionario');
$this->db->from('operacoes o');
$this->db->join('Funcionario f','f.id=o.funcionario_id');
$this->db->where('apagar','1');
$this->db->where('descricao',$this->input->post('busca'));
return $this->db->get()->result();
}else{
$this->db->select('o.*,f.nome as funcionario');
$this->db->from('operacoes o');
$this->db->join('Funcionario f','f.id=o.funcionario_id');
$this->db->where('apagar','1');
return $this->db->get()->result();
}
}



public function excluir_op($id)
{
	$this->db->where('id',$id);
	$this->db->set('apagar','2');
	$this->db->update('operacoes');
	redirect('Welcome/consulta_op');
}



    }
