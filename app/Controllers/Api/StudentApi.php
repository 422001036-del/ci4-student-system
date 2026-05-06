<?php
namespace App\Controllers\Api;
use CodeIgniter\RESTful\ResourceController;
use App\Models\StudentModel;

class StudentApi extends ResourceController {
    protected $format = 'json';
    public function index() {
        $model = new StudentModel();
        return $this->respond($model->findAll());
    }
}