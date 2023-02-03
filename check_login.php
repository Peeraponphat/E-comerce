<!DOCTYPE html>
<html lang="en">
<head></head>
<body>
<?php 
session_start();
include "connect.php";
$USER=$_POST["User"];
$PASS=$_POST["password"];
if(isset($_POST['btn_login'])){
if(empty($USER)){
    echo "<script>alert('Your email is required') </script>";
    echo "<script>window.location='login.php'</script>";
    }
    if(empty($PASS)){
    echo '<script> alert("Your password is required") </script>';
    echo "<script>window.location='login.php'</script>";
    }
    if(!empty($USER) and !empty($PASS)){
        $sql = "SELECT * FROM conect_web WHERE USER = '$USER' and PASS = '$PASS'";
        $query = mysqli_query($conn,$sql);
        $data = mysqli_fetch_array($query);
        if(mysqli_num_rows($query)==1){
            setcookie("User",$data['USER'],time()+3600*24*356);
            setcookie("ID",$data['id_member'],time()+3600*24*356);
            echo "<script>window.location='SHOP.php'</script>";

            }else{
            echo "<script>alert('Your username or password is incorrect')</script>";
            echo "<script>window.location='Login.php'</script>";
                
            }
    }
}
?>
</body>
</html>