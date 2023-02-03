<?php
    $id = $_GET['id_product'];
    include "connect.php";
    $sql = "SELECT * FROM products";
    $query = mysqli_query($conn, $sql);
    while ($data = mysqli_fetch_array($query)) {
        if ($data['id_product'] == $id) {
            $sid = $id;
            $PN = $data['product_name'];
            $P = $data['price'];
            $D = $data['description'];
            $C=1;
            $ID=$_COOKIE["ID"];
            $sql = "insert into cart(Id_product,Product_name,Price,Description,count,IDMEMBER)	
                        values('$sid','$PN','$P','$D','$C','$ID')";
            if (mysqli_query($conn, $sql)) {
                echo "<script>alert('Successfully added to cart')</script>";
                echo "<script>window.location='SHOP.php'</script>";
            } else {
                echo "<script>alert('Added to cart')</script>";
                echo "<script>window.location='SHOP.php'</script>";
            }
            mysqli_close($conn);
        }
    }
?>