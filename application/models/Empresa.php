<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empresa extends CI_Model{
 

   public function __construct()
        {
               // Call the CI_Model constructor
                parent::__construct();
                
        }

public function cadastro(){
 $this->db->set('nome',$this->input->post('empresa'));
 $this->db->set('cnpj',$this->input->post('cn')); 
 $this->db->set('telefone',$this->input->post('telefone'));
 $this->db->set('cep',$this->input->post('cep'));
$this->db->set('estado',$this->input->post('estado'));
$this->db->set('cidade',$this->input->post('cidade'));
$this->db->set('bairro',$this->input->post('bairro'));
$this->db->set('endereco',$this->input->post('end'));
$this->db->insert('empresa');
$this->session->set_flashdata('mensagem', 'Cadastrado com sucesso!');
redirect('Welcome');
}

public function atualizar()
{
$this->db->set('nome',$this->input->post('empresa'));
$this->db->set('cnpj',$this->input->post('cn')); 
$this->db->set('telefone',$this->input->post('telefone'));
$this->db->set('cep',$this->input->post('cep'));
$this->db->set('estado',$this->input->post('estado'));
$this->db->set('cidade',$this->input->post('cidade'));
$this->db->set('bairro',$this->input->post('bairro'));
$this->db->set('endereco',$this->input->post('end'));
$this->db->where('id',$this->input->post('id'));
$this->db->update('empresa');
$this->session->set_flashdata('mensagem', 'Atualizado com sucesso!');
redirect('Welcome');
}




    }
