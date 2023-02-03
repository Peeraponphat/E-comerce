<?php
include "connect.php";
$USER = $_POST['name'];
$EMAIL = $_POST['email'];
$PASS = $_POST['password'];
$CONPASS = $_POST['confirmPassword'];
$PHONENUM = $_POST['Telephone'];

echo $USER, $EMAIL, $PASS;

$sql = "insert into conect_web(USER,EMAIL,PASS,CONPASS,PHONENUM)
        values('$USER','$EMAIL','$PASS','$CONPASS','$PHONENUM')";
        
if (mysqli_query($conn, $sql)) {
    echo "<script>alert('บันทึกข้อมูลของท่านเรียบร้อยแล้ว')</script>";
    echo "<script>window.location='Login.php'</script>";
} else {
    echo "Error: " . $sql . ":-" . mysqli_error($conn);
}
mysqli_close($conn);
