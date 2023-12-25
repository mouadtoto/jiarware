<?php
class Users extends Controller{
    private $userModel;
    public function __construct()
    {
        $this->userModel=$this->model('User');
    }
    public function register(){
        if ($_SERVER['REQUEST_METHOD']=='POST') {
            $_POST = filter_input_array(INPUT_POST , FILTER_SANITIZE_SPECIAL_CHARS);
            $data = [
                'name' =>trim($_POST['fullname']),
                'email'=>trim($_POST['email']),
                'pass'=>trim($_POST['pass'])
            ];
            $data['pass']=password_hash($data['pass'],PASSWORD_BCRYPT);
            if($this->userModel->register($data)){
                
            }else{
                die("something went wrong");
            }
        }

    }
    public function login(){
        if ($_SERVER['REQUEST_METHOD']=='POST') {
          
            $_POST = filter_input_array(INPUT_POST , FILTER_SANITIZE_SPECIAL_CHARS);
            $data = [
                'email' =>trim($_POST['logmail']),
                'pass'=>trim($_POST['logpass'])
            ];
        }
    }
}   