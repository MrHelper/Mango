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
                                    <li class="menu__item "><a href="/" class="menu__link"><span class="menu__helper">Trang chủ</span></a></li>
                                    <li class="menu__item"><a href="/about/" class="menu__link"><span class="menu__helper">Về Công ty Mango</span></a></li>
                                    <li class="menu__item"><a href="/product/" class="menu__link"><span class="menu__helper">Sản phẩm</span></a></li>
                                    <li class="menu__item menu__item--current"><a href="/csmh/" class="menu__link"><span class="menu__helper">Chính sách mua hàng</span></a></li>
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

    </div>
@stop

@section('body.content')
    <div class="services" id="services">
        <div class="container">
            <div class="inner-w3">
                <div class="sub-hd">
                    <h3 class="tittle">Chính sách <span> mua hàng</span></h3>
                </div>
            </div>
            <div class="inner_tabs">
                <table class="table table-hover">
                    <tbody>
                        <tr>
                            <td style="min-width: 200px">Nhà phân phối:</td>
                            <td>CÔNG TY TNHH THIẾT BỊ Y TẾ MANGO</td>
                        </tr>
                        <tr>
                            <td>Nhân viên kinh doanh:</td>
                            <td>Trương Thị Nguyệt (Tel: 0902-602-605)</td>
                        </tr>
                        <tr>
                            <td>Địa chỉ:</td>
                            <td>Hồ Chí Minh 42/2 Nguyễn Đình Khơi, Phường 4, Quận Tân BìnhTân Phú</td>
                        </tr>
                        <tr>
                            <td>Số điện thoại:</td>
                            <td>08-3811-3810</td>
                        </tr>
                        <tr>
                            <td>E-mail:</td>
                            <td><a href="mailto:sales@mango-medical.com.vn" target="_top">sales@mango-medical.com.vn</a></td>
                        </tr>
                        <tr>
                            <td>URL:</td>
                            <td><a href="www.mango-medical.com.vn/">www.mango-medical.com.vn</a></td>
                        </tr>
                        <tr>
                            <td>Đặt hàng:</td>
                            <td>Quý khách có thể điên thoại để đặt hàng,hoặc quý khách mua tại cửa hàng tại địa chỉ: Hồ Chí Minh, 42/2 Nguyễn Đình Khơi, Phường 4, Quận Tân Bình.</td>
                        </tr>
                        <tr>
                            <td>Thanh toán:</td>
                            <td>-Chuyển khoảng.<br>-Trả tiền sau khi đã nhận hàng.</td>
                        </tr>
                        <tr>
                            <td>Kỳ hạn chi trả:</td>
                            <td>Linh động theo thỏa thuận.</td>
                        </tr>
                        <tr>
                            <td>Kỳ hạn giao hàng:</td>
                            <td>Linh động theo thỏa thuận.</td>
                        </tr>
                        <tr>
                            <td>Trả hàng, đổi hàng:</td>
                            <td>Quý khách có thể trả hàng trong thời hạn 15 ngày kể từ ngày mua hàng.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
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
