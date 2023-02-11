<?php
//Khai báo sử dụng session
session_start();
 
//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');
 
//Xử lý đăng nhập
if (isset($_POST['dangnhap'])) 
{
    //Kết nối tới database
    include('./database/config.php');
     
    //Lấy dữ liệu nhập vào
    $username = addslashes($_POST['txtUsername']);
    $password = addslashes($_POST['txtPassword']);
     
    //Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
    if (!$username || !$password) {
        echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu.";
        exit;
    }
     
    // mã hóa pasword
     
    //Kiểm tra tên đăng nhập có tồn tại không
    $query = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");
    if (mysqli_num_rows($query) == 0) {
        echo "Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại";
        exit;
    }
     
    //Lấy mật khẩu trong database ra
    $row = mysqli_fetch_array($query);
    //So sánh 2 mật khẩu có trùng khớp hay không
    if ($password != $row['password']) {
        echo "Mật khẩu không đúng. Vui lòng nhập lại.";
        exit;
    }
    if($row['permission'] == 0 || !isset($row["permission"])){
      $_SESSION['username'] = $username;
      echo "<script> window.location.href = 'index.php'</script>";
    }else{
      $_SESSION['username'] = $username;
    echo "<script> window.location.href = './admin/index.php'</script>";
    }
     
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>LOGIN</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="./css/login.css">
    </head>
    <body>
    <div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="./images/login.png" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form action='login.php?do=login' method='POST'>
      <input type="text" class="fadeIn second form-control" name='txtUsername' placeholder="nhập username">
      <input type="password" class="fadeIn third form-control" name='txtPassword' placeholder="nhập password">
      <input type="submit" class="fadeIn fourth" name="dangnhap" value="Log In">
      <input type="button" class="fadeIn fourth register" name="dangky" value="Register">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

  </div>
  <script>
    $(".register").on("click", function(){
      window.location.href = 'dangky.php'
    })
  </script>
</div>
    </body>
</html>