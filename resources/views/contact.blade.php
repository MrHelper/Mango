@extends('layout.master')

@section('head.silders')
    <div class="main-header" id="house">
        <!--header-top-->
        <div class="header-top">
            <div class="container">
                <nav class="navbar navbar-default">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="logo">
                            <h1><a class="navbar-brand" href="/"><p style="color:burlywood;">Mango</p> <p><small>Medical equipment</small></p><img src="/images/logo.png" alt=" " /></a></h1>
                        </div>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                        <div class="top-menu">
                            <nav class="menu menu--francisco">
                                <ul class="nav navbar-nav menu__list">
                                    <li class="menu__item"><a href="/" class="menu__link"><span class="menu__helper">Trang chủ</span></a></li>
                                    <li class="menu__item"><a href="/about/" class="menu__link"><span class="menu__helper">Về Công ty Mango</span></a></li>
                                    <li class="menu__item"><a href="/product/" class="menu__link"><span class="menu__helper">Sản phẩm</span></a></li>
                                    <li class="menu__item"><a href="/csmh/" class="menu__link"><span class="menu__helper">Chính sách mua hàng</span></a></li>
                                    <li class="menu__item menu__item--current"><a href="/contact/" class="menu__link"><span class="menu__helper">Liên hệ</span></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- /.navbar-collapse -->
                </nav>
                <div class="clearfix"></div>
            </div>
        </div>
        <!--//header-top-->
        <!-- //Line Slider -->
        <div class="top_banner">
            <!-- SVG Arrows -->
            <div class="svg-wrap">
                <svg width="64" height="64" viewBox="0 0 64 64">
                    <path id="arrow-left" d="M46.077 55.738c0.858 0.867 0.858 2.266 0 3.133s-2.243 0.867-3.101 0l-25.056-25.302c-0.858-0.867-0.858-2.269 0-3.133l25.056-25.306c0.858-0.867 2.243-0.867 3.101 0s0.858 2.266 0 3.133l-22.848 23.738 22.848 23.738z" />
                </svg>
                <svg width="64" height="64" viewBox="0 0 64 64">
                    <path id="arrow-right" d="M17.919 55.738c-0.858 0.867-0.858 2.266 0 3.133s2.243 0.867 3.101 0l25.056-25.302c0.858-0.867 0.858-2.269 0-3.133l-25.056-25.306c-0.858-0.867-2.243-0.867-3.101 0s-0.858 2.266 0 3.133l22.848 23.738-22.848 23.738z" />
                </svg>
            </div>
            <!-- JavaScripts -->
            <script type="text/javascript" src="js/sleekslider.min.js"></script>
            <script type="text/javascript" src="js/app.js"></script>
            <!--welcome-->
        </div>
        <!-- /Line Slider -->
    </div>
@stop

@section('body.content')
        <!-- //Line Slider -->
    <div class="top_banner two">
        <div class="container">
            <div class="sub-hd-inner">
                <h3 class="tittle">Liên lạc <span>chúng tôi</span></h3>
            </div>
        </div>
    </div>
    <!--/contact-->
    <div class="contact-top">
        <div class="container">
            <div class="contact-text">
                <div class="con-text">
                    <p><a href="mailto:contact@example.com"> sales@mango-medical.com.vn</a></p>
                    <p> 080-3811-3810</p>
                    <h6> 42/2 Nguyễn Đình Khơi, Phường 4, Quận Tân Bình, Hồ Chí Minh</h6>
                </div>
            </div>
            <div class="contact-form">
                <form method="post" action="#" class="left_form">
                    <div>
                        <span><label>NAME</label></span>
                        <span><input name="userName" type="text" class="textbox"></span>
                    </div>
                    <div>
                        <span><label>E-MAIL</label></span>
                        <span><input name="userEmail" type="text" class="textbox"></span>
                    </div>
                    <div>
                        <span><label>Tel</label></span>
                        <span><input name="userPhone" type="text" class="textbox"></span>
                    </div>
                </form>
                <form class="right_form">
                    <div>
                        <span><label>SUBJECT</label></span>
                        <span><textarea name="userMsg"> </textarea></span>
                    </div>
                    <div>
                        <span><input type="submit" value="Submit" class="myButton"></span>
                    </div>
                </form>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--//contact-->
@stop    

@section('body.script')
    <!--start-smooth-scrolling-->
    <script type="text/javascript">
        $(document).ready(function() {
            $().UItoTop({
                easingType: 'easeOutQuart'
            });
        });
    </script>
    <!--end-smooth-scrolling-->
    <a href="#house" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
@stop
</body>

</html>
