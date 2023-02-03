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
       <?php 
       $id = $_GET['subject'];
            echo  $id;
            include "connect.php";
            $sql = "SELECT * FROM products";
            $query = mysqli_query($conn, $sql);
            while ($data = mysqli_fetch_array($query)) {
                if ($data['id_product'] == $id) {
                   
                    echo        '<p style="text-align:center"><img src="'. $data['picture'].'" alt="" width="500" height="500" "></p>';
                    echo                '<p style="text-align:center">'.$data['description'].'</p>'; 
                    echo                '<p style="text-align:center">'.$data['product_name'].' </p>';
                    echo                '<p style="text-align:center">'.$data['price'].' Baht</p>';
                    

                }
            }
    
            ?>
    <?php
    include "Footer.php";
    ?>
</body>
</html>    
