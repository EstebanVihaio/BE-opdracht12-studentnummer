<?php
/**
 * Hieronder de studentscontroller
 */

class Students extends Controller
{
    // Properties
    private $studentModel;

    // De constructor voor het aanmaken van een modelobject
    public function __construct()
    {
        $this->studentModel = $this->model('Student');
    }

    public function index()
    {
        var_dump($this->studentModel->getLessons());
        
        $data = [
            'title' => 'Overzicht lessen'
        ];
        $this->view('students/index', $data);
    }

}


