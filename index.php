<!DOCTYPE html>
<html>
<?php get_header(); ?>
<body>
	<header class="main-header">
	    <div class="main-header__content">
	        <nav class="main-header__leftside">
	            <ul class="main-header__menu-list">
	                <li><a data-scrollto="contacts" href="#contacts">Где посмотреть?</a></li>
	                <li><a data-scrollto="contacts" href="#questions">Оплата и доставка</a></li>
	                <li><a data-scrollto="contacts" href="#credit">Рассрочка</a></li>
	                <li><a data-scrollto="contacts" href="#preorder">Предзаказ</a></li>
	            </ul>
	        </nav>
	        <div class="main-header__rightside">
	            <a class="main-header__drivers" href="https://бтф.рф/?utm_source=btftrucks">Ищем водителей категории Е</a>
	            <a class="main-header__contacts-button" href="#contacts">Контакты</a>
	        </div>
	    </div>
	    <button class="menu-button" type="button">
	        <span class="menu-button__line-1"></span>
	        <span class="menu-button__line-2"></span>
	        <span class="menu-button__line-3"></span>
	    </button>
	</header>
	<div class="landing">
		<div class="landing__intro">
			<div class="landing__intro-content">
				<div class="landing__intro-logo">
					<img src="<?php echo get_template_directory_uri(); ?>/dist/img/logo.png" alt="">
				</div>
				<h1 class="landing__intro-title">Тягачи и полуприцепы<br> по самым низким ценам.</h1>
				<a class="landing__intro-button" href="#technics">Выбрать машину</a>
			</div>
		</div>
		<div class="container">
			<section class="landing__features">
				<div class="landing__features-grid">
					<div class="features-item">
						<div class="features-item__pic">
							<img class="features-item__wallet-image" src="<?php echo get_template_directory_uri(); ?>/dist/img/wallet.svg" alt="">
						</div>
						<div class="features-item__title">
							Самые<br>
							<span>низкие цены</span>
						</div>
						<div class="features-item__text">
							Существенно ниже рынка: мы обновляем парк техники и не заламываем цены.
						</div>
					</div>
					<div class="features-item">
						<div class="features-item__pic">
							<img class="features-item__safe-image" src="<?php echo get_template_directory_uri(); ?>/dist/img/safe.svg" alt="">
						</div>
						<div class="features-item__title">
							Лизинг и <br>
							<span>рассрочка</span>
						</div>
						<div class="features-item__text">
							Поможем оформить договор лизинга или предоставим рассрочку.
						</div>
					</div>
					<div class="features-item">
						<div class="features-item__pic">
							<img class="features-item__map-image" src="<?php echo get_template_directory_uri(); ?>/dist/img/map.svg" alt="">
						</div>
						<div class="features-item__title">
							Осмотр <br>
							<span>в вашем городе</span>
						</div>
						<div class="features-item__text">
							Техника находится в Московской области, по согласованию осмотр возможен в вашем городе.
						</div>
					</div>
					<div class="features-item">
						<div class="features-item__pic">
							<img class="features-item__diamond-image" src="<?php echo get_template_directory_uri(); ?>/dist/img/diamond.svg" alt="">
						</div>
						<div class="features-item__title">
							Состояние — <br>
							<span>отличное!</span>
						</div>
						<div class="features-item__text">
							Мы поддерживаем свой автопарк в идеальном состоянии и проводим все ТО точно в срок
						</div>
					</div>
				</div>
			</section>
		</div>
		<section class="landing__technics">
			<div class="container">
				<h2 class="landing__technics-title">Техника на продажу</h2>
				<select class="landing__technics-select">
					<option>MAN</option>
					<option>SCANIA</option>
					<option>Рефрижераторы</option>
					<option>Изотермы</option>
				</select>
				<ul class="landing__technics-tabs nav nav-tabs">
					<li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="#technic-group-1">MAN</option></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#technic-group-2">SCANIA</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#technic-group-3">Рефрижераторы</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#technic-group-4">Изотермы</a>
					</li>
				</ul>
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="technic-group-1" role="tabpanel" aria-labelledby="home-tab">
						<div class="technics-item">
							<div class="technics-item__wrapper">
								<div class="technics-item__desc">
									<div class="technics-item__title">MAN — седельный тягач</div>
									<ul class="technics-item__parametres">
										<li>Стоимость: от 1 700 000 рублей </li>
										<li>Год выпуска: 2010, 2011, 2012, 2013, 2014, 2015 </li>
										<li>Модель: MAN TGS 19.400 4X2 BLS-WW </li>
										<li>Двигатель: D 2066LF63, 400 л.с. Евро 4, рабочий объем 10.5 литров </li>
										<li>Коробка передач: ZF 16 S 223 DD </li>
										<li>Топливный бак: 680 литров слева, 75 литров бак AdBlue </li>
										<li>Тормозная система: электронная, MAN BrakeMatic, дисковые тормозные механизмы </li>
										<li>ССУ: JOST JSK 37 C, 150 </li>
										<li>Кабина внутри: L с изоляцией от холода NORDIC, пневматическая подвеска </li>
										<li>Кондиционер</li>
										<li>Автономный отопитель EBERSPECHER </li>
										<li>Пневматическое сиденье водителя </li>
										<li>Магнитола MAN Media Truck </li>
										<li>Кабина снаружи: Белый/Красный цвет</li>
										<li>Верхний аэродинамический спойлер</li>
									</ul>
								</div>
								<div class="technics-item__photo">
									<div id="carouselExampleIndicators" class="carousel slide">
										<ol class="carousel-indicators">
											<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
											<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
											<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
										</ol>
										<div class="carousel-inner">
											<div class="carousel-item active">
												<a href="<?php echo get_template_directory_uri(); ?>/dist/img/technics-1.jpg" data-toggle="lightbox" data-gallery="gallery-1">
													<img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/dist/img/technics-1.jpg" data-lightbox="roadtrip" alt="">
												</a>
											</div>
											<div class="carousel-item">
												<a href="<?php echo get_template_directory_uri(); ?>/dist/img/technics-2.jpg" data-toggle="lightbox" data-gallery="gallery-1">
													<img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/dist/img/technics-2.jpg" data-lightbox="roadtrip" alt="">
												</a>
											</div>
											<div class="carousel-item">
												<a href="<?php echo get_template_directory_uri(); ?>/dist/img/technics-3.jpg" data-toggle="lightbox" data-gallery="gallery-1">
													<img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/dist/img/technics-3.jpg" data-lightbox="roadtrip" alt="">
												</a>
											</div>
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
								</div>
							</div>
							<div class="technics-item__products">
								<table class="technics-item__pricelist">
									<thead>
										<tr>
											<th>Модель</th>
											<th>Год</th>
											<th>Количество</th>
											<th>Цена продажи</th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>MAN TGA 19-390</td>
											<td>2008</td>
											<td>0</td>
											<td>1 400 000 р.</td>
											<td>Продано</td>
										</tr>
										<tr>
											<td>MAN TGA 18-480</td>
											<td>2008</td>
											<td>0</td>
											<td>1 450 000 р.</td>
											<td>Продано</td>
										</tr>
										<tr>
											<td>MAN TGS 18-400</td>
											<td>2010</td>
											<td>0</td>
											<td>1 800 000 р.</td>
											<td>Продано</td>
										</tr>
										<tr>
											<td>MAN TGS 18-400</td>
											<td>2011</td>
											<td>0</td>
											<td>1 900 000 р.</td>
											<td>Продано</td>
										</tr>
										<tr>
											<td>MAN TGS 19-400</td>
											<td>2012</td>
											<td>18</td>
											<td>2 200 000 р.</td>
											<td><button class="purchase-button" type="button" data-toggle="modal" data-target="#purchaseModal">Как купить?</button></td>
										</tr>
										<tr>
											<td>MAN TGS 19-400</td>
											<td>2013</td>
											<td>7</td>
											<td>2 500 000 р.</td>
											<td><button class="purchase-button" type="button" data-toggle="modal" data-target="#purchaseModal">Как купить?</button></td>
										</tr>
										<tr>
											<td>MAN TGS 19-400</td>
											<td>2014</td>
											<td>53</td>
											<td>3 000 000 р.</td>
											<td><button class="purchase-button" type="button" data-toggle="modal" data-target="#purchaseModal">Как купить?</button></td>
										</tr>
										<tr>
											<td>Предзаказ MAN TGS 19-400</td>
											<td>2017</td>
											<td></td>
											<td>от 3 500 000 р.</td>
											<td><button class="purchase-button" type="button" data-toggle="modal" data-target="#purchaseModal">Предзаказ</button></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="technic-group-2" role="tabpanel" aria-labelledby="profile-tab">
						<div class="technics-item">
							<div class="technics-item__wrapper">
								<div class="technics-item__desc">
									<div class="technics-item__title">SCANIA</div>
									<ul class="technics-item__parametres">
										<li>Стоимость: от 1 700 000 рублей </li>
										<li>Год выпуска: 2010, 2011, 2012, 2013, 2014, 2015 </li>
										<li>Модель: MAN TGS 19.400 4X2 BLS-WW </li>
										<li>Двигатель: D 2066LF63, 400 л.с. Евро 4, рабочий объем 10.5 литров </li>
										<li>Коробка передач: ZF 16 S 223 DD </li>
										<li>Топливный бак: 680 литров слева, 75 литров бак AdBlue </li>
									</ul>
								</div>
								<div class="technics-item__photo">
									<div id="carouselExampleIndicators" class="carousel slide">
										<ol class="carousel-indicators">
											<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
											<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
										</ol>
										<div class="carousel-inner">
											<div class="carousel-item active">
												<a href="<?php echo get_template_directory_uri(); ?>/dist/img/technics-1.jpg" data-toggle="lightbox" data-gallery="gallery-1">
													<img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/dist/img/technics-1.jpg" data-lightbox="roadtrip" alt="">
												</a>
											</div>
											<div class="carousel-item">
												<a href="<?php echo get_template_directory_uri(); ?>/dist/img/technics-2.jpg" data-toggle="lightbox" data-gallery="gallery-1">
													<img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/dist/img/technics-2.jpg" data-lightbox="roadtrip" alt="">
												</a>
											</div>
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
								</div>
							</div>
							<div class="technics-item__products">
								<table class="technics-item__pricelist">
									<thead>
										<tr>
											<th>Модель</th>
											<th>Год</th>
											<th>Количество</th>
											<th>Цена продажи</th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>MAN TGA 19-390</td>
											<td>2008</td>
											<td>0</td>
											<td>1 400 000 р.</td>
											<td>Продано</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="technic-group-3" role="tabpanel" aria-labelledby="contact-tab">
						<div class="technics-item">
							<div class="technics-item__wrapper">
								<div class="technics-item__desc">
									<div class="technics-item__title">Рефрижераторы</div>
									<ul class="technics-item__parametres">
										<li>Стоимость: от 1 700 000 рублей </li>
										<li>Год выпуска: 2010, 2011, 2012, 2013, 2014, 2015 </li>
										<li>Модель: MAN TGS 19.400 4X2 BLS-WW </li>
										<li>Двигатель: D 2066LF63, 400 л.с. Евро 4, рабочий объем 10.5 литров </li>
										<li>Коробка передач: ZF 16 S 223 DD </li>
										<li>Топливный бак: 680 литров слева, 75 литров бак AdBlue </li>
										<li>Тормозная система: электронная, MAN BrakeMatic, дисковые тормозные механизмы </li>
									</ul>
								</div>
								<div class="technics-item__photo">
									<div id="carouselExampleIndicators" class="carousel slide">
										<ol class="carousel-indicators">
											<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
											<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
											<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
										</ol>
										<div class="carousel-inner">
											<div class="carousel-item active">
												<a href="<?php echo get_template_directory_uri(); ?>/dist/img/technics-1.jpg" data-toggle="lightbox" data-gallery="gallery-1">
													<img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/dist/img/technics-1.jpg" data-lightbox="roadtrip" alt="">
												</a>
											</div>
											<div class="carousel-item">
												<a href="<?php echo get_template_directory_uri(); ?>/dist/img/technics-2.jpg" data-toggle="lightbox" data-gallery="gallery-1">
													<img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/dist/img/technics-2.jpg" data-lightbox="roadtrip" alt="">
												</a>
											</div>
											<div class="carousel-item">
												<a href="<?php echo get_template_directory_uri(); ?>/dist/img/technics-3.jpg" data-toggle="lightbox" data-gallery="gallery-1">
													<img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/dist/img/technics-3.jpg" data-lightbox="roadtrip" alt="">
												</a>
											</div>
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
								</div>
							</div>
							<div class="technics-item__products">
								<table class="technics-item__pricelist">
									<thead>
										<tr>
											<th>Модель</th>
											<th>Год</th>
											<th>Количество</th>
											<th>Цена продажи</th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>MAN TGS 19-400</td>
											<td>2012</td>
											<td>18</td>
											<td>2 200 000 р.</td>
											<td><button class="purchase-button" type="button" data-toggle="modal" data-target="#purchaseModal">Как купить?</button></td>
										</tr>
										<tr>
											<td>MAN TGS 19-400</td>
											<td>2013</td>
											<td>7</td>
											<td>2 500 000 р.</td>
											<td><button class="purchase-button" type="button" data-toggle="modal" data-target="#purchaseModal">Как купить?</button></td>
										</tr>
										<tr>
											<td>MAN TGS 19-400</td>
											<td>2014</td>
											<td>53</td>
											<td>3 000 000 р.</td>
											<td><button class="purchase-button" type="button" data-toggle="modal" data-target="#purchaseModal">Как купить?</button></td>
										</tr>
										<tr>
											<td>Предзаказ MAN TGS 19-400</td>
											<td>2017</td>
											<td></td>
											<td>от 3 500 000 р.</td>
											<td><button class="purchase-button" type="button" data-toggle="modal" data-target="#purchaseModal">Предзаказ</button></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="technic-group-4" role="tabpanel" aria-labelledby="contact-tab">
						<div class="technics-item">
							<div class="technics-item__wrapper">
								<div class="technics-item__desc">
									<div class="technics-item__title">Изотермы</div>
									<ul class="technics-item__parametres">
										<li>Стоимость: от 1 700 000 рублей </li>
										<li>Год выпуска: 2010, 2011, 2012, 2013, 2014, 2015 </li>
										<li>Модель: MAN TGS 19.400 4X2 BLS-WW </li>
										<li>Двигатель: D 2066LF63, 400 л.с. Евро 4, рабочий объем 10.5 литров </li>
										<li>Коробка передач: ZF 16 S 223 DD </li>
										<li>Топливный бак: 680 литров слева, 75 литров бак AdBlue </li>
										<li>Тормозная система: электронная, MAN BrakeMatic, дисковые тормозные механизмы </li>
										<li>ССУ: JOST JSK 37 C, 150 </li>
										<li>Кабина внутри: L с изоляцией от холода NORDIC, пневматическая подвеска </li>
										<li>Кондиционер</li>
										<li>Автономный отопитель EBERSPECHER </li>
										<li>Пневматическое сиденье водителя </li>
										<li>Магнитола MAN Media Truck </li>
										<li>Кабина снаружи: Белый/Красный цвет</li>
										<li>Верхний аэродинамический спойлер</li>
									</ul>
								</div>
								<div class="technics-item__photo">
									<div id="carouselExampleIndicators" class="carousel slide">
										<ol class="carousel-indicators">
											<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
											<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
											<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
										</ol>
										<div class="carousel-inner">
											<div class="carousel-item active">
												<a href="<?php echo get_template_directory_uri(); ?>/dist/img/technics-1.jpg" data-toggle="lightbox" data-gallery="gallery-1">
													<img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/dist/img/technics-1.jpg" data-lightbox="roadtrip" alt="">
												</a>
											</div>
											<div class="carousel-item">
												<a href="<?php echo get_template_directory_uri(); ?>/dist/img/technics-2.jpg" data-toggle="lightbox" data-gallery="gallery-1">
													<img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/dist/img/technics-2.jpg" data-lightbox="roadtrip" alt="">
												</a>
											</div>
											<div class="carousel-item">
												<a href="<?php echo get_template_directory_uri(); ?>/dist/img/technics-3.jpg" data-toggle="lightbox" data-gallery="gallery-1">
													<img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/dist/img/technics-3.jpg" data-lightbox="roadtrip" alt="">
												</a>
											</div>
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
								</div>
							</div>
							<div class="technics-item__products">
								<table class="technics-item__pricelist">
									<thead>
										<tr>
											<th>Модель</th>
											<th>Год</th>
											<th>Количество</th>
											<th>Цена продажи</th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>MAN TGA 19-390</td>
											<td>2008</td>
											<td>0</td>
											<td>1 400 000 р.</td>
											<td>Продано</td>
										</tr>
										<tr>
											<td>MAN TGA 18-480</td>
											<td>2008</td>
											<td>0</td>
											<td>1 450 000 р.</td>
											<td>Продано</td>
										</tr>
										<tr>
											<td>MAN TGS 18-400</td>
											<td>2010</td>
											<td>0</td>
											<td>1 800 000 р.</td>
											<td>Продано</td>
										</tr>
										<tr>
											<td>MAN TGS 18-400</td>
											<td>2011</td>
											<td>0</td>
											<td>1 900 000 р.</td>
											<td>Продано</td>
										</tr>
										<tr>
											<td>MAN TGS 19-400</td>
											<td>2012</td>
											<td>18</td>
											<td>2 200 000 р.</td>
											<td><button class="purchase-button" type="button" data-toggle="modal" data-target="#purchaseModal">Как купить?</button></td>
										</tr>
										<tr>
											<td>MAN TGS 19-400</td>
											<td>2013</td>
											<td>7</td>
											<td>2 500 000 р.</td>
											<td><button class="purchase-button" type="button" data-toggle="modal" data-target="#purchaseModal">Как купить?</button></td>
										</tr>
										<tr>
											<td>MAN TGS 19-400</td>
											<td>2014</td>
											<td>53</td>
											<td>3 000 000 р.</td>
											<td><button class="purchase-button" type="button" data-toggle="modal" data-target="#purchaseModal">Как купить?</button></td>
										</tr>
										<tr>
											<td>Предзаказ MAN TGS 19-400</td>
											<td>2017</td>
											<td></td>
											<td>от 3 500 000 р.</td>
											<td><button class="purchase-button" type="button" data-toggle="modal" data-target="#purchaseModal">Предзаказ</button></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="landing__preorder" id="preorder">
			<div class="container">
				<h2 class="landing__preorder-title">Предзаказ</h2>
				<div class="landing__preorder-pool">
					<article class="preorder-item">
						<div class="preorder-item__image" style="background: url('<?php echo get_template_directory_uri(); ?>/dist/img/preorder-2.jpg') 50% 50%; background-size: cover">
						</div>
						<div class="preorder-item__desc">
							<h3 class="preorder-item__title">MAN — седельный тягач</h3>
							<div class="preorder-item__text">
								<ul>
									<li>Стоимость: 3 500 000 рублей</li>
									<li>Год выпуска: 2017</li>
									<li>Модель: MAN TGS 19.400 4X2 BLS-WW</li>
									<li>Двигатель: D 2066LF63, 400 л.с. Евро 4, рабочий объем 10.5 литров</li>
									<li>Коробка передач: ZF 16 S 223 DD</li>
									<li>Топливный бак: 680 литров слева, 75 литров бак AdBlue</li>
									<li>Тормозная система: электронная, MAN BrakeMatic, дисковые тормозные механизмы</li>
									<li>ССУ: JOST JSK 37 C, 150</li>
									<li>Кабина внутри: L с изоляцией от холода NORDIC, пневматическая подвеска</li>
									<li>Кондиционер</li>
									<li>Автономный отопитель EBERSPECHER</li>
									<li>Пневматическое сиденье водителя</li>
									<li>Магнитола MAN Media Truck</li>
									<li>Кабина снаружи: Белый цвет</li>
									<li>Верхний аэродинамический спойлер</li>
								</ul>
								<span>Машина на гарантии.</span>
							</div>
						</div>
						<button type="button" class="preorder-item__button" data-toggle="modal" data-target="#preorderModal">Запросить информацию</button>
					</article>
					<article class="preorder-item">
						<div class="preorder-item__image" style="background: url('<?php echo get_template_directory_uri(); ?>/dist/img/preorder-2.jpg') 50% 50%; background-size: cover">
						</div>
						<div class="preorder-item__desc">
							<h3 class="preorder-item__title">MAN — седельный тягач</h3>
							<div class="preorder-item__text">
								<ul>
									<li>Стоимость: 3 500 000 рублей</li>
									<li>Год выпуска: 2017</li>
									<li>Модель: MAN TGS 19.400 4X2 BLS-WW</li>
									<li>Двигатель: D 2066LF63, 400 л.с. Евро 4, рабочий объем 10.5 литров</li>
									<li>Коробка передач: ZF 16 S 223 DD</li>
									<li>Топливный бак: 680 литров слева, 75 литров бак AdBlue</li>
									<li>Тормозная система: электронная, MAN BrakeMatic, дисковые тормозные механизмы</li>
									<li>ССУ: JOST JSK 37 C, 150</li>
									<li>Кабина внутри: <span>LX</span> с изоляцией от холода NORDIC, пневматическая подвеска</li>
									<li>Кондиционер</li>
									<li>Автономный отопитель EBERSPECHER</li>
									<li>Пневматическое сиденье водителя</li>
									<li>Магнитола MAN Media Truck</li>
									<li>Кабина снаружи: Белый цвет</li>
									<li>Верхний аэродинамический спойлер</li>
								</ul>
								<span>Машина на гарантии.</span>
							</div>
						</div>
						<button type="button" class="preorder-item__button " data-toggle="modal" data-target="#preorderModal">Запросить информацию</button>
					</article>
					<article class="preorder-item">
						<div class="preorder-item__image" style="background: url('<?php echo get_template_directory_uri(); ?>/dist/img/preorder-2.jpg') 50% 50%; background-size: cover">
						</div>
						<div class="preorder-item__desc">
							<h3 class="preorder-item__title">Krone SD Profi Liner - тентованный полуприцеп</h3>
							<div class="preorder-item__text">
								<ul>
									<li>Стоимость: 1 500 000 рублей</li>
									<li>Год выпуска: 2017</li>
									<li>Тип кузова Шторно-бортовой</li>
									<li>Цвет тента Серебристый</li>
									<li>Оси SAF Off-Road усиленные, дисковые тормоза</li>
									<li>Межосевое расстояние 1310</li>
									<li>Тормозная система Электронная, EBS, Wabco</li>
									<li>ССУ 1150 мм</li>
									<li>Шины 385/65 R 22.5</li>
								</ul>
								<span>На гарантии.</span>
							</div>
						</div>
						<button type="button" class="preorder-item__button " data-toggle="modal" data-target="#preorderModal">Запросить информацию</button>
					</article>
					<article class="preorder-item">
						<div class="preorder-item__image" style="background: url('<?php echo get_template_directory_uri(); ?>/dist/img/preorder-2.jpg') 50% 50%; background-size: cover">
						</div>
						<div class="preorder-item__desc">
							<h3 class="preorder-item__title">Krone SD Cool Liner - рефрижератор</h3>
							<div class="preorder-item__text">
								<ul>
									<li>Холодильно-отопительный агрегат (ХОУ) Carrier Vector 1350 R с термопринтером DATA Cold T600</li>
									<li>Стоимость: 3 300 000 рублей</li>
									<li>Год выпуска 2017</li>
									<li>Кузов Cool Liner Douplex Steel, идеально подходит для всех температурных режимов перевозок</li>
									<li>Цвет кузова Белый</li>
									<li>Пол Аллюминиевый</li>
									<li>Оси SAF с пневмоподвеской и дисковыми тормозами</li>
									<li>Межосевое расстояние 1310</li>
									<li>Тормозная система Электронная, EBS, Wabco</li>
									<li>ССУ 1150 мм</li>
									<li>Шины 385/65 R 22.5</li>
								</ul>
								<span>На гарантии.</span>
							</div>
						</div>
						<button type="button" class="preorder-item__button " data-toggle="modal" data-target="#preorderModal">Запросить информацию</button>
					</article>
				</div>
			</div>
		</section>
		<section class="landing__credit" id="credit">
			<h2 class="landing__credit-title">Калькулятор рассрочки</h2>
			<form class="credit">
				<div class="credit__time-wrapper">
					<label class="credit__input-desc">Срок (от 6 до 36 месяцев)</label>
					<input class="credit__time" type="range">
				</div>
				<div class="credit__columns-wrapper">
					<div>
						<label class="credit__input-desc">Стоимость автопоезда</label>
						<input class="credit__counter" type="number">
					</div>
					<div>
						<label class="credit__input-desc">Аванс (не менее 20%)</label>
						<input class="credit__counter" type="number">
					</div>
				</div>
			</form>
			<div class="landing__credit-terms">
				<p>
					<b>Генеральные условия для приобретения техники БТФ в рассрочку</b><br>
					<ol>
						<li>Аванс от 20% стоимости приобретаемой техники</li>
						<li>Срок рассрочки до 3-х лет</li>
						<li>На время рассрочки машина находится в залоге у продавца</li>
						<li>Обязательно страхование КАСКО на весь срок рассрочки</li>
						<li>Только для грузоперевозчиков, зарегистрированных на <a href="#">логистической бирже Cargomart</a></li>
					</ol>
				</p>
				<p>
					<b>Максимальные сроки рассрочки:</b><br>
					<ol>
						<li>Для техники моложе 3-х лет – до 36 месяцев</li>
						<li>Для техники старше 3-х лет, но моложе 6-и лет – до 24 месяцев</li>
						<li>Для техники старше 6-и лет – до 18 месяцев</li>
					</ol>
				</p>
			</div>
			<div class="landing__credit-result">
				<div class="landing__credit-desc">
					Сумма рассрочки
				</div>
				<div class="landing__credit-number">
					90 000 руб.
				</div>
				<div class="landing__credit-desc">
					Ориентировочный месячный платеж
				</div>
				<div class="landing__credit-number">
					45 093.35 руб.
				</div>
				<div class="landing__credit-desc">
					Общая сумма с удорожанием
				</div>
				<div class="landing__credit-number">
					1 082 240.40 руб.
				</div>
			</div>
			<div class="landing__credit-columns">
				<div class="landing__credit-email">
					Для рассмотрения заявки на рассрочку нужно заполнить анкету и отправить на почту finance@btf-trucks.ru
					<div class="landing__credit-email-sign"></div>
				</div>
				<div class="landing__credit-doc">
					<img class="landing__credit-doc-image" src="<?php echo get_template_directory_uri(); ?>/dist/img/doc.svg" alt="">
					<div class="landing__credit-doc-text">
						Скачать<br> <a href="#">анкету покупателя</a>
					</div>
				</div>
			</div>
		</section>
		<section class="landings__contacts" id="contacts">
			<div class="landings__contacts-map embed-responsive">
				<iframe class="embed-responsive-item" src="https://yandex.ru/map-widget/v1/?um=constructor%3A0af0b2771bfa659533ab2d4b0cd41e5b1fe82f3b7ea98a551b80ed321b014650&amp;source=constructor" width="941" height="659" frameborder="0"></iframe>
			</div>
			<div class="landings__contacts-text">
				<div class="landings__contacts-title">
					Контакты
				</div>
				<span class="landings__contacts-phone">+7 913 848 28 89</span><br><br>
				truck-sales@kdvm.ru<br><br>
				Осмотр техники на площадке по адресам:
				<ul>
					<li>Московская область, трасса М-7, Павлово-Посадский район, деревня Кузнецы, дом 58Д.</li>
					<li>Новосибирская область, Коченевский район, МО Прокудский сельсовет, ДАООТ «Чикский элеватор»</li>
				</ul>
				Также есть возможность осмотра в вашем городе: для этого оставьте заявку на интересующую модель или свяжитесь с нами по телефону.
		</section>
		<section class="landing__questions" id="questions">
			<div class="container">
				<h2 class="landing__questions-title">Вопросы и ответы</h2>
				<div class="question-item">
					<div class="question-item__question">Вопрос</div>
					<div class="question-item__title">Где посмотреть?</div>
					<div class="question-item__answer">Ответ</div>
					<div class="question-item__text">
						<p>Осмотр техники возможен на двух площадках:</p>
						<p>Московская область: трасса М-7, Павлово-Посадский район, деревня Кузнецы, дом 58Д.
						Новосибирская область: Коченевский район, МО Прокудский сельсовет, ДАООТ «Чикский элеватор»</p>
						<p><span>Также есть возможность осмотра в вашем городе</span>: для этого оставьте заявку на интересующую модель или свяжитесь с нами по телефону в разделе «контакты».</p>
					</div>
				</div>
				<div class="question-item">
					<div class="question-item__question">Вопрос</div>
					<div class="question-item__title">Варианты оплаты?</div>
					<div class="question-item__answer">Ответ</div>
					<div class="question-item__text">
						<p>Возможен наличный и безналичный расчет. Также возможно приобретение в лизинг или оплата <span>в рассрочку</span>.</p>
					</div>
				</div>
				<div class="question-item">
					<div class="question-item__question">Вопрос</div>
					<div class="question-item__title">Почему цены значительно ниже рыночных?</div>
					<div class="question-item__answer">Ответ</div>
					<div class="question-item__text">
						<p>Мы - транспортная компания и поддерживаем свой автопарк в идеальном состоянии: в том числе те машины, что продаются на этом сайте. Сейчас мы полностью обновляем свой автопарк новой техникой и хотим быстрее передать текущую в надежные руки.</p>
					</div>
				</div>
			</div>
		</section>
		<button class="cart" data-toggle="modal" data-target="#purchaseModal">
			<span class="cart__pic" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="= 150 0000 р.">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><descr style="color:#bebebe;">Cart</descr><path fill="none" stroke-width="2" stroke-miterlimit="10" d="M44 18h10v45H10V18h10z"></path><path fill="none" stroke-width="2" stroke-miterlimit="10" d="M22 24V11c0-5.523 4.477-10 10-10s10 4.477 10 10v13"></path></svg>
			</span>
			<span class="cart__count">9</span>
			<span class="cart__total"> = 10 000 р.</span>
		</button>
	</div>
	<div class="purchase-popup modal fade" id="purchaseModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="close-wrapper">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-dialog" role="document">
			<div class="purchase-popup__content modal-content">
				<div class="purchase-popup__title">Как купить?</div>
				<div class="purchase-popup__product-pool">
					<div class="purchase-popup__product">
						<div class="purchase-popup__product-leftside">
							<div class="purchase-popup__product-title">
								MAN TGS 19-400 2012 г.
							</div>
						</div>
						<div class="purchase-popup__product-rightside">
							<div class="purchase-popup__counter">
								<button class="purchase-popup__counter-minus"></button>
								<div class="purchase-popup__counter-number">1</div>
								<button class="purchase-popup__counter-plus"></button>
							</div>
							<div class="purchase-popup__sum">
								2200000 р.
							</div>
						</div>
						<button class="purchase-popup__clear"></button>
					</div>
				</div>
				<div class="purchase-popup__products-total">
					Total: 42100000 р.
				</div>
				<div class="purchase-popup__text">
					Заполните форму и мы свяжемся с вами в ближайшее время. Обсудим состояние автомобиля, варианты осмотра и способы оплаты.
				</div>
				<form class="purchase-popup__form" method="post">
					<div class="form-row">
						<label class="purchase-popup__label" for="purchaseName">ФИО</label>
						<input type="text" class="form-control" id="purchaseName">
					</div>
					<div class="form-row">
						<label class="purchase-popup__label" for="purchaseEmail">E-mail</label>
						<input type="email" class="form-control" id="purchaseEmail">
					</div>
					<div class="form-row">
						<label class="purchase-popup__label" for="purchaseTel">Телефон</label>
						<input type="tel" class="form-control" id="maskTel">
					</div>
					<button class="purchase-popup__submit" type="submit">Отправить</button>
				</form>
			</div>
		</div>
	</div>
	<div class="preorder-popup modal fade" id="preorderModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="close-wrapper">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-dialog" role="document">
			<div class="preorder-popup__content modal-content">
				<div class="preorder-popup__title">
					Предзаказ MAN TGS 19-400
				</div>
				<div class="preorder-popup__text">
					Планируете приобрести MAN? Заполните форму и мы свяжемся с вами в ближайшее время. Обсудим количество, возраст авто и стоимость.
				</div>
				<form class="preorder-popup__form" method="post">
					<div class="form-row">
						<input class="preorder-popup__input form-control" type="email" placeholder="E-mail">
					</div>
					<div class="form-row">
						<input class="preorder-popup__input form-control" type="text" placeholder="ФИО">
					</div>
					<div class="form-row">
						<input class="preorder-popup__input form-control" id="maskTel" type="tel" placeholder="Телефон">
					</div>
					<button class="preorder-popup__submit" type="submit">Отправить</button>
				</form>
				<div class="preorder-popup__terms">
					Нажимая на кнопку, вы даете <a href="#">согласие на обработку персональных данных</a> и соглашаетесь c <a href="#">политикой конфиденциальности</a>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/dist/bundle.js"></script>
	</body>
</html>
