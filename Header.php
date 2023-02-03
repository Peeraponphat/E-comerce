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
<style type="text/css">
#navcolor{
  background-color: #87CEFA;
}
</style>
</head>

<body>
  <header class="header_area">
    <div class="main_menu">
    <nav class="navbar navbar-expand-lg navbar-light" id="navcolor">
        <div class="container">
          <a class="navbar-brand logo_h" href=""><img src="img/MEWAIV2.png" alt="" width="150" height="110"></a>
          
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav ml-auto mr-auto">

              <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">SHOP</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="SHOP.php">OUR PRODUCTS</a></li>
                  <li class="nav-item"><a class="nav-link" href="CSHOP.php">CART</a></li>
                </ul>              
              </li>
              <li class="nav-item"><a class="nav-link" href="contact.php">CONTACT SHOP</a></li>
              <li class="nav-item"><a class="nav-link" href="BILL.php">YOUR ORDER</a></li>
              <li class="nav-item"><a class="nav-link" href=""></a></li>
              <li class="nav-item"><a class="nav-link" href="CSHOP.php"><i class="	fas fa-cart-plus"style='font-size:36px;color:#228B22'></i></a></li>
            </ul>
          </div>
          <ul class="nav navbar-nav menu_nav ml-auto mr-auto">
          <li class="nav-item"><a class="nav-link" href=""></a></li>
              </ul>
              <li class="nav-item"><a class="nav-link" href=""></a></li>
              <i class='fas fa-user-circle' style='font-size:48px'></i>
              <ul class="nav navbar-nav menu_nav ml-auto mr-auto">
              <li class="nav-item"><a class="nav-link" href=""></a></li>
              <?php echo  '<li class="nav-item"><a class="nav-link" href="">'.$_COOKIE["User"].'</a></li>'; ?>
              <li class="nav-item"><a class="nav-link" href="DELOUT.php">LOG OUT</a></li>
              </ul>
        </div>
      </nav>
    </div>
  </header>
</body>
</html>