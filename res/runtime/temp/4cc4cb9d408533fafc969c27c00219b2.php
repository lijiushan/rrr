<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:73:"D:\phpstudy_pro\WWW\res\public/../application/index\view\major\index.html";i:1606881387;s:63:"D:\phpstudy_pro\WWW\res\application\index\view\common\head.html";i:1608787169;s:65:"D:\phpstudy_pro\WWW\res\application\index\view\common\footer.html";i:1606812996;}*/ ?>
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

    <!-- START: SERVICES -->
    <section class="section section-light section-services" id="services">
        <div class="container">
            <div class="section-head">
                <span>我拥有的</span>
                <h2>职业技能</h2>
            </div>

            <div class="row mt-4">
                <?php if(is_array($major) || $major instanceof \think\Collection || $major instanceof \think\Paginator): $i = 0; $__LIST__ = $major;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$major): $mod = ($i % 2 );++$i;?>
                <div class="col-sm-6 col-lg-6">
                    <div class="services-list b-box hover-state p-4 mt-4 wow fadeInUp" data-wow-duration="1.5s">
                        <div class="services-list-icon">
                            <i class="<?php echo $major['icon']; ?>" aria-hidden="true"></i>
                            <span><?php echo $major['id']; ?></span>
                        </div>
                        <div class="mt-4">
                            <h5 class="mb-0"><?php echo $major['title']; ?></h5>
                            <p class=" mt-3"><?php echo $major['des']; ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </div>
    </section>
    <!-- END: SERVICES -->
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
