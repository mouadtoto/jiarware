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
   }
