<?php
include 'config/config.php';
require_once 'config/Results.php';

$results = new Results;

?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Акция KimBao</title>
	<link rel="stylesheet" href="<?=$site?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=$site?>assets/css/style.css">
</head>
<body>
	<div class="bg d-flex justify-content-center align-items-center">
		<?php if (isset($_POST['send_promo'])) { ?>
			<div class="bg-text text-center d-flex justify-content-center align-items-center"><p>
				<?php include 'send_promo.php'; ?> </p>
			</div> 
		<?php }  ?>
			</div>
			<!-- БЛОК С ФОРМОЙ -->
			<div class="form-block d-flex justify-content-center align-items-center">
				<form class="form-width" action="index.php" method="POST">
					<div class="form-group">
						<label for="yourname">Ваше имя</label>
						<input type="text" name="username" class="form-control" id="yourname" aria-describedby="nameHelp" placeholder="Введите имя" required>
					</div>
					<div class="form-group">
						<label for="phonenumber">Введите номер телефона</label>
						<input type="tel" name="userphone" class="form-control" id="phonenumber" placeholder="Номер телефона" required>
					</div>
					<div class="form-group">
						<label for="phonenumber">Промокод на чеке</label>
						<input type="text" name="userpromo" class="form-control" id="phonenumber" placeholder="Введите промокод" required>
						<small id="formHelp" class="form-text">Нажимая кнопку Отправить я соглашаюсь с условиями проведения акции</small>
					</div>
					<button name="send_promo" type="submit" class="btn btn-light">Отправить</button>
					<!-- Обработчик формы -->	
				</form>
			</div>
			<!-- БЛОК С УСЛОВИЯМИ АКЦИИ -->
			<div class="action-block d-flex justify-content-center align-items-center">
				<div class="action-text">
					<h5 class="text-center">Большой розыгрыш от "КИМ БАО"</h5>
					<p class="mb-1 text-justify">С 1 октября по 24 декабря совершайте заказ на сумму от 500 рублей, регистрируйте чек и получайте возможность выиграть ЭЛЕКТРО МОТОРОЛЛЕР SMARTA TX-10-3 или один из дополнительных призов:</p>
					<ol>
						<li>Беспроводную клавиатуру</li>
						<li>Беспроводную мышь</li>
						<li>Электрические весы</li>
						<li>Электрический штопор</li>
						<li>Беспроводную настольную лампу</li>
						<li>Рюкзак</li>
						<li>Электрический увлажнитель воздуха для дома</li>
						<li>Электросушилку для обуви</li>
						<li>Беспроводные наушники</li>
						<li>Электрическую зубную щётку</li>
						<li>Беспроводную зарядку</li>
					</ol>				
					<p class="mb-1 text-justify">Подарки дарим каждый четверг. Розыгрыш главного приза - 24 декабря. Обязательно сохраните чек, именно этот документ подтвердит Ваше участие в акции. 
БОЛЬШЕ ЧЕКОВ - БОЛЬШЕ ШАНСОВ!</p>
					
					</ul>		

						<button type="button" class="btn btn-light" data-toggle="modal" data-target="#aboutAction">
							Условия акции
						</button>
						<!-- Modal -->
						<div class="modal fade" id="aboutAction" tabindex="-1" role="dialog" aria-labelledby="aboutActionTitle" aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content modal-bg">
									<div class="modal-header">
										<h5 class="modal-title" id="aboutActionTitle">Условия акции</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body modal-body-style">
										Подробные условия участия в Акции:
										<ol>
											<li class="text-justify"> Оформить заказ еды на сумму от 500 рублей в кафе Ким-Бао или <a class="goodlink" href="https://goodcity.com.ru/catalog/kim-bao">на сайте</a>. </li>
											<li class="text-justify">Сохранить чек, для подтверждения участия в акции.</li>
											<li class="text-justify">Перейти по ссылке и зарегистрировать номер участника <a class="goodlink" href="https://promo.goodcity.com.ru">promo.goodcity.com.ru</a> (заполнить 3 поля)
												<ul>
													<li>Номер участника – расположен на чеке</li>
													<li>Имя – чтобы мы знали, как к Вам обращаться</li>
													<li>Номер телефона – чтобы мы могли Вам позвонить</li>
												</ul>
											</li>
											<li class="text-justify">Победители будут определяться каждый четверг с помощью сервиса random.org в прямом эфире в Instagram. Розыгрыш главного приза состоится 24 декабря.</li>
											<li class="text-justify">Принимать участие в акции могут физические лица, достигшие 18-ти лет. Несовершеннолетние лица, достигшие возраста 14 лет, вправе принять участие в Розыгрыше с согласия своих законных представителей, и получить приз только через своих законных представителей.</li>
											<li class="text-justify">Под подарками подразумевается их продажа за 1 руб.</li>
											<li class="text-justify">Сотрудникам компании запрещено принимать участие в настоящей Акции.</li>
										</ol>

									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-light" data-dismiss="modal">Закрыть</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</body>
			<script src="<?=$site?>assets/js/jquery-3.5.1.min.js"></script>
			<script src="<?=$site?>assets/js/bootstrap.bundle.min.js"></script>
			</html>