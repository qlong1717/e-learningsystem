<?php  
if (isset($_SESSION['StudentID'])) {
  # code...
  redirect('index.php');
}
require_once ("include/initialize.php"); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">
    <script src="https://kit.fontawesome.com/54f0cb7e4a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="CSS/style.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
    <link href="/fontawesome-free-6.1.1/css/all.css" rel="stylesheet">

    <!-- Title Page-->
    <title>Thay Đổi Mật Khẩu | English Pro</title>

    <!-- Icons font CSS-->
    <link href="<?php echo web_root;?>plugins/registration/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="<?php echo web_root;?>plugins/registration/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="<?php echo web_root;?>plugins/registration/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?php echo web_root;?>plugins/registration/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo web_root;?>plugins/registration/css/main.css" rel="stylesheet" media="all">
</head>

<body> 
    <!-- -------------------------------------Login------------------------------------------ -->
    <section class="">     
        <div class="container">
            <div class="row2">

                <!-- ----------DANH MỤC SẢN PHẨM Ở BÊN TRÁI---------- -->
                <div class="login-left">
                    <ul>

                        <li class="login-left-li" style="font-size: 18px";>Tài khoản English Pro
                            <ul>
                                <br>
                                <li><a href="login.php" style="font-size: 16px;">Đăng nhập</a></li>
                                <li><a href="forgotpassword.php" style ="font-size: 16px";>Quên mật khẩu</a></li>
                            </ul>
                        </li>

                    </ul>
                </div>

                <div class="login-right row2">
                    <div class="login-right-top-text">
                        <p>Quên Mật Khẩu</p>
                    </div>
                
                    <div class="login-right-customer">
                        <form method="POST" action="handler.php">
                            <div class="login-right-customer-bottom">

    
                                <div class="input-login">
                                    <p>Địa chỉ Email</p>
                                    <input class="input--style-1" type="text" placeholder="Nhập địa chỉ email của bạn" name="ADDRESS">
                                </div>

                                <div class="input-login">
                                    <p>Tên đăng nhập</p>
                                    <input class="input--style-1" type="text" placeholder="Nhập tên đăng nhập" name="USERNAME">
                                </div>

                                <div class="input-login">
                                    <p>Mật khẩu Mới</p>
                                    <input class="input--style-1" type="password" placeholder="Nhập mật khẩu" name="PASS">
                                    <i class="fas fa-eye"></i>
                                </div>

                                <div class="input-login">
                                    <p>Nhập lại mật khẩu</p>
                                    <input class="input--style-1" type="password" placeholder="Nhập mật khẩu" name="COMFPASS">
                                    <i class="fas fa-eye"></i>
                                </div>

                                

                                <div class="submit-login-button">
                                    <a type="submit" name="btnReset">
                                        <button class="btn btn--radius btn--green" type="submit" name="btnReset"> 
                                            <i class="fas fa-sign-in-alt"></i> <p>Đổi mật khẩu</p>
                                            <!-- <?php
                                            redirect(web_root."index.php"); 
                                            ?> -->
                                        </button>
                                    </a>
                                    
                                </div>

                            </div>
                           
                            <a href="login.php"> Back to Login</a>
                        </form>
                    </div>
                    
                </div>

            </div>
        </div>
    </section>
    <!-- Jquery JS-->
    <script src="<?php echo web_root;?>plugins/registration/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="<?php echo web_root;?>plugins/registration/vendor/select2/select2.min.js"></script>
    <script src="<?php echo web_root;?>plugins/registration/vendor/datepicker/moment.min.js"></script>
    <script src="<?php echo web_root;?>plugins/registration/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>
    <!-- -------------------------------------Footer----------------------------------------- -->
    <div class="footer-distributed">
        <div class="footer-left">  
            <h3>English<span>Pro</span></h3>  
            <p class="footer-links">
                <a href="#" class="link-1">Trang chủ</a>            
                <a href="#">Giới thiệu</a>          
                <a href="#">Học</a>          
                <a href="#">Kiểm tra</a>            
                <a href="#">Từ điển</a>             
            </p>
            <p class="footer-company-name">Bản quyền thuộc về: Hứa Chí Cường, Nguyễn Quang Long, Nguyễn Tùng Huy</p>
        </div>
  
        <div class="footer-center">
            <div>
            <i class="fa fa-map-marker"></i>
            <p><span>100 Sài Gòn</span>TP. Hồ Chí Minh</p>
            </div>
    
            <div>
                <i class="fa fa-phone"></i>
                <p>999999999</p>
            </div>
    
            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:support@company.com">abcabc@gmail.com</a></p>
            </div>
        </div>
  
        <div class="footer-right">
            <p class="footer-company-about">
            <span>Xin chào</span>
            Xin chào Xin chào Xin chào
            </p>
            <div class="footer-icons">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-github"></i></a> 
            </div> 
        </div>
    </div>
</body> 
</html>
<?php 
if (isset($_POST['btnReset'])) {
    # code...  

    $student = New Student();   
    $student->STUDUSERNAME      = $_POST['USERNAME'];
    $student->STUDPASS      = sha1($_POST['PASS']); 
    $student->update($_POST['StudentID']);  

    if($student->update() == true) {
    message("Your now succefully reset. You can login now!","success");
    redirect("login.php");
    }else{  
        message("failed Update. Please try again","error");                
        redirect("login.php");
    }
}
?> 