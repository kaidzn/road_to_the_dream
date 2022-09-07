<?php
   /* Online PHP Compiler (Interpreter) and Editor */
   class Students{
     public $name;
     public $surname;
     public $id;
     function set_name($name){
         $this->name = $name;
     }
     function set_surname($surname){
         $this->surname = $surname;
     }
     function get_name(){
         return $this->name;
     }
     function get_surname(){
         return $this->surname;
     }
     function get_id(){
         return rand(100,999);
     }
 }
 
 $st1 = new Students();
 $st2 = new Students();
 
 $st1->set_name(readline("Enter name: "));
 $st1->set_surname(readline("Enter surname: "));
  $st2->set_name(readline("Enter name: "));
 $st2->set_surname(readline("Enter surname: "));
 
 echo $st1->get_name()." ";
 echo $st1->get_surname()." and id is 29".$st1->get_id()."\n";
 echo $st2->get_name()." ";
 echo $st2->get_surname()." and id is 29".$st2->get_id()."\n";
 ?>
