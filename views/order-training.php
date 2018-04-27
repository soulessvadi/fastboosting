<main class="order-page normalize">
	<section class="breadcrumbs">
		<div class="container">
			<span><a href="home">Главная</a></span>
			<span>Профиль</span>
			<span>Заказы</span>			
		</div>
	</section>
	<section class="mh30"></section>
	<section class="order-form">
		<div class="container">		

			<div class="col-sm-12 col-md-9 main-content">
				<div class="static--wrapper">
					<div class="header">
						<h2>БУСТ АККАУНТА: DOTA2</h2>
					</div>
					<div class="content">
						<div class="order-steps--wrapper">
							<div class="order-steps--row inactive-toggable" data-step="1">
								<div class="row-btn"><button class="inactive-toggle"></button></div>
								<div class="row-content">
									<div class="row-header"><h6>Настройка данных</h6></div>
									<div class="row-body">
										<div class="alert-message">
											<div class="icon"></div>
											<div class="text">
												<span>Ваше соединение должно быть не меньше 5мб/c. Так же обязательно наличие работающего микрофона.</span>
											</div>
										</div>
										<div class="slider order-slider order-slider-single">
											<div class="slider-inputs left">
												<label>
													<span>Ваш текущий уровень MMR</span>
													<input type="text" value="3500" class="value">
												</label>
											</div>
											<div class="slider-toddler">
												<div class="slider--single" data-min="0" data-max="7000" data-start="2400" data-pips="8"></div>
											</div>											
										</div>
										<div class="slider date-time">
											<div class="slider-inputs">
												<span>Удобное время для игры</span>
											</div>		
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
											</div>								
										</div>
										<div class="slider order-slider order-slider-wide">
											<div class="slider-inputs">
												<span>Количество часов для игры</span>
											</div>
											<div class="slider-toddler">
												<div class="slider--boobled slider--highlighted" data-min="1" data-max="8" data-start="4" data-pips="8" data-postfix="ч."></div>
											</div>											
										</div>
									</div>
								</div>
							</div>
							<div class="order-steps--row inactive-toggable" data-step="2">
								<div class="row-btn"><button class="inactive-toggle"></button></div>
								<div class="row-content">
									<div class="row-header"><h6>Выбор навыков</h6></div>
									<div class="row-body">
										<h6 class="description">Чтобы мы могли подобрать для вас наиболее подходящего тренера, сообщите нам, что бы вы хотели улучшить в своей игре:</h6>
										<div class="training-options">
											<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-6 col-lg-3">
												<div class="item">
													<label class="checkbox-line">
														<span>Обучение фарму</span>
														<input type="checkbox" name="box" checked>
														<span class="checkmark"></span>
													</label>
												</div>
												<div class="item">
													<label class="checkbox-line">
														<span>Игра на миде</span>
														<input type="checkbox" name="box" checked>
														<span class="checkmark"></span>
													</label>
												</div>
												<div class="item">
													<label class="checkbox-line">
														<span>Игра на кэрри</span>
														<input type="checkbox" name="box" checked>
														<span class="checkmark"></span>
													</label>
												</div>
											</div>										
											<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-6 col-lg-4">
												<div class="item">
													<label class="checkbox-line">
														<span>Игра на саппорте</span>
														<input type="checkbox" name="box" checked>
														<span class="checkmark"></span>
													</label>
												</div>
												<div class="item">
													<label class="checkbox-line">
														<span>Игра на тяжелой линии</span>
														<input type="checkbox" name="box" checked>
														<span class="checkmark"></span>
													</label>
												</div>
												<div class="item">
													<label class="checkbox-line">
														<span>Игра на роумерах</span>
														<input type="checkbox" name="box" checked>
														<span class="checkmark"></span>
													</label>
												</div>
											</div>										
											<div class="col-xxs-12 col-xs-12 col-sm-12 col-md-12 col-lg-5">
												<div class="item choose-heroes">
													<label class="checkbox-line">
														<span>Освоить конкретного героя</span>
														<button class="btn btn-red" data-toggle="modal" data-target=".heroes-select-modal">Выбор героев</button>
														<input type="checkbox" name="box" checked>
														<span class="checkmark"></span>
													</label>
													<div class="chosen-heroes-list">
														<label class="hero-box">
															<button class="close"></button>
															<i class="image" style="background-image: url('public/img/abba.jpg');"></i>
														</label>
														<label class="hero-box">
															<button class="close"></button>
															<i class="image" style="background-image: url('public/img/abba.jpg');"></i>
														</label>
													</div>
												</div>
												<div class="item">
													<label class="checkbox-line">
														<span>Другое (анализ реплеев и др.) <small>Укажите пожелания в текстовой форме ниже</small> 
														</span>
														<input type="checkbox" name="box" checked>
														<span class="checkmark"></span>
													</label>
												</div>
											</div>											
										</div>										
									</div>
								</div>
							</div>
							<div class="order-steps--row inactive-toggable" data-step="4">
								<div class="row-btn"><button class="inactive-toggle"></button></div>
								<div class="row-content">
									<div class="row-header"><h6>Выбор тренера</h6></div>
									<div class="row-body">
										<div class="top-boosters trainers-selector">
											<div class="our-boosters--grid">
												<div class="item col-xxs-12 col-xs-4">
													<div class="our-boosters--item">
														<div class="avatar" style="background-image: url('public/img/avatar.png')"></div>
														<h5 class="name">Имя тренера #1</h5>
														<table class="info-table">
															<tr>
																<td>Страна:</td>
																<td><b>Украина</b></td>
															</tr>
															<tr>
																<td>Кол-во MMR:</td>
																<td><b>7000</b></td>
															</tr>
															<tr>
																<td>Рейтинг</td>
																<td><div class="rating r-4"><i></i><i></i><i></i><i></i><i></i></div></td>
															</tr>
														</table>
														<div class="separator"></div>
														<button class="btn btn-down"><i class="hidden-sm hidden-xs">Подробнее</i> о тренере</button>
														<div class="our-boosters--footer">
															<h6>Лучшие герои</h6>
															<div class="best-heroes-list">
																<i class="image" style="background-image: url('public/img/abba.jpg');"></i>
																<i class="image" style="background-image: url('public/img/abba.jpg');"></i>
																<i class="image" style="background-image: url('public/img/abba.jpg');"></i>
																<i class="image" style="background-image: url('public/img/abba.jpg');"></i>
															</div>
															<div class="separator"></div>
															<h6>Знание линий</h6>
								                            <div class="charts">
									                            <div class="charts-item">
									                                <div class="chart-presenter">
										                                <canvas class="chart-canvas" width="60" height="60" data-fill="70"></canvas>
										                                <div class="value">70%</div>
									                                </div>
									                            	<div class="title">Мид</div>
									                            </div>
									                            <div class="charts-item">
									                                <div class="chart-presenter">
										                                <canvas class="chart-canvas" width="60" height="60" data-fill="70"></canvas>
										                                <div class="value">70%</div>
									                                </div>
									                            	<div class="title">Керри</div>
									                            </div>
									                            <div class="charts-item">
									                                <div class="chart-presenter">
										                                <canvas class="chart-canvas" width="60" height="60" data-fill="70"></canvas>
										                                <div class="value">70%</div>
									                                </div>
									                            	<div class="title">Саппорт</div>
									                            </div>
									                        </div>
															<div class="separator"></div>
															<h6>О тренере</h6>
															<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus vel quibusdam est consequatur quis autem vero rerum quia architecto voluptas cum reiciendis nostrum, eligendi, saepe ipsa ullam quos veritatis dolorum.</p>
															<button class="btn btn-down up"><i class="hidden-sm hidden-xs">Подробнее</i> о тренере</button>
														</div>		
													</div>
												</div>
												<div class="item col-xxs-12 col-xs-4">
													<div class="our-boosters--item">
														<div class="avatar" style="background-image: url('public/img/avatar.png')"></div>
														<h5 class="name">Имя тренера #2</h5>
														<table class="info-table">
															<tr>
																<td>Страна:</td>
																<td><b>Украина</b></td>
															</tr>
															<tr>
																<td>Кол-во MMR:</td>
																<td><b>7000</b></td>
															</tr>
															<tr>
																<td>Рейтинг</td>
																<td><div class="rating r-4"><i></i><i></i><i></i><i></i><i></i></div></td>
															</tr>
														</table>
														<div class="separator"></div>	
														<button class="btn btn-down"><i class="hidden-sm hidden-xs">Подробнее</i> о тренере</button>
														<div class="our-boosters--footer">
															<h6>Лучшие герои</h6>
															<div class="best-heroes-list">
																<i class="image" style="background-image: url('public/img/abba.jpg');"></i>
																<i class="image" style="background-image: url('public/img/abba.jpg');"></i>
																<i class="image" style="background-image: url('public/img/abba.jpg');"></i>
																<i class="image" style="background-image: url('public/img/abba.jpg');"></i>
															</div>
															<div class="separator"></div>
															<h6>Знание линий</h6>
								                            <div class="charts">
									                            <div class="charts-item">
									                                <div class="chart-presenter">
										                                <canvas class="chart-canvas" width="60" height="60" data-fill="70"></canvas>
										                                <div class="value">70%</div>
									                                </div>
									                            	<div class="title">Мид</div>
									                            </div>
									                            <div class="charts-item">
									                                <div class="chart-presenter">
										                                <canvas class="chart-canvas" width="60" height="60" data-fill="70"></canvas>
										                                <div class="value">70%</div>
									                                </div>
									                            	<div class="title">Керри</div>
									                            </div>
									                            <div class="charts-item">
									                                <div class="chart-presenter">
										                                <canvas class="chart-canvas" width="60" height="60" data-fill="70"></canvas>
										                                <div class="value">70%</div>
									                                </div>
									                            	<div class="title">Саппорт</div>
									                            </div>
									                        </div>
															<div class="separator"></div>
															<h6>О тренере</h6>
															<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus vel quibusdam est consequatur quis autem vero rerum quia architecto voluptas cum reiciendis nostrum, eligendi, saepe ipsa ullam quos veritatis dolorum.</p>
															<button class="btn btn-down up"><i class="hidden-sm hidden-xs">Подробнее</i> о тренере</button>
														</div>						
													</div>
												</div>
												<div class="item col-xxs-12 col-xs-4">
													<div class="our-boosters--item">
														<div class="avatar" style="background-image: url('public/img/avatar.png')"></div>
														<h5 class="name">Имя тренера #3</h5>
														<table class="info-table">
															<tr>
																<td>Страна:</td>
																<td><b>Украина</b></td>
															</tr>
															<tr>
																<td>Кол-во MMR:</td>
																<td><b>7000</b></td>
															</tr>
															<tr>
																<td>Рейтинг</td>
																<td><div class="rating r-4"><i></i><i></i><i></i><i></i><i></i></div></td>
															</tr>
														</table>
														<div class="separator"></div>	
														<button class="btn btn-down"><i class="hidden-sm hidden-xs">Подробнее</i> о тренере</button>
														<div class="our-boosters--footer">
															<h6>Лучшие герои</h6>
															<div class="best-heroes-list">
																<i class="image" style="background-image: url('public/img/abba.jpg');"></i>
																<i class="image" style="background-image: url('public/img/abba.jpg');"></i>
																<i class="image" style="background-image: url('public/img/abba.jpg');"></i>
																<i class="image" style="background-image: url('public/img/abba.jpg');"></i>
															</div>
															<div class="separator"></div>
															<h6>Знание линий</h6>
								                            <div class="charts">
									                            <div class="charts-item">
									                                <div class="chart-presenter">
										                                <canvas class="chart-canvas" width="60" height="60" data-fill="70"></canvas>
										                                <div class="value">70%</div>
									                                </div>
									                            	<div class="title">Мид</div>
									                            </div>
									                            <div class="charts-item">
									                                <div class="chart-presenter">
										                                <canvas class="chart-canvas" width="60" height="60" data-fill="70"></canvas>
										                                <div class="value">70%</div>
									                                </div>
									                            	<div class="title">Керри</div>
									                            </div>
									                            <div class="charts-item">
									                                <div class="chart-presenter">
										                                <canvas class="chart-canvas" width="60" height="60" data-fill="70"></canvas>
										                                <div class="value">70%</div>
									                                </div>
									                            	<div class="title">Саппорт</div>
									                            </div>
									                        </div>
															<div class="separator"></div>
															<h6>О тренере</h6>
															<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus vel quibusdam est consequatur quis autem vero rerum quia architecto voluptas cum reiciendis nostrum, eligendi, saepe ipsa ullam quos veritatis dolorum.</p>
															<button class="btn btn-down up"><i class="hidden-sm hidden-xs">Подробнее</i> о тренере</button>
														</div>				
													</div>
												</div>
											</div>	
											<div class="load-more-wrapper">
												<div class="text-center">
													<a href="javascript:void(0)" class="btn btn-red load-more runner">Загрузить еще <b>+3</b></a>
												</div>							
											</div>		
										</div>
									</div>
								</div>
							</div>
							<div class="order-steps--row inactive-toggable" data-step="4">
								<div class="row-btn"><button class="inactive-toggle"></button></div>
								<div class="row-content">
									<div class="row-header"><h6>Дополнительная информация для тренера</h6></div>
									<div class="row-body form">
										<label>
											<textarea placeholder="Введите ваше сообщение"></textarea>
										</label>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>				
			</div>

			<div class="col-sm-12 col-md-3">
				<div class="order-side-info">
					<div class="order-info chaser chaser-md">
						<h5>Информация о заказе</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus asperiores numquam enim exercitationem officiis voluptatum molestias consectetur aspernatur dolorum.</p>
						<div class="separator"></div>
						<table class="info-table">
							<tr>
								<td>Игра:</td>
								<td><b>Dota 2</b></td>
							</tr>
							<tr>
								<td>Услуга:</td>
								<td><b>Буст аккаунта</b></td>
							</tr>
						</table>
						<h5>Стоимость услуги</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus asperiores numquam enim exercitationem officiis voluptatum molestias consectetur aspernatur dolorum.</p>
						<div class="separator"></div>
						<table class="info-table">
							<tr>
								<td>MMR 1000-5000</td>
								<td><b>$50.00</b></td>
							</tr>
							<tr>
								<td>Premium Boost</td>
								<td><b>$10.00</b></td>
							</tr>
							<tr>
								<td>Защита от бана</td>
								<td><b>$5.00</b></td>
							</tr>
						</table>
						<div class="separator"></div>	
						<div class="order-info--footer">
							<div class="chaser chaser-xs chaser-sm">
								<a href="javascipt:void(0)" class="promo-link">У Вас есть промокод?</a>
								<span class="total-amount">$50.00</span>
								<button class="btn btn-red runner">Продолжить</button>
							</div>				
						</div>	
					</div>
				</div>
			</div>		

		</div>
	</section>
	<section class="top-boosters p60">
		<div class="container">
			<h3 class="text-center">Наши тренера</h3>
			<div class="our-boosters--grid">
				<div class="item col-xs-12 col-sm-4">
					<div class="our-boosters--item">
						<div class="avatar" style="background-image: url('public/img/avatar.png')"></div>
						<h5 class="name">Имя тренера #1</h5>
						<table class="info-table">
							<tr>
								<td>Страна:</td>
								<td><b>Украина</b></td>
							</tr>
							<tr>
								<td>Кол-во MMR:</td>
								<td><b>7000</b></td>
							</tr>
							<tr>
								<td>Рейтинг</td>
								<td><div class="rating r-4"><i></i><i></i><i></i><i></i><i></i></div></td>
							</tr>
						</table>
						<div class="separator"></div>
						<button class="btn btn-down"><i class="hidden-sm">Показать</i> подробности</button>
						<div class="our-boosters--footer">
							<h6>Лучшие герои</h6>
							<div class="best-heroes-list">
								<i class="image" style="background-image: url('public/img/abba.jpg');"></i>
								<i class="image" style="background-image: url('public/img/abba.jpg');"></i>
								<i class="image" style="background-image: url('public/img/abba.jpg');"></i>
								<i class="image" style="background-image: url('public/img/abba.jpg');"></i>
							</div>
							<div class="separator"></div>
							<h6>Знание линий</h6>
                            <div class="charts">
	                            <div class="charts-item">
	                                <div class="chart-presenter">
		                                <canvas class="chart-canvas" width="60" height="60" data-fill="70"></canvas>
		                                <div class="value">70%</div>
	                                </div>
	                            	<div class="title">Мид</div>
	                            </div>
	                            <div class="charts-item">
	                                <div class="chart-presenter">
		                                <canvas class="chart-canvas" width="60" height="60" data-fill="70"></canvas>
		                                <div class="value">70%</div>
	                                </div>
	                            	<div class="title">Керри</div>
	                            </div>
	                            <div class="charts-item">
	                                <div class="chart-presenter">
		                                <canvas class="chart-canvas" width="60" height="60" data-fill="70"></canvas>
		                                <div class="value">70%</div>
	                                </div>
	                            	<div class="title">Саппорт</div>
	                            </div>
	                        </div>
							<div class="separator"></div>
							<h6>О тренере</h6>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus vel quibusdam est consequatur quis autem vero rerum quia architecto voluptas cum reiciendis nostrum, eligendi, saepe ipsa ullam quos veritatis dolorum.</p>
							<button class="btn btn-down up"><i class="hidden-sm">Скрыть</i> подробности</button>
						</div>		
					</div>
				</div>
				<div class="item col-xs-12 col-sm-4">
					<div class="our-boosters--item">
						<div class="avatar" style="background-image: url('public/img/avatar.png')"></div>
						<h5 class="name">Имя тренера #2</h5>
						<table class="info-table">
							<tr>
								<td>Страна:</td>
								<td><b>Украина</b></td>
							</tr>
							<tr>
								<td>Кол-во MMR:</td>
								<td><b>7000</b></td>
							</tr>
							<tr>
								<td>Рейтинг</td>
								<td><div class="rating r-4"><i></i><i></i><i></i><i></i><i></i></div></td>
							</tr>
						</table>
						<div class="separator"></div>	
						<button class="btn btn-down"><i class="hidden-sm">Показать</i> подробности</button>
						<div class="our-boosters--footer">
							<h6>Лучшие герои</h6>
							<div class="best-heroes-list">
								<i class="image" style="background-image: url('public/img/abba.jpg');"></i>
								<i class="image" style="background-image: url('public/img/abba.jpg');"></i>
								<i class="image" style="background-image: url('public/img/abba.jpg');"></i>
								<i class="image" style="background-image: url('public/img/abba.jpg');"></i>
							</div>
							<div class="separator"></div>
							<h6>Знание линий</h6>
                            <div class="charts">
	                            <div class="charts-item">
	                                <div class="chart-presenter">
		                                <canvas class="chart-canvas" width="60" height="60" data-fill="70"></canvas>
		                                <div class="value">70%</div>
	                                </div>
	                            	<div class="title">Мид</div>
	                            </div>
	                            <div class="charts-item">
	                                <div class="chart-presenter">
		                                <canvas class="chart-canvas" width="60" height="60" data-fill="70"></canvas>
		                                <div class="value">70%</div>
	                                </div>
	                            	<div class="title">Керри</div>
	                            </div>
	                            <div class="charts-item">
	                                <div class="chart-presenter">
		                                <canvas class="chart-canvas" width="60" height="60" data-fill="70"></canvas>
		                                <div class="value">70%</div>
	                                </div>
	                            	<div class="title">Саппорт</div>
	                            </div>
	                        </div>
							<div class="separator"></div>
							<h6>О тренере</h6>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus vel quibusdam est consequatur quis autem vero rerum quia architecto voluptas cum reiciendis nostrum, eligendi, saepe ipsa ullam quos veritatis dolorum.</p>
							<button class="btn btn-down up"><i class="hidden-sm">Скрыть</i> подробности</button>
						</div>						
					</div>
				</div>
				<div class="item col-xs-12 col-sm-4">
					<div class="our-boosters--item">
						<div class="avatar" style="background-image: url('public/img/avatar.png')"></div>
						<h5 class="name">Имя тренера #3</h5>
						<table class="info-table">
							<tr>
								<td>Страна:</td>
								<td><b>Украина</b></td>
							</tr>
							<tr>
								<td>Кол-во MMR:</td>
								<td><b>7000</b></td>
							</tr>
							<tr>
								<td>Рейтинг</td>
								<td><div class="rating r-4"><i></i><i></i><i></i><i></i><i></i></div></td>
							</tr>
						</table>
						<div class="separator"></div>	
						<button class="btn btn-down"><i class="hidden-sm">Показать</i> подробности</button>
						<div class="our-boosters--footer">
							<h6>Лучшие герои</h6>
							<div class="best-heroes-list">
								<i class="image" style="background-image: url('public/img/abba.jpg');"></i>
								<i class="image" style="background-image: url('public/img/abba.jpg');"></i>
								<i class="image" style="background-image: url('public/img/abba.jpg');"></i>
								<i class="image" style="background-image: url('public/img/abba.jpg');"></i>
							</div>
							<div class="separator"></div>
							<h6>Знание линий</h6>
                            <div class="charts">
	                            <div class="charts-item">
	                                <div class="chart-presenter">
		                                <canvas class="chart-canvas" width="60" height="60" data-fill="70"></canvas>
		                                <div class="value">70%</div>
	                                </div>
	                            	<div class="title">Мид</div>
	                            </div>
	                            <div class="charts-item">
	                                <div class="chart-presenter">
		                                <canvas class="chart-canvas" width="60" height="60" data-fill="70"></canvas>
		                                <div class="value">70%</div>
	                                </div>
	                            	<div class="title">Керри</div>
	                            </div>
	                            <div class="charts-item">
	                                <div class="chart-presenter">
		                                <canvas class="chart-canvas" width="60" height="60" data-fill="70"></canvas>
		                                <div class="value">70%</div>
	                                </div>
	                            	<div class="title">Саппорт</div>
	                            </div>
	                        </div>
							<div class="separator"></div>
							<h6>О тренере</h6>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus vel quibusdam est consequatur quis autem vero rerum quia architecto voluptas cum reiciendis nostrum, eligendi, saepe ipsa ullam quos veritatis dolorum.</p>
							<button class="btn btn-down up"><i class="hidden-sm">Скрыть</i> подробности</button>
						</div>				
					</div>
				</div>
			</div>	
			<div class="load-more-wrapper">
				<div class="text-center">
					<a href="javascript:void(0)" class="btn btn-red load-more runner">Загрузить еще <b>+3</b></a>
				</div>							
			</div>		
		</div>
	</section>
	<section class="guarantees block-section">
		<div>
			<div class="container">
				<h6 class="block-title">Наши гарантии</h6>
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
	</section>
	<section class="works block-section">
		<div class="container">
			<h6 class="block-title">Наша работа</h6>
			<div class="works-block">
				<div class="cell col-xs-offset-2 col-sm-offset-3 col-md-offset-0 col-xs-8  col-sm-6 col-md-4 col-lg-4">
					<div class="works-slider">
						<div class="carousel slide" id="works-slider" data-ride="carousel">
		  					<div class="carousel-inner">
		  						<?php for($x = 0; $x < 4; $x++): ?>
								<div class="item <?= !$x ? 'active' : '' ?>">
									<a class="zoom js-zoom-images to-gallery" href="public/img/work1.jpg" target="_blank">
										<img src="public/img/work1.jpg" alt="">
									</a>
								</div>
								<?php endfor; ?>
							</div>
							<div class="controls">
								<a class="prev" href="#works-slider" data-slide="prev"><i class="icon icon-left-open"></i></a>
								<a class="next" href="#works-slider" data-slide="next"><i class="icon icon-right-open"></i></a>	
							</div>
						</div>
					</div>
				</div>
				<div class="cell col-xs-12 col-sm-12 col-md-8 col-lg-8">
					<div class="works-reviews">
						<div class="item col-xs-6">
							<div class="review">
								<div class="item">
									<div class="logo"><div class="avatar" style="background-image: url();"></div></div>
									<div class="text">
										<h6>Андрей Бустер</h6>
										<div class="theme">Буст аккаунта Dota2</div>
										<div class="rating r-4"><i></i><i></i><i></i><i></i><i></i></div>
										<div class="message">
											<p>Отличный сервис, рекомендую</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item col-xs-6">
							<div class="review">
								<div class="item">
									<div class="logo"><div class="avatar" style="background-image: url();"></div></div>
									<div class="text">
										<h6>Андрей Бустер</h6>
										<div class="theme">Буст аккаунта Dota2</div>
										<div class="rating r-4"><i></i><i></i><i></i><i></i><i></i></div>
										<div class="message">
											<p>Отличный сервис, рекомендую</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item col-xs-6">
							<div class="review">
								<div class="item">
									<div class="logo"><div class="avatar" style="background-image: url();"></div></div>
									<div class="text">
										<h6>Андрей Бустер</h6>
										<div class="theme">Буст аккаунта Dota2</div>
										<div class="rating r-4"><i></i><i></i><i></i><i></i><i></i></div>
										<div class="message">
											<p>Отличный сервис, рекомендую</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item col-xs-6">
							<div class="review">
								<div class="item">
									<div class="logo"><div class="avatar" style="background-image: url();"></div></div>
									<div class="text">
										<h6>Андрей Бустер</h6>
										<div class="theme">Буст аккаунта Dota2</div>
										<div class="rating r-4"><i></i><i></i><i></i><i></i><i></i></div>
										<div class="message">
											<p>Отличный сервис, рекомендую</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<i class="clear"></i>
			</div>
			<div class="seo-text">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores mollitia quidem iste itaque neque, et reiciendis, possimus tempore placeat. Explicabo vel ipsam quaerat debitis hic aliquam ut neque laboriosam, non.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel accusamus quas, suscipit veritatis, vitae veniam illo praesentium tempore sit, at cupiditate! Vero recusandae, ratione esse assumenda voluptate in praesentium eaque!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, explicabo sunt. Explicabo neque eveniet, similique voluptate vitae, accusamus quam odio dicta veritatis debitis fugiat quas, consectetur incidunt tempore! Omnis, voluptas.
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores mollitia quidem iste itaque neque, et reiciendis, possimus tempore placeat. Explicabo vel ipsam quaerat debitis hic aliquam ut neque laboriosam, non.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel accusamus quas, suscipit veritatis, vitae veniam illo praesentium tempore sit, at cupiditate! Vero recusandae, ratione esse assumenda voluptate in praesentium eaque!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, explicabo sunt. Explicabo neque eveniet, similique voluptate vitae, accusamus quam odio dicta veritatis debitis fugiat quas, consectetur incidunt tempore! Omnis, voluptas.
			</div>
		</div>
	</section>
