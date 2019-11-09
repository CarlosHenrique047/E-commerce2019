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

    public function __construct(){
        parent::__construct();
    }

    public function inserir(){
        $dados = array('cpf' => $this->cpf, 'nome_completo' => $this->nome_completo, 'email' => $this->email, 'senha' => $this->senha, 'idade' => $this->idade, 'endereco' => $this->endereco, 'preferencias' => $this->preferencias, 'sexo' => $this->sexo);
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
        $query = $this->db->get('usuarios');

        foreach ($query->result() as $row)
        {
                echo $row->title;
        }
        
    }

   

}

// SELECT COUNT(Cliente) AS ClientePaulo FROM Pedidos WHERE Cliente='Paulo'

?>