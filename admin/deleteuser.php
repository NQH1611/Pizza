<?php 
    $id = $_GET['id'];
    include "../database/config.php";
    $delete = mysqli_query($conn, "DELETE FROM users WHERE id=$id");
    echo "<script>window.location.href = 'http://localhost/pizza365/admin/adduser.php'</script>";

?>