
<header class="bg-dblue">
	<div class="container">
		<div class="flex mh80">

			<div class="logo columns shrink">
				<a href="home">
					<img src="public/img/logo.png" alt="fastboosting">
				</a>
			</div>

			<div class="locale columns shrink">
				<div class="locale-container">
					<button class="dropdown-trigger icon-chevron" data-target="locales">
						<span>ru</span>
						<ul class="dropdown-content" id="locales">
						  <li><a>en</a></li>
						  <li><a>ua</a></li>
						</ul>
					</button>
				</div>
			</div>

			<div class="menu columns">
			    <ul class="nav navbar-nav" id="header-menu">
			      <li class="dropdown active">
			        <a class="dropdown-toggle icon-chevron" data-toggle="dropdown">Игры</a>
			        <div class="dropdown-menu">
				        <ul class="dropdown-list">
				        	<?php foreach($games as $i => $game): ?>
				        	<?php if($i < 5): ?>
				          	<li class="dropdown">
				          		<a><?= $game ?></a>
				          		<ul class="submenu">
				          			<li><a href="woo">Буст MMR</a></li>
				          			<li><a href="woo">Калибровка аккаунта</a></li>
				          			<li><a href="woo">Буст медали</a></li>
				          			<li><a href="woo">Обучение игре</a></li>
				          		</ul>
				          	</li>
				          	<?php else: ?>
				          		<li><a href="woo"><?= $game ?></a></li>
				          	<?php endif; ?>
				          	<?php endforeach; ?>
				        </ul>
			        </div>
			      </li>
			      <li><a href="statistics">О нас</a></li>
			      <li><a href="faq">FAQ</a></li>
			      <li><a href="reviews">Отзывы</a></li>
			      <li><a href="career">Работа</a></li>
			      <li><a href="news">Новости</a></li>
			      <li class="locale">
					<a href="locale" class="active">ru</a>
					<a href="locale" class="">en</a>
					<a href="locale" class="">ua</a>
			      </li>
			    </ul>
			</div>

			<div class="buttons columns shrink">
				<a href="skype:manekenvs?call" class="btn btn-skype runner"><i class="icon-skype"></i><span>Skype here</span></a>
				<a href="javascript:void(0)" class="btn btn-login runner"><i class="icon-user"></i><span>АВТОРИЗАЦИЯ</span></a>
			</div>

			<div class="buttons columns shrink">
				<a class="menu-toggle hamburger hamburger--emphatic-r">
			        <div class="hamburger-box">
			          	<div class="hamburger-inner"></div>
			        </div>
			    </a>				
			</div>

		</div>
	</div>
</header>