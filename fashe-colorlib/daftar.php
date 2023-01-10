<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>Daftar</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Client Signup Form template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Old+Standard+TT:400,400i,700" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'><!--web font-->
<!-- //web font -->
</head>
<body>
    <!-- main -->
    <div class="main main-agileits">
        <h1>Pendaftaran Pembeli</h1>
        <div class="main-agilerow"> 
            <div class="signup-wthreetop">
                <h2>Selamat Datang</h2>
                <p>Di Toko RedComp </p>
            </div>  
            
            <div class="contact-wthree">
                <form action="#" method="post">
                    <h3>Daftar</h3>

                    <div class="form-w3step1">
                        <input type="email" name="email" placeholder="Email" required=""> 
                        <input type="text" name="nama" placeholder="Nama Lengkap" required=""> 
                        <input type="text" name="telepon" placeholder="Nomor Ponsel" required=""> 
                        <input type="password" class="form-control agileits-btm" name="password" placeholder="Password" required=""> 
                    </div> 
                    <input type="submit" value="Daftar" name="daftar">
                     <div class="contact-wthree">
                    <center><h3>Sudah Punya Akun?</h3><a href="Login.php"><h3>Masuk</h3></a></center></div>
                </form>

                <?php
                // jika tombol daftar di tekan
                if (isset($_POST["daftar"]))
                {

                    // mengambil isian nama,email,password,telepon
                    $nama = $_POST["nama"];
                    $email = $_POST["email"];
                    $telepon = $_POST["telepon"];
                    $password = $_POST["password"];

                    //cek apakah email sudah digunakan
                    $ambil = $koneksi->query("SELECT * FROM pelanggan WHERE email_pelanggan='$email'");
                    $yangcocok = $ambil->num_rows;
                    if ($yangcocok==1)
                    {
                        echo "<script>alert('Email Sudah Digunakan');</script>";
                        echo "<script>location='daftar.php';</script>";
                    }
                    else
                    {

                        //query insert ke table pelanggan
                        $koneksi->query("INSERT INTO pelanggan(email_pelanggan,password_pelanggan,nama_pelanggan,telepon_pelanggan)
                            VALUES('$email','$password','$nama','$telepon')");

                        echo "<script>alert('Pendaftaran Sukses, Silahkan Login !');</script>";
                        echo "<script>location='login.php';</script>";
                    }
                }
                ?>
            </div>  
        </div>  
    </div>  
    <!-- //main -->
    <!-- copyright -->
    <div class="w3copyright-agile">
        <p>© 2017 Client Signup Form. All rights reserved<a href="http://w3layouts.com/" target="_blank">W3layouts</a></p>
    </div>
    <!-- //copyright --> 
</body>
</html>