<main class="home-page normalize">
	<section class="slider-cover" style="background-image: url('public/img/home-cover.jpg')">
		<div class="container">
			<div class="column col-xs-8 col-sm-8 col-md-9">
				<div class="carousel slide" id="home-slider" data-ride="carousel">
  					<div class="carousel-inner">
  						<?php for($x = 0; $x < 4; $x++): ?>
						<div class="item <?= !$x ? 'active' : '' ?>">
							<div class="representer">
								<div class="tags"><a class="tag tag-discount" href="javascript:void(0)">Скидки</a></div>
								<h3 class="title">ИНФОРМАЦИЯ О <br>СКИДКАХ</h3>
								<h4 class="text">Не следует, однако забывать, что дальнейшее <br>развитие различных форм деятельности играет <br>важную роль</h4>
								<div class="buttons">
									<a href="javascript:void(0)" class="btn btn-red runner">СМОТРЕТЬ ВИДЕО</a>
								</div>
							</div>
						</div>
						<?php endfor; ?>
					</div>
					<div class="controls">
						<div class="carousel-indicators">
  						<?php for($x = 0; $x < 4; $x++): ?>
							<button class="<?= !$x ? 'active' : '' ?>" data-target="#home-slider" data-slide-to="<?= $x ?>"></button>
						<?php endfor; ?>
						</div>						
						<div class="carousel-triggers">
							<a href="#home-slider" data-slide="prev"><i class="icon icon-left-open"></i></a>
							<a href="#home-slider" data-slide="next"><i class="icon icon-right-open"></i></a>	
						</div>
					</div>				
				</div>
			</div>
			<div class="column col-xs-4 col-sm-4 col-md-3">
				<div class="promotion">
					<div class="top">
						<div class="logo"><img src="public/img/game-icon.png"></div>
						<div class="text">
							<h6>Тебя ждет</h6>
							<h5>Невероятная прокачка</h5>
							<a href="javascript:void(0)" class="btn btn-red runner">Узнать больше</a>
						</div>
					</div>
					<div class="bottom">
						<span class="image"><img src="public/img/icon-g.png"></span>
						<span class="text">Используй свои возможности сейчас и получи 2000 очков рейтинга</span>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="games-list">
		<div class="games-list--triggers">
			<div class="container">
				<div class="flex">
					<?php foreach($gameslist as $i => $game): ?>
					<div class="columns item">
						<a href="javascript:void(0)" data-tab="<?= $i ?>">
							<img src="public/img/games/<?= $game['img'] ?>">
						</a>
					</div>
					<?php endforeach; ?>
					<div class="columns item more">
						<a href="javascript:void(0)" class="btn btn-red load-more">
							<span>Больше игр <i class="icon icon-angle-down"></i></span>
						</a>
					</div>					
				</div>
			</div>
		</div>
		<div class="games-list--presenter">
			<div class="container">
				<div class="col-xs-12 col-sm-8 col-md-8 col-lg-9">
					<div class="games-list--wrapper" style="display: none;">
					<?php foreach($gameslist as $i => $game): ?>
						<div class="games-list--tab" data-tab="<?= $i ?>">
							<div class="item" style="background-image: url(public/img/games/cover1.png);">
								<div class="content">
									<div class="content--text">
										<h5>Буст аккаунта</h5>
										<h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </h6>
									</div>
									<div class="content--order">
										<span>0т 1000 до 7000 MMR</span> <br>
										<a href="javascript:void(0)" class="btn btn-red runner">Заказать</a>
									</div>
								</div>
							</div>
							<div class="item" style="background-image: url(public/img/games/cover2.png);">
								<div class="content">
									<div class="content--text">
										<h5>Калибровка аккаунта</h5>
										<h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </h6>
									</div>
									<div class="content--order">
										<span>0т 1000 до 7000 MMR</span> <br>
										<a href="javascript:void(0)" class="btn btn-red runner">Заказать</a>
									</div>
								</div>
							</div>
							<div class="item" style="background-image: url(public/img/games/cover3.png);">
								<div class="content">
									<div class="content--text">
										<h5>Буст медали</h5>
										<h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </h6>
									</div>
									<div class="content--order">
										<span>0т 1000 до 7000 MMR</span> <br>
										<a href="javascript:void(0)" class="btn btn-red runner">Заказать</a>
									</div>
								</div>
							</div>
							<div class="item" style="background-image: url(public/img/games/cover4.png);">
								<div class="content">
									<div class="content--text">
										<h5>Обучение игры для начинающих</h5>
										<h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </h6>
									</div>
									<div class="content--order">
										<span>0т 1000 до 7000 MMR</span> <br>
										<a href="javascript:void(0)" class="btn btn-red runner">Заказать</a>
									</div>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
					</div>
					<div class="games-list--advantages">
						<div class="header"><h6>Почему буст нужно заказывать именно у нас?</h6></div>
						<div class="content flex">
							<div class="item columns large-6">
								<div class="icons">
									<a class="box">
										<img src="public/img/icons/shield.png">
									</a>
								</div>
								<div class="text">
									<h6>Безопасная сделка</h6>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
								</div>
							</div>
							<div class="item columns large-6">
								<div class="icons">
									<a class="box">
										<img src="public/img/icons/calendar.png">
									</a>
								</div>
								<div class="text">
									<h6>Время на рынке</h6>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
								</div>
							</div>
							<div class="item columns large-6">
								<div class="icons">
									<a class="box">
										<img src="public/img/icons/team.png">
									</a>
								</div>
								<div class="text">
									<h6>Профессиональная команда</h6>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
								</div>
							</div>
							<div class="item columns large-6">
								<div class="icons">
									<a class="box">
										<img src="public/img/icons/pin.png">
									</a>
								</div>
								<div class="text">
									<h6>Все услуги в одном месте</h6>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
								</div>
							</div>	
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-3">
					<div class="last-orders">
						<div class="last-orders--header">
							<h6>Последние заказы</h6>
						</div>
						<div class="last-orders--list">
							<div class="item">
								<div class="logo">
									<img src="public/img/games/logo1.png" alt="">
								</div>
								<div class="text">
									<h6>Калибровка аккаунта</h6>
									<span class="user">Voodoo Savage</span>
								</div>
							</div>
							<div class="item">
								<div class="logo">
									<img src="public/img/games/logo1.png" alt="">
								</div>
								<div class="text">
									<h6>Калибровка аккаунта</h6>
									<span class="user">Voodoo Savage</span>
								</div>
							</div>
							<div class="item">
								<div class="logo">
									<img src="public/img/games/logo2.png" alt="">
								</div>
								<div class="text">
									<h6>Калибровка аккаунта</h6>
									<span class="user">Voodoo Savage</span>
								</div>
							</div>
							<div class="item">
								<div class="logo">
									<img src="public/img/games/logo3.png" alt="">
								</div>
								<div class="text">
									<h6>Калибровка аккаунта</h6>
									<span class="user">Voodoo Savage</span>
								</div>
							</div>
							<div class="item">
								<div class="logo">
									<img src="public/img/games/logo1.png" alt="">
								</div>
								<div class="text">
									<h6>Калибровка аккаунта</h6>
									<span class="user">Voodoo Savage</span>
								</div>
							</div>
						</div>
						<div class="last-orders--footer">
							<a href="javascript:void(0)" class="btn btn-red runner">Все заказы</a>
							<img class="hook" src="public/img/pudge.png" alt="pudge hook">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="info-block video">
		<div class="container">
			<div class="col-xs-12 col-sm-6 col-md-4">
				<div class="media with-cover video">
					<img src="public/img/axe.png">
					<button class="btn-play">
						<span></span>
					</button>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-8">
				<h5>ВИДЕО О НАС</h5>
				<div class="text">
					<p>Здесь находится сео-текст. Только у нас Вы можете посмотреть заказы над которыми мы работаем. И не просто посмотреть, а увидеть детально, что происходит на них. Если вы являетесь хозяином аккаунта, который мы бустим, то написав Ваш login (В специальное поле на странице) Вам станут доступны и скриншоты каждого действия нашего бустера!</p>
					<a href="javascript:void(0)" class="btn btn-red runner">подробнее</a>
				</div>
			</div>
		</div>
	</section>
	<section class="latest-news">
		<div class="container">
			<h4>ПОСЛЕДНИЕ СТАТЬИ</h4>
			<div class="row">
				<div class="post col-xs-6 col-sm-4">
					<div class="content">
						<div class="image" style="background-image: url(public/img/posts/1.jpg)">
							<img src="public/img/posts/1.jpg" alt="Team Russia Runs!">
						</div>
						<div class="footer">
							<h5 class="runner"><a href="javascript:void(0)">ТИМ РАША ПРОШЛА В ФИНАЛ WESG 2017</a></h5>
							<div class="info">
								<span class="date"><i class="icon icon-clock"></i> 8 часов назад</span>
								<span class="comments"><i class="icon icon-comment-empty"></i> 2</span>
							</div>
							<a href="javascript:void(0)" class="btn btn-red runner">Подробнее <i class="icon icon-angle-right"></i></a>
						</div>
					</div>
				</div>
				<div class="post col-xs-6 col-sm-4">
					<div class="content">
						<div class="image" style="background-image: url(public/img/posts/1.jpg)">
							<img src="public/img/posts/1.jpg" alt="Team Russia Runs!">
						</div>
						<div class="footer">
							<h5 class="runner"><a href="javascript:void(0)">ТИМ РАША ПРОШЛА В ФИНАЛ WESG 2017</a></h5>
							<div class="info">
								<span class="date"><i class="icon icon-clock"></i> 8 часов назад</span>
								<span class="comments"><i class="icon icon-comment-empty"></i> 2</span>
							</div>
							<a href="javascript:void(0)" class="btn btn-red runner">Подробнее <i class="icon icon-angle-right"></i></a>
						</div>
					</div>
				</div>
				<div class="post col-xs-6 col-sm-4">
					<div class="content">
						<div class="image" style="background-image: url(public/img/posts/1.jpg)">
							<img src="public/img/posts/1.jpg" alt="Team Russia Runs!">
						</div>
						<div class="footer">
							<h5 class="runner"><a href="javascript:void(0)">ТИМ РАША ПРОШЛА В ФИНАЛ WESG 2017</a></h5>
							<div class="info">
								<span class="date"><i class="icon icon-clock"></i> 8 часов назад</span>
								<span class="comments"><i class="icon icon-comment-empty"></i> 2</span>
							</div>
							<a href="javascript:void(0)" class="btn btn-red runner">Подробнее <i class="icon icon-angle-right"></i></a>
						</div>
					</div>
				</div>							
			</div>
		</div>
	</section>
	<section class="seo-text">
		<div class="container">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
		</div>
	</section>
</main>
