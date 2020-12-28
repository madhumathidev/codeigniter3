<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminUsers extends CI_Controller
{
    // public function __construct(){
    //     $this->obj_roleModel = new AdminUserModel();
    // }
    
    public function index()
	{
		$this->load->view('adminuser/add');
	}
   
    // public function save_login(){
    //     $obj_roleModel = new RoleModel();
    //     $data = $this->request->getPost();
    //     $record = [
    //         'username' => $data['name'],
    //         'password' => $data['description'],
    //         'id' => ($data['id']=='')?0:$data['id']
    //         // 'status' => ($data['status']=='')?0:$data['status'],
    //         // 'is_customer_role' => 0
    //     ];

    //     if($obj_roleModel->save($record)){
    //         $response['status'] = 1;
    //         $response['error'] = '';
    //         $response['message'] = 'Login Successfully!';
    //     }else{
    //         $response['status'] = 0;
    //         $errors = $obj_roleModel->errors();
    //         if(is_array($errors) && count($errors)!=0){
    //             $str_errors = implode("<br/>",array_values($errors));
    //             $response['error'] = $str_errors;
    //         }
    //     }
    //     echo json_encode($response);
    // }



}
?>