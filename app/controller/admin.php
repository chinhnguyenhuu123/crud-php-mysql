<?php
class admin extends Dcontroller{ 
    public function __construct(){
        parent::__construct();
        // $data= array();
    }
    public function admin(){
        $product = $this->load->model('model');
        $data=$product->showcategory();
        $this->load->view('admin',$data);
    }
    public function delete($id){
        $product = $this->load->model('model');
        $product->delete($id);
        $data=$product->showcategory();
        $this->load->view('admin',$data);
    }
    public function showadd(){
        $product = $this->load->model('model');
        $data=$product->showcategory();
        $this->load->view('add',$data);
    }
    public function add(){
        $categoryid=$_POST['categoryid'];
        $image=$_POST['image'];
        $name=$_POST['nameproduct'];
        $description=$_POST['description'];
        $price=$_POST['price'];

        $sql="INSERT INTO products (categoryid, image, name, description, price)
             VALUES ('$categoryid','$image','$name','$description','$price')";
        $this->load->model('model')->addproduct($sql);
        header("LOCATION: http://localhost:81/table-pdo/");
    }
    public function edit($id){
        $categoryid=$_POST['categoryid'];
        $image=$_POST['image'];
        $name=$_POST['name'];
        $description=$_POST['description'];
        $price=$_POST['price'];
        $idproduct=$_POST['idproduct'];
        echo $categoryid;
        echo $image;
        echo $name;
        echo $description;
        echo $price;
        echo $idproduct;
        $sql="UPDATE products 
             SET categoryid ='$categoryid',image ='$image',name ='$name',description ='$description',price ='$price',idproduct ='$idproduct'
             WHERE idproduct='$id'";
        $this->load->model('model')->update($sql);
        header("LOCATION: http://localhost:81/table-pdo/");
    }
    public function showedit($id){
        $product = $this->load->model('model');
        $data =$product->showproductedit($id);
        $this->load->view('edit',$data);
    
    }
}
?>  