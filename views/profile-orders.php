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
										<a class="btn btn-dblue" href="javascript:void(0)">#13714 Обучение игре для новичков</a>
										<ul class="dropdown--list">
											<li class="dropdown--item active">
												<a href="javascript:void(0);" data-tab-target=".order-tab" data-tab="1" data-value="13714">#13714 Обучение игре для новичков</a>
											</li>
											<li class="dropdown--item">
												<a href="javascript:void(0);" data-tab-target=".order-tab" data-tab="2" data-value="21481">Пустой список</a>
											</li>
										</ul>
									</div>
								</div>

								<div class="order-tab-wrapper">
									<div class="order-training">
										<div class="info-line">
											<h6 class="blue">ВЫБРАННОЕ ВРЕМЯ:</h6>
											<div class="order-date-time">
												<div class="cell text">
													<h6>с</h6>
												</div>
												<div class="cell value">
													<div class="datetime-selector">
														<button class="btn dropdown">17.03.18, 12:00</button>
													</div>
												</div>
												<div class="cell text">
													<h6>до</h6>
												</div>
												<div class="cell value">
													<div class="datetime-selector">
														<button class="btn dropdown">17.03.18, 12:00</button>
													</div>
												</div>
												<div class="cell button">
													<button class="btn btn-dblue runner">Редактировать</button>
												</div>
											</div>
										</div>
										<div class="info-line">
											<div class="order-time-out flex">
												<div class="time-out column">
													<h6 class="blue">Времени осталось:</h6>
													<div class="order-timer flex time-out-js" data-target="<?= 4 * 60 * 60 ?>">
														<div class="timer column">
															<div class="time"><span class="h">00</span><span class="desc">ЧАСОВ</span></div>
															<div class="time dots">:</div>
															<div class="time"><span class="m">00</span><span class="desc">МИНУТ</span></div>
															<div class="time dots">:</div>
															<div class="time red"><span class="s">00</span><span class="desc">СЕКУНД</span></div>
														</div>
														<div class="buttons column shrink">
															<button class="btn btn-blue pause" data-text="СТАРТ">ПАУЗА</button>
															<button class="btn btn-red stop">СТОП</button>
														</div>
													</div>
													<div class="order-dropdowns flex">
														<div class="item column">
															<div class="dropstatic">
																<a class="btn btn-dblue" href="javascript:void(0)">Детали заказа</a>
																<div class="dropcontent">
																	<p class="text-center">Детали</p>
																</div>
															</div>														
														</div>
														<div class="item column">
															<div class="dropstatic dark">
																<a class="btn btn-dblue" href="javascript:void(0)">Чат с тренером</a>
																<div class="dropcontent">
																	<div class="order-correspondence">
																		<div class="messages">
																			<div class="message">
																				<div class="message-table">
																					<div class="cell name">
																						<p class="person">Андрей</p>
																						<p class="position">Тренер #1 <span class="created-at">11.05</span></p>		
																					</div>
																				</div>
																				<div class="message-text">
																					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad neque architecto minus eligendi saepe! Dolorem id hic voluptate cum, impedit non, consequuntur nemo distinctio accusamus unde perferendis error aliquam praesentium.
																				</div>
																			</div>
																			<div class="message self">
																				<div class="message-table">
																					<div class="cell name">
																						<p class="person">Вы <span class="created-at">11.05</span></p>
																						<p class="position">Ассистент техподдержки #1</p>		
																					</div>
																				</div>
																				<div class="message-text">
																					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad neque architecto minus eligendi saepe! Dolorem id hic voluptate cum, impedit non, consequuntur nemo distinctio accusamus unde perferendis error aliquam praesentium.
																				</div>
																			</div>
																			<div class="message">
																				<div class="message-table">
																					<div class="cell name">
																						<p class="person">Андрей</p>
																						<p class="position">Тренер #1 <span class="created-at">11.05</span></p>		
																					</div>
																				</div>
																				<div class="message-text">
																					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad neque architecto minus eligendi saepe! Dolorem id hic voluptate cum, impedit non, consequuntur nemo distinctio accusamus unde perferendis error aliquam praesentium.
																				</div>
																			</div>																		
																		</div>
																		<div class="form">
																			<label class="new-message"><input type="text" placeholder="Введите ваше сообщение"></label>
																		</div>
																	</div>
																</div>
															</div>														
														</div>
													</div>
												</div>
												<div class="additional-info column shrink">
													<h6 class="blue">ДОП.ИНФОРМАЦИЯ</h6>
													<div class="details-table">
														<div class="column">
															<div class="details-line">
																<span class="name">Статус заказа</span><span class="value bold">АКТИВНЫЙ</span>
															</div> 
														</div>
														<div class="column">
															<div class="details-line">
																<span class="name">Взят в обработку</span><span class="value bold">12.04.2018, 17:66</span>
															</div> 
														</div>
														<div class="column">
															<div class="details-line">
																<span class="name">Сыграно игр</span><span class="value bold">15</span>
															</div> 
														</div>
														<div class="column">
															<div class="details-line">
																<span class="name">Имя тренера</span><span class="value bold">TRAINER #1</span>
															</div> 
														</div>
														<div class="column">
															<div class="details-line">
																<span class="name">Рейтинг тренера</span><span class="value bold">7000</span>
															</div> 
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="info-line">
											<h6 class="white">История игр</h6>
											<table class="history-table">
												<thead>
													<tr class="heading"><td>Дата</td><td>Тип игры</td><td>Результат</td><td>Герой</td><td>KDA</td><td>Вещи героя</td></tr>
												</thead>
												<tbody>
													<tr>
														<td><span class="hm">Дата</span> 16.02.2017</td>
														<td><span class="hm">Тип игры</span> Буст ММР</td>
														<td><span class="hm">Результат</span> Победа</td>
														<td><span class="hm">Герой</span> <div class="hero-icon"><img src="public/img/pl.png"></div> <span class="hero-name">Phantom Lancer</span></td>
														<td class="kda">
															<span class="hm">KDA</span> 8/2/10
							                                <div class="chart-bar-stacked" data-values="8/2/10"><i></i><i></i><i></i></div>
														</td>
														<td class="items">
															<span class="hm">Вещи героя</span>
															<img src="public/img/soulring.png">
															<img src="public/img/soulring.png">
															<img src="public/img/soulring.png">
															<img src="public/img/soulring.png">
															<img src="public/img/soulring.png">
															<img src="public/img/soulring.png">
														</td>
													</tr>	
													<tr>
														<td><span class="hm">Дата</span> 16.02.2017</td>
														<td><span class="hm">Тип игры</span> Буст медали</td>
														<td><span class="hm">Результа</span> Поражение</td>
														<td><span class="hm">Герой</span> <div class="hero-icon"><img src="public/img/pl.png"></div> <span class="hero-name">Phantom Lancer</span></td>
														<td class="kda">
															<span class="hm">KDA</span> 15/8/33
							                                <div class="chart-bar-stacked" data-values="15/8/33"><i></i><i></i><i></i></div>
														</td>
														<td class="items">
															<span class="hm">Вещи героя</span>
															<img src="public/img/soulring.png">
															<img src="public/img/soulring.png">
															<img src="public/img/soulring.png">
															<img src="public/img/soulring.png">
															<img src="public/img/soulring.png">
															<img src="public/img/soulring.png">
														</td>
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
