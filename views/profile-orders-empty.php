<main class="profile-page normalize">
	<section class="breadcrumbs">
		<div class="container">
			<span><a href="home">Главная</a></span>
			<span>Профиль</span>
			<span>Заказы</span>			
		</div>
	</section>
	<section class="mh30"></section>
	<section>
		<div class="container">		
			
			<div class="static--wrapper">
				<div class="header">
					<h2>Ваш кабинет</h2>
				</div>
				<div class="content">
					<div class="flex">
						<div class="column profile-sidebar-contaiter">
							<div class="profile-sidebar">
								<button class="profile-sidebar-trigger visible-xs hamburger hamburger--vortex">
							        <span class="hamburger-box">
							          	<span class="hamburger-inner"></span>
							        </span>
							        <span>Меню</span>
							    </button>
								<ul class="menu-list">
					          		<li><a href="profile-settings"><i class="micon user"></i> Личные данные</a></li>
    					          	<li class="active dropdown">
						          		<a href="profile-orders"><i class="micon list"></i> Заказы</a>
						          		<ul class="submenu">
						          			<li><a href="javascript:void(0)">Dota2</a></li>
						          			<li><a href="javascript:void(0)">CS:GO</a></li>
						          			<li><a href="javascript:void(0)">PUBG</a></li>
						          		</ul>
						          	</li>
					          		<li><a href="profile-vallet"><span class="annunciator">2</span> <i class="micon vallet"></i> Кошелек</a></li>
					          		<li><a href="profile-support"><i class="micon support"></i> Поддержка</a></li>
					          		<li><a href="javascript:void(0)"><i class="micon exit"></i> Выйти</a></li>
  					        	</ul>
							</div>
						</div>
						<div class="column profile-content-contaiter">
							<div class="profile-content orders">

								<div class="info-line">
									<h6 class="filter-title">Текущий заказ</h6>
									<div class="dropdown inline thin">
										<input type="hidden" class="value" value="13714">
										<a class="btn btn-dblue" href="javascript:void(0)">Список пуст</a>
									</div>
								</div>

								<div class="order-tab-wrapper">
									<div class="active-orders-empty">

										<div class="info-line empty mb35 text-center">
											<p>К сожалению, у Вас нет активных заказов.</p>
											<a href="javascript:void(0)" class="btn btn-red runner mt15" onclick="$('#suggested-orders-list').fadeToggle(150)">Создать заказ</a>
										</div>
											
										<div class="info-line empty p20 mb35" id="suggested-orders-list" style="display: none;">
											<div class="order-tab-wrapper">
												<div class="games-list--presenter">
													<div class="games-list--wrapper">
														<div class="games-list--tab active">
															<div class="item" style="background-image: url(public/img/games/cover1.png);">
																<div class="content">
																	<div class="content--text">
																		<h5>Буст аккаунта</h5>
																		<h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </h6>
																	</div>
																	<div class="content--order">
																		<span>0т 1000 до 7000 MMR</span> <br>
																		<a href="order-boost" class="btn btn-red runner">Заказать</a>
																	</div>
																</div>
															</div>
															<div class="item" style="background-image: url(public/img/games/cover2.png);">
																<div class="tags"><a class="tag tag-discount" href="javascript:void(0)">Скидки</a></div>
																<div class="content">
																	<div class="content--text">
																		<h5>Калибровка аккаунта</h5>
																		<h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </h6>
																	</div>
																	<div class="content--order">
																		<span>0т $1.00 до $50.00/шт.</span> <br>
																		<a href="order-cali" class="btn btn-red runner">Заказать</a>
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
																		<span>0т $1.00 до $50.00/шт.</span> <br>
																		<a href="order-medal" class="btn btn-red runner">Заказать</a>
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
																		<span>0т $1.00 до $50.00/шт.</span> <br>
																		<a href="order-training" class="btn btn-red runner">Заказать</a>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="info-line empty p20">
											<h6 class="title">История заказов</h6>
											<table class="profile-info-table">
												<thead>
													<tr class="heading"><td>ID</td><td>Дата</td><td>Игра</td><td>Название заказа</td><td>Статус</td><td></td></tr>											
												</thead>
												<tbody>
													<tr>
														<td>1331</td>
														<td>16.02.2017</td>
														<td>Dota 2</td>
														<td>Буст аккаунта Dota 2</td>
														<td>Завершен</td>
														<td><button class="btn btn-red runner"><i class="icon icon-right-open"></i><strong>подробнее</strong></button></td>
													</tr>
													<tr>
														<td>1332</td>
														<td>29.02.2017</td>
														<td>Dota 2</td>
														<td>Буст медали Dota 2</td>
														<td>Завершен</td>
														<td><button class="btn btn-red runner"><i class="icon icon-right-open"></i><strong>подробнее</strong></button></td>
													</tr>											
												</tbody>
											</table>
										</div>	

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</section>
</main>
