<?php // Контроллер
$userId = $_COOKIE['user_id'];

if ( isset($_COOKIE['puppy_is_reserved'][$userId]) ) 
{

	$yourLeashTitle = 'Ваш поводок:';

	if (isset($_POST['to_refuse_a_puppy']))
	{	 
		$unserializeReserveCookie = unserialize($_COOKIE['puppy_is_reserved']);
		// var_dump($unserializeReserveCookie);
		foreach($unserializeReserveCookie[$userId] as $id => $array)
		{

			//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
			
				if ($_POST['dog_id']==$dog)
				{
					// echo $value;
					db_delete_reserve($dog["name"], $dog["phone"], $dog["email"], $_POST['dog_id']);
					// db_delete_reserve_by_id($array['id_of_reserve'], $array['name'], $array['phone'], $array['email'], $_POST['dog_id']);
					
					unset($unserializeReserveCookie[$id]);
					// Если в куки резерва щенка нечего нет, то удалить этот куки.
					if ($unserializeReserveCookie==array())
					{
						setcookie('puppy_is_reserved', '', time()-1);
						// refresh();
					}
					else
					{
						$serializeArrayInfoAboutReserve = serialize($unserializeReserveCookie);
						setcookie('puppy_is_reserved', $serializeArrayInfoAboutReserve, time()+2592000);
						// refresh();					
					}
				}
			
		}	
	}
}
else
{
	$yourLeashTitle = 'На вашем поводке не зарезервировано ни одного щенка!';
}

// unset cookies
// if (isset($_SERVER['HTTP_COOKIE'])) {
//     $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
//     foreach($cookies as $cookie) {
//         $parts = explode('=', $cookie);
//         $name = trim($parts[0]);
//         setcookie($name, '', time()-1000);
//         setcookie($name, '', time()-1000, '/');
//     }
// }

require_once('../templates/your_leash.tpl');
// echo "<pre>";
// echo "COOKIE['puppy_is_reserved']:";
// $unserializeCookie = unserialize($_COOKIE['puppy_is_reserved']);
// var_dump($unserializeCookie);
// echo "</pre>";

?>