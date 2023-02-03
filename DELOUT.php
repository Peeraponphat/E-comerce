<?php
    include "connect.php";
    $sql = "SELECT * FROM cart";
    $query = mysqli_query($conn, $sql);
    $T=$data['Id_product'];
    if(empty( $T)){
        echo "<script>window.location='Logout.php'</script>";
    }
    while ($data = mysqli_fetch_array($query)) {

        $sql = "DELETE FROM cart WHERE IDMEMBER=$_COOKIE[ID]";
        if (mysqli_query($conn, $sql)) {
            echo "<script>window.location='Logout1.php'</script>";
        } else {
            echo "Error: " . $sql . ":-" . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
?>