<?php
include "connect.php";
$fn = $_POST['firstname'];
$ln = $_POST['lastname'];
$cn = $_POST['company'];
$pn = $_POST['number'];
$cpn = $_POST['compemailany'];
$a1 = $_POST['add1'];
$a2 = $_POST['add2'];
$C = $_POST['city'];
$D= $_POST['District'];
$Z= $_POST['zip'];
$M= $_POST['message'];
$T=$_POST['Total'];
$dat=$_POST['date'];
$Tim=$_POST['time'];
$idM=$_COOKIE['ID'];
$sql = "insert into savebill(Firstname,Lastname,Company,Number,Compemailany,Add1,Add2,City,District,zip,Message,ID_MEMBER,TOTAL,date,time)
        values('$fn','$ln','$cn','$pn','$cpn','$a1','$a2','$C','$D','$Z','$M','$idM','$T','$dat','$Tim')";

        if (mysqli_query($conn, $sql)) {
            echo "<script>window.location='DEL.php'</script>";
        } else {
            echo "Error: " . $sql . ":-" . mysqli_error($conn);
        }
        mysqli_close($conn);
        