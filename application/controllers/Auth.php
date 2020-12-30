<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{ 
    function __construct() { 
        parent::__construct(); 
        // Load form validation ibrary & user model 
        //$this->load->library('form_validation'); 
        $this->load->model('model_auth'); 
        

         
        // User login status 
        $this->isUserLoggedIn = $this->session->userdata('isUserLoggedIn'); 
    } 

    public function index(){ 
        if($this->isUserLoggedIn){ 
            redirect('dashboard', 'refresh');
        }else{ 
            //redirect('users/login'); 
            $this->load->view('users/login');
        } 
    } 

    public function login(){ 
        $data = array(); 
         
        // Get messages from the session 
        if($this->session->userdata('success_msg')){ 
            $data['success_msg'] = $this->session->userdata('success_msg'); 
            $this->session->unset_userdata('success_msg'); 
        } 
        if($this->session->userdata('error_msg')){ 
            $data['error_msg'] = $this->session->userdata('error_msg'); 
            $this->session->unset_userdata('error_msg'); 
        } 
         
        // If login request submitted 
        if($this->input->post('submit')){ 
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email'); 
            $this->form_validation->set_rules('password', 'password', 'required'); 
             
            if($this->form_validation->run() == true){ 
                $con = array( 
                    'returnType' => 'single', 
                    'conditions' => array( 
                        'email'=> $this->input->post('email'), 
                        // 'password' => md5($this->input->post('password')), 
                        'password' => $this->input->post('password'), 
                        'status' => 1 
                    ) 
                ); 
                $checkLogin = $this->model_auth->getRows($con); 
                if($checkLogin){ 
                    $this->session->set_userdata('isUserLoggedIn', TRUE); 
                    $this->session->set_userdata('userId', $checkLogin['id']); 
                    $this->load->helper('url');
                    
                    redirect('dashboard', 'refresh');

                 

                }else{ 
                    $data['error_msg'] = 'Wrong email or password, please try again.'; 
                } 
            }else{ 
                $data['error_msg'] = 'Please fill all the mandatory fields.'; 
            } 
        } 
         
        // Load view 
      
     $this->load->view('users/login', $data); 
       
    } 















}
?>