<?php
    include "connect.php";
    $sql = "SELECT * FROM cart";
    $query = mysqli_query($conn, $sql);
    while ($data = mysqli_fetch_array($query)) {
    $sql = "DELETE FROM cart WHERE IDMEMBER=$_COOKIE[ID]";
            if (mysqli_query($conn, $sql)) {
                echo "<script>window.location='CSHOP.php'</script>";
            } else {
                echo "Error: " . $sql . ":-" . mysqli_error($conn);
            }
            mysqli_close($conn);
        }
?>