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
        $data = [];
        $this->view("pages/task" , $data);   
        $row = $this->taskModel->display($proid);
        echo json_encode($row); 
    }
}

