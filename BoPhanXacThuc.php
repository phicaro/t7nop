<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bộ Công An. Phòng Quản Lý Xuất Nhập Cảnh TP. Hồ Chí Minh</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap.theme.css" rel="stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet">
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
                background-image: url("img/nen.jpg");
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
            <p style="font-size: 50px">Bộ Phận Xác Thực</p> 
            <p>Chào Mừng Đến Với Trang Quản Trị Viên</p> 

        </div>
        <div class="container">
            <h2><U>XÁC THỰC THÔNG TIN</U></h2>
            <br/>
            <div class="container">
                <div class="row">
                    <form class="col-md-10">
                        <input type="text" name="txtSearch" ng-model="txtflit" class="form-control" placeholder="Nhập Người " />
                    </form>
                    <a data-toggle="modal" href="#myModalAdd" class="btn btn-primary col-md-2"><span class="glyphicon glyphicon-search"></span>Tìm Kiếm</a>
                </div>
                <br/>
                <div class="row" >
                    <table class="table-hover  table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Họ Tên</th>
                                <th>Địa Chỉ</th>
                                <th>Giới Tính</th>
                                <th>Số Chứng Minh</th>
                                <th>Số Điện Thoại</th>
                                <th>Email</th>
                                <th>Hành Động</th>

                            </tr>
                        </thead>
                        <tbody ng-repeat="t in SP| filter:txtflit">
                            <tr >
                                <td>{{t.id}}</td>
                                <td>{{t.hoten}}</td>
                                <td>{{t.diachi}}</td>
                                <td>{{t.gioitinh}}</td>
                                <td>{{t.socmnd}}</td>
                                <td>{{t.sodienthoai}}</td>
                                <td>{{t.email}}</td>
                                <td><a href="#myModalEdit" class="btn btn-info" id="btnEdit" data-toggle="modal" data-target="#myModalEdit"><span class="glyphicon glyphicon-pencil"></span> Edit</a>
                                    <a href="#"  ng-click="xoa(t.id
                                                            )" class="btn btn-info"><span class="glyphicon glyphicon-trash"></span> Delete</a></td>
                            </tr>

                        </tbody>
                    </table>
                </div>  


                <!--star popup add product-->

                <!-- Modal -->
                <div class="modal fade" id="myModalAdd" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Add new product</h4>
                            </div>
                            <div class="modal-body">
                                <form role="form">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <label>Name</label>
                                            <input ng-model="txtName"  type="text" class="form-control" id="form-name" placeholder="Type name" />

                                        </div>
                                        <div class="input-group">
                                            <label>Description</label>
                                            <input ng-model="txtDes" type="text"  class="form-control" id="Text2" placeholder="Type name" />

                                        </div>
                                        <div class="input-group">
                                            <label>Price</label>
                                            <input ng-model="txtPrice" type="text"  class="form-control" id="Text1" placeholder="Type name" />

                                        </div>


                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                <button type="submit" ng-click="them(txtName, txtDes, txtPrice)" class="btn btn-success"><span class="glyphicon glyphicon-off"></span> Save change</button>
                            </div>
                        </div>

                    </div>
                </div>
                <!--end popup-->

                <!--star popup edit product-->

                <!-- Modal -->
                <div class="modal fade" id="myModalEdit" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Edit product</h4>
                            </div>
                            <div class="modal-body">
                                <form role="form">
                                    <div class="row">
                                        <div class="input-group-addon">
                                            <label>Name</label>
                                            <input ng-model="name" type="text" name="txtName" class="form-control" id="form-name" placeholder="Type name" />

                                        </div>
                                        <div class="input-group-addon">
                                            <label>Price</label>
                                            <input ng-model="price" type="text" class="form-control" id="Text1" placeholder="Type name" />

                                        </div>
                                        <div class="input-group-addon">
                                            <label>Description</label>
                                            <input ng-model="description" type="text" class="form-control" id="Text2" placeholder="Type name" />

                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-off"></span> Save change</button>
                                    </div>
                                </form>
                            </div>

                        </div>

                    </div>
                </div>
                <!--end popup-->

            </div>


            <!-- try {
                 //tao lien ket
                 $db = new PDO('mysql:host=localhost;dbname=Products', 'root', 'root');
                 //lay du lieu

                 $sql = 'select * FROM `dangky`';
                 $kq = $db->query($sql);


                 while ($r = $kq->fetch(PDO::FETCH_NUM)) {
                     echo '   <tr>';
                     echo '      <td>' . $r[0] . '</td>';
                     echo '       <td>' . $r[1] . '</td>';
                     echo '       <td>' . $r[2] . 't</td>';
                     echo '        <td>' . $r[3] . '</td>';
                     echo '        <td>' . $r[4] . '</td>';
                     echo '        <td>' . $r[5] . '</td>';
                     echo '        <td>' . $r[6] . '</td>';
                     echo '       <td>';
                     /* echo '          <a data-toggle="modal" href="#myModalEdit" class="btn btn-info" id="btn-info" data-target="#myModalEdit">
                       <span class="glyphicon glyphicon-pencil"></span>Edit
                       </a> */
                     echo '<a href="xlxoa.php?id=' . $r[0] . '" class="btn btn-success">
                         <span class="glyphicon glyphicon-ok"></span>Chuyển Đến Xác Thực
                     </a>';
                     echo '         </td>';
                 }
             } catch (PDOException $ex) {
                 echo $ex->getMessage();
             }
          
            </tr>
       
            -->


        </div>


        <!-- Maps -->
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
                                <label for="usrname" ><span class="glyphicon glyphicon-user "></span> Tên Đăng Nhập</label>
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

                LoadDL();
                function LoadDL() {
                    $http.post("XLPHP/LayDuLieu.php").then(function (response) {
                        $scope.SP = response.data;
                    });
                }
                ;
                $scope.xoa = function (idx) {
                    $http.get("XuLy/DeleteDL.php?id=" + idx).then(function (response) {
                        LoadDL();
                    });

                };

                $scope.them = function (txtn, txtd, txtp) {
                    $http.get("XuLy/InsertDL.php?txtName=" + txtn + "&txtDes=" + txtd + "&txtPrice=" + txtp).then(function (response) {
                        LoadDL();
                    });
                };
            });


    </script>
</html>
