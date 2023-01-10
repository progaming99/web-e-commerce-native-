<?php
session_start();
$koneksi = new mysqli("localhost","root","","redcomp")
?>


<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  <div class="login">
  <h2>Log In</h2>
  <fieldset>
    <input type="email" name="user" />
  	<input type="password" name="pass" />
  </fieldset>
  <button class="login100-form-btn" name="login">     Masuk
            </button>
  <div class="utilities">
    <a href="#">Forgot Password?</a>
    <a href="#">Sign Up &rarr;</a>
  </div>
</div>
<?php
        if (isset($_POST['login']))
        {
          $ambil = $koneksi->query("SELECT * FROM admin WHERE username='$_POST[user]' AND password ='$_POST[pass]'");
          $yangcocok = $ambil->num_rows;
          if ($yangcocok==1)
          {
            $_SESSION['admin']=$ambil->fetch_assoc();
            echo "<div class='alert alert-info'>Login Sukses</div>";
            echo "<meta http-equiv='refresh' content='1;url=index.php'>";
          }
          else
          {
            echo "<div class='alert alert-danger'>Login Gagal</div>";
            echo "<meta http-equiv='refresh' content='1;url=login.php'>";
          }
          }
        ?>
  
  

</body>

</html>
