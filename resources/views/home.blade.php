<!doctype html>
<html lang="en">

<head>
    <title>Star Coffee</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" type="image/png" href="../image/icon/icon_page.png">


    <!-- Bootstrap css file -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

    <!--  custom css file  -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/animate.css">
    <!-- <link rel="stylesheet"  href="css/animate.min.css"> -->

    <!--  Responsive css file  -->
    <link rel="stylesheet" type="text/css" href="css/reponsive.css">

    <!--  font awesome icons  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" /> -->
</head>

<body>
<!--  ======================= Start Header Area ============================== -->
<header class="header_area">
    <div class="main-menu">
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand text-white" href="home.blade.php"><img src="image/icon/logo star1.png" alt=""
                                                                               style="width: 190px;"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link text-white" href="home.blade.php">Trang chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Câu chuyện cà phê</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Trải Nghiệm</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="menuCoffee.blade.php">Thực Đơn</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="new.blade.php">Tin tức</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="aboutMe.blade.php">Về Chúng Tôi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="pay.blade.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>


</header>
<!--  ======================= End Header Area ============================== -->
<!-- <header class="header">
  <div class="container navbar">
    <div class="row v-center">
      <div class="header-item item-left">
        <div class="logo">
          <a href="#">
            <img src="image/icon/logo star1.png" alt="" width="120px">
          </a>
        </div>
      </div>

      <div class="header-item item-center">
        <div class="menu-overlay">
        </div>
        <nav class="menu">
          <div class="mobile-menu-head">
            <div class="go-back"><i class="fa fa-angle-left"></i></div>
            <div class="current-menu-title"></div>
            <div class="mobile-menu-close">&times;</div>
          </div>
          <ul class="menu-main ">
            <li class="menu-item-has-children">
              <a class="nav-link text-white" href="homeCoffee.html">Trang chủ</a>

            </li>
            <li class="menu-item-has-children">
              <a class="nav-link text-white" href="#">Câu chuyện cà phê</a>

            </li>
            <li class="menu-item-has-children">
              <a class="nav-link text-white" href="#">Trải Nghiệm</a>

            </li>
            <li class="menu-item-has-children">
              <a class="nav-link text-white" href="menuCoffee.html">Thực Đơn</a>


            </li>
            <li class="menu-item-has-children">
              <a class="nav-link text-white" href="new.html">Tin tức</a>

            </li>
            <li class="menu-item-has-children">
              <a class="nav-link text-white" href="aboutMe.html">Về Chúng Tôi</a>

            </li>
          </ul>
        </nav>
      </div>

      <div class="header-item item-right">
        <a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-user-circle" aria-hidden="true"></i></a>

        <div class="mobile-menu-trigger">
          <span></span>
        </div>
      </div>
    </div>
  </div>
