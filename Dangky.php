<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Theme Made By www.w3schools.com - No Copyright -->
        <title>Bộ Công An. Phòng Quản Lý Xuất Nhập Cảnh TP. Hồ Chí Minh</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="js/angular.min.js" type="text/javascript"></script>
        <style>
            body {
                font: 400 17px Lato, sans-serif;
                line-height: 1.8;
                color: #818181;

            }
            view{
                padding-left: 30px;
            }
            h2 {
                font-size: 24px;
                text-transform: uppercase;
                color: #303030;
                font-weight: 600;
                margin-bottom: 15px;
            }  

            .jumbotron {
                background-color: #f4511e;
                color: #fff;
                padding: 10px 195px;
                font-family: Montserrat, sans-serif;
            }
            .container-fluid {
                padding: 5px 0px;
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
                background-color: #f4511e;
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
    <body ng-app="myApp" ng-controller="myctrl" id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

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
                        <li><a href="index.php?#about">GIỚI THIỆU</a></li>
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

        <!-- Container (About Section) -->
        <div class="customers view indent" >
            <div class="container">
                <header>
                    <h3 style="margin-left: 40px"><span class="glyphicon glyphicon-user"></span><a href="index.php"> TRANG CHỦ</a> > ĐĂNG KÝ</h3>
                </header>
                <div class="view">
                    <div class="container">
                        <header>
                            <h3><span class="glyphicon glyphicon-edit"></span> <u> Đăng Ký Mới Hộ Chiếu</u></h3>
                        </header>
                        <form name="editForm" ng-app="myApp" ng-controller="myctrl">
                            <div class="customerEdit">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4><span></span></h4>
                                        <br />
                                        <br/>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        Họ Tên:
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" ng-model="txthoten" class="form-control"  required />
                                    </div>
                                </div>
                                <br />
                                <div class="row">
                                    <div class="col-md-2">
                                        Giới Tính:
                                    </div>
                                    <div class="col-md-6">
                                        <div class="radio">
                                            <label class="radio">
                                                <input type="radio" ng-model="txtgioitinh" value="Nam"/>
                                                Nam
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label class="radio">
                                                <input type="radio" ng-model="txtgioitinh" value="Nữ"/>
                                                Nữ
                                                <br />
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <br />
                                <div class="row">
                                    <div class="col-md-2">
                                        Địa Chỉ Thường Trú:
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" ng-model="txtdiachi" class="form-control" required />
                                    </div>
                                </div>
                                <br />
                                <div class="row">
                                    <div class="col-md-2">
                                        Số CMND:
                                    </div>
                                    <div class="col-md-6">
                                        <input type="number" ng-model="txtcmnd" class="form-control" required />
                                    </div>
                                </div>
                                <br />
                                <div class="row">
                                    <div class="col-md-2">
                                        Điện Thoại:
                                    </div>
                                    <div class="col-md-6">
                                        <input type="number" ng-model="txtsodt" class="form-control" required />
                                    </div>
                                </div>
                                <br />
                                <div class="row">
                                    <div class="col-md-2">
                                        Email:
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" ng-model="txtemail" class="form-control" required />
                                    </div>
                                </div>
                                <br />
                                <div class="row">
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-primary"  ng-click="them(txthoten, txtdiachi, txtgioitinh, txtcmnd, txtsodt, txtemail)">
                                            Đăng Ký  
                                        </button>

                                    </div>
                                </div>
                                <br />

                            </div>
                        </form>

                        <!-- Container (Pricing Section) -->
                        <div id="pricing" class="container-fluid">

                        </div>

                        <!-- Container (Contact Section) -->
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
                    </div>
                </div>
            </div>
        </div>
        <!-- Add Google Maps -->
        <div id="googleMap" style="height:300px;width:100%;"></div>
<!--        <script>
                    function myMap() {
                        var myCenter = new google.maps.LatLng(41.878114, -87.629798);
                        var mapProp = {center: myCenter, zoom: 12, scrollwheel: false, draggable: false, mapTypeId: google.maps.MapTypeId.ROADMAP};
                        var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
                        var marker = new google.maps.Marker({position: myCenter});
                        marker.setMap(map);
                    }
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>-->

        <footer class="container-fluid text-center">
            <a href="#myPage" title="To Top">
                <span class="glyphicon glyphicon-chevron-up"></span>
            </a>
            <p>Thiết Kế Bởi Nhóm Phi, Hiếu <a href="https://fb.com/phiisme" title=" Chuyển Đến">Go To Facebook</a></p>
        </footer>
        <!--nơi đặt modal-->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h3><span class="glyphicon glyphicon-lock"></span> ĐĂNG NHẬP</h3>
                    </div>
                    <div class="modal-body">
                        <form role="form">
                            <div class="form-group">
                                <label for="usrname"><span class="glyphicon glyphicon-user "></span> Tên Đăng Nhập</label>
                                <input type="text" class="form-control" id="usrname" placeholder="Tên Đăng Nhập">
                            </div>
                            <div class="form-group">
                                <label for="pass"><span class="glyphicon glyphicon-lock"></span> Mật Khẩu</label>
                                <input type="password" class="form-control" id="pass" placeholder="Nhập Mật Khẩu">
                            </div>
                            <button type="submit" class="btn btn-block">ĐĂNG NHẬP 
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
        <!-- hết modal-->

    </body>
    <script>

        var app = angular.module('myApp', []);
        app.controller('myctrl', function ($scope, $http) {

        $scope.them = function (name, diachi, gioitinh, socmnd, sodienthoai, email) {
        $http.get("XLPHP/ThemDuLieu.php?tname=" + name + "&tdiachi=" + diachi + "&tgioitinh=" + gioitinh + "&tcmnd=" + socmnd + "&tdienthoai=" + sodienthoai + "&temail=" + email).then(function (response) {
        });
        };
        });

    </script>
</html>
