<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		// $this->load->model('nome_do_model');
	}

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
	public function index()
	{
		$this->load->view('home_page.php');
	}

	public function login(){
		$this->load->view('menu_admin.php');
	}

	public function signup(){
		$this->load->view('signup_page.php');
	}

	public function consultar(){
		$this->load->view('consultar_usuarios.php');
	}

	public function estatisticas(){
		$this->load->view('estatisticas.php');
	}

	public function salvar()
	{
        $this->load->model('Post_model');
        $cpf = $_POST["cpf"];
        $nome_completo = $_POST["username"];
        $email = $_POST['email'];
        $senha = $_POST['password'];
        $idade = $_POST['idade'];
        $endereco = $_POST['endereco'];
        $preferencias = "todos";
        $sexo = $_POST['sexo'];

        $this->post_model->cpf = $cpf;
        $this->post_model->username = $nome_completo;
        $this->post_model->email = $email;
        $this->post_model->password = $senha;
        $this->post_model->idade = $idade;
        $this->post_model->endereco = $endereco;
        $this->post_model->preferencias = $preferencias;
        $this->post_model->sexo = $sexo;

        $this->Post_model->inserir();
    }
}
