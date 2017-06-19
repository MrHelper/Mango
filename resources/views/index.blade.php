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
                                    <li class="menu__item menu__item--current"><a href="/" class="menu__link"><span class="menu__helper">Trang chủ</span></a></li>
                                    <li class="menu__item"><a href="/about/" class="menu__link"><span class="menu__helper">Về Công ty Mango</span></a></li>
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
            <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
                <!-- Overlay -->
                <div class="overlay"></div>
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#bs-carousel" data-slide-to="1"></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item slides active">
                        <div class="slide-1"></div>
                        <div class="hero">
                            <hgroup>
                                <h1><font color="red">Máy</font> khoan xương</h1>
                            </hgroup>
                        </div>
                    </div>
                    <div class="item slides">
                        <div class="slide-2"></div>
                        <div class="hero">
                            <hgroup>
                                <h1><font color="red">Dụng cụ</font> phẫu thuật</h1>
                            </hgroup>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Line Slider -->
    </div>
@stop

@section('body.content')

    <!-- Services -->
    <div class="services" id="services">
        <div class="container">
            <div class="inner-w3">
                <div class="sub-hd">
                    <h3 class="tittle">Về<span> chúng tôi</span></h3>
                </div>
            </div>
            <div class="inner_tabs">
                <h2 class="tittle">Vài nét về công ty Mango</h2>
                <p class="sub-para">Chúng tôi chuyên nghiệp về TRANG THIẾT BỊ Y TẾ và MÁY KHOAN XƯƠNG. Được thành lập năm 2016 tại thành phố Hồ Chí Minh. Hoạt động chính của chúng tôi là thương mại và dịch vụ thiết bị y tế. Công ty chuyên sâu về dụng cụ trong lĩnh vực phẫu thuật. Hiện nay chúng tôi là nhà phân phối độc quyền của các hãng như BOJIN, WUYANG.
                </p>
            </div>
        </div>
    </div>
    <!-- //Services -->
    <!--medicinal-->
    <div class="medicinal-w3">
        <div class="container">
            <div class="sub-hd">
                <h3 class="tittle two"><span>Dịch vụ</span></h3>
            </div>
            <div class="medicinal-w3-grids one">
                <div class="col-md-6 medicinal-w3-grid">
                    <div class="col-md-8 medicinal-w3-left">
                        <h4>Máy khoan Bojin</h4>
                        <p>Chúng tôi phân phối độc quyền máy khoang mang thương hiệu Bojin</p>
                    </div>
                    <div class="col-md-4 medicinal-w3-right">
                        <div class="hi-icon-wrap hi-icon-effect-7 hi-icon-effect-7b">
                            <a href="#" class="hi-icon icon1"></a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-6 medicinal-w3-grid">
                    <div class="col-md-4 medicinal-w3-right">
                        <div class="hi-icon-wrap hi-icon-effect-7 hi-icon-effect-7b">
                            <a href="#" class="hi-icon icon4"></a>
                        </div>
                    </div>
                    <div class="col-md-8 medicinal-w3-left1">
                        <h4>Phân phối dụng cụ phẩu thuật</h4>
                        <p>Chúng tôi chuyên phân phối các sản phẩm dụng cụ phẩu thuật </p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--medicinal-->
    <div class="grid_2" id="tender">
        <div class="container">
            <div class="sub-hd">
                <h3 class="tittle">Triễn lãm Y Tế Quốc Tế <span>lần thứ 11</span></h3>
            </div>
            <div class="box_1 one">
                <div class="container mt40">
                    <section class="row">
                        <article class="col-xs-12 col-sm-6 col-md-3">
                            <div class="panel panel-default clstl">
                                <div class="panel-body">
                                    <a href="images/tl/1.jpg" title="Triễn lãm Y Tế Quốc Tế" class="zoom" data-title="Triễn lãm Y Tế Quốc Tế" data-footer="Triễn lãm" data-type="image" data-toggle="lightbox">
                                        <img src="images/tl/1.jpg" alt="Nature Portfolio" />
                                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                                    </a>
                                </div>
                            </div>
                        </article>
                        <article class="col-xs-12 col-sm-6 col-md-3">
                            <div class="panel panel-default clstl">
                                <div class="panel-body">
                                    <a href="images/tl/2.jpg" title="Triễn lãm Y Tế Quốc Tế" class="zoom" data-title="Triễn lãm Y Tế Quốc Tế" data-footer="Triễn lãm" data-type="image" data-toggle="lightbox">
                                        <img src="images/tl/2.jpg" alt="Food Portfolio" />
                                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                                    </a>
                                </div>
                            </div>
                        </article>
                        <article class="col-xs-12 col-sm-6 col-md-3">
                            <div class="panel panel-default clstl">
                                <div class="panel-body">
                                    <a href="images/tl/3.jpg" title="Triễn lãm Y Tế Quốc Tế" class="zoom" data-title="Triễn lãm Y Tế Quốc Tế" data-footer="Triễn lãm" data-type="image" data-toggle="lightbox">
                                        <img src="images/tl/3.jpg" alt="Sports Portfolio" />
                                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                                    </a>
                                </div>
                            </div>
                        </article>
                        <article class="col-xs-12 col-sm-6 col-md-3">
                            <div class="panel panel-default clstl">
                                <div class="panel-body">
                                    <a href="images/tl/4.jpg" title="Triễn lãm Y Tế Quốc Tế" class="zoom" data-title="Triễn lãm Y Tế Quốc Tế" data-footer="Triễn lãm" data-type="image" data-toggle="lightbox">
                                        <img src="images/tl/4.jpg" alt="People Portfolio" />
                                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                                    </a>
                                </div>
                            </div>
                        </article>
                        <article class="col-xs-12 col-sm-6 col-md-3">
                            <div class="panel panel-default clstl">
                                <div class="panel-body">
                                    <a href="images/tl/5.jpg" title="Triễn lãm Y Tế Quốc Tế" class="zoom" data-title="Triễn lãm Y Tế Quốc Tế" data-footer="Triễn lãm" data-type="image" data-toggle="lightbox">
                                        <img src="images/tl/5.jpg" alt="Nature Portfolio" />
                                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                                    </a>
                                </div>
                            </div>
                        </article>
                        <article class="col-xs-12 col-sm-6 col-md-3">
                            <div class="panel panel-default clstl">
                                <div class="panel-body">
                                    <a href="images/tl/6.jpg" title="Triễn lãm Y Tế Quốc Tế" class="zoom" data-title="Triễn lãm Y Tế Quốc Tế" data-footer="Triễn lãm" data-type="image" data-toggle="lightbox">
                                        <img src="images/tl/6.jpg" alt="Food Portfolio" />
                                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                                    </a>
                                </div>
                            </div>
                        </article>
                        <article class="col-xs-12 col-sm-6 col-md-3">
                            <div class="panel panel-default clstl">
                                <div class="panel-body">
                                    <a href="images/tl/7.jpg" title="Triễn lãm Y Tế Quốc Tế" class="zoom" data-title="Triễn lãm Y Tế Quốc Tế" data-footer="Triễn lãm" data-type="image" data-toggle="lightbox">
                                        <img src="images/tl/7.jpg" alt="Sports Portfolio" />
                                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                                    </a>
                                </div>
                            </div>
                        </article>
                        <article class="col-xs-12 col-sm-6 col-md-3">
                            <div class="panel panel-default clstl">
                                <div class="panel-body">
                                    <a href="images/tl/8.jpg" title="Triễn lãm Y Tế Quốc Tế" class="zoom" data-title="Triễn lãm Y Tế Quốc Tế" data-footer="Triễn lãm" data-type="image" data-toggle="lightbox">
                                        <img src="images/tl/8.jpg" alt="People Portfolio" />
                                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                                    </a>
                                </div>
                            </div>
                        </article>
                    </section>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--//team-->
    <!---news-->
    <div class="review-slider">
        <div class="sub-hd" style="padding-bottom: 40px;">
            <h3 class="tittle">Sản phẩm <span>mới</span></h3>
        </div>
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,700&subset=latin-ext" rel="stylesheet">
        <!-- Item slider-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="carousel carousel-showmanymoveone slide" id="itemslidersmall">
                        <div class="carousel-inner">
                            <?php $Step = 1; ?>
                            @foreach($NewProd as $np)
                                @if($Step == 1)
                                <div class="item active">
                                    <div class="col-xs-12 col-sm-6 col-md-2">
                                        <a href="{{route('show.products',$np->id)}}"><img src="{{$np->images}}" class="img-slider img-responsive center-block"></a>
                                        <h4 class="text-center">{{$np->name}}</h4>
                                    </div>
                                </div>
                                <?php $Step = 2; ?>
                                @else
                                <div class="item">
                                    <div class="col-xs-12 col-sm-6 col-md-2">
                                        <a href="{{route('show.products',$np->id)}}"><img src="{{$np->images}}" class="img-slider img-responsive center-block"></a>
                                        <h4 class="text-center">{{$np->name}}</h4>
                                    </div>
                                </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Item slider end-->
        <script type="text/javascript">
        $(window).load(function() {

            $("#flexiselDemo1").flexisel({
                visibleItems: 4,
                animationSpeed: 1000,
                autoPlay: true,
                autoPlaySpeed: 3000,
                pauseOnHover: false,
                enableResponsiveBreakpoints: true,
                responsiveBreakpoints: {
                    portrait: {
                        changePoint: 480,
                        visibleItems: 2
                    },
                    landscape: {
                        changePoint: 640,
                        visibleItems: 3
                    },
                    tablet: {
                        changePoint: 800,
                        visibleItems: 4
                    }
                }
            });
        });
        </script>
        <script type="text/javascript" src="js/jquery.flexisel.js"></script>
    </div>
    <!-- STAR -->
    <div class="grid_2">
        <div class="sub-hd" style="padding-bottom: 40px;">
            <h3 class="tittle">Sản phẩm <span>tiêu biểu</span></h3>
        </div>
        <div class="container">
            <div class="row">
                @foreach($NewProd as $n)
                <div class="col-md-3">
                    <div class="product-item">
                        <div class="pi-img-wrapper">
                            <img src="{{$n->images}}" class="img-responsive starproduct" alt="Berry Lace Dress">
                            <div>
                                <a href="{{route('show.products',$n->id)}}" class="btn">View</a>
                            </div>
                        </div>
                        <h3><a href="{{route('show.products',$n->id)}}">{{$n->name}}</a></h3>
                    </div>
                </div>
                @endforeach
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
    <script src="js/bootstrap.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('i.glyphicon-thumbs-up, i.glyphicon-thumbs-down').click(function() {
                var $this = $(this),
                    c = $this.data('count');
                if (!c) c = 0;
                c++;
                $this.data('count', c);
                $('#' + this.id + '-bs3').html(c);
            });
            $(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox();
            });
        });
    </script>
    <script type="text/javascript">
        (function() {

            $('#itemslidersmall').carousel({
                interval: 3000
            });
        }());

        (function() {
            $('.carousel-showmanymoveone .item').each(function() {
                var itemToClone = $(this);

                for (var i = 1; i < 6; i++) {
                    itemToClone = itemToClone.next();


                    if (!itemToClone.length) {
                        itemToClone = $(this).siblings(':first');
                    }


                    itemToClone.children(':first-child').clone()
                        .addClass("cloneditem-" + (i))
                        .appendTo($(this));
                }
            });
        }());
    </script>
@stop
</body>

</html>
