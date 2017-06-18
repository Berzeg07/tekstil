<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<title>Обратная связь</title>
	<?php require_once('includes/header.php'); ?>
</head>
<body>


	<?php require_once('includes/header_top.php'); ?>

	<div class="container">
		<div class="message-box">

			<div class="message-box__title">
				<h2>Заполните форму и мы свяжемся с вами в ближайшее время</h2>
				<span><b>*</b> отмечены поля обязательные к заполнению</span>
			</div>

			<form action="#">
				<div class="message-box__form">

					<div class="message-box__form_item message-box__form_item1">
						<span>* Имя</span>
						<input type="text">
						<span>* Email</span>
						<input type="text">
						<span>* Номер телефона</span>
						<input type="text">
					</div>

					<div class="message-box__form_item message-box__form_item2">
						<span>Сопроводительное письмо</span>
						<textarea></textarea>
					</div>
					<div class="clear"></div>

				</div>




			</div>
			<div class="message-box__form2">

				<div class="message-box__form2_item item-left">

					<p>
						если затрудняетесь в выборе, мы поможем<br/>
						подобрать товар по наиболее важным для вас критериям!
					</p>
					<span class="mess-slogan">Помощь консультанта совершенно бесплатно</span>

					<div class="message-box__form2_radio">
						<label>
							<input class="checkbox" type="radio" name="form-radio" checked>
							<span class="checkbox-custom"></span>
							<span class="label">Хочу получить консультацию </span>
						</label><br/>
						<label>
							<input class="checkbox" type="radio" name="form-radio">
							<span class="checkbox-custom"></span>
							<span class="label">Нет, спасибо</span>
						</label>
					</div>

				</div>

				<div class="message-box__form2_item item-right">
					<button>Отправить</button>
				</div>
				<div class="clear"></div>

			</div>
		</form>
	</div>




</body>
</html>
