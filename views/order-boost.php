<main class="order-page normalize">
	<section class="breadcrumbs">
		<div class="container">
			<span><a href="home">Главная</a></span>
			<span>Профиль</span>
			<span>Заказы</span>			
		</div>
	</section>
	<section class="mh30"></section>
	<section class="inform">
		<div class="container">

			<div class="col-sm-12 col-md-9">
				<div class="static--wrapper">
					<div class="header">
						<h2>БУСТ АККАУНТА: DOTA2</h2>
					</div>
					<div class="content">
						<div class="order-steps--wrapper">
							<div class="order-steps--row inactive-toggable bordered">
								<div class="row-btn"><button class="inactive-toggle">-</button></div>
								<div class="row-content">
									<div class="row-header"><h6>Выбор качества буста</h6></div>
									<div class="row-body">
										<div class="price-table">
											<div class="price-cell">
												<div class="price-entity">
													<div class="price-cover" style="background-image: url(public/img/order/standard.jpg)"></div>
													<div class="price-body">
														<h6 class="title">STANDART</h6>
														<h6 class="price"><span>$</span>50</h6>
														<ul class="options">
															<li>Опция #1</li>
															<li>Опция #2</li>
															<li class="inactive">x</li>
															<li class="inactive">x</li>
															<li class="inactive">x</li>
															<li class="inactive">x</li>
														</ul>
													</div>
													<div class="price-footer">
														<button class="btn btn-red runner" onclick="$(this).closest('.price-cell').addClass('active').siblings().removeClass('active')">ВЫБРАТЬ</button>
													</div>
												</div>
											</div>
											<div class="price-cell active">
												<div class="price-entity">
													<div class="price-cover" style="background-image: url(public/img/order/gold.jpg)"></div>
													<div class="price-body">
														<h6 class="title">GOLD</h6>
														<h6 class="price"><span>$</span>50</h6>
														<ul class="options">
															<li>Опция #1</li>
															<li>Опция #2</li>
															<li>Опция #3</li>
															<li>Опция #4</li>
															<li class="inactive">x</li>
															<li class="inactive">x</li>
														</ul>
													</div>
													<div class="price-footer">
														<button class="btn btn-red runner" onclick="$(this).closest('.price-cell').addClass('active').siblings().removeClass('active')">ВЫБРАТЬ</button>
													</div>
												</div>
											</div>
											<div class="price-cell">
												<div class="price-entity">
													<div class="price-cover" style="background-image: url(public/img/order/premium.jpg)"></div>
													<div class="price-body">
														<h6 class="title">PREMIUM</h6>
														<h6 class="price"><span>$</span>50</h6>
														<ul class="options">
															<li>Опция #1</li>
															<li>Опция #2</li>
															<li>Опция #3</li>
															<li>Опция #4</li>
															<li>Опция #5</li>
															<li>Опция #6</li>
														</ul>
													</div>
													<div class="price-footer">
														<button class="btn btn-red runner" onclick="$(this).closest('.price-cell').addClass('active').siblings().removeClass('active')">ВЫБРАТЬ</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="order-steps--row inactive-toggable">
								<div class="row-btn"><button class="inactive-toggle">-</button></div>
								<div class="row-content">
									<div class="row-header"><h6>MMR</h6></div>
									<div class="row-body">
										<div class="slider order-slider">
											<div class="slider-inputs left">
												<label>
													<span>Текущий MMR</span>
													<input type="text" value="3500" class="from">
												</label>
											</div>
											<div class="slider-inputs right">
												<label>
													<span>Желаемый MMR</span>
													<input type="text" value="3800" class="to">
												</label>
											</div>
											<div class="slider-toddler">
												<div class="slider--double" data-min="0" data-max="8000" data-start="2400" data-end="6333" data-pips="9"></div>
											</div>											
										</div>
										<div class="row-text">
											<h6>Защита от бана</h6>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo dicta totam accusantium quas nobis quia sequi autem eligendi ea similique commodi neque id quidem eveniet repudiandae ut magni perspiciatis, atque.</p>
											<label class="checkbox-line">
												<span>Я согласен с условиями и готов использовать защиту от бана</span>
												<input type="checkbox" name="box">
												<span class="checkmark"></span>
											</label>
										</div>
									</div>
								</div>
							</div>
							<div class="order-steps--row inactive-toggable">
								<div class="row-btn"><button class="inactive-toggle">-</button></div>
								<div class="row-content">
									<div class="row-header"><h6>Выбор героев</h6></div>
									<div class="row-body"></div>
								</div>
							</div>
							<div class="order-steps--row inactive-toggable">
								<div class="row-btn"><button class="inactive-toggle">-</button></div>
								<div class="row-content">
									<div class="row-header"><h6>Ваш комментарий</h6></div>
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

			<aside class="col-xs-2">
				
			</aside>

		</div>
	</section>
</main>
