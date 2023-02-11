<html>
    <head>
        <title>REGISTER</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="./css/login.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
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
    <form action='' method='POST'>
      <input type="text" class="fadeIn second form-control" name='txtUsername' placeholder="nhập username">
      <input type="password" class="fadeIn third form-control" name='txtPassword' placeholder="nhập password">
      <input type="submit" class="fadeIn fourth" name="dangky" value="Register">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>
    <?php 
    if(!isset($_POST['dangky'])){
        $userup = "";
        $passup = "";
        $permission = "";
    }else{
        $userup = $_POST['txtUsername'];
        $passup = $_POST['txtPassword'];
        $permission = 0;
        include "./database/config.php";
        $addusers = mysqli_query($conn, "INSERT INTO users VALUE (null, '$userup', '$passup', '$permission')");
        echo "<script> window.location.href = 'http://localhost/pizza365/login.php'</script>";
    }
    ?>
  </div>
</div>
    </body>