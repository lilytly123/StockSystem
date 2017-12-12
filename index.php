<?php
session_start();
require_once('connect.php');
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>StockSystem</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Outing Travel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <script src="js/modernizr.custom.js"></script>
    <script src="js/suggest.js"></script>

</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<!-- 头部导航栏 -->
<div class="navbar-wrapper">
    <div class="container">
        <nav class="navbar navbar-inverse navbar-static-top cl-effect-20">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">StockSystem</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="#"><span data-hover="Home">Home</span></a></li>
                        <li><a href="#events"><span data-hover="Company">Company</span></a></li>
                        <li><a href="#foots"><span data-hover="Foots">Foots</span></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>

<!-- 首页滑动模块 -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img class="first-slide" src="images/Carousel_1.jpg" alt="First slide">
        </div>
        <div class="item">
            <img class="second-slide" src="images/Carousel_2.jpg" alt="Second slide">
        </div>
        <div class="item">
            <img class="third-slide" src="images/Carousel_3.jpg" alt="Third slide">
        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div><!-- /.carousel -->
<!-- 首页滑动模块 -->

<!-- 公司列表模块-->
<div id="intro_company" class="intro">
    <section class="our-events slideanim" id="events">
        <h3 class="text-center slideanim" >Some Company</h3>
        <p class="text-center slideanim">一些不同类别的公司如下：</p>
        <form class="form-inline">
            <div class="form-group">Type company:
                <input type="text" size="30" value="" id="inputString" onkeyup="lookup(this.value);" onblur="fill();" />
                <!--                <button type="submit" class="btn btn-default" onclick="window.open("detail01.php")>Search</button>-->
                <input type="button" class="btn btn-default" value="Search" onclick="window.location.href='detail01.html'" />
            </div>

            <div class="suggestionsBox" id="suggestions" style="display: none;">
                <div class="suggestionList" id="autoSuggestionsList">
                     
                </div>
            </div>
        </form>

        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3" style="margin-bottom: 10px">
                    <div class="event-info">
                        <h4 class="text-center slideanim">银行类</h4>
                        <p class="eve slideanim"><a href="#">浦发银行</a></p>
                        <p class="eve slideanim"><a href="#">民生银行</a></p>
                        <p class="eve slideanim"><a href="#">招商银行</a></p>
                        <p class="eve slideanim"><a href="#">中信银行</a></p>
                        <p class="eve slideanim">...</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3" style="margin-bottom: 10px">
                    <div class="event-info">
                        <h4 class="text-center slideanim">房地产开发与经营业</h4>
                        <p class="eve slideanim"><a href="#">万科A</a></p>
                        <p class="eve slideanim"><a href="#">中航地产</a></p>
                        <p class="eve slideanim"><a href="#">招商地产</a></p>
                        <p class="eve slideanim"><a href="#">华联控股</a></p>
                        <p class="eve slideanim">...</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3" style="margin-bottom: 10px">
                    <div class="event-info">
                        <h4 class="text-center slideanim">零售类</h4>
                        <p class="eve slideanim"><a href="#">大通燃气</a></p>
                        <p class="eve slideanim"><a href="#">西安民生</a></p>
                        <p class="eve slideanim"><a href="#">开元投资</a></p>
                        <p class="eve slideanim"><a href="#">苏宁云商</a></p>
                        <p class="eve slideanim">...</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3" style="margin-bottom: 10px">
                    <div class="event-info">
                        <h4 class="text-center slideanim">医药制造类</h4>
                        <p class="eve slideanim"><a href="#">云南白药</a></p>
                        <p class="eve slideanim"><a href="#">华东医药</a></p>
                        <p class="eve slideanim"><a href="#">白云山</a></p>
                        <p class="eve slideanim"><a href="#">同仁堂</a></p>
                        <p class="eve slideanim">...</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3" style="margin-bottom: 10px">
                    <div class="event-info">
                        <h4 class="text-center slideanim">军工类</h4>
                        <p class="eve slideanim"><a href="#">中船股份</a></p>
                        <p class="eve slideanim"><a href="#">抚顺特钢</a></p>
                        <p class="eve slideanim"><a href="#">中国重工</a></p>
                        <p class="eve slideanim"><a href="#">航天科技</a></p>
                        <p class="eve slideanim">...</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3" style="margin-bottom: 10px">
                    <div class="event-info">
                        <h4 class="text-center slideanim">计算机应用服务类</h4>
                        <p class="eve slideanim"><a href="#">中青宝</a></p>
                        <p class="eve slideanim"><a href="#">海兰信</a></p>
                        <p class="eve slideanim"><a href="#">联网科技</a></p>
                        <p class="eve slideanim"><a href="#">世纪瑞尔</a></p>
                        <p class="eve slideanim">...</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- /Events -->
<!-- 公司列表模块-->


<!-- 尾部声明模块-->
<!-- Footer Section -->
<section class="footer" id="foots">
    <h2 class="text-center">Thanks For Visiting Us</h2>
    <hr>
    <div class="copyright">
        <p>© 2017. All Rights Reserved | Design by <a href="#" target="_blank">Our Group</a></p>
    </div>
</section>
<!-- /Footer Section -->
<!-- 尾部声明模块-->

<!-- Back To Top -->
<a href="#0" class="cd-top">Top</a>
<!-- /Back To Top -->

<!-- js files -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/SmoothScroll.min.js"></script>
<script src="js/darkbox.js"></script>
<script src="js/main.js"></script>
<script src="js/showPic.js"></script>
<script>
    $(document).ready(function(){
        $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
            var hash = this.hash;
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 900, function(){
                window.location.hash = hash;
            });
        });
    })
</script>
<script>
    $(window).scroll(function() {
        $(".slideanim").each(function(){
            var pos = $(this).offset().top;

            var winTop = $(window).scrollTop();
            if (pos < winTop + 600) {
                $(this).addClass("slide");
            }
        });
    });
</script>
</body>
</html>


