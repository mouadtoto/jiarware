<?php
class Tasks extends Controller
{
    private $taskModel;
    public function __construct()
    {
        $this->taskModel = $this->model('Task');
    }

    public function displaytask(){
        $proid = 0;
        if(isset($_GET['proid'])){
            $proid = (int)$_GET['proid'];
        }
        $data = [''];
        $row = $this->taskModel->display($proid);
        $this->view("pages/task" , $data);   
        echo json_encode($row); 
    }
    public function addtask(){
        $data = [
            'name'=>$_POST['name'],
            'desc'=>$_POST['desc'],
            'deadline'=>$_POST['deadline'],
            'pro'=>(int)$_POST['proid'],
            'user'=>(int)$_POST['userid']
        ];
        $this->taskModel->addtask($data);
        $this->view("pages/task" , $data);   
        
    }
}

