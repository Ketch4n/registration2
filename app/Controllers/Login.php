<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Login extends BaseController
{   
    protected $request;
    protected $UserModel;
    protected $session;
    

    public function __construct(){
        $db = db_connect();
        $this->request = \Config\Services::request();
        $this->UserModel = new UserModel($db);
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        return view("auth/login");
    }


    public function verify(){
        
        $username = $this->request->getPost('email');
        $pass = $this->request->getPost('password');
        
        $where = array(

            'username' => $username
        );
        $verify = $this->UserModel->check_username('user',$where);

        if($verify > 0){

            $user_data = $this->UserModel->get_user_data('user',$where)[0];

            if($pass == $user_data->password){
                    
                 $data['response'] = true;
                 $data['message'] = 'Success'; 

                 $user_data = array(
                    'user_id' => $user_data->id,
                    'user_name' => $user_data->username,
                    'isLoggedin' => True
                );

                
                $this->session->set($user_data);


            }else {
                $data['response'] = true;
                $data['message'] = 'Invalid Password'; 
            }
           

        }else {
            $data['response'] = false;
            $data['message'] = 'Account not found'; 
        }
        

        echo json_encode($data);
        
        
    }
    public function signout(){
       
            $array_items = ['user_id','user_name','isLoggedin'];
            $this->session->remove($array_items);
            return redirect()->to('');
        
    }
   
}

