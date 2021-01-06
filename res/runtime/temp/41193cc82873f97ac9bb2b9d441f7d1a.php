<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:77:"D:\phpstudy_pro\WWW\res\public/../application/index\view\contact\contact.html";i:1606880390;s:63:"D:\phpstudy_pro\WWW\res\application\index\view\common\head.html";i:1608787169;s:65:"D:\phpstudy_pro\WWW\res\application\index\view\common\footer.html";i:1606812996;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>李云锋个人网站</title>
    <meta name="description" content="Tam - Creative Portfolio Template" />
    <meta name="keywords" content="blog, business card, creative, creative portfolio, cv theme, online resume, personal, portfolio, professional cv, responsive portfolio, resume, resume theme, vcard" />
    <meta name="author" content="beingeorge" />
    <meta name="theme-color" content="#2a2d35">

    <!-- Vendor Css-->
    <link rel="stylesheet" href="/static/css/vendor.css" />
    <link rel="stylesheet" href="/static/css/LineIcons.min.css" />

    <!-- TamTemplate style Css -->
    <link href="/static/css/tam.css" rel="stylesheet">
    <script src="/static/js/vue.js"></script>

</head>

<body data-spy="scroll" data-target=".navbar">

<!-- START: Preloader -->
<div id="preloader" class="preloader">
    <div class="spinner-grow text-dark" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- END: Preloader -->

<!-- START: Aside -->
<aside class="aside">
    <!-- START: NAVBAR -->

    <div class="nav-wrapper">

        <div class="navbar-toggler">
            <svg class="ham hamRotate ham1" viewBox="0 0 100 100" width="60">
                <path class="line top" d="m 30,33 h 40 c 0,0 9.044436,-0.654587 9.044436,-8.508902 0,-7.854315 -8.024349,-11.958003 -14.89975,-10.85914 -6.875401,1.098863 -13.637059,4.171617 -13.637059,16.368042 v 40" />
                <path class="line middle" d="m 30,50 h 40" />
                <path class="line bottom" d="m 30,67 h 40 c 12.796276,0 15.357889,-11.717785 15.357889,-26.851538 0,-15.133752 -4.786586,-27.274118 -16.667516,-27.274118 -11.88093,0 -18.499247,6.994427 -18.435284,17.125656 l 0.252538,40" />
            </svg>
        </div>

        <nav class="navbar text-center align-items-center justify-content-center">



            <div class="collapse navbar-collapse show" id="navbarCollapse" >
                <div class="about-avatar mb-5">
                    <a href="/">
                        <img src="<?php echo $head['avatar']; ?>" alt="" class="img-fluid mx-auto d-block shadow-sm rounded-full">
                    </a>

                    <div class="about-avatar-details mt-4">
                        <h1><?php echo $head['nickname']; ?></h1>
                        <p class="badge"><?php echo $head['email']; ?></p>
                    </div>

                </div>
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/"><i class="lni-home"></i>个人简介</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo url('experience/'); ?>"><i class="lni-briefcase"></i>工作经验</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo url('major/'); ?>"><i class="lni-offer"></i>专业技能</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo url('works/'); ?>"><i class="lni-graduation"></i>作品展示</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="blog.html"><i class="lni-pencil"></i>兴趣爱好</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo url('contact/'); ?>"><i class="lni-phone-handset"></i>Contact</a>
                    </li>
                </ul>
            </div>

            <div class="aside-footer">
                <ul class="list-unstyled list-inline">
                    <li class="list-inline-item"><a href="#"><i class="lni-facebook-filled"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="lni-skype"></i></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="lni-youtube"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="lni-linkedin-original"></i></a></li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- END: NAVBAR -->
</aside>
<!-- START: Aside -->
<script>


</script>
<div class="page-overlay">
    <span class="overlay-1"></span>
    <span class="overlay-2"></span>
</div>

