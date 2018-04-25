<?php /* Template Name: Главная */ ?>
<!DOCTYPE html>
<html>
<?php get_header(); ?>
<body>
	<header class="main-header">
	    <div class="main-header__content">
	        <nav class="main-header__leftside">
	            <ul class="main-header__menu-list">
	                <li><a data-scrollto="contacts" href="#contacts" data-scroll>Где посмотреть?</a></li>
	                <li><a data-scrollto="contacts" href="#questions" data-scroll>Оплата и доставка</a></li>
	                <li><a data-scrollto="contacts" href="#credit"  data-scroll>Рассрочка</a></li>
	                <li><a data-scrollto="contacts" href="#preorder" data-scroll>Предзаказ</a></li>
	            </ul>
	        </nav>
	        <div class="main-header__rightside">
	            <a class="main-header__drivers" href="https://бтф.рф/?utm_source=btftrucks">Ищем водителей категории Е</a>
	            <a class="main-header__contacts-button" href="#contacts" data-scroll>Контакты</a>
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
				<h1 class="landing__intro-title">
					<?php the_field('intro-title'); ?>
				</h1>
				<a class="landing__intro-button" href="#technics" data-scroll>Выбрать машину</a>
			</div>
		</div>
		<div class="container">
			<section class="landing__features">
				<div class="landing__features-grid">
					<?php foreach(get_field('features') as $row): ?>
					<div class="features-item">
						<div class="features-item__pic">
							<img class="features-item__wallet-image" src="<?php echo $row['features_pic'] ?>" alt="">
						</div>
						<div class="features-item__title">
							<?php echo $row['features_title'] ?>
						</div>
						<div class="features-item__text">
							<?php echo $row['features_text'] ?>
						</div>
					</div>
					<?php endforeach; ?>
				</div>
			</section>
		</div>
		<section class="landing__technics" id="technics">
			<div class="container">
				<h2 class="landing__technics-title">Техника на продажу</h2>
				<?php
					$params = array(
						'post_type' => 'technics',
						'order'     => 'ASC'
					);
					$posts = get_posts($params);
				?>
				<select class="landing__technics-select">
					<?php foreach( $posts as $post ) : ?>
					<option><?php the_title(); ?></option>
					<?php endforeach; ?>
				</select>
				<ul class="landing__technics-tabs nav nav-tabs">
					<?php foreach( $posts as $key => $post ) :?>
					<li class="nav-item">
						<a class="nav-link <?php if ($key == 0) echo "active" ?>" data-toggle="tab" href="#technic-group-<?php echo $key ?>"><?php the_title(); ?></a>
					</li>
					<?php endforeach; ?>
				</ul>
				<div class="tab-content" id="myTabContent">
					<?php foreach( $posts as $key => $post ) : ?>
						<div class="tab-pane fade show <?php if ($key == 0) echo "active" ?>" id="technic-group-<?php echo $key ?>" role="tabpanel" aria-labelledby="home-tab">
							<div class="technics-item">
								<div class="technics-item__wrapper">
									<div class="technics-item__desc">
										<div class="technics-item__title">
											<?php the_field('technic_title', $post->id); ?>
										</div>
										<div class="technics-item__parametres">
											<?php the_field('technic_parametres', $post->id); ?>
										</div>
									</div>
									<div class="technics-item__photo">
										<div id="carouselIndicators-<?php echo $key ?>" class="carousel slide w-100" data-ride="pause" data-interval="false">
											<ol class="carousel-indicators">
												<?php foreach(get_field('technic_gallery', $post->id) as $imagekey => $image): ?>
												<li <?php if ($imagekey == 0) echo 'class="active"' ?> data-target="#carouselIndicators-<?php echo $key ?>" data-slide-to="<?php echo $imagekey ?>"></li>
												<?php endforeach; ?>
											</ol>
											<div class="carousel-inner">
												<?php foreach(get_field('technic_gallery', $post->id) as $imagekey => $image): ?>
												<div class="carousel-item <?php if ($imagekey == 0) echo "active" ?>">
													<a href="<?php echo $image['url']; ?>" data-toggle="lightbox" data-gallery="gallery-<?php echo $key ?>">
														<img class="d-block w-100" src="<?php echo $image['url']; ?>" data-lightbox="technic" alt="">
													</a>
												</div>
												<?php endforeach; ?>
											</div>
											<a class="carousel-control-prev" href="#carouselIndicators-<?php echo $key ?>" role="button" data-slide="prev">
												<span class="carousel-control-prev-icon" aria-hidden="true"></span>
												<span class="sr-only">Previous</span>
											</a>
											<a class="carousel-control-next" href="#carouselIndicators-<?php echo $key ?>" role="button" data-slide="next">
												<span class="carousel-control-next-icon" aria-hidden="true"></span>
												<span class="sr-only">Next</span>
											</a>
										</div>
									</div>
								</div>
								<div class="technics-item__products">
									<table class="technics-item__table">
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
											<?php foreach(get_field('technic_models', $post->id) as $row): ?>
											<tr>
												<td><?php echo $row['technic_models-title'] ?></td>
												<td><?php echo $row['technic_models-year'] ?></td>
												<td><?php echo $row['technic_models-count'] ?></td>
												<td><?php echo $row['technic_models-price'] ?></td>
												<td>
													<?php
														$modelstatus = $row['technic_models-status'];
														switch ($modelstatus) {
															case 'Продано':
																echo "Продано";
																break;
															case 'Купить':
																echo '<button class="purchase-button" type="button" data-toggle="modal" data-target="#purchaseModal">Как купить?</button>';
																break;
															case 'Предзаказ':
																echo '<button class="purchase-button" type="button" data-toggle="modal" data-target="#preorderModal">Предзаказ</button>';
																break;
														}
													?>
												</td>
											</tr>
											<?php endforeach; ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					<?php endforeach;
					wp_reset_postdata();
					?>
					</div>
				</div>
			</div>
		</section>
		<section class="landing__preorder" id="preorder">
			<div class="container">
				<h2 class="landing__preorder-title">Предзаказ</h2>
				<div class="landing__preorder-pool">
					<?php foreach(get_field('preorder') as $row): ?>
					<article class="preorder-item">
						<div class="preorder-item__image" style="background: url('<?php echo $row['preorder_photo'] ?>') 50% 50%; background-size: cover">
						</div>
						<div class="preorder-item__desc">
							<h3 class="preorder-item__title"><?php echo $row['preorder_title'] ?></h3>
							<div class="preorder-item__text">
								<?php echo $row['preorder_text'] ?>
							</div>
						</div>
						<button type="button" class="preorder-item__button" data-toggle="modal" data-target="#preorderModal">Запросить информацию</button>
					</article>
					<?php endforeach; ?>
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
					<?php the_field('credit'); ?>
					<div class="landing__credit-email-sign"></div>
				</div>
				<div class="landing__credit-doc">
					<img class="landing__credit-doc-image" src="<?php echo get_template_directory_uri(); ?>/dist/img/doc.svg" alt="">
					<div class="landing__credit-doc-text">
						Скачать<br> <a href="http://btf-rabota.ru/anketa.docx">анкету покупателя</a>
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
				<?php the_field('contacts'); ?>
		</section>
		<section class="landing__questions" id="questions">
			<div class="container">
				<h2 class="landing__questions-title">Вопросы и ответы</h2>
				<?php foreach(get_field('faq') as $row): ?>
				<div class="question-item">
					<div class="question-item__question">Вопрос</div>
					<div class="question-item__title"><?php echo $row['faq_question'] ?></div>
					<div class="question-item__answer">Ответ</div>
					<div class="question-item__text">
						<?php echo $row['faq_answer'] ?>
					</div>
				</div>
				<?php endforeach; ?>
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
						<input class="form-control js-mask" type="tel">
					</div>
					<button class="purchase-popup__submit" type="submit">Отправить</button>
				</form>
			</div>
		</div>
	</div>
	<div class="preorder-popup modal fade" id="preorderModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="close-wrapper">
			<button class="close" type="button" data-dismiss="modal" aria-label="Close"></button>
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
						<input class="preorder-popup__input form-control js-mask" type="tel" placeholder="Телефон">
					</div>
					<button class="preorder-popup__submit" type="submit">Отправить</button>
				</form>
				<div class="preorder-popup__terms">
					Нажимая на кнопку, вы даете <a href="http://rabotavkdv.ru/voronezh/operator#personaldata">согласие на обработку персональных данных</a> и соглашаетесь c <a href="http://rabotavkdv.ru/voronezh/operator#policy">политикой конфиденциальности</a>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/dist/bundle.js"></script>
	</body>
</html>
