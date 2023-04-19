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

     public function addData()
    {
        // $code = $this->request->getPost('code');
        // $es_name = $this->request->getPost('es_name');
        
         $data = $this->request->getPost();
 
         $this->DataModel->addData($data);
        
        echo 'Data added successfully';
    }

    public function table(){
        // $model = new ExampleModel();
        $data = $this->DataModel->getData();
        return view('pages/admin/table', ['table_data' => $data]);

    }
    public function delete_id()
{
    
    $id = $this->request->getVar('id');
   $this->DataModel->deleteData($id);
    return true;
}
public function updateData(){


        // Get form data
        $id = $this->request->getVar('id');
        $code = $this->request->getVar('code');
        $es_name = $this->request->getVar('es_name');

        // Validate form data
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'id' => 'required',
            'code' => 'required',
            'es_name' => 'required'
        ]);
        $isDataValid = $validation->run([
            'id' => $id,
            'code' => $code,
            'es_name' => $es_name
        ]);

        // Update database
        if($isDataValid){
            // $model = new UpdateModel();
            $this->DataModel->update($id, [
                'code' => $code,
                'es_name' => $es_name
            ]);
            return redirect()->to('/');
        }else{
            // Display validation errors
            $data['validation'] = $validation;
            return view('update', $data);
        }
}


}
