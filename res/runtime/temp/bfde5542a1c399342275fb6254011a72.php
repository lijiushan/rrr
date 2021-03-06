<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:73:"D:\phpstudy_pro\WWW\res\public/../application/index\view\index\index.html";i:1608865922;s:63:"D:\phpstudy_pro\WWW\res\application\index\view\common\head.html";i:1608787169;s:65:"D:\phpstudy_pro\WWW\res\application\index\view\common\footer.html";i:1606812996;}*/ ?>
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

    <!-- START: HOME -->
    <section class="section-home " id="home" style="background-image: url('<?php echo $information['big_image']; ?>')">
        <div class="glass"><?php echo $information['position']; ?></div>
        <!-- <img src="/static/images/banner.jpg" /> -->
    </section>
    <!-- END: HOME -->

    <!-- START: ABOUT -->
    <section class="section section-about" id="about">
        <div class="container">
            <div class="section-head">
                <span>Get to know</span>
                <h2>About Me</h2>
            </div>

            <div class="row justify-content-center align-items-center">
                <div class="col-md-6">
                    <img class="about-img img-fluid wow fadeInUp" data-wow-duration="1s" src="<?php echo $information['small_image']; ?>" alt="About Picture">
                </div>
                <div class="col-md-6">
                    <div class="about-desc wow fadeInUp" data-wow-duration="1s"  data-wow-delay="500ms">
                        <div class="about-desc-content">
                            <h1 class="font-weight-light mb-5"><?php echo $information['title']; ?></h1>
                            <p class="font-weight-light my-3"><?php echo $information['content']; ?></p>
                        </div>

                        <div class="about-desc-more text-left mt-5">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="about-desc-info">
                                        <b>年龄 : </b>
                                        <span><?php echo $information['Age']; ?></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="about-desc-info">
                                        <b>性别 : </b>
                                        <?php if($information['gender']=='male'): ?>
                                        <span>男</span>
                                        <?php else: ?>
                                        <span>女</span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="about-desc-info">
                                        <b>学历 : </b>
                                        <span><?php echo $information['education']; ?></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="about-desc-info">
                                        <b>工作年限 : </b>
                                        <span><?php echo $information['work_years']; ?></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="about-desc-info">
                                        <b>期望城市 : </b>
                                        <span><?php echo $information['Location']; ?></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="about-desc-info">
                                        <b>薪资 : </b>
                                        <span><?php echo $information['salary']; ?></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="about-desc-info">
                                        <b>电话 : </b>
                                        <span><?php echo $information['phone']; ?></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="about-desc-info">
                                        <b>邮箱 : </b>
                                        <span><?php echo $information['email']; ?></span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="about-desc-info">
                                        <b>联系地址 :</b>
                                        <span><?php echo $information['address']; ?></span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>
    <!-- END: ABOUT -->


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