</main>

<div class="modal fade heroes-select-modal" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-lg" role="document"> 
		<div class="popup-wrapper"> 
			<div class="popup-header"> 
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"></button> 
				<h4 class="popup-name">Выбор героев</h4> 
			</div> 
			<div class="popup-body">
			 	<div class="popup-heroes-select">
					<div class="tabs--wrapper">
						<div class="tabs--tab active">
							<div class="hero-select">
								<div class="hero-column col-xs-4 col-sm-4">
									<div class="hero-header"><h6>Сила</h6></div>
									<div class="hero-list">
										<?php for($x=0;$x<30;$x++): ?>
											<label class="hero-box">
												<input type="checkbox">
												<i class="image" style="background-image: url('public/img/abba.jpg');"></i>
											</label>
										<?php endfor; ?>
									</div>
								</div>
								<div class="hero-column col-xs-4 col-sm-4">
									<div class="hero-header"><h6>Ловкость</h6></div>
									<div class="hero-list">
										<?php for($x=0;$x<30;$x++): ?>
											<label class="hero-box">
												<input type="checkbox">
												<i class="image" style="background-image: url('public/img/abba.jpg');"></i>
											</label>
										<?php endfor; ?>
									</div>
								</div>
								<div class="hero-column col-xs-4 col-sm-4">
									<div class="hero-header"><h6>Интеллект</h6></div>
									<div class="hero-list">
										<?php for($x=0;$x<30;$x++): ?>
											<label class="hero-box">
												<input type="checkbox">
												<i class="image" style="background-image: url('public/img/abba.jpg');"></i>
											</label>
										<?php endfor; ?>
									</div>
								</div>
							</div>
						</div>
					</div>				 		
			 	</div>
			</div> 
		</div> 
	</div>
</div>