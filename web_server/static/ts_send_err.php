<?php
  $p = $_POST["prs"];							// получаем параметры
  $m = $_POST["emsg"];
	//printf('<em>Извините, возникла ошибка в работе программы. Данные об ошибке сохранены и будут обработаны.</em>');
	$date = date('Y-m-d H:i:s (T)');
	$f = fopen('user_errors.txt', 'a');
	if (!empty($f)) {
		$err  = "[error] $date \r\n $m \r\n prs = $p\r\n\r\n";
		fwrite($f, $err);
		fclose($f);
	}
?>
