<?php

require_once('common.class.php');

class product extends Common
{
	public $commentid,$comment,$date;
	

        public function save()
        {
                 
                   $this->comment = $_POST['comment'];
                   $this->date = $_POST['date'];
                    
                $sql = "insert into comment (comment,date) values ('$this->comment','$this->date')"; 
                return $this->insert($sql);
        }


        public function retrieve()
        {
                $sql = "select * from comment";
                return $this->select($sql);
        }


        public function destroy()
        {
                
        }


        public function edit()
        {
                
        }

       
}




?>