<div class="page-wrapper">

    <!-- START: CONTACT -->
    <section class="section section-light section-contact" id="contact">
        <div class="container">
            <div class="section-head">
                <span>say Hello</span>
                <h2>Contact </h2>
            </div>

            <div class="contact-map mt-5">
                <h5 class="section-subHead mb-4"> My Location</h5>

                <div class="box">
                    <div id="container2"></div>
                    
                </div>
                <input type="text" id="title" value="<?php echo $contact['title']; ?>" style="display: none;">
                <input type="text" id="X" value="<?php echo $contact['coordinateX']; ?>" style="display: none;">
                <input type="text" id="Y" value="<?php echo $contact['coordinateY']; ?>" style="display: none;">
                <input type="text" id="address" value="<?php echo $contact['address']; ?>" style="display: none;">
                <input type="text" id="phone" value="<?php echo $contact['phone']; ?>" style="display: none;">
                <style>


                    .box { width: 100%; height: 600px; margin: 40px 0; }
                    #container1,  #container2 { width: 100%; height: 100%; }
                    #container3 { width: 80%; height: 100%; }
                    .list { width: 20%; height: 100%; background: #eee; }
                    .list li { height: 34px; line-height: 34px; padding-left: 20px; }
                    .list li.active a { color: red; }
                    .title { font-size: 14px; font-weight: bold; color: #cc5522; }
                    .content { font-size: 13px; color: #333; margin-top: 0px; }
                    .fl { float: left; }
                </style>
                <script src="/static/js/jquery-1.10.2.js"></script>
                <script src="http://api.map.baidu.com/api?v=2.0&ak=n4lNHkWG8cPPGEyGUt24GMrx8dgbTwGP"></script>
                <script src="/static/js/jquery.baiduMap.min.js"></script>
                <script type="text/javascript">
                    var title = $('#title').val();
                    var X = $('#X').val();
                    var Y = $('#Y').val();
                    var address = $('#address').val();
                    var phone = $('#phone').val();

                    var points = [{
                        id: 1,
                        lng: X,
                        lat: Y,
                        title: title,
                        content: ["地址:"+address, "电话："+phone]
                    }];
                    new BaiduMap({
                        id: "container2",
                        level: 18,
                        type: ["地图", "卫星"],
                        width: 320,
                        height: 70,
                        titleClass: "title",
                        contentClass: "content",
                        showMarkPanorama: true,
                        mapStyle: "light",
                        icon: {
                            url: "/static/images/map/marker.png",
                            width: 25,
                            height: 96
                        },
                        centerPoint: { // 地图中心点经纬度
                            lng: X,
                            lat: Y
                        },
                        index: 0,
                        points: points
                    });

                </script>

            </div>

        </div>

        <div class="contact-Otherdetails section-dark">
            <div class="container">
                <div class="contact-details mt-5">
                    <h5 class="section-subHead pt-5 mb-4"> 联系方式</h5>
                    <div class="row">
                        <div class="col-sm-6 col-lg-6">
                            <div class="contact-details--panel p-4 b-box text-center hover-state wow fadeInUp" data-wow-duration="1.5s">
                                <div class="mb-3">
                                    <i class="lni-mobile"></i>
                                </div>
                                <div class="mt-2">
                                    <a href="tel:<?php echo $contact['phone']; ?>" class=""><?php echo $contact['phone']; ?></a>
                                    <p class="mt-2">打给我</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-6">
                            <div class="contact-details--panel p-4 b-box text-center hover-state wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".2s">
                                <div class="mb-3">
                                    <i class="lni-envelope"></i>
                                </div>
                                <div class="mt-2">
                                    <a href="<?php echo $contact['email']; ?>"><?php echo $contact['email']; ?></a>
                                    <p class="mt-2">发邮箱</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- END: CONTACT -->


    <!--START: FOOTER-->
<footer class="footer section section-light">
    <div class="container">
        <p class="copyright text-center mb-0">&copy; Tam 2020 | All Right Reserved 更多模板：<a href="http://www.mycodes.net/" target="_blank">源码之家</a></p>
    </div>
</footer>
<!--END: FOOTER-->
</div>


<!-- JAVASCRIPTS -->

<script src="/static/js/vendor.js"></script>


<!-- Custom Js -->
<script src="/static/js/custom.js"></script>
</body>
</html>
