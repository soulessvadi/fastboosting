<main class="statistics-page normalize">

	<section class="breadcrumbs">
		<div class="container">
			<span><a href="home">Главная</a></span>
			<span>Статистика проекта</span>			
		</div>
	</section>

	<section class="statistics--block">
		<div class="container">
			<div class="statistics--content">
				<h1 class="title">Статистика проекта</h1>
				<div class="row">
					<div class="col-xs-4">
						<div class="statistics--item counter">
							<h5 class="subtitle txt-blue">453</h5>
							<h6 class="description">Всего <i class="break-850"></i> бустеров</h6>
						</div>
					</div>
					<div class="col-xs-4">
						<div class="statistics--item counter">
							<h5 class="subtitle txt-white">14742</h5>
							<h6 class="description">Выполненых <i class="break-850"></i> заказов</h6>
						</div>
					</div>
					<div class="col-xs-4">
						<div class="statistics--item counter">
							<h5 class="subtitle"><a href="javascript:void(0)" class="btn btn-red runner">ПРОСМОТРЕТЬ</a></h5>
							<h6 class="description">Последний <i class="break-850"></i> отзыв</h6>
						</div>
					</div>				
				</div>				
			</div>
			<div class="statistics--tabs">
				<div class="statistics--triggers">
					<h4>Выбор игры для отображения статистики</h4>
					<div class="games-list--triggers">
						<div class="flex">
							<?php foreach($gameslist as $i => $game): ?>
							<div class="columns item <?= !$i ? 'active' : '' ?>">
								<a href="javascript:void(0)" data-tab="<?= $i ?>" data-togglable="false">
									<img src="public/img/games/<?= $game['img'] ?>">
								</a>
							</div>
							<?php endforeach; ?>					
						</div>
					</div>					
				</div>

				<div class="statistics--toggles">
					<div class="games-list--wrapper">
						<?php foreach($gameslist as $i => $game): ?>
							<div class="games-list--tab <?= !$i ? 'active' : '' ?>" data-tab="<?= $i ?>">
								<div class="item">
									<h4 class="title">СТАТИСТИКА DOTA2 (<?= $i + 1 ?>)</h4>
									<div class="statistics--content">
										<div class="row">
											<div class="col-xs-4">
												<div class="statistics--item counter">
													<h5 class="subtitle txt-blue">453</h5>
													<h6 class="description">Всего <i class="break-850"></i> бустеров</h6>
												</div>
											</div>
											<div class="col-xs-4">
												<div class="statistics--item counter">
													<h5 class="subtitle txt-white">14742</h5>
													<h6 class="description">Выполненых <i class="break-850"></i> заказов</h6>
												</div>
											</div>
											<div class="col-xs-4">
												<div class="statistics--item counter">
													<h5 class="subtitle txt-red">234</h5>
													<h6 class="description">За последнюю <i class="break-850"></i> неделю</h6>
												</div>
											</div>				
										</div>	
										<div class="row">
											<div class="col-xs-12 col-sm-12 col-md-6">
												<div class="statistics--item">
													<h6 class="subtitle">Топ 5 бустеров</h6>
													<div class="top-boosters--table">
														<table>
															<tr class="header">
																<td>Место</td>
																<td class="wide center-500">Никнеим</td>
																<td>Рейтинг</td>
																<td>Статистика</td>
															</tr>
															<tr class="body">
																<td><span class="number n1">1</span></td>
																<td class="wide center-500"><span class="nickname">Nickname</span></td>
																<td>5700</td>
																<td><div class="rating r-3"><i></i><i></i><i></i><i></i><i></i></div></td>
															</tr>
															<tr class="body">
																<td><span class="number n2">2</span></td>
																<td class="wide center-500"><span class="nickname">Nickname</span></td>
																<td>5700</td>
																<td><div class="rating r-4"><i></i><i></i><i></i><i></i><i></i></div></td>
															</tr>
															<tr class="body">
																<td><span class="number n3">3</span></td>
																<td class="wide center-500"><span class="nickname">Nickname</span></td>
																<td>5700</td>
																<td><div class="rating r-5"><i></i><i></i><i></i><i></i><i></i></div></td>
															</tr>
															<tr class="body">
																<td><span class="number n4">4</span></td>
																<td class="wide center-500"><span class="nickname">Nickname</span></td>
																<td>5700</td>
																<td><div class="rating r-5"><i></i><i></i><i></i><i></i><i></i></div></td>
															</tr>
															<tr class="body">
																<td><span class="number n5">5</span></td>
																<td class="wide center-500"><span class="nickname">Nickname</span></td>
																<td>5700</td>
																<td><div class="rating r-2"><i></i><i></i><i></i><i></i><i></i></div></td>
															</tr>
														</table>
													</div>													
												</div>
											</div>
											<div class="col-xs-12 col-sm-12 col-md-6">
												<div class="statistics--item">
													<h6 class="subtitle">Последние 5 завершенных заказов</h6>
													<div class="top-boosters--table">
														<table>
															<tr class="header">
																<td></td>
																<td class="wide center-500">Название заказа</td>
																<td>Бустер</td>
																<td>Рейтинг</td>
															</tr>
															<tr class="body">
																<td><img src="public/img/ranks/rank1s.png" class="rank"></td>
																<td class="wide center-500">Буст медали Dota2</td>
																<td><span class="booster">Nickname</span></td>
																<td><div class="rating r-5"><i></i><i></i><i></i><i></i><i></i></div></td>
															</tr>
															<tr class="body">
																<td><img src="public/img/ranks/rank1s.png" class="rank"></td>
																<td class="wide center-500">Буст медали Dota2</td>
																<td><span class="booster">Nickname</span></td>
																<td><div class="rating r-4"><i></i><i></i><i></i><i></i><i></i></div></td>
															</tr>
															<tr class="body">
																<td><img src="public/img/ranks/rank1s.png" class="rank"></td>
																<td class="wide center-500">Буст медали Dota2</td>
																<td><span class="booster">Nickname</span></td>
																<td><div class="rating r-1"><i></i><i></i><i></i><i></i><i></i></div></td>
															</tr>
															<tr class="body">
																<td><img src="public/img/ranks/rank1s.png" class="rank"></td>
																<td class="wide center-500">Буст медали Dota2</td>
																<td><span class="booster">Nickname</span></td>
																<td><div class="rating r-3"><i></i><i></i><i></i><i></i><i></i></div></td>
															</tr>
															<tr class="body">
																<td><img src="public/img/ranks/rank1s.png" class="rank"></td>
																<td class="wide center-500">Буст медали Dota2</td>
																<td><span class="booster">Nickname</span></td>
																<td><div class="rating r-5"><i></i><i></i><i></i><i></i><i></i></div></td>
															</tr>
														</table>
													</div>	
												</div>
											</div>
										</div>			
									</div>
								</div>
							</div>
						<?php endforeach; ?>
					</div>					
				</div>

			</div>
		</div>
		<div class="container">
			<div class="statistics--content">
				<div class="row">
					<div class="col-xs-12">
						<div class="statistics--item chart">
							<h6 class="subtitle">Топ 5 последних текущих заказов</h6>
							<div class="last-orders--list flex">
								<div class="column item">
									<div class="pretend-as-table">
										<div class="cell">
											<div class="logo">
												<img src="public/img/games/logo1.png" alt="">
											</div>
										</div>
										<div class="text">
											<h6>Калибровка аккаунта</h6>
											<span class="user">Voodoo Savage</span>
										</div>
									</div>
								</div>
								<div class="column item">
									<div class="pretend-as-table">
										<div class="cell">
											<div class="logo">
												<img src="public/img/games/logo1.png" alt="">
											</div>
										</div>
										<div class="text">
											<h6>Буст MMR</h6>
											<span class="user">Voodoo Savage</span>
										</div>
									</div>
								</div>
								<div class="column item">
									<div class="pretend-as-table">
										<div class="cell">
											<div class="logo">
												<img src="public/img/games/logo2.png" alt="">
											</div>
										</div>
										<div class="text">
											<h6>Повышение ранга</h6>
											<span class="user">Voodoo Savage</span>
										</div>
									</div>
								</div>
								<div class="column item">
									<div class="pretend-as-table">
										<div class="cell">
											<div class="logo">
												<img src="public/img/games/logo3.png" alt="">
											</div>
										</div>
										<div class="text">
											<h6>Зверская прокачка статы</h6>
											<span class="user">Voodoo Savage</span>
										</div>
									</div>
								</div>
								<div class="column item">
									<div class="pretend-as-table">
										<div class="cell">
											<div class="logo">
												<img src="public/img/games/logo1.png" alt="">
											</div>
										</div>
										<div class="text">
											<h6>Калибровка аккаунта</h6>
											<span class="user">Voodoo Savage</span>
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
