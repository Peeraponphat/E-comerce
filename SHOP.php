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


<!-- ================ trending product section start ================= -->  
<section class="section-margin calc-60px">
      <div class="container">
        <div class="section-intro pb-60px">
          <p>Popular Item in the market</p>
          <h2>Healthy <span class="section-intro__style">Products</span></h2>
        </div>
        <div class="row">
        <?php   
        include "connect.php";
		$sql = "SELECT * FROM products WHERE id_product<9";
        $query = mysqli_query($conn, $sql);
        while ($data=mysqli_fetch_array($query)){	
            echo  '<div class="col-md-6 col-lg-4 col-xl-3">';
            echo    '<div class="card text-center card-product">';
            echo      '<div class="card-product__img">';
            echo        '<img class="card-img" src="'. $data['picture'].'" alt="">';
            echo        '<ul class="card-product__imgOverlay">';
            echo          '<li>
                          <form action="info.php?" method="get">
                          <button name="subject" type="submit" value="'.$data['id_product'].'"><i class="ti-search"></i></button>
                          </form>
                          </li>';
            echo          '<a href="CART.php?id_product='.$data['id_product'].'"class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>';
            echo          '<li><button><i class="ti-heart"></i></button></li>';
            echo        '</ul>';
            echo      '</div>';
            echo      '<div class="card-body">';
            echo        '<p>PAD</p>';
            echo       '<h4 class="card-product__title"><a href="">'.$data['product_name'] .'</a></h4>';
            echo        '<p class="card-product__price">'.number_format($data['price'],2).'</p>';
            echo      '</div>';
            echo    '</div>';
            echo  '</div>'; 
        }
        ?>
       </div>
      </div>
    </section>
    <section class="section-margin calc-60px">
      <div class="container">
        <div class="section-intro pb-60px">
          <p>Popular Item in the market</p>
          <h2>Fashion <span class="section-intro__style">Products</span></h2>
        </div>
        <div class="row">
        <?php   
		$sql = "SELECT * FROM products WHERE id_product >8";
        $query = mysqli_query($conn, $sql);
        while ($data=mysqli_fetch_array($query)){	
            echo  '<div class="col-md-6 col-lg-4 col-xl-3">';
            echo    '<div class="card text-center card-product">';
            echo      '<div class="card-product__img">';
            echo        '<img class="card-img" src="'. $data['picture'].'" alt="">';
            echo        '<ul class="card-product__imgOverlay">';
            echo          '<li>                          
                          <form action="info.php?" method="get">
                          <button name="subject" type="submit" value="'.$data['id_product'].'"><i class="ti-search"></i></button>
                          </form></li>';
            echo          '<a href="CART.php?id_product='.$data['id_product'].'"class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>';
            echo          '<li><button><i class="ti-heart"></i></button></li>';
            echo        '</ul>';
            echo      '</div>';
            echo      '<div class="card-body">';
            echo        '<p>PAD</p>';
            echo       '<h4 class="card-product__title"><a href="">'.$data['product_name'] .'</a></h4>';
            echo        '<p class="card-product__price">'.number_format($data['price'],2).'</p>';
            echo      '</div>';
            echo    '</div>';
            echo  '</div>'; 
        }
        ?>
       </div>
      </div>
    </section>

    <?php
    include "Footer.php";
    ?>
</body>
</html>    
