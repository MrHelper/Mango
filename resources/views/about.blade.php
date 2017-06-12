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
                            <h1><a class="navbar-brand" href="index.html"><p style="color:burlywood;">Mango</p> <p><small>Medical equipment</small></p><img src="/images/logo.png" alt=" " /></a></h1>
                        </div>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                        <div class="top-menu">
                            <nav class="menu menu--francisco">
                                <ul class="nav navbar-nav menu__list">
                                    <li class="menu__item"><a href="/" class="menu__link"><span class="menu__helper">Trang chủ</span></a></li>
                                    <li class="menu__item menu__item--current"><a href="/about/" class="menu__link"><span class="menu__helper">Về Công ty Mango</span></a></li>
                                    <li class="menu__item"><a href="/product/" class="menu__link"><span class="menu__helper">Sản phẩm</span></a></li>
                                    <li class="menu__item"><a href="/csmh/" class="menu__link"><span class="menu__helper">Chính sách mua hàng</span></a></li>
                                    <li class="menu__item"><a href="/contact/" class="menu__link"><span class="menu__helper">Liên hệ</span></a></li>
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
                <h3 class="tittle">Về <span>chúng tôi</span></h3>
            </div>
        </div>
    </div>
    <div class="main-textgrids">
        <div class="container">
            <div class="col-md-5 ab-pic">
                <img src="/images/ab.jpg" style="height:auto; width:100%;" alt=" " />
            </div>
            <div class="col-md-7 ab-text">
                <p>Chúng tôi chuyên nghiệp về <font class="hilight">TRANG THIẾT BỊ Y TẾ và MÁY KHOAN XƯƠNG. </font><br>
                Được thành lập năm 2016 tại thành phố Hồ Chí Minh. Hoạt động chính của chúng tôi là thương mại và dịch vụ thiết bị y tế. <br>
                <font class="hilight">Công ty chuyên sâu về dụng cụ trong lĩnh vực phẫu thuật. </font><br> 
                Hiện nay chúng tôi là nhà phân phối độc quyền của các hãng như <font class="hilight">BOJIN, WUYANG</font>. <br> 
                Chúng tôi đã có mặt tại tỉnh Quảng Tây – Trung Quốc, <font class="hilight">là nhà thầu độc quyền</font> cung cấp cho các Bệnh viện liên quan về giải phẩu khớp xương. Ở Trung Quốc chúng tôi đã xây dựng các kênh phân phối uỷ quyền cho các công ty thương mại khác cung cấp sản phẩm của các hãng như <font class="hilight">BOJIN, WUYANG, WARKMAN, JUST</font>.<br> 
                Chúng tôi không ngừng cập nhật các sản phẩm chất lượng cao, tạo nền tảng tốt trên thị trường. Mục tiêu của chúng tôi là cung cấp cho bệnh viện những dụng cụ, thiết bị y tế an toàn và tiên tiến nhất. Với đội ngũ nhân viên năng động, nhiệt tình, có trình độ và chuyên môn kỹ thuật cao, được đào tạo bài bản, chuyên nghiệp hy vọng sẽ mang lại cho quý khách những sản phẩm và dịch vụ tốt nhất.
                </p>
            </div>
            <div class="clearfix"> </div>
            <div class="statements">
                <div class="col-md-7 mission">
                    <h4>Sản phẩm <span>giao dịch</span></h4>
                    <p>Công ty chúng tôi chuyên nghiệp các mặt hàng: </p>
                    <ul class="ab">
                        <li><a>Vật tư dụng cụ phương tiện kết hợp xương chấn thương chỉnh hình.</a></li>
                        <li><a>Phương tiện kết hợp xương bên trong.</a></li>
                        <li><a>Phương tiện kết hợp xương bên ngoài: Khung bất động ngoại vi Fesa, Ilizarov</a></li>
                        <li><a>Khớp háng Bipolar / Total.</a></li>
                        <li><a>Máy khoan cưa xương y tế.</a></li>
                        <li><a>Dụng cụ phẫu thuật chuyên dụng cho các chuyên khoa.</a></li>
                    </ul>
                </div>
                <div class="col-md-5 facts">
                    <img src="/images/ab1.jpg" alt=" " />
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!--/start-footer-section-->
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
