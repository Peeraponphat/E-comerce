<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title></title>
	<link rel="icon" href="img/mewai.png" type="image/png">
	<link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
	<link rel="stylesheet" href="vendors/nice-select/nice-select.css">
	<link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
	<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="css/style.css">

</head>

<body>
	<?php
	include "Header.php";
	?>
  <!--================Cart Area =================-->
  <section class="cart_area">
    <div class="container">
        <div class="cart_inner">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Product</th>
                            <th scope="col">Price</th>
                            <th scope="col">Count</th>
                            <th scope="col">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $value=0;
                        include "connect.php";
                        $sql = "SELECT * FROM cart WHERE IDMEMBER=$_COOKIE[ID]";
                        $query = mysqli_query($conn, $sql);
                        while ($data=mysqli_fetch_array($query)){
                            $TOTAL=$data['Price']*$data['count'];
                            $value=$value+$TOTAL;
                        echo    '<tr>';
                        echo    '<td>';
                        echo        '<div class="media">';
                        echo           ' <div class="media-body">';
                        echo                '<p>'.$data['Product_name'].'</p>';
                        echo            '</div>';
                        echo        '</div>';
                        echo    '</td>';
                        echo   '<td>';
                        echo        '<h5>'.number_format($data['Price'],2).'</h5>';
                        echo   '</td>';
                        echo    '<td>';
                        echo   '<a href="add.php?id_product='.$data['Id_product'].'"class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i>+</a>';
                        echo    '<h5>'.$data['count'].'</h5>';
                        echo   '<a href="wanting.php?id_product='.$data['Id_product'].'"class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i>-</a>';
                        echo    '</td>';
                        echo    '<td>';
                        echo    '<h5>'.number_format($TOTAL,2).'</h5>';
                        echo    '</td>';
                        echo  '</tr>';
                        }
                        ?>
                        
                        <tr class="bottom_button">
                            <td>
                                <a class="button" href="CSHOP.php">Update Cart</a>
                            </td>
                            <td>
                            
                            </td>
                            <td>
                            <a class="button" href="DELCART.php">Delete Cart</a>
                            </td>
                            <td>

                            </td>
                        </tr>
                        <tr>
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>
                                <h5>Cost</h5>
                            </td>
                            <td>
                                <?php echo '<h5>'.number_format($value,2).'</h5>';?>
                            </td>
                        </tr>
                        <tr class="shipping_area">
                            <td class="d-none d-md-block">

                            </td>
                            <td>

                            </td>
                        
                        </tr>
                        <tr class="out_button_area">
                            <td class="d-none-l">

                            </td>
                            <td class="">

                            </td>
                            <td>

                            </td>
                            <td>
                                <div class="checkout_btn_inner d-flex align-items-center">
                                    <a class="gray_btn" href="SHOP.php">Back to shop</a>
                                    <a class="primary-btn ml-2" href="po.php">Proceed to checkout</a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<!--================End Cart Area =================-->
<?php
include "Footer.php";
?>
</body>

</html>