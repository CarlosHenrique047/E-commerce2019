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
		$this->load->model('Post_model');
		$users = $this->Post_model->usuarios_list();
		$data["users"] = $users;
		$this->load->view('consultar_usuarios.php', $data);
	}

	public function estatisticas(){
		$this->load->model('Post_model');
		$qtdH = $this->Post_model->qtdhomem();
		$qtdM = $this->Post_model->qtdmulher();
		$qtdLivros = $this->Post_model->qtdLivros();
		$qtdJogos = $this->Post_model->qtdJogos();
		$qtdMoveis = $this->Post_model->qtdMoveis();
		$qtdEletrodomesticos = $this->Post_model->qtdEletrodomesticos();
		$qtdBrinquedos = $this->Post_model->qtdBrinquedos();
		$qtdInformatica = $this->Post_model->qtdInformatica();

		$data["qtdH"] = $qtdH;
		$data["qtdM"] = $qtdM;
		$data["qtdLivros"] = $qtdLivros;
		$data["qtdJogos"] = $qtdJogos;
		$data["qtdMoveis"] = $qtdMoveis;
		$data["qtdEletrodomesticos"] = $qtdEletrodomesticos;
		$data["qtdBrinquedos"] = $qtdBrinquedos;
		$data["qtdInformatica"] = $qtdInformatica;

		$idades = $this->Post_model->idade();
		$data["idades"] = $idades;
	

		$this->load->view('estatisticas.php', $data);
	}

	public function salvar()
	{
        $this->load->model('Post_model');
        $cpf = $_POST["cpf"];
        $nome_completo = $_POST["nome_completo"];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $idade = $_POST['idade'];
        $endereco = $_POST['endereco'];
        $preferencias = "todos";
		$sexu = $_POST['sexo'];

		if($sexu == '1'){
			$sexo = "Homem";
		}else{
			$sexo = "Mulher";
		}
		$is_admin = 0;
		
		$criptografada = base64_encode($senha);
		//base64_decode($criptografada);  para descriptografar a senha

        $this->Post_model->cpf = $cpf;
        $this->Post_model->nome_completo = $nome_completo;
        $this->Post_model->email = $email;
        $this->Post_model->senha = $criptografada;
        $this->Post_model->idade = $idade;
        $this->Post_model->endereco = $endereco;
        $this->Post_model->preferencias = $preferencias;
		$this->Post_model->sexo = $sexo;
		$this->Post_model->is_admin = $is_admin;

		$this->Post_model->inserir();

		//adicionar no ultimo id adicionado as preferencias!!!!!

		$ultimoid = $this->db->insert_id();
		
		$pref = $_POST["preferencias"];
		$this->Post_model->id_user = $ultimoid;
		for ($i=0; $i < count($pref); $i++) { 
			$id_pref = $pref[$i];
			$this->Post_model->id_pref = $id_pref;
			
			$this->Post_model->inserir_pref();
		}
		redirect('consultar');
		
	}

	public function deletar($id) {
		$this->load->model('Post_model');
		if ($this->Post_model->deletar($id)) {
			redirect('consultar');
		} else {
			log_message('error', 'Erro ao deletar...');
		}
	}

	public function editar($id)  {
		
		$this->load->model('Post_model');
		$data['edit_users'] = $this->Post_model->editar($id);
	 
		$this->load->view('editar', $data);
	}

	public function alterar() {
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('', '');

		$validations = array(
			array(
				'field' => 'nome_completo',
				'label' => 'Nome',
				'rules' => 'required|min_length[30]|max_length[80]'
			),
			array(
				'field' => 'email',
				'label' => 'E-mail',
				'rules' => 'trim|required|valid_email|max_length[50]'
			),
			array(
				'field' => 'endereco',
				'label' => 'Endereco',
				'rules' => 'required|min_length[10]|max_length[150]'
			)
		);
		$this->form_validation->set_rules($validations);
		if ($this->form_validation->run() == FALSE) {
			$this->editar($this->input->post('id_usuario'));
		} else {
			$data['id_usuario'] = $this->input->post('id_usuario');
			$data['nome_completo'] = $this->input->post('nome_completo');
			$data['email'] = $this->input->post('email');
			$data['endereco'] = $this->input->post('endereco');
	 
			$this->load->model('Post_model');
			if ($this->Post_model->alterar($data)) {
				redirect('consultar');
			} else {
				log_message('error', 'Erro na alteração...');
				redirect('consultar');
			}
		}
	}

	public function recuperar_senha(){
		$this->load->model('Post_model');
		$this->load->library('form_validation');
		$cpf = $_POST['cpf'];
		$email = $_POST['email'];

		$senha = $this->Post_model->recuperar_senha($cpf, $email);
		
		if($senha != false){
			$decodificada = base64_decode($senha);
			echo "A senha para este cpf e: ".$decodificada;
		}else{
			echo "Dados nao coincidem no banco!";
		}
		
	}

	public function recupera_senha(){
		$this->load->view('recupera_senha.php');

		
	}

	public function login_site(){
		$this->load->model('Post_model');
		$this->load->library('form_validation');
		$cpf = $_POST['cpf'];
		$senha = $_POST['senha'];
		$criptografada = base64_encode($senha);


		$valido = $this->Post_model->login($cpf, $criptografada);
		$is_admin = $this->Post_model->is_adm($cpf, $criptografada);
		
		if($valido != false){
			if($is_admin == true){
				$logado = true;
				redirect('menu_admin');
			}else{
				$user_logado = true;
				redirect('editar');
			}
			
		}else{
			echo "Usuario ou Senha nao estao corretos!";
		}
		
	}
}