</header> -->
<!--  ======================= Start Main Area ============================== -->
<main class="site_main_area">
    <section class="slide_area">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="image/img/home-1-slider-img-2.jpg" alt="First slide">
                    <div class="carousel-caption">
                        <img  src="image/icon/icon slide.png" alt="">
                        <h1 class="title-h1 text-uppercase wow slideInLeft">The coffee's house</h1>
                        <p class="line wow lightSpeedIn">Ngôi nhà của chúng tôi bắt nguồn từ vùng đất Tây Nguyên đầy nắng và gió</p>
                        <button class="btn primary-button text-uppercase wow bounceInUp">Work with us!</button>
                    </div>
                </div>
                <!-- <div class="carousel-item">
                  <img class="d-block w-100" src="image/img/home-1-slider-img-2.jpg" alt="Second slide">
                  <div class="carousel-caption d-none d-md-block">

                  </div>
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="image/img/home-1-slider-img-2.jpg" alt="Third slide">
                  <div class="carousel-caption d-none d-md-block">

                  </div>
                </div> -->
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <!--  ======================= Start Service Area ============================== -->
    <section class="service_area">
        <div class="container">
            <div class="row justify-content-center text-center pt-5">
                <div class="col-md-8 col-12 ">
                    <p class="line">What Happens Here?</p>
                    <h3 class="title-text text-uppercase wow bounceIn">Services we provide</h3>
                </div>
            </div>
            <div class="row list-strong">
                <div class="col-md-4 col-12">
                    <img src="image/img/demo1.jpg" alt="">
                    <div class="row">
                        <div class="col-3">01</div>
                        <div class="col-9">Beautiful place</div>
                    </div>
                    <div class="para">Alienum phaedrum to rquatos mort eu, vis detraxit periculis ex, nihil expetendis in mei.
                        Mei an pericula euripidis, hinc partem ei est. Eos ei nisl graecis, vix apeririequat an. Eius lorem
                        tincidunt vix atle.

                    </div>
                    <div class="read_more">
                        <a href="">read more <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <img src="image/img/demo1.jpg" alt="">
                    <div class="row">
                        <div class="col-3">01</div>
                        <div class="col-9">full taste</div>
                    </div>
                    <div class="para">Alienum phaedrum to rquatos mort eu, vis detraxit periculis ex, nihil expetendis in mei.
                        Mei an pericula euripidis, hinc partem ei est. Eos ei nisl graecis, vix apeririequat an. Eius lorem
                        tincidunt vix atle.

                    </div>
                    <div class="read_more">
                        <a href="">read more <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <img src="image/img/demo1.jpg" alt="">
                    <div class="row">
                        <div class="col-3">01</div>
                        <div class="col-9">full taste</div>
                    </div>
                    <div class="para">Alienum phaedrum to rquatos mort eu, vis detraxit periculis ex, nihil expetendis in mei.
                        Mei an pericula euripidis, hinc partem ei est. Eos ei nisl graecis, vix apeririequat an. Eius lorem
                        tincidunt vix atle.

                    </div>
                    <div class="read_more">
                        <a href="">read more <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  ======================= End Service Area ============================== -->

    <!--  ======================= Start App Area ============================== -->
    <section class="about_area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-3">
                    <img src="image/icon/home-1-img-6.png" alt="">
                </div>
                <div class="col-md-6 col-9 text-left">
                    <p class="line">What Happens Here?</p>
                    <h3 class="title-text text-uppercase wow bounceIn">Services we provide</h3>
                    <div class="para">Alienum phaedrum to rquatos mort eu, vis detraxit periculis ex, nihil expetendis in mei.
                        Mei an pericula euripidis, hinc partem ei est. Eos ei nisl graecis, vix apeririequat an. Eius lorem
                        tincidunt vix atle.

                    </div>
                    <button class="btn primary-button text-uppercase wow bounceInUp">Work with us!</button>
                </div>
            </div>
        </div>
    </section>
    <!--  ======================= End About Area ============================== -->

    <!--  ======================= Start Try Coffee Area ============================== -->
    <section class="try_coffee_area">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3 col-sm-6 col-12">
                    <img src="image/icon/1.png" alt="">
                    <div class="para">Alienum phaedrum to rquatos mort eu, vis detraxit periculis ex, nihil expetendis in mei.
                        Mei an pericula euripidis, hinc partem ei est. Eos ei nisl graecis, vix apeririequat an. Eius lorem
                        tincidunt vix atle.

                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <img src="image/icon/2.png" alt="">
                    <div class="para">Alienum phaedrum to rquatos mort eu, vis detraxit periculis ex, nihil expetendis in mei.
                        Mei an pericula euripidis, hinc partem ei est. Eos ei nisl graecis, vix apeririequat an. Eius lorem
                        tincidunt vix atle.

                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <img src="image/icon/3.png" alt="">
                    <div class="para">Alienum phaedrum to rquatos mort eu, vis detraxit periculis ex, nihil expetendis in mei.
                        Mei an pericula euripidis, hinc partem ei est. Eos ei nisl graecis, vix apeririequat an. Eius lorem
                        tincidunt vix atle.

                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <img src="image/icon/4.png" alt="">
                    <div class="para">Alienum phaedrum to rquatos mort eu, vis detraxit periculis ex, nihil expetendis in mei.
                        Mei an pericula euripidis, hinc partem ei est. Eos ei nisl graecis, vix apeririequat an. Eius lorem
                        tincidunt vix atle.

                    </div>
                </div>
            </div>
            <div class="row bot text-left">
                <div class="col-sm-6 col-12">
                    <img class="bgrh" src="image/img/hat.jpg" alt="">
                    <div class="bgr">
                        <h3>Try the best coffee in the city</h3>
                        <div class="para">Alienum phaedrum to rquatos mort eu, vis detraxit periculis ex, nihil expetendis in mei.
                            Mei an pericula euripidis, hinc partem ei est. Eos ei nisl graecis, vix apeririequat an. Eius lorem
                            tincidunt vix atle.
                        </div>
                        <div class="read_more">
                            <a href="">read more <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-12 right1">
                    <img src="image/img/main-home-project-pres-1.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <!--  ======================= End Try Coffee Area ============================== -->

    <!--  ======================= Start Wet Menu Area ============================== -->
    <section class="wet_menu_area">
        <div class="container">
            <div class="row justify-content-center text-center pt-5">
                <div class="col-md-8 col-12 ">
                    <p class="line">What Happens Here?</p>
                    <h3 class="title-text text-uppercase wow bounceIn">Services we provide</h3>
                </div>
            </div>
            <div class="row menu_list" id="list-menu-temp">
                <div class="row">
                    <div class="col-sm-6 col-12">
                        <a href="pay.html">
                            <div class="row" id="product-item-temp">
                                <div class="col-2">
                                    <img src="image/img/coffee1.jpg" alt="" width="100%">
                                </div>
                                <div class="col-8">
                                    <h4>Cafe late</h4>
                                    <span>Fresh brewed coffee and steamed milk</span>
                                </div>
                                <div class="col-2">
                                    $42.5
                                </div>
                            </div>
                        </a>
                        <a href="">
                            <div class="row">
                                <div class="col-2">
                                    <img src="image/img/coffee1.jpg" alt="" width="100%">
                                </div>
                                <div class="col-8">
                                    <h4>Cafe late</h4>
                                    <span>Fresh brewed coffee and steamed milk</span>
                                </div>
                                <div class="col-2">
                                    $42.5
                                </div>
                            </div>
                        </a>
                        <a href="">
                            <div class="row">
                                <div class="col-2">
                                    <img src="image/img/coffee1.jpg" alt="" width="100%">
                                </div>
                                <div class="col-8">
                                    <h4>Cafe late</h4>
                                    <span>Fresh brewed coffee and steamed milk</span>
                                </div>
                                <div class="col-2">
                                    $42.5
                                </div>
                            </div>
                        </a>
                        <a href="">
                            <div class="row">
                                <div class="col-2">
                                    <img src="image/img/coffee1.jpg" alt="" width="100%">
                                </div>
                                <div class="col-8">
                                    <h4>Cafe late</h4>
                                    <span>Fresh brewed coffee and steamed milk</span>
                                </div>
                                <div class="col-2">
                                    $42.5
                                </div>
                            </div>
                        </a>
                        <a href="">
                            <div class="row">
                                <div class="col-2">
                                    <img src="image/img/coffee1.jpg" alt="" width="100%">
                                </div>
                                <div class="col-8">
                                    <h4>Cafe late</h4>
                                    <span>Fresh brewed coffee and steamed milk</span>
                                </div>
                                <div class="col-2">
                                    $42.5
                                </div>
                            </div>
                        </a>
                        <a href="">
                            <div class="row">
                                <div class="col-2">
                                    <img src="image/img/coffee1.jpg" alt="" width="100%">
                                </div>
                                <div class="col-8">
                                    <h4>Cafe late</h4>
                                    <span>Fresh brewed coffee and steamed milk</span>
                                </div>
                                <div class="col-2">
                                    $42.5
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-12">
                        <a href="">
                            <div class="row">
                                <div class="col-2">
                                    <img src="image/img/coffee1.jpg" alt="" width="100%">
                                </div>
                                <div class="col-8">
                                    <h4>Cafe late</h4>
                                    <span>Fresh brewed coffee and steamed milk</span>
                                </div>
                                <div class="col-2">
                                    $42.5
                                </div>
                            </div>
                        </a>
                        <a href="">
                            <div class="row">
                                <div class="col-2">
                                    <img src="image/img/coffee1.jpg" alt="" width="100%">
                                </div>
                                <div class="col-8">
                                    <h4>Cafe late</h4>
                                    <span>Fresh brewed coffee and steamed milk</span>
                                </div>
                                <div class="col-2">
                                    $42.5
                                </div>
                            </div>
                        </a>
                        <a href="">
                            <div class="row">
                                <div class="col-2">
                                    <img src="image/img/coffee1.jpg" alt="" width="100%">
                                </div>
                                <div class="col-8">
                                    <h4>Cafe late</h4>
                                    <span>Fresh brewed coffee and steamed milk</span>
                                </div>
                                <div class="col-2">
                                    $42.5
                                </div>
                            </div>
                        </a>
                        <a href="">
                            <div class="row">
                                <div class="col-2">
                                    <img src="image/img/coffee1.jpg" alt="" width="100%">
                                </div>
                                <div class="col-8">
                                    <h4>Cafe late</h4>
                                    <span>Fresh brewed coffee and steamed milk</span>
                                </div>
                                <div class="col-2">
                                    $42.5
                                </div>
                            </div>
                        </a>
                        <a href="">
                            <div class="row">
                                <div class="col-2">
                                    <img src="image/img/coffee1.jpg" alt="" width="100%">
                                </div>
                                <div class="col-8">
                                    <h4>Cafe late</h4>
                                    <span>Fresh brewed coffee and steamed milk</span>
                                </div>
                                <div class="col-2">
                                    $42.5
                                </div>
                            </div>
                        </a>
                        <a href="">
                            <div class="row">
                                <div class="col-2">
                                    <img src="image/img/coffee1.jpg" alt="" width="100%">
                                </div>
                                <div class="col-8">
                                    <h4>Cafe late</h4>
                                    <span>Fresh brewed coffee and steamed milk</span>
                                </div>
                                <div class="col-2">
                                    $42.5
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <button class="btn primary-button text-uppercase wow bounceInUp">Work with us!</button>
            </div>
        </div>
    </section>
    <!--  ======================= End Wet Menu Area ============================== -->

    <!--  ======================= Start Dry Menu Area ============================== -->
    <section class="dry_menu_area">
        <div class="container">
            <div class="row justify-content-center text-center pt-5">
                <div class="col-md-8 col-12 ">
                    <p class="line">What Happens Here?</p>
                    <h3 class="title-text text-uppercase wow bounceIn">Services we provide</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-12">
                    <img src="image/img/4b40f91038ffc7a19eee.jpg" alt="">
                    <ul class="rating">
                        <li class="rating-item" data-rate="1"></li>
                        <li class="rating-item active" data-rate="2"></li>
                        <li class="rating-item" data-rate="3"></li>
                        <li class="rating-item" data-rate="4"></li>
                        <li class="rating-item" data-rate="5"></li>
                    </ul>
                    <a href="">$46.00</a>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <img src="image/img/4b40f91038ffc7a19eee.jpg" alt="">
                    <ul class="rating">
                        <li class="rating-item" data-rate="1"></li>
                        <li class="rating-item active" data-rate="2"></li>
                        <li class="rating-item" data-rate="3"></li>
                        <li class="rating-item" data-rate="4"></li>
                        <li class="rating-item" data-rate="5"></li>
                    </ul>
                    <a href="">$46.00</a>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <img src="image/img/4b40f91038ffc7a19eee.jpg" alt="">
                    <ul class="rating">
                        <li class="rating-item" data-rate="1"></li>
                        <li class="rating-item active" data-rate="2"></li>
                        <li class="rating-item" data-rate="3"></li>
                        <li class="rating-item" data-rate="4"></li>
                        <li class="rating-item" data-rate="5"></li>
                    </ul>
                    <a href="">$46.00</a>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <img src="image/img/4b40f91038ffc7a19eee.jpg" alt="">
                    <ul class="rating">
                        <li class="rating-item" data-rate="1"></li>
                        <li class="rating-item active" data-rate="2"></li>
                        <li class="rating-item" data-rate="3"></li>
                        <li class="rating-item" data-rate="4"></li>
                        <li class="rating-item" data-rate="5"></li>
                    </ul>
                    <a href="">$46.00</a>
                </div>
            </div>
        </div>
    </section>
    <!--  ======================= End Dry Menu Area ============================== -->

    <!--  ======================= Start Image Area ============================== -->
    <section class="image_area pt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7 col-12">
                    <div class="row">
                        <div class="col-md-8 col-12">
                            <img src="image/img/home-1-gallery-1.jpg" alt="">
                        </div>
                        <div class="col-md-4 col-12">
                            <div class="row">
                                <div class="col-12">
                                    <img src="image/img/home-1-gallery-2-550x550.jpg" alt="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <img src="image/img/home-1-gallery-2-550x550.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-12">
                    <div class="row">
                        <div class="col-md-7 col-12">
                            <img src="image/img/home-1-gallery-4-500x1000.jpg" alt="">
                        </div>
                        <div class="col-md-5 col-12">
                            <div class="row">
                                <div class="col-12">
                                    <img src="image/img/home-1-gallery-3-550x550.jpg" alt="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <img src="image/img/home-1-gallery-2-550x550.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  ======================= End Image Area ============================== -->

    <!--  ======================= Start Blog Area ============================== -->
    <section class="blog_area">
        <div class="container">
            <div class="row justify-content-center text-center pt-5">
                <div class="col-md-8 col-12 ">
                    <p class="line">What Happens Here?</p>
                    <h3 class="title-text text-uppercase wow bounceIn">Services we provide</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-12">
                    <img src="image/img/demo1.jpg" alt="">
                    <h4>Make it simple</h4>
                    <span>by Jane Doe / Competition / 23.02.2016</span>
                    <div class="para">Alienum phaedrum to rquatos mort eu, vis detraxit periculis ex, nihil expetendis in mei.
                        Mei an pericula euripidis, hinc partem ei est. Eos ei nisl graecis, vix apeririequat an. Eius lorem
                        tincidunt vix atle.

                    </div>
                    <div class="read_more">
                        <a href="">read more <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <img src="image/img/demo1.jpg" alt="">
                    <h4>Make it simple</h4>
                    <span>by Jane Doe / Competition / 23.02.2016</span>
                    <div class="para">Alienum phaedrum to rquatos mort eu, vis detraxit periculis ex, nihil expetendis in mei.
                        Mei an pericula euripidis, hinc partem ei est. Eos ei nisl graecis, vix apeririequat an. Eius lorem
                        tincidunt vix atle.</div>
                    <div class="read_more">
                        <a href="">read more <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <img src="image/img/demo1.jpg" alt="">
                    <h4>Make it simple</h4>
                    <span>by Jane Doe / Competition / 23.02.2016</span>
                    <div class="para">Alienum phaedrum to rquatos mort eu, vis detraxit periculis ex, nihil expetendis in mei.
                        Mei an pericula euripidis, hinc partem ei est. Eos ei nisl graecis, vix apeririequat an. Eius lorem
                        tincidunt vix atle.</div>
                    <div class="read_more">
                        <a href="">read more <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  ======================= End Blog Area ============================== -->
