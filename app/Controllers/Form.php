<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DataModel;

class Form extends BaseController
{
    protected $request;
    protected $DataModel;
    protected $session;
     public function __construct()
    {
       $db = db_connect();
       $this->DataModel = new DataModel($db); 
       $this->request = \Config\Services::request();  
       
    }
    public function index()
    {
        return view("pages/admin/form");
    }

    public function table()
    {
        return view('pages/admin/table');
    }

     public function createData()
    {
        $data = $this->request->getPost();
        $this->DataModel->addData($data);
        echo 'Data added successfully';
    }

    public function readData()
    {
    $data = $this->DataModel->findAll();
    return $this->response->setJSON($data);
    }

    public function deleteData()
    {
    $id = $this->request->getPost('id');
    $this->DataModel->deleteRow($id);
    return $this->response->setJSON(['status' => 'success', 'message' => 'Row deleted successfully.']);
    }

    public function updateModal()
    {
    // $model = new YourModel();
    $id = $this->request->getPost('id');
    $row = $this->DataModel->find($id);

    $data['row'] = $row;

    }
    
    public function updateData()
    {
    {
      $data = $this->request->getPost();
    }
    $where = array('id' => $this->request->getPost('id'));
    $update = $this->DataModel->updateData($data,$where);

    if($update)
    {
        echo 'Updated';
    }
    else 
    {
        echo 'Error';
    } 
    }

}
