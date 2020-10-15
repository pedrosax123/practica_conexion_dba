<?php 


$pedro = new mysqli("localhots","root","","dba");

if ($pedro) {
      echo "bien conectado";
  }else{
  	echo "mal conectado";
  }


?>