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
                                    <li class="menu__item menu__item--current"><a href="/product/" class="menu__link"><span class="menu__helper">Sản phẩm</span></a></li>
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
    </div>
@stop

@section('body.content')
    <div class="container" style="margin-top:10px;">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <ol class="breadcrumb breadcrumb-arrow">
                    <li><a href="{{route('products')}}">Sản phẩm</a></li>
                </ol>
            </div>
        </div>
    </div>
        
    <!-- Product -->
    <div class="container">
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <table class="table table-hover table-striped" style="border-right: 1px solid lightgray;">
                        <tbody>
                            @foreach($Menu as $m)
                                <tr>
                                    <td><a href="{{ route('menu.show',$m->id)}}">{{$m->name}}</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9" style="margin-bottom:20px;">
            <div class="row">
                @foreach($Product as $p)
                <div class="col-md-3">
                    <div class="product-item">
                        <div class="pi-img-wrapper">
                            <img src="{{$p->images}}" class="img-responsive products" alt="Berry Lace Dress">
                            <div>
                                <a href="{{route('show.products',$p->id)}}" class="btn">View</a>
                            </div>
                        </div>
                        <h3><a href="{{route('show.products',$p->id)}}">{{$p->name}}</a></h3>
                    </div>
                </div>
                @endforeach
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                    {{ $Product->links() }}
                </div>
            </div>
        </div>
    </div>
    <!-- //Product -->
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
