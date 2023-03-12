<!----------------- --------------------------------------------------------------   --------- ------------------------------------------------------------------------>
<!-------------------- -----------------------------------------------------------   ------------------------ --------------------------------------------------------->
<!-------------------- -----------------------------------------------------------   ------------------------- -------------------------------------------------------->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/54f0cb7e4a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
    <link href="./fontawesome-free-6.1.1/css/all.css" rel="stylesheet">
    <link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTG_tVFWuth9AH91-Y5lroDbzZynHo0pdq-Kg&usqp=CAU" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>English Pro </title>
    <!-- styles -->
    <!-- <link href="<?php echo web_root;?>plugins/homepage/assets/css/bootstrap.css" rel="stylesheet"> -->
    <link href="<?php echo web_root;?>plugins/homepage/assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="<?php echo web_root;?>plugins/homepage/assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo web_root;?>plugins/homepage/assets/js/google-code-prettify/prettify.css" rel="stylesheet">
    <link href="<?php echo web_root;?>plugins/homepage/assets/css/flexslider.css" rel="stylesheet">
    <!-- <link href="<?php echo web_root;?>plugins/homepage/assets/css/style.css" rel="stylesheet"> -->
    <link href="<?php echo web_root;?>plugins/homepage/assets/color/default.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,600,400italic|Open+Sans:400,600,700" rel="stylesheet">

    <!-- fav and touch icons -->
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo web_root;?>plugins/homepage/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo web_root;?>plugins/homepage/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo web_root;?>plugins/homepage/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo web_root;?>plugins/homepage/assets/ico/apple-touch-icon-57-precomposed.png">
</head>
<body>
  <!-- -------------------------------------Header----------------------------------------- -->
  <section class="top">
        <div class="container">
            <div class="row">
                
                <!-- ----------Logo---------- -->
                <div class="top-logo">
                    <a href="index.php"> <img src="./images/logo.png" alt=""alt="Live online classes" loading="lazy" typeof="foaf:Image" class="img-responsive"> </a>
                </div>

                <!-- ----------MENU---------- -->
                <div class="top-menu-items">
                    
                        <!-- ----------GIỚI THIỆU---------- -->
                        <li> <a href="about.html">Giới thiệu</a>
                            <!-- <ul class="top-menu-item">
                                <li> <a href="">VỀ CHÚNG TÔI</a> </li>
                                <li> <a href="">LIÊN HỆ</a> </li>
                            </ul> -->
                        </li>

                        <!-- ----------DANH MỤC HỌC---------- -->
                        <li> <a href="<?php echo web_root; ?>index.php?q=lesson"><i class="icon-list-alt"></i>Học</a>
                        </li>

                        <!-- ----------DANH MỤC KIỂM TRA---------- -->
                        <li> <a href="<?php echo web_root; ?>index.php?q=exercises"><i class="icon-list-alt"></i>Kiểm tra</a>
                        </li>

                        <!-- ----------TẢI VỀ---------- -->
                        <li> <a href="<?php echo web_root; ?>index.php?q=download"><i class="icon-download"></i>Tải về</a> </li>

                        <!-- ----------TỪ ĐIỂN---------- -->
                        <li> <a href="dictionary.html" style="color: red;">Tra từ</a>
                        
                        <!-- ----------Trống---------- -->
                        <div class="logsign-top">
                            <li>
                                <!-- <a href="sign-in.html">ĐĂNG KÍ</a> -->
                            </li>
                        </div>
                        <!-- ----------MENU CHỨC NĂNG PHẢI ---------- -->
                        <div class="top-menu-icons">
                                <li>
                                    <input type="text" placeholder="Tìm kiếm">
                                    <i class="fas fa-search"></i>
                                </li>

                                <li>
                                    <a href="dictionary.html">
                                        <i class="fa-solid fa-book"></i>
                                    </a>
                                </li>

                                <li>
                                <!-- <a href="login.html">ĐĂNG NHẬP</a> -->
                                <a href="logout.php"><i class="icon-logout"></i> Logout</a>
                            </li>
                        </div>
                        
                </div>
            </div>
        </div>
  </section>

    <!-- -------------------------------------Main----------------------------------------- -->
    <!-- <section id="maincontent">
      <div class="container"> 

      </div>   
    </section> -->

    <section class="courses">     
          <?php check_message(); ?>  
          <?php require_once $content; ?> 
    </section>
    <!-- -------------------------------------Footer----------------------------------------- -->
    <!-- Messenger Plugin chat Code -->
    <div id="fb-root"></div>

    <!-- Your Plugin chat code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "101288849306095");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v14.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>

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
            <p class="footer-company-name">Bản quyền thuộc về: Hứa Chí Cường, Phạm Quang Long, Nguyễn Tùng Huy</p>
            <p class="footer-company-name">Công Ty Công Nghệ Long Huy Cường Company</p>
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

    <!-- -------------------------------------js----------------------------------------- -->
    <script src="<?php echo web_root;?>plugins/homepage/assets/js/jquery.js"></script>
    <script src="<?php echo web_root;?>plugins/homepage/assets/js/raphael-min.js"></script>
    <script src="<?php echo web_root;?>plugins/homepage/assets/js/jquery.easing.1.3.js"></script>
    <script src="<?php echo web_root;?>plugins/homepage/assets/js/bootstrap.js"></script>
    <script src="<?php echo web_root;?>plugins/homepage/assets/js/google-code-prettify/prettify.js"></script>
    <script src="<?php echo web_root;?>plugins/homepage/assets/js/jquery.elastislide.js"></script>
    <script src="<?php echo web_root;?>plugins/homepage/assets/js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo web_root;?>plugins/homepage/assets/js/jquery.flexslider.js"></script>
    <script src="<?php echo web_root;?>plugins/homepage/assets/js/jquery-hover-effect.js"></script>
    <script src="<?php echo web_root;?>plugins/homepage/assets/js/animate.js"></script>
    <script src="js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
    
    <!-- Template Custom js File -->
    <script src="<?php echo web_root;?>plugins/homepage/assets/js/custom.js"></script>

    <!-- JS Banner  -->
    <script> 
        $(document).ready(function(){
        $(".owl-carousel").owlCarousel();
        });

        /* ---------- Các chức năng của Framework Slider ----------*/
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            autoplay:true,
            autoplayTimeout: 3000,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:1
                }
            }
        })
    </script>

</body>
</html>