</main>
<!--  ======================= End Main Area ============================== -->

<!--  ======================= Start Footer Area ============================== -->
<footer class="footer_area pt-4 pt-md-5 ">
    <div class="info py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md">
                    <img class="mb-2" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="100" height="100">
                    <small class="d-block mb-3 text-muted">&copy; 2017-2018</small>
                </div>
                <div class="col-6 col-md">
                    <h5>Features</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="#">Cool stuff</a></li>
                        <li><a class="text-muted" href="#">Random feature</a></li>
                        <li><a class="text-muted" href="#">Team feature</a></li>
                        <li><a class="text-muted" href="#">Stuff for developers</a></li>
                        <li><a class="text-muted" href="#">Another one</a></li>
                        <li><a class="text-muted" href="#">Last time</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>Resources</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="#">Resource</a></li>
                        <li><a class="text-muted" href="#">Resource name</a></li>
                        <li><a class="text-muted" href="#">Another resource</a></li>
                        <li><a class="text-muted" href="#">Final resource</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>About</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="#">Team</a></li>
                        <li><a class="text-muted" href="#">Locations</a></li>
                        <li><a class="text-muted" href="#">Privacy</a></li>
                        <li><a class="text-muted" href="#">Terms</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="social">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-12">
                    <p class="para">Star coffee</p>
                </div>
                <div class="col-md-8 col-12">
                    <ul class="nav justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link active" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#"><i class="fa fa-print" aria-hidden="true"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-2 col-12">
                    <p class="para">@com.neu.edu</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!--  Jquery js file  -->
<script type="text/javascript" src="Jquery/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="Jquery/jquery.easing.1.3.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TimelineMax.min.js"></script>
<script type="text/javascript" src="Jquery/jquery.appear.min.js"></script>
<script type="text/javascript" src="Jquery/jquery.easypiechart.min.js"></script>

<!--  Bootstrap js file  -->
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<!--  custom js file  -->
<script type="text/javascript" src="js/wow.min.js"></script>
<script type="text/javascript" src="js/app.js"></script>
<script type="text/javascript" src="js/global.js"></script>
<script type="text/javascript" src="js/home.js"></script>

<script type="text/javascript" src="js/homeCoffee.js"></script>
</body>

</html>
