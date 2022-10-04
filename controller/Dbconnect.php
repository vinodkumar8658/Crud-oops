<?php

class Dbconnect
{
    private $_localhost = 'localhost';
    private $_user = 'root';
    private $_password = '';
    private $_dbname = 'oop';

    protected $connection;

    public function __construct()
    {
        // $con = mysqli_connect("localhost","my_user","my_password","my_db");

        // // Check connection
        // if (mysqli_connect_errno()) {
        // echo "Failed to connect to MySQL: " . mysqli_connect_error();
        // exit();
        // }
          
        if(!isset($this->connection))
        {
            // var_dump(function_exists('mysqli_connect'));exit;
            $this->connection = new mysqli($this->_localhost , $this->_user , $this->_password , $this->_dbname, '3306');
            // echo "heeel000";  exit;
        }
        else {
            echo "aaaaaa";  exit;
        }
        return $this->connection;
    }
}

?>