<?php
  $p = $_POST["prs"];							// получаем параметры
  //echo $p;
  //$cs = "maxima --very-quiet --batch-string=\"ts_web_server_command : [ts_command = ts_solve_informaltask, ts_parameters=\\\" $p \\\"]; batch(\\\"/home/oldnick/TaskSolver/ts-web.mac\\\");\"";
  $cs = "maxima --very-quiet --batch-string=\"ts_web_server_command : [ts_command = ts_solve_informaltask, ts_parameters=\\\" $p \\\"]; load(\\\"/opt/ts/ts_web_all.LISP\\\");\"";
  //echo $cs;
  $output = shell_exec($cs);					// выполняем команду
  $spos = strpos($output, '(str-html)');		// ищем начальную метку
  $epos = strrpos($output, '(end-html)');		// ищем конечную метку
  $err_m = ' ';
if (($spos == false) or ($epos == false))		// если возникла ошибка и максима вернула непонятно что
{
	//printf('<body><pre>%s</pre></body>', $output);
	$err_m = '!ERROR!';
	printf('<em>Извините, возникла ошибка в работе программы. Данные об ошибке сохранены и будут обработаны.</em>');
	$date = date('Y-m-d H:i:s (T)');
	$f = fopen('logs/errors.txt', 'a');
	if (!empty($f)) {
		$err  = "[error] $date \r\n prs = $p \r\n command string = $cs \r\n output = $output \r\n\r\n";
		fwrite($f, $err);
		fclose($f);
	} else {
		printf('<em>Не удалось открыть файл для записи ошибки.</em>');
	}
}
else 											// если возвращены корректные данные
{
	$output = substr($output, $spos+10, $epos-$spos-10);
	echo $output;
};
$f = fopen('logs/solves.txt', 'a');
if (!empty($f)) {
	$err  = "$date $err_m \r\n";
	fwrite($f, $err);
	fclose($f);
};
?>
