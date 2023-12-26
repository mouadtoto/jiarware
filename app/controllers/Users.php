<?php
class Users extends Controller
{
    private $userModel;
    public function __construct()
    {
        $this->userModel = $this->model('User');
    }
    public function register()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS);
            $data = [
                'name' => trim($_POST['fullname']),
                'email' => trim($_POST['email']),
                'pass' => trim($_POST['pass'])
            ];
            $data['pass'] = password_hash($data['pass'], PASSWORD_BCRYPT);
            
            if ($this->userModel->register($data)) {
                if($this->userModel->findUserbyEmail($data['email'])){
                    echo "email already exists ";
                }
                header('location:../public/index.php');
            } else {
                die("something went wrong");
            }
        }
    }
    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS);
            $data = [
                'email' => trim($_POST['logmail']),
                'pass' => trim($_POST['logpass'])
            ];
            $logged = $this->userModel->login($data);
            if ($logged) {
                $this->session($logged);
            }
        }
        $check=$this->isLoggedIn();
        if($check){
            $this->view('pages/dash',$data);
        }else{
            $data = [
                'email' => '',
                'pass' => ''
            ];
            $this->view('pages/index',$data);
        }

    }
    public function session($row){
        session_start();
        $_SESSION['id']=$row['user_id'];
        $_SESSION['email']=$row['user_email'];
        $_SESSION['name']=$row['user_fullname'];
    }
    public function logout(){
        session_start();
        unset($_SESSION['user_id']);
        unset($_SESSION['user_email']);
        unset($_SESSION['user_name']);
        session_destroy();
        $data = [
            'email'=> '',
            'pass'=>''
        ];
        $this->view('pages/index',$data);
      }
    public function isLoggedIn(){
    if(isset($_SESSION['id'])){
          return true;
        } else {
          return false;
        }
      }
}
