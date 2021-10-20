<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	


	public function index()
	{
	
		$this->load->view('login');
			
			
	}
	function validasi(){

		$data=[

			'username'=>$this->input->post('username'),
			'password'=>md5($this->input->post('password'))

		];
		$cek=$this->db->get_where('account',$data);
		if($cek->num_rows()>0){
			$row=$cek->row_array();
			$data = [

							'username'=> $row['username'],
							'role'=> $row['role'],
							'status'=>'login'
						];

						$this->session->set_userdata($data);
			redirect('welcome/home');

		}
	}
	function home(){

		$data['content']='home';
		$this->load->view('dashboard',$data);
	}
		
	function user(){


		$data['user']=$this->db->get("account")->result();
		$data['content']='view_account';
		$this->load->view('dashboard',$data);
	}
	function create(){
$data['content']='add_account';
		$this->load->view('dashboard',$data);

	}
	
function store(){
	$data=[
'username'=>$this->input->post('username'),
'password'=>md5($this->input->post('password')),
'name'=>$this->input->post('name'),
'role'=>$this->input->post('role'),
	];
	$this->db->insert('account',$data);
	redirect('welcome/user');
}

function edit($username){
$data['edit']=$this->db->get_where("account",['username'=>$username])->row_array();
		$data['content']='edit_account';
		$this->load->view('dashboard',$data);

}
function update(){
	$username=$this->input->post('username');
$data=[


'name'=>$this->input->post('name'),
'role'=>$this->input->post('role'),
	];
	$this->db->where('username',$username);
	$this->db->update('account',$data);
	redirect('welcome/user');

}
function hapus($username){
$this->db->where('username',$username);
$this->db->delete('account');
redirect('welcome/user');


}
	
public function logout()
	{
		$this->session->sess_destroy();
		redirect('Welcome');
	}
}
