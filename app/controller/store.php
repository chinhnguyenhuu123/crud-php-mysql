<?php
class store extends Dcontroller{ 
    public function __construct(){
        parent::__construct();
        // $data= array();
    }
    public function index(){
     
        $product = $this->load->model('model');
        $data=$product->showcategory();
        $this->load->view('store',$data);
      
    }
    public function deletecartall(){
        session_destroy();
        $this->load->view('cart');
    }
    public function cart(){
  
        if(!isset($_SESSION['cart'])){
            $_SESSION['cart']=[];
        }
        if(isset($_POST['image'])){
            $image=$_POST['image'];
            $name=$_POST['name'];
            $price=$_POST['price'];
            $number=$_POST['number'];
            $money=$_POST['price']*$_POST['number'];
            $tam=0;
            // session_destroy();
            for($i=0;$i<count($_SESSION['cart']);$i++)
            {
                if($_SESSION['cart'][$i][1]==$name)
                {
                    $tam=1;
                    $_SESSION['cart'][$i][3]=(int)$_SESSION['cart'][$i][3]+(int)$number;
                    $_SESSION['cart'][$i][4]=(int)$_SESSION['cart'][$i][4]* (int)$_SESSION['cart'][$i][3];
                    break;
                }     
            }
            if($tam==0){
                $sp=[$image,$name,$price,$number,$money];
                $_SESSION['cart'][]=$sp;
            }    
        } 
        $this->load->view('cart');
    }

}
?>  