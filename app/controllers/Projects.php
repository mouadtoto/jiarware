<?php
class Projects extends Controller
{
    private $projectModel;
    public function __construct()
    {
        $this->projectModel = $this->model('Project');
    }
    public function addpro()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'name' => $_POST['name'],
                'desc' => $_POST['desc'],
                'deadline' => $_POST['deadline'],
                'owner' => $_POST['userid']
            ];
            $this->projectModel->addpro($data);
            $_SESSION['id']=$data['owner'];
            $data = [
                'name' => '',
                'desc' => '',
                'deadline' => '',
                'owner' => ''
            ];
            // header('location: ../views/pages/dash.php');
            $this->view('pages/dash',$data);
        }
    }
    public function displaypro(){
        $ownerid = 0;
        
        if(isset($_GET['ownerid'])){
            $ownerid = (int)$_GET['ownerid'];
        }   
        $row = $this->projectModel->display($ownerid);
        echo json_encode($row); 
    }
    public function deletepro(){
        $proid = 0;
        if(isset($_GET['proid'])){
            $proid = (int)$_GET['proid'];
        }   
        $data['owner']=$_GET['ownerid'];
        $this->projectModel->delete($proid);
        $_SESSION['id']=$data['owner'];
        $this->view('pages/dash',$data);
    }
    public function editpro(){
        $data= [
            'name'=>$_GET['name'],
            'proid'=>$_GET['proid'],
            'description'=>$_GET['description'],
            'deadline'=>$_GET['deadline'],
            'ownerid'=>$_GET['ownerid']
        ];
        $this->view('pages/editpro',$data);
        $_SESSION['id']=$data['owner'];
        $this->view('pages/dash',$data);
    }
   }
