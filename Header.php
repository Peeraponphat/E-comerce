<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title></title>
  <link rel="icon" href="img/mewai.png" type="image/png">
  <link rel="stylesheet" href="css/MY.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<nav class="navbar">
  <div class="container">

    <div class="navbar-header">
      <button class="navbar-toggler" data-toggle="open-navbar1">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a href="#">
        <h4><img src="img/MEWAIV2.png" alt="" width="100" height="70"></h4>
      </a>
    </div>

    <div class="navbar-menu" id="open-navbar1">
      <ul class="navbar-nav">
        <li class="navbar-dropdown">
          <a href="#" class="dropdown-toggler" data-dropdown="my-dropdown-id">
          SHOP<i class="fa fa-angle-down"></i>
          </a>
          <ul class="dropdown" id="my-dropdown-id">
            <li><a href="SHOP.php">OUR PRODUCTS</a></li>
            <li><a href="CSHOP.php">YOUR ORDER</a></li>
          </ul>
        </li>
        <li><a href="contact.php">CONTACT SHOP</a></li>
        <li><a href="BILL.php">YOUR ORDER</a></li>
        <?php echo  ' <li><a href="#">'.$_COOKIE["User"].'</a></li>'; ?>
        <li><a href="DELOUT.php">SIGN OUT</a></li>
      </ul>
    </div>
  </div>
</nav>
  <script src="js/my.js"></script>
</body>
</html>