<?php 


$pedro = new mysqli("localhost","root","","dba");

if ($pedro) {
      echo "bien conectado";
  }else{
  	echo "mal conectado";
  }


?>