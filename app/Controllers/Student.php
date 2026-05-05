<?php
namespace App\Controllers;
use App\Models\StudentModel;

class Student extends BaseController
{
    public function index()
    {
        $model = new StudentModel();
        $keyword = $this->request->getGet('search');

        if ($keyword) {
            $data['students'] = $model->search($keyword);
        } else {
            $data['students'] = $model->findAll();
        }

        return view('student_view', $data);
    }

        public function store()
    {
        $model = new \App\Models\StudentModel();
        $model->save([
            'name'   => $this->request->getPost('name'),
            'email'  => $this->request->getPost('email'),
            'course' => $this->request->getPost('course'),
        ]);
        return redirect()->to(base_url('student'));
    }

    public function delete($id)
    {
        $model = new \App\Models\StudentModel();
        $model->delete($id);
        return redirect()->to(base_url('student'));
    }
}