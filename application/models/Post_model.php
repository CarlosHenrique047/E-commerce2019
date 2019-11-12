<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Post_model extends CI_Model{
    public $id_usuario;
    public $cpf;
    public $nome_completo;
    public $email;
    public $senha;
    public $idade;
    public $endereco;
    public $preferencias;
    public $sexo;
    public $is_admin;
    public $id_pref;
    public $id_user;

    public function __construct(){
        parent::__construct();
    }

    public function inserir(){
        $dados = array('cpf' => $this->cpf, 'nome_completo' => $this->nome_completo, 'email' => $this->email, 'senha' => $this->senha, 'idade' => $this->idade, 'endereco' => $this->endereco, 'preferencias' => $this->preferencias, 'sexo' => $this->sexo, 'is_admin' => $this->is_admin);
        return $this->db->insert('usuarios', $dados);
    }

    public function qtdhomem(){
        $this->db->select('count(*)');
        $this->db->from('usuarios');
        $this->db->where('sexo','Homem');
        $query = $this->db->count_all_results();
        return $query;
    }

    public function qtdmulher(){
        $this->db->select('count(*)');
        $this->db->from('usuarios');
        $this->db->where('sexo','Mulher');
        $query = $this->db->count_all_results();
        return $query;
    }

    public function idade(){
        $this->db->select_sum('idade', 'idadetotal');
        $query = $this->db->get('usuarios');
        $result = $query->result();

        
        $idade = $this->db->get('usuarios');
        $numidades = $idade->num_rows();

        return ($result[0]->idadetotal / $numidades);
    }

    public function usuarios_list(){
        $this->db->from('usuarios');
        $this->db->order_by("nome_completo", "asc");
        $query = $this->db->get(); 
        return $query;
    }

    function deletar($id) {
        $this->db->where('id_usuario', $id);
        return $this->db->delete('usuarios');
    }
   

    function editar($id) {
        
        $this->db->where('id_usuario', $id);
        return $this->db->get('usuarios')->result();
    }

    function alterar($data) {
        $this->db->where('id_usuario', $data['id_usuario']);
        $this->db->set($data);
        return $this->db->update('usuarios');
    }

    public function inserir_pref(){
        $dados = array('id_user' => $this->id_user, 'id_pref' => $this->id_pref);
        return $this->db->insert('pref_user', $dados);
    }

    public function qtdLivros(){
        $this->db->select('count(*)');
        $this->db->from('pref_user');
        $this->db->where('id_pref','1');
        $query = $this->db->count_all_results();
        return $query;
    }
    public function qtdJogos(){
        $this->db->select('count(*)');
        $this->db->from('pref_user');
        $this->db->where('id_pref','2');
        $query = $this->db->count_all_results();
        return $query;
    }
    public function qtdMoveis(){
        $this->db->select('count(*)');
        $this->db->from('pref_user');
        $this->db->where('id_pref','3');
        $query = $this->db->count_all_results();
        return $query;
    }
    public function qtdEletrodomesticos(){
        $this->db->select('count(*)');
        $this->db->from('pref_user');
        $this->db->where('id_pref','4');
        $query = $this->db->count_all_results();
        return $query;
    }
    public function qtdBrinquedos(){
        $this->db->select('count(*)');
        $this->db->from('pref_user');
        $this->db->where('id_pref','5');
        $query = $this->db->count_all_results();
        return $query;
    }
    public function qtdInformatica(){
        $this->db->select('count(*)');
        $this->db->from('pref_user');
        $this->db->where('id_pref','6');
        $query = $this->db->count_all_results();
        return $query;
    }
}



?>