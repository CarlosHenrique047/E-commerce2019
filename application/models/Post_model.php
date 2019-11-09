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

   

}

// SELECT COUNT(Cliente) AS ClientePaulo FROM Pedidos WHERE Cliente='Paulo'

?>