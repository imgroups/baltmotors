<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Baltmotors Новый сайт</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="baltmotors.css" rel="stylesheet">


	<!-- SLIDER VEGAS ONLY FIRST PAGE -->
	<!-- link rel="stylesheet" type="text/css" href="vegas/jquery.vegas.css" /-->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <style>
  .boxy{white-space:nowrap}
  .boxy div{width:auto;display:inline-block;padding:100px 15px 0 0;}
  .partt div{padding:100px 25px 50px 10px;margin-left:10px;}
  .foott div {width:auto;vertical-align:top;}
  .foott  {padding:60px 0 0 0;}
  .foott  a {text-color:#fff;}
  .foott  img {margin:-22px 10px 0 0;}
  .under div {padding:10px 22px 0 22px;width:auto;}
  .under img {padding:0 5px 0 0; }
  .under {margin:0 0 0 100px;color:#fff;}
  .under b {font-size:15px;}
  .copy {padding:20px 0 100px 0;color:#fff;} 
  .copy div {padding:0 100px; 0 150px;}
  .copy a {color:#fff;}
  .copy img {margin-top:13px;}
 


  </style>
  <body>
  <nav class="collapse navbar-collapse navbar-ex1-collapse" role="navigation">

		<div class="row region">
			<div class="container">
				<div class="col-lg-4 col-lg-offset-5">Выберите ваш город: <a href="#"><span class="city">Калининград</span> <span class="glyphicon glyphicon-chevron-down"></span></a></div>
				<div class="col-lg-3"><a href="#"><span class="city">4 дилера в вашем регионе</span></a></div>
			</div>
		</div>

<div class="row" style="background: #FFF;">
	<div class="container" style="height: 90px">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle pull-right" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#"><img src="images/logotip.jpg"></a>
            </div>


                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="index.html">О нас</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Техника <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="features.html">Квадроциклы</a></li>
                            <li><a href="services.html">Мотоциклы</a></li>
                            <li><a href="portfolio.html">Скутеры</a></li>
                            <li><a href="portfolio-item.html">Лодки и моторы</a></li>
                            <li><a href="coming-soon.html">Мотобуксировщики</a></li>
                        </ul>
                    </li>
                    <li><a href="pricing.html">Аксессуары</a></li>
                    <li><a href="contact.html">Как купить</a></li>
                    <li><a href="blog.html">Сервис</a></li>
                    <li><a href="sign-up.html">BM Club</a></li>
                    <li><a href="#"><img src="images/bmteam.jpg"></a></li>
                </ul>

        </div>
	</div>
            </nav>

<div class="row">
<div class="col-lg-12">

<section id="feature_slider" class="lol">
        <!-- 
            Each slide is composed by <img> and .info
            - .info's position is customized with css in index.css
            - each <img> parallax effect is declared by the following params inside its class:
            
            example: class="asset left-472 sp600 t120 z3"
            left-472 means left: -472px from the center
            sp600 is speed transition
            t120 is top to 120px
            z3 is z-index to 3
            Note: Maintain this order of params

            For the backgrounds, you can combine from the bgs folder :D
        -->
        <article class="slide" id="showcasing" style="background: url('images/background.jpg') repeat-x top center; background-position:fixed;">
            <!--img class="asset left-30 sp600 t120 z1" src="img/slides/scene1/macbook.png" /-->
            <div class="info">
                <span style="color: #fff; font-size: 56px; font-weight: bold; line-height: 63px;">ВЫБЕРИ СВОЙ BALTMOTORS</span>
            </div>
        </article>
        <article class="slide" id="ideas" style="background: url('images/background.jpg') repeat-x top center; background-position:fixed;">
            <div class="info">
                <h2>Надежность, качество, опыт</h2>
            </div>
            <!--img class="asset left-480 sp600 t260 z1" src="img/slides/scene2/left.png" />
            <img class="asset left-210 sp600 t213 z2" src="img/slides/scene2/middle.png" />
            <img class="asset left60 sp600 t260 z1" src="img/slides/scene2/right.png" /-->
        </article>
        <!--article class="slide" id="tour" style="background: url('img/backgrounds/color-splash.jpg') repeat-x top center;">
            <img class="asset left-472 sp650 t210 z3" src="img/slides/scene3/ipad.png" />
            <img class="asset left-365 sp600 t270 z4" src="img/slides/scene3/iphone.png" />
            <img class="asset left-350 sp450 t135 z2" src="img/slides/scene3/desktop.png" />
            <img class="asset left-185 sp550 t220 z1" src="img/slides/scene3/macbook.png" />
            <div class="info">
                <h2>Fully Responsive theme</h2>
                <a href="features.html">TOUR THE PRODUCT</a>
            </div>
        </article>
        <article class="slide" id="responsive" style="background: url('img/backgrounds/indigo.jpg') repeat-x top center;">
            <img class="asset left-472 sp600 t120 z3" src="img/slides/scene4/html5.png" />
            <img class="asset left-190 sp500 t120 z2" src="img/slides/scene4/css3.png" />
            <div class="info">
                <h2>
                    Responsive <strong>HTML5 & CSS3</strong>
                    Theme
                </h2>                
            </div>
        </article-->  
		
    </section>
		<div class="tech_item">
			
			<div class="container">
				<div class="row">
					<div class="col-md-3"><a href="#"><img src="images/tech/1.png"></a></div>
					<div class="col-md-3"><a href="#"><img src="images/tech/2.png"></a></div>
					<div class="col-md-3"><a href="#"><img src="images/tech/3.png"></a></div>
					<div class="col-md-3"><a href="#"><img src="images/tech/4.png"></a></div>
				</div>
			</div>
</div>
	</div>
<!-- CONTENT -->
<div class="row" style="background: #FFF;">
	<div class="container">
		<div class="row">
		<div class="col-lg-4" style="margin-left: -15px;"><img src="images/news_video.jpg"></div>
		<div class="col-lg-8">
			<div class="row"><div class="col-lg-12"><h1>НАШИ НОВОСТИ</h1></div></div>
			<div class="row"><div class="col-lg-6"><img src="images/news01.jpg" style="
    margin-top: 25px;"></div><div class="col-lg-6"><h2 class="bigh2"><span class="date">24.04</span>Новое весеннее предложение от Baltmotors! Не упустите выгоду! <span class="akciya">АКЦИЯ</span></h2> 
			<p>Гонка на квадроциклах Abu Dhabi Desert Chal- lenge проходила по непростому и жаркому пустынному песчаному рельефу и состояла из пяти напряженных этапов. Атмосфера борьбы сохранялась до последних минут гонки. Лидера не могли определить вплоть до... </p>
			</div></div>
			<div class="row"><div class="col-lg-6"><h2><span class="date">16.04</span>Усиленные тормозные колодки для квадроцикла Jumbo 700Dhabi Desert Challenge 2014</h2>
			<p>Гонка на квадроциклах Abu Dhabi Challenge проходила по непростому и жаркому пустынному песчаному рельефу...</p>
			</div><div class="col-lg-6"><h2><span class="date">05.04</span>Пляж, форт, ямы и ангары. Три дня тест-драйвов с BaltmotorsDhabi Desert Challenge 2014</h2>
			<p>Среди них, по традиции, откатали уик-энд представители зимних мотогонок, поддерживающие таким образом...</p>
			</div></div>
			<div class="row"><div class="col-lg-12 mailer"><a href="#">ПОДПИСАТЬСЯ НА НОВОСТИ</a></div></div>
		</div>
		</div>
		<div class="row" style="background-color:#f4f4f4;">
			<div class="col-lg-8">
			<h2 class="bigh2"><span class="date">15.05</span>Занял второе место в ралли-рейде Abu Dhabi Desert Challenge 2014</h2>
			<p>31 мая - международный слет BMW возле СК "Янтарный", в котором приняли участие владельцы не только BMW, но и автолюбители других марок, предпочитающие активный отдых. В этот день все желающие смогли прокатиться на квадроциклах Baltmotors, а также принять участие в конкурсах и розыгрышах с приятными подарками от организаторов и спонсоров мероприятия...</p>
				<div style="position: relative; bottom: -46px;"><a href="#" class="prew">Предыдущая запись</a><a href="#" class="next">Следующая запись</a></div>
			</div>
			<div class="col-lg-4"><img src="images/blog_cr.jpg" width="100%" class="img-responsive"></div>
		</div>
		
			<div style="overflow:hidden;">
				<div class="boxy">
					<div><a href="#"><img src="images/ad/1.jpg"></a></div>
					<div><a href="#"><img src="images/ad/2.jpg"></a></div>
					<div><a href="#"><img src="images/ad/3.jpg"></a></div>	
				</div>
			</div>
			
		<div class="row">	
			<div class="partt">
				<div class="col-xs-4"><a href="#"><img src="images/part/1.png"></a></div>
				<div class="col-xs-2"><a href="#"><img src="images/part/2.png"></a></div>
				<div class="col-xs-2"><a href="#"><img src="images/part/3.png"></a></div>
				<div class="col-xs-2"><a href="#"><img src="images/part/4.png"></a></div>
			</div>
		</div>

	</div>
</div>
	

<!-- FOOTER -->	
<div class="footer">
		
	<div class="row">
		<div class="container">
			<div class="foott">
					<div class="col-xs-2 col-md-2"><img src="images/foot/logo.jpg"></div>
					<div class="col-xs-1 col-md-1"><a href="#">О НАС</a></div>
					<div class="col-xs-1 col-md-1"><a href="#">ТЕХНИКА</a></div>
					<div class="col-xs-1 col-md-1"><a href="#">АКСЕССУАРЫ</a></div>
					<div class="col-xs-1 col-md-1"><a href="#">КАК КУПИТЬ</a></div>
					<div class="col-xs-1 col-md-1"><a href="#">СЕРВИС</a></div>
					<div class="col-xs-1 col-md-1"><a href="#">BM CLUB</a></div>
					<div class="col-xs-1 col-md-1"><img src="images/foot/bmtm.png"><a href="#">BM TEAM</a></div></br>	
			</div></br>
<div class="row">	
			<div class="under">
				<div class="col-xs-2 col-md-2"><a href="#"><img src="images/foot/vk.jpg"></a><a href="#"><img src="images/foot/fb.jpg"></a></div>
				<div class="col-xs-1 col-md-1">Клиентский отдел</br><b>8 800 700 19 16</b></br><b>+7 (4012) 307008</b></div>
				<div class="col-xs-1 col-md-1">Главный офис компании</br><b>+7 (4012) 307007</b></br></div>
				<div class="col-xs-1 col-md-1">Матосалон в Калининграде </br> <b>+7 (4012) 988138</b></div>
				<div class="col-xs-1 col-md-1 dielog"><a href="#">ПОДПИСАТЬСЯ НА НОВОСТИ</a></div>
			</div>
		</div>
<div class="row">	
			<div class="copy">
				<div class="col-xs-6 col-md-6">© 2011-2014 "Baltmotors"</div>
				<div class="col-xs-6 col-md-6" style="text-align:right;" ><img src="images/foot/jetlogo.png"><div  style="float:right;width:auto;text-align:left;padding:0;">Дизай разработан</br>компанией <a href="#">JetStyle</a></div></div>
			</div>
		</div>			
		</div>	
	</div>
	
	
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/index-slider.js"></script>
	<!-- script type="text/javascript" src="vegas/jquery.vegas.js"></script>
	<script src="js/baltmotors.js"></script-->
	
  </body>
</html>