<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:78:"D:\phpstudy_pro\WWW\res\public/../application/index\view\experience\index.html";i:1606881387;s:63:"D:\phpstudy_pro\WWW\res\application\index\view\common\head.html";i:1606802051;s:65:"D:\phpstudy_pro\WWW\res\application\index\view\common\footer.html";i:1606812996;}*/ ?>
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



            <div class="collapse navbar-collapse show" id="navbarCollapse">
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
                        <a class="nav-link" href="blog.html"><i class="lni-pencil"></i></i>兴趣爱好</a>
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

<div class="page-overlay">
    <span class="overlay-1"></span>
    <span class="overlay-2"></span>
</div>

<div class="page-wrapper">


    <!-- START: RESUME -->

    <section class="section section-light section-resume" id="resume">
        <div class="container">

            <div class="section-head">
                <span>我的简历</span>
                <h2>经验总结</h2>
            </div>

            <div class="section-resume-wrap">
                <div class="section-experience mb-5">
                    <div class="row">
                        <div class="col-lg-2">
                            <h5 class="section-subHead mb-4 "> 项目经验</h5>
                        </div>

                        <div class="col-lg-10">
                            <div class="ExperienceList pb-3">
                                <?php if(is_array($proexperience) || $proexperience instanceof \think\Collection || $proexperience instanceof \think\Paginator): $i = 0; $__LIST__ = $proexperience;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$proex): $mod = ($i % 2 );++$i;?>
                                <div class="resume-list b-box p-4">
                                    <div class="row align-items-center">

                                        <div class="col-md-12 pb-2 pb-md-0">
                                            <h5 class="mb-3"><?php echo $proex['name']; ?></h5>
                                            <p><?php echo $proex['content']; ?></p>
                                        </div>


                                    </div>
                                </div>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </section>

    <!-- END: RESUME -->

    <!-- START: CTA -->
    <section class="section section-freelance section-light text-center ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-head wow fadeInUp" data-wow-duration="1.5s">
                        <h2>让我们一起努力吧！</h2>
                    </div>
                    <div class="mt-5 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".2s">
                        <a href="#" class="btn hover-state">选择我!</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END: CTA -->

    <!-- START: RESUME -->

    <section class="section section-light section-resume" id="resume">
        <div class="container">
            <div class="section-resume-wrap">
                <div class="section-education">
                    <div class="row">
                        <div class="col-lg-2">
                            <h5 class="section-subHead mb-4">工作经验</h5>
                        </div>

                        <div class="col-lg-10">
                            <div class="EducationList">
                                <div class="row">
                                    <?php if(is_array($experience) || $experience instanceof \think\Collection || $experience instanceof \think\Paginator): $i = 0; $__LIST__ = $experience;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$exp): $mod = ($i % 2 );++$i;?>
                                    <div class="col-md-6">
                                        <div class="resume-list b-box p-4 mb-4">
                                            <div>
                                                <h5><?php echo $exp['name']; ?></h5>
                                                <h6 class="badge badge-light d-inline-block my-3"><?php echo $exp['long']; ?></h6>
                                                <p><?php echo $exp['content']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- END: RESUME -->

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