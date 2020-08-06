<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<meta http-equiv="Content-Language" content="ru">
</head>
<?php
$wcmd = $_GET['wcmd'];
if($wcmd == FALSE)
{
   //echo 'wcmd is FALSE';
   $wcmd = 'show_informaltasks_all';
}
if($wcmd == 'show_informaltasks_all')
{
   //echo 'wcmd is show_informaltasks_all';
   $output = shell_exec('maxima --very-quiet --batch-string="ts_web_server_command : [ts_command = ts_show_informaltasks_all]; batch(\"/home/oldnick/TaskSolver/ts-web.mac\");"');
}
if($wcmd == 'show_informaltask')
{
   //echo 'wcmd is show_informaltask';
   $sname = $_GET['sname'];
   $s = sprintf('maxima --very-quiet --batch-string="ts_web_server_command : [ts_command = ts_show_informaltask, ts_shortname = \"%s\"]; batch(\"/home/oldnick/TaskSolver/ts-web.mac\");"', $sname);
   //echo $s;
   $output = shell_exec($s);
}
$spos = strpos($output, '(str-html)');
//echo $spos;
$epos = strrpos($output, '(end-html)');
//echo $epos;
if (($spos == false) or ($epos == false))
{
	printf('<body><pre>%s</pre></body>', $output);
}
else
{
	$output = substr($output, $spos+10, $epos-$spos-10);
	echo $output;
}
?>
</html>
