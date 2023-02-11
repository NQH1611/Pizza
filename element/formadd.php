<?php ?>
<form action="" method="POST" id="form-send-data">
    <div class="form-group">
        <label for="">Kích Cỡ</label>
        <select class="form-control" name="select-kichco" id="">
            <option value="0">Chọn Kích Cỡ</option>
            <?php
            include('../database/config.php');
            $menuSelect = mysqli_query($conn, "SELECT kichCo FROM menu");
            while ($rowSelect = mysqli_fetch_assoc($menuSelect)) {
            ?>
                <option value="<?php echo $rowSelect["kichCo"]; ?>"><?php echo $rowSelect["kichCo"]; ?></option>
            <?php
            }
            ?>
        </select>
    </div>
    <div class="form-group">
        <label for="">Chọn Loại Pizza</label>
        <select name="select-loai" id="" class="form-control">
            <option value="0">Chọn Loại Pizza</option>
            <option value="OCEAN">OCEAN</option>
            <option value="HAWAII">HAWAII</option>
            <option value="BACON">BACON</option>
        </select>
    </div>
    <div class="form-group">
        <label for="">Loại Nước Uống</label>
        <select name="select-drink" id="select-drinks" class="form-control">
            <option value="0">--Tất cả loại nước uống</option>
            <?php
            include('../database/config.php');
            $drink = mysqli_query($conn, "SELECT madouong, tendouong FROM drinks");
            while ($rowdrink = mysqli_fetch_assoc($drink)) {
            ?>
                <option value="<?php echo $rowdrink["madouong"]; ?>"><?php echo $rowdrink["tendouong"]; ?></option>
            <?php
            }
            ?>
        </select>
    </div>
    <div class="form-group">
        <label for="fullname">Tên</label>
        <input type="text" class="form-control" name="txtTen" id="inp-fullname" placeholder="Nhập Tên">
        <span class="form-message"></span>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" name="txtEmail" id="inp-email" placeholder="Nhập Email">
        <span class="form-message"></span>
    </div>
    <div class="form-group">
        <label for="dien-thoai">Số Điện thoại</label>
        <input type="text" class="form-control" name="txtSDT" id="inp-dien-thoai" placeholder="Nhập Số Điện thoại">
        <span class="form-message"></span>
    </div>
    <div class="form-group">
        <label for="dia-chi">Địa chỉ</label>
        <input type="text" class="form-control" name="txtDiaChi" id="inp-dia-chi" placeholder="Nhập Địa chỉ">
        <span class="form-message"></span>
    </div>
    <div class="form-group">
        <label for="message">Lời nhắn</label>
        <input type="text" class="form-control" name="txtLoiNhan" id="inp-message" placeholder="Nhập Lời nhắn">
    </div>
    <button id="btn-send-order" name="guidata" class="btn btn-orange w-100 form-submit" style="background-color: orange;">Gửi</button>
</form>
<?php ?>
<?php
if (!isset($_POST["guidata"])) {
    $tenKH = "";
    $email = "";
    $dienthoai = "";
    $loiNhan = "";
    $drink = "";
    $kichCo = "";
    $selectloai = "";
} else {
    $tenKH = $_POST["txtTen"];
    $email = $_POST["txtEmail"];
    $dienthoai = $_POST["txtSDT"];
    $diaChi = $_POST["txtDiaChi"];
    $loiNhan = $_POST["txtLoiNhan"];
    $userdn = $_SESSION["username"];
    $drink = $_POST["select-drink"];
    $kichCo = $_POST['select-kichco'];
    $selectloai = $_POST['select-loai'];
    include "../database/config.php";
    $addorders = mysqli_query($conn, "INSERT INTO orders VALUE ('$kichCo', '$selectloai', '$drink', '$tenKH', '$email', '$dienthoai', '$diaChi', '$userdn', null ,'$loiNhan')");
    echo "<script> window.location.reload</script>";
}
?>