<form action="" method="post" enctype="multipart/form-data" class="panel-admin">
	<h3 class="<?=$h3Error; ?>"><?=$h3;?></h3>
	<label for="imageDog">Добавить изображение</label>
	<!-- Чуть меньше 5Мб допуск. -->
	<input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
	<input type="file" name="imageDog" multiple="multiple" id="imageDog" accept="image/jpeg, image/png, image/gif">
	<br>
	<br>
	<!-- <label for="titleDog">Добавить заголовок</label>
	<br> -->
	<input type="text" name="titleDog" id="titleDog" placeholder="Полное имя собаки.">
	<br>
	<br>
	<!-- <label for="descriptionDog">Добавить описание</label>
	<br> -->
	<textarea style="overflow: hidden;" name="descriptionDog" id="descriptionDog" cols="56" rows="8" placeholder="Добавить титулы и общее описание..."></textarea>
	<br>
	<br>
	<input type="submit" name="uploadDogImage" value="Загрузить">
</form>

