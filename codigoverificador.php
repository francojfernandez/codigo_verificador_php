<?php
$Numero = '0123456789';

$j=strlen($Numero);
$par=0;$impar=0;
for ($i=0; $i < $j ; $i++) { 
	if ($i%2==0){
		$par=$par+$Numero[$i];
	}else{
		$impar=$impar+$Numero[$i];

	}
	
}

$par=$par*3;
$suma=$par+$impar;
for ($i=0; $i < 9; $i++) {
	if ( fmod(($suma +$i),10) == 0) {
        $verificador=$i;
    }
}

$digito = 10 - ($suma - (intval($suma / 10) * 10));
if ($digito == 10){
	$digito = 0;
}
echo $Numero.$digito;

?>