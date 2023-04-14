<?php
class model extends Config{
    public function __construct(){
        parent::__construct();
    }
    public function showcategory(){
        $stmt = $this->db->prepare("SELECT * FROM categories");
        $stmt->execute();
        $arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if(!$arr) exit('No rows');
        return $arr; 
    }
    public function showproduct(){
        $stmt = $this->db->prepare("SELECT * FROM products");
        $stmt->execute();
        $arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if(!$arr) exit('No rows');
        return $arr; 
    }
    public function showproductcategoryid($id){
        $stmt = $this->db->prepare("SELECT * FROM products WHERE categoryid='$id LIMIT 1'");
        $stmt->execute();
        $arr = $stmt->fetch();
        if(!$arr) exit('No rows');
        return $arr; 
    }
    public function showproductedit($id){
        $stmt = $this->db->prepare("SELECT * FROM products WHERE idproduct='$id'");
        $stmt->execute();
        $arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if(!$arr) exit('No rows');
        return $arr; 
    }
    public function showproductid($id){
        $stmt = $this->db->prepare("SELECT * FROM products WHERE categoryid='$id'");
        $stmt->execute();
        $arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if(!$arr) exit('No rows');
        return $arr; 
    }
    public function delete($id){
        $stmt = $this->db->prepare("DELETE FROM products WHERE idproduct='$id'");
        $stmt->execute();
    }
    public function update($sql){
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
    }
    public function addproduct($sql){
        $stmt = $this->db->prepare($sql); 
        $stmt->execute(); 
    }
}
?>