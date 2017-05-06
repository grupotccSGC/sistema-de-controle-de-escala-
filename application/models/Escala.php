<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Escala extends CI_Model{
 

   public function __construct()
        {
               // Call the CI_Model constructor
                parent::__construct();
                
        }

public function cadastro(){
$em=$this->db->get('empresa')->row();
$this->db->set('data',$this->input->post('data'));
 $this->db->set('horario',$this->input->post('horario')); 
 $this->db->set('obs',$this->input->post('obs'));
 $this->db->set('Funcionario_id',$this->session->userdata('cod'));
$this->db->set('empresa_id',$em->id);
$this->db->set('operacoes_id',$this->input->post('ope'));
$this->db->insert('escala_trabalho');
$this->session->set_flashdata('mensagem', 'Cadastrado com sucesso!');
redirect('Welcome/escala');
}

/*public function atualizar()
{
$em=$this->db->get('empresa');
$this->db->set('data',$this->input->post('data'));
 $this->db->set('horario',$this->input->post('horario')); 
 $this->db->set('obs',$this->input->post('obs'));
 $this->db->set('Funcionario_id',$this->session->userdata('id'));
$this->db->set('empresa_id',$em->id);
$this->db->set('operacoes_id',$this->input->post('ope'));
$this->db->where('id',$this->input->post('id'));
$this->db->update('escala_trabalho');
$this->session->set_flashdata('mensagem', 'Atualizado com sucesso!');
redirect('Welcome/escala');
}*/

public function consulta()
{
if($this->input->post('busca')){
$this->db->select('es.*,f.nome as funcionario,o.descricao');
$this->db->from('escala_trabalho es');
$this->db->join('Funcionario f','f.id=es.Funcionario_id');
$this->db->join('operacoes o','o.id=es.operacoes_id');
$this->db->where('data',$this->input->post('busca'));
return $this->db->get()->result();
}else{
$this->db->select('es.*,f.nome as funcionario,o.descricao');
$this->db->from('escala_trabalho es');
$this->db->join('Funcionario f','f.id=es.Funcionario_id');
$this->db->join('operacoes o','o.id=es.operacoes_id');
return $this->db->get()->result();
}
}




public function aprovar($cod)
{
$this->db->set('status','Aprovado');
$this->db->where('id',$cod);
$this->db->update('escala_trabalho');
redirect('Welcome/consulta_es');
}

public function reprovado($cod)
{
$this->db->set('status','reprovado');
$this->db->where('id',$cod);
$this->db->update('escala_trabalho');
redirect('Welcome/consulta_es');
}


public function consulta_id()
{ $id=$this->session->userdata('cod');
$this->db->select('es.*,f.nome as funcionario,o.descricao');
$this->db->from('escala_trabalho es');
$this->db->join('Funcionario f','f.id=es.Funcionario_id');
$this->db->join('operacoes o','o.id=es.operacoes_id');
$this->db->where('es.Funcionario_id',$id);
return $this->db->get()->result();
}


    }
