<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart | View Cart</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="boxcenter">
        <div class="row mb menu"style="width:668px">
            <ul >
                <li><a href="http://localhost:81/table-pdo/store/index">Trang chủ</a></li>
                <li><a href="http://localhost:81/table-pdo/store/cart">Giỏ hàng</a></li>
            </ul>
        </div>
        <div class="row mb " >
            <div class="boxtrai mr">
                <div class="row mb">
                    <h1>GIỎ HÀNG</h1>
                    <table>
                        <tr>
                            <th>STT</th>
                            <th>Hình</th>
                            <th>Tên sản phẩm</th>
                            <th>Đơn giá</th>
                            <th>Số lượng</th>
                            <th>Thành tiền</th>
                        </tr>
                        <?php
                            $tong=0;
                            if(isset($_SESSION['cart'])){
                            foreach($_SESSION['cart'] as $item){
                                $stt=1;
                        ?>
                        <tr>
                            <td><?=$stt?></td>
                            <td><img src="<?=$item['0']?>"></td>
                            <td><?=$item['1']?></td>
                            <td><?=$item['2']?></td>
                            <td><?=$item['3']?></td>
                            <td><?=$item['4']?></td>
                        </tr>
                        <?php
                        $stt+1;
                        $tong+=(int)$item['4'];
                            }
                        }
                        ?>
                        <tr>
                            <th colspan="5">Tổng đơn hàng</th>
                            <th>
                                <div><?=$tong?></div>
                            </th>

                        </tr>
                    </table>
                    <div style="magin-top:10px">
                        <div class="row mb">
                        <a class="dongy">ĐỒNG Ý ĐẶT HÀNG</a>
                        </div>
                        <div class="row mb" > 
                            <a class="dongy" href="http://localhost:81/table-pdo/store/deletecartall">Xóa tất cả</a>
                        </div>
                        <div class="row mb" > 
                            <a class="dongy" href="http://localhost:81/table-pdo/store/index">Tiếp Tục Đặt Hàng</a>
                        </div>
                    </div>
                </div>
            </div>
    </div>

</body>

</html>