<?php
function faktorial($n){
	if($n==1){
		return $n;
	}else{
		return $n * faktorial($n-1);
	}
}
$nilai =3;
echo "Hasil faktorial ".$nilai." = ".faktorial($nilai);
?>