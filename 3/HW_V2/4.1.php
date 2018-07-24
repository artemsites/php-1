<?php
/* Установка внутренней кодировки в UTF-8 */
// mb_internal_encoding("UTF-8");
////////////////////////////////////////////////////////////////////////////////
echo "<pre><hr>
    4. Объявить массив, индексами которого являются буквы русского языка, а значениями – соответствующие латинские буквосочетания
    (‘а’=> ’a’, ‘б’ => ‘b’, ‘в’ => ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’).
    Написать функцию транслитерации строк.
<br>";
/**
 * 1.Входящую строку сделать массивом. V
 * 2.Заменить все его символы по ключам заданного массива на их значения.
 * 3.Оставить без изменения отстутствующие символы.
 */
////////////////////////////////////////////////////////////////////////////////
$string = "ЧелоБрейк";
print_r( transliterator($string) );

/**
 * Транслитерация строки из рус в анг символы.
 *
 * @param [type] $string - входная строка
 * @param integer $length - длина обрабатываемой строки (по умолчанию вся строка (-1))
 * @return string - транслитерированная строка
 */
function transliterator_srting_rus_to_eng($string, $length = 1) {
    $array_rus_letters = preg_split('~~u', $string, -1, PREG_SPLIT_NO_EMPTY);
    if ($length > 1) {
        $chunks = array_chunk($array_rus_letters, $length);
        foreach ($chunks as $i => $chunk) {
            $chunks[$i] = join('', (array) $chunk);
        }
        $array_rus_letters = $chunks;
    }
    $array_rus_letters; // Здесь лежит готовый массив из русских символов после обработки входной строки $string

	$array_rus_eng_letters = array(
		'а' => 'a', 'б' => 'b', 'в' => 'v',	'г' => 'g', 'д' => 'd', 'е' => 'e',
		'ё' => 'e', 'ж' => 'zh', 'з' => 'z', 'и' => 'i', 'й' => 'y', 'к' => 'k',
		'л' => 'l', 'м' => 'm', 'н' => 'n',	'о' => 'o', 'п' => 'p', 'р' => 'r',
		'с' => 's', 'т' => 't', 'у' => 'u',	'ф' => 'f', 'х' => 'h', 'ц' => 'c',
		'ч' => 'ch', 'ш' => 'sh', 'щ' => 'sch',	'ь' => '\'', 'ы' => 'y', 'ъ' => '\'',
		'э' => 'e', 'ю' => 'yu', 'я' => 'ya',
	
		'А' => 'A', 'Б' => 'B', 'В' => 'V',	'Г' => 'G', 'Д' => 'D', 'Е' => 'E',
		'Ё' => 'E', 'Ж' => 'Zh', 'З' => 'Z',	'И' => 'I', 'Й' => 'Y', 'К' => 'K',
		'Л' => 'L', 'М' => 'M', 'Н' => 'N',	'О' => 'O', 'П' => 'P', 'Р' => 'R',
		'С' => 'S', 'Т' => 'T', 'У' => 'U',	'Ф' => 'F', 'Х' => 'H', 'Ц' => 'C',
		'Ч' => 'Ch', 'Ш' => 'Sh', 'Щ' => 'Sch',	'Ь' => '\'', 'Ы' => 'Y', 'Ъ' => '\'',
		'Э' => 'E', 'Ю' => 'Yu', 'Я' => 'Ya',
    );
    
	foreach($array_rus_letters as $value) {
		if (array_key_exists($value, $array_rus_eng_letters)) {
			$trans_string .= $array_rus_eng_letters[$value];
		}
	}
	return $trans_string;
}
////////////////////////////////////////////////////////////////////////////////
echo "</pre><hr>";
////////////////////////////////////////////////////////////////////////////////