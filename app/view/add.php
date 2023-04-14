<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Khóa Học Lập Trình Laravel Framework 7.x">
    <meta name="author" content="">
    <title>Admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
</head>

<body>

    <div id="wrapper">

        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Product
                            <small>Add</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="<?=BASE_URL."admin/add"?>" method="POST">
                            <div class="form-group">
                                <label>Category id</label>
                                <select name="categoryid" class="form-control">
                                    <?php
                                    foreach($data as $item)
                                    {
                                    ?>
                                    <option value="<?=$item['categoryid']?>"><?=$item['name']?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <input name="image" class="form-control" name="txtCateName" placeholder="Please Enter Category Name" />
                            </div>
                            <div class="form-group">
                                <label>Name-Product</label>
                                <input name="nameproduct" class="form-control" name="txtOrder" placeholder="Please Enter Category Order" />
                            </div>
                            <div class="form-group">
                                <label>Price</label>
                                <input name="price" class="form-control" name="txtOrder" placeholder="Please Enter Category Keywords" />
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <input name="description" class="form-control" name="txtOrder" placeholder="Please Enter Category Keywords" />
                            </div>
                            
                            <button type="submit" class="btn btn-primary">
                                <i class="glyphicon glyphicon-floppy-disk"></i>
                                Add
                            </button>
                            <a href="<?=BASE_URL?>" class="btn btn-warning">
                                Reset
                            </a>
                        <form>  
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    </script>
</body>

</html>
