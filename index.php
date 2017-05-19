<!DOCTYPE html>
<html lang="en">
    <head>
         Theme Made By www.w3schools.com - No Copyright 
        <title>Bộ Công An. Phòng Quản Lý Xuất Nhập Cảnh TP. Hồ Chí Minh</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            body {
                font: 400 17px Lato, sans-serif;
                line-height: 1.8;
                color: #818181;
                /*background-image: url("img/nen.jpg");*/

            }
            h2 {
                font-size: 24px;
                text-transform: uppercase;
                color: #303030;
                font-weight: 600;
                margin-bottom: 15px;
            }  

            .jumbotron {
                /*background-color: #f4511e;*/
                background-image: url("img/nen.jpg");
                color: #fff;
                padding: 10px 195px;
                font-family: Montserrat, sans-serif;
            }
            .container-fluid {
                padding: 5px 50px;
            }
            .kk{
                padding: 0px 0px;
            }
            .logo-small {
                color: #f4511e;
                font-size: 50px;
            }
            .logo {
                color: #f4511e;
                font-size: 200px;
            }
            .thumbnail {
                padding: 0 0 15px 0;
                border: none;
                border-radius: 0;
            }
            .thumbnail img {
                width: 100%;
                height: 100%;
                margin-bottom: 10px;
            }


            .item span {
                font-style: normal;
            }

            .navbar {
                margin-bottom: 0;
                /*background-color: #f4511e;*/
                background-image: url("img/nen.jpg");
                z-index: 9999;
                border: 0;
                font-size: 12px !important;
                line-height: 1.42857143 !important;
                letter-spacing: 4px;
                border-radius: 0;
                font-family: Montserrat, sans-serif;
            }
            .navbar li a, .navbar .navbar-brand {
                color: #fff !important;
            }
            .navbar-nav li a:hover, .navbar-nav li.active a {
                color: #f4511e !important;
                background-color: #fff !important;
            }
            .navbar-default .navbar-toggle {
                border-color: transparent;
                color: #fff !important;
            }
            footer .glyphicon {
                font-size: 20px;
                margin-bottom: 20px;
                color: #f4511e;
            }
            .slideanim {visibility:hidden;}
            .slide {
                animation-name: slide;
                -webkit-animation-name: slide;
                animation-duration: 1s;
                -webkit-animation-duration: 1s;
                visibility: visible;
            }
            @keyframes slide {
                0% {
                    opacity: 0;
                    transform: translateY(70%);
                } 
                100% {
                    opacity: 1;
                    transform: translateY(0%);
                }
            }
            @-webkit-keyframes slide {
                0% {
                    opacity: 0;
                    -webkit-transform: translateY(70%);
                } 
                100% {
                    opacity: 1;
                    -webkit-transform: translateY(0%);
                }
            }
            @media screen and (max-width: 768px) {
                .col-sm-4 {
                    text-align: center;
                    margin: 25px 0;
                }
                .btn-lg {
                    width: 100%;
                    margin-bottom: 35px;
                }
            }
            @media screen and (max-width: 480px) {
                .logo {
                    font-size: 150px;
                }


            }
            .modal-header,h3 .close {
                background-color: #4876FF;
                color: #fff !important;
                text-align: center;
                font-size: 30px;
            }

            .modal-header, .modal-body {
                padding: 40px 50px;
            }


        </style>
    </head>
    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="#myPage">Logo</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#about">GIỚI THIỆU</a></li>
                        <li><a href="#services">DỊCH VỤ</a></li>
                        <li><a href="#portfolio">THÊM</a></li>
                        <li><a href="Dangky.php">ĐĂNG KÝ</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#myModal">ĐĂNG NHẬP</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="jumbotron text-center">
            <br>
            <p style="font-size: 50px">công an nhân dân</p> 
            <p>đăng ký hộ chiếu online</p> 
            <form>
                <div class="input-group">
                    <input type="email" class="form-control" size="50" placeholder="Email Address" required>
                    <div class="input-group-btn">
                        <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-lock"></span>Tìm Kiếm</button>
                    </div>
                </div>
            </form>
        </div>
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
                <div class="item active">
                    <img src="img/bg1.jpg" alt="...">

                </div>
                <div class="item">
                    <img src="img/bg2.jpg" alt="...">

                </div>
                <div class="item">
                    <img src="img/bg3.jpg" alt="...">

                </div>
            </div>
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
        <div id="about" class="container-fluid">
            <div class="row">
                <div class="col-sm-8">
                    <h2><u>GIỚI THIỆU</u></h2><br>
                    <h4>Phòng Quản lý xuất nhập cảnh, Công An Tp.Hồ Chí Minh, là cơ quan thực hiện chức năng quản lý nhà nước trong lĩnh vực quản lý xuất nhập cảnh, giải quyết các thủ tục xuất nhập cảnh cho công dân Việt Nam và công dân nước ngoài đang tạm trú hoặc làm việc tại thành phố Hồ Chí Minh.
                        <br/>Trụ sở chính đặt tại địa chỉ: 196 Nguyễn Thị Minh Khai, Phường 6, Quận 3, Tp.HCM.
                        <br/>Điện thoại: (08).38.299.398 - Fax: (08).38.244.075.

                    </h4><br>
                    <p>Thời gian và giờ làm việc của Phòng quản lý xuất nhập cảnh CA TP.HCM:

                        -Thời gian từ thứ 2 đến thứ 7 hàng tuần (trừ ngày nghỉ lễ theo quy định)

                        -Giờ làm việc : Sáng 7h - 11h30; Buổi chiều: 1h30 - 5h, Riêng thứ 7 làm việc buổi sáng</p>
                    <br><button class="btn btn-default btn-lg">Đăng Ký Ngay</button>
                </div>
                <div class="col-sm-4">
                    <iframe width="360" height="400" src="https://www.youtube.com/embed/ljymgV3VmxU" frameborder="0" allowfullscreen></iframe>
                </div>

            </div>
        </div>

