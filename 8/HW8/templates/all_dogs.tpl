<figure class="card-dog">
		<p>
			<h4><?=$currentTitle; ?></h4>

			<?php 
				// Если это сессия админа,
				if ( isset($_SESSION['admin']) ) { 
			?>
					<!-- то вставляем кнопку. -->
					<form action="" method="post">
						<input type="number" hidden name="idThisCard" value="<?=$currentIdDog; ?>">
						<input type="text" hidden name="dirPageDog" value="<?=$dirPageDog; ?>">
						<input type="submit" name="deleteThisCard" value="Удалить карточку">
					</form>
					<br>
					<br>
			<?php
					// Если нажата кнопка удалить эту карточку.
					// print_r($_POST['deleteThisCard']);
					if ( isset($_POST['deleteThisCard']) ) {
						// Берется id этой карты.
						$idThisCard = $_POST['idThisCard'];
						// Удаляется запись из базы данных и страницу собаки!!!!!!!!!!!!!!!!!!
						// Берем дирректорию файла шаблона собаки.
						$dirPageDog = $_REQUEST['dirPageDog'];
						db_delete_card_of_dog($idThisCard, $dirPageDog);
						// var_dump($idThisCard);
						refresh_index();
					}	
				}
				// echo "<pre>";
				// var_dump($dirPageDog);
				// echo "</pre>";
			?>

			<a href="<?=$dirPageDog; ?>">
				<img src="<?=$currentPathMiniImage; ?>" alt="<?=$currentDescription; ?>" title="<?=$currentTitle; ?>">
			</a>
		</p>
		<figcaption><?=$currentDescription; ?></figcaption>
</figure>