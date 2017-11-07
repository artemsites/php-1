<!DOCTYPE html>
<html>
<head>
	<title>ДЗ php-1 урок 4</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<h1>ДЗ по PHP-1 урок 4</h1>
	<h2>Задание #1.</h2>
	<p>
		ТЗ:
		<br>
		Создать галерею фотографий. Она должна состоять всего из одной странички, на которой пользователь видит все картинки в уменьшенном виде и форму для загрузки нового изображения. При клике на фотографию она должна открыться в браузере в новой вкладке. Размер картинок можно ограничивать с помощью свойства width. При загрузке изображения необходимо делать проверку на тип и размер файла. (Готово.)
	</p>
	<div class="gallery">
		<? include "../templates/gallery.php"; ?>
	</div>
	<form enctype="multipart/form-data" action="" method="POST">
		<p class='gallery__title'>Вы можете загрузить изображение размером не больше 5Мб.</p>
		<!-- Для ограничения размера файла можно использовать. -->
		<!-- <input type="hidden" name="MAX_FILE_SIZE" value="5242880" /> -->
		<label class="buttonForUploads" for="userImage">Выбрать изображение.</label><br>
		<input hidden="" type="file" id="userImage" name="userImage" autofocus multiple accept="image/*,image/jpeg" />
		<br>
		<label class="buttonForSubmit" for="submit">Загрузить.</label><br>
		<input type="submit" hidden="" id='submit' value="Загрузить" />
		<p class='gallery__title'>Информация: <? require_once('../engine/get_image.php');	?></p>
	</form>
<!-- 	<?
		// echo "<pre>";

		// echo 'Отладочная информация:';

		// echo "</pre>";
	?> -->
	<h2>Задание #2.</h2>
	<p>
		ТЗ:
		<br>
		* При загрузке изображения на сервер должна создаваться его уменьшенная копия, а на странице index.php должны выводиться именно копии. На реальных сайтах это активно используется для экономии трафика. При клике на уменьшенное изображение в браузере в новой вкладке должен открываться оригинал изображения. Функция изменения размера картинок дана в исходниках. Вам необходимо суметь встроить её в систему. (Готово.)
	</p>
	
</body>
</html>