<div id="services" class="container-fluid text-center">
    <h2>DỊCH VỤ</h2>
    <h4>Chúng Tôi Có Gì</h4>
    <br>
    <div class="row slideanim">
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-off logo-small"></span>
            <h4>Tiện Lợi</h4>
            <p>Khai Hộ Chiếu Trực Tuyến</p>
        </div>
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-heart logo-small"></span>
            <h4>Dễ Dàng</h4>
            <p>Hoàn Thành Và Phát Hộ Chiếu Tận Nhà</p>
        </div>
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-lock logo-small"></span>
            <h4>Dễ Dàng</h4>
            <p>Tra Cứu Kết Quả Hồ Sơ Trực Tuyến Qua Mạng</p>
        </div>
    </div>
    <br><br>
</div>

<div id="portfolio" class="container-fluid text-center bg-grey">
    <h2>XEM THÊM</h2><br>
    <h4>Những Kết Quả Đạt Được</h4>
    <div class="row text-center slideanim">
        <div class="col-sm-4">
            <div class="thumbnail">
                <img src="img/img1.jpeg" alt="Paris" width="400" height="300">
                <p><strong>Sao </strong></p>
                <p>vâng rất tốt thưa các cháu....</p>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="thumbnail">
                <img src="newyork.jpg" alt="New York" width="400" height="300">
                <p><strong>New York</strong></p>
                <p>We built New York</p>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="thumbnail">
                <img src="sanfran.jpg" alt="San Francisco" width="400" height="300">
                <p><strong>San Francisco</strong></p>
                <p>Yes, San Fran is ours</p>
            </div>
        </div>
    </div>
    <br>
    <div id="contact" class="container-fluid bg-grey">
        <h2 class="text-center">HỖ TRỢ</h2>
        <div class="row">
            <div class="col-sm-5">
                <p>Cổng Thông Tin Hỗ Trợ Trực Tuyến Qua Mail.</p>
                <p><span class="glyphicon glyphicon-map-marker"></span>TP. Hồ Chí Minh, Việt Nam</p>
                <p><span class="glyphicon glyphicon-phone"></span> +84 1653444776</p>
                <p><span class="glyphicon glyphicon-envelope"></span> conganxuatnhapcanh@cand.com</p>
            </div>
            <div class="col-sm-7 slideanim">
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="name" name="name" placeholder="Tên..." type="text" required>
                    </div>
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="email" name="email" placeholder="Email..." type="email" required>
                    </div>
                </div>
                <textarea class="form-control" id="comments" name="comments" placeholder="Lời Bình..." rows="5"></textarea><br>
                <div class="row">
                    <div class="col-sm-12 form-group">
                        <button class="btn btn-default pull-right" type="submit">Gửi</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Google Maps--> 
    <div id="googleMap" style="height:300px;width:100%;"></div>
    <script>
        function myMap() {
            var myCenter = new google.maps.LatLng(41.878114, -87.629798);
            var mapProp = {center: myCenter, zoom: 12, scrollwheel: false, draggable: false, mapTypeId: google.maps.MapTypeId.ROADMAP};
            var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
            var marker = new google.maps.Marker({position: myCenter});
            marker.setMap(map);
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
    <footer class="container-fluid text-center">
        <a href="#myPage" title="To Top">
            <span class="glyphicon glyphicon-chevron-up"></span>
        </a>
    <p>Thiết Kế Bởi Nhóm Phi, Hiếu <a href="https://fb.com/phiisme" title=" Chuyển Đến">Go To Facebook</a></p>
    </footer>

<script>
        $(document).ready(function () {
            // Add smooth scrolling to all links in navbar + footer link
            $(".navbar a, footer a[href='#myPage']").on('click', function (event) {
                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 900, function () {

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
            });

            $(window).scroll(function () {
                $(".slideanim").each(function () {
                    var pos = $(this).offset().top;

                    var winTop = $(window).scrollTop();
                    if (pos < winTop + 600) {
                        $(this).addClass("slide");
                    }
                });
            });
        })
</script>
<!--nơi đặt modal-->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3><span class="glyphicon glyphicon-lock"></span> ĐĂNG NHẬP</h3>
            </div>
            <div class="modal-body">
                <form role="form" method="POST" action="XLDangNhap.php">
                    <div class="form-group">
                        <label for="usrname" text-align="left"><span class="glyphicon glyphicon-user "></span> Tên Đăng Nhập</label>
                        <input type="text" class="form-control" name="user" placeholder="Tên Đăng Nhập">
                    </div>
                    <div class="form-group">
                        <label for="pass"><span class="glyphicon glyphicon-lock"></span> Mật Khẩu</label>
                        <input type="password" class="form-control" name="pass" placeholder="Nhập Mật Khẩu">
                    </div>
                    <button id="btnsubmit" type="submit" class="btn btn-block">ĐĂNG NHẬP 
                        <span class="glyphicon glyphicon-ok"></span>
                    </button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
                    <span class="glyphicon glyphicon-remove"></span> Cancel
                </button>
                <p>Tôi <a href="#">Không Đăng Nhập Được.</a></p>
            </div>
        </div>
    </div>
</div>
</div>

</body>
</html>