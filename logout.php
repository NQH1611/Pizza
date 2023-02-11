<?php session_start(); 
 
if (isset($_SESSION['username'])){
    unset($_SESSION['username']); // xóa session login
}
echo "<script> window.location.href = 'http://localhost/pizza365/index.php'</script>";
?>