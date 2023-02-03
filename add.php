<?php
    $id = $_GET['id_product'];
    include "connect.php";
    $sql = "SELECT * FROM cart";
    $query = mysqli_query($conn, $sql);
    while ($data = mysqli_fetch_array($query)) {
        if ($data['Id_product'] == $id) {
            $C=$data['count']+1;
            $sql = "UPDATE cart SET count = '{$C}'WHERE( Id_product = '{$id}' ) ";

            if (mysqli_query($conn, $sql)) {
                echo "<script>window.location='CSHOP.php'</script>";
            } else {
                echo "Error: " . $sql . ":-" . mysqli_error($conn);
            }
            mysqli_close($conn);
        }
    }
?>