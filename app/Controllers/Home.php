<?php

namespace App\Controllers;
use App\Models\MyModel;

class Home extends BaseController
{
    public function index(): string
    {
        return view('Form');
    }
    public function store(){
        $data = [
            'name'=>$this->request->getVar('name'),
            'email'=>$this->request->getVar('email'),
            'password'=>$this->request->getVar('password'),
            'repeat_password'=>$this->request->getVar('repeat_password'),
        ];

        $model = new MyModel();

        $model->insert($data);

        
        echo '<script>alert("Form submitted successfully!");</script>';
        return view('Form');
    }

    public function show(){
        $model = new MyModel();

        $data['records'] = $model->findAll();

        return view('Show', $data);
    }

    public function delete($id=null){
        $model = new MyModel();

        $data['record'] = $model->where('id', $id)->delete();

        return redirect()->to(base_url('Home/show'));    
    }

    public function edit($id=null){
        $model = new MyModel();
        $data['record'] = $model->where('id', $id)->first();
        
        return view('Update', $data);
    }

    public function update(){
        $data = [
            'name'=>$this->request->getVar('name'),
            'email'=>$this->request->getVar('email'),
            'password'=>$this->request->getVar('password'),
            'repeat_password'=>$this->request->getVar('repeat_password'),
        ];
        $id = $this->request->getVar('id');
        $model = new MyModel();

        $model->update($id, $data);
        return redirect()->to(site_url('Home/show'));

        
    }
}
