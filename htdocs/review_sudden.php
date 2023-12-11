<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Amin Template">
    <meta name="keywords" content="Amin, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>서든어택 review</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cinzel:400,700,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Menu Begin -->
    <?php include_once "./fragments/humber.php";?>
    <!-- Humberger Menu End -->

    <!-- Header Section Begin -->
    <?php include_once "./fragments/header.php";?>
    <!-- Header End -->

    <!-- Details Hero Section Begin -->
    <section class="details-hero-section set-bg" data-setbg="img/details/g3.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="details-hero-text">
                        <div class="label"><span>Windows</span></div>
                        <div class="label"><span>macOS</span></div>
                        <div class="label"><span>GeForce Now</span></div>
                        <h3>서든어택</h3>
                        <ul>
                            <li>개발: <span>EA 코리아 스튜디오</span></li>
                            <li><i class="fa fa-clock-o"></i>출시일: 2023년 9월 21일</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Details Hero Section End -->

    <!-- Details Post Section Begin -->
    <section class="details-post-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 p-0">
                    <div class="details-text">
                        <div class="dt-desc">
                            <P>게임 설명</P>
                            <p><p>넥슨의 주력 FPS 게임이다. 본래 구 게임하이였던 넥슨GT에서 제작했으나, 넥슨GT와 넷게임즈가 합병하여 넥슨게임즈가 출범함에 따라 이쪽에서 개발을 담당하고 있다. 
                                배급은 넥슨에서 하는 온라인 FPS 게임. 게임 제목 자체는 '기습공격'이라는 뜻이며 이 게임 때문에 국내에선 '서든'이라는 단어 자체가 이 게임을 칭하는 용어나 다름없게 되었다.</p></p>
                        </div>
                        <div class="dt-overall-rating">
                            <div class="or-heading">
                                <div class="or-item">
                                    <div class="or-loader">
                                        <div class="loader-circle-wrap">
                                            <div class="loader-circle">
                                                <span class="circle-progress-2" data-cpid="id-5" data-cpvalue="10"
                                                    data-cpcolor="#c20000"></span>
                                                <div class="review-point">
                                                    <div>5.5</div>
                                                    <span>한국 게임 점유율(%)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="or-text">
                                       
                                    </div>
                                </div>
                                <div class="or-skill">
                                    <div class="skill-item">
                                        <p>폭력성</p>
                                        <div id="bar-1" class="barfiller">
                                            <span class="fill" data-percentage="80"></span>
                                            <div class="tipWrap" style="display: inline;">
                                                <span class="tip"></span>
                                                <span class="bar-point">8.0</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="skill-item">
                                        <p>사행성</p>
                                        <div id="bar-2" class="barfiller">
                                            <span class="fill" data-percentage="30"></span>
                                            <div class="tipWrap" style="display: inline;">
                                                <span class="tip"></span>
                                                <span class="bar-point">3.0</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="skill-item">
                                        <p>디자인</p>
                                        <div id="bar-3" class="barfiller">
                                            <span class="fill" data-percentage="55"></span>
                                            <div class="tipWrap" style="display: inline;">
                                                <span class="tip"></span>
                                                <span class="bar-point">5.5</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="skill-item">
                                        <p>흥행</p>
                                        <div id="bar-4" class="barfiller">
                                            <span class="fill" data-percentage="70"></span>
                                            <div class="tipWrap" style="display: inline;">
                                                <span class="tip"></span>
                                                <span class="bar-point">7.0</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="skill-item">
                                       
                                    </div>
                                    <div class="skill-item">
                                       
                                    </div>
                                </div>
                            </div>
                            
                       
                            <div class="dt-author">
                            <div class="da-pic">
                              
                            </div>
                            <div class="da-text">
                                
                                </div>
                            </div>
                        </div>
                        <?php
                        if($userid){
                            ?>
                        <div class="dt-leave-comment">
                            <h4>Leave a comment</h4>
                            <form action="/pjbbs/write_ok.php" method="post">
                                <div class="input-list">
                                <input class="form-control" type="text" placeholder="title" name="title" id="title"required>
                                    <input class="form-control" type="password"  placeholder="pw" name="pw" id="pw">
                                    <input class="form-control" type="text" value="<?php echo $_SESSION["userid"]?>" readonly> 
                                </div>
                                <textarea class="form-control" placeholder="Message" name="content" id="content"></textarea>
                                <h6 style="color:white">비밀 글</h6>
                                <input type="checkbox" value="1" name="lockpost"><br><br> 
                                <button type="submit">Submit</button>
                            </form>
                        </div>
                        <?php
                        }else{
                            ?>
                             <div class="dt-leave-comment">
                            <h4>Leave a comment</h4>
                            <form action="alert.php" method="post">
                                <div class="input-list">
                                <input class="form-control" type="text" placeholder="title" name="title" id="title">
                                    <input class="form-control" type="password"  placeholder="pw" name="pw" id="pw">
                                    <input class="form-control" type="text" value="<?php echo $_SESSION["userid"]?>" readonly> 
                                </div>
                                <textarea class="form-control" placeholder="Message" name="content" id="content"></textarea>
                                <h6 style="color:white">비밀 글</h6>
                                <input type="checkbox" value="1" name="lockpost"><br><br>
                                <button type="submit">Submit</button>
                            </form>
                        </div>
                        <?php
                        }
                        ?>

                    </div>
                </div>
                <div class="col-lg-4 col-md-7">
                    <div class="sidebar-option">
                        <div class="social-media">
                            <div class="section-title">
                                <h5>FC온라인 Social media</h5>
                            </div>
                            <ul>
                                <li>
                                    <div class="sm-icon"><i class="fa fa-facebook"></i></div>
                                    <span><a href="https://www.facebook.com/FCOnlineKor/" style="color:white"target="_blank">Facebook</a></span>
                                    <div class="follow">좋아요 1,700만개</div>
                                </li>
                                <li>
                                    <div class="sm-icon"><i class="fa fa-twitter"></i></div>
                                    <span><a href="https://twitter.com/EASPORTSFC"style="color:white"target="_blank">Twitter</a></span>
                                    <div class="follow">526만 팔로워</div>
                                </li>
                                <li>
                                    <div class="sm-icon"><i class="fa fa-youtube-play"></i></div>
                                    <span><a href="https://www.youtube.com/@FCOnlineEsportsKorea"style="color:white"target="_blank">Youtube</a></span>
                                    <div class="follow">45.9만 구독자</div>
                                </li>
                                <li>
                                    <div class="sm-icon"><i class="fa fa-instagram"></i></div>
                                    <span><a href="#"style="color:white">Instagram</a></span>
                                    <div class="follow">no data</div>
                                </li>
                            </ul>
                        </div>
                        <div class="hardware-guides">
                            <div class="section-title">
                            <h5>한국게임 Top4</h5>
                            </div>
                            <div class="trending-item">
                                <div class="ti-pic">
                                    <img src="img/trending/4.jpg" alt="">
                                </div>
                                <div class="ti-text">                                    
                                    <h6><a href="review_lol.php">1위</a>
                                    </h6>
                                    <h6><a href="review_lol.php">League of Legends</a>
                                    </h6>
                                    <ul>
                                    </ul>
                                </div>
                            </div>
                            <div class="trending-item">
                                <div class="ti-pic">
                                    <img src="img/trending/6.jpg" alt="">
                                </div>
                                <div class="ti-text">                                   
                                    <h6><a href="review_fc.php">2위</a>
                                    <h6><a href="review_fc.php">FC온라인</a></h6>
                                    </h6>
                                    <ul>
                                        
                                    </ul>
                                </div>
                            </div>
                            <div class="trending-item">
                                <div class="ti-pic">
                                    <img src="img/trending/8.jpg" alt="">
                                </div>
                                <div class="ti-text">                                   
                                    <h6><a href="review_sudden.php">3위</a>
                                    <h6><a href="review_sudden.php">서든어택</a></h6>
                                    </h6>
                                    <ul>
                                        
                                    </ul>
                                </div>
                            </div>
                            <div class="trending-item">
                                <div class="ti-pic">
                                    <img src="img/trending/7.jpg" alt="">
                                </div>
                                <div class="ti-text">                                   
                                    <h6><a href="review_lost.php">4위</a>
                                    <h6><a href="review_lost.php">로스트아크</a></h6>
                                    </h6>
                                    <ul>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                       
                        <div class="best-of-post">
                            <div class="section-title">
                                <h5>게임 점유율(%)</h5>
                            </div>
                            <div class="bp-item">
                                <div class="bp-loader">
                                    <div class="loader-circle-wrap">
                                        <div class="loader-circle">
                                            <span class="circle-progress-1" data-cpid="id-1" data-cpvalue="44"
                                                data-cpcolor="#c20000"></span>
                                            <div class="review-point">44</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bp-text">
                                    <h6><a href="#">League of Legends</a></h6>
                                    <ul>
                                        <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                        <li><i class="fa fa-comment-o"></i> 20</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="bp-item">
                                <div class="bp-loader">
                                    <div class="loader-circle-wrap">
                                        <div class="loader-circle">
                                            <span class="circle-progress-1" data-cpid="id-2" data-cpvalue="15"
                                                data-cpcolor="#c20000"></span>
                                            <div class="review-point">9.2</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bp-text">
                                    <h6><a href="#">FC온라인</a></h6>
                                    <ul>
                                        <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                        <li><i class="fa fa-comment-o"></i> 20</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="bp-item">
                                <div class="bp-loader">
                                    <div class="loader-circle-wrap">
                                        <div class="loader-circle">
                                            <span class="circle-progress-1" data-cpid="id-3" data-cpvalue="10"
                                                data-cpcolor="#c20000"></span>
                                            <div class="review-point">6.2</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bp-text">
                                    <h6><a href="#">서든어택</a></h6>
                                    <ul>
                                        <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                        <li><i class="fa fa-comment-o"></i> 20</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="bp-item">
                                <div class="bp-loader">
                                    <div class="loader-circle-wrap">
                                        <div class="loader-circle">
                                            <span class="circle-progress-1" data-cpid="id-4" data-cpvalue="10"
                                                data-cpcolor="#c20000"></span>
                                            <div class="review-point">5.9</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bp-text">
                                    <h6><a href="#">로스트아크</a></h6>
                                    <ul>
                                        <li><i class="fa fa-clock-o"></i> Aug 01, 2019</li>
                                        <li><i class="fa fa-comment-o"></i> 20</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="subscribe-option">
                            <div class="section-title">
                                <h5>Subscribe</h5>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor.</p>
                            <form action="#">
                                <input type="text" placeholder="Name">
                                <input type="text" placeholder="Email">
                                <button type="submit"><span>Subscribe</span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Details Post Section End -->

    <!-- Footer Section Begin -->
    <?php include_once "./fragments/footer.php"; ?>
    <!-- Footer Section End -->

    <!-- Sign Up Section Begin -->
    <div class="signup-section">
        <div class="signup-close"><i class="fa fa-close"></i></div>
        <div class="signup-text">
            <div class="container">
                <div class="signup-title">
                    <h2>Sign up</h2>
                    <p>Fill out the form below to recieve a free and confidential</p>
                </div>
                <form action="#" class="signup-form">
                    <div class="sf-input-list">
                        <input type="text" class="input-value" placeholder="User Name*">
                        <input type="text" class="input-value" placeholder="Password">
                        <input type="text" class="input-value" placeholder="Confirm Password">
                        <input type="text" class="input-value" placeholder="Email Address">
                        <input type="text" class="input-value" placeholder="Full Name">
                    </div>
                    <div class="radio-check">
                        <label for="rc-agree">I agree with the term & conditions
                            <input type="checkbox" id="rc-agree">
                            <span class="checkbox"></span>
                        </label>
                    </div>
                    <button type="submit"><span>REGISTER NOW</span></button>
                </form>
            </div>
        </div>
    </div>
    <!-- Sign Up Section End -->

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/circle-progress.min.js"></script>
    <script src="js/jquery.barfiller.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>