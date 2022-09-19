<?php
/**
 *  Student model hoort bij de students controller 
 *
 */

 class Student 
 {
    // Properties
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getLessons()
    {
        $this->db->query(
            'SELECT lessen.*, leerling.* 
             FROM lessen 
             INNER JOIN leerling 
             ON leerling.Id = lessen.leerling 
             AND leerling.Id = 3'
        );
        $result = $this->db->resultSet();
        return $result;
    }
 }