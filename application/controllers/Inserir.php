<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inserir extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		// $this->load->model('nome_do_model');
	}


	public function index()
	{
		$this->load->view('home_page.php');
    }
    
    public function cadastrar()
	{
		$this->load->view('signup_page.php');
    }
    
    public function salvar()
	{
        $this->load->model('Post_model');
        $cpf = $_POST['cpf'];
        $nome_completo = $_POST['username'];
        $email = $_POST['email'];
        $senha = $_POST['password'];
        $idade = $_POST['idade'];
        $endereco = $_POST['endereco'];
        $preferencias = $_POST['preferencias'];
        $sexo = $_POST['sexo'];

        $this->post_model->cpf = $cpf;
        $this->post_model->username = $nome_completo;
        $this->post_model->email = $email;
        $this->post_model->password = $senha;
        $this->post_model->idade = $idade;
        $this->post_model->endereco = $endereco;
        $this->post_model->preferencias = $preferencias;
        $this->post_model->sexo = $sexo;

        $this->post_model->inserir();
    }

}
