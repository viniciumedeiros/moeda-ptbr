<?php
// Recebe o parametro $numero
// Existe outra maneira muito mais fácil
// Mas o objetivo e trabalhar seus conhecimentos
function moeda($numero) { 
	if(strpos($numero,'.')!='') {
		$var=explode('.',$numero);
		if(strlen($var[0])==4) {
			$parte1=substr($var[0],0,1);
			$parte2=substr($var[0],1,3);
			if(strlen($var[1])<2) {
				$formatado=$parte1.'.'.$parte2.','.$var[1].'0';
			}else {
				$formatado=$parte1.'.'.$parte2.','.$var[1];
			}
		}
		elseif(strlen($var[0])==5) {
			$parte1=substr($var[0],0,2);
			$parte2=substr($var[0],2,3);
			if(strlen($var[1])<2) {
				$formatado=$parte1.'.'.$parte2.','.$var[1].'0';
			}
			else {
				$formatado=$parte1.'.'.$parte2.','.$var[1];
			}
		}
		elseif(strlen($var[0])==6) {
			$parte1=substr($var[0],0,3);
			$parte2=substr($var[0],3,3);
			if(strlen($var[1])<2) {
				$formatado=$parte1.'.'.$parte2.','.$var[1].'0';
			}
			else {
				$formatado=$parte1.'.'.$parte2.','.$var[1];
			}
		}
		elseif(strlen($var[0])==7) {
			$parte1=substr($var[0],0,1);
			$parte2=substr($var[0],1,3);
			$parte3=substr($var[0],4,3);
			if(strlen($var[1])<2) {
				$formatado=$parte1.'.'.$parte2.'.'.$parte3.','.$var[1].'0';
			}
			else {
				$formatado=$parte1.'.'.$parte2.'.'.$parte3.','.$var[1];
			}
		}
		elseif(strlen($var[0])==8) {
			$parte1=substr($var[0],0,2);
		  $parte2=substr($var[0],2,3);
			$parte3=substr($var[0],5,3);
			if(strlen($var[1])<2){
				$formatado=$parte1.'.'.$parte2.'.'.$parte3.','.$var[1].'0';
			}else{
				$formatado=$parte1.'.'.$parte2.'.'.$parte3.','.$var[1];
			}
		}
		elseif(strlen($var[0])==9) {
			$parte1=substr($var[0],0,3);
			$parte2=substr($var[0],3,3);
			$parte3=substr($var[0],6,3);
			if(strlen($var[1])<2) {
				$formatado=$parte1.'.'.$parte2.'.'.$parte3.','.$var[1].'0';
			}
			else {
				$formatado=$parte1.'.'.$parte2.'.'.$parte3.','.$var[1];
			}
		}
		elseif(strlen($var[0])==10) {
			$parte1=substr($var[0],0,1);
			$parte2=substr($var[0],1,3);
			$parte3=substr($var[0],4,3);
			$parte4=substr($var[0],7,3);
			if(strlen($var[1])<2) {
				$formatado=$parte1.'.'.$parte2.'.'.$parte3.'.'.$parte4.','.$var[1].'0';
			}
			else {
				$formatado=$parte1.'.'.$parte2.'.'.$parte3.'.'.$parte4.','.$var[1];
			}
		}
		else {
			if(strlen($var[1])<2) {
				$formatado=$var[0].','.$var[1].'0';
			}
			else {
				$formatado=$var[0].','.$var[1];
			}
		}
	}
	else {
		$var=$numero;
		if(strlen($var)==4) {
			$parte1=substr($var,0,1);
	    $parte2=substr($var,1,3);
			$formatado=$parte1.'.'.$parte2.','.'00';
		} 
		elseif(strlen($var)==5) {
			$parte1=substr($var,0,2);
	    $parte2=substr($var,2,3);
			$formatado=$parte1.'.'.$parte2.','.'00';
		}
		elseif(strlen($var)==6) {
			$parte1=substr($var,0,3);
	    $parte2=substr($var,3,3);
			$formatado=$parte1.'.'.$parte2.','.'00';
		}
		elseif(strlen($var)==7) {
			$parte1=substr($var,0,1);
	    $parte2=substr($var,1,3);
	    $parte3=substr($var,4,3);
			$formatado=$parte1.'.'.$parte2.'.'.$parte3.','.'00';
		}
		elseif(strlen($var)==8) {
			$parte1=substr($var,0,2);
	    $parte2=substr($var,2,3);
	    $parte3=substr($var,5,3);
			$formatado=$parte1.'.'.$parte2.'.'.$parte3.','.'00';
		}
		elseif(strlen($var)==9) {
			$parte1=substr($var,0,3);
	    $parte2=substr($var,3,3);
	    $parte3=substr($var,6,3);
			$formatado=$parte1.'.'.$parte2.'.'.$parte3.','.'00';
		}
		elseif(strlen($var)==10) {
			$parte1=substr($var,0,1);
	    $parte2=substr($var,1,3);
	    $parte3=substr($var,4,3);
	    $parte4=substr($var,7,3);
			$formatado=$parte1.'.'.$parte2.'.'.$parte3.'.'.$parte4.','.'00';
		}
		else {
			$formatado=$var.','.'00';
		}
	}
	return $formatado;
}
?>