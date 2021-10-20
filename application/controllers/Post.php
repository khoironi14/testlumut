<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {

function index(){

	$data['post']=$this->db->get('post')->result();
	$data['content']='view_post';
	$this->load->view('dashboard',$data);
}
function create(){


	$data['content']='add_post';
	$this->load->view('dashboard',$data);
}

function store(){

	$data=[
'title'=>$this->input->post('title'),
'content'=>$this->input->post('content'),
'date'=>date('Y-m-d'),
'username'=>$this->input->post('username'),
	];
	$this->db->insert('post',$data);
	redirect('post');
}
function edit($id){
$data['edit']=$this->db->get_where('post',['idpost'=>$id])->row_array();
	$data['content']='edit_post';
	$this->load->view('dashboard',$data);

}

function update(){
$id=$this->input->post('id');
	$data=[
'title'=>$this->input->post('title'),
'content'=>$this->input->post('content'),
'date'=>date('Y-m-d'),
'username'=>$this->input->post('username'),
	];
	$this->db->where('idpost',$id);
	$this->db->update('post',$data);
	redirect('post');
}

function hapus($id){
$this->db->where('idpost',$id);
$this->db->delete('post');
redirect('post');

}

}