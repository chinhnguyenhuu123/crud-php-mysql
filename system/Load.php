<?php
class Load{
    public function __construct(){ 
    }
    public function view($filename ,$data=false){
        include ('app/view/'.$filename.'.php');
    }
   
    public function model($filename ){
        include ('app/model/'.$filename.'.php');
        return new $filename();
    }
}
?>   