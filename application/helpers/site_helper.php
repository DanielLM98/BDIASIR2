<?php
 function grabar($st) {
   $handle=fopen("/tmp/mifile","a")or die ("No puedo abrir file");
   #$n=fwrite($handle,$st . "\n");
   $n=fprintf($handle,"%s\n",$st);
   fclose($handle);
   return $n; 
 }
 function mostrar_datos_file($st,$car) {
   $string = file_get_contents($st);
   $stringChop=rtrim($string);
   $partes=explode($car,$stringChop);
   return $partes; 
 }
function registros($name_file,$sep_reg) {
   $array = array();
   $file=file_get_contents($name_file);
   $stringChop=rtrim($file);
   $array=explode($sep_reg,$stringChop);
   return $array;
}
function val_dist_campo($name_file,$sep,$campo,$sep_reg) {
   $array = array();
   $file=file_get_contents($name_file);
   $stringChop=rtrim($file);
   $partes=explode($sep_reg,$stringChop);
   foreach($partes as $k => $v){
      $campos=explode($sep,$v);
      $array[$campos[$campo]]=$campos[$campo];
   }
   return $array;
}
function select_val_campo($partes,$c1,$category,$c6,$sep) {
  $array = array();
  foreach($partes as $k => $v) {
     $campos=explode($sep,$v);
     if($c6!=-1 && ($campos[$c6]==$category)) {
       array_push($array,$campos[$c1]);
     }
     else {
       if($c6==-1 && ($campos[$c1]==$category)) {
         array_push($array,$campos[$c1]);
       }
     }
  }
  return $array;
}

function getSslPage($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_USERAGENT, true);
    # # curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_HEADER, 'Content-Type: application/json');
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_REFERER, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}
?>
