<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
        <div class="row mb ">
            <div class="boxtrai mr">
            <div class="row mb menu">
            <ul>
                <li><a href="http://localhost:81/table-pdo/store/index">Trang chủ</a></li>
                <li><a href="http://localhost:81/table-pdo/store/cart">Giỏ hàng</a></li>
            </ul>
            </div>
                <div class="row" style="magrin-top:200px">
                    <?php
                        $product =new model();
                        if(isset($_GET['idcategory'])){
                            $product=$product->showproductid($_GET['idcategory']);
                        }else{
                            $product=$product->showproduct();
                        }
                        foreach($product as $item){
                    ?>
                    <div class="boxsp mr">
                        <div class="row img"><img src="<?=$item['image']?>" alt=""></div>
                        <p>Giá:<span><?=$item['price']?></span></p>
                        <a href="#"><?=$item['name']?></a></br>
                        <form form action="<?=BASE_URL."store/cart"?>" method="POST">
                        <input type="number" name="number" min="1" max="10" value="1">
                        <input type="hidden" name="price" min="1" max="10" value="<?=$item['price']?>">
                        <input type="hidden" name="image" min="1" max="10" value="<?=$item['image']?>">
                        <input type="hidden" name="idproduct" min="1" max="10" value="<?=$item['idproduct']?>">
                        <input type="hidden" name="categoryid" min="1" max="10" value="<?=$item['categoryid']?>">
                        <input type="hidden" name="name" min="1" max="10" value="<?=$item['name']?>">
                        <input type="hidden" name="description" min="1" max="10" value="<?=$item['description']?>">
                        <button type="submit">Đặt hàng</button>
                        </form>
                    </div>
                    <?php 
                        }
                    ?>
                </div>
            </div>
            <div class="boxphai">
                <div class="row mb ">
                <div class="boxtitle">DANH MỤC</div>
                    <div class="boxcontent2 menudoc">
                        
                        <ul>
                        <?php
                        foreach($data as $item){
                        ?>
                            <li>
                                <a href="<?=BASE_URL."store/index?idcategory=".$item['categoryid']?>"><?=$item['name']?></a>
                            </li>
                            
                        <?php
                        }
                        ?>
                        </ul>
                 
                    </div>
                </div>  
    </div>

</body>

</html>