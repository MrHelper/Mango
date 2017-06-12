<!DOCTYPE HTML>
<html>

<head>
    <title>Mango medical equipment</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Medicinal" />
    <script type="applisalonion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="{{ asset('/css/bootstrap.css')}}" rel="stylesheet">
    <!-- Custom Theme files -->
    <link href="{{ asset('/css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('/css/slider.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css')}}">

    
    <script src="{{ asset('/js/jquery-1.11.1.min.js')}}"></script>
    <script src="{{ asset('/js/sleekslider.min.js')}}"></script>
    <script src="{{ asset('/js/app.js')}}"></script>
    <script src="{{ asset('/js/move-top.js')}}"></script>
    <script src="{{ asset('/js/bootstrap.js')}}"></script>
    <script src="{{ asset('/js/owl.carousel.js')}}"></script>
    <!--/web-font-->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    <!--/script-->
    <script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event) {
            event.preventDefault();
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 900);
        });
    });
    </script>
</head>

<body>
    @yield('head.silders')    
    <!-- Content -->
    @yield('body.content')
    <!-- Content -->

    <!--footer-->
    <!--/start-footer-section-->
    <div class="footer-section">
        <div class="container">
            <div class="footer-grids wow bounceIn animated" data-wow-delay="0.4s">
                <div class="col-md-6 footer-grid">
                    <h4>Thông tin về <span>Mango</span></h4>
                    <div class="border2"></div>
                    <p>CÔNG TY TNHH THIẾT BỊ Y TẾ MANGO</p>
                    <p>42/2 Nguyễn Đình Khơi, Phường 4, Quận Tân Bình</p>
                    <p>080-3811-3810</p>
                    <p>sales@mango-medical.com.vn</p>
                    <p>Thời gian làm việc: 8h-17h</p>
                </div>
                <div class="col-md-6 footer-grid">
                    <h4>Quy định về <span>thông tin cá nhân</span></h4>
                    <div class="border2"></div>
                    <p>CÔNG TY TNHH THIẾT BỊ Y TẾ MANGO, cam kết bảo vệ thông tin cá nhân của khách hàng.</p>
                    <p class="sub">Định nghĩa của thông tin cá nhân:</p>
                    <p>Thông tin cá nhân khách hàng (gọi tắt là "thông tin cá nhân") bao gồm các thông tin nhằm xác định khách hàng gồm tên, địa chỉ , và số điện thoại, e-mail...</p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--//end-footer-section-->
    <!--//footer-->
    <div class="footer-bottom">
        <div class="container">
            <p>© 2015-2017 mango-medical.com.vn All rights reserved.</p>
        </div>
    </div>
    @yield('body.script')
</body>

</html>
