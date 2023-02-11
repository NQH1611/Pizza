<?php ?>
<form action="" method="POST" id="form-send-data">
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" name="txtusername" id="inp-username" placeholder="Nhập username">
        <span class="form-message"></span>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="text" class="form-control" name="txtpassadd" id="inp-password" placeholder="Nhập password">
        <span class="form-message"></span>
    </div>
    <div class="form-group">
        <label for="permission">Số Điện thoại</label>
        <select name="select-permission" class="form-control" id="select-permission">
            <option value="1">Admin</option>
            <option value="0">User</option>
        </select>
        <span class="form-message"></span>
    </div>
    <button id="btn-send-order" name="guidataadduser" class="btn btn-orange w-100 form-submit" style="background-color: orange;">Gửi</button>
</form>
<?php ?>
<?php
if (!isset($_POST["guidataadduser"])) {
    $useradd = "";
    $passadd = "";
    $permission = "";
} else {
    $useradd = $_POST['txtusername'];
    $passadd = $_POST['txtpassadd'];
    $permission = $_POST['select-permission'];
    include "../database/config.php";
    $addusers = mysqli_query($conn, "INSERT INTO users VALUE (null, '$useradd', '$passadd', '$permission')");
    echo "<script> window.location.href = 'http://localhost/pizza365/admin/adduser.php'</script>";
}
?>