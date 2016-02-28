<?php if (isset($_POST['sumar'])): ?>
	<?php echo $_POST['hora1'] ?><br>
	<?php echo $_POST['hora2'] ?><br>
	<?php echo sumar($_POST['hora1'],$_POST['hora2']) ?>
<?php endif ?>
<form action="" method="post">
	<input type="text" placeholder="hora 1" name="hora1">
	<input type="text" placeholder="hora 2" name="hora2">
	<input type="submit" name="sumar" value="Sumar">
</form>
<?php 

function sumarHoras($h1,$h2)
{
 	$h1 = explode(":",$h1);
 	$h2 = explode(":",$h2);

 	$horas = $h1[0]+$h2[0];
 	$minutos = $h1[1]+$h2[1];
 	if ($minutos>=60) {
 		$minutos = $minutos - 60;
 		$horas++;
 	}
 	$segundos = $h1[2]+$h2[2];
 	if ($segundos>=60) {
 		$segundos = $segundos - 60;
 		$minutos++;
 	}
 	if (strlen($horas)==1) {
 		$horas = '0'.$horas;
 	}
 	if (strlen($minutos)==1) {
 		$minutos = '0'.$minutos;
 	}
 	if (strlen($segundos)==1) {
 		$segundos = '0'.$segundos;
 	}
 	return $horas.":".$minutos.":".$segundos;
}