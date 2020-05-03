<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
  {

	public function __construct()
		  {
	        parent::__construct();
	        $this->load->model('User_Model');
      }

	public function index()
    	{
         $this->load->view('home');
      }


  public function insert_page()
      {
          $this->load->view('form/insert_form');
      }

     

  public function insert_new()
      {
        $data = $this->input->post();
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Full Name', 'required|alpha');
        $this->form_validation->set_rules('email', 'Email', 'required');

        if ($this->form_validation->run() == TRUE)
                {
                    $this->User_Model->insert($data);
                    redirect(base_url() . '/home/success');
                }
            else
                {
                   $this->load->view('form/insert_form');
                }

      }

  public function fetch_data()
      {
          $data['users'] = $this->User_Model->fetch_all();

          $this->load->view('page/list_page', $data);
      }

  public function success()
     {
        $data['users'] = $this->User_Model->fetch_all();
        $this->load->view('page/list_page', $data);
     }

  public function update_data($id)
     {

          $data['user_data'] = $this->User_Model->fetch_data($id);
          $data['users'] = $this->User_Model->fetch_all();
          $this->load->view('form/update_form', $data);
      
      }  

  public function update()
    {
        $data['name'] = $this->input->post('name');
        $data['email'] = $this->input->post('email');
        $hidden_id['id'] = $this->input->post('id');
        $id = $hidden_id['id'];

        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Full Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');

        if ($this->form_validation->run() == TRUE)
                {
                   //die('test again');
                    $this->User_Model->update($id, $data);
                    redirect(base_url() . '/home/update_msg');
                }
            else
                {
                    $data['user_data'] = $this->User_Model->fetch_data($id);
                  $this->load->view('form/update_form', $data);
                  
                }

      }

  public function update_msg()
     {
       $data['users'] = $this->User_Model->fetch_all();
       $this->load->view('page/list_page', $data);
     }

   public function delete_data()
      {
         $id = $this->uri->segment(3);
         $this->User_Model->delete_data($id);
         redirect(base_url() . '/home/delete_msg');
      }  

      public function delete_msg()
      {
        $data['users'] = $this->User_Model->fetch_all();
        $this->load->view('page/list_page', $data);
      }

      public function login()
        {
            $data['title'] = "Login";
            $this->load->view('page/login', $data);
        }

      public function login_save()
         {
            $uemail = $this->input->post('email');
            $upass = $this->input->post('pass');

            $this->load->library('form_validation');
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('pass', 'Password', 'required');
        
            if ($this->form_validation->run() == TRUE)
               {
                  
                 if($this->User_Model->log_in($uemail, $upass))
                    {
                        $session_data = array('uemail' => $uemail);  
                       
                        $this->session->set_userdata($session_data);
                        redirect(base_url(). 'home/dashboard');          
                    }
                 else
                    {
                        $this->session->set_flashdata('error', 'Email or password is incorrect');
                        redirect(base_url(). 'home/login');

                    }  
                }
          else
              {
                 $this->login();
              }
 
         }
       
      public function dashboard()
          {
              if($this->session->userdata('uemail') != '')
                 {
                        echo "<h1 style = 'color: green;'>Welcome ".$this->session->userdata('uemail')."</h1>";
                        echo '<label><a href = "'.base_url().'home/logout">Logout</a></label>';
                 }
            else 
                {
                  redirect(base_url(). 'home/login');
                }   
          }  
          
          public function logout()
          {
              $this->session->unset_userdata('uemail');
              redirect(base_url(). 'home/login');

          }

  }
