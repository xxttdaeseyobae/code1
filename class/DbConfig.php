<?php
class Db_con
{    
    private $_host = 'localhost';
    private $_username = 'root';
    private $_password = '';
    private $_database = 'cp_project';
    
    protected $mysqli;
    
    public function __construct()
    {
        if (!isset($this->mysqli)) {
            
            $this->mysqli = new mysqli($this->_host, $this->_username, $this->_password, $this->_database);
            
            if (!$this->mysqli) {
                echo 'Cannot connect to database server';
                exit;
            }            
        }    
        
        return $this->mysqli;
    }
}
?>