<?php
$url = 'http://agenda.uai.cl/clasesRotativa.aspx?codUbicacion=133o147&bannerWidth=0&tamanoLetra=24px&numFilas=600&frecuenciaSegundosHorarios=10&diasAdelanto=0&mostrarFinalizados=false&codUso=53o55o57o60o61o62o63o66o67o69o70';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$output = curl_exec($ch);
curl_close($ch);
$fp = fopen("horario_temp_c.html", "w");
fwrite($fp, $output);
?>