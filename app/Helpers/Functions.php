<?php 

function status($num){
	$status = array(0=>'Pasif',
					1=>'Aktif',);

	return $status[$num];
}
?>