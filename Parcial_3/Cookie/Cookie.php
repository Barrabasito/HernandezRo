<?php
$fechaHoy=date('Y/m/d H:i:s');
$siguienteSemana=time() +(7 * 24 * 60 *60);
$fechaExpira=date('Y/m/d H:i:s', $siguienteSemana)."<br>";

echo '<b>Fecha de creacion de cookie: </b>'.$fechaHoy.'<br>';
echo '<b>Fecha de vencimiento de cookie: </b>'.$fechaExpira.'<br>';

setcookie("UltimaVisita",$fechaHoy,time()+(7 * 24 * 60 *60));

setcookie("UltimaVisita","",time()-3600)
?>