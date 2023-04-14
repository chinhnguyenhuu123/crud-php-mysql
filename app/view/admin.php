<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Khóa Học Lập Trình Laravel Framework 7.x">
    <meta name="author" content="">
    <title>Admin </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div id="wrapper">
    <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <ul class="nav navbar-nav">
      <?php
        foreach($data as $item){
        ?>
             <li><a href="<?php echo BASE_URL."?idcategory=".$item['categoryid']?>"><?=$item['name']?></a></li>
             
                    
        <?php
       
            }
        ?>
         <a style="margin-left:50px;margin-top:6px" href="<?=BASE_URL."admin/showadd"?>" class="btn btn-primary" style="margin-left:5px">
                        <i class="fa fa-plus"></i> Bổ sung
                    </a>
        <a style="margin-left:50px;margin-top:6px" href="<?=BASE_URL?>" class="btn btn-success" style="margin-left:5px">
            <i class="fa fa-bank"></i> Trang chủ
        </a>
        <a style="margin-left:50px;margin-top:6px" href="<?=BASE_URL."store/index"?>" class="btn btn-warning" style="margin-left:5px">
            <i class="fa fa-caret-square-o-right"></i> Cửa hàng
        </a>
      </ul>
     
      <ul class="nav navbar-nav navbar-right">
      </ul>
    </div>
  </nav>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Product
                            <small>List</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Image</th>
                                <th>Name-Product</th>
                                <th>Price</th>
                                <th>Description</th>
                                <th>Categpryid</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                    $product =new model();
                    if(isset($_GET['idcategory'])){
                        $product=$product->showproductid($_GET['idcategory']);
                    }else{
                        $product=$product->showproduct();
                    }
                    foreach($product as $item){
                    ?>
                        <tr class="odd gradeX" align="center">
                            <td><?=$item['idproduct']?></td>
                            <td><img src="<?=$item['image']?>" alt="" style="width:120px;height:120px"></td>
                            <td><?=$item['name']?></td>
                            <td><?=$item['price']?></td>
                            <td><?=$item['description']?></td>
                            <td><?=$item['categoryid']?></td>
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="<?=BASE_URL."admin/delete/".$item['idproduct']?>"> Delete</a></td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="<?=BASE_URL."admin/showedit/".$item['idproduct']?>">Edit</a></td>
                        </tr>
                <?php
                    }
                ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
</body>

</html>
