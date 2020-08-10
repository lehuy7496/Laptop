<!DOCTYPE HTML>
<html>
<head>
<title>HH Laptop</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Fashionpress Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="{{asset('public/frontend/css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="{{asset('public/frontend/css/style.css')}}" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!--webfont-->
<!-- <link href='http://fonts.googleapis.com/css?family=Lato:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
 --><script type="text/javascript" src="{{asset('public/frontend/js/jquery-1.11.1.min.js')}}"></script>
<script src="{{asset('public/frontend/js/responsiveslides.min.js')}}"></script>
<script>
    $(function () {
      $("#slider").responsiveSlides({
        auto: true,
        nav: true,
        speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
</script>
<script type="text/javascript" src="{{asset('public/frontend/js/hover_pack.js')}}"></script>
</head>
<body>
<div class="header">
    <div class="header_top">
        <div class="container">
            <div class="logo">
                <a href="{{URL::to('/trang-chu')}}"><img src="{{asset('public/frontend/images/logo.png')}}" alt=""/></a>
            </div>
            <ul class="shopping_grid">
                  <a href="login.html"><li>Đăng nhập</li></a>
                  <a href="#"><li><span class="m_1">Giỏ hàng</span>&nbsp;&nbsp;(0) &nbsp;<img src="{{asset('public/frontend/images/bag.png')}}" alt=""/></li></a>
                  <div class="clearfix"> </div>
            </ul>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="h_menu4"><!-- start h_menu4 -->
        <div class="container">
                <a class="toggleMenu" href="#">Menu</a>
                <ul class="nav">
                    <li class="active"><a href="{{URL::to('/trang-chu')}}" data-hover="Home">Trang chủ</a></li>
                    <li><a href="#" data-hover="About Us">Sản phẩm</a></li>
                    <li><a href="#" data-hover="Careers">Tin tức</a></li>
                    <li><a href="#" data-hover="Contact Us">Giỏ hàng</a></li>
                    <li><a href="#" data-hover="Company Profile">Liên hệ</a></li>
                 </ul>
                 <script type="text/javascript" src="{{asset('public/frontend/js/nav.js')}}"></script>
          </div><!-- end h_menu4 -->
     </div>
</div>
<div class="slider">
      <div class="callbacks_container">
          <ul class="rslides" id="slider">
            <li><img src="{{asset('public/frontend/images/banner1.jpg')}}" class="img-responsive" alt=""/>
            <div class="banner_desc">
                <h1>We Provide Worlds top fashion for less fashionpress.</h1>
                <h2>FashionPress the name of the of hi class fashion Web FreePsd.</h2>
            </div>
            </li>
            <li><img src="{{asset('public/frontend/images/banner2.jpg')}}" class="img-responsive" alt=""/>
             <div class="banner_desc">
                <h1>Duis autem vel eum iriure dolor in hendrerit.</h1>
                <h2>Claritas est etiam processus dynamicus, qui sequitur .</h2>
             </div>
            </li>
            <li><img src="{{asset('public/frontend/images/banner3.jpg')}}" class="img-responsive" alt=""/>
              <div class="banner_desc">
                <h1>Ut wisi enim ad minim veniam, quis nostrud.</h1>
                <h2>Mirum est notare quam littera gothica, quam nunc putamus.</h2>
              </div>
            </li>
          </ul>
      </div>
</div>
<div class="column_center">
  <div class="container">
    <div class="search">
      <div class="stay">Tìm kiếm sản phẩm</div>
      <div class="stay_right">
          <input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
          <input type="submit" value="">
      </div>
      <div class="clearfix"> </div>
    </div>
    <div class="clearfix"> </div>
  </div>
</div>
<div class="main">
  <div class="content_top">
    <div class="container">
       <div class="col-md-3 sidebar_box">
         <div class="sidebar">
            <div class="menu_box">
                <h3 class="menu_head">Thương hiệu</h3>
                 @foreach($brand as $key => $brand)
                  <ul class="">
                    <li class="item2">
                        <a href="{{URL::to('/thuong-hieu/'.$brand->brand_id)}}">{{$brand->brand_name}}</a>
                    </li>
                </ul>
                @endforeach
            </div>
            <div class="menu_box">
                <h3 class="menu_head">Danh mục sản phẩm</h3>
                @foreach($category as $key => $cate)
                  <ul class="">
                    <li class="item2">
                        <a href="{{URL::to('/danh-muc/'.$cate->category_id)}}">{{$cate->category_name}}</a>
                    </li>
                </ul>
                @endforeach
            </div>

            
                <!--initiate accordion-->
        <script type="text/javascript">
            $(function() {
                var menu_ul = $('.menu > li > ul'),
                       menu_a  = $('.menu > li > a');
                menu_ul.hide();
                menu_a.click(function(e) {
                    e.preventDefault();
                    if(!$(this).hasClass('active')) {
                        menu_a.removeClass('active');
                        menu_ul.filter(':visible').slideUp('normal');
                        $(this).addClass('active').next().stop(true,true).slideDown('normal');
                    } else {
                        $(this).removeClass('active');
                        $(this).next().stop(true,true).slideUp('normal');
                    }
                });
            
            });
        </script>
       </div>
       </div> 
       <div class="col-md-9 content_right"> 
       @yield('content') 
       </div>
      </div>        
    </div>
</div>
<div class="footer_bg">
</div>
<div class="footer">
    <div class="container">
        <div class="col-md-3 f_grid1">
            <h3>About</h3>
            <a href="#"><img src="{{asset('public/frontend/images/logo.png')}}" alt=""/></a>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
        </div>
        <div class="col-md-3 f_grid1 f_grid2">
            <h3>Follow Us</h3>
            <ul class="social">
                <li><a href=""> <i class="fb"> </i><p class="m_3">Facebook</p><div class="clearfix"> </div></a></li>
                <li><a href=""><i class="tw"> </i><p class="m_3">Twittter</p><div class="clearfix"> </div></a></li>
                <li><a href=""><i class="google"> </i><p class="m_3">Google</p><div class="clearfix"> </div></a></li>
                <li><a href=""><i class="instagram"> </i><p class="m_3">Instagram</p><div class="clearfix"> </div></a></li>
            </ul>
        </div>
        <div class="col-md-6 f_grid3">
            <h3>Contact Info</h3>
            <ul class="list">
                <li><p>Phone : 1.800.254.5487</p></li>
                <li><p>Fax : 1.800.254.2548</p></li>
                <li><p>Email : <a href="mailto:info(at)fashionpress.com"> info(at)fashionpress.com</a></p></li>
            </ul>
            <ul class="list1">
                <li><p>Aliquam augue a bibendum ipsum diam, semper porttitor libero elit egestas gravida, ut quam, nunc taciti</p></li>
            </ul>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<div class="footer_bottom">
        <div class="container">
            <div class="cssmenu">
                <ul>
                    <li class="active"><a href="login.html">Privacy Policy</a></li> .
                    <li><a href="checkout.html">Terms of Service</a></li> .
                    <li><a href="checkout.html">Creative Rights Policy</a></li> .
                    <li><a href="login.html">Contact Us</a></li> .
                    <li><a href="register.html">Support & FAQ</a></li>
                </ul>
            </div>
            <div class="copy">
                <p>&copy;  2015 Template by <a href="http://w3layouts.com" target="_blank">w3layouts</a></p>
            </div>
            <div class="clearfix"> </div>
        </div>
</div>
</body>
</html>     